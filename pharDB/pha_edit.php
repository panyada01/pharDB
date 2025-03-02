<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไขข้อมูลบุคคล</title>
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
    <?php
    include("config/condb.php");
    $pham_id  = $_POST["pham_id"];
    $hd_pham_id=$_POST['hd_pham_id'];
    $pha_num = $_POST["pha_num"];
    $pha_name = $_POST["pha_name"];
    $pha_surname = $_POST["pha_surname"];
    $pha_add = $_POST["pha_add"];
    $pha_phone = $_POST["pha_phone"];
    $pha_email = $_POST["pha_email"];
    // $hd_pham_id = $_POST["hd_pham_id"];
    $chk_edit_no = $_POST["chk_edit_no"];


//Set ว/ด/ป เวลา ให้เป็นของประเทศไทย
    date_default_timezone_set('Asia/Bangkok');
    //สร้างตัวแปรวันที่เพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลด
    $date1 = date("Ymd_His");
    //ตัวแปรสุ่มตัวเลขเอาไปตั้งชื่อไฟล์ที่อัพโหลดไม่ให้ชื่อไฟล์ซ้ำกัน
    $numrand = (mt_rand());
    $upload = $_FILES["pha_images"]; //ตัวแปรที่รับมาจากฟอร์ม


    if ($upload <> '') {
        //โฟลเดอร์ที่เก็บไฟล์
        $path = "images_pha/";
        //ตัวขื่อกับนามสกุลภาพออกจากกัน
        $type = strrchr($_FILES["pha_images"]["name"], ".");
        //ตั้งชื่อไฟล์ใหม่เป็น สุ่มตัวเลข+วันที่
        $newname = $numrand . $date1 . $type;
        $path_copy = $path . $newname;
        $path_link = "images_pha/" . $newname;
        //คัดลอกไฟล์ไปยังโฟลเดอร์
        move_uploaded_file($_FILES["pha_images"]["tmp_name"], $path_copy);
    }

    if ($chk_edit_no == '0') {
        $sql = " UPDATE pharmacist SET pham_id='$pham_id',pha_num='$pha_num',pha_name='$pha_name',pha_surname='$pha_surname',pha_add='$pha_add',pha_phone='$pha_phone',pha_email='$pha_email' WHERE pham_id='$hd_pham_id' ";
    } else if ($chk_edit_no == '1') {
        $sql = " UPDATE pharmacist SET pham_id='$pham_id',pha_num='$pha_num',pha_name='$pha_name',pha_surname='$pha_surname',pha_add='$pha_add',pha_phone='$pha_phone',pha_email='$pha_email',pha_images='$newname' WHERE pham_id='$hd_pham_id' ";
    }

    $result = mysqli_query($conn, $sql) or die("Error in query หรือจัดการข้อมูลไม่ได้ : $sql ");
    mysqli_close($conn);

    //ถ้าสำเร็จให้ขึ้นอะไร
    if ($result) {
        echo "<script type='text/javascript'>";
        echo "alert('ทำการแก้ไขข้อมูลสำเร็จเรียบร้อยแล้ว');";
        echo "window.location = 'pha_show_data.php';";
        echo "</script>";
    } else {
        //กำหนดเงื่อนไขว่าถ้าไม่สำเร็จให้ขึ้นข้อความและกลับไปหน้าเพิ่ม  
        echo "<script type='text/javascript'>";
        echo "alert('error! การบันทึกข้อมูลไม่สำเร็จกรุณาตรวจสอบมีข้อผิดพลาด');";
        echo "window.location = 'pha_frm.php'; ";
        echo "</script>";
    }


?>

    <?php include("footboot.php"); ?>
</body>

</html>