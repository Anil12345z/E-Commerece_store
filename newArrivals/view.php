<?php

include 'connect1.php';



?>


<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.vrjmetalhub.com/desc/23/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 May 2023 16:34:22 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VRJ Metal Hub</title>
    <link href="../cdn.jsdelivr.net/npm/bootstrap%405.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <script src="../cdn.jsdelivr.net/npm/bootstrap%405.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital@1&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../static/myapp/headerfooter.css">
    <link rel="stylesheet" href="../static/myapp/desc.css">
    <script src="../use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
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
       
        <?php

              if (isset($_GET['pid'])) {
         
           if(isset($_GET['pid']))
           $pid = $_GET['pid'];
            $select_products = $conn->prepare("SELECT * FROM `products` WHERE id = ?");
            $select_products->execute([$pid]);
            if($select_products->rowCount() > 0){
               while($fetch_products = $select_products->fetch(PDO::FETCH_ASSOC)){
         ?>

         
          <form action="" method="post" >
      <input type="hidden" name="pid" value="<?= $fetch_products['id']; ?>">
      <input type="hidden" name="name" value="<?= $fetch_products['name']; ?>">
      <input type="hidden" name="color" value="<?= $fetch_products['color']; ?>">
      <input type="hidden" name="dimensions" value="<?= $fetch_products['dimensions']; ?>">
      <input type="hidden" name="weight" value="<?= $fetch_products['weight']; ?>">
      <input type="hidden" name="material" value="<?= $fetch_products['material']; ?>">
      <input type="hidden" name="description" value="<?= $fetch_products['description']; ?>">
      <input type="hidden" name="category" value="<?= $fetch_products['category']; ?>">
      <input type="hidden" name="image" value="<?= $fetch_products['image']; ?>">
      
    

        <div class="main-container">

        

     <div class="wrapper">
            <div class="container1">
              <img src="../uploaded_img/<?= $fetch_products['image']; ?>">
            </div>
          </div>
          <div class="wrapper1">
            <div   class="container2">
            
              <h2 style="text-align:center"> <?= $fetch_products['name']; ?></h2>
              <div class="desc-box">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                  <li  style="list-style-type: none;" class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Details</button>
                  </li>
                  <br>
                  <li style="list-style-type: none;" class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Description</button>
                  </li>
                </ul>
                <div  class="tab-content" id="pills-tabContent">
                  <div  class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <span ><h4>Color:</h4> <p><?= $fetch_products['color']; ?></p></span>
                    <span><h4>Dimensions:</h4> <p><?= $fetch_products['dimensions']; ?></p></span>
                    <span><h4>Shipping Weight:</h4> <p><?= $fetch_products['weight']; ?></p></span>
                    <span><h4>Material:</h4> <p><?= $fetch_products['material']; ?></p></span>
                  </div>
                  <br>
                  <h5>Description -👇</h5>
                  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"><?= $fetch_products['description']; ?></div>
                </div>
    
              </div>
              <a  style="text-align:center;" id="enquiry" href="contact2.php"><h5> Enquiry</h5> </a>
            </div>
          </div>
        </div>
          </form>


        <?php
    }
  } else {
    echo '<p class="empty">No product found!</p>';
  }
} else {
  echo '<p class="empty">Product ID is missing!</p>';
}
?>


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