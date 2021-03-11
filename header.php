<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet"  href="style.css">
		<style>
				body {
			padding: 0;
			margin: 0;
			background: #f2f6e9;
		  }
		  /*--- navigation bar ---*/
		  .navbar {
			background:#black;
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
			color: #gray;
		  }
		  .navbar-collapse {
			justify-content: flex-end;
		  }

		</style>
    </head>
    <body>
        <nav class="navbar navbar-expand-md">
            <a class="navbar-brand">Pocket Guide</a>
            <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="main-navigation">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Parent</a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="ParentProfile.php" class="dropdown-item">Profile</a>
							<a href="viewStudentList.php" class="dropdown-item">View Students</a>
                            <a href="feedback.php" class="dropdown-item">Submit feedback</a>
                            <div class="dropdown-divider"></div>
                            <a href="ParentLogout.php" class="dropdown-item">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>