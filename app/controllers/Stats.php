<?php

class Stats extends Controller {

    public function index() {

	    // protecting my stats
    	if (!isset($_SESSION['username'])) {
		    header("Location: /" . CONFIG['site_path'] );
    		die();
	    }

        $game = $this->model('Game');

        $data['body'] = "This is all my game statistics";
        $data['my_stats']= $game->getUserGames($_SESSION['username']);

        $this->view("stats/index", $data);
    }

    public function top() {

	    // protecting my stats
	    if (!isset($_SESSION['username'])) {
		    header("Location: /" . CONFIG['site_path'] );
		    die();
	    }

        $data['body'] = "Here we have best wins and top gamers.";
        $this->view("stats/tops", $data);
    }


}