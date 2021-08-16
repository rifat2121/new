<!DOCTYPE html>
    <head>
          
   <link rel="stylesheet" href="{{ asset('jonak.css') }}">
        </head>

<body>
  <div class="opol" >


 

<form method="get" action="/output">
    <button type="submit"><h2>Back</button>
</form>


 </div>
 
<div class="chatbox-holder">
  <div class="opol">

 </div>
  <div class="chatbox">
    <div class="chatbox-top">
      <div class="chatbox-avatar">
 <li><a href="truncate">clear all of your  chat<span class="opol"></span></a></li>
 <li><a href="/end">End the conversation<span class="opol"></span></a></li>
      </div>
      <div class="chat-partner-name">
        <span class="status online"></span>
        <a target="_blank" href=""></a>
      </div>
       <div class="chat-group-name">
        
   

          <li><a href="/pc">previous <span class="opol"></span></a></li>
          <li><a href="/nc">Next <span class="opol"></span></a></li>
      </div>
        

     

      <div class="chatbox-icons">
        <a href="javascript:void(0);"><i class="fa fa-minus"></i></a>
        <a href="javascript:void(0);"><i class="fa fa-close"></i></a>       
      </div>      
    </div>
    
   @foreach ($data as $data)


    <div class="chat-messages">
       @if($data->name!=null)
       
       <div class="message-box-holder">
        <div class="message-box">
           {{$data->message}}
        </div>
      </div>
      @else
      
      <div class="message-box-holder">
        <div class="message-sender">
        {{$data->email}}
         </div>
        <div class="message-box message-partner">
         {{$data->message}}
        </div>
      </div>
    @endif


    </div>
   @endforeach


    

    <form  action="{{URL::to('/cha')}}"  method="post">
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