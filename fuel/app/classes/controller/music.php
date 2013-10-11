<?php
class Controller_Music extends Controller
{
 public function action_index()
 {
 return Response::forge(View::forge('music/music'));
 }
}
 