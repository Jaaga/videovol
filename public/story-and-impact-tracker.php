<?php

include('header.php');

?>

<body>
	<div class="col-md-12">
		<div class="col-md-6 new-story-col">
			<h1>New Story</h1>
			<table class="table table-hover">
				<tr>
					<td valign="top">
						<label for="story_type">Story Type :</label>
						
					</td>

					<td>

					
						<select name="select" class="form-control form-color" id="slct" onchange="showOther(this, 'new');">
							<option value="0" >Select Story Type:</option>
							<option value="1">Issue</option>
							<option value="2">Impact</option>
							<option value="other">Other</option> <!-- javaScript for this is in header.js -->
						</select>
						<input type="text" name="new" id="new" placeholder="One Line Description"  style="visibility:hidden;" class="form-control form-color">
	 
						
					</td>
				</tr>

				<tr> 
			<td valign="top"><label for="states">State :</label>
			</td>
			<td>
				<select name="state" class="form-control form-color">
					<option value="select state name">Select State Name:</option>
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

		<tr>
			<td valign="top"><label for="">If this story is related <br> to a previous story, please<br> enter the Unique Id. of<br> the previous story here :</label>
			</td>

			<td><input type="text" class="form-control form-color" placeholder="enter unique ID of previous story">
		</tr>

		<tr>
			<td valign="top"><label for="">Issue Video Unique Id :</label>
			</td>

			<td>
				<h4>(Generates automatically based on state name)</h4>
			</td>
		</tr>

		<tr>
			<td valign="top"><label for="">Month/Year of Story :</label>
			</td>
			<td>
				<input type="text" name="dateofstory" id="dateOfStoryDatePick" placeholder="Enter Month/Year of Story" class="form-control form-color">
			</td>
		</tr>

		<tr>
			<td valign="top"><label for="">CC :</label>
			</td>
			<td>
				<select name="ccname" class="form-control form-color">
				 <optgroup label="example 1">
					<option value="select cc name">Select CC:</option>
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
				</select>
			</td>
		</tr>

		<tr>
			<td valign="top"><label for="">Working With CC :</label>
			</td>
			<td>
				<select name="ccname" class="form-control form-color">
					<option value="select cc name">Select Working With CC:</option>
					<option value="select cc name">None</option>
				 <optgroup label="example 1">
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
				</select>
			</td>
		</tr>

		<tr>
			<td valign="top"><label for="">Program :</label>
			</td>
			<td>
				<select class="form-control form-color">
					<option value="">Select a Program</option>
					<option value="">IU</option>
					<option value="">OAK</option>
					<option value="">PACS</option>
				</select>
			</td>
		</tr>

		<tr>
			<td valign="top"><label for="">Mentor :</label>
			</td>
			<td>
				<select class="form-control form-color">
					<option value="">Select a Mentor</option>
					<option value="">Ajeet</option>
					<option value="">Amit Topno</option>
					<option value="">Amita Tuti</option>
					<option value="">...</option>
				</select>
			</td>
		</tr>

		<tr>
			<td valign="top"><label for="">IU Topic :</label>
			</td>
			<td>
				<select class="form-control form-color">
					<option value="">Select an IU Topic</option>
					<option value ="">Caste & Identity</option>
					<option value ="">Gender</option>
					<option value ="">Infrastructure</option>
					<option value ="">Education</option>
					<option value ="">Forced Eviction</option>
					<option value ="">Conflict</option>
					<option value ="">Health</option>
					<option value ="">Art & Culture</option>
					<option value ="">Environment</option>
					<option value ="">Development</option>
					<option value ="">Corruption</option>
					<option value ="">Technology</option>
				</select>
			</td>
		</tr>

		<tr>
			<td valign="top"><label for="">Story Idea :</label>
			</td>
			<td>
				<textarea class="form-control" rows="2" placeholder="One Line Description for Story Idea"></textarea>
			</td>
		</tr>

		<tr>
			<td valign="top"><label for="">Video Treatment :</label>
			</td>
			<td>
				<select class="form-control form-color">
					<option value="">Select Video Treatment</option>
					<option value="">IU</option>
					<option value="">RTE Campaign</option>
					<option value="">Article 17 Campaign</option>
					<option value="">FE Campaign</option>
					<option value="">Profile Video</option>
					<option value="">Mini Documentry</option>
					<option value="">Impact</option>
					<option value="">Success</option>
					<option value="">Special Project</option>
				</select>
			</td>
		</tr>

		<tr>
			<td valign="top"><label for="">Shoot Plan :</label>
			</td>
			<td>
				<textarea class="form-control" rows="4" placeholder="Shoot Plan"></textarea>
			</td>
		</tr>

		<tr>
			<td valign="top"><label for="">Impact Possible :</label>
			</td>
			<td>
				<select class="form-control form-color">
					<option value="">Select an Option</option>
					<option value="">Yes</option>
					<option value="">No</option>
				</select>
			</td>
		</tr>

		<tr>
			<td valign="top"><label for="">Target Official :</label>
			</td>
			<td>
				<textarea class="form-control" rows="2" placeholder="One Line Description for Target Official"></textarea>
			</td>
		</tr>

		<tr>
			<td valign="top"><label for="">Desired Change (CTA) :</label>
			</td>
			<td>
				<textarea class="form-control" rows="2" placeholder="One Line Description for Desired Change"></textarea>
			</td>
		</tr>

		<tr>
			<td valign="top"><label for="">CC's Impact-Plan(in brief) :</label>
			</td>
			<td>
				<textarea class="form-control" rows="4" placeholder="CC's Impact Plan (in brief)"></textarea>
			</td>
		</tr>

		<tr>
			<td valign="top"><label for="">Date Footage Received by SC for Review :</label>
			</td>
			<td>
				<input type="text" name="dateofstory" id="dateFootageReceivedBySc" class="form-control form-color" placeholder="Select Date">
			</td>
		</tr>

		<tr>
			<td valign="top"><label for="">Footage Reviewed and Video Approved for Payment? :</label>
			</td>
			<td>
				<select class="form-control form-color">
					<option value="">Select an Option</option>
					<option value="">Yes</option>
					<option value="">No</option>
				</select>
			</td>
		</tr>

		<tr>
			<td valign="top"><label for="">If NO, Why Not? :</label>
			</td>
			<td>
				<textarea class="form-control" rows="2" placeholder="One Line Description Only"></textarea>
			</td>
		</tr>

			</table>

		</div>

		<div class="col-md-6 impact-process-col">
			<h1>Impact Process</h1>
			<table class="table table-hover">
				<tr>
					<td valign="top"><label for="">Impact Follow-up Happening? :</label>
					</td>
					<td>
						<select name="select" class="form-control form-color">
							<option value="">Select An Option :</option>
							<option value="">Yes</option>
							<option value="">No</option>
						</select>
	 
					</td>
				</tr>

				<tr>
					<td valign="top"><label for="">If No, why not? :</label>
					</td>
					<td>
						<textarea class="form-control" rows="2" placeholder="One Line Description Only"></textarea>
					</td>
				</tr>

				<tr>
					<td valign="top"><label for="">Impact Process :</label>
					</td>
					<td>
						<textarea class="form-control" rows="4" placeholder="Impact Process"></textarea>
					</td>
				</tr>

				<tr>
					<td valign="top"><label for="">Impact Status (achieved or not?) :</label>
					</td>
					<td>
						<select name="select" class="form-control form-color">
							<option value="">Select An Option:</option>
							<option value="">Acheived</option>
							<option value="">Not Acheived</option>
							 
						</select>
					</td>
				</tr>

				<tr>
					<td valign="top"><label for="">Impact Month/Year of Impact :</label>
					</td>
					<td>
						<input type="text" name="dateofstory" id="impactMonthOrYearOfImpactDatepick" class="form-control form-color" placeholder="Enter Date">
					</td>
				</tr>

				<tr>
					<td valign="top"><label for="">No. of Weeks Taken to Create the Impact? :</label>
					</td>
					<td>
<!--Copied from impacteditor.php-->
						<input type="number" min="0" name="time-in-weeks" class="form-control form-color" placeholder="Enter a Value" value =<?php echo $IData['timetakenforimpact']; ?>> 
<!-- - -->
					</td>
				</tr>

				<tr>
					<td valign="top"><label for="">Community Screening Done? :</label>
					</td>
					<td>
						<select name="select" class="form-control form-color">
							<option value="">Select An Option:</option>
							<option value="">Yes</option>
							<option value="">No</option>
							 
						</select>
					</td>
				</tr>

				<tr>
					<td valign="top"><label for="">No. of People to Whom the Video was Screened :</label>
					</td>
					<td>
<!--Copied from impacteditor.php-->
						<input type="number" min="0" name="People-shown" class="form-control form-color" placeholder="Enter a Value" value = <?php echo $IData['noofpeoplesawvideo']; ?> >
<!-- - -->
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
					<td valign="top"><label for="">Video Shown to Officials? :</label>
					</td>
					<td>
<!--Copied from impacteditor.php-->
						<select type="text" name="VideoShowntoOfficials" class="form-control form-color">
							<?php $videoshown = $IData['videoshowntoofficials']; ?>
							<option value="">Select An Option:</option>
							<option value="Yes" 
							<?php if (strcmp($videoshown , "Yes") == 0) echo "selected"; ?> >Yes</option>
							<option value="No"
							<?php if (strcmp($videoshown, "No" )== 0) echo "selected" ; ?> >No</option>
						</select>
<!-- - -->
					</td>
				</tr>

				<tr>
					<td valign="top"><label for="">No. of officials to Whom the Video Was Screened :</label>
					</td>
					<td>
<!--Copied from impacteditor.php-->
						<input type="number" min="0" name="officials-shown" class="form-control form-color" placeholder="Enter a Value" value = <?php echo $IData['noofofficials']; ?>>
<!-- - -->
					</td>
				</tr>

				<tr>
					<td valign="top"><label for="">Details of Screenings to Officials :</label>
					</td>
					<td>
<!--Copied from impacteditor.php-->
						<textarea name="collaborations" class="form-control" id=""  rows="4" placeholder="Details of Screenings to Officials"><?php echo $IData['detailsofscreeningofficials']; ?></textarea>
<!-- - -->
					</td>
				</tr>

				<tr>
					<td valign="top"><label for="">Collaborations :</label>
					</td>
					<td>

						<textarea name="collaborations" class="form-control" id=""  rows="4" placeholder="Collaborations"></textarea>
<!-- - -->
					</td>
				</tr>

				<tr>
					<td valign="top"><label for="">No. of People Involved :</label>
					</td>
					<td>
<!--Copied from impacteditor.php-->
						<input type="number" min="0" name="number-of-people-involved" class = "form-control form-color" placeholder="Enter a Value" value = <?php echo $IData['noofpeopleinvolved']; ?>>
<!-- - -->
					</td>
				</tr>

				<tr>
					<td valign="top"><label for="">No. of People Impacted :</label>
					</td>
					<td>
<!--Copied from impacteditor.php-->
						<input type="number" min="0" name="number-of-people-impacted" class = "form-control form-color" placeholder="Enter a Value" value = <?php echo $IData['noofpeopleimpacted']; ?>>
<!-- - -->
					</td>
				</tr>

				<tr>
					<td valign="top"><label for="">No. of Villages Impacted :</label>
					</td>
					<td>
<!--Copied from impacteditor.php-->
						<input type="number" min="0" name="number-of-villages-impacted" class = "form-control form-color" placeholder="Enter a Value" value = <?php echo $IData['noofvillagesimpacted']; ?>>
<!-- - -->
					</td>
				</tr>
			</table>
		</div>
	</div>
	<div class="col-md-12">
		<div class="col-md-2">
		</div>

		<div class="col-md-8">
						<h1>Impact Video</h1>
			<table class="table table-hover">
				<tr>
					<td valign="top"><label for="">Impact Video Unique ID :</label>
					</td>
					<td>
						<h4>(Generates automatically)</h4>
					</td>
					
				</tr>

				<tr>
					<td valign="top"><label for="">Shoot Plan :</label>
					</td>
					<td>
						<textarea name=" " class="form-control" id=""  rows="4" placeholder="Shoot Plan"></textarea>
					</td>
				</tr>

				<tr>
					<td valign="top"><label for="">Date Footage Received by SC for review :</label>
					</td>
					<td>
						<input type="text" name="dateofstory" id="dateFootageReceivedByScForReview" class="form-control form-color" placeholder="Enter Date">
					</td>
				</tr>

				<tr>
					<td valign="top"><label for="">Footage Reviewed and Video Approved for Payment? :</label>
					</td>
					<td>
						<select class="form-control form-color">
							<option value="">Select an Option</option>
							<option value="">Yes</option>
							<option value="">No</option>
						</select>
					</td>
				</tr>

				<tr>
					<td valign="top"><label for="">If No, why not? :</label>
					</td>
					<td>
						<textarea name=" " class="form-control" id=""  rows="2" placeholder="If No, why not? "></textarea>
					</td>
				</tr>
			</table>
		</div>

		<div class="col-md-2">
		</div>
	</div>
	<div class="col-md-12">
	<div style="text-align: center">
		<div><p>Please check your entries carefully before submitting</p></div>
		<div style="text-align: center"><a href="#" class="button button-rounded button-flat-caution">Submit</a></div>
	</div>
	</div>
</body>
