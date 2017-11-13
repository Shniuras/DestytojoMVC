<?php


class Controller {

    protected $db;

    function __construct(Database $db){
        $this->db = $db;
    }

    protected function model(string $model) {
        require_once "app/models/" . $model . ".php";
        return new $model($this->db);
    }


    protected function view(string $view, array $data) {
        require_once "app/views/" . $view . ".php";

        // if we use some view, then show metrics
	    echo "<div style='position: absolute; right: 0; bottom: 30px; padding: 2px 15px; background-color: rgba(252,57,0,0.8); font-family: Verdana; color: white'>";
	    echo round((microtime(true) - START)*1000, 2) . " μs";
	    echo "<br>" . round(memory_get_peak_usage()/(1024*1024), 2) . " MB";
	    echo "</div>";
    }



}