<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Soumission | CI Logos - Projet opensource</title>
		<meta name="description" content="CI Logos - Projet opensource">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- General CSS Settings -->
		<link rel="stylesheet" href="{{asset('')}}assets/css/general_style.css">
		<!-- Main Style of the template -->
		<link rel="stylesheet" href="{{asset('')}}assets/css/main_style.css">
		<!-- Theme Style of the template -->
		<link rel="stylesheet" href="{{asset('')}}assets/css/light_style.css" title="theme_style">
		<!-- Landing Page Style -->
		<link rel="stylesheet" href="{{asset('')}}assets/css/reset_style.css">
		<!-- Buttons Style -->
		<link rel="stylesheet" href="{{asset('')}}assets/css/buttons.css">
		<!-- Responsive Style -->
		<link rel="stylesheet" href="{{asset('')}}assets/css/responsive.css">
		<!-- Font awesome -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{asset('')}}assets/css/form-control.css">
		<!-- Fav Icon -->
		<link rel="icon" href="{{asset('')}}assets/images/logo.png">
	</head>
	<body>

		<!-- Loader -->
		<div class="crt-loader">
			<div>
				<h1>CI Logos</h1>
				<img src="{{asset('')}}assets/images/oval.svg" alt="Loading" />
				<p>Powered By CreativeTeam</p>
			</div>
		</div>
		<!-- Background -->
		<div class="crt-background">
			<div class="crt-background-item"></div>
			<div class="crt-background-item"></div>
			<div class="crt-background-item"></div>
			<div class="crt-background-item"></div>
			<div class="crt-background-item"></div>
			<div class="crt-background-item"></div>
			<div class="crt-background-item"></div>
			<div class="crt-background-item"></div>
		</div>
		<!-- Wrapper -->
		<div class="crt-wrapper">
			<!-- Theme Style -->
			<div class="crt-theme-style">
				<a href="javascript:;">Dark Mode</a>
			</div>
			<!-- Header -->
			<div class="crt-header sticky">
				<div class="crt-header-content">
					<div class="crt-header-logo">
						<a href="index.html">CI Logos</a>
					</div>
					<div class="crt-search-btn">
						<i class="material-icons">search</i>
					</div>
					<div class="crt-header-search">
						<form>
							<label>
								<input type="text" name="keyword" placeholder="Rechercher..." />
							</label>
							<input type="submit" name="submit" value="search" class="material-icons" />
							<input type="button" name="close" value="close" class="material-icons" />
						</form>
					</div>
					<div class="crt-clear-fix"></div>
				</div>
			</div>
			<!-- Main -->
			<div class="crt-main">
				<div class="crt-404">
					<h1>Soumissions de logos pour la Côte d'Ivoire</h1>
					<p>
						Utilisez le formulaire ci-dessous pour soumettre un ou plusieurs logos aux archives de Nigeria Logos.
						La révision et la fusion de votre logo peuvent prendre jusqu'à 48 heures.
						Si vous êtes un développeur ou si vous avez un développeur disponible pour vous aider, vous pouvez contribuer directement au repo sur Github ici :
					</p>
<<<<<<< HEAD
					<br>
					<div class="row">
						<div class="col-100">
							<label for="nom" class="float-left"><b>Votre nom </b><span class="text-danger">*</span></label>
							<input type="text" name="nom" placeholder="Votre nom..">
						</div>
					</div>
					<div class="row">
						<div class="col-100">
							<label for="email" class="float-left">
								<b>Votre email</b>
								<span class="text-danger">*</span>
							</label>
							<input type="text" name="email" placeholder="abc@email.com" id=email>
							<small class="float-left description_input">
								Nous en avons besoin pour pouvoir assurer un suivi avec vous au cas où des améliorations seraient recommandées
								et aussi pour que nous puissions vous faire savoir quand vos logos sont en ligne sur le site.
							</small>
						</div>
					</div>
					<div class="row">
						<div class="col-100">
							<label for="business_name" class="float-left">
								<b>Noms commerciaux et catégorie</b>
								<span class="text-danger">*</span>
							</label>
							<input type="text" name="business_name" id="business_name" placeholder="Ex: CreativeTeam (Communauté)">
						</div>
					</div>
					<div class="row">
						<div class="col-100">
							<label for="svg_logo" class="float-left">
								<b>SVG Logos</b>
							</label>
							<br><br>
							<label class="float-left description_input">
								1. Veuillez vous assurer que vos fichiers SVG sont propres et qu'ils n'ont pas de
								formats d'image (par exemple png, jpgs) intégrés
							</label>
							<input name="svg_logo" id="svg_logo" type="file">
						</div>
					</div>
					<div class="row">
						<div class="col-100">
							<label for="png_logo" class="float-left">
								<b>PNG Logos</b>
								<span class="text-danger">*</span>
							</label>
							<input name="png_logo" id="png_logo" type="file">
						</div>
					</div>
					<div class="row">
						<div class="col-100">
							<input type="submit" value="Soumettre">
						</div>
					</div>
				</div>
=======
                    <br>
                    <form action="{{route('submission.store')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-100">
                                <label for="nom" class="float-left"><b>Votre nom </b><span class="text-danger">*</span></label>
                                <input type="text" name="nom" placeholder="Votre nom..">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-100">
                                <label for="email" class="float-left">
                                    <b>Votre email</b>
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" name="email" placeholder="abc@email.com">
                                <small class="float-left description_input">
                                    Nous en avons besoin pour pouvoir assurer un suivi avec vous au cas où des améliorations seraient recommandées
                                    et aussi pour que nous puissions vous faire savoir quand vos logos sont en ligne sur le site.
                                </small>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-100">
                                <label for="email" class="float-left">
                                    <b>Noms commerciaux et catégorie</b>
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" name="business_name" placeholder="Ex: CreativeTeam (Communauté)">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-100">
                                <label for="email" class="float-left">
                                    <b>SVG Logos</b>
                                </label>
                                <br><br>
                                <label class="float-left description_input">
                                    1. Veuillez vous assurer que vos fichiers SVG sont propres et qu'ils n'ont pas de
                                    formats d'image (par exemple png, jpgs) intégrés
                                </label>
                                <input type="file_svg">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-100">
                                <label for="email" class="float-left">
                                    <b>PNG Logos</b>
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="file_png">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-100">
                                <input type="submit" value="Soumettre">
                            </div>
                        </div>
                    </form>
                </div>
>>>>>>> f5ea8876a55b12deba5e67ec1cd5de20d692b5b5
			</div>
			<!-- Footer -->
			<div class="crt-footer">
				<div class="crt-footer-content">
					<div class="crt-footer-sn">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube"></i></a></li>
						</ul>
					</div>
					<div class="crt-footer-links">
						<ul>
							<li><a href="#">© CreativeTeam 2020 </a></li>
						</ul>
					</div>
					<div class="crt-clear-fix"></div>
				</div>
			</div>
		</div>

		<!-- JQuery -->
		<script src="{{asset('')}}assets/js/jquery-3.5.0.min.js"></script>
		<!-- Main Script -->
		<script src="{{asset('')}}assets/js/script.js"></script>
	</body>
</html>