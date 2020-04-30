<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Giga&family=Noto+Serif+JP&display=swap" rel="stylesheet"> 
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
</head>
<body>
    <header>
        <div class="header_title">
            <h1><a href="index.php" class="anchor"><?php bloginfo('name'); ?></a></h1>
        </div>
    </header>

            <div class="row">
                <?php if ( have_posts() ) : ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <div class="col-md-4">
                            <article id="post-<?php the_ID(); ?>" <?php post_class('news'); ?>>
                                <div class="news_block2">
                                <div class="news_pic">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php if ( has_post_thumbnail() ): ?>
                                            <?php the_post_thumbnail('medium'); ?>
                                        <?php else: ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/noimage_600x400.png" alt="" width="300" height="200">
                                        <?php endif; ?>
                                    </a>
                                </div>
                                <div class="news_block">
                                <h2 class="news_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                <div class="news_desc">
                                    <?php the_excerpt(); ?>
                                </div>
                                <div class="news_meta">
                                    <time class="news_time" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日'); ?></time>
                                    <?php the_category(); ?>
                                </div>
                                </div>
                                </div>
                            </article>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>


<script src="<?php echo get_template_directory_uri(); ?>/assets/js/home.js"></script>

</body>
</html>
