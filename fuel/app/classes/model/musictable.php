<?php
use Orm\Model;

class Model_Musictable extends Model
{
	protected static $_properties = array(
		'id',
		'title',
		'path',
		'genre',
		'created_at',
		'updated_at',
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_save'),
			'mysql_timestamp' => false,
		),
	);
        
        protected static $_table_name = 'musictables';
	public static function validate($filename,$filepath,$genre)
	{
            $genre=1111;
            $columns=array('title','path','genre');
            $values=array('title' => $filename,
                'path' => $filepath,
                'genre' => $genre,
                );
            
            $query=DB::insert('musictables')->columns($columns)->values($values)->execute();
            
	}

}
