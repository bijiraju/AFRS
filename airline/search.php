<?php
    require 'connection.php';
    require 'header.php';
    ?>
    <?php
     session_start();
     
    if(isset($_POST['submit'])){
        $DEPARTURE= $_POST['DEPARTURE'];
        $ARRIVAL= $_POST['ARRIVAL'];
        $DATE= $_POST['DATE'];
        $sql='SELECT * from `route` WHERE DEPARTURE_AIRPORT_ID=:DEPARTURE AND ARRIVAL_AIRPORT_ID=:ARRIVAL AND DEPARTURE_DATE=:DATE';
        $statement=$connection->prepare($sql);
        $statement->execute([':DEPARTURE'=> $DEPARTURE,':ARRIVAL'=> $ARRIVAL,':DATE'=>$DATE]);
        $flights=$statement->fetchAll(PDO::FETCH_OBJ);
        
    }
    
    ?>

<div class="container-fluid home text-center">

<div class="w-100 mt-5 p-5 overflow-scroll overflow-x-hidden" style="height:300px">
    <table class="table table-primary table-striped text-center">
        <thead>
            <tr>
            <th>
                 Sl No
                </th>
                <th>
                Name
                </th>
                <th>
                    Departure
                </th>
                <th>
                    Arrival
                </th>
                <th>
                    Date
                </th>
                
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i=1;
             foreach($flights as $flight): ?>
                <tr>
                    <td><?= $i?></td>
                    <?php 
                        $id=$flight->FLIGHT_ID;
                        
                        $sql='SELECT * FROM flight where ID=:id';
                        $statement=$connection->prepare($sql);
                        $statement->execute([':id'=>$id]);
                        $route=$statement->fetch(PDO::FETCH_OBJ);

                        $depart=$flight->DEPARTURE_AIRPORT_ID;
                        $sql='SELECT * FROM airport where ID=:id';
                        $statement=$connection->prepare($sql);
                        $statement->execute([':id'=>$depart]);
                        $depart_name=$statement->fetch(PDO::FETCH_OBJ);

                        $arrival=$flight->ARRIVAL_AIRPORT_ID;
                        $sql='SELECT * FROM airport where ID=:id';
                        $statement=$connection->prepare($sql);
                        $statement->execute([':id'=>$arrival]);
                        $arrival_name=$statement->fetch(PDO::FETCH_OBJ);?>

                        <td><?=$route->FLIGHT_NAME;?></td>
                        <td><?= $depart_name->AIRPORT_NAME; ?></td>
                        <td><?= $arrival_name->AIRPORT_NAME; ?></td>
                        <td><?= $flight->DEPARTURE_DATE; ?></td>
                        <td ><a href="booking.php?id=<?php echo $flight->id; ?>" class="btn btn-success" target="_blank">Book</a></td>
                    
                        
                </td>
                </tr>
            <tr>
            
            <?php
            $i=$i+1;
             endforeach ?>
        </tbody>
    </table>
</div> 






    <?php  require 'footer.php';?>