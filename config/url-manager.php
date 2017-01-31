<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

return [
    'enablePrettyUrl' => true,
    'showScriptName' => false,
    'rules' => [
        [
            'pattern' => 'about-us',
            'route' => 'site/about',
        ],
        [
            'pattern' => 'contact-us',
            'route' => 'site/contact',
        ],
        
        [
            'pattern' => 'page/<slug:[\d\w\-\.]+>',
            'route' => 'page/index',
        ],
        
        [
            'pattern' => 'portfolio',
            'route' => 'portfolio/index',
        ],
        
        [
            'pattern' => 'portfolio/<slug:[\d\w\-\.]+>',
            'route' => 'portfolio/detail',
        ],
        
        [
            'pattern' => 'blog',
            'route' => 'blog/index',
        ],
        
        [
            'pattern' => 'blog/<year:\d{4}>/<month:\d{2}>/<slug:[\d\w\-\.]+>',
            'route' => 'blog/detail',
        ],

        // for showing blog by category
        [
            'pattern' => 'blog/category/<slug:[\d\w\-\.]+>',
            'route' => 'blog/category',
        ],

        // for showing blog by tag
        [
            'pattern' => 'blog/tag/<slug:[\d\w\-\.]+>',
            'route' => 'blog/tag',
        ],
    ],
];