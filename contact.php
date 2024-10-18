<?php
$txtName = $_POST['name'];
$txtEmail = $_POST['email'];
echo "$txtName";
echo "$txtEmail";

$connect=mysqli_connect("localhost","root","","reg_form");
$query="insert into students(student_name,gmail) value('$txtName','$txtEmail')";

mysqli_query($connect,$query);

echo "Registration Succesfully!";
?>