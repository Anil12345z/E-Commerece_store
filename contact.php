<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VRJ Metal Hub</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital@1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="static/myapp/form.css">
    <link rel="stylesheet" href="static/myapp/headerfooter.css">
    

    <script src="../use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
</head>
<body>
<div class="grid-container">
        <header id="header-container">
            <label class="menu-btn">
                <i class="fas fa-bars"></i>
            </label>
            <div class="topnav head" id="myTopnav" id="">
                <div class="brand"><a href="#"><img src="static/myapp/brand_logo.png" id="brand-logo"></a>
                </div>

                <div class="wrap">
                    <div class="other">
                        <a href="index.php" class="abtn" id="home">Home</a>
                        <a href="newArrivals/index.php" class="abtn" id="new">New Arrivals</a>
                        <a href="offer/index.php" class="abtn" id="offers">Offers</a>
                    </div>

                    <div class="shifthover">
                        
                        <a href="prodCat/indexf7b2.php?categories=1">Diyas &amp; Lanterns</a>
                        
                        <a href="prodCat/index2d1f.php?categories=2">Urli</a>
                        
                        <a href="prodCat/index34b9.php?categories=3">Home Decor</a>
                        
                        <a href="prodCat/index5fcb.php?categories=4">Wall Decor</a>
                        
                        <a href="prodCat/indexbbda.php?categories=5">Door Handles</a>
                        
                        <a href="prodCat/indexe747.php?categories=6">Brass Door Knockers</a>
                        
                        <a href="prodCat/indexc0bf.php?categories=7">Bells &amp; Chimes</a>
                        
                        <a href="prodCat/index21b3.php?categories=8">Sprituality</a>
                       
                        
                        
                    </div>
                </div>
            </div>
        </header>
        <div class="container">
            <div class="contact-section">
                <h2 class="ct-section-head">CONTACT US</h2>
                <div class="row contact-fields">
                    <div class="col-md-8 left-form">
                        <form method="post">
                            <input type="hidden" name="csrfmiddlewaretoken" value="bFfpIJFKB97n4rWNG8fZzMVbQkCRAq6wE3f59P8g5gZw5zueHgBmR6gC1aNJsXxf">
                            <div class="form-group">
                                <label class="sr-only" for="fname">First Name *</label>
                                <input class="required form-control" id="fname" name="first_name" placeholder="First Name&nbsp;*" type="text" required>
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="lname">Last Name *</label>
                                <input class="required form-control" id="lname" name="last_name" placeholder="Last Name&nbsp;*" type="text" required>
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="contactEmail">Email *</label>
                                <input class="required form-control h5-email" id="contactEmail" name="email" placeholder="Email&nbsp;*" type="text" required>
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="contactPhone">Phone *</label>
                                <input class="required form-control h5-phone" id="contactPhone" name="phone" placeholder="Phone&nbsp;*" type="text" required>
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="comment">Type your message here</label>
                                <textarea class="required form-control" id="comment" name="message" placeholder="Type your message here&nbsp;*" rows="6" required></textarea>
                            </div>
                            <button class="btn btn-accent" type="submit" onclick="popup()">Submit</button>
                        </form>
                    </div>
                    <div class="col-md-4 contact-info">
                        <div class="email1">
                            <h2>Email</h2>
                            <a href="mailto:metalhub007@gmail.com"> metalhub007@gmail.com </a>
                            <a href="mailto:hv@vrjmetalhub.com">hv@vrjmetalhub.com</a>
                        </div>
                        <div class="location">
                            <h2>Visit</h2>
                            <p>9/46 Kuncha Naya Bansh, Chhipeti Mahavir Ganj,<br> Aligarh-202001</p>
                        
                        
                          <h2>Map location</h2>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d220.4139028486969!2d78.06879886934793!3d27.882866048327568!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3974a57729a3bb81%3A0x513bab94dc452081!2sMahavir%20Ganj%20Market!5e0!3m2!1sen!2sin!4v1684649447060!5m2!1sen!2sin" width="350" height="145" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <div class="content">
              <div class="left box">
                <div class="lower">
                  <div class="footertopic">CONTACT US</div>
                 <div class="phone" style="margin-bottom: 4vh;"><h1 style="font-size: 1.6rem;color: #b8860b;">Phone</h1>
                  <p>7017724173</p>
                  <p>8439986641</p>
                  
                  </div>
                  <div class="email" style="margin-bottom: 4vh;"><h1 style="font-size: 1.6rem;color: #b8860b;">Email</h1>
                  <p>metalhub007@gmail.com</p>
                  <p>hv@vrjmetalhub.com</p>
                    
                  </div>
                  <div class="email" style="margin-bottom: 4vh;"><h1 style="font-size: 1.6rem;color: #b8860b;">Address</h1>
                    <p>9/46 Kuncha Naya Bansh, Chhipeti Mahavir Ganj,<br> Aligarh-202001</p>
                  </div>
                </div>
              </div>
               <div class="middle box">
                <div class="footertopic" style="font-weight:normal;">USEFUL LINKS</div>
                  <div><a href="../index.php">Home</a></div>
                  <div><a href="index.php">About Us</a></div>
                  <div><a href="../contact.php">Contact Us</a></div>
                  <div><a href="index.php#privacy">Privacy Policy</a></div>
               </div>
              
              <div class="middle box">
                <div class="footertopic">CATEGORIES</div>
                
                    <div><a href="../prodCat/indexf7b2.php?categories=1"> Diyas &amp; Lanterns </a></div>
                
                    <div><a href="../prodCat/index2d1f.php?categories=2"> Urli </a></div>
                
                    <div><a href="../prodCat/index34b9.php?categories=3"> Home Decor </a></div>
                
                    <div><a href="../prodCat/index5fcb.php?categories=4"> Wall Decor </a></div>
                
                    <div><a href="../prodCat/indexbbda.php?categories=5"> Door Handles </a></div>
                
                    <div><a href="../prodCat/indexe747.php?categories=6"> Brass Door Knockers </a></div>
                
                    <div><a href="../prodCat/indexc0bf.php?categories=7"> Bells &amp; Chimes </a></div>
                
                    <div><a href="../prodCat/index21b3.php?categories=8"> Sprituality </a></div>
                
                </div>
            </div>
            <div class="bottom">
              <p style="color:white";>Copyright © 2021 <a href="#">VRJ Metal Hub</a></p>
            </div>
          </footer>
    </div>
    
</body>
<script>
const menu = document.querySelector(".menu-btn");
const wrap = document.querySelector(".wrap");

menu.addEventListener('click', function(){
  if(wrap.style.visibility === "hidden"){
    wrap.style.visibility = "visible"
  }
  else {
    wrap.style.visibility = "hidden"
  }
    
})
</script>

<!-- Mirrored from www.vrjmetalhub.com/about/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 May 2023 16:34:01 GMT -->
</html>