<?php
	$days   = array();
	$months = array("January", "February", "March", "April", "May", "June", "July", "August", 
					"September", "October", "November", "December");

	for ($i = 0; $i <= 30; $i++)
		$days[$i] = $i+1;
	
	$years = array('2015', '2016', '2017');
?>

<form action="admin.php" method="post" class="">
	<div class="form-group">
		<div class="col-md-1 pull-right" style="text-align: center;">
			<button type="submit" name="logout" value="true" class="btn btn-primary btn-lg">Logout</button>
		</div>
	</div>
</form>

<div class="row">
	<div class="col-md-3 well">
		<div class="alert alert-warning alert-dismissible fade in" role="alert">
	      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
	      <em class="text-danger">Instructions: </em> <br>
	      Write down the notice details. <br>
	      Select the related tag. <br>
	      Select the notice date. Click publish.
	    </div>
		<form action="notice.php" method="POST" name="notice_form" role="form" class="form-horizontal">
			<fieldset>
 				<div class="form-group">
					<label for="pubNotice"><h3>Publish a notice</h3></label>
					<textarea name="notice_value" id="pubNotice" rows="5" class="form-control"></textarea>
				</div>
				<div class="form-group">
					<label for="holiday" class="control-label radio-inline">
						<input type="radio" name="tag" id="holiday" value="holiday"> Classes Off
					</label>
					<label for="test" class="control-label radio-inline">
						<input type="radio" name="tag" id="test" value="test"> Test
					</label>
					<label for="fee" class="control-label radio-inline">
						<input type="radio" name="tag" id="fee" value="fee"> Fee Collection
					</label>
				</div>
				<div class="form-group">
					<label for="" class="control-label">Notice Date
						<select name="day" id="day" >
							<option value="" selected>Day</option>
							<?php foreach ($days as $day): ?>
								<option value="<?=$day?>"><?=$day?></option>
							<?php endforeach?>
						</select>

						<select name="month" id="month">
							<option value="" selected>Month</option>
							<?php foreach ($months as $month): ?>
								<option value="<?=$month?>"><?=$month?></option>
							<?php endforeach?>
						</select>

						<select name="year" id="year">
							<option value="" selected>Year</option>
							<?php foreach ($years as $year): ?>
								<option value="<?=$year?>"><?=$year?></option>
							<?php endforeach?>
						</select>
					</label>
				</div>
				<div class="form-group">
					<label for="batch" class="control-label col-md-2">Batch</label>
					<div class="col-md-4">
						<input id="batch" name="batch" type="text" class="form-control" placeholder="Batch">
					</div>
					
				</div>
				<div id="error" style="width: auto;"></div>
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
</div>