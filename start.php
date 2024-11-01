<html>
<head lang="ja">
    <meta http-equiv="Content-Type" content="text/html"; chaset="utf8">
    <link rel="stylesheet" type="text/css" href="tmp.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="kiso.js" defer></script>
    <title>first</title>
</head>
<body  >
<!--
<div class="wrap">
   <canvas id="canvas" ></canvas>
</div>
-->

<?php

$array=["kaizoku_man.png","koudan_man.png","pet_sanpo_lead.png"];   
$enm=mt_rand(0,2);
$det=$_GET['det'];
$edec=[1,2,3,4,5,6,7,8];
$pdec=[1,2,3,4,5,6,7,8];
shuffle($edec);
shuffle($pdec);
$ehp=10000;
$plhp=10000;
$turn=0;


echo "<img src="'$array[$det]'">";
?>


</body>
</html>