<?php
class Controller_Post extends Controller {
    public function action_auto_insert(){
        for($i = 0; $i < 10 ; $i++){
            $post = Model_Post::forge();

            $row = array();
            $row['title'] = $i . '番目の投稿の件名';
            $row['summary'] = $i . '番目の投稿の概要';
            $row['body'] = $i . '番目の投稿です';

            $post->set($row);
            $post->save();
        } echo 'Finished!';
    }

    public function action_index(){
        $data = array();
        $data['rows'] = Model_Post::find_all();
        return View::forge('post/list', $data);
    }

    public function action_form(){
        $view = view::forge('post/form', array(), false);
        $view->title = '<h1>こんにちは</h1>';
        return $view;
    }
    
    public function action_save(){
        $form = array();
        $form['title'] = Input::post('title');
        $form['summary'] = Input::post('summary');
        $form['body'] = Input::post('body');
        $post = model_Post::forge();
        $post->set($form);
        $post->save();
        Response::redirect('index.php/post');

    }
}