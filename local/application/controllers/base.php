<?php 
if (! defined('BASEPATH')) exit('No direct script access');

// open class
class Base extends MY_Controller {

	//php 5 constructor
	function __construct() 
 	{
		parent::__construct();
	}
	
	function index($page = NULL)
	{
		$data = $this->data;
		$data['page'] = $this->entries->get($this->navigation->current());
		
		if($page == "termine")
		{
			$this->load->helper('calendar');
			$data['page'] .= events($this->entries->get_element('calendar_type', $this->navigation->current()));
			$data['page'] .= $this->entries->get_element('excerpt', $this->navigation->current());
			$data['title'] = "Workshops";
		}
		elseif($page == "kontakt")
		{
			css_add("kontakt-0.0.1");
			js_add("http://maps.google.com/maps/api/js?sensor=false");
			js_add("jquery, kontakt");


			$data['head_img'] = '<div id="head_img"><div id="map_container"><div id="map_canvas" style="width:100%; height:100%"></div></div></div>';
			//http://maps.google.de/maps?q=Institut+Systemische+Beratung+Berlin&hl=en&ll=52.529433,13.411442&spn=0.003596,0.011362&sll=52.529646,13.410343&sspn=0.008864,0.022724&z=17
		}
		elseif(!isset($page))
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
		view('content', $data);
	}
//
}	
/* End of file Base.php */
/* Location: ./application/controllers/Base.php */