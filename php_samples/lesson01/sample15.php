<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="../css/style.css" />
	<title>PHP</title>
</head>
<body>
<header>
	<!--<h1 class="font-weight-normal">PHP</h1>    -->
</header>

<main>
	<!--<h2>Practice</h2>-->
<pre>
<?php
$success = file_put_contents("data/news.txt",
"ホームページをリニューアルしました");
if ($success !== false) {
	echo "ファイルの書き込みが完了しました";
} else {
	echo "ファイルの書き込みに失敗しました";
}
?>
</pre>
</main>
</body>
</html>