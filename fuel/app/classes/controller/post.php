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
        // $data['date'] = Model_Post::find_all();

        // $data = array();
        $data['date'] = DB::select()-> from('posts')->where('title', '!=', 'テストです')->as_object()->execute();
        echo '<pre>';
        $view = view::forge('post/form', $data, false);

        // $data['date'] = Model_Post::find_by('title', 'テストです', '=');
        // $view = view::forge('post/form', $data, false);
        // $view->title = '<h1>こんにちは</h1>';
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

    public function action_show(){
        // $data = array();
        $data = Model_Post::find_by_pk(25);
        $data->summary = 'テストです';
        $data->save();
        var_dump($data);
        // $hello = Model_Post::find_by('id', 25);
        // var_dump($hello);
    }
}