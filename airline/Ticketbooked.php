<?php require 'connection.php'; ?>
<?php require 'header.php'; ?>

<div class="container-fluid p1 min-vh-100 justify-content-center m-0 p-0">
    <div class="row m-0 py-5">
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
                    <h1><strong>Ticket Booked</strong></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid row justify-content-center">
        <div
            class="container col-11 bg-light col-md-7 my-5 p-0 bg-opacity-75 row justify-content-center rounded-4"
        >
            <div class="row col-10 mt-5 text-center">
                <div class="col-4">
                    <h1 class="mt-5">CEK</h1>
                    <h5 class="color">kochi</h5>
                </div>
                <div class="col-4 fs-1 text-center">
                    <i class="fa-solid fa-plane mt-5"></i>
                </div>
                <div class="col-4 text-center">
                    <h1 class="mt-5">MBI</h1>
                    <h5 class="color">Mumbai</h5>
                </div>
            </div>
            <div class="row col-10 my-4 text-center">
                <div class="col-md-4">
                    <div class="my-1">
                        <h5 class="">Passenger</h5>
                        <h6 class="text-secondary">Anna</h6>
                    </div>
                    <div class="my-1">
                        <h5 class="">Seat</h5>
                        <h6 class="text-secondary">25</h6>
                    </div>
                    <div class="my-1">
                        <h5 class="">Boarding</h5>
                        <h6 class="text-secondary">6:00pm</h6>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="my-1">
                        <h5 class="text-center">Flight No</h5>
                        <h6 class="text-secondary">A-10909</h6>
                    </div>
                    <div class="my-1">
                        <h5 class="">Economy</h5>
                        <h6 class="text-secondary">Bussiness</h6>
                    </div>
                    <div class="my-1">
                        <h5 class="">Departure Time</h5>
                        <h6 class="text-secondary">8:00pm</h6>
                    </div>
                </div>
                <div class="col-md-4 my-1">
                    <div>
                        <h5 class="">Date</h5>
                        <h6 class="text-secondary">22-04-2023</h6>
                    </div>
                    <div class="my-1">
                        <h5 class="">Economy</h5>
                        <h6 class="text-secondary">Bussiness</h6>
                    </div>
                    <div>
                        <h5 class="my-1">Arrival Time</h5>
                        <h6 class="text-secondary">12:00pm</h6>
                    </div>
                </div>
            </div>
            <button class="btn btn-success col-4 my-3">Print PDF</button>
        </div>
    </div>
    <!-- container div closed -->
    </div>
<?php require 'footer.php'; ?>

