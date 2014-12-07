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
		        		
		        		
		       				<li><a href="TM_impactfollow.php" class="button button-rounded button-flat-action">Impact Follow Up</a></li>
		       			

		        			<li><a href="#" class="button button-rounded button-flat-action">Footage Review</a></li>
						
		    			</ul>
	    		</div>
	    	</div>
	</div>
<div class="col-md-12">
	    		<div id="footagereview">
	    				<h3>Footage Review</h3>
	    			<table id="tmView" class="table table-hover table-condensed" >
	  
	    				
	    					<tr>
	    						 <th>Date Raw Footage Received-In State Office or Goa (for ROI) SS</th><th>(INSERT ALL FOOTAGE CHECK HEADINGS)</th><th>Editor Currently in Charge of Footage </th><th>Date Raw Footage Received in Goa from State Office </th><th>Date Edited Video Received in Goa from State Office</th><th>EDIT Status</th><th style="padding-right: 20%">Footage Review</th><th style="padding-right: 20%">Rough Cut Review Notes</th><th style="padding-right: 5%">Raw Footage Rating</th><th>PAYMENT Approved/On Hold</th><th>Payment: done (Done / Pending)</th><th>Date Rough Cut Done</th><!-- <th>No. of Officials Involved</th><th>No. of Officials Video was Screened to</th><th>Details of Screenings to Officials</th><th>Collaborations</th><th>No. of People Involved</th><th>No. of People Impacted</th> -->
	    					 <tr>
	    				
							<tbody>
	    					<?php
	    						$footage_row = array();
	    						$result = getDataForTMFootage();
	    						while($footage_row = mysqli_fetch_assoc($result)){
	    							$i = 0;
	    							print "<tr>";
	    							foreach ($footage_row as $key => $value) {
	    								# code...
	    								if($i == 1 || $i == 9){
	    									print "<td>";
	    									print "Not Present";
	    									print "</td>";
	    								}
	    								if(isset($value)){
	    									print "<td>";
	    									print "$value";
	    									print "</td>";
	    								}
	    								else{
	    									print "<td>";
	    									print "Empty";
	    									print "</td>";
	    								}
	    								$i++;	
	    							}
	    							print "</tr>";
	    						}
	    					?>
	    					</tbody>	
	    			</table>
	    		</div>
        </div>
</body>