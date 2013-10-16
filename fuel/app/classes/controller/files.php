<?php

class Controller_Files extends Controller{
    
    public function action_index()
    {
        return View::forge('files/index');
    }
    
    public function action_upload(){
        
        // 初期設定
        $config = array(
            'path' => DOCROOT . 'uploadfiles',
            'randomize' => true,
            'ext_whitelist' => array('mp3'),
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
        
        foreach(Upload::get_files() as $file){
        //ファイル情報を使用した処理
         
            if (Input::method() == 'POST')
            {  
                //モデルに保存したファイル名とファイルパスを渡す
                $val = Model_Files::validate($file['saved_as'],$file['saved_to']);

                return Response::forge(View::forge('files/upload'));
            }
            else 
            {
                return Response::forge(View::forge('files/index'));
            }
               
            
            }
	}
    }
    

?>
