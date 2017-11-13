<?php

class Game {

    private $db;

    function __construct(Database $db){
        $this->db = $db;
    }

    public function getAllGames(): array
    {
         return $this->db->select("SELECT * FROM stats");
    }

    public function getUserGames(string $username): array
    {
        return $this->db->select("SELECT * FROM stats WHERE username = :username",
            ["username" => $username]);
    }

    public function getTopWinners(int $count): array
    {
        return $this->db->select("SELECT username, max(result) as max FROM stats GROUP BY username ORDER BY max DESC LIMIT :limit",
            ['limit' => $count]);
    }

    public function getTopPlayers(int $count): array
    {
        return $this->db->select("SELECT username, count(*) as games FROM stats GROUP BY username ORDER BY games DESC LIMIT :limit",
        ['limit' => $count]);
    }

    public function storeResult(string $username, float $result, string $ip) {

        return $this->db->insert("INSERT into stats (username, result) VALUES (:username, :result)",
            [
                'username' => $username,
                'result' => $result,
            ]);
    }
}