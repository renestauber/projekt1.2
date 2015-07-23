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
				
		<section class=" wrapper style1">
				<div class="container">			
								<form>
									<div class="row 50%">
										<div class="6u 12u(mobilep)">
											<input type="text" name="vorname" id="name" placeholder="Vorname" />
										</div>
										<div class="6u 12u(mobilep)">
											<input type="text" name="nachname" id="email" placeholder="Nachname" />
										</div>
									</div>
									<div class="row 50%">
										<div class="12u">
											<input type="email" id="message" placeholder="E-Mail" rows="5"></input>
										</div>
									</div>
									<div class="row 50%">
										<div class="12u">
											<ul class="actions">
												<li><input type="submit" class="button alt" value="Anmelden" /></li>
											</ul>
										</div>
									</div>
								</form>
								</div>
							</section>		
				
				
				<!--<div class="text">
     	 <h1><?php echo $page->title()->html() ?></h1>
      <?php echo $page->text()->kirbytext() ?>
    </div>-->

		

  </main>

<?php snippet('footer') ?>