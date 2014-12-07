<?php

include('header.php');
include_once("../model/StoryDB.php");
?>
<body>
	<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					 <h1>Training and Mentorship Dashboard</h1>
						<ul id="tabs" style="background-attachment: fixed">
						
		        			<li><a href="TMView.php" class="button button-rounded button-flat-action">New Stories</a></li>
		        		
		        		
		       				<li><a href="#" class="button button-rounded button-flat-action">Impact Follow Up</a></li>
		       			

		        			<li><a href="TM_footage.php" class="button button-rounded button-flat-action">Footage Review</a></li>
						
		    			</ul>
	    		</div>
	    	</div>
	</div>
<div class="col-md-12">
				<div id="impactfollowup">
	    				<h3>Impact Updates</h3>
	    			<table id="tmView" class="table table-hover table-condensed">
	    					<tr>
	    						 <th style="white-space: nowrap">Impact Possible</th><th>Target Official</th><th style="padding-right: 20%">Desired Change (CTA)</th><th style="padding-right: 20%">CC's Impact Plan</th><th>Impact Follow Up Happening</th><th style="padding-right: 20%">If No, Why Not</th><th style="padding-right: 20%">Impact Process</th><th>Impact Status</th><th>Date of Impact</th><th>Community Screening Done</th><th>No. of People Video Screened to</th><th style="padding-right: 20%">Details of Community Screening</th><th>No. of Officials Involved</th><th>No. of Officials Video Screened to</th><th style="padding-right: 20%">Details of Screenings to Officials</th><th>Collaborations</th><th>No. of People Involved</th><th>No. of People Impacted</th><th>No. of Villages Impacted</th>
	    					 </tr>
	    				
	    				<tbody>
	    					<?php
	    						$impactfollowup_row = array();
	    						$result = getDataForTMImpact();
	    						while($impactfollowup = mysqli_fetch_assoc($result))
								{
									print "<tr>";
									foreach ($impactfollowup as $key => $value) {
										print "<td>";
										if(isset($value))
	    										echo $value;
	    								else
	    										echo "Empty";
	    								print "</td>";
									}
									print "</tr>";
								}
	    					?>
	    				</tbody>
	    			</table>
	    		</div>
	    	</div>
	</body>