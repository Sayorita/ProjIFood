<?php
class VerUrl{
    function trocarUrl($url){
        if(empty($url)){
            $url = "principal.php";
        } else {
            $url = "secoes/$url.php";
        }
        include_once($url);
    }
}
?>