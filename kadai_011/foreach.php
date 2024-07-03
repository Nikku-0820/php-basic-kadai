<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>課題011</title>
 </head>
 
 <body>
     <p>
         <?php
         //連想配列に値を代入する
         $vegetable_data = ['name' => '玉ねぎ', 'price' => 200,'area' => '北海道' ];
         //連想配列の値を出力する
         print_r($vegetable_data);
         
         //改行する
         echo'<br>';

         $personal_data =['id:1','名前:侍太郎','年齢:30'];
         foreach($personal_data as $personal_data){
          echo $personal_data . '<br>';
         }
         ?>
         </P>
</body>

</html>