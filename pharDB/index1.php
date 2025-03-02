<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn Bootstrap </title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Prompt:wght@100;400;500&display=swap');

        * {
            font-family: 'Prompt', sans-serif;
        }
    </style>

    <?php
    include("headboot.php");
    ?>

</head>

<body>
    <!-- Navbar -->

    <?php include("navbar.php");   ?>

    <!-- End Navbar -->

    <!-- Hero -->
    <div class="px-4 py-5 my-5 text-center">
        <img class="d-block mx-auto mb-4" src="https://static.thairath.co.th/media/dFQROr7oWzulq5Fa5BllVPjBkuWubZdVkgpus144Xag7TO6VexOez8Gjvj3GjFGnRRq.jpg" width="850" height="450" alt="">
        <h1 class="display-5 fw-bold text-body-emphasis">แพทย์</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">แพทย์ (อังกฤษ: physician (อเมริกัน), medical practitioner (เครือจักรภพ), medical doctor) หรือเรียกว่า ดอกเตอร์ (doctor) หรือ หมอ ในบางพื้นที่ตามชนบท อาจเรียกแพทย์ว่า หมอใหญ่ เพื่อกันสับสนกับพยาบาลหรือเจ้าหน้าที่อื่นในทางด้านสาธารณสุข แพทย์มีหน้าที่ ซักถามประวัติ ตรวจร่างกาย และส่งตรวจวินิจฉัยเพิ่มเติม เพื่อสั่งการรักษาหรือให้การรักษาโรค ส่งเสริมฟื้นฟูสุขภาพ ให้แก่ผู้ป่วย ร่วมกับบุคลากรด้านสุขภาพอื่น ๆ.</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Primary button</button>
                <button type="button" class="btn btn-outline-secondary btn-lg px-4">Secondary</button>
            </div>
        </div>
    </div>
    <!-- End Hero -->

    <!-- Feature -->
    <div class="container px-4 py-5" id="custom-cards">
        <h2 class="pb-2 border-bottom">แพทย์</h2>

        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
            <div class="col">
                <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('https://www.vsquareclinic.com/wp-content/uploads/2022/07/%E0%B8%AB%E0%B8%A1%E0%B8%AD%E0%B8%8B%E0%B8%B5_429x429.png');">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                        <h5 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">อายุรแพทย์ - แพทย์ผู้เชี่ยวชาญด้านอายุรศาสตร์</h5>
                        <ul class="d-flex list-unstyled mt-auto">
                            <li class="me-auto">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTlQWEFRid6w0KtKg4S-rDE7p8fjumUyVpjoPyGwSvtfu0XPUxPH8fT78PDqH2kAchnBYs&usqp=CAU" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                            </li>
                            <li class="d-flex align-items-center me-3">
                                <svg class="bi me-2" width="1em" height="1em">
                                    <use xlink:href="#geo-fill"></use>
                                </svg>
                                <small>Earth</small>
                            </li>
                            <li class="d-flex align-items-center">
                                <svg class="bi me-2" width="1em" height="1em">
                                    <use xlink:href="#calendar3"></use>
                                </svg>
                                <small>3d</small>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('https://www.vsquareclinic.com/wp-content/uploads/2022/07/%E0%B8%AB%E0%B8%A1%E0%B8%AD%E0%B9%81%E0%B8%9E%E0%B8%A3_429x429.png');">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                        <h5 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">ศัลยแพทย์ - แพทย์ผู้เชี่ยวชาญด้านศัลยกรรม</h5>
                        <ul class="d-flex list-unstyled mt-auto">
                            <li class="me-auto">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTlQWEFRid6w0KtKg4S-rDE7p8fjumUyVpjoPyGwSvtfu0XPUxPH8fT78PDqH2kAchnBYs&usqp=CAU" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                            </li>
                            <li class="d-flex align-items-center me-3">
                                <svg class="bi me-2" width="1em" height="1em">
                                    <use xlink:href="#geo-fill"></use>
                                </svg>
                                <small>Pakistan</small>
                            </li>
                            <li class="d-flex align-items-center">
                                <svg class="bi me-2" width="1em" height="1em">
                                    <use xlink:href="#calendar3"></use>
                                </svg>
                                <small>4d</small>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('https://www.vsquareclinic.com/wp-content/uploads/2022/07/%E0%B8%AB%E0%B8%A1%E0%B8%AD%E0%B9%82%E0%B8%99%E0%B9%8A%E0%B8%95_429x429.png');">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                        <h5 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">แพทย์โสตศอนาสิก - แพทย์ผู้เชี่ยวชาญด้านโสตศอนาสิกวิทยา</h5>
                        <ul class="d-flex list-unstyled mt-auto">
                            <li class="me-auto">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTlQWEFRid6w0KtKg4S-rDE7p8fjumUyVpjoPyGwSvtfu0XPUxPH8fT78PDqH2kAchnBYs&usqp=CAU" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                            </li>
                            <li class="d-flex align-items-center me-3">
                                <svg class="bi me-2" width="1em" height="1em">
                                    <use xlink:href="#geo-fill"></use>
                                </svg>
                                <small>California</small>
                            </li>
                            <li class="d-flex align-items-center">
                                <svg class="bi me-2" width="1em" height="1em">
                                    <use xlink:href="#calendar3"></use>
                                </svg>
                                <small>5d</small>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- End Feature -->

    <!-- Product -->
    <!-- <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
        <div class="text-bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
            <div class="my-3 py-3">
                <h2 class="display-5">Another headline</h2>
                <p class="lead">And an even wittier subheading.</p>
            </div>
            <div class="bg-body-tertiary shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
        </div>
        <div class="bg-body-tertiary me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
            <div class="my-3 p-3">
                <h2 class="display-5">Another headline</h2>
                <p class="lead">And an even wittier subheading.</p>
            </div>
            <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
        </div>
    </div> -->

    <!-- End Product -->

   

    

    <!-- Footer -->
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-4 d-flex align-items-center">
            <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
                <svg class="bi" width="30" height="24">
                    <use xlink:href="#bootstrap"></use>
                </svg>
            </a>
            <span class="mb-3 mb-md-0 text-body-secondary">© 2023 Desing By Panyada.ph</span>
        </div>

        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24">
                        <use xlink:href="#twitter"></use>
                    </svg></a></li>
            <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24">
                        <use xlink:href="#instagram"></use>
                    </svg></a></li>
            <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24">
                        <use xlink:href="#facebook"></use>
                    </svg></a></li>
        </ul>
    </footer>
    <!-- End Footer -->


    <?php include("footboot.php") ?>




</body>

</html>