<?php

include('header.php');

?>

<body>
		<div class="col-md-12">
			<div class="col-md-3">
			</div>
			<div class="col-md-6" >
				<table class="table table-hover">
					<thead><tr><th>New Story View</th><th>To Be Filled By State Coordinators and Mentors</th><tr>
    				</thead>
					<tr>
						<td valign="top"><label for="">Unique ID :</label>
						</td>

						<td>
							<input type="text" class="form-control form-color" placeholder="enter Unique ID here">
						</td>
					</tr>

					<tr>
						<td valign="top"><label for="">CC Name :</label>
						</td>

						<td>
							<select name="select" class="form-control form-color">
									<option value="" >Select a CC</option>
									<option value="">a</option>
									<option value="">b</option>
									<option value="">c</option> <!-- javaScript for this is in header.js -->
							</select>
						</td>
					</tr>

					<tr>
						<td valign="top"><label for="">State :</label>
						</td>

						<td>
							<select name="select" class="form-control form-color">
									<option value="" >Select a State</option>
									<option value="">a</option>
									<option value="">b</option>
									<option value="">c</option> <!-- javaScript for this is in header.js -->
							</select>
						</td>
					</tr>

					<tr>
						<td valign="top"><label for="">Program :</label>
						</td>

						<td>
							<select name="select" class="form-control form-color">
									<option value="" >Select a Program</option>
									<option value="">PACS</option>
									<option value="">OAKS</option>
									<option value="">IU</option> <!-- javaScript for this is in header.js -->
							</select>
						</td>
					</tr>

					<tr>
						<td valign="top"><label for="">IU Themes :</label>
						</td>

						<td>
							<select class="form-control form-color">
								<option value="">Select an IU Theme</option>
								<option value ="">Caste & Identity</option>
								<option value ="">Gender</option>
								<option value ="">Infrastructure</option>
								<option value ="">Education</option>
								<option value ="">Forced Eviction</option>
								<option value ="">Conflict</option>
								<option value ="">Health</option>
								<option value ="">Art & Culture</option>
								<option value ="">Environment</option>
								<option value ="">Development</option>
								<option value ="">Corruption</option>
								<option value ="">Technology</option>
							</select>
						</td>

					</tr>

					<tr>
						<td valign="top"><label for="">Story Description :</label>
						</td>

						<td>
							<textarea class="form-control" rows="2" placeholder="One Line Description for Story Idea"></textarea>
						</td>

					</tr>

					<tr>
						<td valign="top"><label for="">Date Story Pitched :</label>
						</td>

						<td>
							<input type="text" name="dateofstorypitched" id="dateStoryPitched" class="form-control form-color" placeholder="Select Date">
						</td>

					</tr>

					<tr>
						<td valign="top"><label for="">Working with CC :</label>
						</td>

						<td>
							<select name="select" class="form-control form-color">
									<option value="" >Select Working with CC</option>
									<option value="">a</option>
									<option value="">b</option>
									<option value="">c</option> 
							</select>
						</td>

					</tr>

					<tr>
						<td valign="top"><label for="">Mentor :</label>
						</td>

						<td>
							<select name="select" class="form-control form-color">
									<option value="" >Select Mentor</option>
									<option value="">a</option>
									<option value="">b</option>
									<option value="">c</option> 
							</select>
						</td>

					</tr>

					<tr>
						<td valign="top"><label for="">Story Type :</label>
						</td>

						<td>
							<select name="select" class="form-control form-color">
									<option value="" >Select Story Type</option>
									<option value="">Issue</option>
									<option value="">Impact</option>
									<option value="">Special Project</option> 
									<option value="">Profile Video</option>
									<option value="">Documentary</option> 
									<option value="">Follow Up Video</option>  
							</select>
						</td>

					</tr>

					<tr>
						<td valign="top"><label for="">Shoot Plan :</label>
						</td>

						<td>
							<textarea class="form-control" rows="2" placeholder="Shoot Plan"></textarea>
						</td>



					</tr>

					<tr>
						<td valign="top"><label for="">Related Story UID :</label>
						</td>

					</tr>

					<tr>
						<td valign="top"><label for="">Impact Possible :</label>
						</td>

						<td>
							<select class="form-control form-color">
								<option value="">Select an Option</option>
								<option value="">Yes</option>
								<option value="">No</option>
							</select>
						</td>

					</tr>

					<tr>
						<td valign="top"><label for="">Target Official :</label>
						</td>

						<td>
							<textarea class="form-control" rows="2" placeholder="One Line Description for Target Official"></textarea>
						</td>

					</tr>

					<tr>
						<td valign="top"><label for="">Desired Change :</label>
						</td>

						<td>
							<textarea class="form-control" rows="2" placeholder="One Line Description for Desired Change"></textarea>
						</td>

					</tr>

					<tr>
						<td valign="top"><label for="">CC's Impact Plan (in brief) :</label>
						</td>

						<td>
							<textarea class="form-control" rows="4" placeholder="CC's Impact Plan (in brief)"></textarea>
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