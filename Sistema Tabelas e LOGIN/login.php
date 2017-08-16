<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Minha Agenda</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/freelancer.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

 
<link rel="stylesheet" type="text/css" href="css/estiloGeral.css">

<div class="login-body">
    <article class="container-login center-block">
		<section>
			<ul id="top-bar" class="nav nav-tabs nav-justified">
				<li class="active"><a data-toggle="tab" href="#login-access">ENTRAR</a></li>
				<li><a href="#cadastro" data-toggle="tab">CADASTRAR</a></li>
			</ul>
			<div class="tab-content tabs-login col-lg-12 col-md-12 col-sm-12 cols-xs-12">
				<div id="login-access" class="tab-pane fade active in">
					<h2><i class="glyphicon glyphicon-log-in"></i>  Minha Agenda</h2>
					<br>

					<form method="post" accept-charset="utf-8" autocomplete="off" role="form" class="form-horizontal" action="acesso.php">

						<div class="form-group ">
							<label for="login" class="sr-only">Email</label>
								<input type="text" class="form-control" name="login" id="login" 
									placeholder="Email" tabindex="1" value="" />
						</div>
						<div class="form-group ">
							<label for="password" class="sr-only">Password</label>
								<input type="password" class="form-control" name="password" id="password"
									placeholder="Password" value="" tabindex="2" />
						</div>
						<div class="checkbox">
								<label class="control-label" for="remember_me">
									<input type="checkbox" name="remember_me" id="remember_me" value="1" class="" tabindex="3" /> Relembrar
								</label>
						</div>
						<br/>
						<div class="form-group ">				
								<button type="submit" name="log-me-in" id="submit" tabindex="5" class="btn btn-lg btn-primary">Entra</button>
						</div>
					</form>			
				</div>

				<div id="cadastro" class="tab-pane fade">
					<h2><i class="glyphicon glyphicon-log-in"></i>  CADASTRO</h2>
					<br>	

					<form method="post" accept-charset="utf-8" autocomplete="off" role="form" class="form-horizontal">

						<div class="form-group ">
							<label for="name" class="sr-only">Nome</label>
								<input type="text" class="form-control" name="name" id="login_value" 
									placeholder="Email" tabindex="1" value="" />
						</div>
						<div class="form-group ">
							<label for="login" class="sr-only">Email</label>
								<input type="email" class="form-control" name="login" id="login_value" 
									placeholder="Email" tabindex="1" value="" />
						</div>
						<div class="form-group ">
							<label for="password" class="sr-only">Senha</label>
								<input type="password" class="form-control" name="password" id="password"
									placeholder="Password" value="" tabindex="2" />
						</div>
						<br/>
						<div class="form-group ">				
								<button type="submit" name="log-me-in" id="submit" tabindex="5" class="btn btn-lg btn-primary">Cadastrar</button>
						</div>
					</form>			
				</div>
			</div>
		</section>
	</article>
</div>

<script type="text/javascript">
// Select all tabs
$('.nav-tabs a').click(function(){
    $(this).tab('show');
})

// Select tab by name
$('.nav-tabs a[href="#login-access"]').tab('show')

// Select first tab
$('.nav-tabs a:first').tab('show') 

// Select last tab
$('.nav-tabs a:last').tab('show') 

// Select fourth tab (zero-based)
$('.nav-tabs li:eq(3) a').tab('show')

</script>


    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/freelancer.min.js"></script>
 

</body>

</html>