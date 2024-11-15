<html>
<head lang="ja">
    <meta http-equiv="Content-Type" content="text/html"; chaset="utf8">
    <link rel="stylesheet" type="text/css" href="tmp.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="
https://cdn.jsdelivr.net/npm/animejs@3.2.2/lib/anime.min.js
"></script>
    <title>first</title>

    <style>
        .hp  img{
            width:20vw;
            height:auto;
            justify-content:center 
        }

        #hppl{
            font-size: 20px;    /* 文字サイズ指定 */
            color: #2196F3;     /* 文字色指定 */
        }

        #hpe{
            font-size: 20px;    /* 文字サイズ指定 */
            color: #2196F3;     /* 文字色指定 */
        }
        
        #field{
            width:100vw;
            height:auto;
            background-color:#000;
        }
        .card{
            background-image:url(22798049.jpg);
            background-size:cover;
            display:flex;
        }
        .card img{
            width:50%;
            height:auto;
            justify-content:center;
        }

        #enm{
            display:flex;
            width:40%;
            height:auto;
            background-color:#000;
        }

        #player{
            display:flex;
            width:40%;
            height:auto;
            
        }

        
    </style>
</head>
<body >

<?php

$array=["kaizoku_man.png","koudan_man.png","pet_sanpo_lead.png"];   
$enm=mt_rand(0,2);
$det=$_GET['det'];

?>

<script>
    function shuffleArray(inputArray) {
  inputArray.sort(() => Math.random() - 0.5);
}
    var det=<?php echo $det ?>;
    var enm=<?php echo $enm ?>;
    var edec=[1,2,3,4,5,6,7,8];
    var pdec=[1,2,3,4,5,6,7,8];
    shuffleArray(edec);
    shuffleArray(pdec);
    var pha=[],eha=[];
    pha=pdec.splice(6,2);
    eha=edec.splice(6,2);
    var act=0;
    var hp=10000,plhp=10000,ehp=10000;


</script>

<div id="field">
    <div id="enm">
    <div class="hp" >
        <div  id="enmg">
            <img src="unchi_character.png">
        </div>
        <div id="ehp">
            <script>
                var hpe = document.getElementById("ehp");
                hpe.innerHTML ="接触まで" +ehp/hp*100+"%";
            </script>
        </div>
    </div>
    <div class="player" >
        <div id="epng">
        <img src="<?php echo $array[$enm]?>">
    </div>
    </div>
    </div>
    <div class="card">
        <div id="h0">
            <img src="2628283.png" onclick="battle(0)" onMouseover="cardsst(0)" >
             <div id="hs0">
             </div>            
        </div>
        <div id="h1">
            <img src="2628283.png" onclick="battle(1)" onMouseover="cardsst(1)">
             <div id="hs1">
             </div>
        </div>
        <script>
            function battle(i){
                var j=Math.floor(Math.random()*2);
                if(pha[i]>eha[j]){
                    act=ehp;
                    ehp=ehp-pha[i]*500;
                    act=ehp/hp*100;
                    animes(0);
                }else if(pha[i]<eha[j]){
                    act=plhp;
                    plhp=plhp-eha[j]*500;
                    act=plhp/hp*100;
                    animes(1);
                }else{
                    act=0;
                    animes(2);
                }

                eha[j]=edec[Math.floor(Math.random()*6)];
                pha[i]=pdec[Math.floor(Math.random()*6)];

                if(ehp<0||plhp<0){
                    window.location.href("end.php");

                }
            }

            function cardsst(x){
                var mydiv = document.getElementById("hs"+x);
                mydiv.innerHTML = "このカードはコスト"+pha[x]+"の攻撃力は"+pha[x]*500+"です";
            }

            function animes(y){
                
                if(y==0){
                    console.log(y,ehp);
                    anime({
                    targets: ".hp #enmg",
                    translateX: ""+act+"%",
                    duration: 200
                   
                    });
                }else if(y==1){ 
                    console.log(y,plhp);
                    anime({
                    targets: ".hp #plag",
                    translateX: ""+(-1*act)+"%",
                    duration: 200
                    
                    });
                    
                }

            }
        </script>

        <div id="damge">
        </div>

    </div>
    <div id="player">
    <div class="player" >
        <img src="<?php echo $array[$det]?>">
    </div>
    <div class="hp" >
        <div  id="plag">
            <img src="unchi_character.png">
        </div>
        <div id="plhp">
            <script>
                var hppl = document.getElementById("plhp");
                hppl.innerHTML ="接触まで" +plhp/hp*100+"%";
            </script>
        </div>
    </div>
    </div>
</div>


</body>
</html>