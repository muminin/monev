<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends WH_Controller
{

	public function login()
	{
		$data["head"] = "Login";
		$this->show_layout($data, LAYOUT_PROCESS);
	}
}
