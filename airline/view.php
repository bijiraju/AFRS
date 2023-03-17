<?php require 'connection.php'; ?>
<?php require 'header.php'; ?>

<?php session_start(); 
?>
<!-- main div -->
<div
    class="container-fluid m-0 p1 min-vh-100 row justify-content-center align-items-center"
>
    <div class="col-12 container rounded-3 col-sm-10 p2 px-5 mx-5 text-white">
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-light mb-5">
            <div class="container-fluid p-0">
                <h4>Purple Fly.com</h4>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div
                    class="collapse navbar-collapse"
                    id="navbarSupportedContent"
                >
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a
                                class="nav-link active text-white"
                                aria-current="page"
                                href="#"
                                >Home</a
                            >
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-white" href="#"
                                >About</a
                            >
                        </li>
                        <li class="nav-item">
                            <a
                                class="nav-link active text-white"
                                href="logout.php"
                                >Login/Signup</a
                            >
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="row">
            <div class="col-12 col-lg-6 my-4">
                <div class="row container my-4"></div>
                <form action="" class="" method="POST">
                    <div class="my-2"></div>
                    <div class="mt-3"></div>
                    <div class="col-6">
                        <form action="" name="airports" method="post">
                            <button
                                type="submit"
                                name="airports"
                                class="btn col-12 my-2 btn-success"
                            >
                                Airports
                            </button>
                        </form>
                    </div>
                    <div class="col-6">
                        <form action="" name="flight" method="post">
                            <button
                                type="submit"
                                name="flight"
                                class="btn col-12 my-2 btn-success"
                            >
                                Flights
                            </button>
                        </form>
                    </div>
                    <div class="col-6">
                        <form action="" name="Airline" method="post">
                            <button
                                type="submit"
                                name="Airline"
                                class="btn col-12 my-2 btn-success"
                            >
                                Airline
                            </button>
                        </form>
                    </div>
                </form>
            </div>
            <div class="col-12 col-lg-6 my-4">
                <table class="table table-primary table-striped text-center">
                    <thead>
                        <tr>
                            <th>Airport id</th>

                            <th>Airport Name</th>

                            <th>State id</th>

                            <th>Abbr</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php 
                    
                    if (isset($_POST['airports'])) 
                 {  $air = $_POST['airports']; 
                    $sql='SELECT * FROM airport';
                    $statement=$connection->prepare($sql);
                            $statement->execute();
                            $airport=$statement->fetch(PDO::FETCH_OBJ);} ?>
                        </tr>
                        <tr>
                            <td><?=$flight->ID;?></td>
                            <td><?= $airport->AIRPORT_ID; ?></td>
                            <td><?= $airport->AIRPORT_NAME; ?></td>
                            <td><?= $airport->STATE_ID; ?></td>
                            <td><?= $airport->ABBR; ?></td>
                        </tr>
                    </tbody>
                </table>
 <?php

if (isset($_POST['flight'])) 
                 {  
                $flight = $_POST['flight'];
                    
                $sql='SELECT * FROM flight'; 
                $statement=$connection->prepare($sql);
                $statement->execute();
                $flight=$statement->fetch(PDO::FETCH_OBJ);} //
        
?>
                <td><?=$flight->ID;?></td>
                <td><?= $flight->FLIGHT_NAME; ?></td>
                <td><?= $flight->AIRLINE_ID; ?></td>
                <td><?= $airport->TOTAL_SEAT; ?></td>
            </div>
        </div>
    </div>
</div>

<?php require "footer.php"; ?>
