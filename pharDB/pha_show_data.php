<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>แสดงข้อมูลบุคคล</title>
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
    ?>
</head>

<body>
    <!-- Navbar -->

    <?php include("navbar.php");   ?>

    <!-- End Navbar -->

    <div class="container mt-3">
        <h1>
            <div class="text-center"> แสดงข้อมูลบุคลากร </div>
        </h1>
        <!-- Card Album2 -->
        <div class="row g-3">
            <?php
            $sql = "SELECT * FROM pharmacist order by pham_id desc";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($result)) {
            ?>
                <div class="col-md-4">

                    <div class="card">
                        <img src="images_pha/<?= $row['pha_images']; ?>" class="card-img-top" alt="..." width="800" height="300">



                        <div class="card-body">
                            <h5 class="card-title"><?php print $row['pham_id']; ?></h5>
                            <p class="card-text"><?php echo $row['pha_num']; ?></p>
                            <p class="card-text"><?php echo $row['pha_prefix'] . ' ' . $row['pha_name'] . ' ' . $row['pha_surname']; ?></p>
                            <p class="card-text"><?php echo $row['pha_add']; ?></p>
                            <p class="card-text"><?php echo $row['pha_phone']; ?></p>
                            <p class="card-text"><?php echo $row['pha_email']; ?></p>
                            
                            

                          


                        </div>
                    </div>

                </div>
            <?php } ?>




        </div>





    </div>


    <?php include("footboot.php"); ?>
</body>

</html>