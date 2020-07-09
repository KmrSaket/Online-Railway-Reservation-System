<?php

  $tno = $_POST['train_no'];
  $tname = $_POST['train_name'];
  $source = $_POST['source'];
  $destination = $_POST['destination'];
  $date = $_POST['date'];

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
    <table style="width:100%">
      <tr class="head">
        <th> SNo </th>
        <th> Name </th>
        <th> Age </th>
        <th> Gender </th>
      </tr>
      <tr>
        <td> 1. </td>
        <td> <input class = "name" type="text" name="name1" value="" required> </td>
        <td> <input class="age" type="text" name="age1" value="" required> </td>
        <td> <select class="" name="gender1" >
            <option value="Male">Male</option>
            <option value="Female">Female</option>
          </select>
        </td>
      </tr>

      <tr>
        <td> 2. </td>
        <td> <input class="name" type="text" name="name2" > </td>
        <td> <input class="age" type="text" name="age2" > </td>
        <td> <select class="" name="gender2" >
            <option value="Male">Male</option>
            <option value="Female">Female</option>
          </select>
        </td>
      </tr>

    </table>

    <input type="checkbox" id="t&c" name="" value="" required>
    <label for="t&c">Agree to our <a href="./Tnc" target="_blank">terms and conditions</a></label>
    <br>
    <button class="btn-style btn btn-lg btn-primary" type="submit" name="confirm">Proceed to Payment.</button>
    <a href="./homepage.php"> <button class="btn-style btn btn-lg btn-danger" type="button" name="button">Cancel</button></a>
  <br><br>

  <br>
<br>
</form>
