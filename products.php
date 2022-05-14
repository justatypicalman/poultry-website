<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
        <title>Products | Progressive Poultry</title>      
        <link rel="icon" href="icon.png">
        <link rel="stylesheet" href="style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js">
        </script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@900&family=Rubik:wght@300&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/d876f86ab9.js" crossorigin="anonymous"></script>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    </head>
    <body>    
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
                    <a href="#" class = "nav-link" id="nav_present">Products</a>
                </li>
                <li class="nav-item">
                    <a href="about.php" class = "nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a href="#contact" class = "nav-link">Contact Us</a>
                </li>
                <button type="button" class="btn btn-default navbar-btn" style="border-radius: 10px;width: 150px;color:black; background-color: #5bccf6">Sign Up</button>
                <div style="cursor: pointer; padding-left: 20px; padding-right: 20px; margin-top: 10px">
            <i style="font-size:30px" class="fa fa-shopping-cart my-cart-icon">
                <span style="padding: 4px; background: #5bccf6; color: black;" class="badge badge-notify my-cart-badge"></span>
</i>    
        </div>
            </ul>           
        </div>
        </nav>
        
        <section id="product">
        <div class="container">
            <br><br> <br><br>
            <br><br>
            <h1 class="heading" style="font-weight: bold">Products</h1>
            <br>
            <div class="product-container">
                <h2 class="title" style="font-weight: bold">Feeds/Food</h2>
                <div class="product-slider">
                    <div class="row">
                    <div class="col product-card" data-aos="zoom-in-right" data-aos-duration="1000">
                        <div class="image">
                            <img src="imagesprod/feed1-removebg-preview.png" alt="">
                        </div>
                        <div class="content">
                            <h3>Alpo Adult</h3>
                            <div class="price">P2250</div>
                        </div>
                        <div class="info">
                            <button class="btn btn-danger my-cart-btn navbar-btn" data-id="4" data-name="Alpo Adult" data-summary="summary 1" 
                            data-price="2250" data-quantity="1" data-image="imagesprod/feed1-removebg-preview.png" style="border:none; margin-bottom: 20px;border-radius: 10px;width: 150px;color:black; background-color: #5bccf6">Add to Cart</button>
                        </div>
                    </div>
                    <div class="col product-card" data-aos="zoom-in-right" data-aos-duration="1000">
                        <div class="image">
                            <img src="imagesprod/feed2-removebg-preview.png" alt="">
                        </div>
                        <div class="content">
                            <h3>Friskies</h3>
                            <div class="price">P1180</div>
                        </div>
                        <div class="info">
                            <a href="#"><button class="btn btn-danger my-cart-btn navbar-btn" data-id="5" data-name="Friskies" 
                            data-summary="summary 2" data-price="1180" data-quantity="1" data-image="imagesprod/feed2-removebg-preview.png" style="border:none; margin-bottom: 20px;border-radius: 10px;width: 150px;color:black; background-color: #5bccf6">Add to Cart</button></a>
                        </div>
                    </div>
                    <div class="col product-card" data-aos="zoom-in-right" data-aos-duration="1000">
                        <div class="image">
                            <img src="imagesprod/feed3-removebg-preview.png" alt="">
                        </div>
                        <div class="content">
                            <h3>Mazuri Rabbit Diet</h3>
                            <div class="price">P1750</div>
                        </div>
                        <div class="info">
                            <a href="#"><button class="btn btn-danger my-cart-btn navbar-btn" data-id="6" data-name="Mazuri Rabbit Diet" 
                            data-summary="summary 3" data-price="1750" data-quantity="1" data-image="imagesprod/feed3-removebg-preview.png" style="border:none; margin-bottom: 20px;border-radius: 10px;width: 150px;color:black; background-color: #5bccf6">Add to Cart</button></a>
                        </div>
                    </div>
                    <div class="col product-card" data-aos="zoom-in-right" data-aos-duration="1000">
                        <div class="image">
                            <img src="imagesprod/feed4-removebg-preview.png" alt="">
                        </div>
                        <div class="content">
                            <h3>Integra Power Maxx 1</h3>
                            <div class="price">P67</div>
                        </div>
                        <div class="info">
                            <a href="#"><button class="btn btn-danger my-cart-btn navbar-btn" data-id="7" data-name="Integra Power Maxx 1" data-summary="summary 4" data-price="67" 
                            data-quantity="1" data-image="imagesprod/feed4-removebg-preview.png" style="border:none; margin-bottom: 20px;border-radius: 10px;width: 150px;color:black; background-color: #5bccf6">Add to Cart</button></a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <br><br>
            <div class="product-container">
                <h2 class="title" style="font-weight: bold">Vitamins and Mineral Supplements</h2>
                <div class="product-slider">
                    <div class="row">
                    <div class="col product-card"data-aos="zoom-in-right" data-aos-duration="1000">
                        <div class="image">
                            <img style="width: 200px;" src="imagesprod/vit1-removebg-preview.png" alt="">
                        </div>
                        <div class="content">
                            <h3>Vioplus Powder</h3>
                            <div class="price">P330</div>
                        </div>
                        <div class="info">
                            <a href="#"><button class="btn btn-danger my-cart-btn navbar-btn" data-id="8" data-name="Vioplus Powder" data-summary="summary 5" data-price="330" data-quantity="1" data-image="imagesprod/vit1-removebg-preview.png" style="border:none;margin-bottom: 20px;border-radius: 10px;width: 150px;color:black; background-color: #5bccf6">Add to Cart</button></a>
                        </div>
                    </div>
                    <div class="col product-card" data-aos="zoom-in-right" data-aos-duration="1000">
                        <div class="image">
                            <img style="width: 300px;" src="imagesprod/vit2-removebg-preview.png" alt="">
                        </div>
                        <div class="content">
                            <h3>Pakyaw Powder</h3>
                            <div class="price">P1000</div>
                        </div>
                        <div class="info">
                            <a href="#"><button class="btn btn-danger my-cart-btn navbar-btn" data-id="9" data-name="Pakyaw Powder" data-summary="summary 6" data-price="1000" data-quantity="1" data-image="imagesprod/vit2-removebg-preview.png" style="border:none;margin-bottom: 20px;border-radius: 10px;width: 150px;color:black; background-color: #5bccf6">Add to Cart</button></a>
                        </div>
                    </div>
                    <div class="col product-card" data-aos="zoom-in-right" data-aos-duration="1000">
                        <div class="image">
                            <img style="width: 260px;" src="imagesprod/vit3-removebg-preview.png" alt="">
                        </div>
                        <div class="content">
                            <h3>Accel Crumble</h3>
                            <div class="price">P1200</div>
                        </div>
                        <div class="info">
                            <a href="#"><button class="btn btn-danger my-cart-btn navbar-btn" data-id="10" data-name="Accel Crumble" data-summary="summary 7" data-price="1200" data-quantity="1" data-image="imagesprod/vit3-removebg-preview.png" style="border:none;margin-bottom: 20px;border-radius: 10px;width: 150px;color:black; background-color: #5bccf6">Add to Cart</button></a>
                        </div>
                    </div>
                    <div class="col product-card" data-aos="zoom-in-right" data-aos-duration="1000">
                        <div class="image">
                            <img style="width: 270px;" src="imagesprod/vit4-removebg-preview.png" alt="">
                        </div>
                        <div class="content">
                            <h3>Astig Caplet</h3>
                            <div class="price">P9</div>
                        </div>
                        <div class="info">
                            <a href="#"><button class="btn btn-danger my-cart-btn navbar-btn" data-id="11" data-name="Astig Caplet" data-summary="summary 8" data-price="9" data-quantity="1" data-image="imagesprod/vit4-removebg-preview.png" style="border:none;margin-bottom: 20px;border-radius: 10px;width: 150px;color:black; background-color: #5bccf6">Add to Cart</button></a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <br><br>
            <div class="product-container">
                <h2 class="title" style="font-weight: bold">Antiparasitic / Delouser</h2>
                <div class="product-slider">
                    <div class="row">
                    <div class="col product-card" data-aos="zoom-in-right" data-aos-duration="1000">
                        <div class="image">
                            <img src="imagesprod/d1-removebg-preview.png" alt="">
                        </div>
                        <div class="content">
                            <h3>Bee Pollen Granules</h3>
                            <div class="price">P1700</div>
                        </div>
                        <div class="info">
                            <a href="#"><button class="btn btn-danger my-cart-btn navbar-btn" data-id="12" data-name="Bee Pollen Granules" data-summary="summary 9" data-price="1700" data-quantity="1" data-image="imagesprod/d1-removebg-preview.png" style="border:none;margin-bottom: 20px;border-radius: 10px;width: 150px;color:black; background-color: #5bccf6">Add to Cart</button></a>
                        </div>
                    </div>
                    <div class="col product-card" data-aos="zoom-in-right" data-aos-duration="1000">
                        <div class="image">
                            <img src="imagesprod/d2-removebg-preview.png" alt="">
                        </div>
                        <div class="content">
                            <h3>Viralcyde</h3>
                            <div class="price">P1900</div>
                        </div>
                        <div class="info">
                            <a href="#"><button class="btn btn-danger my-cart-btn navbar-btn" data-id="13" data-name="Viralcyde" data-summary="summary 10" data-price="1900" data-quantity="1" data-image="imagesprod/d2-removebg-preview.png" style="border:none;margin-bottom: 20px;border-radius: 10px;width: 150px;color:black; background-color: #5bccf6">Add to Cart</button></a>
                        </div>
                    </div>
                    <div class="col product-card" data-aos="zoom-in-right" data-aos-duration="1000">
                        <div class="image">
                            <img style="width: 238px;"src="imagesprod/d3-removebg-preview.png" alt="">
                        </div>
                        <div class="content">
                            <h3>Triple X Shampoo 10ml</h3>
                            <div class="price">P385</div>
                        </div>
                        <div class="info">
                            <a href="#"><button class="btn btn-danger my-cart-btn navbar-btn" data-id="14" data-name="Triple X Shampoo 10ml" data-summary="summary 11" data-price="385" data-quantity="1" data-image="imagesprod/d3-removebg-preview.png" style="border:none;margin-bottom: 20px;border-radius: 10px;width: 150px;color:black; background-color: #5bccf6">Add to Cart</button></a>
                        </div>
                    </div>
                    <div class="col product-card" data-aos="zoom-in-right" data-aos-duration="1000">
                        <div class="image">
                            <img style="width: 220px;" src="imagesprod/d4-removebg-preview.png" alt="">
                        </div>
                        <div class="content">
                            <h3>Wormal</h3>
                            <div class="price">P7</div>
                        </div>
                        <div class="info">
                            <a href="#"><button class="btn btn-danger my-cart-btn navbar-btn" data-id="15" data-name="Wormal" data-summary="summary 12" data-price="7" data-quantity="1" data-image="imagesprod/d4-removebg-preview.png" style="border:none;margin-bottom: 20px;border-radius: 10px;width: 150px;color:black; background-color: #5bccf6">Add to Cart</button></a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <br><br>
            <div class="product-container">
                <h2 class="title" style="font-weight: bold">Antibiotics / Anti-infective / Anti-bacterial</h2>
                <div class="product-slider">
                    <div class="row justify-content-start">
                    <div class="col-4 product-card" data-aos="zoom-in-right"data-aos-duration="1000" id="push">
                        <div class="image">
                            <img src="imagesprod/e1-removebg-preview.png" alt="">
                        </div>
                        <div class="content">
                            <h3>Premoxil 550</h3>
                            <div class="price">P13</div>
                        </div>
                        <div class="info">
                            <a href="#"><button class="btn btn-danger my-cart-btn navbar-btn" data-id="16" data-name="Premoxil 550" data-summary="summary 13" data-price="13" data-quantity="1" data-image="imagesprod/e2-removebg-preview.png" style="border:none;margin-bottom: 20px;border-radius: 10px;width: 150px;color:black; background-color: #5bccf6">Add to Cart</button></a>
                        </div>
                    </div>
                    <div class="col-4 product-card" data-aos="zoom-in-right" data-aos-duration="1000">
                        <div class="image">
                            <img src="imagesprod/e2-removebg-preview.png" alt="">
                        </div>    
                        <div class="content">
                            <h3>Premoxil Powder</h3>
                            <div class="price">P3200</div>
                        </div>
                        <div class="info">
                            <a href="#"><button class="btn btn-danger my-cart-btn navbar-btn" data-id="17" data-name="Premoxil Powder" data-summary="summary 14" data-price="3200" data-quantity="1" data-image="imagesprod/e2-removebg-preview.png" style="border:none;margin-bottom: 20px;border-radius: 10px;width: 150px;color:black; background-color: #5bccf6">Add to Cart</button></a>
                        </div>                                                
                </div>
            </div>
            </div>
            </div>
        </div>
    </section>
    <br><br>
    <div class="container-fluid" data-aos="flip-up" data-aos-duration="1000" id="contact">
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
        </div>

    </div>
    </div>




        <a href="#" id="top"><abbr title="Return to top"><img src="top.png" class="top"  style="position:fixed; right: 2rem; bottom: 2rem;"></abbr></a>
        <a href="#contact" id="bot"><abbr title="Go to bottom page"><img src="bot.png"  id="bot" class="bot" style="position:fixed; right: 2rem; bottom: 2rem;"></abbr></a>
        
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
     <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      <script>
  AOS.init();
</script>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="jquery.mycart.js"></script>
<script src="cart.js"></script>
    </body>
    
</html>