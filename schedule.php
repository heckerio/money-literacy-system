<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="schedule.css">
        <link href='fullcalendar/lib/main.css' rel='stylesheet' />
        <script src='fullcalendar/lib/main.js'></script>
        <title>Schedule</title>
        <style>
            body {
                padding: 0;
                margin: 0;
                background: #f2f6e9;
            }
            /*--- navigation bar ---*/
            .navbar {
                background: black;
            }
            .nav-link,
            .navbar-brand {
                color: #fff;
                cursor: pointer;
            }
            .nav-link {
                margin-right: 1em !important;
            }
            .nav-link:hover {
                color: grey;
            }
            .navbar-collapse {
                justify-content: flex-end;
            }
        </style>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var calendarEl = document.getElementById('calendar');
                var calendar = new FullCalendar.Calendar(calendarEl, {
                    initialView: 'dayGridMonth',
                    expandRows: true,
                    aspectRatio: 2.5
                });
                calendar.updateSize();
                calendar.render();
            });
        </script>
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
        <div class="container" style="margin-top: 20px">
            <h2 style="text-align:center;">SCHEDULE</h2>
            <div id='calendar'></div>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>