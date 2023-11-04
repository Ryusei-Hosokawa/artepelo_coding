<?php
$thisPageName = 'top';
$path = realpath(dirname(__FILE__) . '') . "/";
include_once($path . 'app_config.php');
include($path . 'libs/head.php');
?>
<link href="<?php echo APP_ASSETS; ?>css/page/top.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="slick/slick.css" />
<link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
</head>

<body id="top" class="top">
    <?php include($path . 'libs/header.php'); ?>

    <main>
        <!-- ファーストビュー始まり -->
        <section id="home" class="sec__fv">
            <div class="fv__hero__wrap">
                <div class="fv__hero__inner">

                </div>
                <div class="fv__hero__inner">

                </div>
            </div>
            <div class="fv__base01">
                <div class="fv__side01">
                    <p>
                        Total beauty Photo studio
                    </p>
                </div>
                <div class="fv__side02">
                    <div class="fv__side__inner01">
                        <p>
                            Scroll
                        </p>
                    </div>
                    <div class="fv__side__inner02">
                        <div class="bar__base">
                            <span class="bar__move">

                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fv__base02">
                <h2 class="fv__ttl">
                    Introduction
                </h2>
                <div class="fv__txt">
                    <p class="fv__txt__inner01">
                        最高の一瞬を切り取り、
                        <br>
                        一瞬を永遠に変える。
                    </p>
                    <p class="fv__txt__inner02">
                        Studio arte pelo(スタジオ アルテ ペロ)は
                        <br>
                        洗練された世界観を演出する<br class="sp">ヘアメイク、スタイリングで
                        <br>
                        美容業界やファッション業界で活躍する
                        <br>
                        トップスタイリストとフォトグラファーが撮影。
                        <br>
                        ゲストの最高の一瞬を切り取り、<br class="sp">特別な記憶として残す
                        <br>
                        トータルビューティーフォトスタジオです。
                    </p>
                </div>
            </div>
        </section>
        <section id="news" class="sec__news">
            <div class="news__bg">

            </div>
            <div class="news__base">
                <h2 class="news__ttl">
                    News
                </h2>
                <ul class="news__contents">
                    <li>
                        <time>
                            2022.00.00
                        </time>
                        <p>
                            ここにお知らせが入ります。ここにお知らせが入ります。ここにお知らせが入ります。ここにお知らせが入ります。
                        </p>
                    </li>
                    <li>
                        <time>
                            2022.00.00
                        </time>
                        <p>
                            ここにお知らせが入ります。ここにお知らせが入ります。ここにお知らせが入ります。ここにお知らせが入ります。
                        </p>
                    </li>
                    <li>
                        <time>
                            2022.00.00
                        </time>
                        <p>
                            ここにお知らせが入ります。ここにお知らせが入ります。ここにお知らせが入ります。ここにお知らせが入ります。
                        </p>
                    </li>
                </ul>
            </div>
        </section>
        <section id="locations" class="sec__locations">
            <div class="locations__bg">

                <div class="locations__contents">
                    <h2 class="center">
                        Locations
                    </h2>
                    <p class="center">
                        緑あふれる優しい空間の矢場公園と、<br class="sp">躍動感あるストリート
                        <br>
                        最新のスタジオ機材を駆使した<br class="sp">本格的なセット撮影。
                        <br>
                        ご希望やゲストの個性に合わせた<br class="sp">ロケーションから選べます。
                    </p>
                </div>
            </div>
        </section>
        <!-- ファーストビュー終わり -->

        <!-- プラン始まり -->
        <section id="plan" class="sec__plan">
            <div class="plan__base">
                <h2 class="plan__ttl">
                    Plan
                </h2>
                <ul class="plan__contents">
                    <li class="plan__list">
                        <div class="plan__list__inner">
                            <p class="plan__list__name">
                                ヘアセットプラン
                            </p>
                            <p class="plan__list__price sp">
                                ¥10,000~
                            </p>
                            <p class="plan__list__txt">
                                プロの美容師によるヘアセットとフォトグラファーによる撮影
                            </p>
                        </div>
                        <p class="plan__list__price pc">
                            ¥10,000~
                        </p>
                    </li>
                    <li class="plan__list">
                        <div class="plan__list__inner">
                            <p class="plan__list__name">
                                ヘアメイクプラン
                            </p>
                            <p class="plan__list__price sp">
                                ¥15,000~
                            </p>
                            <p class="plan__list__txt">
                                プロの美容師によるヘアセットとメイクとフォトグラファーによる撮影
                            </p>
                        </div>
                        <p class="plan__list__price pc">
                            ¥15,000~
                        </p>
                    </li>
                    <li class="plan__list">
                        <div class="plan__list__inner">
                            <p class="plan__list__name">
                                ヘアセット衣装プラン
                            </p>
                            <p class="plan__list__price sp">
                                ¥20,000~
                            </p>
                            <p class="plan__list__txt">
                                プロの美容師によるヘアセットとフォトグラファーによる撮影＋セレクトショップ衣装コーディネート
                            </p>
                        </div>
                        <p class="plan__list__price pc">
                            ¥20,000~
                        </p>
                    </li>
                    <li class="plan__list">
                        <div class="plan__list__inner">
                            <p class="plan__list__name">
                                ヘアメイク衣装プラン
                            </p>
                            <p class="plan__list__price sp">
                                ¥25,000~
                            </p>
                            <p class="plan__list__txt">
                                プロの美容師によるヘアセットとメイクとフォトグラファーによる撮影＋セレクトショップ衣装コーディネート
                            </p>
                        </div>
                        <p class="plan__list__price pc">
                            ¥25,000~
                        </p>
                    </li>
                    <li class="plan__list">
                        <div class="plan__list__inner">
                            <p class="plan__list__name">
                                ブライダルフォトプラン
                            </p>
                            <p class="plan__list__price sp">
                                ¥50,000~
                            </p>
                            <p class="plan__list__txt">
                                プロの美容師によるヘアセットとフォトグラファーによる撮影
                            </p>
                        </div>
                        <p class="plan__list__price pc">
                            ¥50,000~
                        </p>
                    </li>
                    <li class="plan__list">
                        <div class="plan__list__inner">
                            <p class="plan__list__name">
                                マタニティーフォトプラン
                            </p>
                            <p class="plan__list__price sp">
                                ¥45,000~
                            </p>
                            <p class="plan__list__txt">
                                プロの美容師、エステ、ネイリスト、フォトグラファーによるトータルプロデュース撮影
                            </p>
                        </div>
                        <p class="plan__list__price pc">
                            ¥45,000~
                        </p>
                    </li>
                </ul>
            </div>
        </section>
        <!-- プラン終わり -->

        <!-- メッセージ始まり -->
        <section class="sec__message">
            <div class="message__base">
                <div class="message__flex flex">
                    <div class="img01">
                        <picture>
                            <source srcset="<?php echo APP_ASSETS; ?>img/top/message01_sp.jpg.webp" type="image/webp"
                                media="(max-width:767px)">
                            <source srcset="<?php echo APP_ASSETS; ?>img/top/message01_sp.jpg"
                                media="(max-width:767px)">
                            <source srcset="<?php echo APP_ASSETS; ?>img/top/message01.jpg.webp" type="image/webp">
                            <img src="<?php echo APP_ASSETS; ?>img/top/message01.jpg" alt="">
                        </picture>
                    </div>
                    <div class="message__txt">
                        <p>
                            Studio arte pelo(スタジオ アルテ ペロ)では
                            <br>
                            様々なシチュエーションに合わせたプランをご用意しています。
                            <br>
                            提携セレクトショップでの衣装もご用意いたします。
                        </p>
                        <div class="img02">
                            <picture>
                                <source srcset="<?php echo APP_ASSETS; ?>img/top/message02_sp.jpg.webp"
                                    type="image/webp" media="(max-width:767px)">
                                <source srcset="<?php echo APP_ASSETS; ?>img/top/message02_sp.jpg"
                                    media="(max-width:767px)">
                                <source srcset="<?php echo APP_ASSETS; ?>img/top/message02.jpg.webp" type="image/webp">
                                <img src="<?php echo APP_ASSETS; ?>img/top/message02.jpg" alt="">
                            </picture>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- メッセージ終わり -->

        <!-- 流れ始まり -->
        <section id="flow" class="sec__flow">
            <div class="flow__base flex">
                <div class="flow__wrap">
                    <h2 class="flow__ttl">
                        Flow
                    </h2>
                    <ul class="flow__contents">
                        <li class="flow__list">
                            <div class="flow__list__wrap">
                                <div class="flow__list__step">
                                    step1.
                                </div>
                                <div class="flow__list__name">
                                    予約
                                </div>
                            </div>
                        </li>
                        <li class="flow__list">
                            <div class="flow__list__wrap">
                                <div class="flow__list__step">
                                    step2.
                                </div>
                                <div class="flow__list__name">
                                    打ち合わせ
                                </div>
                            </div>
                        </li>
                        <li class="flow__list">
                            <div class="flow__list__wrap">
                                <div class="flow__list__step">
                                    step3.
                                </div>
                                <div class="flow__list__name">
                                    フィッティング
                                </div>
                            </div>
                        </li>
                        <li class="flow__list">
                            <div class="flow__list__wrap">
                                <div class="flow__list__step">
                                    step4.
                                </div>
                                <div class="flow__list__name">
                                    ヘアメイク
                                </div>
                            </div>
                        </li>
                        <li class="flow__list">
                            <div class="flow__list__wrap">
                                <div class="flow__list__step">
                                    step5.
                                </div>
                                <div class="flow__list__name">
                                    撮影
                                </div>
                            </div>
                        </li>
                        <li class="flow__list">
                            <div class="flow__list__wrap">
                                <div class="flow__list__step">
                                    step6.
                                </div>
                                <div class="flow__list__name">
                                    セレクト
                                </div>
                            </div>
                        </li>
                        <li class="flow__list">
                            <div class="flow__list__wrap">
                                <div class="flow__list__step">
                                    step7.
                                </div>
                                <div class="flow__list__name">
                                    受け取り
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="img">
                    <picture>
                        <source srcset="<?php echo APP_ASSETS; ?>img/top/flow01_sp.jpg.webp" type="image/webp"
                            media="(max-width:767px)">
                        <source srcset="<?php echo APP_ASSETS; ?>img/top/flow01_sp.jpg" media="(max-width:767px)">
                        <source srcset="<?php echo APP_ASSETS; ?>img/top/flow01.jpg.webp" type="image/webp">
                        <img src="<?php echo APP_ASSETS; ?>img/top/flow01.jpg" alt="">
                    </picture>
                </div>
            </div>
        </section>
        <!-- 流れ終わり -->

        <!-- フォトグラファー始まり -->
        <section id="photographers" class="sec__photogra">
            <div class="photogra__base flex">
                <div class="img">
                    <picture>
                        <source srcset="<?php echo APP_ASSETS; ?>img/top/photogra01_sp.jpg.webp" type="image/webp"
                            media="(max-width:767px)">
                        <source srcset="<?php echo APP_ASSETS; ?>img/top/photogra01_sp.jpg" media="(max-width:767px)">
                        <source srcset="<?php echo APP_ASSETS; ?>img/top/photogra01.jpg.webp" type="image/webp">
                        <img src="<?php echo APP_ASSETS; ?>img/top/photogra01.jpg" alt="">
                    </picture>
                </div>
                <div class="photogra__contents">
                    <h2 class="photogra__ttl">
                        Photographers
                    </h2>
                    <p class="photogra__txt">
                        数々のコンテストで受賞したフォトグラファーが<br class="pc">ゲストの一瞬を永遠に変え、最高の今を切り取ります。
                    </p>
                </div>
            </div>
        </section>
        <!-- フォトグラファー終わり -->

        <!-- ワークス始まり -->
        <section id="works" class="sec__works">
            <h2 class="works__ttl">
                Works
            </h2>
            <div class="works__slider flex">
                <!-- 画像の1セット目始まり -->
                <div class="works__slider__inner">
                    <div class="img">
                        <picture>
                            <source srcset="<?php echo APP_ASSETS; ?>img/top/slider01_sp.jpg.webp" type="image/webp"
                                media="(max-width:767px)">
                            <source srcset="<?php echo APP_ASSETS; ?>img/top/slider01_sp.jpg" media="(max-width:767px)">
                            <source srcset="<?php echo APP_ASSETS; ?>img/top/slider01.jpg.webp" type="image/webp">
                            <img src="<?php echo APP_ASSETS; ?>img/top/slider01.jpg" alt="">
                        </picture>
                    </div>
                    <div class="img">
                        <picture>
                            <source srcset="<?php echo APP_ASSETS; ?>img/top/slider02_sp.jpg.webp" type="image/webp"
                                media="(max-width:767px)">
                            <source srcset="<?php echo APP_ASSETS; ?>img/top/slider02_sp.jpg" media="(max-width:767px)">
                            <source srcset="<?php echo APP_ASSETS; ?>img/top/slider02.jpg.webp" type="image/webp">
                            <img src="<?php echo APP_ASSETS; ?>img/top/slider02.jpg" alt="">
                        </picture>
                    </div>
                    <div class="img">
                        <picture>
                            <source srcset="<?php echo APP_ASSETS; ?>img/top/slider03.jpg.webp" type="image/webp">
                            <img src="<?php echo APP_ASSETS; ?>img/top/slider03.jpg" alt="">
                        </picture>
                    </div>
                    <div class="img">
                        <picture>
                            <source srcset="<?php echo APP_ASSETS; ?>img/top/slider04.jpg.webp" type="image/webp">
                            <img src="<?php echo APP_ASSETS; ?>img/top/slider04.jpg" alt="">
                        </picture>
                    </div>
                    <div class="img">
                        <picture>
                            <source srcset="<?php echo APP_ASSETS; ?>img/top/slider01_sp.jpg.webp" type="image/webp"
                                media="(max-width:767px)">
                            <source srcset="<?php echo APP_ASSETS; ?>img/top/slider01_sp.jpg" media="(max-width:767px)">
                            <source srcset="<?php echo APP_ASSETS; ?>img/top/slider01.jpg.webp" type="image/webp">
                            <img src="<?php echo APP_ASSETS; ?>img/top/slider01.jpg" alt="">
                        </picture>
                    </div>
                    <div class="img">
                        <picture>
                            <source srcset="<?php echo APP_ASSETS; ?>img/top/slider02_sp.jpg.webp" type="image/webp"
                                media="(max-width:767px)">
                            <source srcset="<?php echo APP_ASSETS; ?>img/top/slider02_sp.jpg" media="(max-width:767px)">
                            <source srcset="<?php echo APP_ASSETS; ?>img/top/slider02.jpg.webp" type="image/webp">
                            <img src="<?php echo APP_ASSETS; ?>img/top/slider02.jpg" alt="">
                        </picture>
                    </div>
                    <div class="img">
                        <picture>
                            <source srcset="<?php echo APP_ASSETS; ?>img/top/slider03.jpg.webp" type="image/webp">
                            <img src="<?php echo APP_ASSETS; ?>img/top/slider03.jpg" alt="">
                        </picture>
                    </div>
                    <div class="img">
                        <picture>
                            <source srcset="<?php echo APP_ASSETS; ?>img/top/slider04.jpg.webp" type="image/webp">
                            <img src="<?php echo APP_ASSETS; ?>img/top/slider04.jpg" alt="">
                        </picture>
                    </div>
                </div>
                <!-- 画像の1セット目終わり -->
                <!-- 画像の2セット目始まり -->
                <div class="works__slider__inner">
                    <div class="img">
                        <picture>
                            <source srcset="<?php echo APP_ASSETS; ?>img/top/slider01_sp.jpg.webp" type="image/webp"
                                media="(max-width:767px)">
                            <source srcset="<?php echo APP_ASSETS; ?>img/top/slider01_sp.jpg" media="(max-width:767px)">
                            <source srcset="<?php echo APP_ASSETS; ?>img/top/slider01.jpg.webp" type="image/webp">
                            <img src="<?php echo APP_ASSETS; ?>img/top/slider01.jpg" alt="">
                        </picture>
                    </div>
                    <div class="img">
                        <picture>
                            <source srcset="<?php echo APP_ASSETS; ?>img/top/slider02_sp.jpg.webp" type="image/webp"
                                media="(max-width:767px)">
                            <source srcset="<?php echo APP_ASSETS; ?>img/top/slider02_sp.jpg" media="(max-width:767px)">
                            <source srcset="<?php echo APP_ASSETS; ?>img/top/slider02.jpg.webp" type="image/webp">
                            <img src="<?php echo APP_ASSETS; ?>img/top/slider02.jpg" alt="">
                        </picture>
                    </div>
                    <div class="img">
                        <picture>
                            <source srcset="<?php echo APP_ASSETS; ?>img/top/slider03.jpg.webp" type="image/webp">
                            <img src="<?php echo APP_ASSETS; ?>img/top/slider03.jpg" alt="">
                        </picture>
                    </div>
                    <div class="img">
                        <picture>
                            <source srcset="<?php echo APP_ASSETS; ?>img/top/slider04.jpg.webp" type="image/webp">
                            <img src="<?php echo APP_ASSETS; ?>img/top/slider04.jpg" alt="">
                        </picture>
                    </div>
                    <div class="img">
                        <picture>
                            <source srcset="<?php echo APP_ASSETS; ?>img/top/slider01_sp.jpg.webp" type="image/webp"
                                media="(max-width:767px)">
                            <source srcset="<?php echo APP_ASSETS; ?>img/top/slider01_sp.jpg" media="(max-width:767px)">
                            <source srcset="<?php echo APP_ASSETS; ?>img/top/slider01.jpg.webp" type="image/webp">
                            <img src="<?php echo APP_ASSETS; ?>img/top/slider01.jpg" alt="">
                        </picture>
                    </div>
                    <div class="img">
                        <picture>
                            <source srcset="<?php echo APP_ASSETS; ?>img/top/slider02_sp.jpg.webp" type="image/webp"
                                media="(max-width:767px)">
                            <source srcset="<?php echo APP_ASSETS; ?>img/top/slider02_sp.jpg" media="(max-width:767px)">
                            <source srcset="<?php echo APP_ASSETS; ?>img/top/slider02.jpg.webp" type="image/webp">
                            <img src="<?php echo APP_ASSETS; ?>img/top/slider02.jpg" alt="">
                        </picture>
                    </div>
                    <div class="img">
                        <picture>
                            <source srcset="<?php echo APP_ASSETS; ?>img/top/slider03.jpg.webp" type="image/webp">
                            <img src="<?php echo APP_ASSETS; ?>img/top/slider03.jpg" alt="">
                        </picture>
                    </div>
                    <div class="img">
                        <picture>
                            <source srcset="<?php echo APP_ASSETS; ?>img/top/slider04.jpg.webp" type="image/webp">
                            <img src="<?php echo APP_ASSETS; ?>img/top/slider04.jpg" alt="">
                        </picture>
                    </div>
                </div>
                <!-- 画像の2セット目終わり -->
            </div>
        </section>
        <!-- ワークス終わり -->

        <!-- 詳細始まり -->
        <section id="information" class="sec__info">
            <div class="base">
                <div class="info__wrap flex">
                    <div class="img">
                        <picture>
                            <source srcset="<?php echo APP_ASSETS; ?>img/top/info01_sp.jpg.webp" type="image/webp"
                                media="(max-width:767px)">
                            <source srcset="<?php echo APP_ASSETS; ?>img/top/info01_sp.jpg" media="(max-width:767px)">
                            <source srcset="<?php echo APP_ASSETS; ?>img/top/info01.jpg.webp" type="image/webp">
                            <img src="<?php echo APP_ASSETS; ?>img/top/info01.jpg" alt="">
                        </picture>
                    </div>
                    <address class="info__contents">
                        <div class="info__ttl">
                            Information
                        </div>
                        <div class="info__txt flex">
                            <p class="name">
                                Tel
                            </p>
                            <p>
                                <a href="tel:0522655701">
                                    052-265-5701
                                </a>
                            </p>
                        </div>
                        <div class="info__txt flex">
                            <p class="name">
                                営業時間
                            </p>
                            <p>
                                平日 10:30-20:00/土日 10:30-19:30
                                <br>
                                ＊完全予約制
                            </p>
                        </div>
                        <div class="info__txt flex">
                            <p class="name">
                                定休日
                            </p>
                            <p>
                                毎週月曜日
                            </p>
                        </div>
                        <div class="info__txt flex">
                            <p class="name">
                                住所
                            </p>
                            <p>
                                愛知県名古屋市中区栄3-24-11
                                <br>
                                パークフロントサカエビル3F
                            </p>
                        </div>
                        <div class="info__txt flex">
                            <p class="name">
                                アクセス
                            </p>
                            <p>
                                地下鉄名城線 矢場町駅 徒歩6分
                            </p>
                        </div>
                        <div class="info__txt flex">
                            <p class="name">
                                駐車場
                            </p>
                            <p>
                                なし
                            </p>
                        </div>
                    </address>
                </div>
            </div>
            <div class="info__map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d25928.15497397804!2d139.7638057!3d35.676525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sja!2sjp!4v1690507461829!5m2!1sja!2sjp"
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
        <!-- 詳細終わり -->
    </main>

    <?php include($path . 'libs/footer.php'); ?>
</body>

</html>