
<?php
include_once ('../model/PostDB.php');
//include '../model/dbcon.php';
//$db=dbopen();
include_once ('header.php');
//$data = "select * from storytrack where datereceived = '1986-12-23'"?>
<table class= "table table-hover">
<tr>
<th>Unique Number</th>
<th>Footage Received</th>
<th>Where Received</th>
<th>Reviewed By</th>
<th>SEQ</th>
<th>B-Roll</th>
<th>Fint</th>
<th>VO</th>
<th>PTC</th>
<th>CTA</th>
<th>VD</th>
<th>Translation</th>
<th>Approved For Payment</th>
<th>Approved On</th>
</tr>
<?php
$jdata = getJuniorEditorData();
foreach($jdata as $row)
{
  echo "<tr>";
  echo "<td>" . $row['uniquenumber'] . "</td>" ; 
  echo "<td>" . $row['footagereceived'] . "</td>";
  echo "<td>" . $row['wherereceived'] . "</td>"; 
  echo "<td>" . $row['reviewedby'] . "</td>"; 
  echo "<td>" . $row['seq'] . "</td>"; 
  echo "<td>" . $row['broll'] . "</td>"; 
  echo "<td>" . $row['fint'] . "</td>"; 
  echo "<td>" . $row['vo'] . "</td>";
  echo "<td>" . $row['ptc'] . "</td>"; 
  echo "<td>" . $row['cta'] . "</td>";  
  echo "<td>" . $row['vd'] . "</td>"; 
  echo "<td>" . $row['translation'] . "</td>"; 
  echo "<td>" . $row['paymentapproved'] . "</td>"; 
  echo "<td>" . $row['approvedon'] . "</td>"; 
  echo "<td><a href='junioreditor.php?un=" . $row['uniquenumber'] . "'><input type='submit' value='Edit' /></a></td>";
  echo "</tr>";
}


echo "</table>";
?>

<link rel="stylesheet" href="./jqueryui/css/ui/jquery-ui.css" />
<script src="./jqueryui/js/jquery.js"></script>
<script src="./jqueryui/js/jquery-ui.min.js"></script>
<script>
 $(function(){
        $("#dateSearchFrom").datepicker({ dateFormat: 'yy-mm-dd' });
        $("#searchToDate").datepicker({ dateFormat: 'yy-mm-dd' }).bind("change",function(){
            var minValue = $(this).val();
            minValue = $.datepicker.parseDate("yy-mm-dd", minValue);
            minValue.setDate(minValue.getDate()+1);
            $("#searchToDate").datepicker( "option", "minDate", minValue );
        })
    });
</script>
</body>
</html>
