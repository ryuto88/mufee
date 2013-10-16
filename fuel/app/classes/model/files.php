<?php
 class Model_Files extends Orm\Model{
 //使用するフィールド名をセット
 protected static $_properties = array(
 'title',
 'content',
 );
 //テーブル名がモデル名の複数形なら省略可
 protected static $_table_name = 'sample';
 public static function validate($filename,$filepath)
 {
 $columns=array('title','content');
 $values=array('title' => $filename,
               'content' => $filepath,
     );
 $query=DB::insert('sample')->columns($columns)->values($values)->execute();
 
 }
 }
?>
