<div class="properties form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Add Property'); ?></h1>
			</div>
		</div>
	</div>



	<div class="row">
		 <div class="col-md-3">
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading">Actions</div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">

																<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Properties'), array('action' => 'index'), array('escape' => false)); ?></li>
									<!-- <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Users'), array('controller' => 'users', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New User'), array('controller' => 'users', 'action' => 'add'), array('escape' => false)); ?> </li>
							 --></ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		
		<div class="col-md-6">
			<?php echo $this->Form->create('Property', array('role' => 'form', 'enctype' => 'multipart/form-data')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('rooms', array('class' => 'form-control', 'placeholder' => 'Rooms'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('distance', array('class' => 'form-control', 'placeholder' => 'Distance'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('location', array('class' => 'form-control', 'placeholder' => 'Location'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('furniture_details', array('class' => 'form-control', 'placeholder' => 'Furniture Details'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('construction_style', array('class' => 'form-control', 'placeholder' => 'Construction Style'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('photo', array('class' => 'form-control','type' => 'file'));
					?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('remarks', array('class' => 'form-control', 'placeholder' => 'Remarks'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
		<div class="col-md-3"></div>
		
	</div><!-- end row -->
</div>
