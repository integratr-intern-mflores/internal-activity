<html>
<?php include ('header.php')?>
<div class="container">
<a class = "btn btn-primary"href="http://localhost/InternActivity/product/add.php">Add Product</a>

<?php
    $query = $conn->query("SELECT * FROM products");

?>
<table class="table">
<thead>
<tr>
  <th scope="col">ID</th>
  <th scope="col">Name</th>
  <th scope="col">Quantity</th>
  <th scope="col">Price</th>
</tr>
</thead>
<?php
while ($product = $query-> fetch_assoc()){
    echo "<tr>
    
    <td>" .$product ['id'] . "</td>
    <td>". $product ['name']."</td>
    <td>". $product ['quantity']."</td>
    <td>". $product ['price']."</td>
         </tr>";

}
$conn->close();
?>

</table>
</div>
<?php include ('footer.php')?>
</html>
 
   
