#!/usr/bin/php
<?php 
  foreach(file('/usr/share/dict/words') as $line){  //"linux.words"の"linux."の部分が不要だから。
    // strpos() 関数を使って、文字列 "abc" が含まれる単語を echo "$line"; で表示しなさい。
    if(strpos($line,"abc")     ) 
  } 
?>
