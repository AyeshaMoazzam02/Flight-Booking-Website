<?php

$connection=mysqli_connect('localhost', 'root', '','flight_booking');

if(isset($_POST['send'])){

$name = $_POST['name'];

$email = $_POST['email'];

$phone = $_POST['phone'];

$address = $_POST['address'];

$class = $_POST['class'];

$passengers= $_POST['passengers'];

$to = $_POST['to'];

$from = $_POST['from'];

$airline = $_POST['airline'];

$date = $_POST['date'];

$request = "insert into book_form(name, email, phone, address, class, passengers, destination, currentLocation, PreferredAirline, date)  values ('$name', '$email', '$phone', '$address', '$class', '$passengers', '$to', '$from', '$airline', '$date') ";

mysqli_query($connection, $request);

header('location:book.html');

}
else {
    echo 'something went wrong again';
}

?>