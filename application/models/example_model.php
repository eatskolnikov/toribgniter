<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class example_model extends MY_Model {
    public function __construct(){
        parent::__construct();
        $this->table_name = 'example_table';
    }
}

