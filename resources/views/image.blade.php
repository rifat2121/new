
 <!DOCTYPE html>
<html lang="en">
<head>

  <link rel="stylesheet" type="text/css" href="/mm.css">
</head>
<body>
<div class="background-wrap">
  <div class="background"></div>
</div>

<form id="accesspanel" action="{{URL::to('/image')}}"   method="post" enctype="multipart/form-data">
        @csrf
  <h1 id="litheader">APPLY FOR SEAT</h1>



     <div class="inset">
      <p>
      
             <select id="input"  name="type" required>
              
                 <option value="">None</option>
              
              <option value="studentadvisor">Studentadvisor</option>
              <option value="proctor">proctor</option>
              <option value="hcell">Hcell</option>
              
              

            </select>
    </p>

    <br>

    <p>
      
       <textarea  required="required"  type="text" name="name" placeholder="Enter your Message"></textarea>

    </p>

    <p>
    <input  type="file" name="image" >
    </p>

    



    <div style="text-align: center;">
     </div>
    <input class="loginLoginValue" type="hidden" name="service" value="login" />
  </div>

  <p class="p-container">
    <input type="submit" name="button" id="go" value="SUBMIT">
  </p>



                    <div class="p-container">
                        
                        <a href="/st" >Home </a>
                   </div>





</form>





<script src="/public/mm.js"></script>
</body>
</html>