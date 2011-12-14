<div class="posts index">
	<table cellpadding="0" cellspacing="0">
	<?php
	$i = 0;
	foreach ($posts as $post): ?>
	<tr>
		<td><h2>                        <?php echo $this->Html->link(__($post['Post']['title']), array('action' => 'view', $post['Post']['id'])); ?>
		<?php /* echo h($post['Post']['title']); */ ?>&nbsp;</h2>
		<p><?php echo h($post['Post']['body']); ?>&nbsp;</p><br/>
		Last Modification : <?php echo h($post['Post']['modified']); ?>&nbsp;<br/></br/>
		</td>
	</tr>
<?php endforeach; ?>
	</table>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
