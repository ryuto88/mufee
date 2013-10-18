<?php
class Controller_Insert extends Controller
{

 
public function action_index(){
 //もしPOST送信されたら

 if (Input::method() == 'POST')
 {
    $val = Model_Insert::validate('insert');
    
    return Response::forge(View::forge('insert/add'));
 }
 else {
    return Response::forge(View::forge('insert/insert'));
}
}
}
?>
