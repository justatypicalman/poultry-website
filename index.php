<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
        <title>Home | Progressive Poultry</title>      
        <link rel="icon" href="icon.png">
        <link rel="stylesheet" href="style.css">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@900&family=Rubik:wght@300&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/d876f86ab9.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    </head>
    <body>    
        <div class="dimmer">
            <div class="banner">
                    <span class="exit">&times;</span>
                    <button type="button" onclick="window.location.href='products.php';" id = "shop" class="btn btn-default navbar-btn" style="border-radius: 10px;width: 150px;color:black; background-color: #5bccf6">Shop Now</button>
            </div>
        </div>
        <nav class="navbar fixed-top navbar-expand-sm navbar-light" id="nav">      
            <a href="#" class="navbar-brand" style="margin-top: 20px;"><img class="logo" src="icon.png"><div class="fonttitle" id="poultry" style="display: inline;"><div class="fonttitle" id="progressive" style="color: #030e12; display: inline;">PROGRESSIVE</div> POULTRY</div></a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu" style="margin-right: 10px;">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarMenu" style="margin-left: 20px; ">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="#" class = "nav-link" id="nav_present">Home</a>
                </li>
                <li class="nav-item">
                    <a href="products.php" class = "nav-link">Products</a>
                </li>
                <li class="nav-item">
                    <a href="about.php" class = "nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a href="#contact" class = "nav-link">Contact Us</a>
                </li>
                <button type="button" class="btn btn-default navbar-btn" style="border-radius: 10px;width: 150px;color:black; background-color: #5bccf6">Sign Up</button>
            </ul>           
        </div>
        </nav>
        <div data-aos="fade-right" data-aos-duration="3000" class="container-fluid" style="padding: 0; position: relative;">
                <img src="images/3201116.webp"  class="img-fluid" style="width: 100%;object-fit:cover; height: 500px;" alt="">
                <div class="text-block">
                    <h2>YOUR ONE STOP SHOP FOR YOUR ANIMAL FEEDS, VETERINARY MEDICINES AND MORE. <br><a class="about" href="about.php">LEARN MORE -></a></h2>
                </div>
            </div>


        <div class="container-fluid" style="background: #5bccf6; background-size: cover; width: 100%;" id="sliderimg" data-aos="fade-up" data-aos-duration="3000">
        <br><br><br>
            <!-- Slider main container -->
<div class="swiper">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
      <!-- Slides -->
      <div class="swiper-slide" ><img id="img1" src="images/slider1.jpg"></div>
      <div class="swiper-slide"><img id="img2" src="images/slider2.jpg"></div>
      <div class="swiper-slide"><img id="img3" src="images/slider3.jpg"></div>
     
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>
  
        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
  
  </div>
        
        <br><br><br><br>
</div>
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




        <a href="#" id="top" class="bottop" ><abbr title="Return to top"><img src="top.png" class="top"  style="position:fixed; right: 2rem; bottom: 2rem;"></abbr></a>
        <a href="#contact" id="bot"  class="bottop"><abbr title="Go to bottom page"><img src="bot.png" id="bot" class="bot" style="position:fixed; right: 2rem; bottom: 2rem;"></abbr></a>
        
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script>
            var header = $("#nav");
            var banner = $(".banner");
            var body = $("body");
            var dimmer = $(".dimmer");
            var exit = $(".exit");
            var container = $(".container");
            var contf = $("#sliderimg");
            var contact = $("#contact");
            var bot = $("#bot");
            var top = $("#top");
            var bottop = $(".bottop");
            var fluid = $(".img-fluid");
            var text = $(".text-block");

            $(document).ready(function(){
                container.hide();
                contf.hide();
                contact.hide();
                dimmer.show();
                bottop.hide();
                fluid.hide();
                text.hide();
                header.css("opacity", 0.1);
                header.css("pointer-events", "none");
                $('.exit').click(function(){
                    banner.fadeOut();
                    text.slideDown(2000);
                    container.fadeIn(2000);
                    contf.fadeIn(4000);
                    fluid.fadeIn();
                    contact.fadeIn(2000);
                    header.fadeTo(700, 1);
                    header.css("pointer-events", "auto");
                    bottop.show();
            })
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
        <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
        <script>
            const swiper = new Swiper('.swiper', {
            autoplay: {
            delay: 3000,
            disableOnInteraction: false,
            },
            loop: true,
      
            pagination: {
            el: '.swiper-pagination',
            clickable: true,
            },
      
            navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
             },
      

      });
      </script>
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
        <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script>
    const swiper = new Swiper('.swiper', {
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        loop: true,
      
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
      
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
      

      });

      </script>
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      <script>
  AOS.init();
</script>
    </body>
</html>