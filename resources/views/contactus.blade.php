<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="syle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
 
 <form method="get" action="/">
    <button type="submit"><h2>Back</button>
</form>

<div class="contact-section">



  <h1>Contact Us</h1>
  <div class="border"></div>
  <form class="contact-form" action="{{URL::to('/form')}}" method="post">

          @csrf



  
    <input name="email" type="email" required="'required" class="contact-form-text" placeholder="Your email">
    <input name="password" type="password"  required="'required" class="contact-form-text" placeholder="password">
    <input name="phone" type="text"  required="'required" class="contact-form-text" placeholder="Your phone number">
    <textarea name="message" class="contact-form-text"  required="'required" placeholder="Your message"></textarea>
   <button type="submit" name="button" class="contact-form-text">
              submit
            </button>
  </form>
</div>


  </body>
</html>
