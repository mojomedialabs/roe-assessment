<html>

<?PHP
//validate if the questions are answered
if (isset($_POST['Qradio1'])&&
   (isset($_POST['Qradio2'])&&
   (isset($_POST['Qradio3'])&&
   (isset($_POST['Qradio4'])&&
   (isset($_POST['Qradio5'])&&
   (isset($_POST['Qradio6'])&&
   (isset($_POST['Qradio7'])&&
   (isset($_POST['Qradio8'])&&
   (isset($_POST['Qradio9'])&&
   (isset($_POST['Qradio10']))))))))))){


                $array = array();
                array_push($array, $_POST['Qradio1']);
                array_push($array, $_POST['Qradio2']);
                array_push($array, $_POST['Qradio3']);
                array_push($array, $_POST['Qradio4']);
                array_push($array, $_POST['Qradio5']);
                array_push($array, $_POST['Qradio6']);
                array_push($array, $_POST['Qradio7']);
                array_push($array, $_POST['Qradio8']);
                array_push($array, $_POST['Qradio9']);
                array_push($array, $_POST['Qradio10']);


                $size = count($array);
                $positiveAnswers = array_keys ($array,"positive");
                $positiveSize = count($positiveAnswers);
                $result = ($positiveSize / $size)*100;

                echo "$result";
        }
//redirect to main page if there is an answered question
else {
        header('Location: http://'.$_SERVER['HTTP_HOST'].'/poll/poll.php?error=1');
}
//Clssify results in 3 sections
if ($result > 0 && $result <33)
        echo " You are in Class C";
elseif ($result >33 && $result<66)
        echo " You are in Class B";

else
        echo " You are in Class A";
?>
  <head>
	<!--set the variable $result in PHP to result in JS-->
    <script>
	var result = <?php echo $result; ?>;
	</script>
	<script type='text/javascript' src='https://www.google.com/jsapi'></script>
    <script type='text/javascript'>
      google.load('visualization', '1', {packages:['gauge']});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Label');
        data.addColumn('number', 'Value');
        data.addRows(1);
        data.setValue(0, 0, 'Result');
        //calls the variable $result from php 
        data.setValue(0, 1, result);
   

        var chart = new google.visualization.Gauge(document.getElementById('chart_div'));
        var options = {width: 1600, height: 480, redFrom: 0, redTo: 33,
            yellowFrom:67, yellowTo: 100, minorTicks: 5, greenColor:'#c55d6d', greenFrom:34, greenTo:66};
        chart.draw(data, options);
      }
    </script>
  </head>

<body>
    <div id='chart_div'></div>
</body>
</html>