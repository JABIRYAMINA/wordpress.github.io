<?php get_header();?>



<main class="milieu">

<?php 
if(have_posts() ){
    while(have_posts() ) {
        the_post();
        the_content();
     
    }

}
?>
<img name="slide" class="slider">

    <h1>Les bonnes sulutions et astuces our vos lapin restent en bonnes santé</h1>

   

    <h2 class="h2">Les derniers articles</h2>
    <div class="cards">

        <div class="card-a">
            <h3>Comment faire la toilette à un lapin</h3>
            <p>Les lapins ont besoin d'une toilette régulière.
                Vous devez brosser la fourrure de votre lapin tous les trois ou quatre jours
                afin d'enlever les poils qui sont tombés et d'empêcher des boules de poils de se former. </p>
                <a href="<?php the_permalink();?>">Lire la suite</a>
        </div>
        <div class="card-b">
            <h3>Comment apprivoiser un lapin</h3>
            <p>Les lapins sont des animaux de compagnie très appréciés.
                Ils sont câlins et peuvent devenir très amicaux.
                Ne vous découragez pas si votre lapin a peur ou se méfie de vous.</p>
            <a href="<?php the_permalink();?>">Lire la suite</a>

        </div>
        <?php get_template_part('includes/section','content');?>
    </div>

</main>

    <?php get_footer();?>

