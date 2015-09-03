<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Model extends CI_Model{
    protected $table_name;

    public function get_all(){
        $this->db->order_by("created_at ASC, id ASC");
        return $this->db->get($this->table_name)->result();
    }
    public function get_by_id($id)
    {
        $query = $this->db->get_where($this->table_name, array('id' => $id, 'is_active'=>1));
        $result = $query->result();
        if($result)
            return $result[0];
        return false;
    }
    public function get_by_key($key, $case_sensitive=false)
    {
        if($case_sensitive){
            $this->db->where('`key` like BINARY "'.$key.'" and `is_active`=1');
            $result = $this->db->get($this->table_name)->result();
            if($result){
                return $result[0];
            }
        }else{
            $query = $this->db->get_where($this->table_name, array('key' => $key, 'is_active'=>1));
            $result = $query->result();
            if($result){
                return $result[0];
            }
        }
        return false;
    }
    public function update($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update($this->table_name, $data);
    }
    public function add($object)
    {
        $this->db->insert($this->table_name, $object);
        return $this->db->insert_id();
    }
    public function remove($id)
    {
        $this->db->where('id', $id);
        $this->db->update($this->table_name, array('is_active'=>0));
    }
    public function count_total(){
        return $this->db->count_all_results($this->table_name);
    }
    public function get_page($page){
        $start = (($page-1)*20);
        $end = $page*20;
        $this->db->where(array('is_active'=>true));
        $this->db->order_by("created_at desc");
        return $this->db->get($this->table_name, $end, $start)->result();
    }
}