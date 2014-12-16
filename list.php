<?php 
	function random_color_part() {
	    return str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT);
	}

	function random_color() {
	    return random_color_part() . random_color_part() . random_color_part();
	}

	$links = array(
		'http://bit.ly/1qks0yw', // http://www.poucerouge.fr
		'http://bit.ly/18Eq63e', // http://rickrolled.fr/
		'http://bit.ly/1wdn7qz', // https://www.youtube.com/watch?v=PS3jlUPPf5U (honking kitty)
		'http://bit.ly/1cTxV24', // http://trololololololololololo.com/
		'http://bit.ly/1jULExK', // http://dickbutt.it/dickbutt.jpg
		'http://bit.ly/18rcoOE', // http://www.nyan.cat/
		'http://bit.ly/1wdpABw', // http://i1.kym-cdn.com/photos/images/newsfeed/000/052/812/Deal_with_it_dog_gif.gif (deal with it)
		'http://bit.ly/1nmz9LQ', // http://i2.kym-cdn.com/photos/images/facebook/000/217/040/48ACD.png (this is dog)
		'http://bit.ly/1zq7YEC', // http://fc02.deviantart.net/fs70/f/2013/220/5/4/roflcopter_gif_by_solaris_92-d6h7qbu.gif (ROFLcopter)
		'http://bit.ly/1Ac5lEG', // https://www.youtube.com/watch?v=Y-bnwcQM3Jc (everybody knows shits fucked)
		'http://bit.ly/1yN7R64', // https://vine.co/v/blVVvx0gWz9
		'http://bit.ly/1Ac0Rhg' // https://www.humblebundle.com/s?gift=MfnMXpZhFvyYkc5t (cadooo)
	);

	shuffle($links);
	for($i = 0; $i < count($links); $i++){
		echo '<li><a href="'.$links[$i].'" style="background-color: #'.random_color().';" target="_blank"></a></li>';
	}