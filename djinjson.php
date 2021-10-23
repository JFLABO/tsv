<?php
//ini_set('display_errors', "On");
//ファイルを配列に読み込む
//日付を含む行を配列に格納　正規表現
//レポートオブジェクトを生成
$file_name = "data/test.txt"; /*読込ファイルの指定*/

$ret_array = file( $file_name ); /*ファイルを全て配列に入れる*/

$i=0;

$d_array=array();
foreach ($ret_array as $value) {
  if(preg_match('|\d{4}\/\d{1,2}\/\d{1,2}|', $value))
      {
        array_push($d_array,$i);
        //echo '<font color="blue">'.$value.' 正しい日付</font><br/>';
      }
  else
      { //echo '<font color="red">'.$value.' 不正な日付</font><br/>';
      }

  /*
    if($value=="")
    else{

    }*/
    $i++;
}
$j=0;
/*
for ($count = 0; $count < $d_array[$j]; $count++){
  // 実行する処理　日付と内容の対のハッシュ
  print($ret_array[$count]."<BR>");
}*/
for ($cnt = 0; $cnt < count($d_array); $cnt++){
  //print("---------<BR>");
  $k=0;
  $text="";
  for ($count = $d_array[$j]; $count < $d_array[$j+1]; $count++){
    if($k==0){
      $date=$ret_array[$count];
    }
    // 実行する処理
    $text=$text.$ret_array[$count];
    $k++;
  }
  $array1=[];
  $array1 = array('date'=>$date, 'body'=>$text);
  $arr[$j]=$array1;
  $j++;
}
//print("----**-----<BR>");
$k=0;
for ($cnt2 = $d_array[count($d_array)-1]; $cnt2 < count($ret_array); $cnt2++){
  if($k==0){
    $date2=$ret_array[$count];
  }
  // 実行する処理
  $text2=$text2.$ret_array[$cnt2];
  $k++;
}
$array1 = array('date'=>$date2, 'body'=>$text2);
$arr[$j+1]=$array1;
//array_push($array1, $array2);
$k=0;
foreach ($arr as $v) {
 $d[$k]=[
 date=>$v["date"],
 body=>$v["body"]
 ];
  //$d["date"][$k]=$v["date"];
  //$d["body"][$k]=$v["body"];
  $k++;
}
?>
<PRE>
<?php
$jsonstr=json_encode($d,JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);
echo $jsonstr;
//var_dump($d);
//foreach ($d as $ds) {
//var_dump($ds);
//}
//var_dump($d);
?>
</PRE>
