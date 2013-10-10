<?php

class Controller_Files extends Controller{
    
    public function action_index()
    {
        return View::forge('files/index');
    }
    
    public function action_upload(){
        
        // 初期設定
        $config = array(
            'path' => DOCROOT . 'files',
            'randomize' => true,
            'ext_whitelist' => array('img', 'jpg', 'jpeg', 'gif', 'png'),
        );
        
        // cofigを適用
        Upload::process($config);
 
        // 指定された型かチェック
        if (Upload::is_valid())
        {
            // アップロード確定
            Upload::save();
        }
        else
        {
            return  View::forge('files/index');
 
            // error処理
            $html_error = '';
            foreach (Upload::get_errors() as $error) $html_error .= $error['errors'][0]['message'] . '<br />';
            set_safe('html_error', $html_error);
            
            return;
        }
 
		return View::forge('files/upload');
	}
    }
    

?>
