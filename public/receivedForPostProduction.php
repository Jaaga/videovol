<?php

include('header.php');

?>

<body>
		<div class="col-md-12">
			<div class="col-md-3">
			</div>
			<div class="col-md-6" >
				<table class="table table-bordered">
				<form>
					<thead>
						<tr>
							<th>Received for Post-Production View</th>
							<th>To Be Filled By Production Coordinator, State Coordinator and Mentors</th>
							<tr>
    				</thead>
    					<tr>
							<td valign="top"><label for="">Video Folder Title :</label>
							</td>

							<td>
								<input type="text" name= "videofoldertitle"class="form-control form-color" placeholder="">
							</td>
						</tr>

						<tr>
							<td valign="top"><label for="">Editor Currently in Charge of Footage :</label>
							</td>

							<td>
								<select name="select" class="form-control form-color">
									<option value="" >Select an Option</option>
									<option value="">a</option>
									<option value="">b</option>
									<option value="">c</option>
								</select>
							</td>
						</tr>

						<tr>
							<td valign="top"><label for="">Date Raw Footage Received in Goa from State Office :</label>
							</td>

							<td>
									<input type="text" name="dateofstory" id="dateRawFootageReceivedInGoaFromStateOffice" class="form-control form-color" placeholder="Enter Date">
							</td>
						</tr>

						<tr>
							<td valign="top"><label for="">Date Edited Video Received in Goa from State Office :</label>
							</td>

							<td>
									<input type="text" name="dateofstory" id="dateEditedVideoReceivedInGoaFromStateOffice" class="form-control form-color" placeholder="Enter Date">
							</td>
						</tr>

						<tr>
							<td valign="top"><label for="">Edit Status :</label></td>
							<td>
								<select name="select" class="form-control form-color">
									<option value="" >Select an Option</option>
									<option value="">Cleared</option>
									<option value="">On Hold</option>
									<option value="">Cleaning</option>
								</select>
							</td>
							
						</tr>

						<tr>
							<td valign="top"><label for="">Payment :</label></td>
							<td>
								<select name="select" class="form-control form-color">
									<option value="" >Select an Option</option>
									<option value="">Approved</option>
									<option value="">On Hold</option>
								</select>
							</td>
						</tr>

						<tr>
							<td valign="top"><label for="">Date Rough Cut Done :</label></td>
							<td>
									<input type="text" name="dateofstory" id="dateRoughCutDone" class="form-control form-color" placeholder="Enter Date">
							</td>
						</tr>

						<tr>
							<td valign="top"><label for="">Rough Cut Review Notes :</label></td>
							<td>
								<textarea name="impactprocess"class="form-control" rows="2" placeholder="Rough Cut Review Notes"></textarea>
							</td>
						</tr>

						<tr>
							<td valign="top"><label for="">Final Video Rating :</label></td>
							<td>
								<select name="select" class="form-control form-color">
									<option value="" >Select an Option</option>
									<option value="">1 - Poor</option>
									<option value="">2 - Average</option>
									<option value="">1 - Good</option>
									<option value="">2 - Excellent</option>
								</select>
							</td>
						</tr>
							
				</table>

				<div style="text-align: center">
					<div><p>Please check your entries carefully before submitting</p></div>
					<div style="text-align: center"><a href="#" class="button button-rounded button-flat-caution">Submit</a></div>
					</div>
				</div>
			</form>
		</div>
</body>