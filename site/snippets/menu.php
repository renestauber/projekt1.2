<nav id="nav">

	
  <ul>
    <?php foreach($pages->visible() as $p): ?>
    <li>
      <a <?php e($p->isOpen(), ' class="current"') ?> href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
      
      <?php if($p->hasVisibleChildren()): ?>
      <ul>
        <?php foreach($p->children()->visible() as $p): ?>
        <li>
          <a href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
        </li>
        <?php endforeach ?>
      </ul>
      <?php endif ?>

    </li>
    <?php endforeach ?>
  </ul>
</nav>

</div>
<!-- Banner -->
				<section id="banner">
					<header>
						<h2></h2>
						<!--<a href="#" class="button">Learn More</a> -->
					</header>
				</section>