<?php 
class Controller_Example extends Controller_Template{

    public $template = 'example/template';

    public function action_test(){
        $this->template->title = 'FuelPHPの特徴';
        $this->template->content = 'hello!!';
    }

    public function action_index(){
        $this->template->title = 'example限定のテンプレートですindex';
        $this->template->content = 'hello!!index';
    }
}