<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CodeIgniter Calendar Helpers
 *
 * @package		CodeIgniter
 * @subpackage	Helpers
 * @category	Helpers
 * @author		Lukas Oppermann - veare.net
 * @link		http://doc.formandsystem.com/helpers/calendar
 */
// --------------------------------------------------------------------
/**
 * events - get and show events
 *
 * @param type
 * @param template
 * @return string doctype
 */

function events($type = NULL, $params = array('template' => NULL, 'table' => NULL))
{
	$CI = &get_instance();
	empty($params['template']) ? $params['template'] = 'custom/event' : ''; 
	$params['table'] = $CI->config->item('prefix').'calendar';
	
	css_add('screen','events');
	
	$evts = get_db_data($params['table'], $db = array('select' => '*', 'where' => array('type' => $type), 'order' => 'date'));

	$events = NULL;
	if(!empty($evts))
	{	
		foreach($evts as $event)
		{
			$events .= $CI->load->view($params['template'], $event, TRUE);
			unset($event);
			$event['dates'] = null;
		}
	}
	return $events;	
}
/* End of file calendar_helper.php */
/* Location: ./system/helpers/calendar_helper.php */