
 <!DOCTYPE html>
<html lang="en">
<head>

  <link rel="stylesheet" type="text/css" href="/mm.css">
</head>
<body>
<div class="background-wrap">
  <div class="background"></div>
</div>

<form id="accesspanel"  action="{{URL::to('/zz')}}"   method="post" enctype="multipart/form-data">
        @csrf
  <h1 id="litheader">Enter notice that will live in front page</h1>



     <div class="inset">




    <p>
     <textarea  required="required" type="text" name="message" placeholder="For notice"></textarea>

    </p>

    

    



    <div style="text-align: center;">
     </div>
    <input class="loginLoginValue" type="hidden" name="service" value="login" />
  </div>

  <p class="p-container">
    <input type="submit" name="button" id="go" value="SEND">
  </p>



                    <div class="p-container">
                        
                        <a href="/output" >Home </a>
                   </div>





</form>





<script src="/public/mm.js"></script>
</body>
</html>