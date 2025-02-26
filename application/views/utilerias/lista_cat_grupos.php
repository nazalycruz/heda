<table id="tblUtilListaCategorias" class="table table-bordered table-sm table-striped" width="100%" cellspacing="0">
    <thead>
        <tr class="bg-light">
            <th></th><?php ; //CategoriaId?>
            <th></th><?php ; //Categoria?>
            <th></th><?php ; //GrupoImpresion (id)?>
            <th></th><?php ; //Desc Grupo?>
            <th></th><?php ; //Configurado?>
            <th></th>
        </tr>
    </thead>
    <tbody><?php
        if($reg_categorias):;
            foreach( $reg_categorias as $item ):;
                $icon = $item->grupoImpresion > 0 ? 'fa fa-check text-success' : "fa fa-times text-danger"; ?>
                <tr>
                    <td><?= $item->CategoriaId; ?></td>
                    <td><?= $item->Categoria; ?></td>
                    <td><?= $item->grupoImpresion; ?></td>
                    <td><i class="<?=$icon?>"></i> &nbsp;<?= $item->GrupoImpDesc; ?></td>
                    <td><?= $item->Configurado; ?></td>
                    <td>
                        <button type="button" class="btn btn-xs btn-secondary util_grp_btn" onclick="ModificarGrupoImp(this);" title="Modificar el Grupo de impresión"><i class="fa fa-pencil-alt"></i></button><?php
                        if($item->grupoImpresion > 0){?>
                            <button type="button" class="btn btn-xs btn-danger util_grp_btn" onclick="VerificaExistenEmpGrupoImp(this);" title="Eliminar el Grupo de impresión"><i class="fa fa-trash"></i></button><?php
                        }?>
                    </td>
                </tr><?php
            endforeach;
        endif;?>
    </tbody>
</table>

<select class="form-control" id="cboxGrupoImpresion" style="display: none;">
    <?=$cat_grupos_imp?>
</select>

<script>
    jQuery('#tblUtilListaCategorias').DataTable({
        "columnDefs": [
            { "targets":[0], "visible":false, "searchable": false},
            { "targets":[1], "visible":true, "searchable": true, "title": "Categoría"},
            { "targets":[2], "visible":false, "searchable": false, },
            { "targets":[3], "visible":true, "searchable": true, "title": "Grupo"},
            { "targets":[4], "visible":false, "searchable": false},
            { "targets":[5], "visible":true, "searchable": false, "orderable": false},
        ],
        "paging":   true,
        "bLengthChange": false,
        "bFilter": true,
        "info" : false,
				language: { "url": "<?=base_url();?>assets/plugins/DataTables/Spanish.json",
										"oPaginate": {
												"sNext":     "",
												"sPrevious": ""
										}
									},
    });
</script>
