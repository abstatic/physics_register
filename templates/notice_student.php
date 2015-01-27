<div class="row">
	<div class="col-md-9">
		<table class="table table-hover">
			<thead>
				<th>Date</th>
				<th>Batch</th>
				<th>Notice</th>
			</thead>
			<tbody>
			<?php foreach ($past_notice as $instance): ?>
				<?php 
					$tag = $instance["tag"];

					if ($tag == "holiday")
						$class = "success";
					elseif ($tag == "test")
						$class = "danger";
					elseif ($tag == "fee")
						$class = "warning";
					else
						$class = "info"

				?>
				<tr class="<?=$class?>">
					<td class="col-md-2"><?php echo date('D, d, M, Y', strtotime($instance["date"]))?></td>
					<td class="col-md-1"><?=$instance["batch"]?></td>
					<td><?=$instance["notice"]?></td>
				</tr>
			<?php endforeach ?>
			</tbody>
		</table>
	</div>
	<div class="col-md-3">
		<img src="img/legend.jpg" alt="Legend" class="thumbnail" />
	</div>
</div>