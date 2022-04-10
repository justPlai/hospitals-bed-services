<style>
    body {
        font-family: 'Sarabun', sans-serif;
        overflow: hidden;
    }

    #searchDetail {
        position: relative;
        right: 40px;
        font-size: large;

    }
</style>

<body>
    <div class="container mt-5">

        <div class="container mt-5">
            <div class="row" style="margin-bottom: 20px;">
                <div class="col-1">
                    <i class="fa fa-bed" style='font-size:50px; top: 15px; position:relative;'></i>
                </div>
                <div class="col mt-4">
                    <input type="text" id="searchDetail" onkeyup="myFunction()" value="" placeholder="ค้นหา">
                </div>
                <div class="col mt-4">
                    <a class="btn btn-primary" href="?controller=bedDetail&action=createPage&hospital_id=<?php echo $hospital_id; ?>" style='margin-top: 10px; left: 60%; position:relative;'>เพิ่มรายละเอียดเตียง</a><br>
                </div>
            </div>



            <table class="table table-hover" id="myTable">
                <thead class="table-dark text-center">
                    <tr>
                        <th>ลำดับ</th>
                        <th>ชื่อ-สกุล ผู้ป่วย</th>
                        <th>วันที่เข้ารับการรักษา</th>
                        <th>ผลการตรวจ</th>
                        <th>ชื่อ-สกุล หมอ</th>
                        <th>แก้ไข</th>
                        <th>ลบ</th>
                    </tr>
                    <!--รอ service ครบค่อยใส่ foreach-->
                </thead>
                <tbody class="text-center">
                    <?php
                    foreach ($bedDetailList as $bedDetail) {
                        echo "<tr>
                            <td>$bedDetail->bedDetail_id</td>
                            <td>$bedDetail->firstName $bedDetail->lastName</td>
                            <td>$bedDetail->date</td>
                            <td>$bedDetail->result</td>
                            <td>$bedDetail->doctorFirstname $bedDetail->doctorLastname</td>
                            <td><a href=?controller=bedDetail&action=updatePage&id=$bedDetail->bedDetail_id >✍️</a></td>"; ?>

                        <td>
                            <form method=POST action="?controller=bedDetail&action=delete">
                                <input name="bedDetail_id" type="hidden" value="<?php echo "$bedList->bed_id"; ?>">
                                <input name="hospital_id" type="hidden" value="<?php echo "$bedDetail->hospital_id"; ?>" />
                                <a type="button" class="show_confirm" data-toggle="tooltip" test="<?php echo $bedDetail->bedDetail_id; ?>">🚮</a>
                            </form>
                        </td>
                    <?php echo "
                        </tr>";
                    }
                    ?>
                </tbody>
            </table>

        </div>
</body>

</html>

<script>
    function myFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("searchDetail");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            td2 = tr[i].getElementsByTagName("td")[1];
            td3 = tr[i].getElementsByTagName("td")[2];
            let x = 1;
            let y = 1;
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                    x = 0;
                    y = 0;
                }
            }

            if (x === 1 && y === 1) {
                if (td2) {
                    txtValue = td2.textContent || td2.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                        x = 0;
                    }
                }
            }

            if (x === 1) {
                if (td3) {
                    txtValue = td3.textContent || td3.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }


    }
</script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
    $('.show_confirm').click(function(event) {
        var form = $(this).closest("form");
        var name = $(this).data("name");
        var test = $(this).attr("test");
        event.preventDefault();
        Swal.fire({
            title: 'แน่ใจว่าคุณต้องการลบ?',
            text: "" + test,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'ลบ',
            cancelButtonText: 'ยกเลิก'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                        'ลบเสร็จสิ้น!',
                        'รายละเอียดนี้ได้ถูกลบไปแล้ว',
                        'success'
                    )
                    .then(function() {
                        form.submit(); // <--- submit form programmatically
                    });
            }
        })
    });
</script>