<?php
/**
 * Created by PhpStorm.
 * User: refar
 * Date: 18-4-9
 * Time: 下午9:57
 */


?>
<!DOCTYPE html>
<html>
<head>
    <title>add.php</title>

</head>
<body>
    <form action="addConfirm.php" method="post">
        资产编号: <input type="text" name="no"><br>
        资产名称： <input type="text" name="name"> <br>
        部门： <input type="text" name="dept"> <br>
        课： <input type="text"  name="emp"> <br>
        CPU： <input type="text" name="cpu"> <br>
        Platform： <input type="text" name="pla"> <br>
        使用者： <input type="text" name="user"> <br>
        借用日期： <input type="text" name="date"> <br>
        借用人： <input type="text" name="peo"> <br>
        状态： <input type="text" name="status"> <br>
        备注： <input type="text" name="desc"> <br>
        <button type="submit">add</button>
        <button type="reset">reset</button>
    </form>


</body>

</html>