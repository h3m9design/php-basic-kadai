<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php

          function sort_2way(array &$array, bool $order): void {
            if ($order) {
              sort($array);
            } else {
              rsort($array);
            }
          }

          $nums = [15, 4, 18, 23, 10];

          sort_2way($nums,true);
          echo '昇順にソートします。<br>';
          echo implode(",",$nums) . '<br>';

          sort_2way($nums,false);
          echo '<br>降順にソートします。<br>';
          echo implode(",",$nums) . '<br>';

        
        ?>
    </p>
</body>

</html>