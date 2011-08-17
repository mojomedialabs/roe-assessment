<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Polls</title>
</head>

<body>
<?php
if(isset($_GET["error"])){

echo "Please answer all the questions";
}
?>

<!--Beginning of dropdown list-->
<p>Qualifying Questions:</p>
<form name="form1" method="Post" action="phpresult.php">
<p>1. Select the role that most closely relates to your current position.</p>
<p>
  <select name="Q1Drop" size="1" id="Q1Drop">
    <option value="1">Sole proprietor - Owner</option>
    <option>CEO</option>
    <option>CxO</option>
    <option>VP, Director or Manager</option>
    <option>Other</option>
  </select>
</p>
<p>2. How long have you been in your current position with this company?</p>
<p>
  <select name="Q2Drop" size="1" id="Q2Drop">
    <option value="1">0-1 year</option>
    <option>1-5 years</option>
    <option>5-15 years</option>
    <option>15+ years</option>
  </select>
</p>
<p>3. What area do you work in?</p>
<p>
  <select name="Q3Drop" size="1" id="Q3Drop">
    <option value="1">Operations</option>
    <option>Finance</option>
    <option>Sales</option>
    <option>Marketing</option>
    <option>Sales & Marketing</option>
  <option>Adminstration</option>
  </select>
</p>
<!--Beginning of radio button-->
Ten Questions:
<p>1. Have you completely read 2 books in the past year that relates to your field?</p>
<p>
        <input type="radio" name="Qradio1" value="positive"> Yes<br>
        <input type="radio" name="Qradio1" value="negative"> No<br>
</p>
<p>2. Were these books required reading by management (not voluntary)?</p>
<p>
        <input type="radio" name="Qradio2" value="negative"> Yes<br>
        <input type="radio" name="Qradio2" value="positive"> No<br>
</p>
<p>3. Have you attended 2 educational events in the past year that relate to your field?</p>
<p>
        <input type="radio" name="Qradio3" value="positive"> Yes<br>
        <input type="radio" name="Qradio3" value="negative"> No<br>
</p>
<p>4. Where these educational events arranged by management (not voluntary)?</p>
<p>
        <input type="radio" name="Qradio4" value="negative"> Yes<br>
        <input type="radio" name="Qradio4" value="positive"> No<br>
</p>
<p>5. Is your supervisor a mentor?</p>
<p>
        <input type="radio" name="Qradio5" value="positive"> Yes<br>
        <input type="radio" name="Qradio5" value="negative"> No<br>
</p>
<p>6. Have you debeloped a professional development program for your staff?</p>
<p>
        <input type="radio" name="Qradio6" value="positive"> Yes<br>
        <input type="radio" name="Qradio6" value="negative"> No<br>
</p>
<p>7. Would you support a professional development program for your direct staff (direct reports & their staff)?</p>
<p>
        <input type="radio" name="Qradio7" value="positive"> Yes<br>
        <input type="radio" name="Qradio7" value="negative"> No<br>
</p>
<p>8. Is the majority of your direct staff (direct reports & their staff) disengaged?</p>
<p>
        <input type="radio" name="Qradio8" value="negative"> Yes<br>
        <input type="radio" name="Qradio8" value="positive"> No<br>
</p>
<p>9. What Represents you best?</p>
<p>
        <input type="radio" name="Qradio9" value="positive"> Mentor<br>
        <input type="radio" name="Qradio9" value="negative"> Manager<br>
</p>
<p>10. Do you routinely follow subject matter experts in your field like blogs, whitepapers, or publications in yoour field and could you name them?</p>
<p>
        <input type="radio" name="Qradio10" value="positive"> Yes<br>
        <input type="radio" name="Qradio10" value="negative"> No<br>
</p>
<p>
<Input type = "Submit" Name = "Submit" Value = "Submit">
<p>
</form>
</body>
</html>
                                                                            
                                                