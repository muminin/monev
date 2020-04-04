<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends WH_Controller
{

	public function index()
	{
		$data["head"] = "Dashboard";
		$this->show_layout($data);
	}
}
