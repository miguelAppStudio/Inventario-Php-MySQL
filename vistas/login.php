<!--Coded with love by Mutiullah Samim-->

<body class="pagelogin">
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="./assets/img/logo18.png" class="brand_logo" alt="Logo">
					</div>
				</div>
		
				<div class="d-flex justify-content-center form_container">
			
					<form action="" method="POST" autocomplete="off">
					<div class="panelogin d-flex justify-content-center">
						ADMINISTRACION DE INVENTARIO
					</div>
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text">
									<i class="fas fa-user fa-2x"></i>
								</span>
							</div>
							<input type="text" name="login_usuario" class="form-control input_user" 
							       pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ]{4,30}" maxlength="30" required 
										 placeholder="usuario">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text">
									<i class="fas fa-key fa-2x"></i>
								</span>
							</div>
							<input type="password" name="login_clave" class="form-control input_pass"
							       pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" required  
										 placeholder="contraseña">
						</div>
						<!-- <div class="form-group">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="customControlInline">
								<label class="custom-control-label" for="customControlInline">Recuerdame</label>
							</div>
						</div> -->
						<div class="d-flex justify-content-center mt-3 login_container">
							<button type="submit" name="button" class="btn login_btn">Inicia Sesion</button>
						</div>

						<?php
						if (isset($_POST['login_usuario']) && isset($_POST['login_clave'])) {
							require_once "./php/main.php";
							require_once "./php/iniciar_sesion.php";
						}
						?>
					</form>
				</div>


				<!-- <div class="mt-4">
					<div class="d-flex justify-content-center links">
						¿No tienes una cuenta? <a href="#" class="ml-2">Registrate</a>
					</div>
					<div class="d-flex justify-content-center links">
						<a href="#">¿Olvidaste tu contraseña?</a>
					</div>
				</div> -->
			</div>
		</div>
	</div>
</body>