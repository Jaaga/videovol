<?php

include('header.php');
include'../controller/ImpactController.php';
include'util.php';
include_once("../model/StoryDB.php");
$un = $_GET['un'];
$storyData = getStoryByUniqueNumber($un);
?>

<body>
		<div class="col-md-12">
			<div class="col-md-3">
			</div>
			<div class="col-md-6" >
				<table class="table table-bordered">
					<form name="creatStory-form" method="GET" action="index.php">
					<thead>
						<tr><th>Impact Follow Up View</th><th>To Be Filled By State Coordinators and Mentors</th><tr>
    				</thead>

    				<tbody>
						<tr>
							<td valign="top"><label for="">Unique ID :</label>
							</td>

							<td>
								<input type="text" name= "uniquenumber"class="form-control form-color" placeholder=<?php echo "'" . $un . "'";?>>
							</td>
						</tr>

						<tr>
							<td valign="top"><label for="">Story Description :</label>
							</td>
							<td>
								<textarea name="description"class="form-control" rows="2" placeholder=<?php echo "'" . $storyData['description'] . "'";?>></textarea>
							</td>
						</tr>

						<tr>
							<!--<td valign="top"><label for="">Impact Possible :</label>-->
							
								<!--no matter what this needs to be here -->
							<?php yesNoSelect('Impact Possible', 'impactpossible', $storyData['impactpossible']);?>
							
						</tr>

						<tr>
							<td valign="top"><label for="">Target Official :</label>
							</td>
							<td>
								<textarea name="targetofficial"class="form-control" rows="2" placeholder="Target Official"><?php echo "'" . $storyData['targetofficial'] . "'"?></textarea>
							</td>
						</tr>

						<tr>
							<?php yesNoSelect('Impact Follow Up Happening ', 'impactfollowup', $storyData['impactfollowup']);?>
																			
						</tr>

						<tr>
							<td valign="top"><label for="">If No, Why Not? :</label></td>
							<td>
								<textarea name="impactfollowupnotes"class="form-control" rows="2" placeholder="If No, Why Not?"></textarea>
							</td>
							
						</tr>

						<tr>
							<td valign="top"><label for="">Impact Process :</label></td>
							<td>
								<textarea name="impactprocess"class="form-control" rows="2" placeholder="Impact Process"></textarea>
							</td>
							
						</tr>

						<tr>
							<td valign="top"><label for="">Impact Status :</label></td>
							<td>
								<select name="impactstatus" class="form-control form-color">
									<?php $value = $storyData['impactstatus']; ?>
									<option value="Select"  	
									<?php if (strcmp($value, "Select") == 0) echo " selected "; ?> 
							           >Select</option>
													<option value="Acheived"
									<?php if (strcmp($value, "Acheived") == 0) echo " selected "; ?> 				
									   >Acheived</option>
													<option value="Not Acheived" 
									<?php if (strcmp($value, "Not Acheived") == 0) echo " selected "; ?> 
								       >Not Acheived</option>
													
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
				</form>
			</div>
		</div>
</body>
							

