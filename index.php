<?php 

require_once 'db/conn.php';

if (isset($_POST['submit'])) {

    if (empty($_POST['department']) || empty($_POST['pname']) || empty($_POST['sdate']) || empty($_POST['development']) || empty($_POST['procurement']) || empty($_POST['implementation'])) {

        

    }

}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Build-Progress</title>
</head>
<body>
    
    <div>
    
        <form action="index.php" method="POST">
            <h1>Build Build Build Progress</h1>
            <section>
                <label for="">Department</label><br>
                <input type="text" name="department">
            </section>
            <section>
                <label for="">Project Name</label><br>
                <input type="text" name="pname">
            </section>
            <section>
                <label for="">Start Date</label><br>
                <input type="date" name="sdate">
            </section>
            <h2>Project Progress</h2>
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
                <input type="submit" name="submit" value="SUBMIT">
            </section>
        </form>
    
    </div>

</body>
</html>