<?php
 include_once 'conn.php';
 session_start();
 session_unset();
 $_SESSION['PId']="";
 $_SESSION['salesPId']="";
 ?>
  
<html>
<head>
	<title>SALES COMMISSION</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"></head>

<header><nav class="navbar navbar-expand-sm navbar-toggleable-sm navbar-light bg-info border-bottom box-shadow mb-3">
        <div class="container">
        <a class="navbar-brand">Employee Expense Approval System</a>
        
        </div>
    </nav></header>

<?php 	    

	$sql = "UPDATE `login` SET `session` = '0' WHERE 1=1;";
	mysqli_query($conn, $sql);
	
?>    

    <div class="container">
        <form action="login.php" method="POST">
            
        	User Name:
        	<input type="text" name="userName" class = "form-control input-group-lg" placeholder="userName">
        	<br>
			
			Password:
        	<input type="password" name="password" class = "form-control input-group-lg" placeholder="password">
        	<br>


        	<button type="submit" name="submit" class="btn btn-info">Login</button>
        	
        	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        
        </form>
    </div>

</body>
</html>