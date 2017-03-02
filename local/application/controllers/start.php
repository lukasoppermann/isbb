<?php 
if (! defined('BASEPATH')) exit('No direct script access');

// open class
class Start extends MY_Controller {

	//php 5 constructor
	function __construct() 
 	{
		parent::__construct();
	}
	
	function index()
	{
		// get current Page
		$url = explode('/',$this->navigation->current("path"));
		//
		$page = $url[2];
		$item = $this->navigation->variables();
		//
		$data = $this->data;
		$data['page'] = $this->entries->get($this->navigation->current());
		if(!isset($page) || $page == "home")
		{
			// weiterbildung
			$this->entries->get(2);
			$weiterbildung = "<div class='box'><h2>".$this->entries->get_element('title', 2)."</h2>";
			$weiterbildung .= $this->entries->get_element('excerpt', 2)."<p><a href='".lang_url(TRUE)."weiterbildung/curriculum' class='link'>Mehr zur Weiterbildung</a></p></div>";
			// philosophie
			$this->entries->get(21);
			$philosophie = "<div class='box'><h2>".$this->entries->get_element('title', 21)."</h2>";
			$philosophie .= $this->entries->get_element('excerpt', 21)."<p><a href='".lang_url(TRUE)."ueber-das-institut-systemische-beratung-berlin/philosophie' class='link'>Mehr zur Philosophie</a></p></div>";
			// news
			$news = get_db_data('isbb_entries', array('select' => '*', 'where' => array('type' => 2), 'limit' => 3, "order" => "date DESC"));
			if(isset($news) && !empty($news))
			{
				$_news = "<div class='box right news'><h2>News</h2>";
				foreach($news as $key => $value)
				{
					$_news .= "<a href='./news/".urlencode(strtolower(replace_accents(trim($value['title'])))).'/'.$value['id']."'><h3>".$value['title']."</h3>";
					$_news .= "<p>".$value['excerpt']."</p></a>";
				}
				$_news .= "</div>";
			}
			else
			{
				$this->entries->get(28);
				$_news = "<div class='box right news'><h2>".$this->entries->get_element('title', 28)."</h2>";
				$_news .= '<p>'.$this->entries->get_element('excerpt', 28)."</p></div>";				
			}
			$data['page'] .= $weiterbildung.$_news.$philosophie;
			$data['title'] = "Herzlich Willkommen im Institut für Systemische Beratung in Berlin";		
			$data['body_id'] = " id='home'";
		}
		// news
		if($page == "news")
		{
			if(!empty($item))
			{
				$id = explode('/',$item);
				if(isset($id[1]))
				{
					$news = get_db_data('isbb_entries', array('select' => '*', 'where' => array('id' => $id[1]), 'limit' => 1));
					$data['page'] = "<h1>".$news[0]['title']."</h1>";
					$data['page'] .= "<p>".$news[0]['excerpt']."</p>";
					$data['page'] .= "<p>".$news[0]['content']."</p>";
					$data['title'] = $news[0]['title'];
				}
				else
				{
					$item = NULL;
				}
			}
			if(empty($item))
			{
				$data['title'] = "News Archiv";
				$data['page'] = "<h1>News Archiv</h1>";
				$news = get_db_data('isbb_entries', array('select' => '*', 'where' => array('type' => 2), "order" => "date DESC"));
				foreach($news as $key => $item)
				{
					$data['page'] .= "<a href='./news/".urlencode(strtolower(replace_accents(trim($item['title'])))).'/'.$item['id']."'><h2>".$item['title']."</h2></a>";
					$data['page'] .= "<p>".$item['excerpt'];
					$data['page'] .= "<a href='./news/".urlencode(strtolower(replace_accents(trim($item['title'])))).'/'.$item['id']."' class='more'>weiterlesen</a></p>";
				}
			}
			$data['body_id'] = " id='news'";
		}
		view('content', $data);
	}
//
}	
/* End of file Start.php */
/* Location: ./application/controllers/Start.php */