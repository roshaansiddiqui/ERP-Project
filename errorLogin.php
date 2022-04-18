<?php
 include_once 'conn.php'
 ?>
<html>
<head>
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"></head>

<header><nav class="navbar navbar-expand-sm navbar-toggleable-sm navbar-light bg-info border-bottom box-shadow mb-3">
        <div class="container">
        <a class="navbar-brand">Employee Expense Approval System</a>
        
        </div>
    </nav></header>

	<div class="alert alert-danger">
		<strong>UNAUTHORIZED ACCESS!</strong> Please Login with correct credentials to view the following page.
		<a href="index.php" class="btn btn-info" role="button">LOG IN</a>  
	</div>

</body>
</html>