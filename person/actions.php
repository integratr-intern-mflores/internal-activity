<?php 
include_once ("../connect.php");
$name = $_POST ['name'];
$gender = $_POST ['gender'];
$place_of_birth = $_POST ['place_of_birth'];
$birthday = $_POST ['birthday'];

if (isset($_POST['submit_person'])){
   

    $sql = "INSERT INTO persons(name, place_of_birth, birthday, gender) VALUES
     ('$name','$place_of_birth', '$birthday', '$gender' )";

     $query = $conn-> query($sql) or die ($conn->error);

$_SESSION['success'] = "Person successfully added";
header("Location: ../person.php");
}
elseif(isset($_POST['update_persons'])){
    $id = $_POST['id'];
    $sql ="UPDATE persons set name = '$name',
     place_of_birth = '$place_of_birth',
     birthday = '$birthday',gender = '$gender' where id=$id";

     $query = $conn->query($sql) or die ($conn->error);
     $_SESSION['success'] =  "Person Successfully updated";
     
}