<?php 
/** Template Name: Student Support */

get_header(); ?>
<?php get_template_part( 'template-parts/content', 'banner' ); ?>
<section>
<?php $loop = CFS()->get( 'subsection' );
    foreach ( $loop as $row ) { ?>
        <div>
            <h3> <?php echo $row['subsection_title']; ?> </h3>
            <p> <?php echo $row['subsection_blurb']; ?> </p> 
        </div> <?php
    }?>
</section>






<!-- Test Area , Andrei -->
<h1>------------------------------</h1>

<div class="student-support-carousel">

<?php $loop = CFS()->get( 'image_gallery' );
    foreach ( $loop as $row ) {
        ?> 

        <div class="carousel-cell" style="background:url(<?php echo $row['image']; ?>); 
        height: 202px; 
        width: 202px;
        margin-left: 1.5rem;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;"  >
        </div>
        <?php
    }?>


</div>

<h1>------------------------------</h1>
<!-- ------------------------ -->


<?php get_footer(); ?>
