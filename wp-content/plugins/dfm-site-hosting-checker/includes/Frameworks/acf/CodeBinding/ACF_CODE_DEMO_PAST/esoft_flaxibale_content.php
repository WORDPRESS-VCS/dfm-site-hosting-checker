<?php

/**
 * Template Name:Esoft Home Flexible Content
 *
 * @package WordPress
 */
/**
 * @Author: Xplantr Ltd.
 * @Date:   2019-08-26 01:25:03
 * @Last Modified by:   khalifalmahmud
 * @Last Modified time: 2019-09-01 06:52:19
 */

get_header();
// check if the flexible content field has rows of data
if (have_rows('esoft_home_flexible_content')) {
    // loop through the rows of data
    while (have_rows('esoft_home_flexible_content')) {
        the_row();



        // :SLIDER SECTION START::
        if (get_row_layout() == 'slider_section' and get_sub_field('visibility_slider') == '1') {
            $menuIdSlider = get_sub_field('slider_section_menu_id');
?>

            <div class="heroBnr" id="<?php echo $menuIdSlider; ?>">
                <div class="heroCarousel">
                    <amp-carousel width="1280" height="851" layout="responsive" type="slides" autoplay delay="4000">
                        <?php
                        if (have_rows('slider_images')) {
                            while (have_rows('slider_images')) {
                                the_row();
                        ?>
                                <div class="slideBox">
                                    <amp-img width="1280" height="851" src="<?php the_sub_field('slider_image'); ?>" layout="responsive" alt=""></amp-img>
                                    <div class="bnrTxt">
                                        <h2><span><?php
                                                    the_sub_field('title');
                                                    ?></span></h2>
                                        <?php
                                        the_sub_field('subtitle');
                                        ?>
                                        <?php
                                        if (have_rows('button_about')) {
                                            while (have_rows('button_about')) {
                                                the_row();
                                                $button_name = get_sub_field('button_name');
                                                $button_url = get_sub_field('button_url');
                                                $button_background_color = get_sub_field('button_color');
                                                $button_text_color = get_sub_field('button_text_color');
                                        ?>
                                                <a class="bnrBtn bnrBtn1" href="<?php echo $button_url; ?>" style=" background-color:<?php echo $button_background_color ?> !important; color:<?php echo $button_text_color ?> !important ;">
                                                    <?php
                                                    echo strtoupper($button_name);
                                                    ?>
                                                </a>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                        <?php
                            }
                        }
                        ?>
                    </amp-carousel>
                </div>
            </div>
        <?php
        }




        // :client_section START::
        if (get_row_layout() == 'client_section' and get_sub_field('visibility_client') == '1') {

            $menuId0 = get_sub_field('client_section_menu_id');
            if (have_rows('client_section_background')) {
                while (have_rows('client_section_background')) {
                    the_row();
                    $background_type_choose0 = get_sub_field('client_section_choose_background');
                    if ($background_type_choose0 == 'Image') {
                        $background0 = get_sub_field('client_section_background_image');
                        $background_image0 = $background0['client_section_background_image'];
                        $background_image_style0 = $background0['client_section_image_style'];
                        $background_image_size0 = $background0['client_section_background_size'];
                        $background_image_repeation0 = $background0['client_section_background_repeat'];
                    } else {
                        $background_color0 = get_sub_field('client_section_background_color');
                    }
                }
            }
        ?>
            <style type="text/css">
                .clientsID {
                    background-color: <?php
                                        echo $background_color0;
                                        ?> !important;
                    background-image: url(<?php
                                            echo $background_image0;
                                            ?>) !important;
                    background-attachment: <?php
                                            echo $background_image_style0;
                                            ?> !important;
                    background-size: <?php
                                        echo $background_image_size0;
                                        ?> !important;
                    background-repeat: <?php
                                        echo $background_image_repeation0;
                                        ?> !important;
                }
            </style>
            <section class="clients clientsID" id="<?php
                                                    echo $menuId0;
                                                    ?>">
                <div class="container">
                    <div class="row">
                        <?php
                        if (have_rows('client_content')) {
                            while (have_rows('client_content')) {
                                the_row();
                                $clientImageSize = get_sub_field('client_images');
                                $image_attributes = wp_get_attachment_image_src($clientImageSize, 'full');


                        ?>
                                <div class="client-col">
                                    <div class="clientImg">
                                        <?php
                                        if ($image_attributes) {
                                        ?>
                                            <amp-img width="<?php echo $image_attributes[1]; ?>" height="<?php echo $image_attributes[2]; ?>" src="<?php echo $image_attributes[0]; ?>" layout="responsive" alt=""></amp-img>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </section>
        <?php
        }




        // :features_section START::
        if (get_row_layout() == 'features_section' and get_sub_field('visibility_features') == '1') {

            $menuId1 = get_sub_field('features_section_menu_id');

            if (have_rows('client_section_background_copy')) {
                while (have_rows('client_section_background_copy')) {
                    the_row();
                    $background_type_choose1 = get_sub_field('client_section_choose_background');
                    if ($background_type_choose1 == 'Image') {
                        $background1 = get_sub_field('client_section_background_image');
                        $background_image1 = $background1['client_section_background_image'];
                        $background_image_style1 = $background1['client_section_image_style'];
                        $background_image_size1 = $background1['client_section_background_size'];
                        $background_image_repeation1 = $background1['client_section_background_repeat'];
                    } else {
                        $background_color1 = get_sub_field('client_section_background_color');
                    }
                }
            }
        ?>
            <style type="text/css">
                .featuresID {
                    background-color: <?php
                                        echo $background_color1;
                                        ?> !important;
                    background-image: url(<?php
                                            echo $background_image1;
                                            ?>) !important;
                    background-attachment: <?php
                                            echo $background_image_style1;
                                            ?> !important;
                    background-size: <?php
                                        echo $background_image_size1;
                                        ?> !important;
                    background-repeat: <?php
                                        echo $background_image_repeation1;
                                        ?> !important;
                }
            </style>
            <?php
            if (have_rows('features_section_content')) {
                while (have_rows('features_section_content')) {
                    the_row();
                    $sub_title = get_sub_field('sub_title');
                    $title = get_sub_field('title');
            ?>
                    <section id="<?php
                                    echo $menuId1;
                                    ?>" class="features featuresID">
                        <div class="container">
                            <div class="section-title-area">
                                <h5><?php
                                    echo $sub_title;
                                    ?></h5>
                                <h2 class="section-title"><?php
                                                            echo $title;
                                                            ?></h2>
                            </div>
                            <div class="section-content">
                                <div class="row">
                                    <?php
                                    if (have_rows('add_features')) {
                                        while (have_rows('add_features')) {
                                            the_row();
                                            $add_icon = get_sub_field('add_icon');
                                            $icon_color = get_sub_field('icon_color');
                                            $icon_background_color = get_sub_field('icon_background_color');
                                            $icon_background_hover_color = get_sub_field('icon_background_hover_color');
                                            $title = get_sub_field('title');
                                            $description = get_sub_field('description');
                                    ?>
                                            <div class="feature-item col-md-3 col-sm-6">
                                                <div class="feature-media">
                                                    <amp-img width="135" height="135" src="<?php bloginfo('template_url'); ?>/assetes/img/fa-laptop.png" layout="intrinsic" alt=""></amp-img>
                                                </div>
                                                <h4><?php echo $title; ?></h4>
                                                <?php echo $description; ?>
                                            </div>
                                            <style type="text/css">
                                                .feature-item .feature-icon {
                                                    color: <?php
                                                            echo $icon_color;
                                                            ?>;
                                                }

                                                .icon-background-default {
                                                    color: <?php
                                                            echo $icon_background_color;
                                                            ?>;
                                                }

                                                .feature-item:hover .icon-background-default {
                                                    color: <?php
                                                            echo $icon_background_hover_color;
                                                            ?>;
                                                }
                                            </style>
                                    <?php
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </section>
            <?php
                }
            }
            ?>
        <?php
        }



        // :about_us_section START::
        if (get_row_layout() == 'about_us_section' and get_sub_field('visibility_about') == '1') {
            $menuId2 = get_sub_field('about_us_section_menu_id');
            if (have_rows('client_section_background_copy2')) {
                while (have_rows('client_section_background_copy2')) {
                    the_row();
                    $background_type_choose2 = get_sub_field('client_section_choose_background');
                    if ($background_type_choose2 == 'Image') {
                        $background2 = get_sub_field('client_section_background_image');
                        $background_image2 = $background2['client_section_background_image'];
                        $background_image_style2 = $background2['client_section_image_style'];
                        $background_image_size2 = $background2['client_section_background_size'];
                        $background_image_repeation2 = $background2['client_section_background_repeat'];
                    } else {
                        $background_color2 = get_sub_field('client_section_background_color');
                    }
                }
            }
        ?>
            <style type="text/css">
                .aboutSecID {
                    background-color: <?php
                                        echo $background_color2;
                                        ?> !important;
                    background-image: url(<?php
                                            echo $background_image2;
                                            ?>) !important;
                    background-attachment: <?php
                                            echo $background_image_style2;
                                            ?> !important;
                    background-size: <?php
                                        echo $background_image_size2;
                                        ?> !important;
                    background-repeat: <?php
                                        echo $background_image_repeation2;
                                        ?> !important;
                }
            </style>
            <?php
            if (have_rows('about_us_section_content')) {
                while (have_rows('about_us_section_content')) {
                    the_row();
                    $sub_title = get_sub_field('sub_title');
                    $title = get_sub_field('title');
            ?>
                    <section id="<?php
                                    echo $menuId2;
                                    ?>" class="aboutSec aboutSecID">
                        <div class="container">
                            <div class="section-title-area">
                                <h5 class="section-subtitle"><?php
                                                                echo $sub_title;
                                                                ?></h5>
                                <h2 class="section-title"><?php
                                                            echo $title;
                                                            ?></h2>
                            </div>
                            <div class="row">
                                <?php
                                if (have_rows('content_one')) {
                                    while (have_rows('content_one')) {
                                        the_row();
                                        $about_image = get_sub_field('about_image');
                                        $about_title = get_sub_field('title');
                                        $about_title_url = get_sub_field('title_url');
                                        $about_content = get_sub_field('content');
                                ?>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="about-image">
                                                <a href="#">
                                                    <amp-img width="640" height="350" src="<?php
                                                                                            echo $about_image;
                                                                                            ?>" layout="responsive" alt=""></amp-img>
                                                </a>
                                            </div>
                                            <h3><a href="<?php
                                                            echo $about_title_url;
                                                            ?>"><?php
                                                    echo $about_title;
                                                    ?></a></h3>
                                            <p><?php
                                                echo $about_content;
                                                ?></p>
                                        </div>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </section>
            <?php
                }
            }
            ?>
        <?php
        }




        // :video_section START::
        if (get_row_layout() == 'video_section' and get_sub_field('visibility_video') == '1') {
            $menuId3 = get_sub_field('video_section_menu_id');
            if (have_rows('client_section_background_copy3')) {
                while (have_rows('client_section_background_copy3')) {
                    the_row();
                    $background_type_choose3 = get_sub_field('client_section_choose_background');
                    if ($background_type_choose3 == 'Image') {
                        $background3 = get_sub_field('client_section_background_image');
                        $background_image3 = $background3['client_section_background_image'];
                        $background_image_style3 = $background3['client_section_image_style'];
                        $background_image_size3 = $background3['client_section_background_size'];
                        $background_image_repeation3 = $background3['client_section_background_repeat'];
                    } else {
                        $background_color3 = get_sub_field('client_section_background_color');
                    }
                }
            }
        ?>
            <style type="text/css">
                .videoBoxID {
                    background-color: <?php
                                        echo $background_color3;
                                        ?> !important;
                    background-image: url(<?php
                                            echo $background_image3;
                                            ?>) !important;
                    background-attachment: <?php
                                            echo $background_image_style3;
                                            ?> !important;
                    background-size: <?php
                                        echo $background_image_size3;
                                        ?> !important;
                    background-repeat: <?php
                                        echo $background_image_repeation3;
                                        ?> !important;
                }
            </style>
            <?php
            $video_content = get_sub_field('video_section_content');
            $video_content_title = $video_content['title'];
            $video_content_Icon = $video_content['video_icon'];
            $video_content_url = $video_content['video_url'];

            //Youtube Video Url to ID

            $youtube_id = getYouTubeIdFromURL($video_content_url);

            ?>
            <section class="videoBox videoBoxID" id="<?php
                                                        echo $menuId3;
                                                        ?>">
                <div class="container">
                    <a class="playBtn" on="tap:vdoPopup" role="button" tabindex="0">&nbsp;</a>
                    <amp-lightbox id="vdoPopup" class="overlay" layout="nodisplay">
                        <div class="youtubeVideo">
                            <a class="closeBtn" on="tap:vdoPopup.close" role="button" tabindex="0">×</a>
                            <amp-youtube width="900" height="506" layout="responsive" data-videoid="<?php echo $youtube_id; ?>"></amp-youtube>
                        </div>
                    </amp-lightbox>
                    <h2><?php
                        echo $video_content_title;
                        ?></h2>
                </div>
            </section>
        <?php
        }



        // :gallery_section START::
        if (get_row_layout() == 'gallery_section' and get_sub_field('visibility_gallery') == '1') {
            $menuID4 = get_sub_field('gallery_section_menu_id');


            if (have_rows('client_section_background_copy4')) {
                while (have_rows('client_section_background_copy4')) {
                    the_row();
                    $background_type_choose4 = get_sub_field('client_section_choose_background');
                    if ($background_type_choose4 == 'Image') {
                        $background4 = get_sub_field('client_section_background_image');
                        $background_image4 = $background4['client_section_background_image'];
                        $background_image_style4 = $background4['client_section_image_style'];
                        $background_image_size4 = $background4['client_section_background_size'];
                        $background_image_repeation4 = $background4['client_section_background_repeat'];
                    } else {
                        $background_color4 = get_sub_field('client_section_background_color');
                    }
                }
            }


        ?>
            <style type="text/css">
                .galleryid {
                    background-color: <?php
                                        echo $background_color4;
                                        ?> !important;
                    background-image: url(<?php
                                            echo $background_image4;
                                            ?>) !important;
                    background-attachment: <?php
                                            echo $background_image_style4;
                                            ?> !important;
                    background-size: <?php
                                        echo $background_image_size4;
                                        ?> !important;
                    background-repeat: <?php
                                        echo $background_image_repeation4;
                                        ?> !important;
                }
            </style>
            <?php
            if (have_rows('gallery_content')) {
                while (have_rows('gallery_content')) {
                    the_row();
                    $sub_title = get_sub_field('gallery_sub_title');
                    $title = get_sub_field('gallery_title');
                    $ga_description = get_sub_field('ga_description');
            ?>
                    <section class="gallery galleryid" id="<?php
                                                            echo $menuID4;
                                                            ?>">
                        <div class="container">
                            <div class="section-title-area">
                                <h5 class="section-subtitle"><?php
                                                                echo $sub_title;
                                                                ?></h5>
                                <h2 class="section-title"><?php
                                                            echo $title;
                                                            ?></h2>
                                <div class="section-desc"><?php
                                                            echo $ga_description;
                                                            ?></div>
                            </div>
                        </div>
                        <div class="gallerySlide">
                            <amp-carousel height="289" layout="fixed-height" type="carousel">
                                <?php
                                if (have_rows('gallery_images')) {
                                    $i = 1;
                                    while (have_rows('gallery_images')) {
                                        the_row();
                                        $gallery_image_url = get_sub_field('ga_ga_images');
                                ?>



                                        <?php
                                        // 		  Category image


                                        $cat_terms = get_terms(array(
                                            'taxonomy' => 'projectsSkills',
                                            'hide_empty' => false,
                                        ));
                                        foreach ($cat_terms as $value) {
                                            $categoryname = $value->name;
                                            $term_id = $value->term_id;
                                            $categorylink = get_term_link($value, 'projectsSkills');

                                            $cat_image_url = get_field('skills_image', 'term_' . $term_id);

                                            $cat_url = $cat_image_url['url'];

                                        ?>

                                            <div class="item">
                                                <a class="popBtn" href="<?php echo $categorylink; ?>" role="button" tabindex="0">
                                                    <amp-img width="150" height="150" layout="responsive" src="<?php
                                                                                                                echo wp_get_attachment_image_url($cat_image_url['id'], 'esoftArena_gallery');
                                                                                                                ?>" alt=""></amp-img>
                                                </a>



                                            </div>
                                        <?php
                                        }
                                        ?>


                                <?php
                                        $i++;
                                    }
                                }
                                ?>
                            </amp-carousel>
                        </div>
                    </section>
            <?php
                }
            }
            ?>
        <?php
        }




        // :services_section START::
        if (get_row_layout() == 'services_section' and get_sub_field('visibility_services') == '1') {
            $menuId5 = get_sub_field('services_section_menu_id');


            if (have_rows('services_section_background')) {
                while (have_rows('services_section_background')) {
                    the_row();
                    $background_type_choose5 = get_sub_field('services_section_background_choose_');
                    if ($background_type_choose5 == 'Image') {
                        $background5 = get_sub_field('services_section_background_image');
                        $background_image5 = $background5['client_section_background_image'];
                        $background_image_style5 = $background5['client_section_image_style'];
                        $background_image_size5 = $background5['client_section_background_size'];
                        $background_image_repeation5 = $background5['client_section_background_repeat'];
                    } else {
                        $background_color5 = get_sub_field('services_section_background_color');
                    }
                }
            }


        ?>
            <style type="text/css">
                .servicesid {
                    background-color: <?php
                                        echo $background_color5;
                                        ?> !important;
                    background-image: url(<?php
                                            echo $background_image5;
                                            ?>) !important;
                    background-attachment: <?php
                                            echo $background_image_style5;
                                            ?> !important;
                    background-size: <?php
                                        echo $background_image_size5;
                                        ?> !important;
                    background-repeat: <?php
                                        echo $background_image_repeation5;
                                        ?> !important;
                }
            </style>
            <?php
            if (have_rows('service_content')) {
                while (have_rows('service_content')) {
                    the_row();
                    $sub_title = get_sub_field('sub_title');
                    $title = get_sub_field('title');
            ?>
                    <section id="<?php
                                    echo $menuId5;
                                    ?>" class="services servicesid">
                        <div class="container">
                            <div class="section-title-area">
                                <h5 class="section-subtitle"><?php
                                                                echo $sub_title;
                                                                ?></h5>
                                <h2 class="section-title"><?php
                                                            echo $title;
                                                            ?></h2>
                            </div>
                            <div class="row">
                                <?php
                                if (have_rows('add_services')) {
                                    while (have_rows('add_services')) {
                                        the_row();
                                        $service_title = get_sub_field('service_title');
                                        $service_content = get_sub_field('service_content');
                                        $service_icon = get_sub_field('service_icon');
                                        $service_background_color = get_sub_field('service_background_color');
                                ?>
                                        <div class="col-sm-6">
                                            <div class="serviceItem">
                                                <div class="serviceImg">
                                                    <amp-img width="90" height="80" src="<?php bloginfo('template_url'); ?>/assetes/img/fa-wikipedia-w.png" layout="intrinsic" alt=""></amp-img>
                                                </div>
                                                <div class="serviceCont">
                                                    <h4><?php
                                                        echo $service_title;
                                                        ?></h4>
                                                    <?php
                                                    echo $service_content;
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                        <style type="text/css">
                                            .serviceItem {
                                                background-color: <?php
                                                                    echo $service_background_color;
                                                                    ?>;
                                            }
                                        </style>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </section>
            <?php
                }
            }
            ?>
        <?php
        }




        // :projects_section START::
        if (get_row_layout() == 'projects_section' and get_sub_field('visibility_projects') == '1') {


            $projects_sub_title = get_sub_field('projects_sub_title');
            $projects_title = get_sub_field('projects_title');
            $projects_button_name = get_sub_field('projects_button_name');
            $projects_button_url = get_sub_field('projects_button_url');






            $menuId6 = get_sub_field('projects_section_menu_id');
            if (have_rows('client_section_background_copy6')) {
                while (have_rows('client_section_background_copy6')) {
                    the_row();
                    $background_type_choose6 = get_sub_field('client_section_choose_background');
                    if ($background_type_choose6 == 'Image') {
                        $background6 = get_sub_field('client_section_background_image');
                        $background_image6 = $background6['client_section_background_image'];
                        $background_image_style6 = $background6['client_section_image_style'];
                        $background_image_size6 = $background6['client_section_background_size'];
                        $background_image_repeation6 = $background6['client_section_background_repeat'];
                    } else {
                        $background_color6 = get_sub_field('client_section_background_color');
                    }
                }
            }
        ?>
            <style type="text/css">
                .projectsid {
                    background-color: <?php
                                        echo $background_color6;
                                        ?> !important;
                    background-image: url(<?php
                                            echo $background_image6;
                                            ?>) !important;
                    background-attachment: <?php
                                            echo $background_image_style6;
                                            ?> !important;
                    background-size: <?php
                                        echo $background_image_size6;
                                        ?> !important;
                    background-repeat: <?php
                                        echo $background_image_repeation6;
                                        ?> !important;
                }
            </style>











            <section id="<?php
                            echo $menuId6;
                            ?>" class="projects projectsid">
                <div class="container">
                    <div class="section-title-area">
                        <h5 class="section-subtitle"><?php
                                                        echo $projects_sub_title;
                                                        ?></h5>
                        <h2 class="section-title"><?php
                                                    echo $projects_title;
                                                    ?></h2>
                    </div>
                    <div class="row">
                        <div class="proBox_inner">

                            <?php
                            // ...............................RELATIONSHIP START...................

                            $posts = get_sub_field('relationship_projects');
                            if ($posts) {
                                $i = 1;
                                foreach ($posts as $post) {
                                    setup_postdata($post);

                                    $post_permalink = get_the_permalink();
                                    $post_title = get_the_title();
                                    $post_thumbnail = get_the_post_thumbnail_url(null, 'esoftArena_projects_image');
                                    $post_thumbnail_popup = get_the_post_thumbnail_url(null, 'esoftArena_projects_image_popup');
                                    $post_content = get_the_content();
                                    $project_client_name = get_field('project_client');
                                    $project_url = get_field('project_link');
                                    $project_category = get_the_term_list(get_the_ID(), 'projectCategory', '', ' ');
                                    $project_skills = get_the_term_list(get_the_ID(), 'projectsSkills', '', ' ');


                            ?>
                                    <div class="proBox_item">
                                        <a class="proBoxItemIn" on="tap:project-<?php echo $i; ?>" role="button" tabindex="0">
                                            <div class="itemImg">
                                                <div>
                                                    <amp-img src="<?php echo $post_thumbnail; ?>" width="455" height="575" layout="responsive"></amp-img>
                                                </div>
                                            </div>
                                            <div class="itemCont">
                                                <h5><?php echo $post_title; ?></h5>
                                                <span><?php echo $project_category . ' '; ?></span>
                                            </div>
                                        </a>
                                        <amp-lightbox class="overlay" id="project-<?php echo $i; ?>" layout="nodisplay">
                                            <div class="proBox_lightIn">
                                                <div class="proBox_light">
                                                    <div class="col-sm-8 popupclassimage">

                                                        <amp-img src="<?php echo $post_thumbnail; ?>" width="455" height="575" layout="responsive"></amp-img>


                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="proBox_rgtCont">
                                                            <h2><?php echo $post_title; ?></h2>
                                                            <?php echo $post_content; ?>
                                                            <p>Skills: <?php echo $project_skills; ?></p>
                                                            <p>Client: <?php echo $project_client_name; ?></p>
                                                            <!--                   <p>Website: <a href="<?php echo $project_url; ?>"><?php echo $project_url; ?></a></p> -->


                                                            <a target="_blank" class="bnrBtn bnrBtn1" href="<?php echo $project_url; ?>" style=" background-color:<?php echo $button_background_color ?> !important; color:<?php echo $button_text_color ?> !important ;">
                                                                <?php echo 'View Website' ?>
                                                            </a>


                                                        </div>
                                                    </div>
                                                    <a class="closePjt" on="tap:project-<?php echo $i; ?>.close" role="button" tabindex="0">&nbsp;</a>
                                                </div>
                                            </div>
                                        </amp-lightbox>
                                    </div>
                            <?php
                                    $i++;
                                }
                                wp_reset_postdata();
                            }


                            // ...............................RELATIONSHIP END.....................
                            ?>
                        </div>

                        <div class="all-news">
                            <a class="bnrBtn bnrBtn1" href="<?php echo $projects_button_url; ?>" style=" background-color:<?php echo $button_background_color ?> !important; color:<?php echo $button_text_color ?> !important ;">
                                <?php echo $projects_button_name; ?>
                            </a>
                        </div>

                    </div>
                </div>
            </section>

        <?php
        }




        // :counter_section START::
        if (get_row_layout() == 'counter_section' and get_sub_field('visibility_counter') == '1') {
            $menuID7 = get_sub_field('counter_section_menu_id');
            if (have_rows('client_section_background_copy7')) {
                while (have_rows('client_section_background_copy7')) {
                    the_row();
                    $background_type_choose7 = get_sub_field('client_section_choose_background');
                    if ($background_type_choose7 == 'Image') {
                        $background7 = get_sub_field('client_section_background_image');
                        $background_image7 = $background7['client_section_background_image'];
                        $background_image_style7 = $background7['client_section_image_style'];
                        $background_image_size7 = $background7['client_section_background_size'];
                        $background_image_repeation7 = $background7['client_section_background_repeat'];
                    } else {
                        $background_color7 = get_sub_field('client_section_background_color');
                    }
                }
            }
        ?>
            <style type="text/css">
                .counterid {
                    background-color: <?php
                                        echo $background_color7;
                                        ?> !important;
                    background-image: url(<?php
                                            echo $background_image7;
                                            ?>) !important;
                    background-attachment: <?php
                                            echo $background_image_style7;
                                            ?> !important;
                    background-size: <?php
                                        echo $background_image_size7;
                                        ?> !important;
                    background-repeat: <?php
                                        echo $background_image_repeation7;
                                        ?> !important;
                }
            </style>
            <?php
            if (have_rows('counter_content')) {
                while (have_rows('counter_content')) {
                    the_row();
                    $sub_title = get_sub_field('sub_title');
            ?>
                    <section class="counter counterid" id="<?php
                                                            echo $menuID7;
                                                            ?>">
                        <div class="container">
                            <h5><?php
                                echo $sub_title;
                                ?></h5>
                            <div class="row">
                                <?php
                                if (have_rows('add_counter')) {
                                    while (have_rows('add_counter')) {
                                        the_row();
                                        $enter_counter_number_with_necessary_unit = get_sub_field('enter_counter_number_with_necessary_unit');
                                        $enter_counter_number_color = get_sub_field('counter_number_color');
                                        $counter_number_subtitle = get_sub_field('counter_number_subtitle');
                                        $enter_counter_text_color = get_sub_field('counter_title_color');
                                ?>
                                        <div class="col-sm-3">
                                            <div class="countBox">
                                                <div class="countNumber">
                                                    <span style="color:<?php echo $enter_counter_number_color; ?>;"><?php
                                                                                                                    echo $enter_counter_number_with_necessary_unit;
                                                                                                                    ?></span>
                                                </div>
                                                <div class="counter_title" style="color:<?php echo $enter_counter_text_color; ?>;"><?php
                                                                                                                                    echo $counter_number_subtitle;
                                                                                                                                    ?></div>
                                            </div>
                                        </div>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </section>
            <?php
                }
            }
            ?>
        <?php
        }




        // :testimonials_section START::
        if (get_row_layout() == 'testimonials_section' and get_sub_field('visibility_testimonial') == '1') {




            $menuID8 = get_sub_field('testimonials_section_menu_id');
            $button_name_testimonials = get_sub_field('button_name_testimonials');
            $button_url_testimonials = get_sub_field('button_url_testimonials');


            if (have_rows('client_section_background_copy8')) {
                while (have_rows('client_section_background_copy8')) {
                    the_row();
                    $background_type_choose8 = get_sub_field('client_section_choose_background');
                    if ($background_type_choose8 == 'Image') {
                        $background8 = get_sub_field('client_section_background_image');
                        $background_image8 = $background8['client_section_background_image'];
                        $background_image_style8 = $background8['client_section_image_style'];
                        $background_image_size8 = $background8['client_section_background_size'];
                        $background_image_repeation8 = $background8['client_section_background_repeat'];
                    } else {
                        $background_color8 = get_sub_field('client_section_background_color');
                    }
                }
            }
        ?>
            <style type="text/css">
                .testimonialsID {
                    background-color: <?php
                                        echo $background_color8;
                                        ?> !important;
                    background-image: url(<?php
                                            echo $background_image8;
                                            ?>) !important;
                    background-attachment: <?php
                                            echo $background_image_style8;
                                            ?> !important;
                    background-size: <?php
                                        echo $background_image_size8;
                                        ?> !important;
                    background-repeat: <?php
                                        echo $background_image_repeation8;
                                        ?> !important;
                }
            </style>
            <?php
            $sub_title = get_sub_field('sub_title');
            $title = get_sub_field('title');
            ?>
            <section id="<?php
                            echo $menuID8;
                            ?>" class="testimonials testimonialsID">
                <div class="container">
                    <div class="section-title-area">
                        <h5 class="section-subtitle"><?php
                                                        echo $sub_title;
                                                        ?></h5>
                        <h2 class="section-title"><?php
                                                    echo $title;
                                                    ?></h2>
                    </div>
                    <div class="row">
                        <div class="card-deck">
                            <?php
                            // ...............................RELATIONSHIP START...................

                            $posts = get_sub_field('all_testimonials');

                            if ($posts) {
                                foreach ($posts as $post) {
                                    setup_postdata($post);

                                    $post_permalink = get_the_permalink();
                                    $post_title = get_the_title();
                                    $post_thumbnail = get_the_post_thumbnail_url();
                                    $post_content = get_the_content();


                                    $card_title__sub_title = get_field('card_title__sub_title');
                                    $designation = get_field('designation');

                                    $testimonial_background_color = get_field('testimonial_background_color');


                            ?>
                                    <div class="card-inverse" style="background-color: <?php
                                                                                        echo $testimonial_background_color;
                                                                                        ?> !important;border-color: <?php
                                                                echo $testimonial_background_color;
                                                                ?> !important;">
                                        <div class="card-block">
                                            <div class="tesAuthor">
                                                <div class="authorImg">
                                                    <amp-img width="100" height="100" src="<?php echo $post_thumbnail; ?>" layout="responsive" alt=""></amp-img>
                                                </div>
                                                <cite class="tesName">
                                                    <?php echo $post_title; ?>
                                                    <div><?php echo $designation; ?></div>
                                                </cite>
                                            </div>
                                            <h4 class="card-title"><?php echo $card_title__sub_title; ?></h4>
                                            <p class="card-text">
                                                <?php echo $post_content; ?>
                                            </p>
                                        </div>
                                    </div>

                            <?php
                                }
                                wp_reset_postdata();
                            }


                            // ...............................RELATIONSHIP END.....................

                            ?>
                        </div>



                        <div class="all-news">
                            <a class="bnrBtn bnrBtn1" href="<?php echo $button_url_testimonials; ?>" style=" background-color:<?php echo $button_background_color ?> !important; color:<?php echo $button_text_color ?> !important ;">
                                <?php echo $button_name_testimonials; ?>
                            </a>
                        </div>



                    </div>
                </div>
            </section>
        <?php
        }




        // :pricing_table_section START::
        if (get_row_layout() == 'pricing_table_section' and get_sub_field('visibility_pricing') == '1') {
            $menuID9 = get_sub_field('pricing_table_section_menu_id');


            if (have_rows('pricing_background_')) {
                while (have_rows('pricing_background_')) {
                    the_row();
                    $background_type_choose9 = get_sub_field('pricing_background_choose_type');
                    if ($background_type_choose9 == 'Image') {
                        $background9 = get_sub_field('pricing_background_image');
                        $background_image9 = $background9['client_section_background_image'];
                        $background_image_style9 = $background9['client_section_image_style'];
                        $background_image_size9 = $background9['client_section_background_size'];
                        $background_image_repeation9 = $background9['client_section_background_repeat'];
                    } else {
                        $background_color9 = get_sub_field('pricing_background_color');
                    }
                }
            }
        ?>
            <style type="text/css">
                .pricSecid {
                    background-color: <?php
                                        echo $background_color9;
                                        ?> !important;
                    background-image: url(<?php
                                            echo $background_image9;
                                            ?>) !important;
                    background-attachment: <?php
                                            echo $background_image_style9;
                                            ?> !important;
                    background-size: <?php
                                        echo $background_image_size9;
                                        ?> !important;
                    background-repeat: <?php
                                        echo $background_image_repeation9;
                                        ?> !important;
                }
            </style>
            <?php
            if (have_rows('pricing_table')) {
                while (have_rows('pricing_table')) {
                    the_row();
                    $sub_title = get_sub_field('sub_title');
                    $title = get_sub_field('title');
            ?>
                    <section id="<?php
                                    echo $menuID9;
                                    ?>" class="pricSec pricSecid">
                        <div class="container">
                            <div class="section-title-area">
                                <h5 class="section-subtitle"><?php
                                                                echo $sub_title;
                                                                ?></h5>
                                <h2 class="section-title"><?php
                                                            echo $title;
                                                            ?></h2>
                            </div>
                            <div class="pricing">
                                <div class="row">
                                    <?php
                                    if (have_rows('add_pricing_table')) {
                                        while (have_rows('add_pricing_table')) {
                                            the_row();
                                            $pricing_table_name = get_sub_field('pricing_table_name');
                                            $price_tb = get_sub_field('price_tb');
                                            $pricing_table_content = get_sub_field('pricing_table_content');
                                            $button_name = get_sub_field('button_name');
                                            $button_url = get_sub_field('button_url');
                                            $button_color = get_sub_field('button_color');
                                            $add_pricing_feature = get_sub_field('add_pricing_feature');
                                    ?>
                                            <div class="col-md-4 col-sm-6">
                                                <div class="pricItem">
                                                    <h3><?php
                                                        echo $pricing_table_name;
                                                        ?></h3>
                                                    <div class="price"><span class="dollar">$</span><?php
                                                                                                    echo $price_tb;
                                                                                                    ?></div>
                                                    <div class="pricSentense"><?php
                                                                                echo $pricing_table_content;
                                                                                ?></div>
                                                    <ul class="pricFeature-list">
                                                        <?php
                                                        foreach ($add_pricing_feature as $key) {
                                                        ?>
                                                            <li><?php
                                                                echo $key['pricing_feature'];
                                                                ?></li>
                                                        <?php
                                                        }
                                                        ?>
                                                    </ul>
                                                    <a class="priceBtn" href="<?php
                                                                                echo $button_url;
                                                                                ?>" style="background-color: <?php
                                                                                    echo $button_color;
                                                                                    ?> !important"><?php
                                                                    echo $button_name;
                                                                    ?></a>
                                                </div>
                                            </div>
                                    <?php
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </section>
            <?php
                }
            }
            ?>
        <?php
        }




        // :call_to_action_section START::
        if (get_row_layout() == 'call_to_action_section' and get_sub_field('visibility_callToAction') == '1') {
            $menuID10 = get_sub_field('call_to_action_section_menu_id');
            if (have_rows('client_section_background_copy10')) {
                while (have_rows('client_section_background_copy10')) {
                    the_row();
                    $background_type_choose10 = get_sub_field('client_section_choose_background');
                    if ($background_type_choose10 == 'Image') {
                        $background10 = get_sub_field('client_section_background_image');
                        $background_image10 = $background10['client_section_background_image'];
                        $background_image_style10 = $background10['client_section_image_style'];
                        $background_image_size10 = $background10['client_section_background_size'];
                        $background_image_repeation10 = $background10['client_section_background_repeat'];
                    } else {
                        $background_color10 = get_sub_field('client_section_background_color');
                    }
                }
            }
        ?>
            <style type="text/css">
                .ctaSecid {
                    background-color: <?php
                                        echo $background_color10;
                                        ?> !important;
                    background-image: url(<?php
                                            echo $background_image10;
                                            ?>) !important;
                    background-attachment: <?php
                                            echo $background_image_style10;
                                            ?> !important;
                    background-size: <?php
                                        echo $background_image_size10;
                                        ?> !important;
                    background-repeat: <?php
                                        echo $background_image_repeation10;
                                        ?> !important;
                }
            </style>
            <?php
            if (have_rows('call_to_action_section_content')) {
                while (have_rows('call_to_action_section_content')) {
                    the_row();
                    $call_to_action_content = get_sub_field('call_to_action_content');
                    $call_to_action_section_button_name = get_sub_field('call_to_action_section_button_name');
                    $call_to_action_section_button_url = get_sub_field('call_to_action_section_button_url');
            ?>
                    <section class="ctaSec ctaSecid" id="<?php
                                                            echo $menuID10;
                                                            ?>">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-9 col-sm-12">
                                    <h2><?php
                                        echo $call_to_action_content;
                                        ?></h2>
                                </div>
                                <div class="col-md-3 col-sm-12">
                                    <a class="commBtn" href="<?php
                                                                echo $call_to_action_section_button_url;
                                                                ?>"><?php
                                        echo $call_to_action_section_button_name;
                                        ?></a>
                                </div>
                            </div>
                        </div>
                    </section>
            <?php
                }
            }
            ?>
        <?php
        }




        // :team_section START::
        if (get_row_layout() == 'team_section' and get_sub_field('visibility_team') == '1') {
            $menuID11 = get_sub_field('team_section_menu_id');
            if (have_rows('client_section_background_copy11')) {
                while (have_rows('client_section_background_copy11')) {
                    the_row();
                    $background_type_choose11 = get_sub_field('client_section_choose_background');
                    if ($background_type_choose11 == 'Image') {
                        $background11 = get_sub_field('client_section_background_image');
                        $background_image11 = $background11['client_section_background_image'];
                        $background_image_style11 = $background11['client_section_image_style'];
                        $background_image_size11 = $background11['client_section_background_size'];
                        $background_image_repeation11 = $background11['client_section_background_repeat'];
                    } else {
                        $background_color11 = get_sub_field('client_section_background_color');
                    }
                }
            }
        ?>
            <style type="text/css">
                .teamSecid {
                    background-color: <?php
                                        echo $background_color11;
                                        ?> !important;
                    background-image: url(<?php
                                            echo $background_image11;
                                            ?>) !important;
                    background-attachment: <?php
                                            echo $background_image_style11;
                                            ?> !important;
                    background-size: <?php
                                        echo $background_image_size11;
                                        ?> !important;
                    background-repeat: <?php
                                        echo $background_image_repeation11;
                                        ?> !important;
                }
            </style>
            <?php
            if (have_rows('team_content')) {
                while (have_rows('team_content')) {
                    the_row();
                    $sub_title = get_sub_field('sub_title');
                    $title = get_sub_field('title');
            ?>
                    <section class="teamSec teamSecid" id="<?php
                                                            echo $menuID11;
                                                            ?>">
                        <div class="container">
                            <div class="section-title-area">
                                <h5 class="section-subtitle"><?php
                                                                echo $sub_title;
                                                                ?></h5>
                                <h2 class="section-title"><?php
                                                            echo $title;
                                                            ?></h2>
                            </div>
                            <div class="team-members">
                                <?php
                                if (have_rows('add_team')) {
                                    while (have_rows('add_team')) {
                                        the_row();
                                        $image_ds = get_sub_field('image_ds');
                                        $name = get_sub_field('name');
                                        $designation = get_sub_field('designation');
                                ?>
                                        <div class="team-member">
                                            <div class="member-thumb">
                                                <amp-img width="480" height="300" src="<?php
                                                                                        echo $image_ds;
                                                                                        ?>" layout="responsive" alt=""></amp-img>
                                            </div>
                                            <div class="member-info">
                                                <h5 class="member-name"><?php
                                                                        echo $name;
                                                                        ?></h5>
                                                <span class="member-position"><?php
                                                                                echo $designation;
                                                                                ?></span>
                                            </div>
                                        </div>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </section>
            <?php
                }
            }
            ?>
        <?php
        }




        // :latest_news_section START::
        if (get_row_layout() == 'latest_news_section' and get_sub_field('visibility_lNews') == '1') {
            $menuID12 = get_sub_field('latest_news_section_menu_id');
            if (have_rows('client_section_background_copy12')) {
                while (have_rows('client_section_background_copy12')) {
                    the_row();
                    $background_type_choose12 = get_sub_field('client_section_choose_background');
                    if ($background_type_choose12 == 'Image') {
                        $background12 = get_sub_field('client_section_background_image');
                        $background_image12 = $background12['client_section_background_image'];
                        $background_image_style12 = $background12['client_section_image_style'];
                        $background_image_size12 = $background12['client_section_background_size'];
                        $background_image_repeation12 = $background12['client_section_background_repeat'];
                    } else {
                        $background_color12 = get_sub_field('client_section_background_color');
                    }
                }
            }
        ?>
            <style type="text/css">
                .newsSecid {
                    background-color: <?php
                                        echo $background_color12;
                                        ?> !important;
                    background-image: url(<?php
                                            echo $background_image12;
                                            ?>) !important;
                    background-attachment: <?php
                                            echo $background_image_style12;
                                            ?> !important;
                    background-size: <?php
                                        echo $background_image_size12;
                                        ?> !important;
                    background-repeat: <?php
                                        echo $background_image_repeation12;
                                        ?> !important;
                }
            </style>
            <?php
            if (have_rows('news')) {
                while (have_rows('news')) {
                    the_row();
                    $sub_title = get_sub_field('sub_title');
                    $title = get_sub_field('title');
                    $button_name = get_sub_field('button_name');
                    $button_url = get_sub_field('button_url');
            ?>
                    <section id="<?php
                                    echo $menuID12;
                                    ?>" class="newsSec newsSecid">
                        <div class="container">
                            <div class="section-title-area">
                                <h5 class="section-subtitle"><?php
                                                                echo $sub_title;
                                                                ?></h5>
                                <h2 class="section-title"><?php
                                                            echo $title;
                                                            ?></h2>
                            </div>
                            <div class="blog-entry">
                                <?php
                                //post object
                                $post_objects = get_sub_field('con');
                                if ($post_objects) {
                                    foreach ($post_objects as $post) {
                                        setup_postdata($post);
                                ?>
                                        <article class="list-article">
                                            <div class="list-article-thumb">
                                                <a href="<?php
                                                            the_permalink();
                                                            ?>">
                                                    <amp-img width="300" height="150" src="<?php
                                                                                            the_post_thumbnail_url();
                                                                                            ?>" layout="responsive" alt=""></amp-img>
                                                </a>
                                            </div>
                                            <div class="list-article-content">
                                                <div class="list-article-meta">
                                                    <a href="#" rel="category tag">Markup</a>
                                                </div>
                                                <header class="entry-header">
                                                    <h2 class="entry-title"><a href="#" rel="bookmark"><?php
                                                                                                        the_title();
                                                                                                        ?></a></h2>
                                                </header>
                                                <div class="entry-excerpt">
                                                    <?php
                                                    echo wp_trim_words(get_the_content(), 40);
                                                    ?>
                                                </div>
                                            </div>
                                        </article>
                                <?php
                                    };
                                    wp_reset_postdata();
                                }
                                ?>
                                <div class="all-news">
                                    <a class="commBtn" href="<?php
                                                                echo $button_url;
                                                                ?>"><?php
                                        echo $button_name;
                                        ?></a>
                                </div>
                            </div>
                        </div>
                    </section>
            <?php
                }
            }
            ?>
        <?php
        }




        // :google_map_section START::
        if (get_row_layout() == 'google_map_section' and get_sub_field('visibility_Gmap') == '1') {

            $menuId13 = get_sub_field('google_map_section_menu_id');

            if (have_rows('map_content')) {
                while (have_rows('map_content')) {
                    the_row();
                    $latitude = get_sub_field('latitude');
                    $longitude = get_sub_field('longitude');
                    $api_key = get_sub_field('api_key');
                }
            }
        ?>
            <div class="contactMap" id="<?php
                                        echo $menuId13;
                                        ?>">
                <amp-iframe width="1423" height="406" layout="responsive" sandbox="allow-scripts allow-same-origin allow-popups" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=<?php
                                                                                                                                                                                                    echo $latitude;
                                                                                                                                                                                                    ?>,<?php
                                echo $longitude;
                                ?>&amp;key=<?php
                                        echo $api_key;
                                        ?>">
                    <amp-img layout="fill" src="<?php
                                                echo get_template_directory_uri();
                                                ?>/assetes/img/mapImg.jpg" placeholder></amp-img>
                </amp-iframe>
            </div>
        <?php
        }



        // :contact_section START::
        if (get_row_layout() == 'contact_section' and get_sub_field('visibility_contact') == '1') {
            $menuId14 = get_sub_field('contact_section_menu_id');
            if (have_rows('client_section_background_copy13')) {
                while (have_rows('client_section_background_copy13')) {
                    the_row();
                    $background_type_choose14 = get_sub_field('client_section_choose_background');
                    if ($background_type_choose14 == 'Image') {
                        $background14 = get_sub_field('client_section_background_image');
                        $background_image14 = $background14['client_section_background_image'];
                        $background_image_style14 = $background14['client_section_image_style'];
                        $background_image_size14 = $background14['client_section_background_size'];
                        $background_image_repeation14 = $background14['client_section_background_repeat'];
                    } else {
                        $background_color14 = get_sub_field('client_section_background_color');
                    }
                }
            }
        ?>
            <style type="text/css">
                .contactID {
                    background-color: <?php
                                        echo $background_color14;
                                        ?> !important;
                    background-image: url(<?php
                                            echo $background_image14;
                                            ?>) !important;
                    background-attachment: <?php
                                            echo $background_image_style14;
                                            ?> !important;
                    background-size: <?php
                                        echo $background_image_size14;
                                        ?> !important;
                    background-repeat: <?php
                                        echo $background_image_repeation14;
                                        ?> !important;
                }
            </style>
            <?php
            if (have_rows('contact_content_')) {
                while (have_rows('contact_content_')) {
                    the_row();
                    $sub_title = get_sub_field('sub_title');
                    $title = get_sub_field('title');
                    $contact_form = get_sub_field('contact_form');
                    $contact_details = get_sub_field('contact_details');
            ?>
                    <section id="<?php
                                    echo $menuId14;
                                    ?>" class="contact contactID">
                        <div class="container">
                            <div class="section-title-area">
                                <h5 class="section-subtitle"><?php
                                                                echo $sub_title;
                                                                ?></h5>
                                <h2 class="section-title"><?php
                                                            echo $title;
                                                            ?></h2>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">

                                    <!--             <?php echo do_shortcode('[contact-form-7 id="' . $contact_form . '"]'); ?> -->




                                    <?php
                                    if (isset($_REQUEST['contact_form']) && !empty($_REQUEST['contact_form'])) {

                                        $mail_content = "Name : " . $_REQUEST['e_name'] .
                                            "<br />Email : " . $_REQUEST['e_email'] .
                                            "<br /> Subject : " . $_REQUEST['e_subject'] .
                                            "<br />Message : " . $_REQUEST['e_message'];


                                        $to = get_bloginfo('admin_email');
                                        $from = $_REQUEST['e_name'];
                                        $headers[] = "MIME-Version: 1.0";
                                        $headers[] = "Content-type:text/html;charset=UTF-8";
                                        $subject = 'Contact Email';
                                        $mail_details = wp_mail($to, $subject, $mail_content, $headers);
                                    }
                                    ?>




                                    <form class="contactForm" method="post" id="contactform" action="" target="_top" on="submit-success:contactform.clear">
                                        <div class="textBox">
                                            <label>Your Name (required)</label>
                                            <input class="form-control" type="text" placeholder="" name="e_name" required>
                                        </div>
                                        <div class="textBox">
                                            <label>Your Email (required)</label>
                                            <input class="form-control" type="email" placeholder="" name="e_email" required>
                                        </div>
                                        <div class="textBox">
                                            <label>Subject</label>
                                            <input class="form-control" type="text" placeholder="" name="e_subject" required>
                                        </div>
                                        <div class="textBox">
                                            <label>Your Message</label>
                                            <textarea class="form-control" rows="10" cols="40" placeholder="" name="e_message" required></textarea>
                                        </div>
                                        <div class="textBox">
                                            <input type="submit" value="Send" name="contact_form">
                                        </div>
                                        <div class="form_successes_massage">Success! Thanks for Your Request</div>
                                        <div submit-error><template type="amp-mustache"><span class="error_massage">Error!</span></template></div>
                                    </form>


                                </div>
                                <div class="col-sm-6">
                                    <?php
                                    echo $contact_details;
                                    ?>
                                </div>
                            </div>
                        </div>
                    </section>
            <?php
                }
            }
            ?>
<?php
        }
        // ::FULL ENDING::
    }
}
get_footer();
