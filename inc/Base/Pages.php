<?php

/*
*
* @package Yariko
*
*/

namespace Wrmm\Inc\Base;

class Pages{

    public function register(){

        //Set a new page under Media menu in Parent Dashboard Website
        add_action('admin_menu', array($this,'wrn_add_request_page'));
        //CPT
        /*add_action( 'init', array($this,'cptui_register_my_cpts_bg_resources') );
        //Taxonomies
        add_action( 'init', array($this, 'cptui_register_my_taxes_bgs_categories') );*/
    }

    function wrn_add_request_page(){

    }


    

}
?>