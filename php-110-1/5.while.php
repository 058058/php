<?php
   #mysqli_connect() 建立資料庫鏈接
   $ conn = mysqli_connect ( "localhost" , "root" , "" , "mydb" );
   #mysqli_query() 從資料庫查詢資料
   $ result = mysqli_query ( $ conn , "select * from user" );
   #mysqli_fetch_array() 從查詢出來的資料一筆一筆出來
   while ( $ row = mysqli_fetch_array ( $ result )) {
     迴聲 $行[ “id” ]。“ ”。$行[ “密碼” ]。"<br>" ;
   } 
?>