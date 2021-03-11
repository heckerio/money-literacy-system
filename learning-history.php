<?php
    include('connection.php');
?>

<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="learning-history.css">
        <title>Learning History</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-md">
            <a class="navbar-brand" href="">Pocket Guide</a>
            <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="main-navigation">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Student</a> <!-- Add username later at here using php -->
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="StudentProfile.php" class="dropdown-item">Profile</a>
                            <a href="student_budget.php" class="dropdown-item">Budget</a>
                            <a href="student_savings.php" class="dropdown-item">Saving</a>
                            <a href="student_spending.php" class="dropdown-item">Spending</a>
                            <a href="schedule.php" class="dropdown-item">Schedule</a>
                            <a href="learning-history.php" class="dropdown-item">Learning History</a>
                            <a href="feedback-result.php" class="dropdown-item">Parent's Feedback</a>
                            <div class="dropdown-divider"></div>
                            <a href="StudentLogout.php" class="dropdown-item">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container">
            <br/>
            <h2 style="text-align:center;">LEARNING HISTORY</h2>
            </br>
            <div class="history">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Details</th>
                            <th scope="col">Date / Time</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Saving</td>
                            <td>2020-09-11 00:00:00.000000</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Spending</td>
                            <td>2020-09-13 13:45:40.000000</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Set budget</td>
                            <td>2020-09-15 15:15:25.000000</td>
                        </tr>
                    </thead>
                
                    <!--<?php
                        mysqli_select_db($connection, 'moneyliteracy');
                        $query = 'SELECT * FROM learning history';
                        $count = 0;
                        if($result = mysqli_query($connection, $query)) {
                            $count = mysqli_num_rows($result);
                            while($row = mysqli_fetch_assoc($result)) { 
                                ?>
                                <tr>
                                    <td><?php echo $row['history_id'] ?></td>
                                    <td><?php echo $row['history_details'] ?></td>
                                    <td><?php echo $row['history_datetime'] ?></td>
                                </tr>
                            
                            }
                        
                    <?php } } ?>-->
                </table>
                <p>Number of records: 3<!--<?php echo $count; ?>--></p>
            </div>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>