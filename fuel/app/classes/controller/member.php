<?php 
class Controller_Member extends Controller_Template{
    public $template = 'member/template';

    public function action_index(){
        $this->template->title = 'memberのテンプレートです';
        $this->template->content = 'memberのコンテントです';
    }
    public function action_test(){
        $this->template->title = 'memberのテンプレートですtest';
        $this->template->content = View::forge('member/test');;

    }

}