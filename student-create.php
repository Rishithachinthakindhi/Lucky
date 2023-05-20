<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>User Form</title>
    
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>User Form 
                            <a href="#" class="btn btn-danger float-end">Go to trip</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">

                            <div class="mb-3">
                                <label>First Name:</label>
                                <input type="text" name="firstname" class="form-control">
                            </div>
                                <label>Last Name:</label>
                                <input type="text" name="lastname" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Gender:</label>
                                
                                <input type="radio"name="gender"value="female">female
                                <input type="radio"name="gender"value="male">male
                            </div>
                            <div class="mb-3">
                                <label>Country:</label>
                                <select name="country">
                                    <option value="India">India</option>
                                    <option value="USA">canada</option>
                                    <option value="france">Brazil</option>
                                    <option value="Asia">Mexico</option>
                                    <option value="Egypt">Australia</option>
                           </select>
                            </div>
                            <div class="mb-3">
                                <label>Date_from:</label>
                                <input type="date"  id="date" name="date_from" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Date_to: </label>
                                <input type="date"  id="date" name="date_to" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save_student" class="btn btn-primary">Submit</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>