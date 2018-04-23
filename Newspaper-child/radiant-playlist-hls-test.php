<?php
/*
Template Name: Radiant Playlist HLS Test
*/
?>
<!doctype html >
<!--[if gt IE 8]><!--> <html lang="it-IT" prefix="og: http://ogp.me/ns#"> <!--<![endif]-->
	<head>
		<title>Radiant Playlist HLS Test</title>
    <meta charset="UTF-8" />    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex,nofollow" />
    <script src="http://www.junews24.com/wp-content/themes/Newspaper-child/js/isMobileNewtek.js"></script>
    <script src="http://www.junews24.com/radiantmp/latest/js/rmp.min.js"></script>

    <style type="text/css">
      .rmp-playlist-item-title { white-space: pre-line !important; }
      .rmp-playlist-side-menu .rmp-playlist-item-active, .rmp-playlist-item:not(.rmp-playlist-item-active):hover { background-color: #000 !important; color: #fff !important; }
      .rmp-playlist-item-description { display: none; }
    </style>
	</head>

	<body>

		<div class="td-container">

			<div class="td-pb-row" style="padding: 0px 22px;">

      <div class="rmp-playlist-container">
        <div class="rmp-playlist-player-wrapper">
          <div id="SportreviewPlaylist"></div>
        </div>
      </div>

      <script>
        var settings = {
          logo: 'http://www.junews24.com/wp-content/themes/Newspaper-child/images/logo-ju24-video.png',
          logoLoc:'http://www.junews24.com/',
          pathToRmpFiles: 'http://www.junews24.com/radiantmp/latest/',
          licenseKey: 'Kl8lcThrdjQwMnllaT9yb201ZGFzaXMzMGRiMEElXyo=',
          skin:'s1',
          skinAccentColor: 'd6ba38',
          delayToFade: 3000,
          debug: true,
          autoplay: true,
          autoHeightMode: true,
          muted: true,
          loop: false,
          mutedAutoplayOnMobile:true,
          sharing: true,
          ads: true,
          adCountDown: true,
          playlistUpNextAutoplay: true,
          playlistLoc: 'http://www.junews24.com/playlist-json-hls/',
          labels: {
            ads: {
              controlBarCustomMessage: 'Messaggio pubblicitario'
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
          //poster: '<?php //echo $cover_img; ?>' // eventuale immagine poster
        };

        var elementID = 'SportreviewPlaylist';
        var rmpContainer = new RadiantMP(elementID);
        rmpContainer.init(settings);

      </script>


				<?php //the_content(); ?>

		    </div><!--td-pb-row-->

		</div><!--td-container-->


	</body>
</html>