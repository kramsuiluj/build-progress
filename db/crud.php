<?php 

// This class contains all the crud functions.
class crud {

    private $db;

    // This constructors asks for the database connection variable.
    function __construct($conn) {
        $this->db = $conn;
    }

    public function submit($department, $pname, $sdate, $development, $procurement, $implementation) {

        try {

            // define the sql statement to be executed.
            $sql = "INSERT INTO projects(department, pname, sdate, development, procurement, implementation) VALUES(:department, :pname, :sdate, :development, :procurement, :implementation)";

            // prepare the sql statement
            $stmt = $this->db->prepare($sql);

            // bind the parameters to the actual input value
            $stmt->bindparam(':department', $department);
            $stmt->bindparam(':pname', $pname);
            $stmt->bindparam(':sdate', $sdate);
            $stmt->bindparam(':development', $development);
            $stmt->bindparam(':procurement', $procurement);
            $stmt->bindparam(':implementation', $implementation);

            // execute the statement
            $stmt->execute();

            return true;

        } catch (PDOException $e) {

            return false;

        }

    }

    // This function fetches all the data on the database table named projects.
    public function getProjects() {

        // First, prepare the SQL statement to be executed.
        $sql = "SELECT * FROM projects";

        // Prepare the sql query then save it to a result variable.
        $result = $this->db->query($sql);

        // Return the value of the result to access the fetched data.
        return $result;

    }

    public function getByName() {

        // First, prepare the sql statement to be executed.
        $sql = "SELECT * FROM projects ORDER BY pname";

        // Prepare the sql statement then save it to a result variable.
        $result = $this->db->query($sql);

        // Return the value of the result to access the fetched data.
        return $result;

    }

    public function getByDate() {

        // First, prepare the sql statement to be executed.
        $sql = "SELECT * FROM projects ORDER BY sdate";
        
        // Prepare the sql statement then save it to a result variable.
        $result = $this->db->query($sql);

        // Return the value of the result to access the fetched data.
        return $result;

    }

}

?>