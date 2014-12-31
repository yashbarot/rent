<div class="properties view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Property'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Property'), array('action' => 'edit', $property['Property']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Property'), array('action' => 'delete', $property['Property']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $property['Property']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Properties'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Property'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<!-- <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Users'), array('controller' => 'users', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New User'), array('controller' => 'users', 'action' => 'add'), array('escape' => false)); ?> </li>
		 -->					</ul>
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 3 -->

		<div class="col-md-9">			
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<tbody>
				<tr>
		<th><?php echo __('Id'); ?></th>
		<td>
			<?php echo h($property['Property']['id']); ?>
			&nbsp;
		</td>
</tr>
<!-- <tr>
		<th><?php echo __('Created Id'); ?></th>
		<td>
			<?php echo h($property['Property']['created_id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Created'); ?></th>
		<td>
			<?php echo h($property['Property']['created']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Modifier Id'); ?></th>
		<td>
			<?php echo h($property['Property']['modifier_id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Modified'); ?></th>
		<td>
			<?php echo h($property['Property']['modified']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Recstatus'); ?></th>
		<td>
			<?php echo h($property['Property']['recstatus']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('User'); ?></th>
		<td>
			<?php echo $this->Html->link($property['User']['id'], array('controller' => 'users', 'action' => 'view', $property['User']['id'])); ?>
			&nbsp;
		</td>
</tr> -->
<tr>
		<th><?php echo __('Rooms'); ?></th>
		<td>
			<?php echo h($property['Property']['rooms']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Distance'); ?></th>
		<td>
			<?php echo h($property['Property']['distance']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Location'); ?></th>
		<td>
			<?php echo h($property['Property']['location']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Furniture Details'); ?></th>
		<td>
			<?php echo h($property['Property']['furniture_details']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Construction Style'); ?></th>
		<td>
			<?php echo h($property['Property']['construction_style']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Photo'); ?></th>
		<td>
			
			&nbsp;
			<?php echo $this->Html->image('uploads/properties/' . $property['Property']['photo'],['width' => '100']); ?>
		</td>
</tr>
<tr>
		<th><?php echo __('Remarks'); ?></th>
		<td>
			<?php echo h($property['Property']['remarks']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

