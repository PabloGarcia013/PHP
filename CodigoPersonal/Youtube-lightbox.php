<head>
<script>
function show_youtube_ligthbox(id,url_youtube,artist_string,album_string){
	var e = document.getElementById(id);
	if(e.style.display == 'block'){
		e.style.display = 'none';
		var elem = document.getElementById('iframe_id');
		elem.parentNode.removeChild(elem);
		return false;
	}
	else{
		e.style.display = 'block';
		var artist = document.getElementById('artist_pop_up');
		var album = document.getElementById('album_pop_up');
		artist.innerHTML = artist_string;
		album.innerHTML = album_string;
		var iframe_container = document.getElementById('iframe_container');
		var iframe = document.createElement('iframe');
		iframe.setAttribute('id','iframe_id');
		iframe.setAttribute('scrolling','no');
		iframe.setAttribute('frameborder','0');
		iframe.setAttribute('src',url_youtube);
		iframe_container.appendChild(iframe);
	}
}
</script>
</head>
<body>
<?php
	echo "<div id=\"youtube_pop_up\" class=\"youtube_pop_up\">";
		echo "<div id=\"youtube_pop_up_wrapper\">";
			echo "<div id=\"youtube_container\">";
				echo "<div class=\"pop_up_info\">";
					echo "<h2 id=\"artist_pop_up\"></h2>";
					echo "<p id=\"album_pop_up\"></p>";
				echo "</div>";
				echo"<a href=\"javascript:void(0)\" onclick=\"javascript:show_youtube_ligthbox('youtube_pop_up')\"><img class=\"close_image\" src=\"button_close.png\"</img></a>";
				echo"<div id=\"iframe_container\">";
				echo"</div>";
			echo"</div>";
		echo"</div>";
	echo"</div>";

	...

	echo "<a href=\"javascript:void(0)\" onclick=\"javascript:show_youtube_ligthbox('youtube_pop_up','youtube_embed_url','$artist_name_string','$album_name_string')\" ><img src=\"youtube.png\"></a><br>";

	...

?>

</body>