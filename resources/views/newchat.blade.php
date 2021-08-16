<!DOCTYPE html>
    <head>
          
   <link rel="stylesheet" href="{{ asset('newchat.css') }}">
        </head>

<body>

   <div ><li><a href="/st">Previous page<span class="opol"></span></a></li></div>
<div class="chatbox-holder">


  <div class="chatbox">
  <div class="chatbox-top">
      <div class="chatbox-avatar">
        <a target="_blank" href=""></a>
      </div>
      
      <div class="chat-group-name">
        <span class="status away"></span>
        Student Advisor

          <li><a href="/a">previous<span class="opol"></span></a></li>
              <li><a href="/b">Next<span class="opol"></span></a></li>
      </div>



      <div class="chatbox-icons">
      
       
        <a href="javascript:void(0);"><i class="fa fa-minus"></i></a>
        <a href="javascript:void(0);"><i class="fa fa-close"></i></a>       
      </div>      
    </div>
    
    
   @foreach ($sa as $data)


    <div class="chat-messages">
       @if($data->name!="studentadvisor")
       
       <div class="message-box-holder">
        <div class="message-box">
           {{$data->message}}
        </div>
      </div>
      @else
      
      <div class="message-box-holder">
        <div class="message-sender">
        {{$data->name}}
         </div>
        <div class="message-box message-partner">
         {{$data->message}}
        </div>
      </div>
    @endif


    </div>
   @endforeach

    

    <form  action="{{URL::to('/rifa')}}"  method="post">
    @csrf
    <div class="chat-input-holder">
      <input class="chat-input" type="text" name="message" required="required" >
     
      <button type="submit" name="button" class="message-send">
              send
            </button>
    </div>
        </form>
  </div>




  
  <div class="chatbox group-chat">
    <div class="chatbox-top">
      <div class="chatbox-avatar">
        <a target="_blank" href=""></a>
      </div>
      
      <div class="chat-group-name">
        <span class="status away"></span>
        Proctor

          <li><a href="/c">Previous<span class="opol"></span></a></li>
              <li><a href="/d">Next<span class="opol"></span></a></li>
      </div>



      <div class="chatbox-icons">
      
       
        <a href="javascript:void(0);"><i class="fa fa-minus"></i></a>
        <a href="javascript:void(0);"><i class="fa fa-close"></i></a>       
      </div>      
    </div>
    






       @foreach ($p as $data)


    <div class="chat-messages">
       @if($data->name!="proctor")
       
       <div class="message-box-holder">
        <div class="message-box">
           {{$data->message}}
        </div>
      </div>
      @else
      
      <div class="message-box-holder">
        <div class="message-sender">
        {{$data->name}}
         </div>
        <div class="message-box message-partner">
         {{$data->message}}
        </div>
      </div>
    @endif


    </div>
   @endforeach
    
    <form  action="{{URL::to('/rifat')}}"  method="post">
    @csrf
    <div class="chat-input-holder">
      <input class="chat-input" type="text" name="message" >
     
      <button type="submit" name="button" class="message-send">
              send
            </button>
    </div>
        </form>
    
   
  </div>
  
  





<div class="chatbox group-chat">
    <div class="chatbox-top">
      <div class="chatbox-avatar">
        <a target="_blank" href=""></a>
      </div>
      
      <div class="chat-group-name">
        <span class="status away"></span>
       Hcell
         <li><a href="/e">Previous<span class="opol"></span></a></li>
              <li><a href="/f">Next<span class="opol"></span></a></li>
      </div>
      <div class="chatbox-icons">
      
       
        <a href="javascript:void(0);"><i class="fa fa-minus"></i></a>
        <a href="javascript:void(0);"><i class="fa fa-close"></i></a>       
      </div>      
    </div>
    




    @foreach ($h as $data)


    <div class="chat-messages">
       @if($data->name!="hcell")
       
       <div class="message-box-holder">
        <div class="message-box">
           {{$data->message}}
        </div>
      </div>
      @else
      
      <div class="message-box-holder">
        <div class="message-sender">
        {{$data->name}}
         </div>
        <div class="message-box message-partner">
         {{$data->message}}
        </div>
      </div>
    @endif


    </div>
   @endforeach





  <form class="login100-form validate-form" action="{{URL::to('/rifatt')}}"  method="post">
          @csrf
    
    <div class="chat-input-holder">
       <input class="chat-input" type="text" name="message" >
     
      <button type="submit" name="button" class="message-send">
              send
            </button>
    </div>

 </form>
   
    
  </div>
  




</div>


    <script src="{{ asset('newchat.js') }}"></script>

</body>



</html>