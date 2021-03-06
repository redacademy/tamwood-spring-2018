<?php 

get_header();

 ?>

        
<div class="instructors-carousel">

<?php $loop = CFS()->get( 'instructors' );
    foreach ( $loop as $row ) {
        ?> 
        <div class="instructor-area">
            <div class="instructor-image" style="background:url(<?php echo esc_url($row['instructor_image']); ?>); 
            height: 268px; 
            width: 240px;
            z-index: 10;
            
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;"  >
            </div>

            <div class="instructor-bio">
                <h2 class="instructor-name"><?php echo $row['instructor_name']; ?></h3>
                <h3 class="instructor-position"><?php echo $row['instructor_position']; ?></h4>
               
               <?php echo wp_kses( $row['instructor_info'], array( 'p' => array( 'class' => '' ) ) ); ?>
               
               <a class="learn-more" id="instructor-learn-more" href="#">Learn More</a>

            </div>
        </div>
        <?php   
    }?>
</div>
<?php get_footer(); ?>