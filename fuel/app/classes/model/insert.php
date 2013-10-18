<?php
 class Model_Insert extends Orm\Model{
 //使用するフィールド名をセット
 protected static $_properties = array(
 'title',
 'content',
 );
 //テーブル名がモデル名の複数形なら省略可
 protected static $_table_name = 'sample';
 public static function validate($factory)
 {
     echo $factory;
     exit;
 $columns=array('title','content');
 $values=array('title' => Input::post('title'),
    'content' => Input::post('content'),
     );
 $query=DB::insert('sample')->columns($columns)->values($values)->execute();
 
 }
 }
?>
