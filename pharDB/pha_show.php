<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แสดงข้อมูล</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai+Looped:wght@700&family=Prompt:wght@100;400;500&display=swap');

        * {
            font-family: 'IBM Plex Sans Thai Looped', sans-serif;
            font-family: 'Prompt', sans-serif;
        }
    </style>
    <?php
    include("headboot.php");
    include("config/condb.php");
    ?>
</head>
<body>
<?php include("navbar.php"); ?>
<table id="example3" class="table table-bordered table-striped dataTable">
        <thead>
            <tr role="row" class="info">
                <!-- <th tabindex="0" rowspan="1" colspan="1" style="width: 5%;">ลำดับ</th> -->
                <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">รหัสบัตรประชาชนเภสัชกร</th>
                <th tabindex="0" rowspan="1" colspan="1" style="width: 13%;">เลขที่ใบอนุญาตประกอบวิชาชีพ</th>
                <th tabindex="0" rowspan="1" colspan="1" style="width: 9%;">ชื่อ</th>
                <th tabindex="0" rowspan="1" colspan="1" style="width: 9%;">นามสกุล</th>
                <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">ที่อยู่</th>
                <th tabindex="0" rowspan="1" colspan="1" style="width: 5%;">เบอร์โทร</th>
                <th tabindex="0" rowspan="1" colspan="1" style="width: 5%;">Email</th>
                <th tabindex="0" rowspan="1" colspan="1" style="width: 5%;">รูปภาพ</th>
                <th tabindex="0" rowspan="1" colspan="1" style="width: 2%;">แก้ไข</th>
                <th tabindex="0" rowspan="1" colspan="1" style="width: 2%;">ลบ</th>
            </tr>
            <?php
            $sql = "SELECT * FROM pharmacist order by pham_id desc";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($result)) {

            ?>
     <tbody>
            <tr>
                <td><?php print $row['pham_id']; ?> </td>
                <td><?php print $row['pha_num']; ?> </td>
                <td><?php echo $row['pha_prefix'] . ' ' . $row['pha_name']; ?> </td>
                <td> <?php echo $row['pha_surname']; ?></td>
                <td> <?php echo $row['pha_add']; ?></td>
                <td> <?php echo $row['pha_phone']; ?></td>
                <td> <?php echo $row['pha_email']; ?></td>
                
                



                <td><img class="img-rounded" src="images_pha/<?= $row['pha_images']; ?>" width="100" height="100"> </td>

                <td><a class="btn btn-warning btn-flat btn-sm" href="pha_frm_edit.php?act=edit&pham_id=<?php echo $row['pham_id']; ?>">
                        แก้ไข
                    </a>  </td>

                <td> <a class="btn btn-success" href="pha_del.php?pham_id=<?= $row['pham_id']; ?>" onclick="return confirm('ยืนยันการลบข้อมูล !!');">
                        ลบ
                    </a></td>
            <?php } ?>
            </tr>
        </tbody>
</body>
</html>