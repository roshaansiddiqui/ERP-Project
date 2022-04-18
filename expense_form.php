<?php
include 'conn.php'; ?>

<?php //Post Params 
$Form_id = $_POST['Form_id'];  
$emp_id = $_POST['emp_id'];  
$submission_date = $_POST['submission_date'];  
$Travel_date = $_POST['Travel_date'];  
$Return_date = $_POST['Return_date'];  
$Hotel_exp = $_POST['Hotel_exp'];  
$Transp_exp = $_POST['Transp_exp'];  
$Airfare = $_POST['Airfare'];  
$Meal_exp = $_POST['Meal_exp'];  
$miscellenous_exp = $_POST['miscellenous_exp'];  
$Total_expense = $_POST['Total_expense'];  

?>

<?php //Query 

 //INSERT 
 $query = " INSERT INTO expense_form ( Form_id, emp_id, submission_date, Travel_date, Return_date, Hotel_exp, Transp_exp, Airfare, Meal_exp, miscellenous_exp, Total_expense )  VALUES ( '$Form_id', '$emp_id', '$submission_date', '$Travel_date', '$Return_date', '$Hotel_exp', '$Transp_exp', '$Airfare', '$Meal_exp', '$miscellenous_exp', '$Total_expense' ) "; 
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
 $query = " SELECT Form_id, emp_id, submission_date, Travel_date, Return_date, Hotel_exp, Transp_exp, Airfare, Meal_exp, miscellenous_exp, Total_expense FROM expense_form "; 
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
 $query = " UPDATE expense_form SET  Form_id = '$Form_id',  emp_id = '$emp_id',  submission_date = '$submission_date',  Travel_date = '$Travel_date',  Return_date = '$Return_date',  Hotel_exp = '$Hotel_exp',  Transp_exp = '$Transp_exp',  Airfare = '$Airfare',  Meal_exp = '$Meal_exp',  miscellenous_exp = '$miscellenous_exp',  Total_expense = '$Total_expense' WHERE col = val "; 
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
</style>


<form id="form1" name="form1" method="post" action="expenseSubmission.php">
<label for="Form_id">Form Id</label><input type="text" name="Form_id" id="Form_id" />
<br class="clear" /> 
<label for="emp_id">Emp Id</label><input type="text" name="emp_id" id="emp_id" />
<br class="clear" /> 
<label for="submission_date">Submission Date</label><input type="text" name="submission_date" id="submission_date" />
<br class="clear" /> 
<label for="Travel_date">Travel Date</label><input type="text" name="Travel_date" id="Travel_date" />
<br class="clear" /> 
<label for="Return_date">Return Date</label><input type="text" name="Return_date" id="Return_date" />
<br class="clear" /> 
<label for="Hotel_exp">Hotel Exp</label><input type="text" name="Hotel_exp" id="Hotel_exp" />
<br class="clear" /> 
<label for="Transp_exp">Transp Exp</label><input type="text" name="Transp_exp" id="Transp_exp" />
<br class="clear" /> 
<label for="Airfare">Airfare</label><input type="text" name="Airfare" id="Airfare" />
<br class="clear" /> 
<label for="Meal_exp">Meal Exp</label><input type="text" name="Meal_exp" id="Meal_exp" />
<br class="clear" /> 
<label for="miscellenous_exp">Miscellenous Exp</label><input type="text" name="miscellenous_exp" id="miscellenous_exp" />
<br class="clear" /> 
<label for="Total_expense">Total Expense</label><input type="text" name="Total_expense" id="Total_expense" />
<br class="clear" /> 
</form>