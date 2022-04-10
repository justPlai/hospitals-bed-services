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
        height: 500px;
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
        float: left;
        margin-left: 100px;
        margin-bottom: 10px;
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

            <div style="position: relative; right:320px; margin-top:3%">
                <h2><i class="fa fa-wrench" style="font-size:50px;" aria-hidden="true"></i>เพิ่มรายละเอียดเตียงผู้ป่วย</h2>
            </div>

            <div class="block-1">
                <form method="get">

                    <div>
                        <div class="row">
                            <div class="col">
                                <label style="margin-top: 50px;">หมายเลขเตียง : <?php echo $bedDetail->bed_id ?></label>
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col">
                                <label>ชื่อ - สกุลผู้ป่วย : <?php echo $bedDetail->firstName." ".$bedDetail->lastName ?></label>
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col">
                                <label>หมอ : <?php echo $bedDetail->doctorFirstname." ".$bedDetail->doctorLastname ?></label>
                            </div>
                        </div><br>


                        <input type="hidden" name="controller" value="bedDetail" />
                        <input type="hidden" name="bedDetail_id" value="<?php echo $bedDetail->bedDetail_id ?>" />
                        <input type="hidden" name="hospital_id" <?php echo "value=$bedDetail->hospital_id"; ?> /> 
                        <!--ใส่ id-->
                        <div class="row">
                            <div class="col" style="margin-top: 80px;">
                                <button class="btn btn-primary" type="submit" name="action" value="delete">ลบ</button>
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