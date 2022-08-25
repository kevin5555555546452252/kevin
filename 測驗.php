<?php
session_start();
$name="result";
$_SESSION["result"]=$name;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT"
        crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8"
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="turn.min.js"></script>
    <script type="text/javascript" src="bank.js"></script>
    <title>Document</title>
</head>
<style>
    body {
        background-color: #f0f0f0 !important;
        padding-left: 60px;
        padding-right: 60px;
    }

    @media screen and (min-width: 1280px) {
        .container {
            width: 1280px;
            background-color: #BEBEBE;
        }
    }

    button {
        width: 100px;
        height: 50px;
        margin-top: 20px;
        font-size: 20px;
        border-radius: 20px;
        background-color: chartreuse;
    }

    button:hover {
        background-color: cadetblue;
    }

    p {
        font-size: 20px;
    }

    .pink,.pink1,.pink2,.pink3,.pink4,.pink5,.pink6,.pink7,.pink8,.pink9,.pink10{
        background-color: pink;
    }

    input {
        margin-bottom: 15px;
    }

    .show {
        font-size: 20px;
        height: 40px;
        width: 50px;
        background-color: rgb(133, 85, 85);
        display: none;
    }
    #right_number,#time{
        font-size: 35px;
    }
    b{
        font-size: 35px;
        margin-left: 20px;
    }

    /*  .red{

    }
    .green{

    } */
</style>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">線上檢測</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="專題首頁.html">首頁</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="50音.html">50音</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="文法.html">文法</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              單字
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="水果.html">水果</a></li>
                <li><a class="dropdown-item" href="交通工具.html">交通工具</a></li>
                <li><a class="dropdown-item" href="咖啡廳.html">咖啡廳</a></li>
                <li><a class="dropdown-item" href="臥室.HTML">臥室</a></li>
                <li><a class="dropdown-item" href="浴室篇單字.HTML">浴室</a></li>
                <li><a class="dropdown-item" href="菜單篇單字.html">菜單</a></li>
                <li><a class="dropdown-item" href="廚房篇單字.html">廚房</a></li>
                <li><a class="dropdown-item" href="客廳篇單字.html">客廳</a></li>
                <li><a class="dropdown-item" href="職業.html">職業</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<body onload="time_fun(1000)" ; ">
    <font size=" 6" color="green"><b style="text-align: center;"></b></font>
    <h1>測試已開始 請開始作答 <span id="mytime">00:00:00</span></h1>
    <div class="pink">

        <h2>1.</h2>
        <p class="topic"></p>
        <p class="one"></p>
        <p class="two"></p>
        <p class="three"></p>
        <p class="four"></p>
        <input type="radio" name="Q1" value="1" class="ONE">1
        <input type="radio" name="Q1" value="2" class="ONE">2
        <input type="radio" name="Q1" value="3" class="ONE">3
        <input type="radio" name="Q1" value="4" class="ONE">4
    </div>
    <hr>

    <div class="pink2">

        <h2>2.</h2>
        <p class="topic"></p>
        <p class="one"></p>
        <p class="two"></p>
        <p class="three"></p>
        <p class="four"></p>
        <input type="radio" name="Q2" value="1">1
        <input type="radio" name="Q2" value="2">2
        <input type="radio" name="Q2" value="3">3
        <input type="radio" name="Q2" value="4">4
    </div>
    <hr>
    <div class="pink3">
        <h2>2.</h2>
        <p class="topic"></p>
        <p class="one"></p>
        <p class="two"></p>
        <p class="three"></p>
        <p class="four"></p>
        <input type="radio" name="Q3" value="1">1
        <input type="radio" name="Q3" value="2">2
        <input type="radio" name="Q3" value="3">3
        <input type="radio" name="Q3" value="4">4
    </div>
    <hr>
    <div class="pink4">
 
        <h2>3.</h2>
        <p class="topic"></p>
        <p class="one"></p>
        <p class="two"></p>
        <p class="three"></p>
        <p class="four"></p>
        <input type="radio" name="Q4" value="1">1
        <input type="radio" name="Q4" value="2">2
        <input type="radio" name="Q4" value="3">3
        <input type="radio" name="Q4" value="4">4
    </div>
    <hr>
    <div class="pink5">
       
        <h2>4.</h2>
        <p class="topic"></p>
        <p class="one"></p>
        <p class="two"></p>
        <p class="three"></p>
        <p class="four"></p>
        <input type="radio" name="Q5" value="1">1
        <input type="radio" name="Q5" value="2">2
        <input type="radio" name="Q5" value="3">3
        <input type="radio" name="Q5" value="4">4
    </div>
    <hr>
    <div class="pink6">
       
        <h2>6.</h2>
        <p class="topic"></p>
        <p class="one"></p>
        <p class="two"></p>
        <p class="three"></p>
        <p class="four"></p>
        <input type="radio" name="Q6" value="1">1
        <input type="radio" name="Q6" value="2">2
        <input type="radio" name="Q6" value="3">3
        <input type="radio" name="Q6" value="4">4
    </div>
    <hr>
    <div class="pink7">
       
        <h2>7.</h2>
        <p class="topic"></p>
        <p class="one"></p>
        <p class="two"></p>
        <p class="three"></p>
        <p class="four"></p>
        <input type="radio" name="Q7" value="1">1
        <input type="radio" name="Q7" value="2">2
        <input type="radio" name="Q7" value="3">3
        <input type="radio" name="Q7" value="4">4
    </div>
    <hr>
    <div class="pink8">
       
        <h2>8.</h2>
        <p class="topic"></p>
        <p class="one"></p>
        <p class="two"></p>
        <p class="three"></p>
        <p class="four"></p>
        <input type="radio" name="Q8" value="1">1
        <input type="radio" name="Q8" value="2">2
        <input type="radio" name="Q8" value="3">3
        <input type="radio" name="Q8" value="4">4
    </div>
    <hr>
    <div class="pink9">

        <h2>9.</h2>
        <p class="topic"></p>
        <p class="one"></p>
        <p class="two"></p>
        <p class="three"></p>
        <p class="four"></p>
        <input type="radio" name="Q9" value="1">1
        <input type="radio" name="Q9" value="2">2
        <input type="radio" name="Q9" value="3">3
        <input type="radio" name="Q9" value="4">4
    </div>
    <hr>
    <div class="pink10">
 
        <h2>10.</h2>
        <p class="topic"></p>
        <p class="one"></p>
        <p class="two"></p>
        <p class="three"></p>
        <p class="four"></p>
        <input type="radio" name="Q10" value="1">1
        <input type="radio" name="Q10" value="2">2
        <input type="radio" name="Q10" value="3">3
        <input type="radio" name="Q10" value="4">4
    </div>

    <button id="send">點我交卷</button>
    <button id="reload">再來一次</button>
    <b>您的分數為<form color="red"><span id="right_number"></form>分</b>
    <b>花了<form color="red"><span id="time"></span></form>秒</b>
    <br>
    <script>
        function random(min, max) {
            return Math.floor(Math.random() * (max - min)) + min;
        }
        document.getElementById('reload').addEventListener("click", function () {
            window.location.reload = window.location.href = '測驗.php'
        })
        /*  if (random(1, 100) > 50) {
 
         } */


        var a = 0;
        var random2 = random(1, 10) - 1;
        /*      var random3 = random(1, 10);
                var random4 = random(1, 10);
                var random5 = random(1, 10);
                var random6 = random(1, 10);
                var random7 = random(1, 10);
                var random8 = random(1, 10);
                var random9 = random(1, 10);
                var random10 = random(1, 10);
         */





        var p = document.querySelectorAll('p')
        var topic = document.querySelectorAll('.topic');
        var one = document.querySelectorAll('.one');
        var two = document.querySelectorAll('.two');
        var three = document.querySelectorAll('.three');
        var four = document.querySelectorAll('.four');
        var dates = '';
        var answers = [3, 4, 2, 1, 4, 1, 2, 4, 1, 1, 3, 1, 4, 4, 1, 4, 1, 2, 4, 4, 1, 3, 3, 2, 4, 1, 3, 1, 1, 3, 1, 3, 1, 4, 4, 2, 1, 3, 2, 2, 1, 3, 3, 2, 3, 2, 4, 3, 2, 1, 2, 3, 4, 3, 2, 2, 1, 4, 4, 4, 4, 4, 3, 3, 2, 4, 4, 3, 4, 4, 2, 4, 2, 4, 3, 4, 4, 4, 2, 4, 4, 2, 2, 4, 3]/* 裝答案的樹組 */
        var Extractedanswer = []/* 抽取出抽種考題答案的樹組 */
        var totalscore = 0; /* 儲存分數 */
        for (var i = 0; i < 10; i++) {
            var random2 = random(1, 40) - 1;
            Extractedanswer[i] = random2
            one[i].innerText = bank[random2].options1
            two[i].innerText = bank[random2].options2
            three[i].innerText = bank[random2].options3
            four[i].innerText = bank[random2].options4
            topic[i].innerText = bank[random2].question1
            /* var random2 = random(1, 10) - 1; */
            console.log(random2)
        }
        console.log(Extractedanswer)
        var time = document.getElementById("mytime").innerHTML;
        function two_char(n) {
            return n >= 10 ? n : "0" + n;
        }

        function time_fun(ti) {
            var sec = 0;
               setInterval(function () {
                sec++;
                var date = new Date(0, 0)
                date.setSeconds(sec);
                var h = date.getHours(), m = date.getMinutes(), s = date.getSeconds();
                document.getElementById("mytime").innerText = two_char(h) + ":" + two_char(m) + ":" + two_char(s);
            }, ti);
        
        }
            
        /*    var ww = document.querySelector('.ONE');
      
              console.log(ww.value) */
        var pink = document.querySelector('.pink')
        var pink2 = document.querySelector('.pink2')
        var pink3 = document.querySelector('.pink3')
        var pink4 = document.querySelector('.pink4')
        var pink5 = document.querySelector('.pink5')
        var pink6 = document.querySelector('.pink6')
        var pink7 = document.querySelector('.pink7')
        var pink8 = document.querySelector('.pink8')
        var pink9 = document.querySelector('.pink9')
        var pink10 = document.querySelector('.pink10')
        /* $("input[name='.ONE']:checked").val(); */
        var radio1 = document.getElementsByName('Q1')
        var radio2 = document.getElementsByName('Q2')
        var radio3 = document.getElementsByName('Q3')
        var radio4 = document.getElementsByName('Q4')
        var radio5 = document.getElementsByName('Q5')
        var radio6 = document.getElementsByName('Q6')
        var radio7 = document.getElementsByName('Q7')
        var radio8 = document.getElementsByName('Q8')
        var radio9 = document.getElementsByName('Q9')
        var radio10 = document.getElementsByName('Q10')
        var show = document.getElementsByClassName('show')
        /*  for (i = 0; i < radio1.length; i++) {
             if (radio1[i].checked && radio1[i].value == Extractedanswer[i]) {
                 console.log('加分')
             } 
         } */

        var totalscore = 0;
        console.log(answers[Extractedanswer])
        
        document.getElementById('send').addEventListener("click", function () {
            for (i = 0; i < radio1.length; i++) {
                if (radio1[i].checked && radio1[i].value == answers[Extractedanswer[0]] ) {
                    console.log('加分')
                    totalscore += 10
                    console.log(totalscore)
                    pink.style.backgroundColor = '#1AFD9C';
                    i = 4
                }else {
                    pink.style.backgroundColor = 'red';
                }
            };
            for (i = 0; i < radio1.length; i++) {
                if (radio1[i].checked && radio1[i].value == answers[Extractedanswer[1]]) {
                    totalscore += 10
                    console.log('加分')
                    /*     console.log(answers[5]) */
                    console.log(totalscore)
                    pink.style.backgroundColor = '#1AFD9C';
                    i = 4
                } else {
                    pink.style.backgroundColor = 'red';
                }
            };
            for (i = 0; i < radio2.length; i++) {
                if (radio2[i].checked && radio2[i].value == answers[Extractedanswer[2]]) {
                    totalscore += 10
                    console.log('加分')
                    /*     console.log(answers[5]) */
                    console.log(totalscore)
                    pink2.style.backgroundColor = '#1AFD9C	';
                    i = 4
                } else {
                    pink2.style.backgroundColor = 'red';
                }
            };
            for (i = 0; i < radio3.length; i++) {
                if (radio3[i].checked && radio3[i].value == answers[Extractedanswer[3]]) {
                    totalscore += 10
                    console.log('加分')
                    /*     console.log(answers[5]) */
                    console.log(totalscore)
                    pink3.style.backgroundColor = '#1AFD9C	';
                    i = 4
                } else {
                    pink3.style.backgroundColor = 'red';
                }
            };
            for (i = 0; i < radio4.length; i++) {
                if (radio4[i].checked && radio4[i].value == answers[Extractedanswer[4]]) {
                    totalscore += 10
                    console.log('加分')
                    /*     console.log(answers[5]) */
                    console.log(totalscore)
                    pink4.style.backgroundColor = '#1AFD9C	';
                    i = 4
                } else {
                    pink4.style.backgroundColor = 'red';
                }
            };
            for (i = 0; i < radio5.length; i++) {
                if (radio5[i].checked && radio5[i].value == answers[Extractedanswer[5]]) {
                    totalscore += 10
                    console.log('加分')
                    /*     console.log(answers[5]) */
                    console.log(totalscore)
                    pink5.style.backgroundColor = '#1AFD9C	';
                    i = 4
                } else {
                    pink5.style.backgroundColor = 'red';
                }
            };
            for (i = 0; i < radio6.length; i++) {
                if (radio6[i].checked && radio6[i].value == answers[Extractedanswer[6]]) {
                    totalscore += 10
                    console.log('加分')
                    /*     console.log(answers[5]) */
                    console.log(totalscore)
                    pink6.style.backgroundColor = '#1AFD9C	';
                    i = 4
                } else {
                    pink6.style.backgroundColor = 'red';
                }
            };
            for (i = 0; i < radio7.length; i++) {
                if (radio7[i].checked && radio7[i].value == answers[Extractedanswer[7]]) {
                    totalscore += 10
                    console.log('加分')
                    /*     console.log(answers[5]) */
                    console.log(totalscore)
                    pink7.style.backgroundColor = '#1AFD9C	';
                    i = 4
                } else {
                    pink7.style.backgroundColor = 'red';
                }
            };
            for (i = 0; i < radio8.length; i++) {
                if (radio8[i].checked && radio8[i].value == answers[Extractedanswer[8]]) {
                    totalscore += 10
                    console.log('加分')
                    /*     console.log(answers[5]) */
                    console.log(totalscore)
                    pink8.style.backgroundColor = '#1AFD9C';
                    i = 4
                } else {
                    pink8.style.backgroundColor = 'red';
                }
            };
            for (i = 0; i < radio9.length; i++) {
                if (radio9[i].checked && radio9[i].value == answers[Extractedanswer[9]]) {
                    totalscore += 10
                    console.log('加分')
                    /*     console.log(answers[5]) */
                    console.log(totalscore)
                    pink9.style.backgroundColor = '#1AFD9C';
                    i = 4
                } else {
                    pink9.style.backgroundColor = 'red';
                }
            };
            for (i = 0; i < radio10.length; i++) {
                if (radio10[i].checked && radio10[i].value == answers[Extractedanswer[10]]) {
                    totalscore += 10
                    console.log('加分')
                    /*     console.log(answers[5]) */
                    console.log(totalscore)
                    pink10.style.backgroundColor = '#1AFD9C';
                    i = 4
                } else {
                    pink10.style.backgroundColor = 'red';
                }
            }
            
            detas = new Date()
            console.log(detas)
            var y2 = detas.getFullYear();
            var h2 = detas.getHours();
            var m2 = detas.getMinutes();
            var s2 = detas.getSeconds();
            /* var detas = JSON.stringify(detas) *//* .slice(1, 20) */
            /*  detas.slice(11, 18) */
            var uu = '用時:'+ document.getElementById("mytime").innerText;
            var bb = '交卷時間:' + y2 + '年' + h2 + '點' + m2 + '分' + s2 + '秒';
            var result = ['分數:' + totalscore, '用時:'+ document.getElementById("mytime").innerText, '' + '交卷時間:' + y2 + '年' + h2 + '點' + m2 + '分' + s2 + '秒',];
            console.log(result);
         
            /* $.ajax({
            url: 'http://localhost/0210/text.php',
            data: {result},
            type: 'GET',
            success: function (data) {
                console.log('')
            }
        }) */
        /* setTimeout(() => {
            location.href="http://localhost/0210/text.php?value="+result;
        }, 10000); */
            
    
       
            
            
    document.getElementById("right_number").innerText = totalscore;
    document.getElementById("time").innerText = document.getElementById("mytime").innerText
        }, false);
        error_reporting(0); 
    session_start();


      
        /* console.log(detas); */

    </script>
</body>

</html>
