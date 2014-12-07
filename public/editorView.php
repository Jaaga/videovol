<?php

include('header.php');

?>

<body>
		<div class="col-md-12">
			<div class="col-md-3">
			</div>
			<div class="col-md-6" >
				<form>
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>Editor View</th>
								<th>To Be Filled By Editors</th>
							<tr>
	    				</thead>
	    					<tr>
								<td valign="top"><label for="">Date Rough Cut Done :</label></td>
								<td>
										<input type="text" name="" id="dateRoughCutDone" class="form-control form-color" placeholder="Enter Date">
								</td>
							</tr>

							<tr>
								<td valign="top"><label for="">Date Edit is complete in Goa :</label></td>
								<td>
										<input type="text" name="" id="dateEditIsCompleteInGoa" class="form-control form-color" placeholder="Enter Date">
								</td>
							</tr>

							<tr>
								<td valign="top"><label for="">Final Video Rating :</label></td>
								<td>
									<select name="select" class="form-control form-color">
										<option value="" >Select an Option</option>
										<option value="">1 - Poor</option>
										<option value="">2 - Average</option>
										<option value="">3 - Good</option>
										<option value="">4 - Excellent</option>
									</select>
								</td>
							</tr>

							<tr>
								<td valign="top"><label for="">Date Uploaded to YouTube :</label></td>
								<td>
										<input type="text" name="" id="dateUploadedToYouTube" class="form-control form-color" placeholder="Enter Date">
								</td>
							</tr>

							<tr>
								<td valign="top"><label for="">YouTube URL :</label>
								</td>

								<td>
									<input type="text" name= ""class="form-control form-color" placeholder="">
								</td>
							</tr>
								
					</table>
							<div style="text-align: center">
								<div><p>Please check your entries carefully before submitting</p></div>
								<div style="text-align: center"><a href="#" class="button button-rounded button-flat-caution">Submit</a></div>
							</div>
				</form>
			</div>
		</div>
</body>

