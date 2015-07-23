<?php snippet('header') ?>

  <main class="main" role="main">

    
	<section class="wrapper style2">
					<div class="container">
						<header class="major">
							<!--<h2>A gigantic heading you can use for whatever</h2>-->
							<!--<p>With a much smaller subtitle hanging out just below it</p>-->
							 <?php echo $page->text()->kirbytext() ?>
							 <?php if($image = $page->image()): ?>								
							 <div class="image featured"><img src="<?php echo $image->url() ?>" alt=""></div>
							 <?php endif ?>
							
						</header>
					</div>
				</section>
				
				<!--<div class="text">
     	 <h1><?php echo $page->title()->html() ?></h1>
      <?php echo $page->text()->kirbytext() ?>
    </div>-->

		

  </main>

<?php snippet('footer') ?>