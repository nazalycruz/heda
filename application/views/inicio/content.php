	<!-- BEGIN #loader -->
	<div id="loader" class="app-loader">
	  <div class="material-loader">
	    <svg class="circular" viewBox="25 25 50 50">
	      <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10">
	      </circle>
	    </svg>
	    <div class="message">Cargando...</div>
	  </div>
	</div>
	<!-- END #loader -->

	<!-- BEGIN #app -->
	<div id="app" class="app app-header-fixed app-sidebar-fixed app-with-wide-sidebar">
		<!-- BEGIN #header -->
	  <div id="header" class="app-header app-header-inverse">
			<!-- BEGIN navbar-header -->
			<div class="navbar-header">
				<button type="button" class="navbar-desktop-toggler" data-toggle="app-sidebar-minify">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<button type="button" class="navbar-mobile-toggler" data-toggle="app-sidebar-mobile">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="javascript:void(0);" onclick="location.reload();" class="navbar-brand">
					<strong>HEDA</strong>
				</a>
			</div>
			<!-- END navbar-header -->

			<!-- BEGIN header-nav-->
		  <div class="navbar-nav">
				<?php
				if (verificar_permiso('WFBEM') == 3) {
				 ?>
				 <div class="navbar-item">
 		      <a href="#" data-toggle="app-header-floating-form" class="navbar-link icon">
 		        <i class="material-icons">search</i>
 		      </a>
 		    </div>
				<?php
				}
				?>

				<div class="navbar-item navbar-user dropdown">
		      <a href="javascript:;" class="navbar-link dropdown-toggle d-flex" data-bs-toggle="dropdown">
		        <span class="d-none d-md-inline"><?= LimpiaCadena($this->session->Nombre); ?></span>
		        <img src="<?=base_url();?>assets/img/user_white.png" alt="" />
		      </a>
		      <div class="dropdown-menu dropdown-menu-end me-1">
		        <a href="javascript:;" onclick="salir();" class="dropdown-item">Salir</a>
		      </div>
		    </div>
		  </div>
			<!-- END header-nav-->

				<?php
				if (verificar_permiso('WFBEM') == 3) {
				 ?>
					<!-- barra de búsqueda -->
					<div class="navbar-floating-form">
						<button class="search-btn" type="submit" id="btnSearchCredencial"><i class="material-icons">search</i></button>
						<input type="text" class="form-control searchselect" id="credencialHead" name="credencialHead" placeholder="Credencial del Empleado" maxlength="5" autocomplete="off" OnKeyPress="return valida_credencial(event, this);"/>
						<a href="javascript:;" class="close" data-dismiss="app-header-floating-form"><i class="material-icons">close</i></a>
					</div>
					<!-- barra de búsqueda -->
				<?php
				}
				?>
			</div>
			<!-- end #header -->
		<!-- BEGIN #sidebar -->
		<div id="sidebar" class="app-sidebar" data-disable-slide-animation="true">
			<!-- BEGIN scrollbar -->
		  <div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
		    <!-- BEGIN menu -->
		    <div class="menu">
					<div class="menu-profile">
						<a href="javascript:;" class="menu-profile-link" data-toggle="app-sidebar-profile" data-target="#appSidebarProfileMenu">
							<div class="menu-profile-cover with-shadow"></div>
							<div class="menu-profile-info">
								<div class="d-flex align-items-center">
									<div class="flex-grow-1">
										<?= LimpiaCadena($this->session->UsuarioNT); ?>
									</div>
									<div class="menu-caret ms-auto"></div>
								</div>
								<small><?= LimpiaCadena($this->session->Rol); ?></small>
							</div>
						</a>
					</div>

					<div id="appSidebarProfileMenu" class="collapse">
						<div class="menu-item pt-5px">
							<a href="javascript:;" onclick="muestra_acerca();" class="menu-link">
								<div class="menu-icon"><i class="material-icons">&#xE001;</i></div>
								<div class="menu-text"> Acerca de...</div>
							</a>
						</div>
						<div class="menu-divider m-0"></div>
					</div>

		      <div class="menu-header"></div>
					<?= $menu; ?>

		      <!-- BEGIN minify-button -->
		      <div class="menu-item d-flex">
		        <a href="javascript:;" class="app-sidebar-minify-btn ms-auto" data-toggle="app-sidebar-minify">
		          <i class="fa fa-angle-double-left"></i>
		        </a>
		      </div>
		      <!-- END minify-button -->
		    </div>
		    <!-- END menu -->
		  </div>
		  <!-- END scrollbar -->
		</div>

		<div class="app-sidebar-bg"></div>
		<div class="app-sidebar-mobile-backdrop">
		  <a href="javascript:;" data-dismiss="app-sidebar-mobile" class="stretched-link"></a>
		</div>
		<!-- END #sidebar -->

		<!-- BEGIN #content -->
		<div id="appcontent" class="app-content">
			<div id="content">
			<!-- TODO EL CONTENIDO DEL SITIO SE COLOCARÁ ACÁ -->
			</div>
			<!-- begin #footer el footer debe ir dentro de la clase app-content-->
			<?php
			if (!$this->agent->is_mobile()):
			?>
			<div id="footer" class="app-footer mx-0 px-0">
				<div class="d-flex bd-highlight mb-0">
					<div class="me-auto p-2 bd-highlight"><span class="fw-bolder">HEDA</span> versión <?= get_versiones(); ?> &copy; <?= auto_copyright('2018');?> Departamento de Innovación e Implementación de Sistemas</div>
					<div class="p-2 bd-highlight"><i class="fas fa-database"></i> <?= (empty($this->db->servidor) ? $this->db->dsn : $this->db->servidor); ?></div>
				</div>
				<!-- <p>
					<a href="http://www.cjyuc.gob.mx/" target="_blank" class="a-estilo">Consejo de la Judicatura del Poder Judicial del Estado de Yucatán</a>
				</p> -->
			</div>
			<?php
			endif;
			?>
			<!-- end #footer -->
		</div>
		<!-- end #content -->

		<?php if (!empty($menuAyuda)) echo $menuAyuda; ?>

		<!-- BEGIN scroll-top-btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top" data-toggle="scroll-to-top"><i class="fa fa-angle-up"></i></a>
		<!-- END scroll-top-btn -->
	</div>
	<!-- end page container -->
