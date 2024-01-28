    <?php $title = 'Home'; ?>
    <?php require('header.php'); ?>

    <main>

        <?php require('templates/hero-section.php'); ?>

        <section id="photos" style="background-color: var(--background_dark);">
            <div class="content spacer portfolio">
                <h2 class="center">Photos</h2>
                <div class="line"></div>
                <h3 class="center">My works</h3>
                <div class="block-40"></div>
                <div class="flex-portfolio">

                <?php $query = $mysqli->query("SELECT * FROM foto"); ?>
                <?php while($array = $query->fetch_array()) : ?>

                    <div class="col-4">
                        <figure>
                            <a href="page.php?id=<?php echo $array['id_foto']; ?>" title="<?php echo $array['nome']; ?>"><img src="img/<?php echo $array['foto']; ?>" alt="<?php echo $array['nome']; ?>" width="373" height="373"></a>
                        </figure>
                    </div> <!-- end col-4 -->

                    <?php endwhile; ?>
                </div> <!-- end flex-portfolio -->
            </div> <!-- end content -->
        </section>

        <section id="about" style="background-color: var(--background_light);">
            <div class="content spacer">
                <div class="flex-about">
                    <div class="col-6 p20">
                        <h2>About me</h2>
                        <div class="line"></div>
                        <h3>Alberto Ancilotto</h3>
                        <div class="block-20"></div>
                        <p>Almost <span class="tb">astrophotographer</span>, based in Trento, <span class="tb">Italy</span>. Definitely not Hubble. Sometimes
                            <span class="tb">I like to take my telescope out to my garden</span>. Sometimes the pictures I take don't suck too bad. For
                            those occasions, there is this website.
                        </p>
                        <div class="block-20"></div>
                    </div> <!-- end col-6 -->
                    <div class="col-6 p20">
                        <h2>Equipment</h2>
                        <div class="line"></div>
                        <h3>My gear</h3>
                        <div class="block-20"></div>
                        <p><span class="tb">Main scope:</span> Omegon pro 153/750</p>
                        <p><span class="tb">Guide scope:</span> OTD 80/400</p>
                        <p><span class="tb">Imaging capture:</span> Canon 1000D</p>
                        <p><span class="tb">Guide camera:</span> Omegon proguide 1200C</p>
                        <p><span class="tb">Mount:</span> Skywatcher HEQ5</p>
                    </div> <!-- end col-6 -->
                </div> <!-- end flex -->
            </div> <!-- end content -->
        </section>
    </main>



    <?php require('footer.php'); ?>