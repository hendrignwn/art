<?php

use app\helpers\Url;
use app\models\BlogPost;
use app\models\Page;

/* @var $pages Page */
/* @var $blogs BlogPost */

$staticPages = [
    ['url' => '/service/index'],
    ['url' => '/site/contact'],
];
?>

<urlset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:image="http://www.google.com/schemas/sitemap-image/1.1">
<?php foreach ($pages as $page) : ?>
    <url>
        <loc><?= Url::to(['/'.$page->slug], true) ?></loc>
        <changefreq>never</changefreq>
        <priority>0.8</priority>
    </url>
<?php endforeach; ?>
<?php foreach ($staticPages as $page) : ?>
    <url>
        <loc><?= Url::to([$page['url']], true) ?></loc>
        <changefreq>never</changefreq>
        <priority>0.8</priority>
    </url>
<?php endforeach; ?>
<?php foreach ($blogs as $blog) : ?>    
    <url>
        <loc><?= $blog->getDetailUrl(true) ?></loc>
        <changefreq>monthly</changefreq>
        <priority>0.9</priority>
        <image:image>
            <image:loc><?= $blog->getPhotoUrl() ?></image:loc>
            <image:caption><![CDATA[<?= $blog->title ?>]]></image:caption>
        </image:image>
    </url>
<?php endforeach; ?>
</urlset>