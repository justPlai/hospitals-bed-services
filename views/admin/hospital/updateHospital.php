<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>
<?php 
        require_once("../../navbar.php")
?>
<style>
html,
body {
	height: 100%;
}

body {
	margin: 0;
	background: "white";
    background-repeat: no-repeat;
    background-attachment: fixed;
}
.block-1 {
	width: 1000px;
	height: 500px;
	background: #FFFFFF;
    box-shadow: 0 3px 6px rgba(0,0,0,0.75);
    border-radius: 10px;
}
input[type=text], select, textarea {
  width: 800px;
  height : 50px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
input[type=date] {
  width: 800px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
</style>
<body>
<center>
        <div>

            <div style="position: relative;right:280px">
                <h2><i class="fa fa-wrench" style="font-size:50px;" aria-hidden="true"></i>แก้ไขข้อมูลโรงพยาบาลสนาม</h2>
            </div>

            <div  class="block-1">
                <form method="get" action="">

                    <div style="position: relative;top:50px">
                        <div class="row">
                            <div class="col">
                                <label style="position: relative;right:310px;font-size: 20px">ชื่อโรงพยาบาลสนาม</label>
                                <input type="text" class="form-control " name="hospitalName" value=""/><br>
                            <div>
                        <div>

                        <div class="row" style="position: relative;top: 20px;">
                            <div class="col">
                                <label style="position: relative;right:290px;font-size: 20px;">สถานที่ตั้งโรงพยาบาลสนาม</label>
                                <input type="text" class="form-control" name="hospitalLocation" value=""/><br>
                            <div>
                        <div>
                        <div class="row" style="position: relative;top: 20px;">
                            <div class="col">
                                <label style="position: relative;right:340px;font-size: 20px;">เบอร์โทรติดต่อ</label>
                                <input type="text" class="form-control" name="hospitalPhonenumber" value=""/><br>
                            <div>
                        <div>


                        <input type="hidden"name="controller"value=""/>
                        <input type="hidden" name="oldid" value=""/> <!--ใส่ id-->
                        <div class="row" style="position: relative;top: 20px;">     
                            <div class="col">   
                                <button class="btn btn-primary" type= "submit"name="action"value="">อัพเดต</button>
                                <button class="btn btn-primary" type= "submit"name="action"value="">ย้อนกลับ</button>
                            <div>
                        <div>
                    <div>   
                                        
                </form>
            </div>
    </div>
    </center>
</body>
</html>