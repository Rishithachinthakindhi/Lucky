<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
          
            background-image:url('https://images.unsplash.com/photo-1519750783826-e2420f4d687f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8YnJpZ2h0JTIwYmFja2dyb3VuZHxlbnwwfHwwfHx8MA%3D%3D&w=1000&q=80');
            background-size:cover;
        }
        img{
            border-radius:50%;
        }
    </style>
</head>
<body>
    
<image src ="https://scontent.fhyd2-1.fna.fbcdn.net/v/t39.30808-6/301587386_474759001325897_3986294592231626936_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=cQuofPkm_RYAX9ruyvL&_nc_ht=scontent.fhyd2-1.fna&oh=00_AfCn1RXo4NbupCRHIavgbh3vykQazdR3LO8vdRhvPLIY4g&oe=646C8F30"height="150"width="150">
    <center>
    <h2>FORM</h2>
    <form method="POST" action="connection2.php">
       <b>Fristname:<b>
        <input type="text"name="fristname"><br><br>
        <b>Lastname:<b>
        <input type="text"name="lastname"><br><br>
        <b>Gender:<b>
        <input type="radio"name="gender"value="female">female
        <input type="radio"name="gender"value="male">male<br><br>
        <b>Country:<b>
        <select name="country">
            <option value="india">India</option>
            <option value="india">Canada</option>
            <option value="india">Japan</option>
            <option value="india">Germany</option>
            <option value="india">Brazil</option>
            <option value="india">Mexico</option>
            <option value="india">Australia</option>
            <select><br><br>
        <b>Date:<b>
        <input type="date"id="date"><br><br>
        <b>From:<b>
        <input type="text"name="from">
        <b>To:<b>
        <input type="text"name="To"><br><br>
        <input type="Submit"value="Submit">
</form>
    </center>
</body>
</html>