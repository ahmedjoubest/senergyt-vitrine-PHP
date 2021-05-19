<?php
session_start();
?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Document</title>

    <style>
        .loginErreur{
            text-align: center;
            color: red;
            margin-bottom: 20px;
        }
    </style>






    <link rel="stylesheet" href="assets/css/login.css">


</head>



<body>

<!--<img class="logo" src="<?php /*echo base_url('assets/images/logo_md.png'); */?>"/>-->

<div id="parent">

    <div class="loginPage form_login">

        <header>

            <h2>Login</h2>

            <div class="loginErreur">
                <?php
                if($_SESSION['loginErreur']){?>
                    <div class="loginErreur"><?php echo $_SESSION['loginmsg']; ?></div>
                <?php } ?>
            </div>

        </header>

        <form method="post" action="login.php">

        <input placeholder="IDENTIFIANT" type="text" name="username">

        <input placeholder="MOT DE PASSE" type="password" name="password">

        <section class="links">

            <button class="button"><span>CONNEXION</span></button>
<p style="color:grey; font-size:12px; text-align: center; font-family:Arial Narrow ">
Mention légal : </p>
<p style="color:grey; font-size:12px; text-align: center; font-family:Arial Narrow ; ">
Ce document est la propiété de SENERGY'T. Toute utilisation de ce document et/ou de son contenu n'est permise, exlusivement, qu'avec l'accord écrit de SENERGYT.
</p>
<br>
        </section>

        </form>

    </div>

</div>



</body>

</html>
