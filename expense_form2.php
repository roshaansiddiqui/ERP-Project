<?php
include 'conn.php'; ?>

<?php //Post Params 
$submission_date = $_POST['submission_date'];  
$Travel_date = $_POST['Travel_date'];  
$Return_date = $_POST['Return_date'];  
$expenses = $_POST['expenses'];  
$Amount = $_POST['Amount'];  

?>

<?php //Query 

 //INSERT 
 $query = " INSERT INTO expense_form ( submission_date, Travel_date, Return_date, expenses, Amount )  VALUES ( '$submission_date', '$Travel_date', '$Return_date', '$expenses', '$Amount' ) "; 
 $result = mysql_query($query); 

 if( $result )
 {
 	echo 'Success';
 }
 else
 {
 	echo 'Query Failed';
 }

 //SELECT 
 $query = " SELECT submission_date, Travel_date, Return_date, expenses, Amount FROM expense_form "; 
 $result = mysql_query($query); 

 if( $result )
 {
 	echo 'Success';
 }
 else
 {
 	echo 'Query Failed';
 }

 //UPDATE 
 $query = " UPDATE expense_form SET  submission_date = '$submission_date',  Travel_date = '$Travel_date',  Return_date = '$Return_date',  expenses = '$expenses',  Amount = '$Amount' WHERE col = val "; 
 $result = mysql_query($query); 

 if( $result )
 {
 	echo 'Success';
 }
 else
 {
 	echo 'Query Failed';
 }

 //DELETE 
 $query = " DELETE FROM expense_form WHERE col = val "; 
 $result = mysql_query($query); 

 if( $result )
 {
 	echo 'Success';
 }
 else
 {
 	echo 'Query Failed';
 }

?>

<!DOCTYPE html>
<style type="text/css">

form label {
	float: left;
	width: 150px;
	margin-bottom: 5px;
	margin-top: 5px;
}
.clear {
	display: block;
	clear: both;
	width: 100%;
}

<html>

</style>
<h1 style="text-align:center;"> <strong> EMPLOYEE EXPENSE APPROVAL SYSTEM </strong> </h1>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

<div class="container d-flex justify-content-center align-items-center"
      style="min-height: 100vh">
      	<form class="border shadow p-3 rounded"
		
		<body style="background-color: rgb(230, 255, 255);">

<form id="form1" name="form1" method="post" action="expenseSubmission.php">
<label for="submission_date">Submission Date</label><input type="date" name="submission_date" id="submission_date" />
<br class="clear" /> 
<label for="Travel_date">Travel Date</label><input type="date" name="Travel_date" id="Travel_date" />
<br class="clear" /> 
<label for="Return_date">Return Date</label><input type="date" name="Return_date" id="Return_date" />
<br class="clear" /> 
<label for="expenses">Expenses</label>
<input type="radio" name="expenses" value="Airfare" id="expenses_0" />Airfare
<input type="radio" name="expenses" value="Hotel" id="expenses_1" />Hotel
<input type="radio" name="expenses" value="Meal" id="expenses_2" />Meal
<input type="radio" name="expenses" value="Transport" id="expenses_3" />Transport
<input type="radio" name="expenses" value="miscellaneous" id="expenses_4" /> Miscellaneous
<br class="clear" /> 
<label for="Total_expense"> Amount <Strong> Rs </Strong> </label><input type="text" name="Total_expense" id="Total_expense" />
<br class="clear" /> 

 <button style="text-align:center; type="submit" 
		          class="btn btn-primary"> <strong> Submit </strong> </button>
</form>

</div>
</body>
</html>


