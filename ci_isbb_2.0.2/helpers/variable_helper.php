<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CodeIgniter Config Helpers
 *
 * @package		CodeIgniter
 * @subpackage	Helpers
 * @category	Helpers
 * @author		Lukas Oppermann - veare.net
 * @link		http://doc.formandsystem.com/helpers/variable
 */

// --------------------------------------------------------------------
/**
 * variable - checks if variable exists, if true, return
 *
 * @param var &$var
 * @return $var | NULL
 */

function variable( &$var, $default = NULL )
{
    if( !isset($var) && !is_array($var) )
    {
        return $default;
    }
	elseif( is_array($var) && count($var) < 1 )
	{
        return $default;		
	}
    else
    {
        return $var;
    }
}

/* End of file variable_helper.php */
/* Location: ./system/helpers/variable_helper.php */