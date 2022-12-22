 <?php
function url($url ='') : string
{
    echo BURL.$url;
    return '';
}
 function redirect($page,$data=[])
 {
     extract($data);
     header('location: ' . BURL  .$page);
 }