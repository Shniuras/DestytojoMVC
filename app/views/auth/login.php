<!DOCTYPE html>
<html>
<head>
	<title><?= CONFIG['site_title']; ?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Stylesheets -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
	<link href="/<?= CONFIG['site_path']; ?>/app/views/assets/css/style.css" rel="stylesheet">
</head>
<body>
<div class="container">
	<div class="row header">
		<div class="col">
			<h1><a href="/<?= CONFIG['site_path']; ?>"><?= CONFIG['site_title']; ?></a></h1>
			<p><?= CONFIG['site_slogan']; ?></p>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<div class="data_body">
				<p><?= $data['body']; ?></p>
			</div>
		</div>
	</div>
	<div class="row justify-content-center">
		<div class="col-lg-4 text-center">
			<?php

			if ($this->errors) {
				foreach ($this->errors as $error) {
				    echo "<div class='alert alert-danger'>" . $error . "</div>";
                }
			}
			if ($this->messages) {
				foreach ($this->messages as $message) {
					echo "<div class='alert alert-success'>" . $message . "</div>";
				}
			}

			?>
			<form action="/<?= CONFIG['site_path']; ?>/auth/login" method="post">
                <input name="username" class="form-control form-control-lg" placeholder="Username" type="text">
                <input name="password" class="form-control" placeholder="Password" type="password">
                <button type="submit" class="btn btn-dark btn-block">Login</button>
			</form>
            <br><a class="btn btn-sm btn-outline-dark btn-block" href="/<?= CONFIG['site_path']; ?>/auth/regForm">Register</a>
		</div>
	</div>
</div>
</body>
</html>