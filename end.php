<html>
<head>
    <meta charset="utf8">
    <style>
        #select{
            display:flex;
            width:90vw;
            height:auto;
        }
         .cards img{
            width:33vw;
            height:auto;
         }

    </style>

</head>
<body style="background:#7aa6ed;">
<h1>うんゲーム</h1>
<?php
$array=["","you win","you lose"];

if(isset($_GET['res'])){
    $res=$_GET['res'];
    echo $array[$res];

}else{
    $res=0;
}

?>
<br>
好きなキャラを選べ
そして運を持ってうんこを押し付けろ。
<div id="select">
    <div class="cards">
<a href="start.php?det=0">
    <img src="kaizoku_man.png">
</a>
    </div>
    <div class="cards">
<a href="start.php?det=1">
    <img src="koudan_man.png">
</a>
    </div>
    <div class="cards">
<a href="start.php?det=2">
    <img src="pet_sanpo_lead.png">
</a>
    </div>
</div>

</body>
</html>

