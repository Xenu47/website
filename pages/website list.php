<?php
    session_start();

    if(!isset($_SESSION['username'])){
    	$_SESSION['username'] = 'Guest';
    }
?>

<!DOCTYPE html5>
<html>
	<head>
		<title>UNEX</title>
		<!-- стили -->
		<link rel="stylesheet" type="text/css" href="../styles/style.css">
		<!-- скрипты -->
		<!-- onload -->
		<script type="text/javascript" src="../scripts/onloads.js"></script>
		<!-- выпадающее меню -->
		<script type="text/javascript" src="../scripts/dropdown.js"></script>
		<!-- логин система -->
		<script type="text/javascript" src="../scripts/auth.js"></script>
		<!-- изменение яркости -->
		<script type="text/javascript" src="../scripts/brightness.js"></script>
	</head>

	<body>
		<!-- header скриптом, чтобы не повторять в каждом файле -->
		<script src="../includes/header.js"></script>
		<script type="text/javascript">
			document.querySelector("a[onclick='mouseOver()']").setAttribute("id", "current");
		</script>

		<!-- мейн с контентом из ссылок на сайты генератора -->
		<main id="all"><center>
			More websites comming soon<br>
			Descriptions TODO
			<img src="../images/kot.png" style="display: flex; height: 400px;" class="responsive-image">


			<!-- помойка -->
			<p id="useless">Useless:</p>
			<a href="http://heeeeeeeey.com" target="_blank">heeeeeeeey.com</a><br>
			<a href="http://tinytuba.com" target="_blank">tinytuba.com</a><br>
			<a href="http://corndog.io" target="_blank">corndog.io</a><br>
			<a href="http://cant-not-tweet-this.com" target="_blank">cant-not-tweet-this.com</a><br>
			<a href="http://weirdorconfusing.com" target="_blank">weirdorconfusing.com</a><br>
			<a href="https://www.eyes-only.net" target="_blank">eyes-only.net</a><br>
			<a href="http://eelslap.com" target="_blank">eelslap.com</a><br>
			<a href="http://www.staggeringbeauty.com" target="_blank">staggeringbeauty.com</a><br>
			<a href="http://burymewithmymoney.com" target="_blank">burymewithmymoney.com</a><br>
			<a href="http://endless.horse" target="_blank">endless.horse</a><br>
			<a href="http://www.republiquedesmangues.fr" target="_blank">republiquedesmangues.fr</a><br>
			<a href="http://www.movenowthinklater.com" target="_blank">movenowthinklater.com</a><br>
			<a href="http://www.partridgegetslucky.com" target="_blank">partridgegetslucky.com</a><br>
			<a href="http://www.rrrgggbbb.com" target="_blank">rrrgggbbb.com</a><br>
			<a href="http://beesbeesbees.com" target="_blank">beesbeesbees.com</a><br>
			<a href="http://www.koalastothemax.com" target="_blank">koalastothemax.com</a><br>
			<a href="http://www.everydayim.com" target="_blank">everydayim.com</a><br>
			<a href="http://cat-bounce.com" target="_blank">cat-bounce.com</a><br>
			<a href="http://chrismckenzie.com" target="_blank">chrismckenzie.com</a><br>
			<a href="http://hasthelargehadroncolliderdestroyedtheworldyet.com" target="_blank">hasthelargehadroncolliderdestroyedtheworldyet.com</a><br>
			<a href="http://ninjaflex.com" target="_blank">ninjaflex.com</a><br>
			<a href="http://ihasabucket.com" target="_blank">ihasabucket.com</a><br>
			<a href="http://corndogoncorndog.com" target="_blank">corndogoncorndog.com</a><br>
			<a href="http://imaninja.com" target="_blank">imaninja.com</a><br>
			<a href="http://www.ismycomputeron.com" target="_blank">ismycomputeron.com</a><br>
			<a href="http://www.nullingthevoid.com" target="_blank">nullingthevoid.com</a><br>
			<a href="http://www.muchbetterthanthis.com" target="_blank">muchbetterthanthis.com</a><br>
			<a href="http://www.yesnoif.com" target="_blank">yesnoif.com</a><br>
			<a href="http://iamawesome.com" target="_blank">iamawesome.com</a><br>
			<a href="http://www.pleaselike.com" target="_blank">pleaselike.com</a><br>
			<a href="http://crouton.net" target="_blank">crouton.net</a><br>
			<a href="http://www.wutdafuk.com" target="_blank">wutdafuk.com</a><br>
			<a href="http://unicodesnowmanforyou.com" target="_blank">unicodesnowmanforyou.com</a><br>
			<a href="http://www.crossdivisions.com" target="_blank">crossdivisions.com</a><br>
			<a href="http://tencents.info" target="_blank">tencents.info</a><br>
			<a href="http://www.patience-is-a-virtue.org" target="_blank">patience-is-a-virtue.org</a><br>
			<a href="http://whitetrash.nl" target="_blank">whitetrash.nl</a><br>
			<a href="http://www.theendofreason.com" target="_blank">theendofreason.com</a><br>
			<a href="http://pixelsfighting.com" target="_blank">pixelsfighting.com</a><br>
			<a href="http://isitwhite.com" target="_blank">isitwhite.com</a><br>
			<a href="http://onemillionlols.com" target="_blank">onemillionlols.com</a><br>
			<a href="http://www.omfgdogs.com" target="_blank">omfgdogs.com</a><br>
			<a href="http://oct82.com" target="_blank">oct82.com</a><br>
			<a href="http://chihuahuaspin.com" target="_blank">chihuahuaspin.com</a><br>
			<a href="http://www.blankwindows.com" target="_blank">blankwindows.com</a><br>
			<a href="http://dogs.are.the.most.moe" target="_blank">dogs.are.the.most.moe</a><br>
			<a href="http://tunnelsnakes.com" target="_blank">tunnelsnakes.com</a><br>
			<a href="http://www.trashloop.com" target="_blank">trashloop.com</a><br>
			<a href="http://www.ascii-middle-finger.com" target="_blank">ascii-middle-finger.com</a><br>
			<a href="http://buildshruggie.com" target="_blank">buildshruggie.com</a><br>
			<a href="http://buzzybuzz.biz" target="_blank">buzzybuzz.biz</a><br>
			<a href="http://yeahlemons.com" target="_blank">yeahlemons.com</a><br>
			<a href="http://burnie.com" target="_blank">burnie.com</a><br>
			<a href="http://wowenwilsonquiz.com" target="_blank">wowenwilsonquiz.com</a><br>
			<a href="https://thepigeon.org" target="_blank">thepigeon.org</a><br>
			<a href="http://www.amialright.com" target="_blank">amialright.com</a><br>


			<!-- полезное -->
			<p id="useful">Useful:</p>
			<a href="http://www.trypap.com" target="_blank">trypap.com</a><br>
			<a href="http://randomcolour.com" target="_blank">randomcolour.com</a><br>
			<a href="http://www.hackertyper.com" target="_blank">hackertyper.com</a><br>
			<a href="https://pointerpointer.com" target="_blank">pointerpointer.com</a><br>
			<a href="http://corgiorgy.com" target="_blank">corgiorgy.com</a><br>
			<a href="http://spaceis.cool" target="_blank">spaceis.cool</a><br>
			<a href="http://www.donothingfor2minutes.com" target="_blank">donothingfor2minutes.com</a><br>
			<a href="http://notdayoftheweek.com" target="_blank">notdayoftheweek.com</a><br>
			<a href="http://nooooooooooooooo.com" target="_blank">nooooooooooooooo.com</a><br>
			<a href="https://paletton.com" target="_blank">paletton.com</a><br>
			<a href="https://htmlcolorcodes.com/" target="_blank">htmlcolorcodes.com</a><br>
			<a href="https://privnote.com" target="_blank">privnote.com</a><br>
			<a href="http://whatthefuckshouldimakefordinner.com" target="_blank">whatthefuckshouldimakefordinner.com</a><br>
			<a href="https://www.strawpoll.me/" target="_blank">strawpoll.me</a><br>
			<a href="https://fast.com/" target="_blank">fast.com</a><br>
			<a href="https://gtmetrix.com/" target="_blank">gtmetrix.com</a><br>
			<a href="https://vectr.com/new" target="_blank">vectr.com/new</a><br>
			<a href="https://ru.lmgtfy.com/" target="_blank">ru.lmgtfy.com</a><br>
			<a href="https://www.myfonts.com/WhatTheFont/" target="_blank">myfonts.com/WhatTheFont</a><br>
			<a href="https://everytimezone.com/" target="_blank">everytimezone.com</a><br>
			<a href="https://www.flightradar24.com" target="_blank">flightradar24.com</a><br>


			<!-- пользовательские -->
			<p id="user">User:</p>
			<a href="https://scrollbars.matoseb.com" target="_blank">scrollbars.matoseb.com</a><br>
		</center></main>

		<!-- footer скриптом, чтобы не повторять в каждом файле -->
		<script src="../includes/footer.js"></script>
	</body>
</html>
