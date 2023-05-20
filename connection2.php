<?php
$mysqli=mysqli_connect('localhost','root','','rishitha');
if($mysqli===false){
    die("ERROR;could not connect."
    . mysqli_connect_error());
}
$frist_name=$_POST['fristname'];
$last_name=$_POST['lastname'];
$gender=$_POST['gender'];
$Country=$_POST['country'];
$trip_from=date('y-m-d',strtotime($_POST['tripfrom']));
$trip_to=date('y-m-d',strtotime($_POST['tripto']));

$sql ="INSERT INTO user VALUES('$fristname',$lastname','$gender','$country','$trip_from','$trip_to')";
if(mysqli-query($mysqli,$mysql)){
    echo "data stored in a database successfully."
}
$mysqli->close();
?>