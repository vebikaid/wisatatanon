  <!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <title>Scattered Polaroids Gallery</title>
    <meta name="description" content="Scattered Polaroids Gallery: A flat-style take on a Polaroid gallery" />
    <meta name="keywords" content="scattered polaroids, image gallery, javascript, random rotation, 3d, backface, flat design" />
    <meta name="author" content="Codrops" />
    <link rel="stylesheet" type="text/css" href="<?=base_url('') ?>assets/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url('') ?>assets/css/demo.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url('') ?>assets/css/component.css">
    <link rel="shortcut icon" href="../favicon.ico">
    <script src="<?=base_url('') ?>assets/js/modernizr.min.js"></script>
  </head>
  <body>
  <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
      <!-- Top Navigation -->
      <section id="photostack-1" class="photostack photostack-start tanon " style="width: 100%;">
        <div>
          <figure>
            <a href="http://goo.gl/Qw3ND4" class="photostack-img"><img src="<?=base_url('') ?>assets/img/1.jpg" alt="img01"/></a>
            <figcaption>
              <h2 class="photostack-title">Serenity Beach</h2>
            </figcaption>
          </figure>
          <figure>
            <a href="http://goo.gl/fhwlSP" class="photostack-img"><img src="<?=base_url('') ?>assets/img/2.jpg" alt="img02"/></a>
            <figcaption>
              <h2 class="photostack-title">Happy Days</h2>
            </figcaption>
          </figure>
          <figure>
            <a href="http://goo.gl/Jmvr4u" class="photostack-img"><img src="<?=base_url('') ?>assets/img/3.jpg" alt="img03"/></a>
            <figcaption>
              <h2 class="photostack-title">Beautywood</h2>
            </figcaption>
          </figure>
          <figure>
            <a href="http://goo.gl/49lN3k" class="photostack-img"><img src="<?=base_url('') ?>assets/img/4.jpg" alt="img04"/></a>
            <figcaption>
              <h2 class="photostack-title">Heaven of time</h2>
            </figcaption>
          </figure>
          <figure>
            <a href="http://goo.gl/NJ1Dhf" class="photostack-img"><img src="<?=base_url('') ?>assets/img/5.jpg" alt="img05"/></a>
            <figcaption>
              <h2 class="photostack-title">Speed Racer</h2>
            </figcaption>
          </figure>
          <figure>
            <a href="http://goo.gl/Ms7VDl" class="photostack-img"><img src="<?=base_url('') ?>assets/img/6.jpg" alt="img06"/></a>
            <figcaption>
              <h2 class="photostack-title">Forever this</h2>
            </figcaption>
          </figure>
          <figure data-dummy>
            <a href="#" class="photostack-img"><img src="<?=base_url('') ?>assets/img/7.jpg" alt="img07"/></a>
            <figcaption>
              <h2 class="photostack-title">Lovely Green</h2>
            </figcaption>
          </figure>
          <figure data-dummy>
            <a href="#" class="photostack-img"><img src="<?=base_url('') ?>assets/img/8.jpg" alt="img08"/></a>
            <figcaption>
              <h2 class="photostack-title">Wonderful</h2>
            </figcaption>
          </figure>
          <figure data-dummy>
            <a href="#" class="photostack-img"><img src="<?=base_url('') ?>assets/img/9.jpg" alt="img09"/></a>
            <figcaption>
              <h2 class="photostack-title">Love Addict</h2>
            </figcaption>
          </figure>
          <figure data-dummy>
            <a href="#" class="photostack-img"><img src="<?=base_url('') ?>assets/img/10.jpg" alt="img10"/></a>
            <figcaption>
              <h2 class="photostack-title">Friendship</h2>
            </figcaption>
          </figure>
          <figure data-dummy>
            <a href="#" class="photostack-img"><img src="<?=base_url('') ?>assets/img/11.jpg" alt="img11"/></a>
            <figcaption>
              <h2 class="photostack-title">White Nights</h2>
            </figcaption>
          </figure>
          <figure data-dummy>
            <a href="#" class="photostack-img"><img src="<?=base_url('') ?>assets/img/12.jpg" alt="img12"/></a>
            <figcaption>
              <h2 class="photostack-title">Serendipity</h2>
            </figcaption>
          </figure>
          <figure data-dummy>
            <a href="#" class="photostack-img"><img src="<?=base_url('') ?>assets/img/13.jpg" alt="img13"/></a>
            <figcaption>
              <h2 class="photostack-title">Pure Soul</h2>
            </figcaption>
          </figure>
          <figure data-dummy>
            <a href="#" class="photostack-img"><img src="<?=base_url('') ?>assets/img/14.jpg" alt="img14"/></a>
            <figcaption>
              <h2 class="photostack-title">Winds of Peace</h2>
            </figcaption>
          </figure>
          <figure data-dummy>
            <a href="#" class="photostack-img"><img src="<?=base_url('') ?>assets/img/15.jpg" alt="img15"/></a>
            <figcaption>
              <h2 class="photostack-title">Shades of blue</h2>
            </figcaption>
          </figure>
          <figure data-dummy>
            <a href="#" class="photostack-img"><img src="<?=base_url('') ?>assets/img/16.jpg" alt="img16"/></a>
            <figcaption>
              <h2 class="photostack-title">Lightness</h2>
            </figcaption>
          </figure>
        </div>
      </section>
    </section><!-- End Hero -->
    <script src="<?=base_url('') ?>assets/js/classie.js"></script>
    <script src="<?=base_url('') ?>assets/js/photostack.js"></script>
    <script>
      // [].slice.call( document.querySelectorAll( '.photostack' ) ).forEach( function( el ) { new Photostack( el ); } );
      
      new Photostack( document.getElementById( 'photostack-1' ), {
        callback : function( item ) {
          //console.log(item)
        }
      } );
      new Photostack( document.getElementById( 'photostack-2' ), {
        callback : function( item ) {
          //console.log(item)
        }
      } );
      new Photostack( document.getElementById( 'photostack-3' ), {
        callback : function( item ) {
          //console.log(item)
        }
      } );
    </script>
  </body>
</html>
