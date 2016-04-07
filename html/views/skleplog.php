<?php

	session_start();	
	//jeśli ktoś nie jest zalogowany nie przechodzi do strony tylko wraca do logowania
	
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: logowanie.php');
		exit();
	}
	
?>
<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sklep internetowy - Roleton</title>

    <!-- Bootstrap Core CSS -->
    <link href="/../PhpProject1/html/content/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/../PhpProject1/html/content/css/shop-homepage.css" rel="stylesheet">
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/../PhpProject1/index.php">Roleton</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="/../PhpProject1/index.php">Home</a>
                    </li>
                    <li>
                        <a href="rejestracja.php">Rejestracja</a>
                    </li>
                    <li>
                        <a href="logowanie.php">Logowanie</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Panel boczny -->
    <div class="container">

        <div class="row">

            <div class="col-md-3">
                <p class="lead">Menu:</p>
                <div class="list-group">
                    <a href="#" class="list-group-item">Rolety</a>
                    <a href="#" class="list-group-item">Żaluzje</a>
                    <a href="#" class="list-group-item">Moskitiery</a>
                </div>
           </div>
	
        
	
<?php

	echo "<p>Witaj ".$_SESSION['Imie'].'! [ <a href="../controller/logout.php">Wyloguj się!</a> ]</p>';
	echo "<p><b>id_Klienta</b>: ".$_SESSION['id_Klienci'];
	echo " | <b>Imie</b>: ".$_SESSION['Imie'];
	echo " | <b>Nazwisko</b>: ".$_SESSION['Nazwisko']."</p>";
	echo "<p><b>E-mail</b>: ".$_SESSION['Email'];
	echo "<br /><b>Nr_tel</b>: ".$_SESSION['Nr_tel']."</p>";
	
?>
  </div>
   </div>
 <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Roleton 2016</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="/../PhpProject1/html/content/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/../PhpProject1/html/content/js/bootstrap.min.js"></script>

</body>

</html>