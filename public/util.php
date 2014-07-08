<?php 

function labeledDatePicker($label, $name, $value) {
	echo "
		<tr><td valign=\"top\"><label for=\"goareceived\">" . $label . " :</label></td>
			<td>
				<p><input type=\"text\" name=\"" . $name . "\" class=\"datepick\" 
					value=\"" . $value . "\"></p>
			</td>
		</tr>";
}

function labeledTextBox($label, $name, $value) {
	echo "
		<tr><td valign=\"top\"><label for=\"goareceived\">" . $label . " :</label></td>
			<td>
				<p><input type=\"text\" name=\"" . $name . 
					"\" value=\"" . $value . "\"></p>
			</td>
		</tr>";
}

function goodNotGoodSelect($label, $column, $value) {
	echo "<tr><td valign='top'><label for='" . $column . "'>" . 
		$label . " : " . $value . "</label></td>" .
		"<td><select name='" . $column . "'>";
	if (isset($value) == FALSE) 
		echo "<option value='0'>Select</option>";
	echo "<option value = 'Good'";
	if($value == "Good") 
		echo " selected"; 
	echo ">Good</option>";
	echo "<option value = 'Not Good'";
	if($value == "Not Good")  
		echo "selected";
	echo ">Not Good</option>";
	echo "
		<br><label id='seqHint' style='color: red; font-style: italic;'></label>	
		</td>
		</tr>";
}

function yesNoSelect($label, $column, $value) {
	echo "<tr><td valign='top'><label for='" . $column . "'>" . 
		$label . " : " . $value . "</label></td>" .
		"<td><select name='" . $column . "'>";
	if (isset($value) == FALSE) 
		echo "<option value='0'>Select</option>";
	echo "<option value = 'Yes'";
	if($value == "Yes") 
		echo " selected"; 
	echo ">Yes</option>";
	echo "<option value = 'No'";
	if($value == "No")  
		echo "selected";
	echo ">No</option>";
	echo "
		<br><label id='seqHint' style='color: red; font-style: italic;'></label>	
		</td>
		</tr>";
}
?>