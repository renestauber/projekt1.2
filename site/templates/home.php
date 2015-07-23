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
    
    	<!-- Highlights -->
				<section class="wrapper style1">
					<div class="container">
						<div class="row 200%">
						
						<?php foreach($page->children() as $article): ?>
						
							<section class="4u 12u(narrower)">
								<div class="box highlight">
									<!--<i class="icon major fa-paper-plane"></i>-->
									<a href="<?php echo $article->relatedpage()?>" <i class="icon major fa-<?php echo $article->symbol()?>"></i></a>
								<h3><?php echo $article->title()?></h3>
									<?php echo $article->text()->kirbytext()?>
								</div>
							</section>
							
						<?php endforeach ?>	

						</div>
					</div>
				</section>
    
	
				
				<!--<div class="text">
     	 <h1><?php echo $page->title()->html() ?></h1>
      <?php echo $page->text()->kirbytext() ?>
    </div>-->

		

  </main>

<?php snippet('footer') ?>