<?php
include 'conn.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Report</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2>Expenses</h2>
      <table class="table table-bordered print">
        <thead>
          <tr>
            <th>entry_id</th>
            <th>emp_id</th>
            <th>Date</th>
			<th>Form_id</th>
			<th>Total_amount</th>
			<th>Status</th>
			<th>Details</th>
			
          </tr>
        </thead>
        <tbody>
          <?php
          $sn=1;
          $user_qry="SELECT * from expense_entry";
          $user_res=mysqli_query($conn,$user_qry);
          while($user_data=mysqli_fetch_assoc($user_res))
          {
          ?>
          <tr>
            <td><?php echo $sn; ?></td>
            <td><?php echo $user_data['entry_id']; ?></td>
            <td><?php echo $user_data['emp_id']; ?></td>
			<td><?php echo $user_data['Date']; ?></td>
			<td><?php echo $user_data['Form_id']; ?></td>
			<td><?php echo $user_data['Total_amount']; ?></td>
			<td><?php echo $user_data['Status']; ?></td>
			<td><?php echo $user_data['Details']; ?></td>
									
          </tr>
          <?php
          $sn++;
          }
          ?>
        </tbody>
      </table>

      <div class="text-center">
        <a href="user_data_print.php" class="btn btn-primary">Print</a>
      </div>
    </div>
  </div>
</div>
</body>
</html>