<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Paging {

    var $ci;

    function __construct() {
        $this->ci =& get_instance();
    }

    function init($user_config) {


        $default = array();
        $default['base_url'] = '';
        $default['total_rows'] = 1;
        $default['query_string_segment'] = 'page';
        $default['per_page'] = 20;
        $default['num_links'] = 3;
        $default['use_page_numbers'] = true;
        $default['page_query_string'] = true;
        $default['display_pages'] = true;
        $default['cur_tag_open'] = '<li class="active"><a href="#">';
        $default['cur_tag_close'] = '</a></li>';
        $default['num_tag_open'] = '<li>';
        $default['num_tag_close'] = '</li>';
        $default['full_tag_open'] = '<ul class="pagination">';
        $default['full_tag_close'] = '</ul>';

        $default['next_tag_open'] = '<li>';
        $default['next_tag_close'] = '</li>';
        $default['prev_tag_open'] = '<li>';
        $default['prev_tag_close'] = '</li>';

        $default['first_link'] = '처음';
        $default['next_link'] = '<span aria-hidden="true">&raquo;</span>';
        $default['prev_link'] = '<span aria-hidden="true">&laquo;</span>';
        $default['last_link'] = '마지막';
        $default['first_tag_open'] = '<li>';
        $default['first_tag_close'] = '</li>';
        $default['last_tag_open'] = '<li>';
        $default['last_tag_close'] = '</li>';

        if (!strpos($user_config['base_url'],'?')) {
            $user_config['base_url'] = $user_config['base_url'].'?';
        }

        $config = $user_config + $default;
        $this->ci->pagination->initialize($config);
        return $config;
    }
}