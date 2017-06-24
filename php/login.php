<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <script src="../js/jquery-1.12.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
    <script src="../js/jqBootstrapValidation.js"></script>
    <script src="../js/controleContato.js"></script>
    <title>Padaria Palmeiras</title>
</head>

<body>
<div class="container-fluid ">
    <div class = "row">
		 <div class="col-md-12 loginContent hidden-xs">
		    <form id="formContato" class="form-horizontal" method="post" action="valida.php">
		        <span><strong>Login</strong></span>
		        <div class="control-group form-group">
		        	<div class="controls">
						<label>Usuário</label>
						<input class="inputLogin" type="text" name="usuario" maxlength="50" />
					</div>
				</div>
				<div class="control-group form-group">
		            <div class="controls">
						<label>Senha</label>
						<input class="inputLogin"  type="password" name="senha" maxlength="50" />
					</div>
				</div>
				<div class="form-actions form-group">
		            <input  type="submit" value="Entrar" class="btn ">
		        </div>
			</form>
		</div>
	<div class = "row">
		<div class="col-md-12 loginContentM visible-xs">
		    <form id="formContato" class="form-horizontal" method="post" action="valida.php">
		        <span><strong>Login</strong></span>
		        <div class="control-group form-group">
		        	<div class="controls">
						<label>Usuário</label>
						<input class="inputLogin" type="text" name="usuario" maxlength="50" />
					</div>
				</div>
				<div class="control-group form-group">
		            <div class="controls">
						<label>Senha</label>
						<input class="inputLogin"  type="password" name="senha" maxlength="50" />
					</div>
				</div>
				<div class="form-actions form-group">
		            <input  type="submit" value="Entrar" class="btn ">
		        </div>
			</form>
		</div>
	</div>
</div>
</body>
</html>
