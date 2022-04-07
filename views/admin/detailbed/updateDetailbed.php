<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Bed Services</title>
</head>
<body>
    <div>
    <form method="get" action="">
        <center><h2>แก้ไขข้อมูลเตียงผู้ป่วย</h2>
        <label>หมายเลขเตียง</label>
        <input type="text" name="hospitalName" value=""/><br>

        <label>ชื่อ - สกุล ผู้ป่วย</label>
        <input type="text" name="hospitalLocation" value=""/><br>

        <label>วันที่เข้ารับการรักษา</label>
        <input type="date" name="hospitalPhonenumber" value=""/><br>

        <input type="hidden"name="controller"value=""/>
        <input type="hidden" name="oldid" value=""/> <!--ใส่ id-->
        <button type= "submit"name="action"value="">อัพเดต</button>
        <button type= "submit"name="action"value="">ย้อนกลับ</button>

        </center>
    </form>
    </div>
</body>
</html>