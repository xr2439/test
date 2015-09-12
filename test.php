<?php
require_once("include.inc.php");
if (strlen($_POST['username']) && strlen($_POST['password'])) {

// 建立CURL連線
$ch = curl_init();

// 設定擷取的URL網址
curl_setopt($ch, CURLOPT_URL, "http://moodle.ncku.edu.tw/login/index.php");
curl_setopt($ch, CURLOPT_HEADER, false);

//將curl_exec()獲取的訊息以文件流的形式返回，而不是直接輸出。
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);

//設定要傳的 變數A=值A & 變數B=值B (中間要用&符號串接)
$PostData = "username=" . $_POST['username'] . "&password=" . urlencode($_POST['password']);

$cookie = "";

curl_setopt($ch, CURLOPT_COOKIEJAR, "-");
//curl_setopt($ch, CURLOPT_COOKIEFILE, -);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

//設定CURLOPT_POST 為 1或true，表示要用POST方式傳遞
curl_setopt($ch, CURLOPT_POST, 1); 
//CURLOPT_POSTFIELDS 後面則是要傳接的POST資料。
curl_setopt($ch, CURLOPT_POSTFIELDS, $PostData);

// 執行
$temp=curl_exec($ch);

// 關閉CURL連線
curl_close($ch);

echo $temp;
}
?>

<form action="test.php" method="post" >
	<div class="input-group"><span class="input-group-addon" >帳號　</span><input class="form-control" name="username" type="text">
	</div>
	<br>
	<div class="input-group"><span class="input-group-addon">密碼　</span><input class="form-control" name="password" type="password">
	</div>
	<br>
	<div class="input-group"><button class="btn-primary" type="submit">完成</button>
	</div>
</form>