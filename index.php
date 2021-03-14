<?php 

require_once 'db/conn.php';

$success = '';
$failed = '';

if (isset($_POST['submit'])) {

    if (empty($_POST['department']) || empty($_POST['pname']) || empty($_POST['sdate']) || empty($_POST['development']) || empty($_POST['procurement']) || empty($_POST['implementation'])) {

        echo 'All input fields are required to proceed.';

    } else {

        $department = $_POST['department'];
        $pname = $_POST['pname'];
        $sdate = $_POST['sdate'];
        $development = $_POST['development'];
        $procurement = $_POST['procurement'];
        $implementation = $_POST['implementation'];
        

        $isSuccess = $crud->submit($department, $pname, $sdate, $development, $procurement, $implementation);

        if ($isSuccess) {

            $success = "The project data has been saved successfully.";

        } else {

            $failed = "There was an error while saving the project data. Please try again.";

        }

    }

}

$results = $crud->getProjects();

foreach ($results as $result) {
    echo $result['pname'];
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        <?php require_once 'styles.css'; ?>
    </style>
    <title>Build-Progress</title>
</head>
<body>
    
    <div>
    
        <div class="form-container">

            <form action="index.php" method="POST" id="form1">
                
                <section>
                    <h1>Build Build Build Projects</h1>
                </section>
                <section>
                    <label for="">Department</label><br>
                    <select name="department" id="">
                        <option value="DPWH">DPWH</option>
                        <option value="DOTr">DOTr</option>
                        <option value="BCDA">BCDA</option>
                    </select>
                </section>
                <section>
                    <label for="">Project Name</label><br>
                    <input type="text" name="pname">
                </section>
                <section>
                    <label for="">Start Date</label><br>
                    <input type="date" name="sdate">
                </section>
                <section>
                <h2>Project Progress</h2>
                </section>
                <section>
                    <label for="">Development</label><br>
                    <input type="text" name="development">
                </section>
                <section>
                    <label for="">Procurement</label><br>
                    <input type="text" name="procurement">
                </section>
                <section>
                    <label for="">Implementation</label><br>
                    <input type="text" name="implementation">
                </section>
                <section>
                    <br>
                    <button type="submit" name="submit" value="submit" form="form1">SUBMIT</button>
                </section>
                
                <br>

                <?php if (!empty($success)) { ?>

                    <p class="success-msg"><?php echo $success ?></p>

                <?php } else { ?>

                    <p class="failed-msg"><?php echo $failed ?></p>

                <?php } ?>

            </form>

        </div>

        <!-- <div class="table-container">
            
            <table style="border: 1px solid black;">
                    
                <tr>
                    <th rowspan="2" style="border: 1px solid black;">Department</th>
                    <th rowspan="2" style="border: 1px solid black;">Project Name</th>
                    <th rowspan="2" style="border: 1px solid black;">Start Date</th>
                    <th colspan="3" style="border: 1px solid black;"    >Project Progress</th>
                </tr>

                <tr>
                    <th style="border: 1px solid black;">Development</th>
                    <th style="border: 1px solid black;">Procurement</th>
                    <th style="border: 1px solid black;">Implementation</th>
                </tr>

            </table>

        </div> -->
    
    </div>

<script src="index.js"></script>
</body>
</html>