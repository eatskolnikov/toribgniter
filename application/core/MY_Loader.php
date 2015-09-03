<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Loader extends CI_Loader{
    function __construct()
    {
        parent::__construct();
    }
    public function template($view, $vars = array(), $return = FALSE)
    {
        $CI = &get_instance();
        $params = array();
        $params['template_view'] = $view;
        $params['params'] = $vars;
        return $this->_ci_load(array('_ci_view' => '_shared/layout', '_ci_vars' => $this->_ci_object_to_array($params), '_ci_return' => $return));
    }
}