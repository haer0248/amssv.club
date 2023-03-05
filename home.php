<!DOCTYPE html>
<html lang="zh_tw">

<head>
    <title>無名氏官方網站 (๑•̀ㅂ•́)و✧</title>

    <link href="https://amssv.club/image/favicon.ico" rel="icon" type="image/x-icon" />

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="title" content="無名氏官方網站 (๑•̀ㅂ•́)و✧">
    <meta name="description" content="無名氏伺服器 | 原味生存 | 熱情管理 | 自由飛行 | 歡迎您的加入！ | amssv.club">
    <meta name="auhtor" content="Michael Lin (https://www.facebook.com/haer0248)">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

    <meta property="article:author" content="https://www.facebook.com/haer0248" />
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://amssv.club/">
    <meta property="og:title" content="無名氏官方網站 (๑•̀ㅂ•́)و✧">
    <meta property="og:site_name" content="無名氏官方網站">
    <meta property="og:description" content="無名氏伺服器 | 原味生存 | 熱情管理 | 自由飛行 | 歡迎您的加入！ | amssv.club">
    <meta property="og:image" content="https://amssv.club/image/fb.png">
    <meta property="og:image:alt" content="無名氏官方網站FB圖片" />
    <meta property="og:image:width" content="484" />
    <meta property="og:image:height" content="252" />
    <meta property="fb:app_id" content="766845083908545" />
    <meta property="fb:pages" content="281313675637770" />

    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://amssv.club/">
    <meta property="twitter:title" content="無名氏官方網站 (๑•̀ㅂ•́)و✧">
    <meta property="twitter:description" content="無名氏伺服器 | 原味生存 | 熱情管理 | 自由飛行 | 歡迎您的加入！ | amssv.club">
    <meta property="twitter:image" content="https://amssv.club/image/fb.png">
</head>

<body>
    <style>
        :root {
            --color-main: #5865f2;
            --color-main-hover: #4752c4;
            --color-sub: #a5a7aa;
            --color-sub-hover: #85878b;
            --color-status-online: #23d160;
            --color-status-offline: #ff3860;
            --color-status-pending: #ffdd57;
            --color-status-other: #b9bbbe;
        }

        @import url("https://fonts.googleapis.com/css2?family=Noto+Sans+TC&display=swap");

        * {
            outline-width: 0;
            font-family: "Noto Sans TC" !important;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        body {
            background: linear-gradient(90deg, rgba(233, 30, 99, .5), rgba(63, 81, 181, .5)), url('https://amssv.club/image/background-01-20.17.18.webp');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            background-color: transparent;
            overflow: hidden;
        }

        #main_content {
            height: 100vh;
            background-size: cover !important;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #main_invite_box {
            display: flex;
            overflow: hidden;
            position: relative;
            border-radius: 5px;
        }

        #main_invite_box .main_accept_box {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 45px 50px;
            box-sizing: border-box;
            width: 500px;
        }

        #main_invite_box .main_accept_box .title {
            color: var(--color-sub);
            font-size: medium;
            margin: 0 0 15px 0;
        }

        #main_invite_box .main_accept_box:before {
            content: "";
            background-size: cover !important;
            box-shadow: inset 0 0 0 3000px rgba(40, 43, 48, 0.75);
            filter: blur(10px);
            position: absolute;
            width: 150%;
            height: 150%;
            top: -50px;
            left: -50px;
        }

        .status-icon {
            display: inline-block;
            width: 10px;
            height: 10px;
            border-radius: 50%;
            margin-right: 4px;
        }

        .status-online {
            background-color: var(--color-status-online);
        }

        .status-offline {
            background-color: var(--color-status-offline);
        }

        .status-pending {
            background-color: var(--color-status-pending);
        }

        .status-other {
            background-color: var(--color-status-other);
        }

        form {
            position: relative;
            height: 100%;
            text-align: center;
        }

        form .server_information {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .link_information {
            margin-top: 20px;
        }

        .link_information p {
            text-align: left;
            color: var(--color-sub);
            font-size: 90%;
        }

        .status {
            margin-right: 30px;
        }

        form p, form span {
            color: #fff;
        }

        form .name {
            margin-top: 0;
            margin-bottom: 10px;
            font-size: 35px;
        }

        .notification {
            background-color: #f5f5f5;
            border-radius: 5px;
            position: fixed;
            padding: 1.25rem 1.25rem 1.25rem 1.25rem;
        }

        .notification.is-success {
            background-color: var(--color-status-online);
            color: #fff;
        }

        .notification.is-danger {
            background-color: var(--color-status-offline);
            color: #fff;
        }

        .logo_box {
            padding: 45px 30px;
            box-sizing: border-box;
            position: relative;
            z-index: 2;
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .logo_box img {
            border-radius: 16px;
            width: 150px;
            margin-bottom: -5px;
            display: block;
            position: relative;
        }

        .logo_box .text {
            padding: 25px 0 10px 0;
        }

        .logo_box:before {
            content: "";
            background-size: cover !important;
            position: absolute;
            top: -50px;
            left: -50px;
            width: 150%;
            height: 150%;
            filter: blur(10px);
            box-shadow: inset 0 0 0 3000px rgba(255, 255, 255, 0.8);
        }

        .copyBtn {
            width: 100%;
            box-sizing: border-box;
            background: var(--color-main);
            border: none;
            color: #fff;
            padding: 15px 0;
            border-radius: 3px;
            position:relative;
            bottom: 0;
            left: 0;
            cursor: pointer;
            transition: 0.2s ease;
        }

        .copyBtn:hover {
            background: var(--color-main-hover);
        }

        a, a:visited {
            text-decoration: none;
            font-weight: 500;
            color: var(--color-main);
        }

        a:hover, a:active {
            color: var(--color-main-hover);
        }

        .fixed {
            position: absolute;
            top: 20%;
            z-index: 999;
            max-width: 70%;
        }

        @media only screen and (max-width: 830px) {
            .logo_box {
                display: none;
            }
        }

    </style>

    <div id="main_content">
        <div id="main_invite_box">
            <div class="logo_box">
                <img class="logo" src="https://amssv.club/image/server_icon_128.webp" />
            </div>
            <div class="main_accept_box">
                <form>
                    <h1 class="title">NekomataOnigiri 對您發送邀請加入</h1>
                    <p class="name">無名氏伺服器</p>
                    <div class="server_information">
                        <span class="status" data-status><i class="status-icon status-pending"></i> 取得資料中...</span>
                        <span class="ver"><i class="status-icon status-other"></i> Java 1.18.2 +</span>
                    </div>
                    <div style="height: 50px;"></div>
                    <button id="copy" class="copyBtn" data-clipboard-text="amssv.club" type="button" tabindex="-99">接受邀請</button>
                    <div class="link_information">
                        <p>24 小時冷氣開放中<br>點選按鈕即可複製我們的連線位置「amssv.club」<br>加入伺服器表示您同意我們的<a href="https://auth.amssv.club/rule" target="_blank" tabindex="-99">遊玩規範</a>，同時您也可以加入<a href="https://discord.gg/3Ww2j8hdZA" target="_blank" tabindex="-99">Discord</a>來取得我們伺服器的最新進度。</p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.haer0248.me/copy.min.js"></script>
    <script>
        // 複製 IP 位置
        var copy_button = document.getElementById("copy");
        var clipboard = new ClipboardJS('#copy');
        clipboard.on('success', function (e) {
            e.clearSelection();
            copy_button.innerHTML = '已複製連線位置！'
            setTimeout(function () {
                copy_button.innerHTML = '接受邀請'
            }, 7000);
        });
        clipboard.on('error', function (e) {
            e.clearSelection();
            copy_button.innerHTML = '複製失敗，請手動輸入 amssv.club'
        });

        // 偵測伺服器狀態
        fetch("https://status.mc-list.xyz/amssv.club").then(response => response.json()).then(data => {
            if (data.status === "online") {
                document.querySelector("[data-status]").innerHTML = `<i class="status-icon status-online"></i> ${data.player.now} 位玩家`;
            } else {
                document.querySelector("[data-status]").innerHTML = `<i class="status-icon status-offline"></i> 離線狀態`;
            }
        });
    </script>
</body>

</html>
