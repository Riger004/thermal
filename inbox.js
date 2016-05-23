var app = require('express')();
var mysql = require('mysql');
var http = require('http').Server(app);
var io = require('socket.io')(http);
require('events').EventEmitter.prototype._maxListeners = 1000000000000000000;

var pool = mysql.createPool({
   connectionLimit : 2000, //important
   host     : 'localhost',
   user     : 'homestead',
   password : 'secret',
   database : 'fiver_a',
   debug    :  false
});

pool.getConnection(function(err, connection) {
  connection.query('DELETE FROM temporary', function (err, result) {
     if (err) throw err;
  });
  connection.release();

});


io.on('connection', function(socket) {


  var temp_input = {'user_id':socket.handshake.query.user_id,'socket_id':socket.id};
  
  console.log(temp_input);
    var user_name = socket.handshake.query.user_id;
    pool.getConnection(function(err, connection) {
      connection.query('INSERT INTO temporary SET ?', temp_input, function(err, result) {
      if (err) throw err;
      });

      var sql = 'SELECT * FROM current_status WHERE user_id = '+connection.escape(user_name)+' LIMIT 1';
      connection.query(sql, function(err, row,fields) {
            if (err) throw err;
          if (row.length==0) {
            var data = {'user_id':user_name,'status':'online'};
            connection.query('INSERT INTO current_status SET ?', data, function(err, result) {
            if (err) throw err;
            });
          }
      });

      connection.release();
    });

  socket.on('set_status',function(msg) {
    
    pool.getConnection(function(err, connection) {
      //connection.query("UPDATE temporary SET status = "+msg.status+" WHERE user_id = "+connection.escape(msg.user_email));
      connection.query('UPDATE current_status SET status = ? WHERE user_id = ?', [msg.status, msg.user_email]);
      console.log(msg.user_email);
      console.log(msg.status);
      connection.release();
    });
  });

  socket.on('get_status',function(msg) {
    pool.getConnection(function(err, connection) {
      var sql = 'SELECT status FROM current_status WHERE user_id = '+connection.escape(msg.user_email)+' LIMIT 1';
      connection.query(sql, function(err, row,fields) {
          if (err) throw err;
        if (row.length!=0) {
        socket.emit('get_status', {'user_email':msg.user_email,'status':row[0].status});
        }
        else {
          console.log('offline');
          socket.emit('get_status', {'user_email':msg.user_email,'status':'offline'});
        }
      });
        connection.release();
    });
  });

  socket.on('get_notification_and_msg_no',function(msg) {
    pool.getConnection(function(err, connection) {
      var sql = 'SELECT * FROM no_of_unreads WHERE user_id = '+connection.escape(msg.user_email);
      connection.query(sql, function(err, rows,fields) {
        //console.log(rows);
        if (err) throw err;
        var no_of_unread_notification = rows[0].no_notifications;
        var no_of_unread_msg = rows[0].no_messages;
        var no_of_unreads = {'notification_no':no_of_unread_notification,'message_no':no_of_unread_msg};

        var sql = 'SELECT * FROM temporary WHERE user_id = ' + connection.escape(msg.user_email);
        connection.query(sql, function(err, rows,fields) {
          if (err) throw err;
          //console.log(`Sending to ${msg.user_email}`);
            if(rows.length!==0) {
              for (var i = 0; i < rows.length; i++) {
                io.sockets.connected[rows[i].socket_id].emit('get_notification_and_msg_no',no_of_unreads);//sending  a specific socket including to itself
              }
            }
        });

        });

        connection.release();
    });
  });


  socket.on('get_user_list',function(msg) {
    pool.getConnection(function(err, connection) {
        var sql = 'SELECT from_user_id FROM new_messages WHERE to_user_id = '+ connection.escape(msg.user_email)+' UNION SELECT to_user_id FROM new_messages WHERE from_user_id = '+ connection.escape(msg.user_email);
        connection.query(sql, function(err, rows,fields) {
          if (err) throw err;
          if(rows.length!==0) {
            socket.emit('out_user_list', rows);
          }
      });
          connection.release();
    });
  });

  socket.on('get_u_msg',function(msg) {
    pool.getConnection(function(err, connection) {
      var sql = 'SELECT * FROM new_messages WHERE (from_user_id = ' + connection.escape(msg.user_email)+' AND to_user_id = '+ connection.escape(msg.o_email)+' ) OR (from_user_id = ' + connection.escape(msg.o_email)+' AND to_user_id = '+ connection.escape(msg.user_email)+' )';
      connection.query(sql, function(err, rows,fields) {
        if (err) throw err;
        if(rows.length!==0) {
          socket.emit('show_messages', rows);
        }
      });
        connection.release();
    });
  });

  socket.on('chat message', function(msg){
    console.log(msg.msg);
    pool.getConnection(function(err, connection) {
      var sql = 'SELECT user_id FROM temporary WHERE user_id = '+connection.escape(msg.To)+" LIMIT 1";
      connection.query(sql, function(err, rows_a,fields) {
        if (err) throw err;
        //console.log(rows_a);

        if(rows_a.length===0) {
          var sql = 'SELECT * FROM no_of_unreads WHERE user_id = '+connection.escape(msg.To);
          connection.query(sql,function(err, rows_b,fields) {
            //var no_of_unread_not = rows_b[0].no_notifications+1;
            var no_of_unread_msg = rows_b[0].no_messages+1;
            //console.log(`Notifications:${no_of_unread_not}`);
            //console.log(`Notifications:${no_of_unread_msg}`);
            //connection.query("UPDATE no_of_unreads SET no_notifications = "+no_of_unread_not+", no_messages = "+no_of_unread_msg+" WHERE user_id = "+connection.escape(msg.To));
            connection.query("UPDATE no_of_unreads SET no_messages = "+no_of_unread_msg+" WHERE user_id = "+connection.escape(msg.To));
        
          });
        console.log(`User ${msg.To} is Offline`);
        }
        else {
          console.log(`User ${msg.To} is Online`);
        }

      });
        connection.release();
    });

    pool.getConnection(function(err, connection) {
      var now = new Date();
      now = new Date(now.toUTCString());
      now = now.toLocaleDateString()+" at "+now.toLocaleTimeString();
      var temp_input = {'from_user_id':msg.From,'to_user_id':msg.To,'main_msg': msg.msg,'created_at':now};
      var msg_input = {'from':msg.From,'to':msg.To,'main_msg': msg.msg,'time':now};
      var sql = 'SELECT * FROM temporary WHERE user_id = ' + connection.escape(msg.From)+' OR user_id = '+ connection.escape(msg.To);
      connection.query(sql, function(err, rows,fields) {
        if (err) throw err;
        //socket.emit('chat message', msg_input); //sending to itself
        if(rows.length!==0) {
          for (var i = 0; i < rows.length; i++) {
            io.sockets.connected[rows[i].socket_id].emit('chat message',msg_input);//sending  a specific socket including to itself
            //socket.broadcast.to(rows[i].socket_id).emit('chat message',msg_input);
          }
        }
      });

      connection.query('INSERT INTO new_messages SET ?', temp_input, function(err, result) {
      if (err) throw err;
      });

      connection.release();
      
    });

  });

  socket.on('get_notification',function(msg) {
    pool.getConnection(function(err, connection) {
      var sql = 'SELECT * FROM notification WHERE to_user_id = ' + connection.escape(msg.user_email);
      connection.query(sql, function(err, rows,fields) {
        if (err) throw err;
        if(rows.length!==0) {
          //console.log(rows);
          socket.emit('get_noti_msg', rows);
        }
      });
        connection.release();
    });
  });

  socket.on('msg_counter_zero',function(msg) {
    pool.getConnection(function(err, connection) {
      connection.query("UPDATE no_of_unreads SET no_messages = "+0+" WHERE user_id = "+connection.escape(msg.user_email));
      var sql = 'SELECT * FROM no_of_unreads WHERE user_id = '+connection.escape(msg.user_email);
      connection.query(sql, function(err, rows,fields) {
        //console.log(rows);
        if (err) throw err;
        var no_of_unread_notification = rows[0].no_notifications;
        var no_of_unread_msg = rows[0].no_messages;
        var no_of_unreads = {'notification_no':no_of_unread_notification,'message_no':no_of_unread_msg};

        var sql = 'SELECT * FROM temporary WHERE user_id = ' + connection.escape(msg.user_email);
        connection.query(sql, function(err, rows,fields) {
          if (err) throw err;
          //console.log(`Sending to ${rows}`);
            if(rows.length!==0) {
              for (var i = 0; i < rows.length; i++) {
                io.sockets.connected[rows[i].socket_id].emit('get_notification_and_msg_no',no_of_unreads);//sending  a specific socket including to itself
              }
            }
          });

        });// connection 1
      
        connection.release();
    });
      //console.log(msg);
  });


  socket.on('noti_counter_zero',function(msg) {
    pool.getConnection(function(err, connection) {
      connection.query("UPDATE no_of_unreads SET no_notifications = "+0+" WHERE user_id = "+connection.escape(msg.user_email));
      var sql = 'SELECT * FROM no_of_unreads WHERE user_id = '+connection.escape(msg.user_email);
      connection.query(sql, function(err, rows,fields) {
        //console.log(rows);
        if (err) throw err;
        var no_of_unread_notification = rows[0].no_notifications;
        var no_of_unread_msg = rows[0].no_messages;
        var no_of_unreads = {'notification_no':no_of_unread_notification,'message_no':no_of_unread_msg};

        var sql = 'SELECT * FROM temporary WHERE user_id = ' + connection.escape(msg.user_email);
        connection.query(sql, function(err, rows,fields) {
          if (err) throw err;
          //console.log(`Sending to ${rows}`);
            if(rows.length!==0) {
              for (var i = 0; i < rows.length; i++) {
                io.sockets.connected[rows[i].socket_id].emit('get_notification_and_msg_no',no_of_unreads);//sending  a specific socket including to itself
              }
            }
          });

        });// connection 1
      
        connection.release();
    });
      //console.log(msg);
  });


  socket.on('log_out',function(msg) {
    pool.getConnection(function(err, connection) {
        console.log(msg.user_email);
        connection.query('DELETE FROM current_status WHERE user_id = "'+msg.user_email+'"', function (err, result) {
           if (err) throw err;
        });
    });    
  });


  socket.on('disconnect',function() {
    pool.getConnection(function(err, connection) {

      var sql = 'SELECT * FROM temporary WHERE socket_id = ' + connection.escape(socket.id);
      connection.query(sql, function(err, rows,fields) {
        if (err) throw err;

        var sql = 'SELECT * FROM temporary WHERE user_id = ' + connection.escape(rows[0].user_id);
          connection.query(sql, function(err, rows_a,fields) {

            if(rows_a.length < 2) {
                connection.query('DELETE FROM current_status WHERE user_id = "'+rows[0].user_id+'"', function (err, result) {
                   if (err) throw err;
                });
            }
            
              connection.query('DELETE FROM temporary WHERE socket_id = "'+socket.id+'"', function (err, result) {
                 if (err) throw err;
              });            
          });



      });






      connection.release();
    });
  });

});

http.listen(3000, function(){
  console.log('listening on *:3000');
});