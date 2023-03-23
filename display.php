<html>
    <head>
        <title>แสดงผลข้อมูล</title>
        <link href="main.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <h1>ตารางแสดงผล</h1>
        <table border="1">
            <thead>
                <tr>
                    <th>รหัสประจำตัว</th>
                    <th>ชื่อ</th>
                    <th>นามสกุล</th>
                    <th>ชื่อเล่น</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $_POST['id'];?></td>
                    <td><?php echo $_POST['fname'];?></td>
                    <td><?php echo $_POST['lname'];?></td>
                    <td><?php echo $_POST['nickname'];?></td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan=4>แสดงผลข้อมูลจากฟอร์ม</td>
                </tr>
            </tfoot>
        </table>
    </body>
</html>