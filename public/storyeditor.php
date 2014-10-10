<?php

include('header.php');
include_once("../model/StoryDB.php");
#include_once("../model/ImpactDB.php");

if (isset($_GET['un'])) {
    $un = $_GET['un'];
	echo "isset un";
	$storyData = getDataByUniqueNumber($un);
	#$impactData = getImpactDataByUniqueNumber($un);
}
?>

<h1><?php if (isset($un)) echo "Story Unique Number: ". $un; ?></h1>	

<form name="creatStory-form" method="GET" action="index.php">
	<?php if (isset($un)) echo "<input type=hidden name=un value= \"" . $un . "\"";?>
	<h2>Story Flow</h2>
	<table class="table table-hover">
	<div class="container">

		<tr>
			<td valign="top">
				<label for="unique_no">Unique No. :</label>
				
			</td>
			<td>
				<input type="text" name="uniquenumber" 
<?php if (isset($storyData)) echo "value= \"" . $un . "\""; ?> />
			</td>
		</tr>

		<tr>

		<tr> 
			<td valign="top"><label for="states">State :</label>
			</td>
			<td>
				<select name="state">
					<option value="select state name">Select State Name</option>
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
					<option value="Telangana">Telangana </option>
					<option value="Tripura">Tripura</option>
					<option value="Uttarakhand">Uttarakhand</option>
					<option value="Uttar Pradesh">Uttar Pradesh</option>
					<option value="West Bengal">West Bengal</option>
					<option value=""></option>
				</select>
			</td>
		</tr>


					<td valign="top"> 
				<label for="name">CC Name :</label>
			</td>
			<td> 
				<!-- <input type="text" name="ccname" <?php //if (isset($storyData)) echo "value= \"" . $storyData['ccname'] . "\""; ?> /> -->
			
				<select name="ccname">
				 <optgroup label="example 1">
					<option value="select cc name">Select CC Name</option>
					<option value="Abdul Hasib Khan">Abdul Hasib Khan</option>
					<option value="Abhishek">Abhishek</option>
					<option value="Abhishek Kr Das">Abhishek Kr Das</option>
					<option value="Abhishek Kumar">Abhishek Kumar</option>
					<option value="Achungmei Kamei">Achungmei Kamei</option>
					<option value="Ajay Dharker">Ajay Dharker</option>
					<option value="Ajeet Bahadur">Ajeet Bahadur</option>
				</optgroup>
				<optgroup label="example 2">
					<option value="Ajit_Singh">Ajit Singh</option>
					<option value="Alam">Alam</option>
					<option value="Alka">Alka</option>
					<option value="Alka_Mate">Alka Mate</option>
					<option value="Amarjeet">Amarjeet</option>
					<option value="Amit">Amit</option>
					<option value="Amit_Topno">Amit Topno</option>
					<option value="Amita">Amita</option>
				</optgroup>
				<optgroup label="example 3">
					<option value="Amita_Tuti">Amita_Tuti</option>
					<option value="Amol">Amol</option>
					<option value="Amol_Lalzare">Amol Lalzare</option>
					<option value="Anand_Pagare">Anand Pagare</option>
					<option value="Anastasya">Anastasya</option>
					<option value="Anil_Guria">Anil Guria</option>
					<option value="Anil_Jgdhane">Anil Jgdhane</option>
					<option value="Anil_Kumar">Anil Kumar</option>
					<option value="Anil_S">Anil s</option>
					<option value="Anita">Anita</option>
					<option value="Anita_Dhurve">Anita_Dhurve</option>
					<option value="Anjana">Anjana</option>
				</optgroup>
					<option value="Anupa_Parte">Anupa Parte </option>
					<option value="Anupama">Anupama</option>
					<option value="Anupama_Sathy">Anupama Sathy</option>
					<option value="Aparna">Aparna</option>
					<option value="Aparna_Marandi">Aparna Marandi</option>
					<option value="Argen_Kerketa">Argen Kerketa</option>
					<option value="Argen_Kerketta">Argen Kerketta</option>
					<option value="Arti_Bai">Arti Bai</option>
					<option value="Asha">Asha</option>
					<option value="Ashit_Kumar">Ashit Kumar</option>
					<option value="Ashok">Ashok</option>
					<option value="Avdhesh">Avdhesh</option>
					<option value="Avdhesh_Negi">Avdhesh Negi</option>
					<option value="Basanti">Basanti</option>
					<option value="Basanti_Huni_Purti">Basanti Huni Purti</option>
					<option value="Basanti_Hunni">Basanti Hunni</option>
					<option value="Basanti_Soren">Basanti Soren</option>
					<option value="Bhan">Bhan</option>
					<option value="Bhan_Sahu">Bhan Sahu</option>
					<option value="Bharti">Bharti</option>
					<option value="Bharti_Kumar">Bharti Kumar</option>
					<option value="Bideshini">Bideshini</option>
					<option value="Bidesi">Bidesi</option>
					<option value="Bipin">Bipin</option>
					<option value="Bipin_Solanki">Bipin Solanki</option>
					<option value="Biswanath">Biswanath</option>
					<option value="Brahmajeet">Brahmajeet</option>
					<option value="Brahmajith">Brahmajith</option>
					<option value="Chanda">Chanda</option>
					<option value="Christy_Raj">Christy Raj</option>
					<option value="Chunnu">Chunnu</option>
					<option value="Chunnu_Hansda">Chunnu Hansda</option>
					<option value="Daniel_Mate">Daniel Mate</option>
					<option value="Dasharathi">Dasharathi</option>
					<option value="Dashrathi">Dashrathi</option>
					<option value="Debendra_Swain">Debendra Swain</option>
					<option value="Dimpi">Dimpi</option>
					<option value="Dina_Ganwer">Dina Ganwer</option>
					<option value="Dinkar_Kamble">Dinkar Kamble</option>
					<option value="Dinkar_N">Dinkar N</option>
					<option value="Elejabeth_Murmu">Elejabeth Murmu</option>
					<option value="Elizabeth">Elizabeth</option>
					<option value="Emeliya">Emeliya</option>
					<option value="Emeliya_Hansda">Emeliya Hansda</option>
					<option value="Farahana_Ali">Farahana Ali</option>
					<option value="Gautam">Gautam</option>
					<option value="Gayanti">Gayanti</option>
					<option value="Gayatri">Gayatri</option>
					<option value="Geeta">Geeta</option>
					<option value="Geeta_Kumari">Geeta Kumari</option>
					<option value="Ghanshayam">Ghanshayam</option>
					<option value="Ghanshyam">Ghanshyam</option>
					<option value="Gola">Gola</option>
					<option value="Guddu_Dahriya">Guddu Dahriya</option>
					<option value="Gyanti">Gyanti</option>
					<option value="Halima_Ejaj">Halime Ejaj</option>
					<option value="Halomuni">Halomuni</option>
					<option value="Hari_Shankar">Hari Shankar</option>
					<option value="Indu">Indu</option>
					<option value="Jai_Kumar">Jai Kumar</option>
					<option value="Jairam_Hansda">Jairam Hansda</option>
					<option value="Jayanti">Jayanti</option>
					<option value="Jeetendra_Kurrey">Jeetendra Kurrey</option>
					<option value="Jogendra_Singh">Jogendra Singh</option>
					<option value="Justin_Lakra">Justin Lakra</option>
					<option value="Jyoti">Jyothi</option>
					<option value="Kailash">Kailash</option>
					<option value="Kailash_Singh">Kailash Singh</option>
					<option value="Kamal">Kamal</option>
					<option value="Kesha">Kesha</option>
					<option value="Khirendra">Khirendra</option>
					<option value="Khirendra_Yadav">Khirendra Yadav</option>
					<option value="Khurban">Khurban</option>
					<option value="Kranti_Murmu">Kranti Murmu</option>
					<option value="Krupakar">Krupakar</option>
					<option value="Kumar_Mukesh">Kumar Mukesh</option>
					<option value="Kurban_Damor">Kurban Damor</option>
					<option value="Lakhuprasad">Lakhuprasad</option>
					<option value="Lambodar">Lambodar</option>
					<option value="Luxmi_Nautiyal">Luxmi Nautiyal</option>
					<option value="Madhu_Tirkey">Madhu Tirkey</option>
					<option value="Madhukar">Madhukar</option>
					<option value="Madhuri">Madhuri</option>
					<option value="Madhuri_Chouhan">Madjuri Chouhan</option>
					<option value="Mahadevi_Kamble">Mahadevi Kamble</option>
					<option value="Mahesh">Mahesh</option>
					<option value="Mahima">Mahima</option>
					<option value="Mahima_Bhengra">Mahima Bhengra</option>
					<option value="Mamata">Mamata</option>
					<option value="Mamta">Mamta</option>
					<option value="Mangesh">Mangesh</option>
					<option value="Mangesh_Kable">Mangesh Kable</option>
					<option value="Mangnu">Mangnu</option>
					<option value="Mani_Manickem">Mani Manickam</option>
					<option value="Manik_Chand_Korwa">Manik Chand Korwa</option>
					<option value="Manju">Manju</option>
					<option value="Manju_Kisku">Manju Kisku</option>
					<option value="Manju_Raj">Manju Raj</option>
					<option value="Margaret">Margaret</option>
					<option value="Margaret_Joeji">Margaret Joeji</option>
					<option value="Maria_Goreti_Kujur">Maria Goreti Kujur</option>
					<option value="Mariam_Toppo">Mariam Toppo</option>
					<option value="Md_Javed">Md Javed</option>
					<option value="Md_Waseem">Md Waseem</option>
					<option value="Meena_Devi">Meena Devi</option>
					<option value="Mercy_Kamei">Mercy Kamei</option>
					<option value="Meri_Nisha">Meri Nisha</option>
					<option value="Meribeni">Meribeni</option>
					<option value="Mister Alam">Mister Alam</option>
					<option value="Mohan">Mohan</option>
					<option value="Mohan_Kumar_Bhuiyan">Mohan Kumar Bhuiyan</option>
					<option value="Mohanlal">Mohanlal</option>
					<option value="Mukesh_Rajak"></option>
					<option value="Nadeem_Andrabi"></option>
					<option value="Naeem(contributor)"></option>
					<option value="Navita"></option>
					<option value="Neelam_Hembrom"></option>
					<option value="Neeru_Rathod"></option>
					<option value="Neetu"></option>
					<option value="Nirmala"></option>
					<option value="Nirmala_Ekka"></option>
					<option value="Nitu"></option>
					<option value="Paul"></option>
					<option value="Paul_Malto"></option>
					<option value="Pradip/Preeti"></option>
					<option value="Prakash_Gupta"></option>
					<option value="Pramila"></option>
					<option value="Priyasheela_Besra"></option>
					<option value="Purna_Chandra"></option>
					<option value="Purnachandra"></option>
					<option value=""></option>
				</select> or
					<input type="text" name="addccname" placeholder="Add New CC Name">



			</td>
		</tr>


		<tr>
			<td valign="top">
				<label for="dateReceived">Date Received</label>
				
			</td>
			<td>
				<p><input type="text" name="dateReceived" id="dateReceivedDatePick" 
				          <?php if (isset($storyData)) echo "value= \"" . $storyData['receiveddate'] . "\""; ?>></p>
			</td>
		</tr>


 		<tr>
	<td valign="top">
		<label for="issue">Issue Topic</label>
	</td>
	<td>
		<input type="text" name="issuetopic" <?php if (isset($storyData)) echo "value= \"" . $storyData['issuetopic'] . "\""; ?> />
	</td>
</tr> 


		<tr>
		 	<td valign="top">
		 		 <label for="story">Story: </label>
		 	</td>
		 	<td valign="top">
		  		<textarea  name="story" maxlength="1000" cols="25" rows="6">
<?php if (isset($storyData)) echo $storyData['storydescription']; ?>
		  		</textarea>
		 	</td>
		</tr>

 		<tr>
	<td valign="top">
		<label for="storydate">Date of Story</label>
	</td>
	<td>
		<p><input type="text" name="dateofstory" id="dateOfStoryDatePick" 
<?php if (isset($storyData)) echo "value= \"" . $storyData['dateofstory'] . "\""; ?> />
		</p>
	</td>
</tr> 

		<tr valign="top">
			<td>
				<label for="cc_pair">CC Pair</label>
			</td>
			<td>

				<input type="text" name="cc_pair" 
<?php if (isset($storyData)) echo "value= \"" . $storyData['ccpair'] . "\""; ?> />
			</td>
		</tr>

		<tr valign="top">
			<td>
				<label for="program">Program</label>
			</td>
			<td>

				<input type="text" name="program" 
<?php if (isset($storyData)) echo "value= \"" . $storyData['program'] . "\""; ?> />
			</td>
		</tr>

		<tr valign="top">
			<td>
				<label for="mentor">Mentor</label>
			</td>
			<td>

				<input type="text" name="mentor" 
<?php if (isset($storyData)) echo "value= \"" . $storyData['mentor'] . "\""; ?> />
			</td>
		</tr>

		<tr valign="top">
			<td>
				<label for="iu_topic">IU Topic</label>
			</td>
			<td>

				<input type="text" name="iu_topic" 
<?php if (isset($storyData)) echo "value= \"" . $storyData['iutopic'] . "\""; ?> />
			</td>
		</tr>

		<tr valign="top">
			<td>
				<label for="video_treatment">Video Treatment</label>
			</td>
			<td>

				<input type="text" name="video_treatment" 
<?php if (isset($storyData)) echo "value= \"" . $storyData['videotreatment'] . "\""; ?> />
			</td>
		</tr>

		<tr valign="top">
			<td>
				<label for="shoot_plan">Shoot Plan</label>
			</td>
<!-- 			<td>

	<input type="text" name="shoot_plan" <?php /*if (isset($storyData)) echo "value= \"" . $storyData['shootplan'] . "\""*/; ?> />
</td> -->
		 	<td valign="top">
		  		<textarea  name="shoot_plan" maxlength="1000" cols="25" rows="6">
<?php if (isset($storyData)) echo $storyData['shootplan']; ?>
		  		</textarea>
		 	</td>
		</tr>

		<tr valign="top">
			<td>
				<label for="impactpossible">Impact Possible</label>
			</td>
			<td>
			<select type="text" name="impactpossible">
					<option value="Yes">Yes</option>
					<option value="No">No</option>
			</select>
			</td>
		</tr>

		<tr>
			<td valign="top">
				<label for="impact-process">Target official:</label>
			</td>
			<td>
				<input type="text" name="targetofficial" value=
<?php if (isset($storyData)) echo $storyData['targetofficial']; ?> >
			</td>
		</tr>
		<tr>
			<td valign="top">
				<label for="impact-status">Desired change(CTA)</label>
			</td>
			<td>
				<input type="text" name="desiredchange" value=
<?php if (isset($storyData)) echo $storyData['desiredchange']; ?> >
			</td>
		</tr>
		<tr>
			<td valign="top">
				<label for="impact-process">CC impact plan</label>
			</td>
			<td>
				<textarea name="ccimpactplan" id="" cols="30" rows="10">
<?php if (isset($storyData)) echo $storyData['ccimpactplan']; ?>
				</textarea>
			</td>

		<tr>
		 	<td>
				<input type="submit" name="action" value= 
<?php if (isset($_GET['un'])) echo "update"; else echo "add"; ?> >
			</td>
		</tr>

	</div>
		
	</table>
</form>
</body>
</html>
