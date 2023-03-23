<html>
    <head>
        <title>Frist Website</title>
        <link href="main.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <form action="display.php" method="POST">
            <fieldset>
                <legend>กรอกข้อมูลส่วนตัว</legend>
                <label for="id">รหัสประจำตัว : </label>
                <input type ="text" name= "id"><br/>
                <label for="fristname">ชื่อ : </label>
                <input type="text" name= "fname"></br>
                <label for="lastname">นานสกุล</label>
                <input type="text" name= "lname"></br>
                <label for="nickname">ชื่อเล่น : </label>
                <input type="text" name= "nickname"></br>
                <input type="reset" name= "reset" value= "ล้างข้อมูล">
                <input type="submit" value="ส่งข้อมูล" name="submit">
            </fieldset>

        </form>
    </body>
</html>