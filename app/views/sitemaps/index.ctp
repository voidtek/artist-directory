<urlset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd" xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
	<url>
		<loc><?php echo "http://".$_SERVER['HTTP_HOST']; ?>/<?php echo $item[0]['PageBio']['meta_url']; ?></loc>
		<lastmod><?php echo $time->toAtom($item[0]['PageBio']['modified']); ?></lastmod>
		<changefreq>always</changefreq>
		<priority>1.0</priority>
	</url>
	<url>
		<loc><?php echo "http://".$_SERVER['HTTP_HOST']; ?>/<?php echo $item[0]['PageWork']['meta_url']; ?></loc>
		<lastmod><?php echo $time->toAtom($item[0]['PageWork']['modified']); ?></lastmod>
		<changefreq>always</changefreq>
		<priority>0.8</priority>
	</url>
<?php if($item[0]['Artiste'][0]['ArtisteCompte']['statut'] != 'light') { ?>
	<url>
		<loc><?php echo "http://".$_SERVER['HTTP_HOST']; ?>/<?php echo $item[0]['PageContact']['meta_url']; ?></loc>
		<lastmod><?php echo $time->toAtom($item[0]['PageContact']['modified']); ?></lastmod>
		<changefreq>always</changefreq>
		<priority>0.8</priority>
	</url>
	<url>
		<loc><?php echo "http://".$_SERVER['HTTP_HOST']; ?>/<?php echo $item[0]['PageEvenement']['meta_url']; ?></loc>
		<lastmod><?php echo $time->toAtom($item[0]['PageEvenement']['modified']); ?></lastmod>
		<changefreq>always</changefreq>
		<priority>0.8</priority>
	</url>
<?php } ?>
	<url>
		<loc><?php echo "http://".$_SERVER['HTTP_HOST']; ?>/<?php echo $item[0]['PageGalerie']['meta_url']; ?></loc>
		<lastmod><?php echo $time->toAtom($item[0]['PageGalerie']['modified']); ?></lastmod>
		<changefreq>always</changefreq>
		<priority>0.8</priority>
	</url>
<?php foreach ($item_galery as $itemtest):?>
	<url>
		<loc><?php echo "http://".$_SERVER['HTTP_HOST']; ?>/<?php echo $item[0]['PageGalerie']['meta_url']; ?>/<?php echo $itemtest['Theme']['url'] ?></loc>
		<lastmod><?php echo $time->toAtom($itemtest['Theme']['modified']); ?></lastmod>
		<changefreq>monthly</changefreq>
		<priority>0.8</priority>
	</url>
	<?php foreach ($itemtest["Media"] as $itemtestitem):?>
		<url>
			<loc><?php echo "http://".$_SERVER['HTTP_HOST']; ?>/<?php echo $item[0]['PageGalerie']['meta_url']; ?>/<?php echo $itemtest['Theme']['url'] ?>/<?php echo ($itemtestitem['url']) ?></loc>
			<lastmod><?php echo $time->toAtom($itemtestitem['modified']); ?></lastmod>
			<changefreq>monthly</changefreq>
			<priority>0.8</priority>
		</url>
	<?php endforeach; ?>
<?php endforeach; ?>
</urlset>
