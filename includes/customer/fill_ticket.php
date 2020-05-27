<?php

  $tno = $_POST['train_no'];
  $tname = $_POST['train_name'];
  $source = $_POST['source'];
  $destination = $_POST['destination'];
  $date = $_POST['date'];
  // $tname = $_POST[''];

 ?>
<form class="form" action="payment_gateway.php" method="post">
  <table id="trainDetail" style="width:100%">
    <tr>
      <td> Train Name: <input type="text" value="<?php echo $tname ; ?>" name="train_name" readonly > </td>
      <td> Class: Sleeper </td>
      <td> Date: <input type="text" value="<?php echo $date ; ?>" name="date" readonly> </td>
    </tr>
    <tr>
      <td> From: <input type="text" value="<?php echo $source ; ?>" name="source" readonly> </td>
      <td> To: <input type="text" value="<?php echo $destination ; ?>" name="destination" readonly> </td>
      <td> Train No.: <input type="text" value="<?php echo $tno ; ?>" name="train_no" readonly> </td>
    </tr>
    <tr>
      <td> Boarding Point: <input type="text" value="<?php echo $source ; ?>" name="source" readonly> </td>
      <td> Reservation Upto: <input type="text" value="<?php echo $destination ; ?>" name="destination" readonly> </td>
      <td> Quota: General </td>
    </tr>
  </table>
  <br>
  <h4> Passenger Details </h4>
  <!-- <form class="" action="index.html" method="post"> -->
    <table style="width:100%">
      <tr class="head">
        <th> SNo </th>
        <th> Name </th>
        <th> Age </th>
        <th> Gender </th>
      </tr>
      <tr>
        <td> 1. </td>
        <td> <input class = "name" type="text" name="name1" value=""> </td>
        <td> <input class="age" type="text" name="age1" value=""> </td>
        <td> <select class="" name="gender1">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
          </select>
        </td>
      </tr>

      <tr>
        <td> 2. </td>
        <td> <input class="name" type="text" name="" value=""> </td>
        <td> <input class="age" type="text" name="" value=""> </td>
        <td> <select class="" name="">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
          </select>
        </td>
      </tr>
      <tr>
        <td> 3. </td>
        <td> <input class="name" type="text" name="" value=""> </td>
        <td> <input class="age" type="text" name="" value=""> </td>
        <td> <select class="" name="">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
          </select>
        </td>
      </tr>
      <tr>
        <td> 4. </td>
        <td> <input class="name" type="text" name="" value=""> </td>
        <td> <input class="age" type="text" name="" value=""> </td>
        <td> <select class="" name="">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
          </select>
        </td>
      </tr>
    </table>

    <input type="checkbox" id="t&c" name="" value="">
    <label for="t&c">Agree to our <a href="./Tnc" target="_blank">terms and conditions</a></label>
    <br>
    <button class="btn-style btn btn-lg btn-primary" type="submit" name="confirm">Proceed to Payment.</button>
    <a href="./homepage.php"> <button class="btn-style btn btn-lg btn-danger" type="button" name="button">Cancel</button></a>
  <!-- </form> -->
  <!-- <label for="details">passenger's details goes here!</label>
  <input type="text" name="details" placeholder="details (leave empty)"> -->
  <br><br>

  <br>
  <!-- <div style="border-style:solid">
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
  </div> -->
<br>
  <!-- <button type="submit" name="confirm">Confirm </button> -->
</form>







<!-- <table style="width:100%">
  <tr>
    <td> Train Name: <input type="text" value="<?php echo $tname ; ?>" name="train_name" readonly > </td>
    <td> Class: Sleeper </td>
    <td> Date: <input type="text" value="<?php echo $date ; ?>" name="date" readonly> </td>
  </tr>
  <tr>
    <td> From: <input type="text" value="<?php echo $source ; ?>" name="source" readonly> </td>
    <td> To: <input type="text" value="<?php echo $destination ; ?>" name="destination" readonly> </td>
    <td> Train No.: <input type="text" value="<?php echo $tno ; ?>" name="train_no" readonly> </td>
  </tr>
  <tr>
    <td> Boarding Point: <input type="text" value="<?php echo $source ; ?>" name="source" readonly> </td>
    <td> Reservation Upto: <input type="text" value="<?php echo $destination ; ?>" name="destination" readonly> </td>
    <td> Quota: General </td>
  </tr>
</table> -->
