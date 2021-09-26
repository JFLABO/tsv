<?php

$S=file_get_contents("./data/test.txt");
$fm = $S;

echo <<<EOD
<HTML><script type="text/javascript" src="jquery-3.6.0.min.js"></script>
  <style>/*タグクラウドのデザイン*/.widget_tag_cloud
   .tagcloud a { background: #bbb; margin: 3px;
     padding:6px; text-decoration: none; border-left:solid 4px #555;
      color:#fff; font-size:12px;}/*タグクラウドマウスオーバー時*/
      .widget_tag_cloud .tagcloud a:hover{ color: #000;  background:#ddd;}</style><center>
       <table><tr><td><Div ><div style="width:650px;background-color:white;vertical-align:middle;border-radius:5px;-webkit-border-radius:5px;-moz-border-radius:5px;-moz-box-shadow: 1px 1px 3px #000;-webkit-box-shadow: 1px 1px 3px #000;">
    <div style="padding:5px 0px 0px 0px; height:5px;background-color:orange;width:100%;"></div>
    <li style="padding:15px 5px 2px 10px;text-align:left;vertical-align:middle;list-style-type:none;">
      <span style="padding:5px 10px 2px 0px;text-align:left;vertical-align:middle;font-weight: bold;">人助け特別会議</span></li>
          <hr style="height:1px;margin:1px 10px;">
          <li style="padding:5px 5px 2px 10px;text-align:left;vertical-align:middle;list-style-type:none;">
          <span style="padding:5px 10px 2px 0px;font-size:14px;text-align:left;vertical-align:middle;">
          $d</span></li>
          <br><a href=""style=" background: #bbb; margin: 3px; padding:6px; text-decoration: none; border-left:solid 4px #ff0000; color:#fff; font-size:12px;">　計画</a><a href=""style=" background: #bbb; margin: 3px; padding:6px; text-decoration: none; border-left:solid 4px #555; color:#fff; font-size:12px;">やること</a>
            <a href=""style=" background: #bbb; margin: 3px; padding:6px; text-decoration: none;
            border-left:solid 4px #55f; color:#fff; font-size:12px;">　推薦</a><a href=""style="
            background: #bbb; margin: 3px; padding:6px; text-decoration: none; border-left:solid
             4px #55f; color:#fff; font-size:12px;">　スコア(123)</a>
             <a href=""style=" background: #bbb; margin: 3px; padding:6px; text-decoration: none;
              border-left:solid 4px #55f; color:#fff; font-size:12px;">　閲覧数(123)</a><BR><BR>
              <textarea style="margin:30px;width:550px;height:400px;">$fm</textarea><BR><BR></div></div>
              </td><tr></td></table></center>
EOD;
?>
