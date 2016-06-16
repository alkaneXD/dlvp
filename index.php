<!DOCTYPE html>
<html lang="en">
<head>
  <title>Direct Link HTML5 Player</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <meta name="author" content="Alkane, Orgen">
  <meta name="keywords" content="direct link, video, play, play direct link, movie, direct">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="dist/css/materialize.min.css" type="text/css" rel="stylesheet" />
</head>
<body>
	<form id="url-submit">
  	<div class="row">
  		<div class="input-field col l12 s12 m12">
        <i class="material-icons prefix">link</i>
        <input id="link-box" type="text" class="validate" name="direct-link" placeholder="Video direct link only.">
        <label></label>  
      </div>
      <div class="col l12 m12 s12">
        <button class="btn waves-effect waves-light col l12 m12 s12" type="submit" name="action">
        	Play<i class="material-icons right">play_arrow</i>
        </button>
      </div>
    </div>
	</form>
	<div id="hide" class="center" hidden>
	<video id="player" controls="controls" autoplay="autoplay" style="height:auto;width:100%;">
		<source id="src" type="video/mp4"></source>.
	</video>
	</div>
  <script src="dist/js/jquery-2.1.1.min.js"></script>
  <script src="dist/js/jquery.wait.js"></script>
  <script src="dist/js/materialize.min.js"></script>
  <script src="dist/js/submit.js"></script>
</body>
</html>
