<?php require('header.php'); ?>

<?php $title = 'Horsehead' ?>
<?php $description = 'bl bla' ?>



<?php $id = $_GET['id']; ?>
<?php $query = $mysqli->query("SELECT * FROM foto WHERE id_foto = '$id'"); ?>
<?php $array = $query->fetch_array(); ?>

<main>
    <section>
        <div class="page-hero">
            <div class="content center">
                <h1><?php echo $array['nome']; ?></h1>
                <span class="line-h1"></span>
                <span class="page"><a href="index.php" title="home">Home</a> / <?php echo $array['nome']; ?></span>
            </div> <!-- end center -->
        </div> <!-- end page-hero -->
    </section>

    <section class="prova" style=" background-color: var(--background_light) ">
        <div class="content spacer">
            <div class="flex-img-page">
                <div class="col-6">
                    <figure>
                        <img src="img/page-img/<?php echo $array['page-img'] ?>" alt="<?php echo $array['nome']; ?>" width="<?php if ($array['orientamento'] == 'verticale') {echo '400';} elseif ($array['orientamento'] == 'quadrata') {echo '450';} else {echo '570'; }?>" height="<?php if ($array['orientamento'] == 'verticale') {echo '570';} elseif ($array['orientamento'] == 'quadrata') {echo '400';} else {echo '380'; }?>">
                    </figure>
                    
                </div> <!-- enc col-6 -->
                <div class="col-6 center-col">
                    <div class="text">
                        <h2><?php echo $array['nome']; ?></h2>
                        <div class="line-s"></div>
                        <p><span class="tb">Exposure: </span><?php echo $array['esposizione']; ?></p>
                        <div class="block-10"></div>
                        <p><span class="tb"> Shots: </span><?php echo $array['numero_scatti']; ?></p>
                        <div class="block-10"></div>
                        <p><span class="tb">Single exposure: </span><?php echo $array['singola_esposizione']; ?></p>
                        <div class="block-10"></div>
                        <p><span class="tb">Data: </span><?php echo $array['data']; ?></p>
                        <div class="block-10"></div>
                        <p><span class="tb">Location: </span><?php echo $array['location']; ?></p>
                        <div class="block-20"></div>
                        <span><a href="img/full/<?php echo $array['orizzontale-img']; ?>" 
                        class="button" download="Horsehead" style="margin-right: 10px;">Download Full</a></span>
                        <span><a href="img/vertical/<?php echo $array['verticale-img']; ?>" 
                        class="button" download="Horsehead">Download Vertical</a></span>
                    </div>

                </div>
            </div> <!-- end flex -->
        </div> <!-- end content -->
    </section>
</main>

<?php require('footer.php'); ?>