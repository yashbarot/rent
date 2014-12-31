
<div class="header-one"></div>
<div class="header-two"></div>
<div class="container">
  <div class="row clearfix">
    <div class="col-md-12 column">
      <div class="row clearfix">
        <div class="col-md-4 column logo">
        
        <a href="#"><?php echo $this->Html->link(__('Rentalproperties.com'), array('controller' => 'pages', 'action' => 'display', 'home'), array('escape' => false)); ?></a>
        </div>
        <div class="col-md-8 column">
          <ul class="top-nav">
            <li><span class="btn btn-default abd-btn" disabled>AHMEDABAD</span></li>
            <li>
<?php echo $this->Html->image('post.png'); ?>
            </li>
            <li><a class="slogan" href="#">WE MAKE YOUR HOME SEARCH EASY</a></li>
            <li><i class="glyphicon glyphicon-earphone"></i>1234567899</li>
            <li><a href="#">FAQs</a></li>
            <li><a href="#"><?php echo $this->Html->link(__('Properties'), array('controller' => 'properties','action' => 'index'), array('escape' => false)); ?></a></li>
            <li><a href="#"><?php echo $this->Html->link(__('Add Property'), array('controller' => 'properties','action' => 'add'), array('escape' => false)); ?></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
