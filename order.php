<html>
<?php include ('header.php')?>
<div class="container">
<a class = "btn btn-primary"href="http://localhost/InternActivity/order/add.php">Add Order</a>

<?php
    $query = $conn->query("SELECT * FROM orders");

?>
<table class="table">
<thead>
<tr>
  <th scope="col">ID</th>
  <th scope="col">Person ID</th>
  <th scope="col">Product ID</th>
  <th scope="col">Quantity</th>
  <th scope="col">Amount</th>
</tr>
</thead>
<?php
while ($order = $query-> fetch_assoc()){
    echo "<tr>
    
    <td>" . $order ['id'] . "</td>
    <td>". $order ['person_id']."</td>
    <td>". $order ['product_id']."</td>
    <td>". $order ['quantity']."</td>
    <td>". $order ['amount']."</td>

    </tr>";

}
$conn->close();
?>

</table>
</div>
<?php include ('footer.php')?>
</html>
 
   
