<?php

include('header.php');

?>

<body>
		<div class="col-md-12">
			<div class="col-md-3">
			</div>
			<div class="col-md-6" >
				<table class="table table-bordered">
					<thead>
						<tr><th>Footage Check View</th><th>To Be Filled By Production Coordinator, State Coordinator and Mentors</th><tr>
    				</thead>

    			

					<tr>
							<td valign="top"><label for="">Date Raw Footage Received-In State Office or Goa (for ROI) SS</label></td>
							<td>
									<input type="text" name="dateofstory" id="dateRawFootageReceivedInStateOfficeOrGoa" class="form-control form-color" placeholder="Enter Date"> <!-- js in header.php -->
							</td>
					</tr>

					<tr>
							<td valign="top"><label for="">(INSERT ALL FOOTAGE CHECK HEADINGS)</label></td>
							<td>
									What input type is this?
							</td>
					</tr>

					<tr>
							<td valign="top"><label for="">Editor Currently in Charge of Footage</label>
							</td>

							<td>
								<select name="select" class="form-control form-color">
									<option value="" >Select an Option</option>
									<option value="">a</option>
									<option value="">b</option>
									<option value="">c</option>
									<option value="">d</option>
								</select>
							</td>
					</tr>

					<tr>
							<td valign="top"><label for="">Footage Review</label>
							</td>

							<td>
								input type?
							</td>
					</tr>

					<tr>
							<td valign="top"><label for="">Raw footage rating</label>
							</td>

							<td>
								<select name="select" class="form-control form-color">
									<option value="" >Select an Option</option>
									<option value="">1. Poor</option>
									<option value="">2. Average</option>
									<option value="">3. Good</option>
									<option value="">4. Excellent</option>
								</select>
							</td>
					</tr>
				</table>
				<div style="text-align: center">
					<div><p>Please check your entries carefully before submitting</p></div>
					<div style="text-align: center"><a href="#" class="button button-rounded button-flat-caution">Submit</a></div>
					</div>
							
		
							
			</div>
		</div>
</body>