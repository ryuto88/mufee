<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<?php echo Asset::css('jplayer.blue.monday.css'); ?>
<?php echo Asset::js('jquery-1.5.2.min.js'); ?>
<?php echo Asset::js('jquery.jplayer.min.js'); ?>
<script type="text/javascript">
$(function(){

var sound = new Array();

sound["1"] = "hyperbeat";
sound["2"] = "jazz";
sound["3"] = "pops";
sound["4"] = "house";
sound["5"] = "画竜点睛";



var loadJPlayer=function(){

var mu = random();
	$('#jquery_jplayer_1').jPlayer({
		ready:function(){
			$(this)
			.jPlayer('volume',0.5)
			.jPlayer('setMedia',{mp3:'../public/sound/'+mu+'.mp3'})
			.jPlayer('stop')
                        .jPlayer('play');
		},
		ended:function(event){
			var mu = random();
                        $(this).jPlayer('setMedia',{mp3:'../public/sound/'+mu+'.mp3'})
                        .jPlayer('play')
		},
		swfPath:'../swf',
		supplied:'mp3',
		cssSelectorAncestor:'#jp_interface_1',
	});


}

$(loadJPlayer);
function random()
{
    
    return sound[Math.floor(Math.random()*5+1)];
}
});
</script>
<title>Test</title>
</head>
<body>

    
<div id="jquery_jplayer_1" class="jp-jplayer"></div>
<div class="jp-audio">
<div class="jp-type-single">
<div id="jp_interface_1" class="jp-interface">
<ul class="jp-controls">
<li><a href="#" class="jp-play" tabindex="1">play</a></li>
<li><a href="#" class="jp-pause" tabindex="1">pause</a></li>
<li><a href="#" class="jp-stop" tabindex="1">stop</a></li>
<li><a href="#" class="jp-mute" tabindex="1">mute</a></li>
<li><a href="#" class="jp-unmute" tabindex="1">unmute</a></li>
</ul>
<div class="jp-progress">
<div class="jp-seek-bar">
<div class="jp-play-bar"></div>
</div>
</div>
<div class="jp-volume-bar">
<div class="jp-volume-bar-value"></div>
</div>
<div class="jp-current-time"></div>
<div class="jp-duration"></div>
</div>
<div id="jp_playlist_1" class="jp-playlist">
</div>
</div>
</div>

</body>

</html>