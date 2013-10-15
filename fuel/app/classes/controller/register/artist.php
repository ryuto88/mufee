<?php

class Controller_Register_Artist extends Controller{
    public function action_index(){
        return View::forge('register/artist/index');
    }
    
    public function action_confirm(){
            return View::forge('register/artist/confirm');
    }
    
     public function action_exe(){
            $insert = Model_User::forge()->set(array(
                            'name' => INPUT::post("name"),
                            'email' => INPUT::post("email"),
                            'password' => INPUT::post("password"),
                        )
                    );
            $insert->save();
            
            return View::forge('register/artist/index');
     }
}

?>