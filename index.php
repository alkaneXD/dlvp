<!DOCTYPE html>
<html lang="en">
<head>
  <title>DLVP</title>
  <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" name="viewport">
  <meta content="Alkane, Orgen" name="author">
  <meta content="direct link, video, play, play direct link, movie, direct" name="keywords">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="dist/css/materialize.min.css" rel="stylesheet" type="text/css">
  <link href="dist/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
  <main>
    <div class="container">
      <h5 class="center">Why download? If you can watch it here.</h5>
      <form id="url-submit" name="url-submit">
        <div class="row">
          <div class="input-field col l12 s12 m12">
            <i class="material-icons prefix">link</i> <input class="validate input-field" id="link-box" name="direct-link" placeholder="Video direct link only." type="text"> <label></label>
          </div>
          <div class="col push-l11 push-m11 push-s9" id="play-div">
            <button class="btn-floating btn-small waves-effect waves-light green" id="play-btn" name="action" type="submit"><i class="material-icons">play_arrow</i></button>
          </div>
        </div>
      </form>
      <div class="center" hidden="" id="hide">
        <video class="videocon" controls id="player" preload="auto" autoplay><source id="src" type="video/mp4">.</video>
      </div>
    </div>
  </main>
  <footer class="page-footer green lighten-1">
    <div class="container">
      <div class="row">
        <div class="col l12 s12 m12">
          <h5 class="white-text center">DLVP (Direct Link Video Player)</h5>
          <p class="grey-text text-lighten-4 center">Play videos directly on any HTML5 video supported browsers.</p>
        </div>
      </div>
    </div>
  </footer>
  <script src="dist/js/jquery-2.1.1.min.js">
  </script> 
  <script src="dist/js/jquery.wait.js">
  </script> 
  <script src="dist/js/materialize.min.js">
  </script> 
  <script src="dist/js/submit.js">
  </script> 
  <script src="dist/js/controls.js">
  </script>
</body>
</html>
