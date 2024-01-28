<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body>
<div class="top-wwrap">
    <div class="container">
        <div class="row">
            <div class="main-menu">
                <div class="col-md-12">
                    <div class="menu-items">
                        <?php wp_nav_menu(
                            array(
                                'theme_location' => 'Main_Menu',
                                'depth' => '3',
                            )
                        ) ?>
                    </div>
                </div>
            </div>
        </div>