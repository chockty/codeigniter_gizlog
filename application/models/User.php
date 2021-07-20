<?php

class Blog_model extends CI_Model {

public function __construct()
{
				// CI_Model constructor の呼び出し
				parent::__construct();
}

public function get_test()
{
//				$query = $this->db->get('entries', 10);
				return 'test';
}


}
