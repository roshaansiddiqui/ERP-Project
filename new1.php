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
		              <th>SN</th>

            <th>job_title</th>
            <th>min_salary</th>
            <th>max_salary</th>
			
          </tr>
        </thead>
        <tbody>
          <?php
          $sn=1;
          $user_qry="SELECT * from jobs";
          $user_res=mysqli_query($conn,$user_qry);
          while($user_data=mysqli_fetch_assoc($user_res))
          {
          ?>
          <tr>
            <td><?php echo $sn; ?></td>
            <td><?php echo $user_data['Job_title']; ?></td>
            <td><?php echo $user_data['min_salary']; ?></td>
			<td><?php echo $user_data['max_salary']; ?></td>
		
									
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