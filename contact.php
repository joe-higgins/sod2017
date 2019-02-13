<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Antic+Didone|Cinzel|Cormorant+Garamond|Gilda+Display|Junge|Quattrocento" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

    <!-- <link rel="stylesheet" href="css/animations.css"> -->
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/slider.css">


    <title>Contact Us</title>
  </head>
  <body>
<?php include 'banner.php'; ?>

    <div id="wrapper">
      <div id=mainContent class="shadow">

<?php include 'header.php'; ?>

<!-- content.php? -->
        <div id="lowerContent">
          <!-- start CONTACT page -->
          <div id="contact" class="animated slideInRight fadeIn content">
            <h4 class="pageHeading">Contact Us:</h4>
            <form action="formToEmail.php" method="post" name="contactForm" target="_self">
              <p>Name: &nbsp;<input name="name" type="text" value="" maxlength="30"> Enter your full name</p>
             <p>Phone: <input name="phone" type="text" value="" maxlength="20"> Enter your phone number with area code</p>
             <p>Email: &nbsp;<input name="email" type="text" value=""> Enter a valid email address</p>
             <p>Enter a brief description of your web site needs: <textarea name="comments" cols="50" rows="6"></textarea></p>
             <p>Number of pages: <input name="pages" type="text" value="" maxlength="50"> How many pages do you expect to have in your site?</p>
             <p>&nbsp;</p>
             <p>When is the best ime to contact you?:
               <p><label title="When is the best time to contact you?">
                 <input type="checkbox" name="timeToCall" value="Morning" id="timeToCall1">
                 Morning</label>
               </p>
             <p>
               <label>
                 <input type="checkbox" name="timeToCall" value="Afternoon" id="timeToCall2">
                 Afternoon</label>
               </p>

               <p>
                 <label>
                 <input type="checkbox" name="timeToCall" value="Evening" id="timeToCall3">
                 Evening</label>
               </p>
             <p><input name="submit" type="submit" value="Submit form">&nbsp;<input name="reset" type="reset" value="Reset form"></p>
             </form>
           </div>
          <!--  END CONTACT page -->

        </div> <!-- end lowerContent -->
      </div><!-- end mainContent -->
      <!-- <div class="clearfix"></div> -->
    </div> <!-- end wrapper  -->
  </body>
</html>
