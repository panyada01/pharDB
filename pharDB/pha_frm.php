<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>การจัดการข้อมูลเภสัชกร</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai+Looped:wght@700&family=Prompt:wght@100;400;500&display=swap');

        * {
            font-family: 'IBM Plex Sans Thai Looped', sans-serif;
            font-family: 'Prompt', sans-serif;
        }
    </style>
    <?php
    include("headboot.php");
    ?>
</head>

<body>
    <?php include("navbar.php"); ?>

    <div class="container mt-3">
        <h1>
            <div class="text-center">จัดการข้อมูล</div>
        </h1>
        <form action="pha_insert.php" method="POST" enctype="multipart/form-data" name="pha_frm" id="pha_frm">

            <div class="row g-3">

                <div class="col-md-4">
                    <label for="form-label">รหัสบัตรประชาชนเภสัชกร</label>
                    <input type="text" class="form-control" id="pham_id" name="pham_id" placeholder="กรุณากรอกรหัสประชาชนเภสัชกร" require>
                </div>

                <div class="col-md-4">
                    <label for="form-label">เลขที่ใบอนุญาตประกอบวิชาชีพ</label>
                    <input type="text" class="form-control" id="pha_num" name="pha_num" placeholder="กรุณากรอกเลขที่ใบอนุญาตประกอบวิชาชีพ" require>
                </div>

                <div class="col-md-4">
                    <input class="form-check-input" type="radio" name="pha_prefix" id="pha_prefix" value="นาย" checked> นาย
                    <input class="form-check-input" type="radio" name="pha_prefix" id="pha_prefix" value="นางสาว"> นางสาว
                    <input class="form-check-input" type="radio" name="pha_prefix" id="pha_prefix" value="นาง"> นาง
                    <input class="form-check-input" type="radio" name="pha_prefix" id="pha_prefix" value=" "> อื่น ๆ
                    <input type="text" class="form-control" id="pha_name" name="pha_name" placeholder="กรุณาป้อนชื่อ" required>
                </div>

                <div class="col-md-4">
                    <label for="form-label">นามสกุล </label>
                    <input type="text" class="form-control" id="pha_surname" name="pha_surname" placeholder="กรุณาป้อนนามสกุล" required>
                </div>

                <div class="col-md-4">
                    <label for="form-label">ที่อยู่ </label>
                    <input type="text" class="form-control" id="pha_add" name="pha_add" placeholder="กรุณาป้อนที่อยู่" required>
                    <!-- <textarea class="form-control" aria-label="With textarea" name="pha_add" id="pha_add">   </textarea> -->
                </div>

                <div class="col-md-4">
                    <label for="form-label">เบอร์โทร </label>
                    <input type="text" class="form-control" id="pha_phone" name="pha_phone" placeholder="กรุณาป้อนเบอร์โทร">
                </div>

                <div class="col-md-4">
                    <label for="form-label"> Email </label>
                    <input type="text" class="form-control" id="pha_email" name="pha_email" placeholder="กรุณาป้อนemail" placeholder="name@example.com">
                </div>

                <div class="col-md-4">
                    <label for="form-label">แนบรูปภาพ </label>
                    <input class="form-control form-control-lg" id="pha_images" name="pha_images" type="file">

                </div>
                
                <div class="col-md-4" class="text-center">
                <label for="form-label"> </label>
                    <input type="submit" class="form-control btn btn-warning" name="btnok" id="btnok" value="ตกลง">


                </div>

            </div>



        </form>

    </div>

</body>

</html>