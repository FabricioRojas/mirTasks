<?php 
    function scanFolder($path){
        $folders = scandir($path);
        $folders = array_diff(scandir($path), array('.', '..'));
        $list = '<ul>';
        foreach($folders as $folder){
            $path .= '/'.$folder;
            $files = scandir($path);
            $files = array_diff(scandir($path), array('.', '..'));
            $list .= '<li>'.$folder.'</li>';
            $list .= '<ol>';
            foreach($files as $file){
                $list .='<li><a href="'.$path.'/'.$file.'">'.$file.'</a></li>';
            }
            $list .= '<ol>';
        }
        $list .= '</ul>'; 
        return $list;
    }
?>