

<?php
foreach($menu as $opcion_menu)
{
	if( $opcion_menu['tiene_opciones'] == TRUE ){?>
		<li class="has-sub">
		    <a href="javascript:;" data-toggle="item-menu">
			    <b class="caret"></b>
		        <i class="<?php echo $opcion_menu['clase_icono'];?>"></i>
		        <span><?php echo $opcion_menu['titulo_menu'];?></span>
		    </a>
			<ul class="sub-menu"><?php
				$submenus = $opcion_menu['submenus'];
				foreach($submenus as $submenu){?>
					<li><a href="javascript:;" data-toggle="item-menu" onclick="CargarModulo('<?php echo base_url();?>','<?php echo $submenu['url_menu'];?>');"><?php echo $submenu['titulo_menu'] ?></a></li><?php
				}?>
			</ul>
		</li><?php
	}
	else{?>
		<li><a href="javascript:;" data-toggle="item-menu" onclick="CargarModulo('<?php echo base_url();?>','<?php echo $opcion_menu['url_menu'];?>');">
				<i class="<?php echo $opcion_menu['clase_icono'];?>"></i> <span><?php echo $opcion_menu['titulo_menu'];?></span></a></li><?php
	}
}?>
