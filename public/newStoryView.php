<?php

include('header.php');
include_once("../model/StoryDB.php");
include("../model/ccDB.php");
include_once("util.php");
if (isset($_GET['un'])) {
    $un = $_GET['un'];
	echo "isset un";
	$storyData = getStoryByUniqueNumber($un);
}
?>
<h1><?php if (isset($un)) echo "Story Unique Number: ". $un; ?></h1>
<body>
		<div class="col-md-12">
			<div class="col-md-3">
			</div>
			<div class="col-md-6" >
				
				<table class="table table-hover">
				<form name="creatStory-form" method="GET" action="index.php">
					<?php if (isset($un)) echo "<input type=hidden name=un value= \"" . $un . "\"";?>
					<thead><tr><th>New Story View</th><th>To Be Filled By State Coordinators and Mentors</th><tr>
    				</thead>
					<tr>
						<td valign="top"><label for="">Unique ID :</label>
						</td>

						<td>
							<input type="text" name="uniquenumber" class="form-control form-color"
<?php if (isset($storyData)) echo "value= \"" . $un . "\""; ?> placeholder="enter Unique ID here">
						</td>
					</tr>

					<tr>
						<td valign="top"><label for="">CC Name :</label>
						</td>

						<td>
							<select name="ccname" class="form-control form-color">
								<?php if(isset($storyData))
								{
								echo "<option value = '" . $storyData['ccname'] . "'>".$storyData['ccname']."</option>";
							    }
								else{
                    echo "<option value='1'>CCname</option>";
                
                         foreach(getNames() as $ccname) 
                            echo '<option value="'.$ccname.'">'.$ccname.'
                    </option>';
                }
                        ?>
                </select>
						</td>
					</tr>

					<tr>
						<td valign="top"><label for="">State :</label>
						</td>

						<td>
							<select name="state" class="form-control form-color">
								
								<?php if(isset($storyData))
								{
								echo "<option value = '" . $storyData['state'] . "'>".$storyData['state']."</option>";
							    }
								else
								{
                   				 	echo "<option value='1'>State</option>";
								 	foreach(getstate() as $location)
									echo '<option value ="'.$location.'">'.$location.'
									</option>';
								}
							?>
						</select>
						</td>
					</tr>

					<tr>
						<td valign="top"><label for="">Program :</label>
						</td>

						<td>
							<select name="program" class="form-control form-color">
								<?php $value = $storyData['program']; ?>
									<option value="Select"  	
									<?php if (strcmp($value, "Select") == 0) echo " selected "; ?> 
							           >Select</option>
													<option value="PACS"
									<?php if (strcmp($value, "PACS") == 0) echo " selected "; ?> 				
									   >PACS</option>
													<option value="OAK" 
									<?php if (strcmp($value, "OAK") == 0) echo " selected "; ?> 
								       >OAK</option>
													<option value="IU" 
									<?php if (strcmp($value, "IU") == 0) echo " selected "; ?> 
								       >IU</option>							       
							</select>
						</td>
					</tr>

					<tr>
						<td valign="top"><label for="">IU Themes :</label>
						</td>

						<td>
							<select name = "iutheme"class="form-control form-color">
								<?php $theme = $storyData['iutheme']; ?>
								<option value="select"
								<?php if (strcmp($theme, "select") == 0) echo "selected";?>
								>select</option>
								<option value="Caste/Identity"
									<?php if (strcmp($theme, "Caste/Identity") == 0) echo " selected "; ?> 				
									   >Caste/Identity</option>
								<option value="Gender"
									<?php if (strcmp($theme, "Gender") == 0) echo " selected "; ?> 				
									   >Gender</option>
								<option value="Infrastructure"
									<?php if (strcmp($theme, "Infrastructure") == 0) echo " selected "; ?> 				
									   >Infrastructure</option>
								<option value="Education"
									<?php if (strcmp($theme, "Education") == 0) echo " selected "; ?> 				
									   >Education</option>

								<option value="Forced Eviction"
									<?php if (strcmp($theme, "Forced Eviction") == 0) echo " selected "; ?> 				
									   >Forced Eviction</option>
								<option value="Conflict"
									<?php if (strcmp($theme, "Conflict") == 0) echo " selected "; ?> 				
									   >Conflict</option>
								<option value="Health"
									<?php if (strcmp($theme, "Health") == 0) echo " selected "; ?> 				
									   >Health</option>
								<option value="Art/Culture"
									<?php if (strcmp($theme, "Art/Culture") == 0) echo " selected "; ?> 				
									   >Art/Culture</option>
								<option value="Environment"
									<?php if (strcmp($theme, "Environment") == 0) echo " selected "; ?> 				
									   >Environment</option>
								<option value="Development"
									<?php if (strcmp($theme, "Development") == 0) echo " selected "; ?> 				
									   >Development</option>

								<option value="Corruption"
									<?php if (strcmp($theme, "Corruption") == 0) echo " selected "; ?> 				
									   >Corruption</option>
								<option value="Technology"
									<?php if (strcmp($theme, "Technology") == 0) echo " selected "; ?> 				
									   >Technology</option>
							</select>
						</td>

					</tr>

					<tr>
						<td valign="top"><label for="">Story Description :</label>
						</td>

						<td>
							<textarea name="storydescription" class="form-control" rows="2" placeholder="One Line Description for Story Idea"><?php if (isset($storyData)) echo $storyData['description']; ?></textarea>
						</td>

					</tr>

					<tr>
						<td valign="top"><label for="">Date Story Pitched :</label>
						</td>

						<td>
							<input type="text" name="dateofstorypitched" id="dateStoryPitched" class="form-control form-color" <?php if (isset($storyData)) echo "value= \"" . $storyData['storydate'] . "\""; ?> placeholder="Select Date">
						</td>

					</tr>

					<tr>
						<td valign="top"><label for="">Working with CC :</label>
						</td>

						<td>
							<select name="ccpair" class="form-control form-color">

                    		<?php if(isset($storyData))
								{
								echo "<option value = '" . $storyData['ccpair'] . "'>".$storyData['ccpair']."</option>";
							    }
								else{
                    		echo "<option value='1'>CCpair</option>";
                
                        		 foreach(getNames() as $ccname) 
                            echo '<option value="'.$ccname.'">'.$ccname.'
                    		</option>';
                    			}
                        	?>
                		</select>
						</td>

					</tr>

					<tr>
						<td valign="top"><label for="">Mentor :</label>
						</td>

						<td>
							<select name="mentor" class="form-control form-color">
                    		<?php if(isset($storyData))
								{
								echo "<option value = '" . $storyData['mentor'] . "'>".$storyData['mentor']."</option>";
							    }
								else
								{
                    				echo "<option value='1'>CCmentor</option>";
                        			foreach(getNames() as $ccname) 
                            		echo '<option value="'.$ccname.'">'.$ccname.'
                    			</option>';
                    			}
                        ?>
                </select>
						</td>

					</tr>

					<tr>
						<td valign="top"><label for="">Story Type :</label>
						</td>

						<td>
							<select name="storytype" class="form-control form-color">

								<?php $type = $storyData['storytype']; ?>
								
								<option value="select"
								<?php if (strcmp($type, "select") == 0) echo "
								selected"; ?>
								>select</option>
								<option value ="Issue"
								<?php if (strcmp($type, "Issue") == 0) echo "selected"; ?>
								>Issue</option>
								<option value ="Impact"
								<?php if (strcmp($type, "Impact") == 0) echo "selected"; ?>
								>Impact</option>
								<option value ="SpecialProject"
								<?php if (strcmp($type, "SpecialProject") == 0) echo "selected"; ?>
								>SpecialProject</option>
								<option value ="ProfileVideo"
								<?php if (strcmp($type, "ProfileVideo") == 0) echo "selected"; ?>
								>ProfileVideo</option>
								<option value ="Documentary"
								<?php if (strcmp($type, "Documentary") == 0) echo "selected"; ?>
								>Documentary</option>
								<option value ="FollowUpVideo"
								<?php if (strcmp($type, "FollowUpVideo") == 0) echo "selected"; ?>
								>FollowUpVideo</option>
									
							</select>
						</td>

					</tr>

					<tr>
						<td valign="top"><label for="">Shoot Plan :</label>
						</td>

						<td>
							<textarea name = "shootplan"class="form-control" rows="2" placeholder="Shoot Plan"><?php if(isset($storyData)) echo $storyData['shootplan'] ; ?></textarea>
						</td>



					</tr>

					<tr>
						<td valign="top"><label for="">Related Story UID :</label>
						</td>
						<td>

						</td>

					</tr>

					<tr>
						<td>
							<?php yesNoSelect('Impact Possible', 'impactpossible', $storyData['impactpossible']);?>
							
						</td>

					</tr>

					<tr>
						<td valign="top"><label for="">Target Official :</label>
						</td>

						<td>
							<textarea name="targetofficial"class="form-control" rows="2" placeholder="One Line Description for Target Official"><?php if(isset($storyData)) echo  $storyData['targetofficial'] ; ?></textarea>
						</td>

					</tr>

					<tr>
						<td valign="top"><label for="">Desired Change :</label>
						</td>

						<td>
							<textarea name = "desiredchange"class="form-control" rows="2" placeholder="One Line Description for Desired Change"><?php if(isset($storyData)) echo $storyData['desiredchange']; ?></textarea>
						</td>

					</tr>

					<tr>
						<td valign="top"><label for="">CC's Impact Plan (in brief) :</label>
						</td>

						<td>
							<textarea name = "impactplan"class="form-control" rows="4" placeholder="CC's Impact Plan (in brief)"><?php if(isset($storyData)) echo  $storyData['impactplan'] ; ?></textarea>
						</td>

					</tr>
				</table>
				<div style="text-align: center">
		<div><p>Please check your entries carefully before submitting</p></div>
		<div style="text-align: center"><input type="submit" name="action" value= <?php if (isset($_GET['un'])) echo "update"; else echo "add"; ?> class="button button-rounded button-flat-caution"></div>
		
	
	</div>
</form>
					
			</div>

		</div>
</body>