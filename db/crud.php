<?php 

// This class contains all the crud functions.
class crud {

    private $db;

    // This constructors asks for the database connection variable.
    private function __construct($conn) {
        $this->db = $conn;
    }


}

?>