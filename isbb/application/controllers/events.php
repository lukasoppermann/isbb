<?php if (! defined('BASEPATH')) exit('No direct script access');

define('__ROOT__', dirname(dirname(__FILE__)));
require(__ROOT__.'/../vendor/autoload.php');

class Events extends MY_Controller {

	//php 5 constructor
	function __construct()
 	{
		parent::__construct();
	}

	function index($calendar)
	{
    print_r('e');
    $client = new \Contentful\Delivery\Client('61a265499739975609d7117600f6dd934e4bf75a6d2c8cd5454ad072b0ee165a', 'dj491h0nq4l5');

    $data = $this->data;
	  $data['page'] = "";

    $data['page'] .= $this->entries->get_element('excerpt', $this->navigation->current());
    $data['title'] = "Workshops ".$calendar;
		// load view
		view('custom/events', $data);
	}
}
