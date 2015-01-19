<div class="container-fluid">
	<div class="row" id="top">
		<span class="head"><?= isset($title) ? htmlspecialchars($title) : 'Arun Computers' ?></span>
	</div>
	<div class="text-danger" style="text-align: center;">Bring the print receipt to avail discount!</div>
	<div class="well">
		<form action="print.php" class="form-horizontal" method="POST">
			<div class="form-group row">
						<label for="srial" class="control-label col-md-2 col-md-offset-4" >Enter unique serial number</label>
						<div class="col-md-2">
							<input id="srial" type="text" class="form-control" name="srial" placeholder="Unique Serial Number: ">
						</div>
			</div>
			<div style="text-align: center;">
					<button type="submit" name="preview" value ="true" class="btn btn-primary">Next</button>
			</div>
		</form>
	</div>
</div>