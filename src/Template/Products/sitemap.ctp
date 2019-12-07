<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]/";?>
<url>
    <loc><?php echo $actual_link; ?></loc>
	<lastmod><?php echo date('Y-m-d');?></lastmod>
	<changefreq>weekly</changefreq>
	<priority>0.8</priority>
</url>
<?php foreach($products as $product): ?>
<url>
    <loc><?php echo $actual_link.'shop/'.$product->slug; ?></loc>
	<lastmod><?php echo date('Y-m-d', strtotime($product->modified));?></lastmod>
</url>
<?php endforeach; ?>
</urlset>
