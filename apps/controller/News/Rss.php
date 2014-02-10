<?php 
class Controller_News_Rss extends ypController {
	public function Index() {
		$this->Response->addHeader('Content-Type: text/xml; charset=utf-8');
		$setting = $this->Setting->gets();
		$this->set('title', $this->Setting->get('site_title'));
		$this->set('description', $this->Setting->get('site_description'));
		$this->set('site_url', $this->Request->siteUrl);
		$this->set('lastpostmodified', date('D, d M Y H:i:s +0000'));
		$this->set('language', $this->Setting->get('language'));
		
		$this->Loader->model('News/Rss');
		$posts = $this->Model_News_Rss->getRssItem($this->Setting->get('rss_max_post'));
		$this->set('posts', $posts);
		$this->setTemplate('module/News/Rss.php');
		$this->Response->setOutput($this->render());
	}
}