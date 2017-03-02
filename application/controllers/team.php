<?php if (! defined('BASEPATH')) exit('No direct script access');

class Team extends MY_Controller {

	//php 5 constructor
	function __construct() 
 	{
		parent::__construct();
	}
	
	function index()
	{
		// get data (menus, etc.)
		$data = $this->data;
		css_add('screen','team');
		js_add('default','jquery, team');
		// get data
		$array = get_db_data('projects', $db = array('select' => '*', 'order' => 'id'));
		shuffle($array);
		// build page
		$page = NULL;
		
		foreach($array as $item)
		{
			$positions = NULL;
			foreach(explode(',', $item['tags']) as $position)
			{
				$positions .= '<span class="'.strtolower(replace_accents(trim($position))).'">'.ucfirst(trim($position)).'</span>';
			}
			$page .= "<div class='item-container'><div class='item'>
						<img src='".base_url(TRUE).'media'.$item['img']."' alt='".$item['title']."' />
						<div class='item-bar'>
							<span class='name'>".$item['title']."</span><br />
							<span class='positions'>".$positions."</span>
						</div>
						<span class='info'>".$item['info']."<br />							
							".(isset($item['link']) ? "<span class='website'><a target='_blank' class='link' href='http://".trim($item['link'], 'http://')."'>Webseite</a></span>": "")."
						</span>
					</div></div>";
		}
		
		$data['page'] = "<div id='team'>".$page."</div>";
		//
		$data['title'] = "Team";
		// load view
		view('custom/team', $data);
	}
}
/* End of file team.php */
/* Location: ./application/controllers/team.php */