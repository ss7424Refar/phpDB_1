<?php
/**
 * Created by PhpStorm.
 * User: refar
 * Date: 18-4-9
 * Time: 下午9:51
 */
$no = $_GET['no'];
$conn = mysqli_connect("localhost","root","123456","ctrl","3306");

if(!$conn){
    die('could not connect'.mysqli_connect_error());
}

$sql = "delete from ctrl_machineinfo where id = '$no'";

if($conn -> query($sql)){
    header("location:select.php");
} else {
    echo "删除失败";

}

?>