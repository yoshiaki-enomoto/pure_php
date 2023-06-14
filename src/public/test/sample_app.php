<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHPサンプルアプリ</title>
  </head>
  <body>
    <?php if (empty($_POST['mode'])): ?>
      <form method="post">
        <p>このボタンを押してから丁度10秒後に次のボタンを押せるかな！？</p>
        <input type="hidden" name="mode" value="start">
        <button type="submit">スタート！</button>
      </form>
    <?php elseif ($_POST['mode'] === 'start'): ?>
      <form method="post">
        <p>10秒丁度に押してね！</p>
        <input type="hidden" name="mode" value="end">
        <input type="hidden" name="time" value="<?= microtime(true) ?>">
        <button type="submit">今だ！</button>
      </form>
    <?php elseif ($_POST['mode'] === 'end'): ?>
      <?php $diff = microtime(true) - $_POST['time'] - 10; ?>
      <?php if ($diff === 0): ?>
        <p>ぴったし！！！　奇跡！！！！</p>
      <?php elseif (abs($diff) <= 0.5): ?>
        <p>ほぼ同時！　奇跡！！</p>
      <?php elseif (abs($diff) < 1): ?>
        <p>まあまあ</p>
      <?php else: ?>
        <p>１秒以上違います</p>
      <?php endif ?>
      <p>差:<?= $diff ?>秒
    <?php endif ?>
  </body>
</html>

<!-- https://crieit.net/posts/PHP-5e4ff7575fc18 -->
