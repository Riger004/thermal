@extends('prac.demoMaster')


@section('title', 'Gigg')

<script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>

@section('body')


<link rel="stylesheet" href="{{ URL::asset('css/reset.css') }}">
<div class="row container clearfix ">
	    <div class="small-4 columns people-list" id="people-list">
			      
			       <ul id="first_list" class="list">
<script>
var user_email_id = ('{{{ Auth::user()->email }}}');
var num_of_messages = 0;
var name_a="xxxxx";

	$( document ).ready(function() {
	socket.emit('get_user_list',{'user_email':user_email_id});
	socket.on('get_status', function(current){
		var output='';
		if (current.status=='online') {
		output  +="<a id='gggg' name='"+current.user_email+"' href='#'>"+
	        "<li class='clearfix'>"+
	          "<div class='about'>"+
	            "<div id='' class='name'>"+current.user_email+"</div>"+
	            "<div id='"+current.user_email+"' class='status'>"+
	              "<i class='fa fa-circle online'></i> online"+
	            "</div>"+
	          "</div>"+
		    "</li></a>";
		}
		else {
			output  +="<a id='gggg' name='"+current.user_email+"' href='#'>"+
	        "<li class='clearfix'>"+
	          "<div class='about'>"+
	            "<div id='' class='name'>"+current.user_email+"</div>"+
	            "<div id='"+current.user_email+"' class='status'>"+
	              "<i class='fa fa-circle offline'></i> offline"+
	            "</div>"+
	          "</div>"+
		    "</li></a>";
		}

		$('#first_list').append(output);

	});

	socket.on('out_user_list', function(msg){
		for (var i = 0; i < msg.length; i++) {
		socket.emit('get_status',{'user_email':msg[i].from_user_id});
		if(i==0) {
		    	name_a=msg[i].from_user_id;
		    	socket.emit("get_u_msg",{'user_email':user_email_id,'o_email':name_a});
		    }
		}
	});

   $(document).on("click", "#offInd", function(event) {
   	document.getElementById('current_situation').innerHTML='<a href="#" class="button success hollow small" id="onInd">Go Online</a>';
   		socket.emit("set_status",{'user_email':user_email_id,'status':'offline'});
        event.preventDefault();
    });
   $(document).on("click", "#onInd", function(event) {
		document.getElementById('current_situation').innerHTML='<a href="#" class="button alert hollow small" id="offInd">Go Offline</a>';   		
   		socket.emit("set_status",{'user_email':user_email_id,'status':'online'});
        event.preventDefault();
    });
		
   $(document).on("click", "#gggg", function(event) {
   		name_a = $(this).attr('name');
   		socket.emit("get_u_msg",{'user_email':user_email_id,'o_email':$(this).attr('name')});
        event.preventDefault();
    });

   socket.on('show_messages',function(msg){
   	num_of_messages = msg.length;
   	document.getElementById("chat_start").innerHTML = "";
    document.getElementById('chat_with').innerHTML = name_a;
    document.getElementById('chat-num-messages').innerHTML = num_of_messages+'  messages';
    	var output = '';
			for (var i = 0; i < msg.length; i++) {
				if(msg[i].from_user_id==user_email_id){
					if (msg[i].to_user_id==name_a) {
						output+="<li ><pre>"+
						"<div class='message-data>"+
						"<span class='message-data-name'>"+
						"<i class='fa fa-circle online'></i>"+
						"<span class='message-data-time'>"+msg[i].created_at+"</span>"+
						"</div><br>"+
						"<div class='message my-message'>"+
						msg[i].main_msg+
						"</div></pre></li>";
					}
				}
				else{
					output+="<li class='clearfix'><pre>"+
					"<div class='message-data align-right'>"+
					"<span class='message-data-time' >"+msg[i].created_at+"</span> &nbsp; &nbsp;"+
					"<span class='message-data-name' >"+msg[i].from_user_id+"</span> <i class='fa fa-circle me'></i>"+
					"</div>"+
					"<div class='message other-message float-right'>"+
					msg[i].main_msg+
					"</div></pre></li>";
				}
			}
		$('#chat_start').append(output);
		var scro = document.getElementById("id_chat_history");
		scro.scrollTop = scro.scrollHeight;
	});

	socket.on('chat message',function(msg) {
		num_of_messages++;
   		document.getElementById('chat-num-messages').innerHTML = num_of_messages +'  messages';
   		var output='';
			if(msg.from==user_email_id){
					if (msg.to==name_a) {
					output+="<li ><pre>"+
					"<div class='message-data>"+
					"<span class='message-data-name'>"+"<i class='fa fa-circle online'></i>"+
					"<span class='message-data-time'>"+msg.time+"</span>"+
					"</div><br>"+
					"<div class='message my-message'>"+
					msg.main_msg+
					"</div></pre></li>";
				}

			}
			else{
				if (msg.from==name_a) {
					output+="<li class='clearfix'>"+
					"<div class='message-data align-right'>"+
					"<span class='message-data-time' >"+msg.time+"</span> &nbsp; &nbsp;"+
					"<span class='message-data-name' >"+msg.from+"</span> <i class='fa fa-circle me'></i>"+
					"</div>"+
					"<div class='message other-message float-right'>"+
					msg.main_msg+
					"</div></li>";
				}
			}
		$('#chat_start').append(output);
		var scro = document.getElementById("id_chat_history");
		scro.scrollTop = scro.scrollHeight;
	});


	document.getElementById('current_situation').innerHTML='<a href="#" class="button alert hollow small" id="offInd">Go Offline</a>'; 





	$("#message-to-send").keyup(function(event) {
	    if(event.keyCode == 13 && event.shiftKey === false) {
		     var formData = {
	          'From'   : user_email_id,
	          'To'     : name_a,
	          'msg'    : $('textarea[id=message-to-send]').val()
	        };
			socket.emit('chat message', formData);
        	$("textarea#message-to-send").val('');
         	return false;
	    }
	});

});

function scrollFix() {   
  var scro = document.getElementById("chat-history");
  scro.scrollTop = scro.scrollHeight;
}
</script>
    		</ul> 
	    </div>
			    
	    <div id="chat_des" class="small-8 columns chat">
	      <div class="chat-header clearfix">
	        <div id="head_name" class="chat-about">
	          <div id='chat_with' class="chat-with"></div>
	          <div id='chat-num-messages' class="chat-num-messages"></div>
	        	<div id="current_situation"></div>
	        </div>
	        <i class="fa fa-star"></i>
	      </div>  
	      
	      <div id="id_chat_history" class="chat-history">
	        <ul id="chat_start"></ul>
	        
	      </div> <!-- end chat-history -->
	      
	      <div class="chat-message clearfix">
	        <textarea name="message-to-send" id="message-to-send" placeholder ="Type your message" rows="3"></textarea>
	                
	        <button id="send_msg">Send</button>
	        


	      </div> <!-- end chat-message -->
</div> <!-- end chat -->
    
  </div> <!-- end container -->

@stop