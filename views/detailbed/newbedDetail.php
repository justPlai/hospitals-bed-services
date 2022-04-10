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
                <form method="get" action="">

                    <div>
                        <div class="row">
                            <div class="col">
                                <label style="margin-right:65%;">หมายเลขเตียง</label>
                                <select name="bed_id">
                                    <?php foreach ($bedList as $bed) {
                                        if ($bed->hospital_id == $hospital_id) {
                                            echo "<option value=$bed->bed_id";
                                            echo ">$bed->bed_id</option>";
                                        }
                                    } ?></select>
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col">
                                <label style="margin-right:65%;">ชื่อ - สกุลผู้ป่วย</label>
                                <select name="patient_id">
                                    <?php foreach ($patientList as $patient) {
                                        echo "<option value = $patient->_id";
                                        echo ">$patient->firstName $patient->lastName</option>";
                                    } ?></select>

                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col">
                                <label style="margin-right:75%;">หมอ</label>
                                <select name="doctor_id">
                                    <?php foreach ($doctorList as $doctor) {
                                        if ($doctor->hostpitalId == $hospital_id) {

                                            echo "<option value = $doctor->doctorId";
                                            echo ">$doctor->doctorFirstname $doctor->doctorLastname</option>";
                                        }
                                    } ?></select>

                            </div>
                        </div><br>


                        <input type="hidden" name="controller" value="bedDetail" />
                        <input type="hidden" name="hospital_id" <?php echo "value=$hospital_id"; ?> />
                        <!--ใส่ id-->
                        <div class="row">
                            <div class="col">
                                <button class="btn btn-primary" type="submit" name="action" value="create">อัพเดต</button>
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