<!DOCTYPE html>
<html>
<head>
    <title>Chat</title>
    <style>
        h1{
            font-size: 12pt;
            border-bottom: 1px solid gray;
        }
        form{
            border: 1px solid gray;
            padding: 10px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

<h1>秘密のチャット</h1>

<form action="write.php">
    <input type="text" name="msg">
    <button>送信</button>
</form>
<?php
$fp=fopen("data.txt","r");
while(($buff=fgets($fp))!=false){
    $Line = explode("\t",$buff);
    echo $Line[0];
    echo "|";
    echo $Line[1];
    echo(date("Y-m-d H:i:s",$Line[1]));
    echo "<br>";
}
fclose($fp);
?>
</body>
</html>
