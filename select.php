<!DOCTYPE html>
<html>
    <head>
        <title>select.php</title>
    </head>
    <body>
        <table border="1px">
            <tr>
                <th>资产编号</th>
                <th>资产名称</th>
                <th>部门</th>
                <th>课</th>
                <th>CPU</th>
                <th>Platform</th>
                <th>使用者</th>
                <th>借用日期</th>
                <th>借用人</th>
                <th>状态</th>
                <th>备注</th>
                <th>op1</th>
                <th>op2</th>
            </tr>
    <?php
$conn = mysqli_connect("localhost", "root","123456","ctrl","3306");
if (!$conn) {
    die('could not connect'. mysqli_connect_error());
}

$sql = "select * from ctrl_machineinfo";
$result = $conn -> query($sql);

if ($result) {
    while ($attr = $result -> fetch_row()){
        echo "<tr>";
        for ($i=0; $i < 11; $i++){
            if ($i == 9) {
                if ($attr[$i] == 1) {
                   echo "<td>使用中</td>";
                } elseif ($attr[$i] == 2){
                    echo "<td>借出</td>";
                }
                elseif ($attr[$i] == 3) {
                    echo "<td>333</td>";
                }
            }
            else {
                echo "<td>$attr[$i]</td>";
            }
        }
        echo "<td><a onclick=\"return confirm('do you want delete?')\" href='delete.php?no={$attr[0]}'>delete</a></td>";
        echo "<td><a href='modify.php?no=$attr[0]'>modify</a></td>";
       echo  "</tr>";

    }

} ?>
        </table>
<a href="add.php" align="center">add</a>
    </body>

</html>



