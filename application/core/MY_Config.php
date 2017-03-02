<?php if (! defined('BASEPATH')) exit('No direct script access');
/**
 * CodeIgniter MY_Config Libraries
 *
 * @package		CodeIgniter
 * @subpackage	Libraries
 * @category	Config
 * @author		Lukas Oppermann - veare.net
 * @link		http://doc.formandsystem.com/core/config
 */
class MY_Config extends CI_Config {

	var $CI;
	
	//php 5 constructor
	function __construct() 
 	{
		parent::__construct();
	}
	// --------------------------------------------------------------------
	/**
	 * config from db
	 */
	function config_from_db()
	{
		$this->CI =& get_instance();
		$this->CI->load->database();
		// 
		$this->CI->db->select('id, key, type, value');
		$this->CI->db->from($this->item('prefix').$this->item('db_data'));
		$this->CI->db->where('key', 'settings');

		$query = $this->CI->db->get();		
		foreach ($query->result() as $row)
		{
			if(is_array($values = json_decode($row->value, TRUE)))
			{
				if(array_key_exists($this->item('lang_id'), $values))
				{
					if(is_array($values[$this->item('lang_id')]))
					{
						$this->set_item($row->type, $values[$this->item('lang_id')]);
					}
					else
					{
						$this->set_item($row->type, $values[$this->item('lang_id')]);
					}
				}
				else
				{
					$this->set_item($row->type, $values);
				}
			}
			else
			{
				$this->set_item($row->type, $row->value);
			}
		}
	}	
// --------------------------------------------------------------------
/**
 * unslash_item - returns config item without slash
 *
 * @param string 
 * @return string
 */
	function unslash_item($item)
	{
		if ( ! isset($this->config[$item]))
		{
			return FALSE;
		}

		return rtrim($this->config[$item], '/');
	}
	
}
/* End of file MY_Config.php */
/* Location: ./application/core/MY_Config.php */