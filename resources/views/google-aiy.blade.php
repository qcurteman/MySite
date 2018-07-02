<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="{{ asset('ico/favicon.png') }}">

        <title>Google Vision AIY</title>

        <!-- Bootstrap core CSS -->
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">

        <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/smoothscroll.js') }}"></script> 
        <script src="{{ asset('js/Chart.js') }}"></script>

        <style>
            #headerwrap{
                background: url(../img/header-google-aiy.jpg) no-repeat center top;
                margin-top: 40px;
                padding-top:140px;
                text-align:center;
                background-attachment: relative;
                background-position: bottom bottom;
                min-height: 500px;
                width: 100%;
                
                -webkit-background-size: 100%;
                -moz-background-size: 100%;
                -o-background-size: 100%;
                background-size: 100%;

                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }
        </style>

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        @include('header')

    <div id="headerwrap">
		<div class="container">
			<div class="row centered">
				<div class="col-lg-12">
					<h1>Google Vision AIY</h1>
					<h3>My Senior Project</h3>
				</div><!--/.col-lg-12 -->
			</div><!--/.row -->
		</div><!--/.container -->
	</div><!--/.#headerwrap -->
	

	<section id="about" name="about"></section>
	<div id="intro">
		<div class="container">
			<div class="row">
				
				<div class="col-lg-2 col-lg-offset-1">
					<h5>ABOUT</h5>
				</div>
				<div class="col-lg-6">
					<p>For my senior project at William jessup university, I decided to learn the fundamentals of machine learning with Google's AIY Vision kit</p>
				</div>
				<div class="col-lg-2">
                    <p><a href="{{ asset('') }}"><i class="icon-file"></i></a> <sm>VIEW DOCUMENTATION</sm></p>
                    <p><a href="https://github.com/qcurteman"><i class="icon-github"></i></a> <sm>VIEW GITHUB REPO</sm></p>
				</div>
				
			</div><!--/.row -->
		</div><!--/.container -->
	</div><!--/ #intro -->


        @include('footer')
    </body>
</html>

    