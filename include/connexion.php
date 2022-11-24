<?php

class Connexion
{
    private $file;
    private $connexion;

    private function __construct()
    {
        try {
            $this->file = __DIR__ . "/../database.db";
            $this->connexion = new PDO('sqlite:' . $this->file);
            $this->connexion->exec('SET NAMES utf8');
            $this->connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $Exception) {
            echo $Exception->getMessage();
            die();
        }
    }

    public static function getPdo()
    {
        if (self::$connexion == null)
        {
            self::$connexion = new Connexion();
        }
    
        return self::$connexion;      
    }

    public function exec($sql)
    {
        $dbh = $this->connexion;
        $res = $dbh->exec($sql);
        $dbh = null;
        return true;
    }

    public function getResult($sql)
    {
        $tmp = array();

        $dbh = $this->connexion;
        $res = $dbh->query($sql);
        $dbh = null;
        while ($data = $res->fetch(PDO::FETCH_ASSOC)) {
            $tmp[] = $data;
        }
        return $tmp;
    }
}
