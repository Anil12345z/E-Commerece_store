
<?php

include 'connect1.php';



?>


<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.vrjmetalhub.com/newArrivals/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 May 2023 16:03:19 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VRJ Metal Hub</title>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital@1&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../static/myapp/prodCat.css">
    <link rel="stylesheet" href="../static/myapp/headerfooter.css">
    <script src="../../use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  </head>
<body>
    <div class="grid-container">

        <header id="header-container">
        <label class="menu-btn">
            <i class="fas fa-bars"></i>
         </label>
            <div class="topnav" id="myTopnav">
              <div class="brand"><a href="../index.php"><img src="../static/myapp/brand_logo.png" id="brand-logo"></a></div>

              <div class = "wrap">
                 <div class = "other">
                   <a href="../index.php" class="abtn" id="home">Home</a>
                    <a href="index.php" class="abtn" id="new">New Arrivals</a>
                    <a href="../offer/index.php" class="abtn" id="offers">Offers</a>
                  </div>
                
                  <div class="shifthover">
                    
                      <a href="../prodCat/indexf7b2.php?categories=1">Diyas &amp; Lanterns</a>
                    
                      <a href="../prodCat/index2d1f.php?categories=2">Urli</a>
                    
                      <a href="../prodCat/index34b9.php?categories=3">Home Decor</a>
                    
                      <a href="../prodCat/index5fcb.php?categories=4">Wall Decor</a>
                    
                      <a href="../prodCat/indexbbda.php?categories=5">Door Handles</a>
                    
                      <a href="../prodCat/indexe747.php?categories=6">Brass Door Knockers</a>
                    
                      <a href="../prodCat/indexc0bf.php?categories=7">Bells &amp; Chimes</a>
                    
                      <a href="../prodCat/index21b3.php?categories=8">Sprituality</a>
                    
                  </div>
                </div>
              </div>
        </header>


        <div class="main-container">
            <div class="main-container-1">
              <img src="../static/myapp/New%20Arrivals.jpg" style="width:100%">
            </div>

            <div class="main-container-2">

            

       <?php
      $show_products = $conn->prepare("SELECT * FROM `products`");
      $show_products->execute();
      if($show_products->rowCount() > 0){
         while($fetch_products = $show_products->fetch(PDO::FETCH_ASSOC)){  
   ?>
    <form action="" method="post" class="box">
      <input type="hidden" name="pid" value="<?= $fetch_products['id']; ?>">
      <input type="hidden" name="name" value="<?= $fetch_products['name']; ?>">
      <input type="hidden" name="color" value="<?= $fetch_products['color']; ?>">
      <input type="hidden" name="dimensions" value="<?= $fetch_products['dimensions']; ?>">
      <input type="hidden" name="weight" value="<?= $fetch_products['weight']; ?>">
      <input type="hidden" name="material" value="<?= $fetch_products['material']; ?>">
      <input type="hidden" name="description" value="<?= $fetch_products['description']; ?>">
      <input type="hidden" name="category" value="<?= $fetch_products['category']; ?>">
      <input type="hidden" name="image" value="<?= $fetch_products['image']; ?>">
      </form>
   



   <div class="main" id="36">
   <a href="view.php?pid=<?= $fetch_products['id']; ?>">
      <img src="../uploaded_img/<?= $fetch_products['image']; ?>" alt="">
      <h4> <?= $fetch_products['name']; ?> </h4>
         </a>
   </div>

   <?php
         }
      }else{
         echo '<p class="empty">no products added yet!</p>';
      }
   ?>

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
              <div class="footertopic">USEFUL LINKS</div>
              <div><a href="../index.php">Home</a></div>
              <div><a href="../about/index.php">About Us</a></div>
              <div><a href="../contact.php">Contact Us</a></div>
              <div><a href="../about/index.php#privacy">Privacy Policy</a></div>
            </div>
            <div class="middle box">
              <div class="footertopic">CATEGORIES</div>
             
                    <div><a href="../prodCat/indexf7b2.php?categories=1">Diyas &amp; Lanterns</a></div>
               
                    <div><a href="../prodCat/index2d1f.php?categories=2">Urli</a></div>
               
                    <div><a href="../prodCat/index34b9.php?categories=3">Home Decor</a></div>
               
                    <div><a href="../prodCat/index5fcb.php?categories=4">Wall Decor</a></div>
               
                    <div><a href="../prodCat/indexbbda.php?categories=5">Door Handles</a></div>
               
                    <div><a href="../prodCat/indexe747.php?categories=6">Brass Door Knockers</a></div>
               
                    <div><a href="../prodCat/indexc0bf.php?categories=7">Bells &amp; Chimes</a></div>
               
                    <div><a href="../prodCat/index21b3.php?categories=8">Sprituality</a></div>
               
            </div>
          </div>
          <div class="bottom">
            <p>Copyright © 2021 <a href="#">VRJ Metal Hub</a></p>
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

<!-- Mirrored from www.vrjmetalhub.com/newArrivals/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 May 2023 16:04:33 GMT -->
</html>