<?php

//$insert= false;

//this if isset indicates if the name variable is filled first then only submit the form to the table or do the task.
if(isset($_POST['name']))

//if(isset($_POST['submit']))
{
// For creating connection with the local database always define the below variables as given.
$server ="localhost";
$username = "root";
$password ="";

//create connection using procedural way (not object-oriented)
$con = mysqli_connect($server, $username, $password);

//check connection
if(!$con){
    die("Connection to this database failed due to". mysqli_connect_error());
}

//Since we have already defined the struction of the table in db there only
//now we define the below variables as shown use $_POST because we are entering the dataitems through form using 
//post method.
//Trick for writing in common in below variales: check codewithharry video for php at this part. Very impt way.
$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$other=$_POST['other'];

//we copy past the query from defined table form localhost trip table
//here we define a variable sql and insert values as shown below.
//for selecting the trip table use this command as insert into trip.trip
$sql =  "INSERT INTO trip.trip (name, age, gender, email, phone, other, dt) 
VALUES ('$name', '$age', '$gender', '$email', '$phone',
'$other', current_timestamp())";
//echo $sql;

if($con-> query($sql)==true){
    //this header function is used for redirecting the page to front.php so that after submitting we get 
    //the form back on screen. Use parameter inside of header exactly as shown below.
    header("Location: front.php");
    //$insert=true;
}
else
    {
        echo "Error: .$sql .<br> . $con->error";
    }
   
//cloing the connection
    $con->close(); 
}

?>