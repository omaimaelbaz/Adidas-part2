<?php

namespace App\Models;
use App\Models\Database;
Class Home {
    
    public static function getLastRow(){
        $db = Database::connect();
        $stmt= $db->prepare("SELECT * FROM users ORDER BY userID DESC");
        $stmt->execute();
        $data['row']= $stmt->rowCount();
        $data['lastUser']= $stmt->fetchAll(\PDO::FETCH_ASSOC)[0];
        
        return $data;
    }
}