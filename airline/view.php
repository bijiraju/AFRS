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
            <div class="col-12 col-lg-4 my-4">
                <div class="row container my-4"></div>

                <div class="my-2"></div>
                <div class="mt-3"></div>
                <div class="col-6">
                    <button
                        id="button1"
                        type="submit"
                        name="airports"
                        class="btn col-12 my-2 btn-success"
                    >
                        Airports
                    </button>
                </div>
                <div class="col-6">
                    <button
                        id="button2"
                        type="submit"
                        name="flight"
                        class="btn col-12 my-2 btn-success"
                    >
                        Flights
                    </button>
                </div>
                <div class="col-6">
                    <button
                        id="button3"
                        type="submit"
                        name="airline"
                        class="btn col-12 my-2 btn-success"
                    >
                        Airline
                    </button>
                </div>
            </div>

            <div class="col-12 col-lg-8 my-4">
                <?php 
                    
          
                    $sql='SELECT * FROM airport';
                    $statement=$connection->prepare($sql);
                $statement->execute();
                $airport=$statement->fetchAll(PDO::FETCH_OBJ);?>
                <div
                    id="p"
                    class="w-100 rounded overflow-scroll overflow-x-hidden"
                    style="height: 200px"
                >
                    <table
                        class="table table-hover table-success table-responsive table-bordered text-center"
                    >
                        <thead>
                            <tr>
                                <th>Airport id</th>

                                <th>Airport Name</th>

                                <th>State id</th>

                                <th>Abbr</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr></tr>
                            <tr>
                                <?php
                        
                           
                            foreach($airport as $air): ?>
                            </tr>

                            <tr>
                                <td><?= $air->ID; ?></td>
                                <td><?= $air->AIRPORT_NAME; ?></td>
                                <td><?= $air->STATE_ID; ?></td>
                                <td><?=$air->ABBR; ?></td>
                            </tr>
                            <?php
                       
                         endforeach ?>
                        </tbody>
                    </table>
                </div>

                <?php 
     
     
          $sql='SELECT * FROM flight'; 
          $statement=$connection->prepare($sql); $statement->execute();
                $flight=$statement->fetchAll(PDO::FETCH_OBJ);?>
                <div
                    id="myDiv"
                    class="w-100 rounded overflow-scroll overflow-x-hidden"
                    style="height: 200px"
                >
                    <table
                        class="table table-hover table-success table-responsive table-bordered text-center"
                    >
                        <thead>
                            <tr>
                                <th>Flight id</th>

                                <th>Flight Name</th>
                                <th>Airline Id</th>

                                <th>Total Seat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr></tr>
                            <tr>
                                <?php
         
            
             foreach($flight as $fly): ?>
                            </tr>

                            <tr>
                                <td><?= $fly->ID; ?></td>
                                <td><?= $fly->FLIGHT_NAME; ?></td>
                                <td><?= $fly->AIRLINE_ID; ?></td>
                                <td><?= $fly->TOTAL_SEAT; ?></td>
                            </tr>
                            <?php
        
          endforeach ?>
                        </tbody>
                    </table>
                </div>

                <?php 
     
                
                     $sql='SELECT * FROM airline'; 
                     $statement=$connection->prepare($sql);
                $statement->execute();
                $airlines=$statement->fetchAll(PDO::FETCH_OBJ);?>
                <div
                    class="w-100 rounded overflow-scroll overflow-x-hidden"
                    style="height: 200px"
                    id="my"
                >
                    <table
                        class="table table-hover table-success table-responsive table-bordered text-center"
                    >
                        <thead>
                            <tr>
                                <th>Airline id</th>

                                <th>Airline Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr></tr>
                            <tr>
                                <?php
                        foreach($airlines as $airline): ?>
                            </tr>

                            <tr>
                                <td><?= $airline->ID; ?></td>
                                <td><?= $airline->AIRLINE_NAME; ?></td>
                            </tr>
                            <?php
                   
                     endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require "footer.php"; ?>
