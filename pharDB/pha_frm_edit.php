<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไขข้อมูล</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai+Looped:wght@700&family=Prompt:wght@100;400;500&display=swap');

    * {
        font-family: 'IBM Plex Sans Thai Looped', sans-serif;
        font-family: 'Prompt', sans-serif;
    }
</style>


<?php
include("headboot.php");
include('config/condb.php');
if ($_GET["pham_id"] == '') {
    echo "<script type='text/javascript'>";
    echo "alert('Error Contact Admin !!');";
    echo "window.location = 'pha_show.php'; ";
    echo "</script>";
}
$pham_id = mysqli_real_escape_string($conn, $_GET['pham_id']);
$query = "SELECT * FROM pharmacist WHERE pham_id=$pham_id" or die("Error:" . mysqli_error($conn));
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
extract($row);    ?>


<body>
   

    <?php include("navbar.php"); 
    // echo $pham_id."<br>";
    // echo $pha_name;
    ?>

<div class="container mt-3">
        <h1>
            <div class="text-center"> จัดการข้อมูลบุคคล </div>
        </h1>
        <form action="pha_edit.php" method="POST" enctype="multipart/form-data" name="pha_frm" id="pha_frm">

            <div class="row g-3">

                <div class="col-md-4">
                    <label for="form-label">รหัสบัตรประชาชนเภสัชกร</label>
                    <input type="text" class="form-control" id="pham_id" name="pham_id" value="<?php echo $pham_id; ?>">
                    <input  type="hidden" class="form-control" id="hd_pham_id" name="hd_pham_id" value="<?php echo $pham_id; ?>">
                    
                </div>

                <div class="col-md-4">
                    <label for="form-label">เลขที่ใบอนุญาตประกอบวิชาชีพ</label>
                    <input type="text" class="form-control" id="pha_num" name="pha_num" value="<?php echo $pha_num; ?>">
                </div>

                <div class="col-md-4">
                    <input class="form-check-input" type="radio" name="pha_prefix" id="pha_prefix" value="นาย" checked> นาย
                    <input class="form-check-input" type="radio" name="pha_prefix" id="pha_prefix" value="นางสาว"> นางสาว
                    <input class="form-check-input" type="radio" name="pha_prefix" id="pha_prefix" value="นาง"> นาง
                    <input class="form-check-input" type="radio" name="pha_prefix" id="pha_prefix" value=" "> อื่น ๆ
                    <input type="text" class="form-control" id="pha_name" name="pha_name" value="<?php echo $pha_name; ?>">
                </div>

                <div class="col-md-4">
                    <label for="form-label">นามสกุล </label>
                    <input type="text" class="form-control" id="pha_surname" name="pha_surname" value="<?php echo $pha_surname; ?>">
                </div>

                <div class="col-md-4">
                    <label for="form-label">ที่อยู่ </label>
                    <input type="text" class="form-control" id="pha_add" name="pha_add" value="<?php echo $pha_num; ?>">
                    <!-- <textarea class="form-control" aria-label="With textarea" name="pha_add" id="pha_add">   </textarea> -->
                </div>

                <div class="col-md-4">
                    <label for="form-label">เบอร์โทร </label>
                    <input type="text" class="form-control" id="pha_phone" name="pha_phone" value="<?php echo $pha_phone; ?>">
                </div>

                <div class="col-md-4">
                    <label for="form-label"> Email </label>
                    <input type="text" class="form-control" id="pha_email" name="pha_email" value="<?php echo $pha_email; ?>">
                </div>

                <div class="col-md-4">
                    <label for="form-label">แนบรูปภาพ </label>
                    <input class="form-control form-control-lg" id="pha_images" name="pha_images" type="file">  
                    <input class="form-check-input" type="radio" name="chk_edit_no" id="chk_edit_no" value="0" checked> ไม่ต้องการแก้ไขรูปภาพ
                    <input class="form-check-input" type="radio" name="chk_edit_no" id="chk_edit_no" value="1"> ต้องการแก้ไขรูปภาพ

                </div>

                <div class="col-md-4" class="text-center">
                    <label for="form-label"> </label>
                    <input type="submit" class="form-control btn btn-warning" name="btnok" id="btnok" value="ตกลง">


                </div>

            </div>

    </div>



    <?php include("footboot.php"); ?>
</body>

</html>