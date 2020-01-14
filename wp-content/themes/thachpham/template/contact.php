<?php 
/*
    Template Name: Contact
*/
?>
<?php get_header(); ?>
<div class="content">
        <div id="main-content">
            <div class="contact-info">
                <h4>Địa Chỉ Liên Hệ</h4>
                <p>kungsgatan 13 LGH 1202,64130 Katrineholm. Sweden</p>
                <p>076.227374</p>
            </div>
            <div class="contact-info">
                <?php echo  do_shortcode('[contact-form-7 id="1540" title="Contact form 1"]'); ?>
            </div>
    </div>
    <div id="sidebar">
        <?php get_sidebar(); ?>
    </div>
    </div>
<?php get_footer(); ?>