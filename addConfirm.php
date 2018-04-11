<?php
/**
 * Created by PhpStorm.
 * User: refar
 * Date: 18-4-11
 * Time: 下午9:21
 */

echo "1";
$id = $_POST['no'];
$name = $_POST['name'];
$dept = $_POST['dept'];
$emp = $_POST['emp'];
$cpu = $_POST['cpu'];
$pla = $_POST['pla'];
$user = $_POST['user'];
$date = $_POST['date'];
$peo = $_POST['peo'];
$status = $_POST['status'];
$desc = $_POST['desc'];

$conn = mysqli_connect("localhost","root","123456","ctrl","3306");

if (!$conn){
    die('could not connect'. mysqli_connect_error());
}

$sql = "insert into ctrl_machineinfo VALUES ('{$id}','{$name}','{$dept}',
        '{$emp}','{$cpu}','{$pla}','{$user}','{$date}','{$peo}','{$status}','{$desc}')";

$result = $conn -> query($sql);
if ($result){
    header("location:select.php");

} else {
    echo "add failed". "<br>";
    echo $sql;
}