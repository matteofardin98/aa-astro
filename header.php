<?php require('inc/db-config.php'); ?>
<!DOCTYPE html>
<html lang="it-IT">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php $id = $_GET['id']; ?>
    <?php $query = $mysqli->query("SELECT * FROM foto WHERE id_foto = '$id'"); ?>
    <?php $array = $query->fetch_array(); ?>

    <title><?php if ($query->num_rows > 0) {
                echo $array['nome'];
            } else {
                echo 'Home';
            } ?></title>
    <meta name="description" content="<?php if ($query->num_rows > 0) {
                                            echo $array['descrizione'];
                                        } else {
                                            echo 'My homepage';
                                        } ?>">
    <meta name="author" content="Matteo Fardin">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="icon" href="img/favicon.png">
</head>

<body id="top">

    <header>
        <div class="content">
            <div class="header">
                <span class="logo">
                    <a href="index.php" title="AA-astro"><span class="color-primary">a</span><span class="color-primary">a</span>-astro</a></span>

                <nav>
                    <ul>
                        <li class="<?php if ($query->num_rows > 0) {
                                        echo '';
                                    } else {
                                        echo 'current-menu-item';
                                    }
                                    ?>"><a href="index.php" title="Home">Home</a></li>

                        <?php if ($query->num_rows > 0) : ?>
                            <li class="current-menu-item" style="padding-right: 0;"><a href="#about" title="About"><?php echo $array['nome']; ?></a></li>
                        <?php else: ?>

                        <li><a href="#photos" title="Photos">Photos</a></li>
                        <li><a href="#about" title="About">About</a></li>
                        <li style="padding-right: 0;"><a href="#about" title="About">Equipment</a></li>

                        <?php endif; ?>
                    </ul>
                </nav> <!-- end nav -->

                <!-- Burger -->
                <div class="burger-menu" id="burgerMenu">
                    <div class="burger-line"></div>
                    <div class="burger-line"></div>
                    <div class="burger-line"></div>
                </div>

            </div> <!-- end-header -->
        </div> <!-- end-content -->
    </header>

