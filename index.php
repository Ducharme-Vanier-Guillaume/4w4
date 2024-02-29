<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/normalize.css';?>" >
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/style.css';?>" >
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

</head>
<body>
    <div id="entete" class="global">
        <header class="entete__header">
        <h1>Thème du groupe #2 (h1)</h1>
        <h2>4W4 - Conception interface <span> & développement Web</span>
            </h2>
        <h3>Tim - Collège de Maisonneuve</h3>
        <button class="entete__button">Évènements</button>
        <link rel="stylesheet" href="style.css">
         </header>
         <div class="vague">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" style="fill:var(--couleur-arriere-acceuil)"></path>
            </svg>
        </div>

    </div>
    <div id="acceuil" class="global ">
        <section class="accueil__section">
        <h2>Accueil (h2)</h2>
        <div class="section__cours">
        
            <!-- // if(have_posts()){
            //     while(have_posts()){
            //         the_post();
            //         the_title('<p>', '<p>');
                    
            //         $contenu = get_the_content();
            //         $contenu = wp_trim_words($contenu, 10);
            //         echo $contenu;
            //     }
            // } -->
            
            <?php if(have_posts()):
                while(have_posts()): the_post();
                
                $titre = get_the_title();
                $sigle = substr($titre,0, 7);
                $heures = substr($titre, -6);
                $titre = substr($titre,7, -6);  
                
                
                // strpos()

                ?>
                <div class="carte">
                    <h5><?php echo $sigle; ?></h5>
                    <h5><?php echo $titre; ?></h5> 
                    <h5><?php echo $heures; ?></h5> 
      
              <p><?php echo wp_trim_words(get_the_content(), 30); ?></p>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
       </div>
        <!-- <p>Notre site internet pour le cours de 4w4</p>
        <blockquote class="citation" cite="https://www.huxley.net/bnw/four.html">
            <p>“Surprenez-vous tous les jours avec votre propre courage.”</p>
            <footer>—Denholm Elliott, <cite>Brave New World</cite></footer> 
         </blockquote> -->
          
     
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
    <div class="vague">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" style="fill:var(--couleur-arriere-footer)"></path>
        </svg>
    </div>


    </div>
    <div id="footer" class="global">
        <footer class="footer__section">
            <h2>Footer (h2)</h2>
            <a class="lien" href="https://www.mec.ca/fr?gad_source=1&gclid=EAIaIQobChMI3ObDo_W_hAMV8jbUAR2Xxw2kEAAYASAAEgIyzfD_BwE">Lien interresant</a>
            <form class="recherche" action="">
                <input class="recherche__input" type="search" name="" id="" placeholder="Rechercher">
                <button class="recherche__button"><!-- Please refer: https://github.com/shubhamjain/svg-loader -->
                    <svg width="32px" height="32px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" color="#000000"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg></button>
            </form>
            <div class="sociaux">

                <a href="#"><svg width="32px" height="32px" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" color="#000000"><title>YouTube icon</title><path d="M23.495 6.205a3.007 3.007 0 0 0-2.088-2.088c-1.87-.501-9.396-.501-9.396-.501s-7.507-.01-9.396.501A3.007 3.007 0 0 0 .527 6.205a31.247 31.247 0 0 0-.522 5.805 31.247 31.247 0 0 0 .522 5.783 3.007 3.007 0 0 0 2.088 2.088c1.868.502 9.396.502 9.396.502s7.506 0 9.396-.502a3.007 3.007 0 0 0 2.088-2.088 31.247 31.247 0 0 0 .5-5.783 31.247 31.247 0 0 0-.5-5.805zM9.609 15.601V8.408l6.264 3.602z"></path></svg></a>
                <a href="#"><svg width="32px" height="32px" role="img" viewBox="0 0 24 24" fill="currentColor" color="#000000" xmlns="http://www.w3.org/2000/svg"><title>WordPress icon</title><path d="M21.469 6.825c.84 1.537 1.318 3.3 1.318 5.175 0 3.979-2.156 7.456-5.363 9.325l3.295-9.527c.615-1.54.82-2.771.82-3.864 0-.405-.026-.78-.07-1.11m-7.981.105c.647-.03 1.232-.105 1.232-.105.582-.075.514-.93-.067-.899 0 0-1.755.135-2.88.135-1.064 0-2.85-.15-2.85-.15-.585-.03-.661.855-.075.885 0 0 .54.061 1.125.09l1.68 4.605-2.37 7.08L5.354 6.9c.649-.03 1.234-.1 1.234-.1.585-.075.516-.93-.065-.896 0 0-1.746.138-2.874.138-.2 0-.438-.008-.69-.015C4.911 3.15 8.235 1.215 12 1.215c2.809 0 5.365 1.072 7.286 2.833-.046-.003-.091-.009-.141-.009-1.06 0-1.812.923-1.812 1.914 0 .89.513 1.643 1.06 2.531.411.72.89 1.643.89 2.977 0 .915-.354 1.994-.821 3.479l-1.075 3.585-3.9-11.61.001.014zM12 22.784c-1.059 0-2.081-.153-3.048-.437l3.237-9.406 3.315 9.087c.024.053.05.101.078.149-1.12.393-2.325.609-3.582.609M1.211 12c0-1.564.336-3.05.935-4.39L7.29 21.709C3.694 19.96 1.212 16.271 1.211 12M12 0C5.385 0 0 5.385 0 12s5.385 12 12 12 12-5.385 12-12S18.615 0 12 0"></path></svg></a>
                <a href="#"><svg width="32px" height="32px" role="img" viewBox="0 0 24 24" fill="currentColor" color="#000000" xmlns="http://www.w3.org/2000/svg"><title>GitHub icon</title><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"></path></svg></a>
                <a href="#"><svg width="32px" height="32px" role="img" viewBox="0 0 24 24" fill="currentColor" color="#000000" xmlns="http://www.w3.org/2000/svg"><title>Instagram icon</title><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"></path></svg></a>
            </div>
        </footer>

    </div>
</body>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Prompt:wght@500&display=swap');
  </style>
</html>