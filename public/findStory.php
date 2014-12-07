<?php

include('header.php');

?>

<body>
		<div class="col-md-12">
			<div class="col-md-3">
			</div>
			<div class="col-md-12" >
				<table class="table table-bordered">
					<tr>
						<tr><td><label>Search : </label></td>
						<td>
							<select name="ccname" class="form-control form-color">
                   				 <option value="1">CC Name</option>
                        	</select>
						</td>

						<td>
							<select name="ccname" class="form-control form-color">
                   				 <option value="1">State</option>
                        	</select>
						</td>

						<td>
							<select name="ccname" class="form-control form-color">
                   				 <option value="1">Issue</option>
                        	</select>
						</td>

						<td valign="top"><input type="text" name="fromdate" class="datepick form-control form-color" placeholder="From (enter Date)"></td>
						<td valign="top"><input type="text" name="todate" class="datepick form-control form-color" placeholder="To (enter Date)"></td>
                <td><input type="submit" name="search" value="Search" class="form-control form-color" style="background-color: #83c06a; color: white;"></td>
					</tr>
				</table>

				<table class="table table-hover">
    <thead><tr><th>Unique Number</th><th>CCName</th><th>State</th><th>Issue Topic</th><th>Received Date</th><th>Story Description</th><th>Stage</th><th>Impact / Footage</th><tr>
    </thead>
   <!--  <td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td><td>8</td> -->
    </table>
			</div>
		</div>
</body>