<?php
    session_start();
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Medication Tracker App</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="css/profile.css" rel="stylesheet">
</head>

<body class="text-center">
    <div class="cover-container d-flex w-100 h-100 pt-3 mx-auto flex-column">
        <div class="cover-container masthead">
            <header class="masthead mb-auto">
                <div class="inner">
                    <!-- Add logo here -->
                    <h3 class="masthead-brand">Team Overload</h3>
                    <nav class="nav nav-masthead justify-content-center">
                        <a class="nav-link" href="index.php">Home</a>
                        <a class="nav-link" href="calendar.php">Calendar</a>
                        <a class="nav-link" href="#">Prescriptions</a>
                        <a class="nav-link" href="appointments.php">Appointments</a>
                        <?php
                            if(!isset($_SESSION['email'])) {
                              echo "<a class='nav-link' href='login.html'>Login</a>
                              <a class='nav-link' href='register.html'>Register</a>";
                            } else {
                                // If a doctor
                                if($_SESSION['isDoc']) {
                                    echo "<a class='nav-link active' href='doctor.php'>Profile</a>";
                                } else {
                                    echo "<a class='nav-link active' href='patient.php'>Profile</a>";
                                }
                                echo "<a id='logout' class='nav-link' href='#'>Logout</a>";
                            }
                        ?>
                    </nav>
                </div>
            </header> <!-- end header -->
        </div>
 
        <div class="cover-container-profile d-flex">
            <div class="row ">
                <div class="col-md-4 order-md-1 mb-4">
                    <div class="container-flex">
                        <div class="card container-flex">
                                <img class="card-img-top" src="images/person.png" alt="Patient User Image">
                            <div class="card-body  text-left">
                                <h6 class="card-text">
                                    Quick Menu
                                </h6>
                            </div>
                            <ul class="list-group list-group-flush text-left">
                                <li class="list-group-item">
                                    <a href="appointments.php" class="card-link">View or edit appointments</a>
                                </li>
                                <li class="list-group-item">
                                    <a href="appointments.php" class="card-link">View or edit Doctor</a>
                                </li>
                            </ul>
                        </div>
                        <!-- end Left Menu -->
                    </div>
                </div> <!-- end column 1 -->
                <div class="col-md-8 order-md-2">
                    <div class="container-flex m-3">
                        <?php
                            if(!isset($_SESSION['email'])) {
                                echo "<h4 class='d-flex'> Patient Name </h4>";
                            } else {
                                echo "<h4 class='d-flex'>";
                                echo $_SESSION['fullName']; 
                                echo "</h4>";
                            }
                        ?>
                        <p class="text-muted text-left"> Brief description of the patient if you want. Hi there i am John Doe and this is what i like to talk about blah blah blah</p>
                        
                        <div class="card d-flex mt-5">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-10">
                                        <h4 class="d-flex">Your Medications</h4>
                                    </div>
                                    <div class="col-md-2">
                                        <a role="button" class="btn btn-info align-self-end" href="#">edit</a>
                                    </div>
                                </div>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <div>
                                        <h5 class="d-flex my-1 mb-2">Medication 1</h5>
                                        <p class="text-muted text-left">Date Issued</p>
                                        <p class="text-muted text-left">Prescribed by doctor</p>
                                        <p class="text-muted text-left">Brief Description/Directions</p>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div>
                                        <h5 class="d-flex my-1 mb-2">Medication 2</h5>
                                        <p class="text-muted text-left">Date Issued</p>
                                        <p class="text-muted text-left">Prescribed by doctor</p>
                                        <p class="text-muted text-left">Brief Description/Directions</p>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div>
                                        <h5 class="d-flex my-1 mb-2">Medication 2</h5>
                                        <p class="text-muted text-left">Date Issued</p>
                                        <p class="text-muted text-left">Prescribed by doctor</p>
                                        <p class="text-muted text-left">Brief Description/Directions</p>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div>
                                        <h5 class="d-flex my-1 mb-2">Medication 2</h5>
                                        <p class="text-muted text-left">Date Issued</p>
                                        <p class="text-muted text-left">Prescribed by doctor</p>
                                        <p class="text-muted text-left">Brief Description/Directions</p>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div>
                                        <h5 class="d-flex my-1 mb-2">Medication 2</h5>
                                        <p class="text-muted text-left">Date Issued</p>
                                        <p class="text-muted text-left">Prescribed by doctor</p>
                                        <p class="text-muted text-left">Brief Description/Directions</p>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <p class="text-muted text-left">Need to update your prescriptions? Don't worry!</p>
                                    <p class="text-muted text-left">
                                        <a role="button" class="btn btn-info" href="#">Add or edit your medications here!</a>
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> <!-- end column 2 -->
            </div> <!-- end row -->
        </div> <!-- end container -->

        <footer class="mastfoot mt-auto">
<!--
            <div class="inner">
                <p>Cover template for <a href="https://getbootstrap.com/">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
            </div>
-->
        </footer>
    </div>

    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/index.js"></script>
</body>

</html>