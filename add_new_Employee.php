<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="windows-1251">
    <link rel="stylesheet" href="Styles.css">
    <link rel="stylesheet" href="bootstrap.css">

    <title></title>
</head>
<body>
<div style="margin-left: 50px;">
<h3>Сотрудник успешно добавлен</h3>

<?php
include "Employee.php";

$employee = new Employee($_POST['Name'],$_POST['Surname'],
    $_POST['Position'],$_POST['department'],$_POST['Pay'],$_POST['BirthDay']);

$file_all_Employee = fopen("Все сотрудники.txt","a+");
fputs($file_all_Employee,$employee->StringForWriteInFile());

$file = fopen($_POST['department'].".txt","a+");

fputs($file,$employee->StringForWriteInFile());

fclose($file);



$employee->EmployeePrint();



?>
<br>
<form action='Main.php'>
<input type='submit' class='btn btn-success' value='OK'>
</form>

</div>

</body>
</html>



