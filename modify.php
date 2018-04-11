
<?php
/**
 * Created by PhpStorm.
 * User: refar
 * Date: 18-4-9
 * Time: 下午9:55
 */

$conn = mysqli_connect("localhost","root","123456","ctrl","3306");

if(!$conn){
    die('could not connect'.mysqli_connect_error());
}

$no = $_GET['no'];
$sql = "select * from ctrl_machineinfo where id = ";
if(!empty($no)){
    $sql=$sql. $no;
    $result = mysqli_query($conn,$sql);
    $row = $result -> fetch_row();
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>modify.php</title>
    </head>
    <body>
        <form action="modifyConfirm.php"  method="post">
            资产编号： <input type="text" readonly="readonly"  value="<?php echo $row[0] ?>" name="id"><br>
            资产名称： <input type="text"  value="<?php echo $row[1] ?>"  name="name"> <br>
            部门： <input type="text"  value="<?php echo $row[2] ?>" name="dept"> <br>
            课： <input type="text"  value="<?php echo $row[3] ?>" name="emp"> <br>
            CPU： <input type="text"  value="<?php echo $row[4] ?>" name="cpu"> <br>
            Platform： <input type="text"  value="<?php echo $row[5] ?>" name="pla"> <br>
            使用者： <input type="text"  value="<?php echo $row[6] ?>" name="user"> <br>
            借用日期： <input type="text"  value="<?php echo $row[7] ?>" name="date"> <br>
            借用人： <input type="text"  value="<?php echo $row[8] ?>" name="peo"> <br>
            状态： <input type="text"  value="<?php echo $row[9] ?>" name="status"> <br>
            备注： <input type="text"  value="<?php echo $row[10] ?>" name="desc"> <br>

            <button type="submit">确认</button>
            <button type="reset">重置</button>
        </form>

    </body>
</html>

</html>





