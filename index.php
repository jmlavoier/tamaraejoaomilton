<?php 
$tomorrow  = mktime (0, 0, 0, date("m")  , date("d")+1, date("Y"));
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Tamara & João Milton</title>
		<meta charset="UTF-8">
		<meta http-equiv="expires" content="<?php echo date(DATE_RFC850, $tomorrow) ?>">
		<meta name="viewport" content="width=device-width, user-scalable=no">
		<link rel="stylesheet" type="text/css" href="dist/plugins/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="dist/css/main.css">
		<link rel="stylesheet" type="text/css" href="dist/css/sprites.css">
	</head>
	<body>
		<div class="header">
			<div class="content">
				<span class="fill"></span>
				<span class="title">
					<span class="title-1">João Milton </span>
					<span class="s s-arrow-left"></span>
					<span class="s s-heart"></span>
					<span class="s s-arrow-right"></span>
					<span class="title-2">Tamara</span>
				</span>
			</div>
		</div>
		<div class="container">
			<div class="row page wedding">
				<div class="col-sm-12">
					<h1 class="title">Ta chegando</h2>
					<div class="left-time">
						<span class="days">
							<span class="n"></span>
							<span class="l">dias</span>
						</span>
						<span class="hours">
							<span class="n"></span>
							<span class="l">horas</span>
						</span>
						<span class="minutes">
							<span class="n"></span>
							<span class="l">minutos</span>
						</span>
						<span class="seconds">
							<span class="n"></span>
							<span class="l">segundos</span>
						</span>
					</div>
				</div>
			</div>
			<div class="row page gifts">
				<div class="col-sm-12 ">
					<h1 class="title">LISTA DE PRESENTES</h2>
					<p>Escolha a loja que mais tem a ver com você, e nos ajude a começar a nossa vida juntos.</p>
					<div class="col-sm-4 gift-list">
						<span>
							<a href="http://www.francoipresentes.com.br/lista/casamento/tamara-da-silva-chinarelli-e-joao-milton-lavoier-filho/17966/">
								<img src="dist/img/general/francoi.jpg" class="img-responsive img-circle">
							</a>
						</span>
					</div>
					<div class="col-sm-4 gift-list">
						<span>
							<a href="https://lista.havan.com.br/Convidado/ItensLista/1/10482522">
								<img src="dist/img/general/havan.jpg" class="img-responsive img-circle">
							</a>
						</span>
					</div>
					<div class="col-sm-4 gift-list">
						<span>
							<a href="https://sites.icasei.com.br/tamaraejoaomilton/pt_br/store/index/9?id_loja=1">
								<img src="dist/img/general/icasei.jpg" class="img-responsive img-circle">
							</a>
						</span>
					</div>	
				</div>
			</div>
			<div class="row page map">
				<div id="map"></div>
			</div>
			<!-- 
			<div class="row page we-two">
				<div class="col-sm-12 ">
					<h2>NOS DOIS</h2>
					<div class="col-sm-6">
						<h3>HISTÓRIA</h3>
						<p> 
							Sinceramente sempre quis uma história como nos contos de princesas e adivinhem a minha foi exatamente assim... Brincadeirinha, nao foi como nos contos, foi melhor, pois teve uma boa pitada de realidade! Bom vamos ao que interessa, à nossa história...
							Foi em Marco de 2012 que nosa encontramos de uma forma nada convencional, rsrs... Tinhamos uma amiga em comum e essa amiga me chamou para ir no monte orar com ela e a sua turma. Pensei: -Nossa vou facil... E lá estava eu e a Adelita e mais uma galera muito gente boa, buscando a Deus; de repente ele chega e eu digo: - Quem é ele? E ele diz: - Caramba quem é essa menina... que linda, que voz... É ela.... é ela! s2 s2
							Ele ficou apaixonado por mim! E essa é a história Fim! rsrsr
					 
						</p>
					</div>
					<div class="col-sm-6">
						<h3>PLAYLIST</h3>
						<p>Se você tem Spotify ouça nossa playlist. Se não tem, ow acorda, cadastre no Spoti fazendo favor, se atualize pow!</p>
						<div class="spotify">
							<iframe src="https://embed.spotify.com/?uri=spotify%3Auser%3A12164293706%3Aplaylist%3A0OXl3ZhKQXjln3WYYNapx9" width="300" height="380" frameborder="0" allowtransparency="true"></iframe>
						</div>
					</div>
				</div>
			</div>
			<div class="row page">
				<div class="col-sm-12">
					<h2>OS PADRINHOS</h2>
					<p> Aqui os nossos valiosos padrihos e madrinhas que amamos tanto</p>
				</div>
			</div>
			<div class="row page">
				<div class="col-sm-12">
					<h2>NOVIDADES</h2>
					<p> Fique atento às novidados do casamento</p>
				</div>
			</div>
			<div class="row page">
				<div class="col-sm-12">
					<h2>RECADOS</h2>
					<p> Se você tem algo para falar, fale agora ou cale-se para sempre... </p>
				</div>
			</div>
			<div class="row page">
				<div class="col-sm-12">
					<h2>LOCAL</h2>
					<p> MAPA Gooooogle Maps</p>
				</div>
			</div>
			-->
		</div>

		<script type="text/javascript" src="dist/js/bundle.js" charset="utf-8"></script>
		<script type="text/javascript" src="dist/plugins/bootstrap/js/bootstrap.min.js"></script>
		<script>
			function initMap() {
				var mapDiv = document.getElementById('map');
				var map = new google.maps.Map(mapDiv, {
					center: {lat: -20.985723, lng: -47.657543},
					zoom: 16
				});

				var image = 'http://tamaraejoaomilton.com.br/dist/img/general/heart.png';
				var beachMarker = new google.maps.Marker({
					position: {lat: -20.985723, lng: -47.657543},
					map: map,
					icon: image
				});
			}
		</script>
		<script src="https://maps.googleapis.com/maps/api/js?callback=initMap"
        async defer></script>
	</body>
</html>