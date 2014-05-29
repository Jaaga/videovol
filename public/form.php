<?php include("header.php")
?>
<style>
	.createstory { 
    vertical-align: top; 
    height:auto !important; 
}
.content {
    display:none; 
    height:auto;
    margin:0;
    float: left;
}
.show {
    display: none; 
}
.hide:target + .show {
    display: inline; 
}
.hide:target {
    display: none; 
}
.hide:target ~ .content {
    display:inline; 
}

/*style the (+) and (-) */
.hide, .show {
    width: 30px;
    height: 30px;
    border-radius: 30px;
    font-size: 20px;
    color: #fff;
    text-shadow: 0 1px 0 #666;
    text-align: center;
    text-decoration: none;
    box-shadow: 1px 1px 2px #000;
    background: #cccbbb;
    opacity: .95;
    margin-right: 0;
    float: left;
    margin-bottom: 25px;
    
}

.hide:hover, .show:hover {
    color: #eee;
    text-shadow: 0 0 1px #666;
    text-decoration: none;
    box-shadow: 0 0 4px #222 inset;
    opacity: 1;
    margin-bottom: 25px;
}

.content{
    height:auto;
    margin:0;
}
.question {
    float: left;
    height: auto;
    width: 90%;
    line-height: 20px;
    padding-left: 20px;
    margin-bottom: 25px;
    font-style: italic;
}
</style>
<body>
<div class="createstory" style="text-align: center;">
	<h3>Create a story/ For CC mentor</h3>
    <a href="#hide1" class="hide" id="hide1">+</a>
    <a href="#show1" class="show" id="show1">-</a>
    			<div class="content">
						<form name="creatStory-form" method="post" action="../public/story.php">
						<h2>Create Story</h2>
						<table border="1px">
						<tr>
							<td valign="top"> 
								<label for="name">CC Name :</label>
							</td>
							<td> 
								<input type="text" name="ccname" />
							</td>
						</tr>


						<tr> 
							<td valign="top"><label for="states">State :</label>
							</td>
							<td>
								<select name="states">
									<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
									<option value="Andhra Pradesh">Andhra Pradesh</option>
									<option value="Arunachal Pradesh">Arunachal Pradesh</option>
									<option value="Assam">Assam</option>
									<option value="Bihar">Bihar</option>
									<option value="Chandigarh">Chandigarh</option>
									<option value="Chhattisgarh">Chhattisgarh</option>
									<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
									<option value="Daman and Diu">Daman and Diu</option>
									<option value="Delhi">Delhi</option>
									<option value="Goa">Goa</option>
									<option value="Gujarat">Gujarat</option>
									<option value="Haryana">Haryana</option>
									<option value="Himachal Pradesh">Himachal Pradesh</option>
									<option value="Jammu and Kashmir">Jammu and Kashmir</option>
									<option value="Jharkhand">Jharkhand</option>
									<option value="Karnataka">Karnataka</option>
									<option value="Kerala">Kerala</option>
									<option value="Lakshadweep">Lakshadweep</option>
									<option value="Madhya Pradesh">Madhya Pradesh</option>
									<option value="Maharashtra">Maharashtra</option>
									<option value="Manipur">Manipur</option>
									<option value="Meghalaya">Meghalaya</option>
									<option value="Mizoram">Mizoram</option>
									<option value="Nagaland">Nagaland</option>
									<option value="Odisha">Odisha</option>
									<option value="Pondicherry">Pondicherry</option>
									<option value="Punjab">Punjab</option>
									<option value="Rajasthan">Rajasthan</option>
									<option value="Sikkim">Sikkim</option>
									<option value="Tamil Nadu">Tamil Nadu</option>
									<option value="Tripura">Tripura</option>
									<option value="Uttaranchal">Uttaranchal</option>
									<option value="Uttar Pradesh">Uttar Pradesh</option>
									<option value="West Bengal">West Bengal</option>
								</select>
							</td>
						</tr>


						<tr>
							<td valign="top">
								<label for="dateReceived">Date Received</label>
							</td>
							<td>
								<input type="date" name="dateReceived" />
							</td>
						</tr>


						<tr>
							<td valign="top">
								<label for="issue">Issue/Topic</label>
							</td>
							<td>
								<input type="text" name="issue" />
							</td>
						</tr> 


						<tr>
						 	<td valign="top">
						 		 <label for="story">Story: </label>
						 	</td>
						 	<td valign="top">
						  		<textarea  name="story" maxlength="1000" cols="25" rows="6"></textarea>
						 	</td>
						</tr>

						<tr>
						 	<td>
								<input type="submit">
							</td>
						</tr>

					</table>
				</div>
	</form>
<!--createstory ends here-->


</div>
</body>
</html>