<?php snippet('header') ?>

  <main class="main" role="main">

    
				
				<!--<div class="text">
     	 <h1><?php echo $page->title()->html() ?></h1>
      <?php echo $page->text()->kirbytext() ?>
    </div>-->
    
     <?php if ($page->text() != "" ) {?>
    
		<section class="wrapper style2">
					<div class="container">
						<header class="major">
							<!--<h2>A gigantic heading you can use for whatever</h2>-->
							<!--<p>With a much smaller subtitle hanging out just below it</p>-->
							 <?php echo $page->text()->kirbytext() ?>
							
						</header>
					</div>
				</section>
<?php };?>

		<section class="wrapper style1">
					<div class="container">
						<div class="row">
						
						<?php foreach($page->children() as $article): ?>

  					
    			
    						
    						<section style="width: 100%;">
								<div class="box post">
									<?php if($image = $article->image()): ?>								
									<div class="image left"><img src="<?php echo $image->url() ?>" alt=""></div>
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