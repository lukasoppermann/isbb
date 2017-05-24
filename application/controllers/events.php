<?php if (! defined('BASEPATH')) exit('No direct script access');

class Events extends MY_Controller {

	//php 5 constructor
	function __construct()
 	{
		parent::__construct();
	}

	function index($calendar)
	{
    $data = $this->data;
	  $data['page'] = "";

    $data['page'] .= $this->entries->get_element('excerpt', $this->navigation->current());
    $data['title'] = "Workshops ".$calendar;
		// load view
		view('custom/events', $data);
	}
}
