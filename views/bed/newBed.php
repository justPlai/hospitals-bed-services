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
                <h2><i class="fa fa-wrench" style="font-size:50px;" aria-hidden="true"></i>เพิ่มข้อมูลเตียง</h2>
            </div>

            <div class="block-1">
                <form method="get" action="">

                    <div>

                        <div class="row">
                            <div class="col" style="position: relative; margin-top:5%">
                                <label style="margin-right:65%;">หมายเลขห้อง</label>
                                <input type="text" class="form-control" name="room_id" /><br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col" style="position: relative; margin-top:5%">
                                <label style="margin-right:65%;">โรงพยาบาล</label>
                                <select name="hospital_id">
                                    <?php foreach ($hospitalList as $hospitalList) {
                                        echo "<option value = $hospitalList->hospital_id";
                                        if ($hospitalList->hospital_id == $bedList->hospital_id) {
                                            echo " selected='selected'";
                                        }
                                        echo ">$hospitalList->hospital_name</option>";
                                    } ?></select>
                            </div>
                        </div>


                        <input type="hidden" name="controller" value="bed" />
                        <!--ใส่ id-->
                        <div class="row">
                            <div class="col" style="position: relative; margin-top:10%">
                                <button class="btn btn-success" type="submit" name="action" value="create">เพิ่ม</button>
                                <button class="btn btn-danger" type="submit" name="action" value="index">ย้อนกลับ</button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </center>
</body>

</html>