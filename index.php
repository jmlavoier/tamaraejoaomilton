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
			<div class="row page gifts">
				<div class="col-sm-12 ">
					<h2>LISTA DE PRESENTES</h2>
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
							<a href="http://lista.havan.com.br/Convidado/ItensLista/1/10257048">
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
			<div class="row page we-two">
				<div class="col-sm-12 ">
					<h2>NOS DOIS</h2>
					<div class="col-sm-6">
						<h3>HISTÓRIA</h3>
						<p> Aqui vai ter um pouco da nossa hitória, não vou escrever agora porque já é 1:51AM e estou cansado demais precisando dormir.</p>
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
		</div>

		<script type="text/javascript" src="dist/js/bundle.js" charset="utf-8"></script>
		<script type="text/javascript" src="dist/plugins/bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>