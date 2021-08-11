<?php
	class Controller_User extends Controller{
		public function action_index(){
			$users['users'] = DB::select()->from('users')->as_object()->execute();
			return View::forge('user/index',$users);
		}
	}