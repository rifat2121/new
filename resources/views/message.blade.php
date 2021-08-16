
 <!DOCTYPE html>
<html lang="en">
<head>

  <link rel="stylesheet" type="text/css" href="/mm.css">
</head>
<body>
<div class="background-wrap">
  <div class="background"></div>
</div>

<form id="accesspanel" action="{{URL::to('/m')}}"   method="post" enctype="multipart/form-data">
        @csrf
  <h1 id="litheader">Enter your speech That will shown in blogging desk</h1>



     <div class="inset">




    <p>
      <textarea class="input100" required="required" type="text" name="message" placeholder="please enter your message"></textarea>

    </p>

    

    



    <div style="text-align: center;">
     </div>
    <input class="loginLoginValue" type="hidden" name="service" value="login" />
  </div>

  <p class="p-container">
    <input type="submit" name="button" id="go" value="SUBMIT">
  </p>



                    <div class="p-container">
                        
                        <a href="/output" >Home </a>
                   </div>





</form>





<script src="/public/mm.js"></script>
</body>
</html>