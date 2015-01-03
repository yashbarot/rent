<div class="properties index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Properties'); ?></h1>
			</div>
		</div><!-- end col md 12 -->
	</div><!-- end row -->



	<div class="row">

	
		<div class="col-md-12">
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<thead>
					<tr>
						<!-- <th><?php echo $this->Paginator->sort('id'); ?></th>
						<th><?php echo $this->Paginator->sort('created_id'); ?></th>
						<th><?php echo $this->Paginator->sort('created'); ?></th>
						<th><?php echo $this->Paginator->sort('modifier_id'); ?></th>
						<th><?php echo $this->Paginator->sort('modified'); ?></th>
						<th><?php echo $this->Paginator->sort('recstatus'); ?></th>
						<th><?php echo $this->Paginator->sort('user_id'); ?></th>
						 --><th><?php echo $this->Paginator->sort('rooms'); ?></th>
						<th><?php echo $this->Paginator->sort('distance'); ?></th>
						<th><?php echo $this->Paginator->sort('location'); ?></th>
						<th><?php echo $this->Paginator->sort('furniture_details'); ?></th>
						<th><?php echo $this->Paginator->sort('construction_style'); ?></th>
						<th><?php echo $this->Paginator->sort('photo'); ?></th>
						<th><?php echo $this->Paginator->sort('remarks'); ?></th>
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($properties as $property): ?>
					<tr>
						<!-- <td><?php echo h($property['Property']['id']); ?>&nbsp;</td>
						<td><?php echo h($property['Property']['created_id']); ?>&nbsp;</td>
						<td><?php echo h($property['Property']['created']); ?>&nbsp;</td>
						<td><?php echo h($property['Property']['modifier_id']); ?>&nbsp;</td>
						<td><?php echo h($property['Property']['modified']); ?>&nbsp;</td>
						<td><?php echo h($property['Property']['recstatus']); ?>&nbsp;</td>
								<td>
			<?php echo $this->Html->link($property['User']['id'], array('controller' => 'users', 'action' => 'view', $property['User']['id'])); ?>
		</td> -->
						<td><?php echo h($property['Property']['rooms']); ?>&nbsp;</td>
						<td><?php echo h($property['Property']['distance']); ?>&nbsp;</td>
						<td><?php echo h($property['Property']['location']); ?>&nbsp;</td>
						<td><?php echo h($property['Property']['furniture_details']); ?>&nbsp;</td>
						<td><?php echo h($property['Property']['construction_style']); ?>&nbsp;</td>
						<td><?php echo h($property['Property']['photo']); ?>&nbsp;</td>
						<td><?php echo h($property['Property']['remarks']); ?>&nbsp;</td>
						<?php  if (Auth::hasRoles(array('user')) ) { ?>
						<td class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $property['Property']['id']), array('escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $property['Property']['id']), array('escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $property['Property']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $property['Property']['id'])); ?>
						</td>
						<?php } ?>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>

			<p>
				<small><?php echo $this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?></small>
			</p>

			<?php
			$params = $this->Paginator->params();
			if ($params['pageCount'] > 1) {
			?>
			<ul class="pagination pagination-sm">
				<?php
					echo $this->Paginator->prev('&larr; Previous', array('class' => 'prev','tag' => 'li','escape' => false), '<a onclick="return false;">&larr; Previous</a>', array('class' => 'prev disabled','tag' => 'li','escape' => false));
					echo $this->Paginator->numbers(array('separator' => '','tag' => 'li','currentClass' => 'active','currentTag' => 'a'));
					echo $this->Paginator->next('Next &rarr;', array('class' => 'next','tag' => 'li','escape' => false), '<a onclick="return false;">Next &rarr;</a>', array('class' => 'next disabled','tag' => 'li','escape' => false));
				?>
			</ul>
			<?php } ?>

		</div> <!-- end col md 9 -->
	</div><!-- end row -->


</div><!-- end containing of content -->