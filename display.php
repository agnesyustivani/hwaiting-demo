<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name = "viewport" content = "width = device-width">
    <title>ODB Widget</title>
    <style type="text/css">
        .body1
        {
            font-family: Verdana;
            font-size:12px;
        }
        .h3
        {
            text-align:left;
            font-family:Verdana;
        }
        /*.td1
        { 
            border:0px;
            margin:0px;
            padding:0px;
        }*/
        .left2
        {
            text-align:center;
            vertical-align:top;
            height:200px;
            width:320px;
        }
    </style>
    
    <?php
        $size = $_GET['size'];
        $color = $_GET['color'];
        $label = '175 x 360px';
        $size_array = array('175px wide','215px wide','215px wide (compact)','300px wide');

        if(($size==null)||($color==null))
        {
            $size = '175';
            $color = 'DKG';
        }
        else
        {
            switch($size)
            {
                case '175':
                    $label = '175 x 360px';
                    break;
                case '215':
                    $label = '215 x 380px';
                    break;
                case '215c':
                    $label = '215 x 180px';
                    break;
                case '300':
                    $label = '300 x 200px';
                    break;
                default:
                    $label = '175 x 360px';
                    break;
            }
        }
    ?>
    <script type="text/javascript">
        function radio_load()
        {
            for(i=0;i<document.forms["widget_form"].size.length;i++)
            {
                if(document.forms["widget_form"].size[i].value=="<?php echo $size; ?>")
                    document.forms["widget_form"].size[i].checked = true;
            }

            for(i=0;i<document.forms["widget_form"].color.length;i++)
            {
                if(document.forms["widget_form"].color[i].value=="<?php echo $color; ?>")
                    document.forms["widget_form"].color[i].checked = true;
            }
        }
        function SelectAll(id)
        {
            document.getElementById(id).focus();
            document.getElementById(id).select();
        }
        function submitform()
        {
            document.forms["widget_form"].submit();
        }

        </script>
</head>
    <body class="body1" style="background-color:white;" onload="radio_load();">
        <div class="form">
        <table style="position:absolute;left:0;top:0;width:auto;">
            <tr>
                <td class="td1" colspan="2">
                    <!--<h3><i>Our Daily Bread</i> Widget</h3>-->
                    <!--<p>The <i>Our Daily Bread (ODB)</i> Widget is a web application that displays an excerpt of the day's article from the devotional <i>Our Daily Bread</i>. The widget can be placed on any website that can run Javascript. The full article can be found on <a href="/category/devotional/odb/" style="color:blue;text-decoration:none;">YMIblogging</a>.</p>-->
                    <p>The <i>Our Daily Bread (ODB)</i> widget is a web application that displays an excerpt of the day's article from the ODB devotional. The widget can be placed on any website that runs Javascript.</p>
                </td>
            </tr>
            <tr>
                <td class="left2" rowspan="5">
                    <center><script src="widget.php" type="text/javascript" charset="utf-8"></script></center>
                </td>
                <td class="td1">
                    <span style="font-weight:bold;color:red;">Size : <?php echo $label; ?></span>
                </td>
            </tr>
            <tr>
                <td class="td1" rowspan="4" style="vertical-align:top;">
                    <form action="display.php" id="widget_form">
                        <table style="border:0px;">
                            <tr>
                                <td colspan="2">To view the different available configurations of the widget, please select:</td>
                            </tr>
                            <tr>
                                <td>Size</td>
                                <td>Color</td>
                            </tr>
                            <tr>
                                <td style="width:200px;vertical-align:middle;">
                                    <p>
                                        <input type="radio" name="size" value="175" onclick="submitform();" />175px Wide<br />
                                        <input type="radio" name="size" value="215" onclick="submitform();" />215px Wide<br />
                                        <input type="radio" name="size" value="215c" onclick="submitform();" />215px Wide (compact)<br />
                                        <input type="radio" name="size" value="300" onclick="submitform();" />300px Wide<br />
                                    </p>
                                </td>
                                <td style="width:400px;vertical-align:middle;">
                                    <p>
                                        <input type="radio" name="color" value="DKG" onclick="submitform();" /><img src="1.png" style="width:20px;"/>&nbsp;&nbsp;<span style="font-size:9px;color:gray;">Gray</span><br />
                                        <input type="radio" name="color" value="ORN" onclick="submitform();" /><img src="2.png" style="width:20px;"/>&nbsp;&nbsp;<span style="font-size:9px;color:gray;">Orange</span><br />
                                        <input type="radio" name="color" value="PUR" onclick="submitform();" /><img src="3.png" style="width:20px;"/>&nbsp;&nbsp;<span style="font-size:9px;color:gray;">Purple</span><br />
                                        <input type="radio" name="color" value="BLU" onclick="submitform();" /><img src="4.png" style="width:20px;"/>&nbsp;&nbsp;<span style="font-size:9px;color:gray;">Blue</span><br />
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                
                                <td colspan="2"><!--<input type="submit" name="submit" value="Change" /><input type="text" id="test" /><a href="javascript:submitform();">submit</a>--></td>
                                
                            </tr>
                            <tr>
                                <td colspan="2">
                                   <p style="font-weight:bold;">Installation Guide</p>
                                   <p>
                                       <span style="font-style:italic;">To place the ODB widget on your website, do the following steps:</span><br />
                                       <ul>
                                           <li>Copy the code snippet below.</li>
                                           <li>Insert the code snippet on the selected page's source code (widget can be placed anywhere on the page i.e. within the body or at the sidebar).</li>
                                       </ul>
                                   </p>
                                   <p>For Blogger sites, click <a href="odbwidget_guide_v3b.pdf" target="_blank;" style="color:blue;text-decoration:none;">here</a>.</p>
                                   <p>For WordPress sites, click <a href="odbwidget_guide_v3c.pdf" target="_blank;" style="color:blue;text-decoration:none;">here</a>.</p>
                               </td>
                            </tr>
                        </table>
                    </form>       
               </td>
            </tr>
            <tr>
                <td>
                    <div class="snippet"   style="position:absolute;left:0;top:420px;">
                        <p><span style="font-weight:bold;">Code Snippet</span><br /><input id="snip" style="text-align:center;font-family:courier;font-size:10px;" onClick="SelectAll('snip')" type="text" readonly="readonly" size="110" value="<?php echo '<script src=&quot;http://ymiblogging.org/~ymi-apps/widget/odbwidget_'.$size.'.php?user='.$color.'&quot; type=&quot;text/javascript&quot;></script>'; ?>" /></p>
                    </div>
                </td>
            </tr>
        </table>
    </div>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-7086558-7']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
        </body>
</html>