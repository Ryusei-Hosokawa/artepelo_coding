<footer>
    <div class="base">
        <p class="center">
            最高の一瞬を切り取り、一瞬を永遠に変える。
        </p>
        <div class="name__wrap">
            <div class="footer__logo img">
                <picture>
                    <source srcset="<?php echo APP_ASSETS; ?>img/common/logo_white.png.webp" type="image/webp">
                    <img src="<?php echo APP_ASSETS; ?>img/common/logo_white.png" alt="ロゴ">
                </picture>
            </div>
            <h2>
                スタジオ アルテ ペロ
            </h2>
        </div>
        <small class="center">
            Copyright Studio arte pelo. All rights reserved.
        </small>
    </div>
</footer>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="<?php echo APP_ASSETS; ?>js/modernizr.js"></script>
<script src="<?php echo APP_ASSETS; ?>js/common.min.js"></script> -->

<script>
var ua = navigator.userAgent
var sp = (ua.indexOf('iPhone') > 0 || ua.indexOf('Android') > 0 && ua.indexOf('Mobile') > 0)
if (sp) new ViewportExtra(375)
</script>