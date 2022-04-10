<style>
    body {
        font-family: 'Sarabun', sans-serif;
        overflow: hidden;
    }

    #searchbed {
        position: relative;
        right: 40px;
        width: 500px;
        font-size: large;

    }
</style>
<body>

    <div class="container mt-5">
        <div class="row" style="margin-bottom: 20px;">
            <div class="col-1">
                <i class="bi bi-hospital-fill" style='font-size:50px; top: 15px; position:relative;'></i>
            </div>
            <div class="col mt-4">
                <input type="text" id="searchbed" onkeyup="myFunction()" placeholder="ค้นหา...">

                <input type="hidden" name="controller" value="hospital">
                <input type="hidden" name="action" value="index">
            </div>
            <div class="col mt-4">
            <a class="btn btn-primary" href="?controller=bed&action=createPage" style='left: 60%; position:relative;' >เพิ่มเตียงโรงพยาบาล</a><br>
            </div>
        </div>

        <table class="table table-hover" id="myTable">
            <thead class="table-dark text-center">
                <tr>
                    <th>ลำดับที่</th>
                    <th>โรงพยาบาล</th>
                    <th>ห้อง</th>
                    <th>แก้ไข</th>
                    <th>ลบ</th>
                </tr>
                <!--รอ service ครบค่อยใส่ foreach-->
            </thead>
            <tbody class="text-center">
                <?php 
                    foreach($bedList as $bedList){
                        echo "<tr>
                            <td>$bedList->bed_id</td>
                            <td>$bedList->hospital_name</td>
                            <td>$bedList->room_id</td>
                            <td><a type=button href=?controller=bed&action=updatePage&id=$bedList->bed_id >📝</a></td>";
                    ?>
                            <td><form method=POST action="?controller=bed&action=delete">
                            <input name="id" type="hidden" value="<?php echo "$bedList->bed_id";?>">
                            <a type="button" class="show_confirm" data-toggle="tooltip" test="<?php echo $bedList->bed_id;?>" >🚮</a>
                            </form></td>
                    <?php
                        echo "</tr>";
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
        input = document.getElementById("searchbed");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[1];
            td2 = tr[i].getElementsByTagName("td")[2];
            let x = 1;
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                    x = 0;
                }
            }

            if (x === 1) {
                if (td2) {
                    txtValue = td2.textContent || td2.innerText;
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
          var form =  $(this).closest("form");
          var name = $(this).data("name");
          var test = $(this).attr("test");
          event.preventDefault();
          Swal.fire({
          title: 'แน่ใจว่าคุณต้องการลบ?',
          text: ""+test,
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
              'เตียงนี้ได้ถูกลบไปแล้ว',
              'success'
            )
            .then(function() {
            form.submit(); // <--- submit form programmatically
            });
        }
        })
      });
  
</script>