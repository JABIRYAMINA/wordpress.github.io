<?php 


?>
<?php get_header();?>

<img src="<?php echo get_template_directory_uri(); ?>/images/view-2.jpg" class="image-3">
            <h1 class="contacts">Contactez nous</h1>
  
            <div class="contact">
        <label>Votre Nom et Prénom</label>
            <input type="text" placeholder="Nom et prénom" class="name">
            <label  class="position">Votre E-mail</label>
            <input type="email" placeholder="E-mail" class="email">
        </div> 
            <div class="message">
                <label>Votre message</label>
                <textarea placeholder="Message" rows="10" cols="68"></textarea></div>
        </div>
    
        <button class="send">Send</button>
    </main>



<?php get_template_part('includes/section','content');?>


    <?php get_footer();?>