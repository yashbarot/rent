<!DOCTYPE html>
<html lang="en">
  <head>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

	<?php
		echo $this->Html->meta('icon');
	?>

  <?php
    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->Html->css('style.css');
    echo $this->Html->css('bootstrap.min.css');
    echo $this->fetch('script'); 
    echo $this->Html->script('jquery.min.js'); 
    echo $this->Html->script('bootstrap.min.js'); 
    echo $this->Html->script('scripts.js'); 

  ?>
  </head>
  <body>
     <div>
      <?php echo $this->Element('navigation'); ?>
    </div>
    
    <div class="container">
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
    </div>
  </body>
</html>
