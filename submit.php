<?php
if(isset($_POST['submit'])){

    $servername ="localhost";
    $username = "root";
    $password = "";
    $dbname = "mugisa"

    $conn = new mysqli($servername,$username,$password,$dbname);

    $name= $_POST['name'];
    $contact= $_POST['contact'];
    $destination= $_POST['destination'];
    $departure_time= $_POST['departure_time'];
    $class= $_POST['class'];
    $seatno= $_POST['seatno'];
    $payment= $_POST['payment'];
    $train_name= $_POST['train_name'];
    $route= $_POST['route'];
    $time= $_POST['time'];

    $sql= "insert into bookings(name,contact,destination,departure_time,class,seatno,payment,train_name,route,time) values 
    ('$name','$contact','$destination','$departure_time','$class','$seatno','$payment','$train_name'.'$route','$time')";

    $query= mysqli_query($conn, $sql);

    if($query){

        echo "Booked successfully";
    }else{
        echo "There was an error!";
    }
}

?>
