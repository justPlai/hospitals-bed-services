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
        height: 50px;
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

            <div style="position: relative;right:320px">
                <h2><i class="fa fa-wrench" style="font-size:50px;" aria-hidden="true"></i>แก้ไขข้อมูลเตียงผู้ป่วย</h2>
            </div>

            <div class="block-1">
                <form method="get" action="">

                    <div style="position: relative;top:50px">
                        <div class="row">
                            <div class="col">
                                <label style="position: relative;right:340px;font-size: 20px">ลำดับที่</label>
                                <input type="text" class="form-control " name="hospitalName" value="<?php echo $bedList->bed_id;?>" /><br>
                                <div>
                                    <div>

                                        <div class="row" style="position: relative;top: 20px;">
                                            <div class="col">
                                                <label style="position: relative;right:330px;font-size: 20px;">หมายเลขห้อง</label>
                                                <input type="text" class="form-control" name="hospitalLocation" value="<?php echo $bedList->room_id;?>" /><br>
                                                <div>
                                                    <div>
                                                        <div class="row" style="position: relative;top: 20px;">
                                                            <div class="col">
                                                                <label style="position: relative;right:320px;font-size: 20px;">ชื่อโรงพยาบาล</label>
                                                              <div class="col">
                                                                    <select name="A_ID">
                                                                <?php foreach($hospitalList as $hospitalList) {
                                                                    echo "<option value = $hospitalList->hospital_id";
                                                                    if($hospitalList->hospital_id==$bedList->hospital_id){echo " selected='selected'";}
                                                                    echo ">$hospitalList->hospital_name</option>";}?></select><br>
                                                                  <div>
                                                                <div>
                                                                    <div>


                                                                        <input type="hidden" name="controller" value="bed" />
                                                                        <input type="hidden" name="oldid" value="<?php echo $bedList->bed_id;?>" />
                                                                        <!--ใส่ id-->
                                                                        <div class="row" style="position: relative;top: 20px;">
                                                                            <div class="col">
                                                                                <button class="btn btn-primary" type="submit" name="action" value="">อัพเดต</button>
                                                                                <button class="btn btn-primary" type="submit" name="action" value="">ย้อนกลับ</button>
                                                                                <div>
                                                                                    <div>
                                                                                        <div>

                </form>
            </div>
        </div>
    </center>
</body>

</html>