<?php

namespace Model;
class Userinfo extends \Model {
    protected static $_properties = array(
        'username',
        'mailaddress',
        'password',
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
    
    //バリデーションの設定
    public static function validate($factory){
        //バリデーションのインスタンス化
        $val = Validation::forge($factory);
        
        //バリデーションフィールドの追加
        $val->add_field('username', 'ユーザー名', 'required|max_length[255]');
        $val->add_field('email', 'メールアドレス', 'required|valid_email');
        $val->add_field('password', 'パスワード', 'required|max_length[100]');
        return $val;
}

            
}

?>
