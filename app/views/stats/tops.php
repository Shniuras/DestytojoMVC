<!DOCTYPE html>
<html>
<head>
    <title><?= CONFIG['site_title']; ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.js"></script>
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
            <div class="user_menu">
                <a href="/<?= CONFIG['site_path']; ?>/stats"><?= $_SESSION['username']; ?></a>
                <a href="/<?= CONFIG['site_path']; ?>/auth/logout">[Logout]</a>
            </div>
            <div class="data_body">
                <p><?= $data['body']; ?></p>
            </div>
            <div class="btn-group" role="group">
                <a href="/<?= CONFIG['site_path']; ?>/stats" type="button" class="btn btn-outline-secondary">My Statistics</a>
                <a href="/<?= CONFIG['site_path']; ?>/stats/top" type="button" class="btn btn-outline-secondary">Tops</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h3>Top Wins</h3>
            <canvas id="winsChart"></canvas>
        </div>
        <div class="col">
            <h3>Top Gamers</h3>
            <canvas id="gamesChart"></canvas>
        </div>

    </div>
</div>

<script src="/<?= CONFIG['site_path']; ?>/app/views/assets/js/stats.js"></script>
</body>
</html>

