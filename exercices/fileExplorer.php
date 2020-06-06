<?php

// Nous créons une classe « Personnage ».
class FileExplorer
{
    private $_path = "/tmp";

    // Nous déclarons une méthode dont le seul but est d'afficher un texte.
    public function listFile($path)
    {
      
        $files1 = scandir($path);
        foreach ($files1 as &$value) {

            echo '
            <a href="http://localhost:8888/trainning/PHP_TRAINING/exercices/fileExplorer.php?path='.$path."/".$value.'" id="btn-' . $value . '">' . $value . '</a>
           

            <br />';
        }
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Trainning PHP</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/album/">

    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.css" rel="stylesheet">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="../album.css" rel="stylesheet">
</head>

<body>
    <?php include("../components/header.php") ?>

    <main role="main">
        <?php
        $perso = new FileExplorer;
        $perso->listFile($_GET['path']);
        ?>



    </main>

    <footer class="text-muted">
        <div class="container">
            <p class="float-right">
                <a href="#">Back to top</a>
            </p>
            <p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
            <p>New to Bootstrap? <a href="https://getbootstrap.com/">Visit the homepage</a> or read our <a href="../getting-started/introduction/">getting started guide</a>.</p>
        </div>
    </footer>
    <script src="../assets/dist/js/bootstrap.bundle.js"></script>
    <script language="JavaScript">
        $("#more_com").click(function() {
            $.ajax({
                url: '../components/menu.php',
                data: {
                    action: 'call_this'
                },
                success: function(html) {
                    alert(html);
                }
            });

        });
    </script>
</body>