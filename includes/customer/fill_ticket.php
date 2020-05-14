<?php

  $tno = $_POST['train_no'];
  $tname = $_POST['train_name'];
  $source = $_POST['source'];
  $destination = $_POST['destination'];
  $date = $_POST['date'];
  // $tname = $_POST[''];

 ?>
<form class="form" action="payment_gateway.php" method="post">
  <input type="text" value="<?php echo $tno ; ?>" id="train_no" disabled>
  <br>
  <input type="text" value="<?php echo $tname ; ?>" id="train_name" disabled>
  <br>
  <input type="text" value="<?php echo $source ; ?>" id="source" disabled>
  <br>
  <input type="text" value="<?php echo $destination ; ?>" id="destination" disabled>
  <br>
  <input type="text" value="<?php echo $date ; ?>" id="date" disabled>
  <br>
  <label for="details">passenger's details goes here!</label>
  <input type="text" name="details" placeholder="details (leave empty)">
  <br><br>

  <br>
  <div style="border-style:solid">
    later  (starts)!
    <br>
    <br>
    <strong>1. fetch the cost of ticket from previous card !  NOTE: haven't thought about Algo for ticket cost as of now !
      <br>
      2. multiply it with number of passengers in this Ticket (automatically)
      <br>
      3. pass total amount to payment gateway (automatically)
      <br>
      </strong>
    <br>
    <strong>for testing point number 3........  </strong> enter dummy total amount : <input type="text" name="totalPrice" placeholder="please enter any number" style="width:30%" required>
    <br>
    later  (ends)!
  </div>
<br>
  <button type="submit" name="confirm">Confirm </button>
</form>
