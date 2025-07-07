<?php
/**
 * Template Name: Dog Toy Landing Page
 */
get_header();
?>

<style>
.dog-toy-hero {text-align:center; padding:50px 0; color:#fff; background-size:cover; background-position:center;}
.dog-toy-hero .cta-button {display:inline-block; margin:20px auto; padding:15px 30px; background:#ff5733; color:#fff; text-decoration:none; border-radius:5px;}
section {padding:40px 20px;}
#avis {background:#f9f9f9;}
footer {background:#333; color:#fff; padding:20px; text-align:center;}
footer a {color:#fff;}
</style>

<div class="dog-toy-hero" style="background-image:url('<?php echo esc_url( get_theme_file_uri('/images/dog-toy-hero.jpg') ); ?>');">
    <h1>Le jouet pour chien idéal</h1>
    <p>Faites plaisir à votre compagnon avec un jouet pour chien durable et amusant.</p>
    <a class="cta-button" href="#commande">Commandez maintenant</a>
</div>

<section id="features">
    <h2>Pourquoi choisir notre jouet pour chien durable ?</h2>
    <ul>
        <li>Résistant aux morsures les plus fortes</li>
        <li>Sans danger pour la santé de votre animal</li>
        <li>Des heures de jeu assurées</li>
    </ul>
</section>

<section id="avis">
    <h2>Avis de nos clients satisfaits</h2>
    <?php echo do_shortcode('[testimonials]'); ?>
</section>

<section id="faq">
    <h2>FAQ</h2>
    <h3>Est-ce que ce jouet convient aux chiots ?</h3>
    <p>Oui, notre jouet pour chien durable est conçu pour toutes les tailles et âges.</p>
    <h3>Livrez-vous à l'étranger ?</h3>
    <p>Nous livrons dans le monde entier.</p>
</section>

<section id="commande" style="text-align:center;">
    <h2>Prêt à faire plaisir à votre chien ?</h2>
    <a class="cta-button" href="/checkout">Achetez maintenant</a>
</section>

<footer>
    <p>© <?php echo date('Y'); ?> Jouets pour chien - Tous droits réservés.</p>
    <a href="/politique-de-confidentialite">Politique de confidentialité</a>
</footer>

<?php
get_footer();
