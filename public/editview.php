<?php
include '../model/dbcon.php';
$db=dbopen();
include ('header.php');


//$data = "select * from storytrack where datereceived = '1986-12-23'"
?>
<table class="table table-hover">
<thead>
<tr>
<th>CC Name</th>
<th>State</th>
<th>Received Date</th>
<th>Issue Topic</th>
<th>Received for Editing</th>
<th>Editor</th>
<th>Editing Completed</th>
<th>Subtitling Status</th>
<th>Complete Video Sent</th>
<th>Notes</th>
</tr>
</thead>
<?php 

$statusedit= "select * from storytrack where seq IS NOT NULL";
$result = $db->query($statusedit);
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['ccname'] . "</td>" ; 
  echo "<td>" . $row['state'] . "</td>";
  echo "<td>" . $row['receiveddate'] . "</td>";
  echo "<td>" . $row['issuetopic'] . "</td>"; 
  echo "<td>" . $row['editrecieve'] . "</td>"; 
  echo "<td>" . $row['editorName'] . "</td>";
  echo "<td>" . $row['editcomplete'] . "</td>"; 
  echo "<td>" . $row['subtitleStatus'] . "</td>";   
  echo "<td>" . $row['videosent'] . "</td>";  
  echo "<td>" . $row['notes'] . "</td>";  
  echo "<td><a href=\"editor.php?id=$row[fid]\" ><input type=\"submit\" value=\"Edit\" /></a></td>";
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