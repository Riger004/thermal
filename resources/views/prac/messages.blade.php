@extends('prac.demoMaster')


@section('title', 'Gigg')



@section('body')

 <link rel="stylesheet" href="css/reset.css">


      <div class="row container clearfix ">
			    <div class="small-4 columns people-list" id="people-list">
					      
					      <ul class="list">
					      <a href="#" >
					        <li class="clearfix">
					          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_01.jpg" alt="avatar" />
					          <div class="about">
					            <div class="name">Vincent Porter</div>
					            <div class="status">
					              <i class="fa fa-circle online"></i> online
					            </div>
					          </div>
					        </li>

					        </a>


					         <a href="#">
					        <li class="clearfix">
					          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_02.jpg" alt="avatar" />
					          <div class="about">
					            <div class="name">Aiden Chavez</div>
					            <div class="status">
					              <i class="fa fa-circle offline"></i> left 7 mins ago
					            </div>
					          </div>
					        </li>
					        </a>

					         <a href="#">
					        <li class="clearfix">
					          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_03.jpg" alt="avatar" />
					          <div class="about">
					            <div class="name">Mike Thomas</div>
					            <div class="status">
					              <i class="fa fa-circle online"></i> online
					            </div>
					          </div>
					        </li>
					        </a>
					        
					        <a href="#">
					        <li class="clearfix">
					          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_07.jpg" alt="avatar" />
					          <div class="about">
					            <div class="name">Christian Kelly</div>
					            <div class="status">
					              <i class="fa fa-circle offline"></i> left 10 hours ago
					            </div>
					          </div>
					        </li>
					        </a>
					        
					         <a href="#">
					        <li class="clearfix">
					          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_08.jpg" alt="avatar" />
					          <div class="about">
					            <div class="name">Monica Ward</div>
					            <div class="status">
					              <i class="fa fa-circle online"></i> online
					            </div>
					          </div>
					        </li>
					        </a>
					        
					         <a href="#">
					        <li class="clearfix">
					          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_09.jpg" alt="avatar" />
					          <div class="about">
					            <div class="name">Dean Henry</div>
					            <div class="status">
					              <i class="fa fa-circle offline"></i> offline since Oct 28
					            </div>
					          </div>
					        </li>
					        </a>
					        

					         <a href="#">
					        <li class="clearfix">
					          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_10.jpg" alt="avatar" />
					          <div class="about">
					            <div class="name">Peyton Mckinney</div>
					            <div class="status">
					              <i class="fa fa-circle online"></i> online
					            </div>
					          </div>
					        </li>
					        </a>
					      </ul>
			    </div>
			    
			    <div class="small-8 columns chat">
			      <div class="chat-header clearfix">
			        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_01_green.jpg" alt="avatar" />
			        
			        <div class="chat-about">
			          <div class="chat-with">Chat with Vincent Porter</div>
			          <div class="chat-num-messages">already 1 902 messages</div>
			        </div>
			        <i class="fa fa-star"></i>
			      </div> <!-- end chat-header -->
			      
			      <div class="chat-history">
			        <ul>
			          <li class="clearfix">
			            <div class="message-data align-right">
			              <span class="message-data-time" >10:10 AM, Today</span> &nbsp; &nbsp;
			              <span class="message-data-name" >Olia</span> <i class="fa fa-circle me"></i>
			              
			            </div>
			            <div class="message other-message float-right">
			              Hi Vincent, how are you? How is the project coming along?
			            </div>
			          </li>
			          
			          <li>
			            <div class="message-data">
			              <span class="message-data-name"><i class="fa fa-circle online"></i> Vincent</span>
			              <span class="message-data-time">10:12 AM, Today</span>
			            </div>
			            <div class="message my-message">
			              Are we meeting today? Project has been already finished and I have results to show you.
			            </div>
			          </li>
			          
			          <li class="clearfix">
			            <div class="message-data align-right">
			              <span class="message-data-time" >10:14 AM, Today</span> &nbsp; &nbsp;
			              <span class="message-data-name" >Olia</span> <i class="fa fa-circle me"></i>
			              
			            </div>
			            <div class="message other-message float-right">
			              Well I am not sure. The rest of the team is not here yet. Maybe in an hour or so? Have you faced any problems at the last phase of the project?
			            </div>
			          </li>
			          
			          <li>
			            <div class="message-data">
			              <span class="message-data-name"><i class="fa fa-circle online"></i> Vincent</span>
			              <span class="message-data-time">10:20 AM, Today</span>
			            </div>
			            <div class="message my-message">
			              Actually everything was fine. I'm very excited to show this to our team.
			            </div>
			          </li>
			          
			          <li>
			            <div class="message-data">
			              <span class="message-data-name"><i class="fa fa-circle online"></i> Vincent</span>
			              <span class="message-data-time">10:31 AM, Today</span>
			            </div>
			            <i class="fa fa-circle online"></i>
			            <i class="fa fa-circle online" style="color: #AED2A6"></i>
			            <i class="fa fa-circle online" style="color:#DAE9DA"></i>
			          </li>
			          
			        </ul>
			        
			      </div> <!-- end chat-history -->
			      
			      <div class="chat-message clearfix">
			        <textarea name="message-to-send" id="message-to-send" placeholder ="Type your message" rows="3"></textarea>
			                
			        <i class="fa fa-file-o"></i> &nbsp;&nbsp;&nbsp;
			        <i class="fa fa-file-image-o"></i>
			        
			        <button>Send</button>

			      </div> <!-- end chat-message -->
			      
			    </div> <!-- end chat -->
    
  </div> <!-- end container -->




<!-- 
<script id="message-template" type="text/x-handlebars-template">
  <li class="clearfix">
    <div class="message-data align-right">
      <span class="message-data-time" >time, Today</span> &nbsp; &nbsp;
      <span class="message-data-name" >Olia</span> <i class="fa fa-circle me"></i>
    </div>
    <div class="message other-message float-right">
      messege
    </div>
  </li>
</script>

<script id="message-response-template" type="text/x-handlebars-template">
  <li>
    <div class="message-data">
      <span class="message-data-name"><i class="fa fa-circle online"></i> Vincent</span>
      <span class="message-data-time">time, Today</span>
    </div>
    <div class="message my-message">
      response
    </div>
  </li>
</script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/handlebars.js/3.0.0/handlebars.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/list.js/1.1.1/list.min.js'></script>

        <script src="js/index.js"></script>









<script type="text/javascript">
	
	(function(){
  
  var chat = {
    messageToSend: '',
    messageResponses: [
      'Why did the web developer leave the restaurant? Because of the table layout.',
      'How do you comfort a JavaScript bug? You console it.',
      'An SQL query enters a bar, approaches two tables and asks: "May I join you?"',
      'What is the most used language in programming? Profanity.',
      'What is the object-oriented way to become wealthy? Inheritance.',
      'An SEO expert walks into a bar, bars, pub, tavern, public house, Irish pub, drinks, beer, alcohol'
    ],
    init: function() {
      this.cacheDOM();
      this.bindEvents();
      this.render();
    },
    cacheDOM: function() {
      this.$chatHistory = $('.chat-history');
      this.$button = $('button');
      this.$textarea = $('#message-to-send');
      this.$chatHistoryList =  this.$chatHistory.find('ul');
    },
    bindEvents: function() {
      this.$button.on('click', this.addMessage.bind(this));
      this.$textarea.on('keyup', this.addMessageEnter.bind(this));
    },
    render: function() {
      this.scrollToBottom();
      if (this.messageToSend.trim() !== '') {
        var template = Handlebars.compile( $("#message-template").html());
        var context = { 
          messageOutput: this.messageToSend,
          time: this.getCurrentTime()
        };

        this.$chatHistoryList.append(template(context));
        this.scrollToBottom();
        this.$textarea.val('');
        
        // responses
        var templateResponse = Handlebars.compile( $("#message-response-template").html());
        var contextResponse = { 
          response: this.getRandomItem(this.messageResponses),
          time: this.getCurrentTime()
        };
        
        setTimeout(function() {
          this.$chatHistoryList.append(templateResponse(contextResponse));
          this.scrollToBottom();
        }.bind(this), 1500);
        
      }
      
    },
    
    addMessage: function() {
      this.messageToSend = this.$textarea.val()
      this.render();         
    },
    addMessageEnter: function(event) {
        // enter was pressed
        if (event.keyCode === 13) {
          this.addMessage();
        }
    },
    scrollToBottom: function() {
       this.$chatHistory.scrollTop(this.$chatHistory[0].scrollHeight);
    },
    getCurrentTime: function() {
      return new Date().toLocaleTimeString().
              replace(/([\d]+:[\d]{2})(:[\d]{2})(.*)/, "$1$3");
    },
    getRandomItem: function(arr) {
      return arr[Math.floor(Math.random()*arr.length)];
    }
    
  };
  
  chat.init();
  
  var searchFilter = {
    options: { valueNames: ['name'] },
    init: function() {
      var userList = new List('people-list', this.options);
      var noItems = $('<li id="no-items-found">No items found</li>');
      
      userList.on('updated', function(list) {
        if (list.matchingItems.length === 0) {
          $(list.list).append(noItems);
        } else {
          noItems.detach();
        }
      });
    }
  };
  
  searchFilter.init();
  
})();



</script>

 -->





@stop