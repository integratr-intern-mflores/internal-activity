<html>
<?php include('../header.php') ?>
<div class="container">
    <form class="form" method="POST" action="actions.php">

    <div class="mb-3">
            <label for="person_id" class="form-label">Person ID</label>

             <input type="text" class="form-control" id="person_id" name="person_id">

             </div>

             <div class="mb-3">
            <label for="product_id" class="form-label">Product ID</label>

             <input type="text" class="form-control" id="product_id" name="product_id">

             </div>

        <div class="mb-3">
            <label for="quantity" class="form-label">Quantity</label>

             <input type="text" class="form-control" id="quantity" name="quantity">

             </div>

         <div class="mb-3">

             <label for="amount" class="form-label">Amount</label>

             <input type="text" class="form-control" id="amount" name="amount">

             </div>
        

         <input type="submit" name="submit_person" value="Store Order" class="btn btn-primary">

         </form>
</div>
<?php include('../footer.php') ?>

</html>