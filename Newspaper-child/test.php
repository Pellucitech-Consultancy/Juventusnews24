<?php

/*

Template Name: Test Page

*/

?>

<script src="https://cdn.radiantmediatechs.com/rmp/v3/latest/js/rmp.min.js"></script>
<div class="playerHolder"><div id="SportreviewSlidePlayer"></div></div>

<script>

  <?php if(isset($_GET['vimeo'])): ?>
    var bitrates = { hls: "https://player.vimeo.com/external/203113420.m3u8?s=8d6ffac2219ee68a85749d694e50f2d1d9bc58ca"  };
  <?php else: ?>
    var bitrates = {
      mp4: ["https://www.juventusnews24.com/wp-content/uploads/2017/02/J09-UNO-SCUDETTO-DA-SOGNO.mp4"] // url video
    };
  <?php endif; ?>


  var schedule = {
    // Multiple preroll video ads
    preroll: [
      "https://pubads.g.doubleclick.net/gampad/ads?sz=640x480&iu=/124319096/external/single_ad_samples&ciu_szs=300x250&impl=s&gdfp_req=1&env=vp&output=vast&unviewed_position_start=1&cust_params=deployment%3Ddevsite%26sample_ct%3Dskippablelinear&correlator="+Math.round(Math.random()*10000000000)+""
    ],
    postroll: [
      "https://pubads.g.doubleclick.net/gampad/ads?sz=640x480&iu=/124319096/external/single_ad_samples&ciu_szs=300x250&impl=s&gdfp_req=1&env=vp&output=vast&unviewed_position_start=1&cust_params=deployment%3Ddevsite%26sample_ct%3Dskippablelinear&correlator="+Math.round(Math.random()*10000000000)+""
    ]
  };

  var settings = {
    logo: 'https://www.juventusnews24.com/wp-content/themes/Newspaper-child/images/logo-ju24-video.png',
    logoLoc:'https://www.juventusnews24.com/',
    licenseKey: 'dG54dHd4aXh6aEAxNTA5NDU3',
    bitrates: bitrates,
    skin: 's5', // da s1 a s5
    delayToFade: 3000,
    debug: false,
    autoplay: true,
    autoHeightMode: true,
    muted: false,
    loop: true,
    mutedAutoplayOnMobile: true,
    sharing: true,
    ads: true,
    adSchedule: schedule,
    adMaxNumRedirects:6,
    adCountDown: true,
    labels: {
      ads: {
        controlBarCustomMessage: 'Messaggio promozionale'
      },
      hint: {
        sharing: 'Condividi',
        quality: 'Qualità',
        speed: 'Velocità',
        captions: 'Sottotitoli',
        audio: 'Audio',
        cast: 'Cast',
        playlist: 'Playlist'
      },
      error: {
        customErrorMessage: 'Il contenuto video non è al momento disponibile.',
        noSupportMessage: 'Manca il supporto per la riproduzione dei video.',
        noSupportDownload: 'Puoi scaricare il video qui.',
        noSupportInstallChrome: 'E\' necessario aggiornare Google Chrome per visualizzare questo contenuto.'
      }
    }
  };


  var elementID = 'SportreviewSlidePlayer';
  var rmpContainer = document.getElementById(elementID);
  var rmp = new RadiantMP(elementID);
  rmp.init(settings);

</script>
