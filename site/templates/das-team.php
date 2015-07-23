<?php snippet('header') ?>

  <main class="main" role="main">

    
				
				<!--<div class="text">
     	 <h1><?php echo $page->title()->html() ?></h1>
      <?php echo $page->text()->kirbytext() ?>
    </div>-->

		<section class="wrapper style1">
					<div class="container">
						<div class="row">
						
						<?php foreach($page->children() as $article): ?>

  					
    			
    						
    						<section class="6u 12u(narrower)">
								<div class="box post">
									<?php if($image = $article->image()): ?>								
									<a href="#" class="image left"><img src="<?php echo $image->url() ?>" alt=""></a>
									<?php endif ?>
									<div class="inner">
										<h3><?php echo $article->title()?></h3>
										<?php echo $article->text()->kirbytext()?>
									</div>
								</div>
							</section>
    						
    						
  					

  						<?php endforeach ?>
  						
							
							
							
							
						</div>
						<div class="row">
							

  </main>

<?php snippet('footer') ?>