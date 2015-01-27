<div class="row">
	<div class="col-md-9">
		<table class="table table-hover">
			<thead>
				<th>Date</th>
				<th>Notice</th>
			</thead>
			<tbody>
			<?php foreach ($past_notice as $instance): ?>
				<tr>
					<td><?=$instance["date"]?></td>
					<td><?=$instance["notice"]?></td>
				</tr>
			<?php endforeach ?>
			</tbody>
		</table>
	</div>
</div>