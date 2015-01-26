<div class="row">
	<div class="col-md-3 well">
		<form action="admin.php" method="POST">
			<fieldset>
				<div class="form-group">
					<label for="pubNotice"><h3>Publish a notice</h3></label>
					<textarea name="notice_value" id="pubNotice" rows="5" class="form-control">
					</textarea>
				</div>
				<div class="pull-right">
				<button type="submit" name="publish" value="true" class="btn btn-primary">Publish</button>
				</div>
			</fieldset>
		</form>
	</div>
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