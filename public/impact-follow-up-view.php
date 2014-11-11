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
						<tr><th>Impact Follow Up View</th><th>To Be Filled By State Coordinators and Mentors</th><tr>
    				</thead>

    				<tbody>
						<tr>
							<td valign="top"><label for="">Unique ID :</label>
							</td>

							<td>
								<input type="text" class="form-control form-color" placeholder="temporarily placed. View only (non editable on spreadsheet)">
							</td>
						</tr>

						<tr>
							<td valign="top"><label for="">Story Description :</label>
							</td>
							<td>
								<textarea class="form-control" rows="2" placeholder="One Line Description for Story"></textarea>
							</td>
						</tr>

						<tr>
							<td valign="top"><label for="">Impact Possible :</label>
							</td>
							<td>
							<select name="select" class="form-control form-color">
									<option value="" >Select an Option</option>
									<option value="">Yes</option>
									<option value="">No</option>
							</select>
						</td>
						</tr>

						<tr>
							<td valign="top"><label for="">Target Official :</label>
							</td>
							<td>
								<textarea class="form-control" rows="2" placeholder="Target Official"></textarea>
							</td>
						</tr>

						<tr>
							<td valign="top"><label for="">Impact Follow Up Happening :</label></td>
							<td>
								<select name="select" class="form-control form-color">
									<option value="" >Select an Option</option>
									<option value="">Yes</option>
									<option value="">No</option>
								</select>
							</td>
							
						</tr>

						<tr>
							<td valign="top"><label for="">If No, Why Not? :</label></td>
							<td>
								<textarea class="form-control" rows="2" placeholder="If No, Why Not?"></textarea>
							</td>
							
						</tr>

						<tr>
							<td valign="top"><label for="">Impact Process :</label></td>
							<td>
								<textarea class="form-control" rows="2" placeholder="Impact Process"></textarea>
							</td>
							
						</tr>

						<tr>
							<td valign="top"><label for="">Impact Status :</label></td>
							<td>
								<select name="select" class="form-control form-color">
									<option value="" >Select an Option</option>
									<option value="">Acheived</option>
									<option value="">Not Acheived</option>
								</select>
							</td>
							
						</tr>

						<tr>
							<td valign="top"><label for="">Date of Impact :</label></td>
							<td>
									<input type="text" name="dateofstory" id="impactMonthOrYearOfImpactDatepick" class="form-control form-color" placeholder="Enter Date">
							</td>
							
		
							
						</tr>

						<tr>
							<td valign="top"><label for="">Community Screening Done? :</label></td>
							<td>
								<select name="select" class="form-control form-color">
									<option value="" >Select an Option</option>
									<option value="">Yes</option>
									<option value="">No</option>
								</select>
							</td>
							
						</tr>

						<tr>
							<td valign="top"><label for="">No. of People Whom the Video was Screened :</label></td>
							<td>

								<input type="number" min="0" name="time-in-weeks" class="form-control form-color" placeholder="Enter a Value" value ="">

							</td>
							
						</tr>

						<tr>
							<td valign="top"><label for="">Details of Community Screening :</label>
							</td>
							<td>
								<textarea class="form-control" rows="4" placeholder="Details of Community Screening" ></textarea>
							</td>
						</tr>

						<tr>
							<td valign="top"><label for="">No. of Officials Involved :</label></td>
							<td>

								<input type="number" min="0" name="time-in-weeks" class="form-control form-color" placeholder="Enter a Value" value ="">

							</td>
							
						</tr>

						<tr>
							<td valign="top"><label for="">No. of Officials to Whom the Video was Screened :</label></td>
							<td>

								<input type="number" min="0" name="time-in-weeks" class="form-control form-color" placeholder="Enter a Value" value ="">

							</td>
							
						</tr>

						<tr>
							<td valign="top"><label for="">Details of Screenings to Officials :</label>
							</td>
							<td>
								<textarea class="form-control" rows="4" placeholder="Details of Screenings to Officials" ></textarea>
							</td>
						</tr>

						<tr>
							<td valign="top"><label for="">Collaborations :</label>
							</td>
							<td>
								<textarea class="form-control" rows="4" placeholder="Collaborations" ></textarea>
							</td>
						</tr>

						<tr>
							<td valign="top"><label for="">No. of People Involved :</label></td>
							<td>

								<input type="number" min="0" name="time-in-weeks" class="form-control form-color" placeholder="Enter a Value" value ="">

							</td>
							
						</tr>

						<tr>
							<td valign="top"><label for="">No. of People Impacted :</label></td>
							<td>

								<input type="number" min="0" name="time-in-weeks" class="form-control form-color" placeholder="Enter a Value" value ="">

							</td>
							
						</tr>

						<tr>
							<td valign="top"><label for="">No. of Villages Impacted :</label></td>
							<td>

								<input type="number" min="0" name="time-in-weeks" class="form-control form-color" placeholder="Enter a Value" value ="">

							</td>
							
						</tr>
					</tbody>
				</table>
					<div style="text-align: center">
					<div><p>Please check your entries carefully before submitting</p></div>
					<div style="text-align: center"><a href="#" class="button button-rounded button-flat-caution">Submit</a></div>
					</div>
			</div>
		</div>
</body>
							

