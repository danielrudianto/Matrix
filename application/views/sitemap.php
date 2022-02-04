<?php echo'<?xml version="1.0" encoding="UTF-8" ?>' ?>
<urlset 
    xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
    xmlns:image="http://www.google.com/schemas/sitemap-image/1.1">
    <url>
        <loc><?php echo base_url();?></loc>
        <priority>1.0</priority>
        <changefreq>daily</changefreq>
    </url>
    
    <!-- Sitemap -->
    <?php foreach($items as $item) { ?>
    <url>
        <loc><?php echo base_url() . "Products/Item/" . $item->name ?></loc>
        <image:image>
            <image:loc><?= base_url('assets/images/products/') ?> <?= $item->id ?>.webp</image:loc>
            <image:caption><?= preg_replace('/&(?!#?[a-z0-9]+;)/', '&amp;', $item->name) ?> image</image:caption>
            <image:geo_location>Kota Mataram, Indonesia</image:geo_location>
            <image:title><?= preg_replace('/&(?!#?[a-z0-9]+;)/', '&amp;', $item->description) ?></image:title>
        </image:image>
        <image:image>
            <image:loc><?= base_url('assets/images/products/') ?> <?= $item->id ?>.png</image:loc>
            <image:caption><?= preg_replace('/&(?!#?[a-z0-9]+;)/', '&amp;', $item->name) ?> image</image:caption>
            <image:geo_location>Kota Mataram, Indonesia</image:geo_location>
            <image:title><?= preg_replace('/&(?!#?[a-z0-9]+;)/', '&amp;', $item->description) ?></image:title>
        </image:image>
        <priority>0.5</priority>
        <changefreq>daily</changefreq>
    </url>
    <?php } ?>

    <?php foreach($brands as $brand) { ?>
    <url>
        <loc><?php echo base_url() . "Products/Brand/" . rawurlencode($brand->name) ?></loc>
        <image:image>
            <image:loc><?= base_url('assets/images/brands/') ?> <?= $brand->id ?>.png</image:loc>
            <image:caption><?= preg_replace('/&(?!#?[a-z0-9]+;)/', '&amp;', $brand->name) ?> image</image:caption>
            <image:geo_location>Kota Mataram, Indonesia</image:geo_location>
            <image:title><?= preg_replace('/&(?!#?[a-z0-9]+;)/', '&amp;', $item->name) ?></image:title>
        </image:image>
        <priority>0.5</priority>
        <changefreq>daily</changefreq>
    </url>
    <?php } ?>


</urlset>