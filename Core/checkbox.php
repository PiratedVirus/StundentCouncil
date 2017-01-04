<?php
    require_once 'dbconnect.php';
    ob_start();
    session_start();

    if (isset($_POST['web'])) {
        $web = '1';
        $fet = mysqli_query($conn,"UPDATE skills SET Web = '1' WHERE userId ='".$_SESSION['stud_id']."'");

      }
    

    // Checking App
    if (isset($_POST['app'])) {
        $app = '1';
        $fet = mysqli_query($conn,"UPDATE skills SET app = '1' WHERE userId ='".$_SESSION['stud_id']."'");
    }


    // Checking graphics
    if (isset($_POST['graphics'])) {
        $graphics = '1';
        $fet = mysqli_query($conn,"UPDATE skills SET photoshop = '1' WHERE userId ='".$_SESSION['stud_id']."'");
    }


    // Checking animations
    if (isset($_POST['animations'])) {
        $animations = '1';
        $fet = mysqli_query($conn,"UPDATE skills SET animation = '1' WHERE userId ='".$_SESSION['stud_id']."'");
    }



    // Checking Networking
    if (isset($_POST['Networking'])) {
        $networking = '1';
        $fet = mysqli_query($conn,"UPDATE skills SET networking = '1' WHERE userId ='".$_SESSION['stud_id']."'");
    }



    // Checking Autocad
    if (isset($_POST['Autocad'])) {
        $autocad = '1';
        $fet = mysqli_query($conn,"UPDATE skills SET autocad = '1' WHERE userId ='".$_SESSION['stud_id']."'");
    }



    // Checking Katia
    if (isset($_POST['Katia'])) {
        $katia = '1';
        $fet = mysqli_query($conn,"UPDATE skills SET katia = '1' WHERE userId ='".$_SESSION['stud_id']."'");
    }



    if (isset($_POST['PHP'])) {
        $PHP = '1';
        $fet = mysqli_query($conn,"UPDATE skills SET PHP = '1' WHERE userId ='".$_SESSION['stud_id']."'");
    }


    if (isset($_POST['Video'])) {
        $Video = '1';
        $fet = mysqli_query($conn,"UPDATE skills SET Video = '1' WHERE userId ='".$_SESSION['stud_id']."'");
    }


    if (isset($_POST['CNC'])) {
        $CNC = '1';
        $fet = mysqli_query($conn,"UPDATE skills SET CNC = '1' WHERE userId ='".$_SESSION['stud_id']."'");
    }


    if (isset($_POST['proe'])) {
        $proe = '1';
        $fet = mysqli_query($conn,"UPDATE skills SET proe = '1' WHERE userId ='".$_SESSION['stud_id']."'");
    }


    if (isset($_POST['Hypermesh'])) {
        $Hypermesh = '1';
        $fet = mysqli_query($conn,"UPDATE skills SET Hypermesh = '1' WHERE userId ='".$_SESSION['stud_id']."'");
    }


    if (isset($_POST['KEIL'])) {
        $KEIL = '1';
        $fet = mysqli_query($conn,"UPDATE skills SET KEIL = '1' WHERE userId ='".$_SESSION['stud_id']."'");
    }


    if (isset($_POST['PROTEUS'])) {
        $PROTEUS = '1';
        $fet = mysqli_query($conn,"UPDATE skills SET PROTEUS = '1' WHERE userId ='".$_SESSION['stud_id']."'");
    }


    if (isset($_POST['Maxwell'])) {
        $Maxwell = '1';
        $fet = mysqli_query($conn,"UPDATE skills SET Maxwell = '1' WHERE userId ='".$_SESSION['stud_id']."'");
    }


    if (isset($_POST['FEMM'])) {
        $FEMM = '1';
        $fet = mysqli_query($conn,"UPDATE skills SET FEMM = '1' WHERE userId ='".$_SESSION['stud_id']."'");
    }


    if (isset($_POST['Arduino'])) {
        $Arduino = '1';
        $fet = mysqli_query($conn,"UPDATE skills SET Arduino = '1' WHERE userId ='".$_SESSION['stud_id']."'");
    }


    if (isset($_POST['Rassberry'])) {
        $Rassberry = '1';
        $fet = mysqli_query($conn,"UPDATE skills SET Rassberry = '1' WHERE userId ='".$_SESSION['stud_id']."'");
    }


    if (isset($_POST['high-tech'])) {
        $high_tech = '1';
        $fet = mysqli_query($conn,"UPDATE skills SET high_tech = '1' WHERE userId ='".$_SESSION['stud_id']."'");
    }


    if (isset($_POST['Photography'])) {
        $Photography = '1';
        $fet = mysqli_query($conn,"UPDATE skills SET Photo = '1' WHERE userId ='".$_SESSION['stud_id']."'");
    }

    if (isset($_POST['high-cult'])) {
        $high_cult = '1';
        $fet = mysqli_query($conn,"UPDATE skills SET high_cult = '1' WHERE userId ='".$_SESSION['stud_id']."'");
    }



    // Checking Other
    if (isset($_POST['oOther'])) {
        $other = '1';
        $fet = mysqli_query($conn,"UPDATE skills SET other = '1' WHERE userId ='".$_SESSION['stud_id']."'");
    }



    // Checking act
    if (isset($_POST['act'])) {
        $act = '1';
        $fet = mysqli_query($conn,"UPDATE skills SET acting = '1' WHERE userId ='".$_SESSION['stud_id']."'");
    }



    // Checking dance
    if (isset($_POST['dance'])) {
        $dance = '1';
        $fet = mysqli_query($conn,"UPDATE skills SET dance = '1' WHERE userId ='".$_SESSION['stud_id']."'");
    }



    // Checking Ankering
    if (isset($_POST['Ankering'])) {
        $anker = '1';
        $fet = mysqli_query($conn,"UPDATE skills SET ankering = '1' WHERE userId ='".$_SESSION['stud_id']."'");
    }



    // Checking Singing
    if (isset($_POST['Singing'])) {
        $sing = '1';
        $fet = mysqli_query($conn,"UPDATE skills SET singing = '1' WHERE userId ='".$_SESSION['stud_id']."'");
    }



    // Checking Drama
    if (isset($_POST['Drama'])) {
        $drama = '1';
        $fet = mysqli_query($conn,"UPDATE skills SET drama = '1' WHERE userId ='".$_SESSION['stud_id']."'");
    }



    // Checking Writing
    if (isset($_POST['Writing'])) {
        $writing = '1';
        $fet = mysqli_query($conn,"UPDATE skills SET writing = '1' WHERE userId ='".$_SESSION['stud_id']."'");
    }



    // Checking Poetry
    if (isset($_POST['Poetry'])) {
        $poetry = '1';
        $fet = mysqli_query($conn,"UPDATE skills SET poetry = '1' WHERE userId ='".$_SESSION['stud_id']."'");
    }



    // Checking Drawing
    if (isset($_POST['Drawing'])) {
        $drawing = '1';
        $fet = mysqli_query($conn,"UPDATE skills SET drawing = '1' WHERE userId ='".$_SESSION['stud_id']."'");
    }



    // Checking decoration
    if (isset($_POST['decoration'])) {
        $decoration = '1';
        $fet = mysqli_query($conn,"UPDATE skills SET decoration = '1' WHERE userId ='".$_SESSION['stud_id']."'");
    }



    // Checking Painting
    if (isset($_POST['Painting'])) {
        $paint = '1';
        $fet = mysqli_query($conn,"UPDATE skills SET painting = '1' WHERE userId ='".$_SESSION['stud_id']."'");
    }

    // Checking decoration
    if (isset($_POST['sandart'])) {
        $sandart = '1';
        $fet = mysqli_query($conn,"UPDATE skills SET sandart = '1' WHERE userId ='".$_SESSION['stud_id']."'");
    }



    // Checking Cricket
    if (isset($_POST['Cricket'])) {
        $cricket = '1';
        $fet = mysqli_query($conn,"UPDATE skills SET cricket = '1' WHERE userId ='".$_SESSION['stud_id']."'");
    }



    // Checking Badminton
    if (isset($_POST['Badminton'])) {
        $badminton = '1';
        $fet = mysqli_query($conn,"UPDATE skills SET badminton = '1' WHERE userId ='".$_SESSION['stud_id']."'");
    }



    // Checking Football
    if (isset($_POST['Football'])) {
        $football = '1';
        $fet = mysqli_query($conn,"UPDATE skills SET football = '1' WHERE userId ='".$_SESSION['stud_id']."'");
    }



    // Checking Chess
    if (isset($_POST['Chess'])) {
        $chess = '1';
        $fet = mysqli_query($conn,"UPDATE skills SET chess = '1' WHERE userId ='".$_SESSION['stud_id']."'");
    }

    // Checking basketball
    if (isset($_POST['basketball'])) {
        $basketball = '1';
        $fet = mysqli_query($conn,"UPDATE skills SET basketball = '1' WHERE userId ='".$_SESSION['stud_id']."'");
    }



    // Checking Kabbadi
    if (isset($_POST['Kabbadi'])) {
        $kabbadi = '1';
        $fet = mysqli_query($conn,"UPDATE skills SET kabbadi = '1' WHERE userId ='".$_SESSION['stud_id']."'");
    }



    // Checking Vollyball
    if (isset($_POST['Vollyball'])) {
        $vollyball = '1';
        $fet = mysqli_query($conn,"UPDATE skills SET vollyball = '1' WHERE userId ='".$_SESSION['stud_id']."'");
    }

    if (isset($_POST['high-sports'])) {
        $high_sports = '1';
        $fet = mysqli_query($conn,"UPDATE skills SET high_sports = '1' WHERE userId ='".$_SESSION['stud_id']."'");
    }



    // Checking Leader
    if (isset($_POST['Leader'])) {
        $leader = '1';
        $fet = mysqli_query($conn,"UPDATE skills SET leader = '1' WHERE userId ='".$_SESSION['stud_id']."'");
    }

    // Checking Member
    if (isset($_POST['communication'])) {
        $communication = '1';
        $fet = mysqli_query($conn,"UPDATE skills SET communication = '1' WHERE userId ='".$_SESSION['stud_id']."'");
    }

    // Checking Member
    if (isset($_POST['otherlang'])) {
        $otherlang = '1';
        $fet = mysqli_query($conn,"UPDATE skills SET otherlang = '1' WHERE userId ='".$_SESSION['stud_id']."'");
    }

    if (isset($_POST['SAT'])) {
        $sat = '1';
        $fet = mysqli_query($conn,"UPDATE skills SET sat = '1' WHERE userId ='".$_SESSION['stud_id']."'");
    }

    if (isset($_POST['BAJA'])) {
        $baja = '1';
        $fet = mysqli_query($conn,"UPDATE skills SET baja = '1' WHERE userId ='".$_SESSION['stud_id']."'");
    }

    if (isset($_POST['TNP'])) {
        $tnp = '1';
        $fet = mysqli_query($conn,"UPDATE skills SET tnp = '1' WHERE userId ='".$_SESSION['stud_id']."'");
    }

    if (isset($_POST['E-CELL'])) {
        $ecell = '1';
        $fet = mysqli_query($conn,"UPDATE skills SET ecell = '1' WHERE userId ='".$_SESSION['stud_id']."'");
    }

    if (isset($_POST['Supra'])) {
        $supra = '1';
        $fet = mysqli_query($conn,"UPDATE skills SET supra = '1' WHERE userId ='".$_SESSION['stud_id']."'");
    }

    if (isset($_POST['ROBOCON'])) {
        $robocon = '1';
        $fet = mysqli_query($conn,"UPDATE skills SET robocon = '1' WHERE userId ='".$_SESSION['stud_id']."'");
    }



 ?>
