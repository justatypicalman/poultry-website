<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
        <title>About Us | Progressive Poultry</title>      
        <link rel="icon" href="icon.png">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="shadow.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js">
        </script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@900&family=Rubik:wght@300&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/d876f86ab9.js" crossorigin="anonymous"></script>
    </head>
    <body style="background: #5bccf6;">    
        <nav class="navbar fixed-top navbar-expand-sm navbar-light" id="nav">      
            <a href="#" class="navbar-brand" style="margin-top: 20px;"><img class="logo" src="icon.png"><div class="fonttitle" id="poultry" style="display: inline;"><div class="fonttitle" id="progressive" style="color: #030e12; display: inline;">PROGRESSIVE</div> POULTRY</div></a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu" style="margin-right: 10px;">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarMenu" style="margin-left: 20px; ">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="index.php" class = "nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="products.php" class = "nav-link" >Products</a>
                </li>
                <li class="nav-item">
                    <a href="#" class = "nav-link" id="nav_present">About</a>
                </li>
                <li class="nav-item">
                    <a href="#contact" class = "nav-link">Contact Us</a>
                </li>
                <button type="button" class="btn btn-default navbar-btn" style="border-radius: 10px;width: 150px;color:black; background-color: #5bccf6">Sign Up</button>
            </ul>           
        </div>
        </nav>
        <br><br><br><br><br><br>
        <div class="container" id="aboutcontent">
            <div class="row row-cols-1" style="padding-left: 15px;">
                <div class="col-md-4 shadow-6" style="background:white; padding: 15px;border: 2px solid black; border-radius: 15px;">

                <h1 style="font-size: 40px;font-weight: bold;" >WHO WE ARE</h1>
                <p style="font-weight:bold; margin: 20px;">
                THE FIRST POULTRY & PET  SUPPLIES ONLINE CONVENIENCE STORE !

                While your safety and convenience is our utmost priority, we bring you the very best of shopping convenience right at the tip of your finger, 24 hours a day!  Wherever you are, you can experience our hassle-free ONE STOP SHOP with a wider range of brands across the PH, from the smallest merchandize to the bulk of your gamefowl and pet needs.

                Save your time and money while you can find out the best product you need and get product description thru item category in the product gallery.</p></div>
       
         
                <div class="col-md-4 shadow-6" style="background:white;padding: 15px;border: 2px solid black; border-radius: 15px;">
                <h1 style="font-size: 40px;font-weight: bold;" >WHAT WE DO</h1><p style="font-weight:bold; margin: 20px;">
                    ALLOWS YOU TO REACH US and make a window shopping or digital shopping in your most convenient time. 
                    Browse through the product gallery and check out every product details and the latest items in cockfighting and pets world.

                    ACCEPT AND PREPARE ORDERS anytime of the day, we can receive and prepare your orders and follow your special instructions.
                    CONFIRMATION. Progressive Poultry Supply is committed to serve and give the customers satisfaction for what they paid and received.</p>
                </div>

                <div class="col-md-4 shadow-6" style=" background:white; padding: 15px;border: 2px solid black; border-radius: 15px;"> <h1 style="font-size: 40px;font-weight: bold;" >WHY WE DO IT</h1><p style="font-weight:bold; margin: 20px;">
                Gamefowl raising and petting is in the heart of every Filipino, and to sustain this tradition and hobby, going to traditional brick and mortar store is not a prerequisite anymore, and without the hassle of getting harmed with viruses and long environmental exposure.

                With this On Line Poultry and Pet Supplies Convenience Store, Progressive Poultry Supply will continue to provide and cater your gamecocks and pet needs across channels and platforms with a seamless digital customer service.</p></div>
            

        </div><br><br><br></div>
          

    <div class="container-fluid" id="contact">
        <br>
        <h3 style="text-align: center;">GET IN TOUCH</h3>
        
        <br>
        <div class="row">

            <div class="col-md-3" id="contact-left">
                <br>
                <p><i class="fa-solid fa-location-dot"></i> &nbsp;&nbsp;1013 E Delos Santos Ave 1105 Quezon City, Philippines </p>
                <p><i class="fa-solid fa-phone"></i> &nbsp;&nbsp;0917 555 1462 </p>
                <p><i class="fa-solid fa-envelope"></i> &nbsp;&nbsp;info@progressive.com.ph </p>
                <p><i class="fa-solid fa-clock"></i> &nbsp;&nbsp;9:00AM - 5:00PM (UTC +8) </p>
                <a style="text-decoration: none;" target="_blank" href="https://www.facebook.com/progressivepoultryph"><p><i class="fa-brands fa-facebook"></i> &nbsp;&nbsp;Progressive Poultry Supply Corp. </p></a>
                <br>
                <hr>
                <p id="cc">Created by Eric Dango</p>
                
            </div>
            <div class="col-md-1"></div>
    <div class="col-md-5" id="contact-right">
        <h3>We'd love to hear you!</h3>
        <form method="post" onsubmit="sendEmail();done();reset();return false;">
        <div class="form-floating">
                <input class = "form-control" type="text" id = "name"  name="name" placeholder="Full Name" required>
                <label for="name">Full Name</label>
            </div>
            <div class="form-floating">
                <input class = "form-control" type="email" id = "email" name="email" placeholder="Email Address" required>
                <label for="email">Email Address</label>
            </div>
                <div class="form-floating">
                <input class = "form-control" type="text" id="phone" name="phone" placeholder="Phone Number" required>
                <label for="phone">Phone Number</label>
                </div>
                <div class="form-floating">
                <textarea class = "form-control" id="message" rows="4" style="height: 100px" name="message" placeholder="How can we help you?" required></textarea>
                <label for="message">How can we help you?</label>
            </div>
                <button type="submit" id="btn" class="btn btn-default navbar-btn" style="border-radius: 10px;width: 150px;color:black; background-color: #5bccf6">Send</button>
            </form>
        <h4 class="sent-notification"></h4>
    </div>

    </div>
    </div>




        <a href="#" id="top"><abbr title="Return to top"><img src="top.png" class="top"  style="position:fixed; right: 2rem; bottom: 2rem;"></abbr></a>
        <a href="#contact" id="bot"><abbr title="Go to bottom page"><img src="bot.png" id="bot" class="bot" style="position:fixed; right: 2rem; bottom: 2rem;"></abbr></a>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script>
            var header = $("#nav");
            var container = $(".container");
            var contact = $("#contact");
            var top = $("#top");
            var bot = $("#bot");
            $(document).ready(function(){
            })

            $(window).scroll(function() {
          if($(window).scrollTop() + $(window).height() > $(document).height() - 100) {
            bot.hide();
             top.show();
          }else{
              bot.show();
              top.hide();
          }
        });
            
         
                
            
        </script>
         <!-- <script src="https://smtpjs.com/v3/smtp.js"></script> -->
         <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script type="text/javascript">
        function sendEmail(){
            var name = $("#name");
            var email = $("#email");
            var phone = $("#phone");
            var message = $("#message");

            if(isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(phone) && isNotEmpty(message)){
                $.ajax({
                    url: 'sendEmail.php',
                    method: 'POST',
                    dataType: 'json',
                    data:{
                        name: name.val(),
                        email: email.val(),
                        message: message.val()
                    
                    }, success: function(response){
                        $('#myForm')[0].reset();
                        $('.sent-notification').text("Message sent successfully!");
                    }
                });
            }
        }
        function isNotEmpty(caller){
            if(caller.val()==""){
                caller.css('border','1px solid red');
                return false;
            }else{
                caller.css('border','');
                return true;
            }
        }
        function done(){
            alert("Thank you for messaging us, your message has successfully sent!");
        }
        
    </script>
    </body>
    
</html>