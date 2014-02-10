{'<?xml version="1.0" encoding="UTF-8"?>';}

<rss version="2.0"
	xmlns:atom="http://www.w3.org/2005/Atom"
	xmlns:content="http://purl.org/rss/1.0/modules/content/"
	xmlns:wfw="http://wellformedweb.org/CommentAPI/"
	xmlns:dc="http://purl.org/dc/elements/1.1/"
	xmlns:sy="http://purl.org/rss/1.0/modules/syndication/"
	xmlns:slash="http://purl.org/rss/1.0/modules/slash/">

	<channel>
		<title>{$title}</title>
		<atom:link href="{$site_url}/rss" rel="self" type="application/rss+xml" />
		<description type="text">{$description}</description>
		<link>{$site_url}}</link>
		<updated>{$lastpostmodified}</updated>
		<language>{$language}</language>

	<?php if ($posts) {}
		<?php foreach($posts as $post) {}
		<item>
			<title><![CDATA[{$post['title']}]]></title>
			<link>{urlencode($post['link'])}</link>
			<comments>{urlencode($post['link'])}#comment</comments>
			<pubDate>{date('D, d M Y H:i:s +0000', $post['post_date'])}</pubDate>
			<description>{$post['description']}</description>
			<content:encoded><![CDATA[{$post['content']}]]></content:encoded>
		</item>
		<?php }}
	<?php }}
	</channel>
</rss>