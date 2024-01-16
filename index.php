<html>
  <?php
$pagetitle = "Loyaltigo";
?>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $pagetitle; ?>
    </title>
    <link rel="icon" type="image/x-icon" href="images/Logo2.png" size="64x64">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  </head>
  
  <header>
    <?PHP
  include "header.php";
  ?>
  </header>
  
  <body>
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-up" style="font-size:28px;"></i></button>
<div class="content">

<!--Slide Container-->
    <div class="container1">
      <div class = "slide">
        <?php include "slide.php"; ?>
      </div>
    </div>

<!--Video Container-->
    <div class="container2">
        <!--Video-->
        <h4 class = "ptitle2">
          <b><i>Our Employees Working</b></i><br></h4>
      <div class = "aboutVid">
        <div class = "ptitle3" id="introduction" overflow: hidden;">
          <video width="450" height="350" controls>
          <source src="images/Video2.mp4" type="video/mp4">
          </video>
        </div>
      </div>
    </div>
  
<!--1st Container-->
    <div class="container1">
      <!--About loyaltigo-->
      <section id="aboutUs">
<h4 class = "ptitle"><b><i>About Loyaltigo</i></b></h4>
      </section>

      <div class = "aboutUs">
        <div class = "aboutUs-img">
           <img src="images/aboutUs.jpeg" class = "wallpaper" width="450" height="280">
        </div>

        <div class = "text-start">
           <p style="text-align:justify; color: white; padding: 25px;">
            Launched in March 2000, Loyaltigo is one of Malaysia’s premier consumer rewards programs. 
            At Loyaltigo, we understand the lifestyle and the joy of everyday rewards which is why collecting Loyaltigo Points and redeeming them are made simple and 
            hassle-free!
            Join us and be part of the Loyaltigo Family today!
          </p>
         </div>        
      </div>
    </div>
</div>

<!--2nd Container-->
    <div class="container2">
      <!--How it works-->
    <div class = "section">
      <section id="howItWorks">
      <h4 class = "ptitle2"><b><i>How Does It Works?</i></b></h4>
      </section>
      <div class = "container">
        <table>
          <tr>
            <td style="width:33.3%; height: 100px;">
              <img src="images/member-card.png" alt="memberCard" class="memberCard" style="width:50%; display: block; margin-left: auto; margin-right: auto;">
              <p style="text-align:center; color: white; padding: 25px;">
                Present your Loyaltigo Card to the cashier upon your purchase.
              </p>
            </td>
            
            <td style="width:33.3%">
              <img src="images/pay.png" alt="pay" 
 class="pay" style="width:45%; display: block; margin-left: auto; margin-right: auto;">
              <p style="text-align:center; color: white; padding: 25px;">
                Pay for your purchases.
              </p>
            </td>
            
            <td style="width:33.3%">
              <img src="images/hand-gesture.png" alt="points" class="point" style="padding-top:25px; width:50%; display: block; margin-left: auto; margin-right: auto;">
              <p style="text-align:center; color: white; padding: 25px;">
                Let the cashier swipe or scan your Loyaltigo Card and your Loyaltigo Points will be recorded automatically.
              </p>
            </td>
          </tr>
        </table>
      </div>
    </div>
    </div>

<!--3rd Container-->
    <div class="container1">
      <!----------------Pricing---------------->
      <section id="pricing">
       <h4 class = "ptitle"><b><i>Pricing</i></b></h4>
      </section>
    <b>
  <div class = "pricing-container2">
    <div class = "pricing-container">

      <section class = "pricing"> 
      <div class = "pricing-header">
        <h1 class = "pricing-title">Starter plan</h1>
        <h2 class = "pricing-summary">Lorem epsum</h2>
      </div>

      <div class = "pricing-description">
        <ul class = "pricing-list">
          <li class = pricing-feature> Feature 1</li>
          <li class = pricing-feature> Feature 2</li>
          <li class = pricing-feature> Feature 3</li> 
        </ul>
      </div>
        
      <div class = "pricing-action">
        <p class = "pricing-cost">RM100</p>
        <p class = "pricing-text">per month</p>
        <a href = "./" class = "pricing-button">Purchase</a>
        <p class = "pricing-text">Money back Guarantee</p>
      </div>
    </section>

    <section class = "pricing pricing-highlighted">
      <div class = "pricing-special-text">Recommended</div>
      <div class = "pricing-header">
        <h1 class = "pricing-title">Starter plan</h1>
        <h2 class = "pricing-summary">Lorem epsum</h2>
      </div>
      
      <div class = "pricing-description">
        <ul class = "pricing-list">
          <li class = pricing-feature> Feature 1</li>
          <li class = pricing-feature> Feature 2</li>
          <li class = pricing-feature> Feature 3</li> 
        </ul>
      </div>
      
      <div class = "pricing-action">
        <p class = "pricing-cost">RM100</p>
        <p class = "pricing-text">per month</p>
        <a href = "./" class = "pricing-button">Purchase</a>
        <p class = "pricing-text">Money back Guarantee</p>
      </div>
    </section>
      
     <section class = "pricing">  
      <div class = "pricing-header">
        <h1 class = "pricing-title">Starter plan</h1>
        <h2 class = "pricing-summary">Lorem epsum</h2>
      </div>
       
      <div class = "pricing-description">
        <ul class = "pricing-list">
          <li class = pricing-feature> Feature 1</li>
          <li class = pricing-feature> Feature 2</li>
          <li class = pricing-feature> Feature 3</li> 
        </ul>
      </div>
       
      <div class = "pricing-action">
        <p class = "pricing-cost">RM100</p>
        <p class = "pricing-text">per month</p>
        <a href = "./" class = "pricing-button">Purchase</a>
        <p class = "pricing-text">Money back Guarantee</p>
      </div>
    </section>
    </div>
      </b>
    </div>
  </div>


  <!--4th Container-->
    <div class="container2">
      <!--Contact Us -->
      <section id="contact">
      <h3 class="ptitle2"><b><i>Contact Us</i></b></h3>
      </section>

    <div class="form" id="form">
    <form id="contactForm" class="contactForm" method="post" action="contact-form-process.php">
            <div class="label">Your Name</div>
            <div class="fcf-input-group">
                <input type="text" id="name" name="name" class="fcf-form-control" size="50" required>
            </div>
      
        <div class="fcf-form-group">
            <div class="label">Your Email Address</div>
            <div class="fcf-input-group">
                <input type="email" id="email" name="email" class="fcf-form-control" required>
            </div>
          
           <div class="label">Your Phone Number</div>
            <div class="fcf-input-group">
                <input type="text" id="phone" name="phone" class="fcf-form-control" required>
            </div>
          
        <div class="fcf-form-group">
            <div class="label">Your Message</div>
            <div class="fcf-input-group">
                <textarea id="message" name="message" class="fcf-form-control" rows="6" maxlength="3000" required></textarea>
            </div>
        </div>
          
        <div class="fcf-form-group">
            <button type="submit" id="submit" class="submit">Send</button>
        </div>
    </div>
</div>
    </form>
    </div>

       <!-- FOOTER -->
  <div class="footer">
  <footer class="text-center text-white">

  <div class="text-center p-3">
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-discord"></i
      ></a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-instagram"></i
      ></a>
    </section>
    
    © 2022 Loyaltigo
  </div>
  <!-- Copyright -->
</footer>
</div>
  </body>

      <script>
        /*button to top page*/
        // Get the button:
let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
  window.scrollY(0); //For mobile
}
        /*form*/
        $(document).ready(function () {
          $("#contactForm").submit(function (event){
            /* stop form from submitting normally */
            event.preventDefault();

            /* get some values from elements on the page: */
            var $form = $(this),
                //Get the first value
                name = $form.find('input[name="name"]').val(),
                //get second value
                email = $form.find('input[name="email"]').val(),
                phone = $form.find('input[name="phone"]').val(),
                message = $form.find('textarea[name="message"]').val(),
                //get the url. action="b.php"
                url = $form.attr('action');

            /* Send the data using post */
            var posting = $.post(url, { name: name, email: email, phone: phone, message: message });

            /* Put the results in a div */
            posting.done(function (data) {

                $("#form").empty().append(data);
            });
          });
        });
      </script>
  
</html>