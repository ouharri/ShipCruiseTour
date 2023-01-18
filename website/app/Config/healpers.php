 <?php
function url($url ='') : string
{
    return BURL.$url;
}
 function redirect($page,$data=[])
 {
     extract($data);
     header('location: ' . BURL  .$page);
 }
 function debug($var){
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
    die();
 }