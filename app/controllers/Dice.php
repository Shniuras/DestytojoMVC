<?php

class Dice extends Controller {

    public function index() {

        header("Content-type:application/json");

        $game = $this->model('Game');
        $result = $game->getAllGames();

        echo json_encode($result);

    }

    public function myGames() {

        header("Content-type:application/json");

        $game = $this->model('Game');
        $result = $game->getUserGames($_SESSION['username']);

        echo json_encode($result);
    }

    public function topWins() {

        header("Content-type:application/json");

        $game = $this->model('Game');
        $result = $game->getTopWinners(5);

        echo json_encode($result);
    }

    public function topPlayers() {

        header("Content-type:application/json");

        $game = $this->model('Game');
        $result = $game->getTopPlayers(5);

        echo json_encode($result);
    }

    public function submitResult() {
        $game = $this->model('Game');
        echo $game->storeResult($_SESSION['username'], $_POST['result'], $_SERVER['REMOTE_ADDR']);

    }

    public function play() {

        $data['body'] = "Dice game<br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa dolore illum non quod suscipit tempora temporibus. Adipisci aliquid, architecto assumenda cumque eius et nobis non nulla perspiciatis quam quo voluptas?";
        $this->view("dice/play", $data);

    }

}