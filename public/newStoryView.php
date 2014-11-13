<?php

include('header.php');
include_once("../model/StoryDB.php");
include("../model/ccDB.php");
if (isset($_GET['un'])) {
    $un = $_GET['un'];
	echo "isset un";
	$storyData = getDataByUniqueNumber($un);
	#$impactData = getImpactDataByUniqueNumber($un);
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
							<input name="uniquenumber" type="text" class="form-control form-color" placeholder="enter Unique ID here">
						</td>
					</tr>

					<tr>
						<td valign="top"><label for="">CC Name :</label>
						</td>

						<td>
							<select name="ccname" class="form-control form-color">
                    <option value="1">CCname</option>
                        <?php foreach(getNames() as $ccname) 
                            echo '<option value="'.$ccname.'">'.$ccname.'
                    </option>';
                        ?>
                </select>
						</td>
					</tr>

					<tr>
						<td valign="top"><label for="">State :</label>
						</td>

						<td>
							<select name="state" class="form-control form-color">
								<option value="1">state</option>
								<?php foreach(getstate() as $location)
								echo '<option value ="'.$location.'">'.$location.'
							</option>';?>
						</select>
						</td>
					</tr>

					<tr>
						<td valign="top"><label for="">Program :</label>
						</td>

						<td>
							<select name="program" class="form-control form-color">
									<option value="" >Select a Program</option>
									<option value="PACS">PACS</option>
									<option value="OAK">OAK</option>
									<option value="IU">IU</option> <!-- javaScript for this is in header.js -->
							</select>
						</td>
					</tr>

					<tr>
						<td valign="top"><label for="">IU Themes :</label>
						</td>

						<td>
							<select name = "iutheme"class="form-control form-color">
								<option value="">Select an IU Theme</option>
								<option value ="Caste/Identity">Caste & Identity</option>
								<option value ="Gender">Gender</option>
								<option value ="Infrastructure">Infrastructure</option>
								<option value ="Education">Education</option>
								<option value ="Forced Eviction">Forced Eviction</option>
								<option value ="Conflict">Conflict</option>
								<option value ="Health">Health</option>
								<option value ="Art/Culture">Art & Culture</option>
								<option value ="Environment">Environment</option>
								<option value ="Development">Development</option>
								<option value ="Corruption">Corruption</option>
								<option value ="Technology">Technology</option>
							</select>
						</td>

					</tr>

					<tr>
						<td valign="top"><label for="">Story Description :</label>
						</td>

						<td>
							<textarea name="storydescription" class="form-control" rows="2" placeholder="One Line Description for Story Idea"></textarea>
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
							<select name="ccpair" class="form-control form-color">
                    <option value="1">CCname</option>
                        <?php foreach(getNames() as $ccname) 
                            echo '<option value="'.$ccname.'">'.$ccname.'
                    </option>';
                        ?>
                </select>
						</td>

					</tr>

					<tr>
						<td valign="top"><label for="">Mentor :</label>
						</td>

						<td>
							<select name="mentor" class="form-control form-color">
                    <option value="1">CCname</option>
                        <?php foreach(getNames() as $ccname) 
                            echo '<option value="'.$ccname.'">'.$ccname.'
                    </option>';
                        ?>
                </select>
						</td>

					</tr>

					<tr>
						<td valign="top"><label for="">Story Type :</label>
						</td>

						<td>
							<select name="storytype" class="form-control form-color">
									<option value="" >Select Story Type</option>
									<option value="Issue">Issue</option>
									<option value="Impact">Impact</option>
									<option value="Special Project">Special Project</option> 
									<option value="Profile Video">Profile Video</option>
									<option value="Documentary">Documentary</option> 
									<option value="Follow Up Video">Follow Up Video</option>  
							</select>
						</td>

					</tr>

					<tr>
						<td valign="top"><label for="">Shoot Plan :</label>
						</td>

						<td>
							<textarea name = "shootplan"class="form-control" rows="2" placeholder="Shoot Plan"></textarea>
						</td>



					</tr>

					<tr>
						<td valign="top"><label for="">Related Story UID :</label>
						</td>
						<td>

						</td>

					</tr>

					<tr>
						<td valign="top"><label for="">Impact Possible :</label>
						</td>

						<td>
							<select name="impactpossible"class="form-control form-color">
								<option value="">Select an Option</option>
								<option value="Yes">Yes</option>
								<option value="No">No</option>
							</select>
							
						</td>

					</tr>

					<tr>
						<td valign="top"><label for="">Target Official :</label>
						</td>

						<td>
							<textarea name="targetofficial"class="form-control" rows="2" placeholder="One Line Description for Target Official"></textarea>
						</td>

					</tr>

					<tr>
						<td valign="top"><label for="">Desired Change :</label>
						</td>

						<td>
							<textarea name = "desiredchange"class="form-control" rows="2" placeholder="One Line Description for Desired Change"></textarea>
						</td>

					</tr>

					<tr>
						<td valign="top"><label for="">CC's Impact Plan (in brief) :</label>
						</td>

						<td>
							<textarea name = "impactplan"class="form-control" rows="4" placeholder="CC's Impact Plan (in brief)"></textarea>
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