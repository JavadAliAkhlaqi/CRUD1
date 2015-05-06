<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("contact",$con);
?>
<head>
<script src="me_js/me.js"></script>
</head>
</body>
<table>
<form method="post" enctype="multipart/form-data" action="#">
<tr><td>Name</td><td><input type="text" onblur="showClName()" name="name"/></td></tr>
<tr><td>Father Name</td><td><input type="text" name="fname"/></td></tr>
<tr><td>Birht Date</td><td><input type="Date" name="birth"/></td></tr>
<tr><td>SSN</td><td><input type="text" name="ssn"/></td></tr>
<tr><td>Grade</td><td><select type="text" id="selectError3" name="grade"></select></td></tr>
<tr><td>Inroll Date</td><td><input type="Date" name="inrol"/></td></tr>
<tr><td>Choose Image</td><td><input type="file" name="img"/></td></tr>
<tr><td colspan="2"><input type="submit" name="submit" value="insert"/></td></tr>
</form>

</table>
<?php
if(isset($_POST['name'])){
$name=$_POST["name"];
$fname=$_POST["fname"];
$birth=$_POST["birth"];
$image=$_POST["img"];
$ssn=$_POST["ssn"];
$grade=$_POST["grade"];
$inrol=$_POST["inrol"];
$query="insert into student values('$name','$fname','$birth','$image','$ssn',$grade,'$inrol')";
if(mysql_query($query)){
echo "successfully inserted";
}else{
echo "not inserted";
}
}else{
}

?>
</body>
</html>
