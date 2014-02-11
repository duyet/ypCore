<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>

<rss version="2.0"
	xmlns:atom="http://www.w3.org/2005/Atom"
	xmlns:content="http://purl.org/rss/1.0/modules/content/"
	xmlns:wfw="http://wellformedweb.org/CommentAPI/"
	xmlns:dc="http://purl.org/dc/elements/1.1/"
	xmlns:sy="http://purl.org/rss/1.0/modules/syndication/"
	xmlns:slash="http://purl.org/rss/1.0/modules/slash/">

	<channel>
		<title><?php echo $title ?></title>
		<atom:link href="<?php echo $site_url ?>/rss" rel="self" type="application/rss+xml" />
		<description type="text"><?php echo $description ?></description>
		<link><?php echo $site_url ?> ?></link>
		<updated><?php echo $lastpostmodified ?></updated>
		<language><?php echo $language ?></language>

	<?php if ($posts) { ?>
		<?php foreach($posts as $post) { ?>
		<item>
			<title><![CDATA[<?php echo $post['title'] ?>]]></title>
			<link><?php echo urlencode($post['link']) ?></link>
			<comments><?php echo urlencode($post['link']) ?>#comment</comments>
			<pubDate><?php echo date('D, d M Y H:i:s +0000', $post['post_date']) ?></pubDate>
			<description><?php echo $post['description'] ?></description>
			<content:encoded><![CDATA[<?php echo $post['content'] ?>]]></content:encoded>
		</item>
		<?php } ?>
	<?php } ?>
	</channel>
</rss>