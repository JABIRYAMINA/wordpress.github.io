
   <!--cover-->
   <img src="<?php echo get_template_directory_uri(); ?>/images/couverture.jpg" class="couvertures" alt="avatar">
   <article>
         
            <h1 class="bigtitle">Catégories</h1>
        
            <!--description & carte-->
            <div class="container-card">
         
                <div class="card-1">
                <img src="<?php echo get_template_directory_uri(); ?>/images/image-1.jpg" class="imgs">
                  
                    <div class="description">
                        <h3>Comprendre le langage corporel du lapin</h3>
                        <p>Les lapins sont des animaux de compagnie adorables,
                            mais puisque ce sont des animaux qui se font chasser dans la nature,
                            ils peuvent parfois être facilement effrayés et ne pas faire confiance aux humains</p>
                        <button class="button"><a href="<?php the_permalink();?>">Lire la suite</button></a>
                    </div>

                </div>
                <div class="card-2">
                <img src="<?php echo get_template_directory_uri(); ?>/images/image-2.jpg" class="imgs">
                    <div class="description">
                        <h3>Trouver l'âge général d'un lapin</h3>
                        <p>Il n'est malheureusement pas facile de déterminer l'âge d'un lapin
                            et il ne sera jamais possible de le mesurer en termes de date ou de nombre d'années.</p>
                        <button class="btn"><a href="<?php the_permalink();?>">Lire la suite</a></button>
                    </div>
                </div>
                <div class="card-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/image-3.jpg" class="imgs">
                    <div class="description">
                        <h3>Préparer l'habitat du lapin</h3>
                        <p>Un lapin peut être apprivoisé et joueur tout en restant un animal social.
                            Cependant, son entretien demande beaucoup d'efforts.</p>
                        <button class="btn"><a href="<?php the_permalink();?>">Lire la suite</a></button>
                    </div>
                </div>
                <div class="card-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/image-4.jpg" class="imgs">
                    <div class="description">
                        <h3>garder un lapin au chaud</h3>
                        <p>En hiver, il est essentiel de protéger votre lapin et de le garder au
                            chaud.
                            Le froid peut causer des problèmes médicaux tels que le rhume et les infections des voies
                            respiratoires.</p>
                        <button class="button"><a href="<?php the_permalink();?>">Lire la suite</a></button>
                    </div>
                </div>
                <div class="card-5">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/image-5.jpg" class="imgs">
                    <div class="description">
                        <h3>Choisir des jouets pour un lapin</h3>
                        <p>Les lapins sont des animaux sociaux qui adorent jouer avec les gens.
                            il existe de très nombreuses astuces qui vous permettront d'amuser votre animal.</p>
                        <button class="btn"><a href="<?php the_permalink();?>">Lire la suite</a></button>
                    </div>
                </div>
                <div class="card-6">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/image-6.jpg" class="imgs">
                    <div class="description">
                        <h3>préparer une cage pour un lapin</h3>
                        <p>Les lapins peuvent faire d'excellents animaux de compagnie.
                            Cependant, avant de pouvoir ramener un lapin à la maison,
                            vous devez mettre en place un joli habitat qui répondra aux besoins uniques du lapin.</p>
                        <button class="button"><a href="<?php the_permalink();?>">Lire la suite</a></button>
                    </div>
                </div>
                <div class="card-7">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/image-7.jpg" class="imgs">
                    <div class="description">
                        <h3>Identifier les maladies</h3>
                        <p>Les lapins ont naturellement tendance à cacher leurs maladies et, pour
                            garder votre
                            compagnon en bonne santé,
                            vous devez être attentif aux signes d'affections. </p>
                        <button class="btn"><a href="<?php the_permalink();?>">Lire la suite</a></button>
                    </div>
                </div>
                <div class="card-8">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/image-8.jpg" class="imgs">
                    <div class="description">
                        <h3>Préparer l’arrivée des bébés lapins</h3>
                        <p>Si votre lapin attend des petits, il y a différentes mesures que vous
                            pouvez prendre pour
                            la préparer à la mise bas,pour aménager sa cage et pour garantir le bienêtre des lapereaux.
                        </p>
                        <button class="button"><a href="<?php the_permalink();?>">Lire la suite</a></button>
                    </div>
                </div>
                <div class="card-9">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/image-9.jpg" class="imgs">
                    <div class="description">
                        <h3>Nourrir le lapin</h3>
                        <p>Votre lapin domestique mérite de recevoir une alimentation saine
                            et équilibrée composée d'un mélange de foin, de granulés et de légumes frais</p>
                        
                            <?php

the_excerpt();


?>
                            <button class="btn"><a href="<?php the_permalink();?>">Lire la suite</a></button>

                    </div>
 
                </div>
            </div>

</article>

