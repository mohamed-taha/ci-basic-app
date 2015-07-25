<?php
// this controller created for learning purposes
 defined('BASEPATH') or exit('No direct script access allowed');

class Hello extends CI_Controller{
	
	public function __construct(){
		
		parent::__construct();
		// initialization goes here
	}
	
	public function index(){
		echo "default action, index ";
	}
	
	public function one($p1, $p2){
		
		echo "this one method <br> with params: $p1, $p2";
	}
}
