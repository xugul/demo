<!--<!DOCTYPE html>
<html>
    <head>
        <script     src="/jquery-1.7.2.min.js"></script>
    </head>
    
    <body>

        <div class="content">
            
            </div>
        <input type="button" name="点击" value="lal" id="bt"/>
        <Script>
         
               alert('dfsf');
              $("div").data("blah",'hello'); 
              $('#bt').click(function(){
                  alert($("div").data("blah"));
              });
        </script> 
    </body>
        
</html>
-->
<?php
//// readfile('http://www.baidu.com/img/bd_logo1.png', 'r');
//$file = "http://www.baidu.com/img/bd_logo1.png";
//print_r(strrchr($file, "."));
//
////$email  = 'name@example.com';
////$domain = strstr($email, '@');
////echo $domain; // 打印 @example.com
////
////$user = strstr($email, '@', true); // 从 PHP 5.3.0 起
////echo " ".$user; // 打印 name
//
//
// Function: 获取远程图片并把它保存到本地
//
//
// 确定您有把文件写入本地服务器的权限
//
//
// 变量说明:
// $url 是远程图片的完整URL地址，不能为空。
// $filename 是可选变量: 如果为空，本地文件名将基于时间和日期
// 自动生成.
//function GrabImage($url,$filename="") {
//if($url==""):return false;endif;
//if($filename=="") {
//$ext=strrchr($url,".");
//if($ext!=".gif" && $ext!=".png"):return false;endif;
//$filename=date("Ymd").$ext;
//}
//ob_start();
//readfile($url);
//$img = ob_get_contents();
//ob_end_clean();
//$size = strlen($img);
//$fp2=@fopen($filename, "a");
//fwrite($fp2,$img);
//fclose($fp2);
//return $filename;
//}
//$img=GrabImage("http://www.baidu.com/img/bd_logo1.png","");
//if($img):echo '<pre><img src="'.$img.'"></pre>'; 
//else:echo "false";
//endif;
//print_r("好开心啊！终于对git搞懂一点了");
//echo "<br/>";
////$city = "上海";
////$name = "林子";
////$nothing_here = "是啊，什么都没有";
////$location_vars = array('city','name');
////$result = compact('event','nothing_here',$location_vars);
////print_r($result);
//$input = array("red", "green", "blue", "yellow");
//array_splice($input,-2,2);
//print_r($input);echo "<br/>";
//print_r(array_search('red', $input));
session_start();
if(!isset($_SESSION['count'])){
    $_SESSION['count'] = 0;
} else{
    $_SESSION['count']++;
}
print_r($_SESSION);die;
?>
