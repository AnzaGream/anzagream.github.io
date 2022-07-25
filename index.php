<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Янг</title> 
	<meta name="description" content="Янг">
    <link rel="stylesheet" href="css/main.css" />
	<link rel="shortcut icon" href="img/2.ico" type="image/ico">
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(54610852, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        ecommerce:"dataLayer"
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/54610852" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
  </head>
  <body>
    <div class="preloader">
      <div style="PreloaderStyle" class="preloader-circle"></div>
    </div>

    <div id="asif-page">
      <div class="wrapper">
        <div class="background">
          <video preload muted ref="background-video" id="background-video">
            <source src="videos/video.mp4" type="video/mp4" />
          </video>
        </div>
        <div class="asif-page-copyright" :style="CopyRightStyle">
          {{ copyrightText }}
        </div>

        <div class="container">
          <div class="asif-page-wrapper">
            <div class="asif-page-info">
              <div
                class="asif-page-info-play"
                :class=" { 'is-playing': isPlaying }"
                :style="PlayButtonStyle"
                @click="startPlay"
              >
                Play
              </div>
              <div class="asif-page-info-logo"></div>
              <div
                ref="title"
                :class="{ 'title-visible': titleVisible }"
                class="asif-page-info-title"
                :style="TitleStyle"
              >
                {{ title }}
              </div>
              <div
                class="asif-page-info-social"
                :class="{ 'social-visible': titleVisible }"
              >
                <a
                  v-for="(item, key) in social"
                  :href="getSocialLink(key, item)"
                  target="_blank"
                  class="asif-page-info-social-item"
                >
                  <span :style="SocialStyle" :class="'icon-' + key"></span>
                </a>
              </div>
            </div> 
          </div>
        </div>
      </div>
    </div>
<!-- <script>
document.oncontextmenu = function (e) { e.preventDefault(); return false; }
</script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                    <!-- Снежок на сайте -->
<!-- <script src="https://fullshow.uz/main/js/snowfall.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.collectonme').hide();
        //Start the snow default options you can also make it snow in certain elements, etc.
        $(document).snowfall();
    });
</script> -->
  <script src="js/block.js"></script>
  <script src="js/window.js"></script>
	<script src="js/vue.js"></script>
  <script src="js/config.js"></script>
	<script src="js/common.js"></script>
	<script src="js/index.js"></script>
  </body>
</html>
