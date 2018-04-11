<?php
/**
 * Created by PhpStorm.
 * User: refar
 * Date: 18-4-10
 * Time: 下午9:51
 */

$id = $_POST['id'];
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
if (!$conn) {
    die('could not connect '. mysqli_connect_error());
}

$sql = "UPDATE ctrl_machineinfo SET `machine name`='{$name}', `deptement`='{$dept}', 
 `mangement`='{$emp}', `CPU`='{$cpu}', `platform`='{$pla}', 
 `user`='{$user}', `borrowDate`='{$date}', `borrower`='{$peo}',
  `flag`='{$status}', `desc`='{$desc}' WHERE `id`='{$id}'";

if ($conn -> query($sql)) {
    header("location:select.php");

} else {
    echo $sql;
    echo "修改失败";
}



