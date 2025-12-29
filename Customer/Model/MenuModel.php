<?php
require_once("db.php");

class MenuModel {
    public function getMenu() {
        global $conn;
        return $conn->query("SELECT * FROM menu");
    }
}
