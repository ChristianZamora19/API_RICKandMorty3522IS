<!DOCTYPE HTML>
<!--
	Helios by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Personaje {{$personaje['name']}}</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="/css/main.css" />
		<noscript><link rel="stylesheet" href="/css/noscript.css" /></noscript>
	</head>
	<body class="right-sidebar is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Inner -->
						<div class="inner">
							<header>
								<h1><a href="index.html" id="logo">ZAMORA ARREOLA CHRISTIAN ARMANDO <br>Personajes The Rick and Morty</a></h1>
							</header>
						</div>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="index.html">Home</a></li>
								<li>
									<a href="#">Dropdown</a>
									<ul>
										<li><a href="#">Lorem ipsum dolor</a></li>
										<li><a href="#">Magna phasellus</a></li>
										<li><a href="#">Etiam dolore nisl</a></li>
										<li>
											<a href="#">And a submenu &hellip;</a>
											<ul>
												<li><a href="#">Lorem ipsum dolor</a></li>
												<li><a href="#">Phasellus consequat</a></li>
												<li><a href="#">Magna phasellus</a></li>
												<li><a href="#">Etiam dolore nisl</a></li>
											</ul>
										</li>
										<li><a href="#">Veroeros feugiat</a></li>
									</ul>
								</li>
								<li><a href="left-sidebar.html">Left Sidebar</a></li>
								<li><a href="right-sidebar.html">Right Sidebar</a></li>
								<li><a href="no-sidebar.html">No Sidebar</a></li>
							</ul>
						</nav>
				</div>
			<!-- Main -->
				<div class="wrapper style1">
					<div class="container">
						<div class="row gtr-200">
							<div class="col-8 col-12-mobile" id="content">
								<article id="main">
									<header>
										<h2><a href="#">{{$personaje['name']}}</a></h2>
										<p>
											{{$personaje['species']}}
										</p>
									</header>
									<a href="#" class="image featured"><img src="{{$personaje['image']}}" alt="" /></a>
									<p>
										Commodo id natoque malesuada sollicitudin elit suscipit. Curae suspendisse mauris posuere accumsan massa
										posuere lacus convallis tellus interdum. Amet nullam fringilla nibh nulla convallis ut venenatis purus
										lobortis. Auctor etiam porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum
										consequat integer interdum integer purus sapien. Nibh eleifend nulla nascetur pharetra commodo mi augue
										interdum tellus. Ornare cursus augue feugiat sodales velit lorem. Semper elementum ullamcorper lacinia
										natoque aenean scelerisque vel lacinia mollis quam sodales congue.
									</p>
									<section>
										<header>
											<h3>Ultrices tempor sagittis nisl</h3>
										</header>
										<p>
											Nascetur volutpat nibh ullamcorper vivamus at purus. Cursus ultrices porttitor sollicitudin imperdiet
											at pretium tellus in euismod a integer sodales neque. Nibh quis dui quis mattis eget imperdiet venenatis
											feugiat. Neque primis ligula cum erat aenean tristique luctus risus ipsum praesent iaculis. Fermentum elit
											fringilla consequat dis arcu. Pellentesque mus tempor vitae pretium sodales porttitor lacus. Phasellus
											egestas odio nisl duis sociis purus faucibus morbi. Eget massa mus etiam sociis pharetra magna.
										</p>
										<p>
											Eleifend auctor turpis magnis sed porta nisl pretium. Aenean suspendisse nulla eget sed etiam parturient
											orci cursus nibh. Quisque eu nec neque felis laoreet diam morbi egestas. Dignissim cras rutrum consectetur
											ut penatibus fermentum nibh erat malesuada varius.
										</p>
									</section>
									<section>
										<header>
											<h3>Augue euismod feugiat tempus</h3>
										</header>
										<p>
											Pretium tellus in euismod a integer sodales neque. Nibh quis dui quis mattis eget imperdiet venenatis
											feugiat. Neque primis ligula cum erat aenean tristique luctus risus ipsum praesent iaculis. Fermentum elit
											ut nunc urna volutpat donec cubilia commodo risus morbi. Lobortis vestibulum velit malesuada ante
											egestas odio nisl duis sociis purus faucibus morbi. Eget massa mus etiam sociis pharetra magna.
										</p>
									</section>
								</article>
							</div>
							<div class="col-4 col-12-mobile" id="sidebar">
								<hr class="first" />
								<hr />
								<section>
									<header>
										<h3><a href="#">Otros Personajes</a></h3>
									</header>
									<div class="row gtr-50">
                                        @foreach ($personajes as $personajeAlternativo)
                                            @if($loop->index < 15)
                                                <div class="col-4">
                                                    <a href="{{route('detalle.personaje',$personajeAlternativo['id'])}}" class="image fit"><img src="{{$personajeAlternativo['imagen']}}" alt="" /></a>
                                                </div>
                                                <div class="col-8">
                                                    <h4>{{$personajeAlternativo['nombre']}}</h4>
                                                    <p>
                                                        {{$personajeAlternativo['especie']}}
                                                    </p>
                                                </div>
                                            @endif
                                        @endforeach

									</div>
								</section>
							</div>
						</div>
						<hr />
						<div class="row">
                            @foreach ($personajes as $personajeAlterna)
                                @if($loop->index >= 17)
                                    <article class="col-4 col-12-mobile special">
                                        <a href="{{route('detalle.personaje',$personajeAlterna['id'])}}" class="image featured"><img src="{{$personajeAlterna['imagen']}}" alt="" /></a>
                                        <header>
                                            <h3><a href="#">{{$personajeAlterna['nombre']}}</a></h3>
                                        </header>
                                        <p>
                                            {{$personajeAlterna['especie']}}
                                        </p>
                                    </article>
                                @endif
                            @endforeach

						</div>
					</div>

				</div>

			<!-- Footer -->
				<div id="footer">
					<div class="container">
						<div class="row">

							<!-- Tweets -->
								<section class="col-4 col-12-mobile">
									<header>
										<h2 class="icon brands fa-twitter circled"><span class="label">Tweets</span></h2>
									</header>
									<ul class="divided">
										<li>
											<article class="tweet">
												Amet nullam fringilla nibh nulla convallis tique ante sociis accumsan.
												<span class="timestamp">5 minutes ago</span>
											</article>
										</li>
										<li>
											<article class="tweet">
												Hendrerit rutrum quisque.
												<span class="timestamp">30 minutes ago</span>
											</article>
										</li>
										<li>
											<article class="tweet">
												Curabitur donec nulla massa laoreet nibh. Lorem praesent montes.
												<span class="timestamp">3 hours ago</span>
											</article>
										</li>
										<li>
											<article class="tweet">
												Lacus natoque cras rhoncus curae dignissim ultricies. Convallis orci aliquet.
												<span class="timestamp">5 hours ago</span>
											</article>
										</li>
									</ul>
								</section>

							<!-- Posts -->
								<section class="col-4 col-12-mobile">
									<header>
										<h2 class="icon solid fa-file circled"><span class="label">Posts</span></h2>
									</header>
									<ul class="divided">
										<li>
											<article class="post stub">
												<header>
													<h3><a href="#">Nisl fermentum integer</a></h3>
												</header>
												<span class="timestamp">3 hours ago</span>
											</article>
										</li>
										<li>
											<article class="post stub">
												<header>
													<h3><a href="#">Phasellus portitor lorem</a></h3>
												</header>
												<span class="timestamp">6 hours ago</span>
											</article>
										</li>
										<li>
											<article class="post stub">
												<header>
													<h3><a href="#">Magna tempus consequat</a></h3>
												</header>
												<span class="timestamp">Yesterday</span>
											</article>
										</li>
										<li>
											<article class="post stub">
												<header>
													<h3><a href="#">Feugiat lorem ipsum</a></h3>
												</header>
												<span class="timestamp">2 days ago</span>
											</article>
										</li>
									</ul>
								</section>

							<!-- Photos -->
								<section class="col-4 col-12-mobile">
									<header>
										<h2 class="icon solid fa-camera circled"><span class="label">Photos</span></h2>
									</header>
									<div class="row gtr-25">
										<div class="col-6">
											<a href="#" class="image fit"><img src="/images/pic10.jpg" alt="" /></a>
										</div>
										<div class="col-6">
											<a href="#" class="image fit"><img src="/images/pic11.jpg" alt="" /></a>
										</div>
										<div class="col-6">
											<a href="#" class="image fit"><img src="/images/pic12.jpg" alt="" /></a>
										</div>
										<div class="col-6">
											<a href="#" class="image fit"><img src="/images/pic13.jpg" alt="" /></a>
										</div>
										<div class="col-6">
											<a href="#" class="image fit"><img src="/images/pic14.jpg" alt="" /></a>
										</div>
										<div class="col-6">
											<a href="#" class="image fit"><img src="/images/pic15.jpg" alt="" /></a>
										</div>
									</div>
								</section>

						</div>
						<hr />
						<div class="row">
							<div class="col-12">

								<!-- Contact -->
									<section class="contact">
										<header>
											<h3>Nisl turpis nascetur interdum?</h3>
										</header>
										<p>Urna nisl non quis interdum mus ornare ridiculus egestas ridiculus lobortis vivamus tempor aliquet.</p>
										<ul class="icons">
											<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
											<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
											<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
											<li><a href="#" class="icon brands fa-pinterest"><span class="label">Pinterest</span></a></li>
											<li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
											<li><a href="#" class="icon brands fa-linkedin-in"><span class="label">Linkedin</span></a></li>
										</ul>
									</section>

								<!-- Copyright -->
									<div class="copyright">
										<ul class="menu">
											<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
										</ul>
									</div>
							</div>
						</div>
					</div>
				</div>
		</div>

		<!-- Scripts -->
			<script src="/js/jquery.min.js"></script>
			<script src="/js/jquery.dropotron.min.js"></script>
			<script src="/js/jquery.scrolly.min.js"></script>
			<script src="/js/jquery.scrollex.min.js"></script>
			<script src="/js/browser.min.js"></script>
			<script src="/js/breakpoints.min.js"></script>
			<script src="/js/util.js"></script>
			<script src="/js/main.js"></script>

	</body>
</html>
