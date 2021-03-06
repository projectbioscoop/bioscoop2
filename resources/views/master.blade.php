<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bioscoop</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
	<nav class="navbar navbar-default"> 
            <div class="container-fluid"> 
                <div class="navbar-header"> 
                    <a class="navbar-brand" href="/">Bioscoop</a> 
                </div> 
                <ul class="nav navbar-nav"> 
                    <li class="active"><a href="/">Home</a></li> 
                    <li><a href="#">Page 1</a></li> 
                    <li><a href="#">Page 2</a></li> 
                    <li><a href="#">Page 3</a></li> 
                </ul> 
                <form class="navbar-form navbar-right"> 
                    <div class="input-group"> 
                        <input type="text" class="form-control" placeholder="Search"> 
                        <div class="input-group-btn"> 
                            <button class="btn btn-default" type="submit"> 
                                <i class="glyphicon glyphicon-search"></i> 
                            </button> 
                        </div> 
                    </div> 
                </form> 
                <ul class="nav navbar-nav navbar-right"> 
                    <li class="dropdown"> 
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Mijn Account 
                            <span class="caret"></span></a> 
                        <ul class="dropdown-menu"> 
                            <li><a href="register"><span class="glyphicon glyphicon-user"></span> Registreren</a></li> 
                            <li><a href="login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> 
                        </ul> 
                    </li> 
                </ul> 
            </div> 
        </nav> 
    </header> 
	
	<div class="container">
		@yield('content')
	</div>

	<div class="hero-img">
		@yield('hero-content')
	</div>

		
<footer>
    <div class="footer" id="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3> Lorem Ipsum </h3>
                    <ul>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                    </ul>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3> Lorem Ipsum </h3>
                    <ul>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                    </ul>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3> Lorem Ipsum </h3>
                    <ul>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                    </ul>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3> Lorem Ipsum </h3>
                    <ul>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                    </ul>
                </div>
                <div class="col-lg-3  col-md-3 col-sm-6 col-xs-12 ">
                    <h3> Lorem Ipsum </h3>
                    <ul>
                        <li>
                            <div class="input-append newsletter-box text-center">
                                <input type="text" class="full text-center" placeholder="Email ">
                                <button class="btn  bg-gray" type="button"> Lorem ipsum <i class="fa fa-long-arrow-right"> </i> </button>
                            </div>
                        </li>
                    </ul>
                    <ul class="social">
                        <li> <a href="#"> <i class=" fa fa-facebook">   </i> </a> </li>
                        <li> <a href="#"> <i class="fa fa-twitter">   </i> </a> </li>
                        <li> <a href="#"> <i class="fa fa-google-plus">   </i> </a> </li>
                        <li> <a href="#"> <i class="fa fa-pinterest">   </i> </a> </li>
                        <li> <a href="#"> <i class="fa fa-youtube">   </i> </a> </li>
                    </ul>
                </div>
            </div>
            <!--/.row--> 
        </div>
        <!--/.container--> 
    </div>
    <!--/.footer-->
    
    <div>
        <div class="container">
            <p class="pull-left"> Copyright © Bioscoop </p>
        </div>
    </div>
    <!--/.footer-bottom--> 
</footer>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	<script src="js/slider.js" type="text/javascript"></script>
</body>
</html>