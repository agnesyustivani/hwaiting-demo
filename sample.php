<?php
echo('<!-- sample.php -->');
$width_inner = $width-10;
$style_inner = 'style=\"width:'.$width_inner.'px;background-image:url(\'http://ybread.org/apps~/widget/bg/'.$bgcolor.'\');padding:45px 5px 10px;height:305px;\"';// style=\"width:165px;background-image:url(\'http://ybread.org/apps~/widget/bg/orange-1.jpg\');padding:45px 5px 10px;height:305px;\"
$style_img = 'style=\"\"';

$style = 'style=\"width:'.$width.'px\"';
$bg = '';
?>
 
var ymi = "http://ybread.org/2013/07/";
<?php echo('document.write("<link rel=\'stylesheet\' type=\'text/css\' href=\'widget.css\'><div id=\'w-outer-box\' '.$style.'></div>");
var html = "<div id=\"w-inner-box\" '.$style_inner.'>";
html += "<div id=\"w-title\" style=\"padding:15px 0;\"> </div>";
html += "<div id=\"w-img\" style=\"text-align:left;\"><img src=\"http://ybread.org/wp-content/uploads/'.$yy.'/'.$m.'/ODB_'.$d.$m.$y.'-150x150.jpg\" /></div>";
html += "<div id=\"w-text\" style=\"font-size:10pt;height:50px;overflow:hidden;\"><p style=\"\">'.$text.'...</p></div>";
html += "</div>";  ');?>
<!--document.getElementById("w-outer-box").innerHTML = html;-->

