<style>
    html,
    body {
        height: 100%;
    }

    body {
        margin: 0;
        background: "white";
        font-family: 'Sarabun', sans-serif;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }

    .block-1 {
        width: 1000px;
        height: 600px;
        background: #FFFFFF;
        box-shadow: 0 3px 6px rgba(0, 0, 0, 0.75);
        border-radius: 10px;
    }

    input[type=text],
    select,
    textarea {
        width: 800px;
        height: 40px;
        border: 1px solid #ccc;
        border-radius: 4px;
        resize: vertical;
        font-size: 20px;
    }

    input[type=date] {
        width: 800px;
        height: 40px;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        resize: vertical;
        font-size: 20px;
    }

    label {
        position: relative;
        font-size: 25px;
    }

    .row {
        position: relative;
        top: 20px;
    }
</style>

<body>
    <center>
        <div>

            <div style="position: relative; right:300px; margin-top:3%">
                <h2><i class="fa fa-wrench" style="font-size:50px;" aria-hidden="true"></i>แก้ไขข้อมูลโรงพยาบาลสนาม</h2>
            </div>

            <div class="block-1">
                <form method="get" action="">

                    <div>

                        <div class="row">
                            <div class="col" style="position: relative; margin-top:5%">
                                <label style="margin-right:60%;">ชื่อโรงพยาบาลสนาม</label>
                                <input type="text" class="form-control" name="hospital_name" value="<?php echo $hospitalList->hospital_name; ?>" /><br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col" style="position: relative; margin-top:5%">
                                <label style="margin-right:53%;">สถานที่ตั้งโรงพยาบาลสนาม</label>
                                <input type="text" class="form-control" name="hospital_location" value="<?php echo $hospitalList->hospital_location; ?>" /><br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col" style="position: relative; margin-top:5%">
                                <label style="margin-right:65%;">เบอร์โทรติดต่อ</label>
                                <input type="text" class="form-control" name="hospital_phonenumber" value="<?php echo $hospitalList->hospital_phonenumber; ?>" /><br>
                            </div>
                        </div>

                        <input type="hidden" name="controller" value="hospital" />
                        <input type="hidden" name="hospital_id" value="<?php echo $hospitalList->hospital_id; ?>" ?>
                        <!--ใส่ id-->
                        <div class="row">
                            <div class="col" style="position: relative; margin-top:5%">
                                <button class="btn btn-primary" type="submit" name="action" value="update">อัพเดต</button>
                                <button class="btn btn-primary" type="submit" name="action" value="index">ย้อนกลับ</button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </center>
</body>

</html>