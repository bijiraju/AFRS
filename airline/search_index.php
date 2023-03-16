<?php require 'connection.php'; ?>
<?php require 'header.php'; ?>
<div class="container-fluid m-0 p-0">
    <!-- nav bar start -->
    <div class="row m-0 p1 py-5">
        <div class="col-12 text-center text-white py-4">
            <div class="row">
                <div class="col-4">
                    <a href="homepage.php" class="border-0 btn">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="30"
                            height="26"
                            fill="currentcolor"
                            class="bi bi-arrow-left-circle-fill"
                            viewBox="0 0 16 16"
                        >
                            <path
                                d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"
                            />
                        </svg>
                    </a>
                </div>
                <div class="col-4">
                    <h1><strong>KIV - SFO</strong></h1>
                </div>
            </div>
        </div>
    </div>
    <!-- nav bar end -->
    <!-- .First flight details start -->
    <div class="container col-12 col-lg-9 bg-light mt-2 rounded-4 border">
        <div class="row justify-content-center text-center">
            <div class="col-3 col-lg-3">
                <p>DELHI</p>
                <p class="fw-bolder fs-1">KIV</p>
                <p>10:10 am</p>
                <p>June 20,2022</p>
            </div>
            <div class="col-5 col-lg-6">
                <p class="text-center mt-4">2 stops</p>
                <i class="fa-solid fa-plane"></i>
                <div class="border border-2 border-dark"></div>
                <p class="text-center mt-3">2200Km 4hr 30m</p>
            </div>
            <div class="col-3 col-lg-3">
                <p>Sanfrancisco</p>
                <p class="fw-bolder fs-1">SFO</p>
                <p>10:40pm</p>
                <p>June 22,2022</p>
            </div>
        </div>
        <div class="text-center">
            <a
                href="bookingconfirm.php"
                class="fs-2 fw-bold text-decoration-none"
            >
                Buy $1,250
            </a>
        </div>
    </div>
    <!-- .First flight details end -->
</div>
<!-- container-fluid -->
<?php require 'footer.php'; ?>
