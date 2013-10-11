<?php

class Controller_Register_User extends Controller{
    
        public function action_index(){
            return View::forge('register/user/index');
        }
        
        public function action_confirm(){
            return View::forge('register/user/confirm');
        }
}
?>
