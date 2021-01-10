
<?php
session_start();/*capturer les erreur et rejeter */
ob_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>STAGE2020</title>
        <link rel="shortcut icon" href="sotcocogupload/logo/logo.png"> 
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="sotcocogcss/login.css" rel="stylesheet" type="text/css" />
        <link href="sotcocogplugin/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
        <style>
            body{
                font-family: Book Antiqua !important;
            }
        </style>
    </head>
    <?php
    include('sotcocogconnexion/connexion.php');
    //include('sotcocogpages/sotcocogfunction.php');

    if (isset($_GET["locks"])) {
        //session_unregister("login");
        session_unset();
        session_destroy();
        header("Location:./");
        exit();
    }
    
    ?>

    <body>
        <?php
        if (isset($_POST['consot']))/*//test si une variable existe (expresssion régulière)*/ {
            $login = addslashes($_POST["loginsot"]);
            $pass = sha1(addslashes($_POST["passwordsot"]));
            $re = $con->query("select * from sot_utilisateur as u where u.loginuser='" . $login . "' and u.motdepasseuser='" . $pass . "'") or die(mysqli_error($con));
            $req = mysqli_num_rows($re);
            if ($req == 0) {
                echo"<script language='javascript'>alert('Information non valide')</script>";
            } else {
                $r = mysqli_fetch_assoc($re);
                $_SESSION["iduser"] = $r["iduser"];
                $_SESSION["nomuser"] = $r["nomuser"];
                $_SESSION["prenomuser"] = $r["prenomuser"];
                $_SESSION["teluser"] = $r["teluser"];
                $_SESSION["emailuser"] = $r["emailuser"];
                $_SESSION["roleuser"] = $r["roleuser"];
                $_SESSION["loginuser"] = $r["loginuser"];
                $_SESSION["passworduser"] = $r["motdepasseuser"];
                $_SESSION["etatuser"] = $r["etatuser"];
                $_SESSION["photouser"] = $r["photouser"];
                
                
                if (isset($_SESSION["etatuser"]) && ($_SESSION["loginuser"])) {

                    if ($_SESSION["roleuser"] == "Administrateur") {
                        header("Location:indexadmin.php");
                    } else {
                        header('Location:indexuser.php');
                    }
                } else {
                    echo"<script language='javascript'>alert('Utilisateur inactive !!')</script>";
                }
            }
        }

        if (isset($_SESSION['loginuser']) && isset($_SESSION['passworduser']) && ($_SESSION["etatuser"])) {
            if ($_SESSION["roleuser"] == "Administrateur") {
                header("Location:indexadmin.php");
            } else {
                header("Location:indexuser.php");
            }
        }
        ?>
        
        <div class="wrapper">
            <form method="post" action="#">
                <input type="text" id=""  class="form-conrol" required="" name="loginsot" placeholder="Identifiant">
                <input type="password" id=""  class="form-conrol" required="" name="passwordsot" placeholder="Mot de passe"><br>
                <input type="submit" name="consot" class="btn btn-primary" value="Connexion">
            </form>
            
        </div>
       
    </body>

</html>

<?php
ob_end_flush();

?>
