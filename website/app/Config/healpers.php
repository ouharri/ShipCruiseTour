 <?php
function url($url ='') : string
{
    return BURL.$url;
}
 function redirect($page,$data=[])
 {
//     extract($data);
     header('location: ' . BURL  .$page);
 }