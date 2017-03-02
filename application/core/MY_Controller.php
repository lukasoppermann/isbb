<?php if (! defined('BASEPATH')) exit('No direct script access');
/**
 * CodeIgniter MY_Controller Libraries
 *
 * @package		CodeIgniter
 * @subpackage	Libraries
 * @category	Controller
 * @author		Lukas Oppermann - veare.net
 * @link		http://doc.formandsystem.com/core/controller
 */
class MY_Controller extends CI_Controller {

	var $data	= null;
	//php 5 constructor
	function __construct() 
 	{
		parent::__construct();
		// get config data
		$this->config->config_from_db();
		// set charset
		header("Content-type: text/html;charset=".$this->config->item('charset'));
		// Define Variables
		$this->data['page_name'] = $this->config->item('page_name');
		// --------------------------------------------------------------------
		// load assets
		if(browser() != 'msie')
		{
			css_add('screen',array('base,menu,icons,http://fonts.googleapis.com/css?family=Open+Sans:light'));	
		}
		elseif(browser() == 'msie' && version() >= 9 )
		{
			css_add('screen',array('base,menu,icons,http://fonts.googleapis.com/css?family=Open+Sans:light'));	
		}
		elseif(browser() == 'msie' && version() >= 8 && version() < 9)
		{
			css_add('screen',array('base.ie,menu.ie,icons,http://fonts.googleapis.com/css?family=Open+Sans:light'));	
		}
		elseif(browser() == 'msie' && version() < 8)
		{
			css_add('screen',array('base.ie7,menu.ie7,icons,http://fonts.googleapis.com/css?family=Open+Sans:light'));	
		}
		else
		{
			css_add('screen',array('base,menu,icons,http://fonts.googleapis.com/css?family=Open+Sans:light'));	
		}
		// --------------------------------------------------------------------
		// Initialize Menus
		$this->data['menu']['main'] = $this->navigation->tree(array('menu' => '10', 'id' => 'main_menu', 'class_lvl_0' => 'main-submenu'));
		$this->data['menu']['meta'] = $this->navigation->tree(array('id' => 'meta_menu', 'class_lvl_0' => 'meta-submenu', 'menu' => '11'));	
		// Footer
		$this->data['menu']['footer'] = $this->navigation->tree(array('menu' => '12', 'id' => 'footer_menu', 'class_lvl_0' => 'footer-submenu'));
		// prepare submenu
		$this->data['menu']['sub'] = $this->navigation->tree(array('id' => 'sub_menu', 'start_lvl' => '2', 'lvl' => '1', 'menu' => '10', 'hide' => array('0', 'shortcut'), 'item_class' => 'submenu-item'));
		// prepare submenu
		$this->data['menu']['sitemap'] = $this->navigation->sitemap(array('Sitemap' => 10));
		
		if(isset($this->data['menu']['sub']))
		{
			$active = $this->navigation->active('label');
			$this->data['sidebar'] = '<div id="side_bar">
										<h4>'.$active[0].'</h4>
										'.$this->data['menu']['sub'].'</div>';
		}
	}
}
	
/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */