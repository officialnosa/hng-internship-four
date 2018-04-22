<!DOCTYPE html>
<html>

<head>
    <title>HNG - Find and book hotels in Nigeria.</title>
    <link href="https://fonts.googleapis.com/css?family=Podkova|Playball" rel="stylesheet">
    <style type="text/css">
        html {
            background-color: #000;
            font-family: 'Podkova', serif;
            color: #fff;
            background: #000;
            background: -webkit-linear-gradient(310deg, #12195A, #000);
            background: linear-gradient(310deg, #12195A, #000);
            height: 100%;
            background-image: url('https://images.unsplash.com/photo-1413912623716-e6c688db0383?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=400c120332e47b951a6a11bdcde3de29&auto=format&fit=crop&w=1490&q=80');
            text-shadow: 1px 1px 1px #000;
        }

        .header {
            padding: 20px 40px;
        }

        .brand {
            font-size: 42px;
        }

        .banner {
            width: 641px;
            margin: 70px auto 100px auto;
            font-size: 34px;
            text-align: center;
            font-family: 'Playball', cursive;
        }

        #timer {
            text-align: center;
            font-size: 102px;
        }

        .time-zone {
            margin-top: 10px;
            text-align: center;
            font-size: 20px;
        }

        body {
            margin: 0;
            background: #0008;
            width: 100%;
            height: 100%;
            position: fixed;
        }
    </style>
</head>

<body>
    <header class="header">
        <span class="brand">HGN</span>
    </header>
    <div class="banner">
        <span>Find and book hotels in Nigeria</span>
    </div>
    <div id="timer">00:00</div>
    <div class="time-zone">West Central Africa</div>
    <script>
        var $ = function $(id) {
            return document.getElementById(id);
        };

        var format = function format(n) {
            return n > 9 ? "" + n : "0" + n;
        }

        var timer = $('timer');

        setInterval(function () {
            var time = new Date();
            timer.innerText = format(time.getHours()) + ':' + format(time.getMinutes());
        }, 1000)
    </script>
</body>

</html>
