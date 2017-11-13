<?php

class Home extends Controller {

    public function index() {

    	$data['body'] = "Welcome to our gaming site.<br> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero officia quisquam veritatis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae dicta eaque fuga, magni praesentium ullam velit. Ad, doloremque ducimus, facilis fugiat labore nostrum optio quasi sed tempore unde ut vel! Adipisci aperiam corporis dicta dolore ea eius esse eveniet, fuga fugit hic incidunt neque quidem rerum soluta veniam.";
		$data['games'] = [
			"Dice" => "/Dice/play",
			"LoTo" => "/LoTo/play",
			"Cards" => "/Cards/play",
			"Numbers" => "/Numbers/play",
			];
        $this->view("main", $data);
    }

}