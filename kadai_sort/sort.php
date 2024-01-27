<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?php
            //   配列を定義する
            // $array = [15, 4, 18, 23, 10];
            // この位置だと$arrayが未定義になる。

            function sort_2way($order){
                //   配列を定義する
                $array = [15, 4, 18, 23, 10];

                // 昇順に表示するときの条件式
                if($order == true){

                    echo "昇順にソートします<br>";

                    // 昇順にソートして数値を表示する標準関数
                    sort($array);
                    foreach($array as $array_up){
                        echo $array_up . "<br>";
                    }
                }

                // 降順に表示するときの条件式
                if($order == false){

                    echo "降順にソートします<br>";

                    // 昇順にソートして数値を表示する標準関数
                    rsort($array);
                    foreach($array as $array_down){
                        echo $array_down . "<br>";
                    }
                }
            }

            sort_2way(true);
            sort_2way(false);
        ?>
    </p>
</body>
</html>