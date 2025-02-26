<?php
$config = array(
        'error_prefix' => '<div><strong>',
        'error_suffix' => '</strong></div>',

        'configuraciones/guarda_pago_especial' => array(
            array(
                    'field' => 'pe_concepto',
                    'label' => 'Concepto a Pagar',
                    'rules' => 'trim|max_length[3]|integer|required'
            ),
            array(
                    'field' => 'pe_conceptorel',
                    'label' => 'Concepto Relacionado',
                    'rules' => 'trim|max_length[3]|integer|required'
            ),
            array(
                    'field' => 'pe_fechaini',
                    'label' => 'Fecha Inicio',
                    'rules' => 'trim|exact_length[10]|required'
            ),
            array(
                    'field' => 'pe_fechafin',
                    'label' => 'Fecha Final',
                    'rules' => 'trim|exact_length[10]|required'
            ),
            array(
                    'field' => 'pe_fechapago',
                    'label' => 'Fecha del Pago',
                    'rules' => 'trim|exact_length[10]|required'
            ),
            array(
                    'field' => 'pe_fecharef',
                    'label' => 'Fecha de Referencia',
                    'rules' => 'trim|exact_length[10]|required'
            ),
            array(
                    'field' => 'pe_dialab',
                    'label' => 'Días laborados',
                    'rules' => 'trim|max_length[3]|integer|required'
            ),
            array(
                    'field' => 'pe_diaspag',
                    'label' => 'Días a Pagar',
                    'rules' => 'trim|max_length[3]|integer|required'
            ),
            array(
                    'field' => 'pe_mindias',
                    'label' => 'Mín. días para pagarlo',
                    'rules' => 'trim|max_length[3]|integer|required'
            ),
        ),

        'empleado/guarda_pago_electronico' => array(
          array(
                  'field' => 'pe_idEmpleado',
                  'label' => 'Empleado',
                  'rules' => 'max_length[5]|integer|required'
          ),
          array(
                  'field' => 'txtEmisor',
                  'label' => 'Emisor',
                  'rules' => 'max_length[3]|integer|required'
          ),
          array(
                  'field' => 'txtNumCuenta',
                  'label' => 'Emisor',
                  'rules' => 'max_length[20]'
          ),
          array(
                  'field' => 'txtTipoCuenta',
                  'label' => 'Tipo de Cuenta',
                  'rules' => 'max_length[3]|integer|required'
          ),
          array(
                  'field' => 'txtPorcentaje',
                  'label' => 'Porcentaje',
                  'rules' => 'required'
          ),
        ),

				'formacion_academica' => array(
					array(
                  'field' => 'fa_idEmpleado',
                  'label' => 'Empleado',
                  'rules' => 'trim|max_length[5]|integer|required'
          ),
					array(
									'field' => 'Instituto',
									'label' => 'Instituto',
									'rules' => 'trim|max_length[5]|integer|required',
									'errors' => array(
													'greater_than' => 'Debe seleccionar un Instituto.',
									),
					),
					array(
									'field' => 'fa_Nombre',
									'label' => 'Nombre',
									'rules' => 'trim|max_length[200]|required'
					),
					array(
									'field' => 'fInicio',
									'label' => 'Fecha inicial',
									'rules' => 'trim|exact_length[10]|required'
					),
					array(
									'field' => 'fFin',
									'label' => 'Fecha final',
									'rules' => 'trim|exact_length[10]|required'
					),
				),

				'experiencia_laboral' => array(
					array(
                  'field' => 'el_idEmpleado',
                  'label' => 'Empleado',
                  'rules' => 'trim|max_length[5]|integer|required'
          ),
					array(
									'field' => 'nombreEmpresa',
									'label' => 'Denominación de la Institución o Empresa',
									'rules' => 'trim|max_length[100]|required',
					),
					array(
									'field' => 'fIngreso',
									'label' => 'Fecha de Inicio',
									'rules' => 'trim|exact_length[10]|required'
					),
					array(
									'field' => 'fIngreso',
									'label' => 'Fecha de Conclusión',
									'rules' => 'trim|exact_length[10]|required'
					),
					array(
									'field' => 'Puesto',
									'label' => 'Cargo o puesto desempeñado',
									'rules' => 'trim|max_length[100]|required'
					),
					array(
									'field' => 'campoExperiencia',
									'label' => 'Campo de Experiencia',
									'rules' => 'trim|max_length[200]'
					),
				),

				'correo_electronico_masivo' => array(
					array(
                  'field' => 'quincena',
                  'label' => 'Quincena',
                  'rules' => 'trim|max_length[5]|integer|required'
          ),
					array(
                  'field' => 'asunto',
                  'label' => 'Asunto',
                  'rules' => 'trim|max_length[500]|required'
          ),
					array(
									'field' => 'mensaje',
									'label' => 'Mensaje',
									'rules' => 'trim|max_length[1000]|required'
					),
				),

				'correccion_detalle_nomina' => array(
					array('field' => 'Monto','label' => 'Monto','rules' => 'trim|numeric|required'),
					array('field' => 'Id_Concepto','label' => 'Concepto','rules' => 'trim|integer|required'),
					array('field' => 'TipoNominaId','label' => 'Tipo Nómina','rules' => 'trim|integer|required'),
					array('field' => 'Dias','label' => 'Días','rules' => 'trim|integer|required'),
					array('field' => 'NumeroCuenta','label' => 'Número de cuenta','rules' => 'trim|numeric|required'),
				)
);
