<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=768px, initial-scale=1.0">
    <title>Espace enseignants</title>
	<link rel="stylesheet" href="/src/style/design.css">
	<link rel="icon" href="/src/img/logo.png">   
</head>
<body>
    <?php 
        require_once __DIR__."/Components/AdminNavbar.php";
    ?>
    <div class="Main">
        <div class="leftDrawer">
            <br><br>
            <a <?php echo "href=\"/student\"" ?>><div class="drawerOption"><p>Informations personelles</p></div></a>
            <a <?php echo "href=\"/student/\"$this->id/schedule" ?>><div class="drawerOption"><p>Emploi du temps</p></div></a>
            <a <?php echo "href=\"/student/\"$this->id/marks" ?>><div class="drawerOption"><p>Notes</p></div></a>
            <a <?php echo "href=\"/student/\"$this->id/activities" ?>><div class="drawerOption"><p>Activites extra</p></div></a>
        </div>
        <div class="Dash">
            <div class="infoCtn">
            </div>

        </div>
    </div>
    
</body>
</html>