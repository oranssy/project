<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>헤더 01</title>

    <link rel="stylesheet" href="../assets/css/fonts.css">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/common.css">
    <link rel="stylesheet" href="../assets/css/header.css">
</head>

<body>
    <header id="header">
        <h1><a href="#"><img src="../assets/img/logo.png" alt="지구ON 로고"></a></h1>
        <nav class="header__nav">
            <ul class="clearfix">
                <li><a href="#">지구ON 소개</a>
                    <ul class="submenu">
                        <li><a href="#">스토리</a></li>
                    </ul>
                </li>
                <li><a href="#">기후 소식</a>
                    <ul class="submenu">
                        <li><a href="#">국내 뉴스</a></li>
                        <li><a href="#">해외 뉴스</a></li>
                        <li><a href="#">캠페인 & 이벤트</a></li>
                    </ul>
                </li>
                <li><a href="#">기후 실천</a>
                    <ul class="submenu">
                        <li><a href="#">실천 다이어리</a></li>
                        <li><a href="#">식물 키우기</a></li>
                    </ul>
                </li>
                <li><a href="#">제로웨이스트</a>
                    <ul class="submenu">
                        <li><a href="#">상품 추천</a></li>
                    </ul>
                </li>
                <li><a href="#">커뮤니티</a>
                    <ul class="submenu">
                        <li><a href="#">공지사항</a></li>
                        <li><a href="#">이야기방</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <!-- 반응형 전용 -->
        <nav class="mobile__nav">
            <ul class="mobile__menuWrap">
                <li><a href="#" class="big_menu">지구ON 소개</a>
                    <ul class="m__submenu">
                        <li><a href="#">스토리</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="mobile__menuWrap">
                <li><a href="#" class="big_menu">기후 소식</a>
                    <ul class="m__submenu">
                        <li><a href="#">국내 뉴스</a></li>
                        <li><a href="#">해외 뉴스</a></li>
                        <li><a href="#">캠페인 & 이벤트</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="mobile__menuWrap">
                <li><a href="#" class="big_menu">제로웨이스트</a>
                    <ul class="m__submenu">
                        <li><a href="#">상품 추천</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="mobile__menuWrap">
                <li><a href="#" class="big_menu">커뮤니티</a>
                    <ul class="m__submenu">
                        <li><a href="#">공지사항</a></li>
                        <li><a href="#">이야기방</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <div class="header__login">
            <a href="../login/login.html">로그인</a>
        </div>
        <div class="header__ham">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </header>
    <!-- // header-->
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="../assets/js/header.js"></script>

</html>