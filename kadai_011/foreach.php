<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?php
            // 連想配列を作成
            $food = ["名前" => "玉ねぎ", "値段" => 200, "産地" => "北海道"];

            // 連想配列を繰り返し出力
            foreach ($food as $key => $value){
                echo "{$key} : {$value}<br>";
            }
        ?>
    </p>
</body>
</html>