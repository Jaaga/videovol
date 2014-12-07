<head>
	
	<link rel="stylesheet" type="text/css" href="bootstrap/simplePagination.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="jqueryui/jquery.simplePagination.js"></script>
	<script type="text/javascript">
		jQuery(function($) {
                var items = $("table tbody tr");

                var numItems = items.length;
                var perPage = 5	;

                // only show the first 2 (or "first per_page") items initially
                items.slice(perPage).hide();

                // now setup pagination
                $("#pagination").pagination({
                    items: numItems,
                    itemsOnPage: perPage,
                    cssStyle: "light-theme",
                    onPageClick: function(pageNumber) { // this is where the magic happens
                        // someone changed page, lets hide/show trs appropriately
                        var showFrom = perPage * (pageNumber - 1);
                        var showTo = showFrom + perPage;
                        if(showFrom > 0){
                        	items.hide().slice(0,1).show();
                        	items.slice(showFrom, showTo).show(); // first hide everything, then show for the new page
                        }
                        else{
                        	items.hide()
                        				.slice(showFrom,showTo).show();
                        }
                    
                	}


                });
            });
		
</script>
</head>

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
						
		        			<li><a href="#" class="button button-rounded button-flat-action">New Stories</a></li>
		        		
		        		
		       				<li><a href="TM_impactfollow.php" class="button button-rounded button-flat-action">Impact Follow Up</a></li>
		       			

		        			<li><a href="TM_footage.php" class="button button-rounded button-flat-action">Footage Review</a></li>
						
		    			</ul>
	    		</div>
	    	</div>
	</div>
	
	<div class="container-fluid" >
	<div class="row" >
				<div class="col-md-12">
		    		<div id="newstory">
		    			<h3>New Stories</h3>
		    			<table id="tmViewer" class="table table-hover table-condensed" >
		    				
		    				
		    					 
		    						 <th>Unique Number</th><th style="padding-right: 10%">CC</th><th style="padding-right: 10%">State</th><th>Program</th><th>IU Themes</th><!-- <th style="padding-right: 20%">Story Description</th><th>Received Date</th> --><th style="padding-right: 20%">Story Description</th><th>Date Story Pitched</th><th style="padding-right: 5%">Working With CC</th><th style="padding-right: 20%">Mentor</th><th>Story Type</th><th style="padding-right: 20%">Shoot Plan</th><th>Impact Possible</th><th style="padding-right: 5%">Target Official</th><th style="padding-right: 20%">Desired Change (CTA)</th><th style="padding-right: 20%">CC's Impact Plan</th> 
		    					 
		    				
		    				<tbody>
		    					<!--<tr>
		    						<td>BH_1088</td><td>Tanju Devi</td><td>Jharkhand</td><td>IU</td><td>Environment</td><td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce pretium purus nulla, eu dapibus mauris feugiat non. Morbi faucibus augue ut neque commodo, vel egestas neque cursus.</td><td>2.9.1988</td><td>Mukesh Rajak</td><td>Mukesh Rajak</td><td>Documentary</td><td >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce pretium purus nulla, eu dapibus mauris feugiat non. Morbi faucibus augue ut neque commodo, vel egestas neque cursus.</td><td>BH_1087</td><td>Yes</td><td>Manoj Kumar</td><td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td><td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
		    					</tr>

		    					<tr>
		    						<td>BH_1088</td><td>Tanju Devi</td><td>Jharkhand</td><td>IU</td><td>Environment</td><td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce pretium purus nulla, eu dapibus mauris feugiat non. Morbi faucibus augue ut neque commodo, vel egestas neque cursus.</td><td>2.9.1988</td><td>Mukesh Rajak</td><td>Mukesh Rajak</td><td>Documentary</td><td >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce pretium purus nulla, eu dapibus mauris feugiat non. Morbi faucibus augue ut neque commodo, vel egestas neque cursus.</td><td>BH_1087</td><td>Yes</td><td>Manoj Kumar</td><td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td><td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
		    					</tr>

		    					<tr>
		    						<td>BH_1088</td><td>Tanju Devi</td><td>Jharkhand</td><td>IU</td><td>Environment</td><td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce pretium purus nulla, eu dapibus mauris feugiat non. Morbi faucibus augue ut neque commodo, vel egestas neque cursus.</td><td>2.9.1988</td><td>Mukesh Rajak</td><td>Mukesh Rajak</td><td>Documentary</td><td >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce pretium purus nulla, eu dapibus mauris feugiat non. Morbi faucibus augue ut neque commodo, vel egestas neque cursus.</td><td>BH_1087</td><td>Yes</td><td>Manoj Kumar</td><td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td><td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
		    					</tr>-->
		    					
		    					<?php
		    						$uid = getDataForTMView();
		    						for ($i=0; $i < count($uid); $i++) { 
		    							$new_stories = getStoryByUniqueNumber($uid[$i]);	
		    							echo "<tr>";
		    							foreach ($new_stories as $key => $value) {
		    								# code...
		    								if(isset($value)){
		    									print "<td>";
		    									echo $value;
		    									print "</td>";
		    								}
		    								else{
		    									print "<td>";
		    									echo "NULL";
		    									print "</td>";
		    								}
		    							}
		    							echo "</tr>";
		    						}
		    					?>
		    				</tbody>
		    			</table>
		    		</div>
		    	</div>
		</div>
</div>
<div id="pagination"></div>
</body>