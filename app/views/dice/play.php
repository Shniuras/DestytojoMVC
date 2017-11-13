<!DOCTYPE html>
<html>
<head>
    <title><?= CONFIG['site_title']; ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Stylesheets -->
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="/<?= CONFIG['site_path']; ?>/app/views/assets/css/style.css" rel="stylesheet">
    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
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
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col"><img class="img-fluid image" id="first_dice" src="/<?= CONFIG['site_path']; ?>/app/views/assets/img/dices/6.png"></div>
                    <div class="col"><img class="img-fluid image" id="second_dice" src="/<?= CONFIG['site_path']; ?>/app/views/assets/img/dices/6.png"></div>
                    <div class="col"><img class="img-fluid image" id="third_dice" src="/<?= CONFIG['site_path']; ?>/app/views/assets/img/dices/6.png"></div>
                </div>

            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col">
                        <button type="button" class="btn btn-dark btn-block" id="start_game">Start game</button>
                        <button type="button" class="btn btn-dark btn-block" id="roll_dice" disabled>Roll dice</button>
                    </div>
                    <div class="col">
                        <div id="win"></div>
                        <div id="result"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="/<?= CONFIG['site_path']; ?>/app/views/assets/js/dice.js"></script>
</body>
</html>
