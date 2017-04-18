<?php

return array_merge([
    'production' => false,
    'url' => 'localhost',

    'default_perPage' => 1,

    'site' => [
        'baseurl' => '',
        'title' => "Piece",
        'tagline' => 'A Jigsaw Theme',
        'description' => "
            A powerful <a href='http://jigsaw.tighten.co/' target='_blank'>Jigsaw</a> theme
            adapted from <a href='http://lanyon.getpoole.com/' target='_blank'>Lanyon Poole</a>
            by <a href='http://maicoqb.github.io/' target='_blank'>maicoqb</a>.
        ",

        'rss_url' => 'feed.xml',

        // 'theme' => 'theme-base-08' // theme-base-08 to theme-base-0f
    ],

    'title' => 'Home',



    'author' => [
        'name' => 'Maico Borges',
        'github' => 'https://github.com/maicoqb',
        'url' => 'https://maicoqb.github.io',
        'email' => 'maicoqb@gmail.com'
    ],

    'project' => [
        'github' => 'https://github.com/maicoqb/jigsaw-piece',
        'version' => '0.1'
    ],

    'collections' => include './config/collections.php',

], include './config/functions.php');
