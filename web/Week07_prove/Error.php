<?php
session_start();
if (isset($_SESSION['username'])){
    $username = $_SESSION['username'];
}
else
{
    header("Location: index.php");
    die();
}

$ex = $_REQUEST['errormessage'];
?>

<html>
<head>
    <title>
        View
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href='https://fonts.googleapis.com/css?family=Kanit' rel='stylesheet'>
    <link href="css/project1.css" type="text/css" rel="stylesheet" />
    <script src="js/project1.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        $("#myAlert").on('closed.bs.alert', function () {
            window.location = "List.php";
        });
    });
    </script>
</head>
<body>
<div class="container masthead">
    <div class="logo">
        <img src="images/logo.png" alt="CS313" width="207" height="75" />
        <h3>BYUI - CS313 Library</h3>
    </div>
    <div class="searchbar">
    </div>
</div>
<div class="container">
<br/>
<div id="myAlert" class="alert alert-danger fade in">
    <a href="#" class="close" name="error" data-dismiss="alert">&times;</a>
    <strong>Error!</strong> An error has occurred <?php echo $ex ?>
    <br/>
</div>
</div>
</body>
</html>

