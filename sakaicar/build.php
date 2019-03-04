<!DOCTYPE html>
<html lang="en">
  <head>
    

<?php
$prefix = 'build';
$title = 'Building SakaiCar';
?>
    <title>SakaiCar - <?= $title ?></title>
<?php require_once('head.php'); ?>
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    

<?php require_once('header.php'); ?>


  <div class="site-section"  data-aos="fade">
    <div class="container-fluid">
      
      <div class="row justify-content-center">
        
        <div class="col-md-7">
          <div class="row mb-5">
            <div class="col-12 ">
            <h2 class="site-section-heading text-center"><?= $title ?></h2>
            </div>
          </div>
        </div>
    
      </div>
<div class="row" id="lightgallery">
<?php
$files1 = scandir('images');
sort($files1);
foreach($files1 as $file) {
    if ( strpos($file, $prefix) !== 0 ) continue;
?>
    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="images/<?= $file ?>" data-sub-html="<h4>SakaiCar</h4>">
    <a href="#"><img src="images/<?= $file ?>" alt="IMage" class="img-fluid"></a>
    </div>
<?php } ?>
</div>

      </div>
    </div>
  </div>

  <div class="footer py-4">
    <div class="container-fluid text-center">
      <p>
      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      Copyright &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      </p>
    </div>
  </div>

    

    
    
  </div>

<?php require_once('foot.php'); ?>
    
  </body>
</html>
