<?php
/*
Template Name: Test Playlist Home
*/
?>

<?php get_header(); ?>

<div class="td-container playlist-container">
    <div class="td-pb-row" style="padding: 0px 22px;">
      <h2 class="video-playlist-title">Video</h2>

      <div class="rmp-playlist-container">
        <div class="rmp-playlist-player-wrapper">
          <div id="SportreviewPlaylist"></div>
        </div>
      </div>

      <script>
        var settings = {
          logo: '<?php echo site_url(); ?>/wp-content/themes/Newspaper-child/images/logo-ju24-video.png',
          logoLoc:'<?php echo site_url(); ?>/',
          pathToRmpFiles: '//cdn.sportreview.it/radiantmp/latest/',
          licenseKey: 'dG54dHd4aXh6aEAxNTA5NDU3',
          skinAccentColor: 'd6ba38',
          delayToFade: 3000,
          autoHeightMode: true,
          debug: true,
          autoplay: true,
          muted: true,
          ads: true,
          adCountDown: true,
          sharing: true,
          playlistUpNextAutoplay: true,
          playlistLoc: '<?php echo site_url(); ?>/playlist-json-hls-v2/',
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

        var elementID = 'SportreviewPlaylist';
        var rmpContainer = new RadiantMP(elementID);
        rmpContainer.init(settings);

      </script>

  	</div><!-- td-pb-row -->
</div><!-- td-container -->

<?php get_footer(); ?>