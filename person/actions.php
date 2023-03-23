<?php 
include_once ("../connect.php");

if (isset($_POST['submit_person'])){
    $name = $_POST ['name'];
    $gender = $_POST ['gender'];
    $place_of_birth = $_POST ['place_of_birth'];
    $birthday = $_POST ['birthday'];

    $sql = "INSERT INTO persons(name, place_of_birth, birthday, gender) VALUES
     ('$name','$place_of_birth', '$birthday', '$gender' )";

     mysqli_query($conn,$sql);
     
$_SESSION['success'] = "Person successfully added";
header("Location: ../person.php");
}