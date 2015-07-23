<?php snippet('header') ?>
<style>
    .google-maps {
        position: relative;
        padding-bottom: 50%; // This is the aspect ratio
        height: 0;
        overflow: hidden;
    }
    .google-maps iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100% !important;
        height: 100% !important;
    }
</style>
  <main class="main" role="main">

    
	<section class="wrapper style2">
					<div class="container">
						<header class="major">
							<!--<h2>A gigantic heading you can use for whatever</h2>-->
							<!--<p>With a much smaller subtitle hanging out just below it</p>-->
							 <?php echo $page->text()->kirbytext() ?>
							<div class="google-maps"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6889.642727095676!2d11.187694538781349!3d49.19065388058062!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479f41ad7a69cdf7%3A0x3f12a260c6bcbd13!2sRother+Str.+8%2C+91161+Hilpoltstein!5e0!3m2!1sde!2sde!4v1437082362397" width="300" height="300" frameborder="0" style="border:0" allowfullscreen></iframe></div>
						
						
						</header>
						
						
					</div>
				</section>
				
				<!--<div class="text">
     	 <h1><?php echo $page->title()->html() ?></h1>
      <?php echo $page->text()->kirbytext() ?>
    </div>-->

		

  </main>

<?php snippet('footer') ?>