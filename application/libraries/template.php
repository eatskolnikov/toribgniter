<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Template {

    private $css_files = array();
    private $js_files = array();
    private $title = "Page title";
    private $meta_description = "";
    private $CI;
    public function __construct(){
        $this->CI =& get_instance();
    }
    public function set_css($fileName){ $this->css_files[$fileName] = 1; }
    public function set_js($fileName){ $this->js_files[$fileName] = 1; }

    public function get_css(){
        foreach($this->cssFiles as $css => $display)
        {
            echo "<link href='".assets_url()."css/".$css.".css' rel='stylesheet' type='text/css'>";
        }
    }
    public function get_js(){
        foreach($this->jsFiles as $js => $display)
        {
            echo "<script src='".assets_url()."js/".$js.".js' type='text/javascript'></script>";
        }
    }
    public function get_meta_description(){ echo $this->meta_description; }
    public function set_meta_description($meta_description){ $this->meta_description = $meta_description; }

    public function get_title(){ echo $this->title; }
    public function set_title($new_title){ $this->title = $new_title; }
};