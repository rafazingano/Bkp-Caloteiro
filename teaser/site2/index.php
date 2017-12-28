<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Bootstrap -->
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/bootstrap-theme.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">

		<!-- Scripts.js -->
		<script src="js/jquery-1.11.2.min.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/config.js"></script> 	
	</head>
	<body>
		<div class="content-header" id="home">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<header class="desk">
							<li><a href="#home"><span>home</span></a></li>
							<li><a href="#participar"><span>como participar</span></a></li>
							<li><a href="#cadastro"><span>cadastro</span></a></li>
							<li><a href="#premios"><span>prêmios</span></a></li>
							<li><a href="#regulamento"><span>regulamento</span></a></li>
							<li><a href="#contato"><span>contato</span></a></li>
							<li><a href="#vencedores"><span>vencedores</span></a></li>
						</header>
						<header class="mobi">
							<div class="three col">
					        	<div class="hamburger" id="hamburger-10">
						         	<span class="line"></span>
						         	<span class="line"></span>
						        	<span class="line"></span>
					        	</div>
					        </div>
					        <div class="sub-menu">
					        	<li><a href="#home">home</a></li>
								<li><a href="#participar">como participar</a></li>
								<li><a href="#cadastro">cadastro</a></li>
								<li><a href="#premios">prêmios</a></li>
								<li><a href="#regulamento">regulamento</a></li>
								<li><a href="#contato">contato</a></li>
								<li><a href="#vencedores">vencedores</a></li>
					        </div>
						</header>
					</div>

				</div>
			</div>
		</div>
		<div class="content-banner">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="banner">
							<span>Espaço para</span><br/>
							<span>comunicação do evento</span><br/>
							<span>banner link para o site do festival</span>
						</div>	
					</div>
				</div>
			</div>
		</div>
		<main>
			<div class="degrade">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="logo">
								<img class="img-fluid" src="img/logo.png">
							</div>
							<div class="logo-text">
								<span>PARTICIPE DOS SORTEIOS E ESCOLHA COMO<br/>
									QUER CURTIR O MELHOR EVENTO DO VERÃO
								</span>	
							</div>
							<div class="imgs-meio">
								<div class="meio img-left">
									<img class="img-fluid" src="img/vip.png">
								</div>
								<div class="meio img-right">
									<img class="img-fluid" src="img/backstage.png">
								</div>
								<div class="meio img-left">
									<img class="img-fluid" src="img/youtubers.png">
								</div>
								<div class="meio img-right">
									<img class="img-fluid" src="img/passaporte.png">
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
			<div class="degrade">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="como-participar">
								<div class="titulo t-como" id="participar">
									<h2>como participar</h2>
								</div>
								<div class="corpo-participar">
									<div class="item">
										<div><text>1.</text></div>
										<div><span>Compre R$ 10,00 em pepsi</span></div>
									</div>
									<div class="item">
										<div><text>2.</text></div>
										<div><span>preencha o cadastro no site</span></div>
									</div>
									<div class="item">
										<div><text>3.</text></div>
										<div><span>PARTICIPE DOS SORTEIOS<br>para escolher seu prêmio</span></div>
									</div>
								</div>
							</div>
							<div class="cadastro">
							<form method="post" action="enviamail.php" enctype="multipart/form-data">
								<div class="titulo t-cadastro" id="cadastro">
									<h2>cadastro</h2>
								</div>
								<div class="cadastro-content">
									<text>* Campos de preenchimento obrigatório</text>
									<div class="form">
										<li class="left">
											<p>* Nome</p>
											<input type="text" name="nome"/>
										</li>
										<li class="right">
											<p>* Cidade</p>
											<input type="text" name="cidade"/>
										</li>
										<li class="left">
											<p>* E-mail</p>
											<input type="text" name="email"/>
										</li>
										<li class="right">
											<p>* Telefone</p>
											<input type="text" name="telefone"/>
										</li>
										<li class="left">
											<p>* CPF</p>
											<input type="text" name="cpf"/>
										</li>
										<li class="right">
											<p>* Data de nascimento</p>
											<input type="text" name="datanascimento"/>
										</li>

									</div>
									<div class="form-arquivo">
										<li class="center">
											<p>Selecione e envie o seu cupom:</p>
											<input type="text"/>
											<input type="file" name="arquivo" id="arqivo" value="Escolher arquivo"/>
										</li>
										<div class="check">

											<input type="checkbox" name="politica[]" value="Aceito">*Sim, li e aceito a Política de Privacidade da Pepsi
										</div>
										<div class="enviar">
											<input type="submit" name="Submit" value="CADASTRAR" />
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="premios">
								<div class="titulo t-premios" id="premios">
									<h2>prêmios</h2>
									<div class="sub-titulo">
										<span>OS GANHADORES DOS SORTEIOS<br>
										PODERÃO ESCOLHER UM DOS <br>
										PRÊMIOS ABAIXO.*</span>
										<text>*Conforme ordem de sorteio e disponibilidade de cada prêmio.</text>
									</div>
								</div>
								<div class="content-participar">
									<span>NA ÁREA MAIS VIP DO FESTIVAL</span>
									<text style="width: 81%;">Você vai poder curtir um	 dos dias do Pepsi Twist Land na área 
									mais exclusiva do festival. Um espaço especialmente montado 
									para convidados, com Pepsi liberada.</text>
								</div>
								<div class="content-participar" >
									<span>EM VISITA GUIADA PELO BACKSAGE DOS ARTISTAS</span>
									<text style="width: 83%;">Já pensou que legal conhecer os bastidores do evento e acabar 
									encontrando o seu artista preferido passando por ali?</text>
								</div>
								<div class="content-participar">
									<span>NO MEET AND GREET COM OS YOUTUBERS</span>
									<text style="width: 95%;">Conhecer, tirar fotos e ainda trocar uma idéia com seu youtuber preferido?
									Você pode escolher entre o Gato Galáctico ou o Luccas Neto!</text>
								</div>
								<div class="content-participar" >
									<span>COM UM PASSAPORTE PEPSI TWIST LAND</span>
									<text style="width: 71%;">Você vai ganhar um passaporte especial para ir e voltar 
									ao evento no Bus Pepsi Twist Land, assistir aos shows 
									na ÁREA VIP, ganhar um KIT especial da Pepsi
									 e ainda levar um acompanhante!</text>
								</div>
								<div class="sub-titulo segundo">
									<text>*Ponto de partida do Bus Twist Land: Pepsi On Stage - Porto Alegre
									durante os dias do evento às 14h</text>
								</div>
								<div class="datas">
									<span>CONFIRA AS DATAS DOS SORTEIOS: </span>
									<span>06/01/2018 e 13/01/2018, </span>
									<span>OS GANHADORES SERÃO DIVULGADOS NO SITE</span>
									<span>E ENTRAREMOS EM CONTATO ATRAVÉS DOS DADOS</span>
									<span>ENVIADOS NO CADASTRO.</span>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="regulamento">
								<div class="titulo t-regulamento" id="regulamento">
									<h2>REGULAMENTO</h2>
									<div class="sub-titulo-regulamento">
										<a href="" ><span>Acesse aqui o regulamento</span></a>

									</div>
								</div>
							</div>
							<div class="contato">
								<div class="titulo t-contato" id="contato">
									<h2>contato</h2>
									
								</div>
								<div class="content-contato">
									<div class="campos">
										<div class="form">
											<li>
												<input type="text" placeholder="Nome" />
											</li>
											<li>
												<input type="text" placeholder="E-mail" />
											</li>
											<li>
												<input type="text" placeholder="Telefone" />
											</li>
										</div>
									</div>
									<div class="area">
										<li>
											
											<textarea placeholder="Mensagem"></textarea>
										</li>
									</div>
									<div class="enviar">
										<input type="submit" value="ENVIAR" />
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>		
		</main>
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="footer">
							<li><a href="#home">home</a></li>
							<li><a href="#participar">como participar</a></li>
							<li><a href="#cadastro">cadastro</a></li>
							<li><a href="#premios">prêmios</a></li>
							<li><a href="#regulamento">regulamento</a></li>
							<li><a href="#contato">contato</a></li>
							<li><a href="#vencedores">vencedores</a></li>
						</div>
						<div class="footer-bottom">
							<span>Promoção válida de 22.12.2017 a 12.01.2018. Consulte as condições de participação, <br>
							datas dos sorteios e regulamento completo em www.vocenopepsitwistland.com.br. Certificado de Autorização CAIXA 4-6404/2017.</span>
						</div>
					</div>
				</div>
			</div>
			
		</footer>
	</body>
</html>