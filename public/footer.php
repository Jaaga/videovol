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
  $(function() {
 	var date = $('#editRecievedDatePick').datepicker({ dateFormat: 'yy-mm-dd' }).val();
    var date = $('#editCompletedDatePick').datepicker({ dateFormat: 'yy-mm-dd' }).val();
    var date = $('#videoSentDatePick').datepicker({ dateFormat: 'yy-mm-dd' }).val();
    var date = $('#footageReceivedDatePick').datepicker({ dateFormat: 'yy-mm-dd' }).val();
    var date = $('#approvedOnDatePick').datepicker({ dateFormat: 'yy-mm-dd' }).val();
    var date = $('#editMonthDate').datepicker({ dateFormat: 'yy-mm-dd' }).val();
    var date = $('#dateReceivedDatePick').datepicker({ dateFormat: 'yy-mm-dd' }).val();
    var date = $('#dateOfStoryDatePick').datepicker({ dateFormat: 'yy-mm-dd' }).val();

    var date = $('.datepick').datepicker({ dateFormat: 'yy-mm-dd' }).val();
  // var date = $('#datepick').datepicker({ dateFormat: 'yy-mm-dd' }).val();
   // var date = $('#datePick').datepicker({ dateFormat: 'yy-mm-dd' }).val();
   // var date = $('#datePick').datepicker({ dateFormat: 'yy-mm-dd' }).val();
   // var date = $('#datePick').datepicker({ dateFormat: 'yy-mm-dd' }).val();
});
</script>
</body>
</html>