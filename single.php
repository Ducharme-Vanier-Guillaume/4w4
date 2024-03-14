<?php
    // Modèle de base index.php
?>
<?php
    get_header();?>
    
    <div id="acceuil" class="global ">
        <section class="accueil__section">
        <h2>Accueil (h2)</h2>
        <div class="section__cours">

            <?php if(have_posts()):
                while(have_posts()): the_post();
                
                $titre = get_the_title();
                
 
                
                
                // strpos()

                ?>
                <div class="carte">
                    <h5><?php the_title() ?></h5> 
                    <p><?php the_content(); ?></p>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
       </div>     
    </section>


    </div>
    <div id="galerie" class="global diagonal">
        <section class="galerie__section">
        <h2>Galerie (h2)</h2>
        <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat inventore eius a nihil minima deleniti perferendis sequi porro corporis commodi, quod sapiente debitis. Ad explicabo, porro cupiditate asperiores consequatur iusto!</h5>
        <div class="liens__galerie">
            <a class="lien" href="https://www.patagonia.ca/home/">Site Patagonia</a>

        </div>
        <div class="images">

        <?php 
            $image1='https://img.freepik.com/photos-premium/sommets-montagne-hiver-illustration-3d-du-paysage-montagnes-couvertes-neige_160901-5829.jpg';
            $image2 = 'https://th.bing.com/th/id/OIG2.LXt4Ooo.p5EUFyuITtV.';
            $image3 = 'https://img.freepik.com/photos-premium/montagnes-refletees-brume_1059430-22636.jpg';
            $image4 = 'https://media.istockphoto.com/id/1089729132/fr/photo/homme-de-randonneur-au-sommet-de-la-montagne-il-sagit-dune-illustration-de-rendu-3d.jpg?s=612x612&w=0&k=20&c=HYZLnEMvX5qZuQNUx0XijR79gJXKvqUUb19j2dQN8RY= ';
        ?>

            <img src="<?php echo $image1;?>">
            <img src="<?php echo $image2;?>">
            <img src="<?php echo $image3;?>">
            <img src="<?php echo $image4;?>">
            
        </div>
        
    </section>


    </div>
    <div id="evenement" class="global">
        <section class="avenement__section">
        <h2>Évenement (h2)</h2>
        <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. A, ullam sequi voluptates facilis necessitatibus quos tempore, magnam voluptate eveniet unde fuga nostrum optio repellat dolorem fugiat deserunt repellendus ad ea?</h6>
        
    </section>
<?php
    get_template_part("gabarit/vague");
?>


    </div>

    <?php
        get_footer()?>
   