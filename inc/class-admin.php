<?php

class WhiteLabel_Admin {
    private $pageTitle = 'white-label';
    private $menuSlug = 'white-label';
    private $menuTitle = 'White Label';
    private $capabilities = 'manage_options';
    private $icon = 'dashicons-editor-table';


    public static function setup() {
        add_menu_page(
            $this->$pageTitle, 
            $this->$pageTitle, 
            $this->$pageTitle, 
        );
    }

}