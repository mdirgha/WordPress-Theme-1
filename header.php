<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Awesome Theme</title>
        <?php wp_head(); ?>
</head>
<?php 

if( is_front_page() ):
    $awesome_classes = array(' awesome-class','my-class');
else:
    $awesome_classes = array('no-awesome-class');
endif;

?>

<body <?php body_class( $awesome_classes ); ?>> 

                <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
                  
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="http://lets-rethink.local/home/">Home</a>
                        <a class="nav-link" href="http://lets-rethink.local/about-me/">About Me</a>
                        <a class="nav-link" href="http://lets-rethink.local/contact/">Contact Us</a>
                    </div>
                    </div>
                </div>
                </nav>
           
                <?php wp_nav_menu(array('theme_location'=='primary')); ?>
            </div>
        </div>


    <img src="<?php header_image(); ?>"height=<?php echo get_custom_header()->height; ?>" width=" <?php echo
    get_custom_header()->width; ?> " alt="" />
    

