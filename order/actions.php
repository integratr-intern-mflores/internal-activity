<?php 
include_once ("../connect.php");

if (isset($_POST['submit_person'])){
    $person_id = $_POST['person_id'];
    $product_id = $_POST['product_id'];
    $quantity = $_POST ['quantity'];
    $amount = $_POST ['amount'];
    

    $sql = "INSERT INTO orders(person_id,product_id,quantity, amount) VALUES
     ( '$person_id', '$product_id',  '$quantity','$amount')";

     $query = $conn-> query($sql) or die ($conn->error);

     


$_SESSION['success'] = "Person successfully added";
header("Location: ../product.php");
}