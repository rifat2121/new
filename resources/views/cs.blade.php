<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="syle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
     <li><a href="/st">Home<span class="contact-section"></span></a></li>

<div class="contact-section">

  <h1>Contact Us</h1>
  <div class="border"></div>
  <form class="contact-form" action="{{URL::to('/cs')}}" method="post">

          @csrf



  
    <input name="phone" type="text" class="contact-form-text" placeholder="Your phone number">
    <textarea name="message" class="contact-form-text" placeholder="Your message"></textarea>
   <button type="submit" name="button" class="contact-form-text">
              submit
            </button>
  </form>
</div>


  </body>
</html>
