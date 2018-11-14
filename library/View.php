<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of View
 *
 * @author web
 */
class View {

    private $template;
    private $page_view;

    public function __construct($template, $page_view) {
	$this->template = $template;
	$this->page_view = $page_view;
    }

    public function render() {
	include_once $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . $this->template;
    }

}
