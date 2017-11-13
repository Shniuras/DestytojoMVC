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
            <div class="user_menu">
                <?php
                    if(isset($_SESSION['username']))  {
                        echo "<a href='/" . CONFIG['site_path'] . "/stats'>". $_SESSION['username'] . "</a> <a href='/" . CONFIG['site_path'] . "/auth/logout'>[Logout]</a>";
                    } else {
                        echo "<a href='/" . CONFIG['site_path'] . "/auth/loginForm'>[Login]</a>";
                    }
                ?>
            </div>
            <div class="data_body">
                <p><?= $data['body']; ?></p>
            </div>
        </div>
    </div>
    <div class="row">
        <?php
        foreach ($data['games'] as $name => $url) {
            echo "<div class='col-12 col-md-6'><a href='/" . CONFIG['site_path'] . $url . "'><div class='game_button'>".$name."</div></a></div>";
        }
        ?>
    </div>
</div>
</body>
</html>