<?php

//PENDIENTE: Crear una función para poder modificar la base de datos en el modelo ($this->crudDB)

class pjey_ABC_Model_Driver  {
	protected $basic_db_table = null;
	protected $basic_db_name = 'db';
  public $basic_model = null;

  protected function set_default_Model(){
    $ci = &get_instance();
    $ci->load->model('pjeyABC_model');

    $this->basic_model = new pjeyABC_model();
  }

	public function set_database($database)
	{
		if (!empty($database) && $this->basic_db_name === null) {
			$this->basic_db_name = $database;
		}
		if ($this->basic_model === null) $this->set_default_Model();
		$this->basic_model->set_crud_database($database);
		return $this;
	}

	public function set_model($model_name)
	{
		$ci = &get_instance();
		$ci->load->model('pjeyABC_model');

		$ci->load->model($model_name);

		$temp = explode('/',$model_name);
		krsort($temp);
		foreach($temp as $t)
		{
			$real_model_name = $t;
			break;
		}

		$this->basic_model = $ci->$real_model_name;
	}

  public function set_table($table_name){
		if (!empty($table_name) && $this->basic_db_table === null) {
			$this->basic_db_table = $table_name;
		}
		elseif (!empty($table_name)) {
			throw new Exception('Ya existe un nombre de tabla...', 1);
		}
		else {
			throw new Exception('El nombre de la tabla no puede ser vacío.', 2);
			die();
		}

		return $this;
	}

	public function set_tipo_result($row = false){
		if ($this->basic_model === null) $this->set_default_Model();
		$this->basic_model->set_tipo_result($row);
		return $this;
	}

	/**
	 *
	 * Set a simple 1-n foreign key relation
	 * @param string $field_name
	 * @param string $related_table
	 * @param string $related_title_field
	 * @param mixed $where_clause
	 * @param string $order_by
		 * @return Grocery_CRUD
	 */
	public function set_relation($field_name, $related_table, $related_title_field, $where_clause = null, $order_by = null)
	{
		$this->relation[$field_name] = array($field_name, $related_table,$related_title_field, $where_clause, $order_by);
		return $this;
	}

	public function set_relacion($field_name, $related_table, $related_title_field, $select_clause)
	{
		$this->relacion[$field_name] = array($field_name, $related_table,$related_title_field, $select_clause);
		return $this;
	}

	public function set_relacion_n_n($join)
	{
		$this->relation_n_n = $join;
		return $this;
	}

	/**
	 *
	 * Sets a relation with n-n relationship.
	 * @param string $field_name
	 * @param string $relation_table
	 * @param string $selection_table
	 * @param string $primary_key_alias_to_this_table
	 * @param string $primary_key_alias_to_selection_table
	 * @param string $title_field_selection_table
	 * @param string $priority_field_relation_table
	 * @param mixed $where_clause
		 * @return Grocery_CRUD
	 */
	public function set_relation_n_n_n($field_name, $relation_table, $selection_table, $primary_key_alias_to_this_table, $primary_key_alias_to_selection_table , $title_field_selection_table , $priority_field_relation_table = null, $where_clause = null)
	{
		$this->relation_n_n[$field_name] =
			(object)array(
				'field_name' => $field_name,
				'relation_table' => $relation_table,
				'selection_table' => $selection_table,
				'primary_key_alias_to_this_table' => $primary_key_alias_to_this_table,
				'primary_key_alias_to_selection_table' => $primary_key_alias_to_selection_table ,
				'title_field_selection_table' => $title_field_selection_table ,
				'priority_field_relation_table' => $priority_field_relation_table,
				'where_clause' => $where_clause
			);

		return $this;
	}

	protected function table_exists($table_name = null)
	{
		if ($this->basic_model->db_table_exists($table_name)) return true;
		return false;
	}

	protected function sp_exists($sp = null)
	{
		if ($this->basic_model === null) $this->set_default_Model();
		if ($this->basic_model->db_sp_exists($sp)) return true;
		return false;
	}

  protected function set_basic_db_table($table_name = null)
	{
    $this->basic_model->set_basic_table($table_name);
  }

	// protected function set_select_alt($select = null){
	// 	$this->basic_model->set_select_alt($select);
	// }

	protected function get_primary_key()
	{
		return $this->basic_model->get_primary_key();
	}

	protected function get_list()
	{
		if (!empty($this->select_alt))
			foreach($this->select_alt as $select)
				$this->basic_model->set_select_alt($select);

		if (!empty($this->order_by))
			$this->basic_model->order_by($this->order_by[0],$this->order_by[1]);

		if (!empty($this->group_by))
			$this->basic_model->group_by($this->group_by);

		if (!empty($this->where))
			foreach($this->where as $where)
				$this->basic_model->where($where[0],$where[1],$where[2]);

		if (!empty($this->or_where))
			foreach($this->or_where as $or_where)
				$this->basic_model->or_where($or_where[0],$or_where[1],$or_where[2]);

		if (!empty($this->like))
			foreach($this->like as $like)
				$this->basic_model->like($like[0],$like[1],$like[2]);

		if (!empty($this->or_like))
			foreach($this->or_like as $or_like)
				$this->basic_model->or_like($or_like[0],$or_like[1],$or_like[2]);

		if (!empty($this->having))
			foreach($this->having as $having)
				$this->basic_model->having($having[0],$having[1],$having[2]);

		if (!empty($this->or_having))
			foreach($this->or_having as $or_having)
				$this->basic_model->or_having($or_having[0],$or_having[1],$or_having[2]);

	 if (!empty($this->relacion))
			foreach($this->relacion as $relation)
				$this->basic_model->joinned($relation[0],$relation[1],$relation[2],$relation[3]);

		if (!empty($this->relation))
			foreach($this->relation as $relation)
				$this->basic_model->join_relation($relation[0],$relation[1],$relation[2]);

		// if (!empty($this->relation_n_n))
		// {
		// 	$columns = $this->get_columns();
		// 	foreach($columns as $column)
		// 	{
		// 		//Use the relation_n_n ONLY if the column is called . The set_relation_n_n are slow and it will make the table slower without any reason as we don't need those queries.
		// 		if(isset($this->relation_n_n[$column->field_name]))
		// 		{
		// 			$this->basic_model->set_relation_n_n_field($this->relation_n_n[$column->field_name]);
		// 		}
		// 	}
		// }

		if (!empty($this->relation_n_n))
 			foreach($this->relation_n_n as $relation)
 				$this->basic_model->multi_join($relation);

		$results = $this->basic_model->get_list();
		return $results;
	}

  protected function get_row($id){
    $this->basic_model->where($this->key[1],$id);
    $result = $this->basic_model->get_row();
    return $result;
  }

  public function get_field_types(){
		if( $this->basic_model === null ) $this->set_default_Model();
		$this->set_basic_db_table($this->basic_db_table);
    if ( $this->field_types !== null ) {
			return $this->field_types;
		}

    // $types	= array();
    $types = $this->basic_model->get_field_types_basic_table();
    $this->field_types = $types;
		return $this->field_types;
  }

	public function get_field_types_sp($sp){
		if ($this->basic_model === null) $this->set_default_Model();
		$types = $this->basic_model->get_field_types_sp($sp);
		return $types;
	}

	/**
	 * Change the default primary key for a specific table.
	 * If the $table_name is NULL then the primary key is for the default table name that we added at the set_table method
	 *
	 * @param string $primary_key_field
	 * @param string $table_name
	 */
	public function set_primary_key($primary_key_field, $table_name = null)
	{
		$this->primary_keys[] = array('field_name' => $primary_key_field, 'table_name' => $table_name);
		return $this;
	}

	protected function db_run_validation()
	{
		$validation_result = (object)array('success'=>false);

		if (!empty($this->validation_conf))
		{
			$form_validation = $this->form_validation();

			if ($form_validation->run($this->validation_conf))
			{
				$validation_result->success = true;
			}
			else
			{
				// $validation_result->error_message = $form_validation->error_string();
				// $validation_result->error_fields = $form_validation->_error_array;
				$validation_result->validation_errors = validation_errors();
			}
		}
		else
		{
			$validation_result->success = true;
		}
		$this->validation_result = $validation_result;
		return $this->validation_result;
	}

	protected function form_validation()
	{
		$ci = &get_instance();
		$ci->load->library('form_validation');
		return $ci->form_validation;
	}

	protected function db_guarda($state_info)
	{
		$validation_result = $this->db_run_validation();
		if ($validation_result->success)
		{
			$post_data = $state_info->data;
			$campos = (empty($this->camposGuardar) ? $post_data : $this->camposGuardar);
			$data = array();

			foreach($campos as $field_key => $field) {
				if ($field_key != $state_info->primary_key && $field_key != 'accion') $data[$field_key] = $post_data[$field];
			}

			$newid = 0;
			$idkey = $state_info->primary_key;
			// $idValue = $post_data[$state_info->primary_key];
			$arrwhere = (empty($this->where) ? array('listar') : $this->where[0][3]);

			if (in_array('guardar', $arrwhere)) {
				$this->basic_model->set_where_alt();
				$where = $this->where;
			}
			else $where = array(array($idkey,$post_data[$state_info->primary_key],TRUE));

			foreach($where as $w)
				$this->basic_model->where($w[0],$w[1],$w[2]);

			$row = $this->basic_model->get_row();
			if (empty($row)) { //insertar
				if (!empty($this->usuario)) { $data['UC'] = $this->usuario; }
				$insert_result = $this->basic_model->db_insert($data);
				if ($insert_result !== false) {
					$newid = $insert_result;
				}
			}
			else { //actualizar
				if (!empty($this->usuario)) {
					$data['FUM'] = date("d/m/Y H:i:s");
					$data['UUM'] = $this->usuario;
				}
				$idValue = $row->$idkey;
				foreach($where as $w)
					$this->basic_model->where($w[0],$w[1],$w[2]);
				if ($this->basic_model->db_update($data,$idValue) !== false) {
					$newid = $idValue;
				}
			}
			return $newid;
		}
		return false;
	}

	protected function db_exec($state_info)
	{
		$validation_result = $this->db_run_validation();
		if ($validation_result->success)
		{
			$post_data = $state_info->data;
			$campos = (empty($this->camposGuardar) ? $post_data : $this->camposGuardar);
			$data = array();
			$sp = '';

			foreach ($campos as $field_key => $field) {
				if ($field_key != 'accion') $data[$field_key] = $post_data[$field_key];
			}

			$result = $this->basic_model->db_exec($this->sp,$data);
			if ($result === false) return false;
			else {
				if ($result->num_rows() == 0) return true;
				// else if ($result->num_rows() == 1) return $result->row();
				else return $result->result();
			}
		}
		return false;
	}

	protected function db_insert(){
		if ($this->basic_model === null) $this->set_default_Model();
		$this->set_basic_db_table($this->basic_db_table);
		$id_key = $this->key[1];

		$campos = (empty($this->camposGuardar) ? $_POST : $this->camposGuardar);
		foreach($campos as $key => $value) {
			if ($key != $id_key && $key != 'accion') $data[$key] = $_POST[$key];
		}

		$result = $this->basic_model->db_insert($data);
		if ($result === false) return false;
		else {
			if ($result > 0) return true;
			else return false;
		}
	}

	public function db_update($state_info) {
		if ($this->basic_model === null) $this->set_default_Model();
		$this->set_basic_db_table($this->basic_db_table);
		$idkey = $state_info->primary_key;
		$post_data = $state_info->data;
		$campos = (empty($this->camposGuardar) ? $_POST : $this->camposGuardar);

		foreach($campos as $field_key => $field) {
			if ($field_key != $state_info->primary_key && $field_key != 'accion') $data[$field_key] = $post_data[$field];
		}

		$id_value = $_POST[$idkey];

		$result = $this->basic_model->db_update($data,$id_value,$idkey);
		if ($result === false) return false;
		else return true;
	}

	public function db_delete() {
		if ($this->basic_model === null) $this->set_default_Model();
		$this->set_basic_db_table($this->basic_db_table);

		$where = (empty($this->where) ? array('listar') : $this->where[0][3]);

		if (in_array('borrar', $where)) {
			$this->basic_model->set_where_alt();
			foreach($this->where as $where)
				$this->basic_model->where($where[0],$where[1],$where[2]);
			$delete_result = $this->basic_model->db_delete(0,'');
		}
		else {
			$id_key = $this->key[1];
			if (empty($id_key)) return false;
			$id_value = $_POST[$id_key];
			if (empty($id_value)) return false;

			if ($this->eliminacion[0]) $delete_result = $this->basic_model->db_delete($id_value,$id_key);
			else {
				$data = array($this->eliminacion[1] => (empty($this->eliminacion[2]) ? 0 : $this->eliminacion[2]));
				$delete_result = $this->basic_model->db_update($data,$id_value,$id_key);
			}
		}

		if ($delete_result === false) return false;
		else return true;
	}

	public function trae_opciones_select($tabla,$metodo='',$parametros='') {
		if (empty($metodo)){
			$this->set_basic_db_table($tabla);
			$opciones = $this->get_list();
		}
		else {
			$ci = &get_instance();
			$param_metodo = explode("/", $metodo);
			for ($i=2; $i < count($param_metodo); $i++) {
				$arr_param[$i-2] = $param_metodo[$i];
			}
			if (is_array($parametros)) $arr_param = array_merge($arr_param,$parametros);
			else array_push($arr_param,$parametros);

			$ci->load->model($param_metodo[0],'modTMPABC');
			$opciones = call_user_func_array(array($ci->modTMPABC, $param_metodo[1]), $arr_param);
		}
		//PENDIENTE: Para incluir elementos vacíos $opt[''] = '';
		foreach ($opciones as $key => $value) {
			$opt[$value->id] = $value->Descripcion;
			$prop = get_object_vars($value);
			foreach($prop as $name => $valor){
				//$extra[] = ' data-'.strtolower($name).'="'.$valor.'"';
				$extra[$name] = $valor;
			}
		}
		return array('datos' => $opt, 'extra' => $extra);
	}

	public function model_insert($datos)
	{
		if ($this->basic_model === null) $this->set_default_Model();
		$this->set_basic_db_table($this->basic_db_table);

		$insert_result = $this->basic_model->db_insert($datos);
		if (!empty($insert_result)) return $insert_result;
		else return false;
	}

	public function model_delete()
	{
		if ($this->basic_model === null) $this->set_default_Model();
		$this->set_basic_db_table($this->basic_db_table);
		if (empty($this->where)) return false;

		$this->basic_model->set_where_alt();

		foreach($this->where as $where)
			$this->basic_model->where($where[0],$where[1],$where[2]);

		$delete_result = $this->basic_model->db_delete(0,'',$where[4]);
		$this->where = [];
		if (!empty($delete_result)) return true;
		return false;
	}


}

  class pjey_ABC_Layout extends pjey_ABC_Model_Driver{

    function __construct(){

    }

		protected function _set_primary_keys_to_model()
		{
			if (!empty($this->primary_keys))
			{
				foreach($this->primary_keys as $primary_key)
				{
					$this->basic_model->set_primary_key($primary_key['field_name'],$primary_key['table_name']);
				}
			}
		}

		protected function pre_render(){
			if ($this->basic_model === null) $this->set_default_Model();
			$this->set_basic_db_table($this->get_table());
			$this->_set_primary_keys_to_model();
		}

		public function construir(){
			$this->pre_render();
			//TODO: pasar estas configuraciones a la función pre_render (definir variables $operacion y $config como globales protected)
      $operacion = $this->get_operacion();
      $config = $this->carga_configuraciones();
      switch ($operacion) {
				case 'nuevo':
					$registro = 0;
					$archivo = $this->get_vista_edit();
					$datos = array('result_data' => (empty($registro) ? '' : $registro), 'config_data' => $config);
					$output = array('vista' => false, 'vista_aux' => true, 'datos' => $datos, 'archivo' => $archivo);
					break;
				case 'formulario':
					$formulario = $this->createForm;
					$datos = array('form_data' => (empty($formulario) ? array() : $formulario), 'config_data' => json_encode($config));
					$output = array('vista' => true, 'archivo' => $this->formulario_view, 'datos' => $datos, 'string' => false);
					break;
        case 'listar':
          $listado = $this->genera_listado();
          $datos = array('result_data' => (empty($listado) ? '' : json_encode($listado)), 'config_data' => json_encode($config));
          $output = array('vista' => true, 'archivo' => $this->default_view, 'datos' => $datos, 'string' => false);
          break;
        case 'editar':
          $registro = $this->trae_registro();
					$archivo = $this->get_vista_edit();
					if (empty($registro)) {
						$config['crear'] = true;
						$registro = $this->genera_registro_vacio();
						$campos = $this->genera_campos_agregar();
					}
					else $campos = $this->genera_campos_actualizar($registro);

					$fields = $this->genera_field_types();
          $datos = array('result_data' => (empty($registro) ? '' : $registro), 'config_data' => $config, 'field_data' => $campos, 'campos_data' => $this->field_types);
          $output = array('vista' => true, 'archivo' => $archivo, 'datos' => $datos, 'string' => false);
          break;
				case 'editar_aux':
					$registro = $this->trae_registro();
					if (empty($registro)) {
						$datos['heading'] = 'Error al consultar la información';
		        $datos['message'] = 'No se encontró información para el registro seleccionado.';
						$output = array('vista' => false, 'vista_aux' => true, 'datos' => $datos, 'archivo' => 'errors/html/error_general_modal');
					}
					else {
						$archivo = $this->get_vista_edit();
						$datos = array('result_data' => (empty($registro) ? '' : $registro), 'config_data' => $config);
						$output = array('vista' => false, 'vista_aux' => true, 'datos' => $datos, 'archivo' => $archivo);
					}
					break;
				case 'actualizar':
					$state_info = (object)array('primary_key' => $this->key[1], 'data' => $_POST);
					$update = $this->db_update($state_info);
					if ($update) $data = array('status' => TRUE,'message' => 'Registro actualizado correctamente.');
					else $data = array('status' => FALSE,'message' => 'Error al actualizar el registro.');
					$output = array('vista' => false, 'data' => $data);
          break;
				case 'borrar':
					$delete = $this->db_delete();
					if ($delete) $data = array('status' => TRUE,'message' => 'Registro eliminado correctamente.');
					else $data = array('status' => FALSE,'message' => 'Ocurrió un error al intentar eliminar el registro.');
					$output = array('vista' => false, 'data' => $data);
          break;
				case 'crear':
					$update = $this->db_insert();
					if ($update) $data = array('status' => TRUE,'message' => 'Registro guardado correctamente.');
					else $data = array('status' => FALSE,'message' => 'Error al guardar el registro.');
					$output = array('vista' => false, 'data' => $data);
          break;
				case 'guardar': //inserta o actualiza un registro
					if (!empty($_POST))
					{
						$state_info = (object)array('primary_key' => $this->key[1], 'data' => $_POST);
						$guardar = $this->db_guarda($state_info);
						if (!empty($guardar)) {
							if ($guardar > 0) $data = array('status' => TRUE,'message' => 'Registro guardado correctamente.', 'datos' => $state_info, 'id' => $guardar);
							else $data = array('status' => FALSE, 'message' => "Ocurrió un error al intentar guardar el registro.");
						}
						else {
							if (empty($this->validation_result)) $data = array('status' => FALSE,'message' => 'Ocurrió un error al intentar guardar el registro, intente de nuevo más tarde.');
							else $data = array('status' => FALSE, 'message' => 'Existen errores en los campos de captura. Por favor verifique.', 'errores' => $this->validation_result->validation_errors);
						}
					}
					else $data = array('status' => FALSE,'message' => 'No se recibió información para guardar.');

					$output = array('vista' => false, 'data' => $data);
					break;
				case 'exec': //ejecuta un procedimiento almacenado
					$datos = array();
					if (!empty($_POST))
					{
						$state_info = (object)array('data' => $_POST);
						$exec = $this->db_exec($state_info);
						if (!empty($exec)) {
							$datos = array('result_data' => json_encode($exec), 'config_data' => json_encode($config));
							$result = array('status' => true, 'message' => 'Operación ejecutada correctamente', 'datos' => $exec);
						}
						else {
							if (empty($this->validation_result)) $result = array('status' => FALSE,'message' => 'Ocurrió un error al intentar guardar el registro, intente de nuevo más tarde.');
							else $result = array('status' => FALSE, 'message' => 'Existen errores en los campos de captura. Por favor verifique.', 'errores' => $this->validation_result->validation_errors);
						}
					}
					else $result = array('status' => FALSE,'message' => 'No se recibió el parámetro esperado.');
					$output = array('vista' => false, 'archivo' => $this->default_view, 'datos' => $datos, 'data' => $result);
					break;
				default:
          break;
      }

      return $output;
    }

    protected function get_operacion()
		{
      $op = (empty($_POST['accion']) ? $this->operacion : $_POST['accion']);
      return $op;
    }

		protected function get_vista_edit()
		{
			$op = (empty($_POST['vista_aux']) ? $this->edit_view : $_POST['vista_aux']);
			return $op;
		}

		protected function get_method_name()
		{
			$ci = &get_instance();
			return $ci->router->method;
		}

    protected function genera_listado(){
      $listado = (empty($this->resultado) ? $this->get_list() : json_decode(json_encode($this->resultado),true) );
      return $listado;
    }

    public function trae_registro(){
      if ($this->basic_model === null) $this->set_default_Model();
      $this->set_basic_db_table($this->basic_db_table);
			$id_key = $this->key[1];
			$id_value = $_POST[$id_key];
			if (empty($id_value)) $registro = 0;
      else $registro = $this->get_row($id_value);
      return $registro;
    }

    protected function carga_configuraciones(){
      $config = array(
											'tema'							=> $this->tema,
											'key'               => $this->key,
                      'ocultos'           => $this->ocultos,
                      'visible'           => $this->visible,
                      'crud'              => $this->crud,
											'btnAgregar'				=> $this->btnAgregar,
											'btnEditar'					=> $this->btnEditar,
											'btnEliminar'				=> $this->btnEliminar,
                      'titulopanel'       => $this->titulopanel,
											'titulo'						=> $this->titulo,
											'subtitulo'					=> $this->subtitulo,
                      'muestra_panel'     => $this->muestra_panel,
                      'btnocultaColumnas' => $this->btnocultaColumnas,
                      'btnborrarFiltros'  => $this->btnborrarFiltros,
											'btncardView'  			=> $this->btncardView,
                      'filtros'           => $this->filtros,
                      'exportarXLS'       => $this->exportarXLS,
                      'exportarPDF'       => $this->exportarPDF,
											'copiarTbl'					=> $this->copiarTbl,
                      'acciones'          => $this->acciones,
											'confAcciones'      => $this->confAcciones,
											'formatoColumna'    => $this->formatoColumna,
                      'fnc_dblclick'      => $this->fnc_dblclick,
                      'encabezados'       => $this->encabezados,
											'cargando'					=> $this->cargando,
                      'dom'               => $this->dom,
											'domb5'             => $this->domb5,
											'crear' 						=> $this->crear,
											'cantResultados'    => $this->cantResultados, //<<<RPERAZA
											'extraCondensed'    => $this->extraCondensed, //<<<RPERAZA
											'tblResponsive'			=> $this->tblResponsive,
											'mnuLength'					=> $this->mnuLength,
											'colJSONconf'				=> json_encode($this->colJSONconf),
											'extra_config'			=> $this->extraConfig,
											);

      return $config;
    }

    protected function genera_campos_actualizar($registro){
			$arrayCampos = array();
      $arrayConfig = array();

			if( empty($this->generaEditables) ){
				foreach ($registro as $key => $value) {
					array_push($arrayCampos, $key);
					$arrayConfig[$key] = $key;
				}
				$this->editConfig = $arrayConfig;
			}
			else{
				$conf = $this->editConfig;
				foreach ($registro as $key => $value) {
					if( empty($conf[$key]['no_act']) ) array_push($arrayCampos, $key);
				}
			}

			$this->editCampos = $arrayCampos;

			$edit = array( 'editCampos'	=> $this->editCampos,
										 'editConfig'	=> $this->editConfig,
                    );

      return $edit;
    }

		protected function genera_campos_agregar(){
			$arrayCampos = array();
      $arrayConfig = array();

			if( empty($this->generaEditables) ){
				foreach ($this->field_types as $key => $value) {
					array_push($arrayCampos, $key);
					$texto = (empty($this->encabezados[$key]) ? $key : $this->encabezados[$key] );
					$arrayConfig[$key] = array('lbl' => $texto, 'placeholder' => $texto );
				}
			}
			else{
				$arrayConfig = $this->editConfig;
				foreach ($this->field_types as $key => $value) {
					array_push($arrayCampos, $key);
				}
			}

			$this->editCampos = $arrayCampos;
			$this->editConfig = $arrayConfig;

			$agregar = array( 'editCampos'  => $this->editCampos,
												'editConfig'	=> $this->editConfig,
										);

			return $agregar;
		}

		protected function genera_registro_vacio(){
			$campos = $this->get_field_types();
			$arrCampos = array();

			foreach ($campos as $key => $value) {
				$arrCampos[$key] = '';
			}

			return $arrCampos;
		}

    protected function genera_field_types(){
      $campos = $this->get_field_types();
      $this->field_types = $campos;
      return $this;
    }

		protected function genera_field_types_sp($sp){
			$campos = $this->get_field_types_sp($sp);
			$this->field_types = $campos;
			return $this;
		}

  }

	class pjey_Form_builder extends pjey_ABC_Layout{
		protected $createForm					= array();
		protected $defaultForm				= array();
		protected $formDefaultValues	= array();
		protected $selectLib					= 'selectores_class';

		function __construct(){
			$ci = &get_instance();
			$ci->load->helper('url');
    }

		public function set_theme($theme = null)
		{
			$this->tema = $theme;

			return $this;
		}

	function create_form($form, $conf = array()){
		$ci = &get_instance();
		$controller = $ci->router->fetch_class();
		$funcion = $ci->router->fetch_method();
		$confExtra = (!empty($form->ConfExtra) ? json_decode($form->ConfExtra,true) : '');
		$attributes = array();
		if (!empty($form->PostBack)) {
			$attributes = array("id"      => $form->Nombre,
			                   "name"     => $form->Nombre,
			                   "onsubmit"	=> "return ".$form->PostBack."(this, event);",
			                   "method"		=> "POST");
		}
		$accion = (empty($form->Accion) ? $controller.'/'.$funcion : $form->Accion);
		$this->createForm['formAttr'] = $attributes;
		$this->createForm['formAcc'] = $accion;
		$this->createForm['formPie'] = '';
		$this->createForm['formBody'] = '';

		$defaultForm = $this->defaultForm;

		if (!empty($conf)) {
		  if (is_array($conf)) {
		    foreach ($conf as $key => $item){
					$seccion = (empty($item->ClaveSeccion) ? '001' : $item->ClaveSeccion);
					$clave = (empty($item->Clave) ? $key : $item->Clave);
		      $arrayConf[$seccion][$clave] = get_object_vars($item);
		    }

		    if (count($arrayConf) > 0) {
					foreach ($arrayConf as $key => $value) {
						if (isset($defaultForm[$key])) {
							array_push($arrayConf[$key], $defaultForm[$key]);
							unset($defaultForm[$key]);
						}
					}
		      $defaultForm = $arrayConf;
		    }
			}
		}
		$seccion = '';
		foreach ($defaultForm as $key => $val) {
			$this->createForm['formBody'] .= form_fieldset('', array('class' => 'row'));
			if (!empty($defaultForm[$key])){
				foreach ($defaultForm[$key] as $item) {
					$tipo = $item['TipoCampo'];
					$confExtra = (!empty($item['ConfExtra']) ? json_decode($item['ConfExtra'],true) : '');
					$attr = (isset($confExtra['attrObj']) ? $this->get_atributos_obj($confExtra['attrObj']) : '');
					$strAttr = (!empty($attr['strAttr']) ? $attr['strAttr'] : '');
					$keypressAttr = (!empty($attr['strKeyPress']) ? $attr['strKeyPress'] : '');
					if ($key != 'PIE') {
						$val = (isset($this->formDefaultValues[$item['Clave']]) ? $this->formDefaultValues[$item['Clave']] : '');
						$estiloDiv = (isset($confExtra['estiloDiv']) ? $confExtra['estiloDiv'] : '');

						$this->createForm['formBody'] .= form_fieldset('', array('class' => $item['Clase'], 'style' => $estiloDiv)).form_fieldset('', array('class' => 'form-group'));
						$this->createForm['formBody'] .= form_label($item['Etiqueta'], $item['NombreCampo'],array('class'=>'form-label'));

						if ($tipo == 'select') {
							$tabla = '';
							$opciones = '';
							$param_select = '';
							$optExtra = '';
							if (!empty($confExtra['tablaOrigen'])) {
								$tabla = $confExtra['tablaOrigen'];
								$metodo = $this->check_val($item['MetodoOrigen']);
								$param_select = $this->check_val($item['ParametrosMetodo']);
								$optSelect = $this->trae_opciones_select($tabla,$metodo,$param_select);
								$opciones = $optSelect['datos'];
								$optExtra = $optSelect['extra'];
							}
							elseif (!empty($confExtra['selectOpt'])) {
								$opciones = $confExtra['selectOpt'];
							}
							$extra = 'id="'.$item['NombreCampo'].'"class="form-control form-control-sm select2-sm ABCcatalogo" '.$strAttr;
							$this->createForm['formBody'] .= $this->form_select($item['NombreCampo'],$opciones,$val,$extra,$optExtra);
						}
						else {
							$default = array(
														'name'					=>	$item['NombreCampo'],
														'id'						=>	$item['NombreCampo'],
														'class'					=>	'input-sm form-control form-control-sm '.(isset($item['Clase']) ? $item['Clase'] : ''),
														'type'					=>	$tipo,
														'placeholder'		=>	(empty($item['Placeholder']) ? $item['Etiqueta'] : $item['Placeholder']),
														'style'					=>	(isset($confExtra['estiloObj']) ? $confExtra['estiloObj'] : '')	,
														'autocomplete'	=>	"off",
														'onkeypress'		=> 	$keypressAttr
													);
							$this->createForm['formBody'] .= form_input($default,$val,$strAttr);
							$this->createForm['formBody'] .= '<p class="help-block">'.(empty($confExtra['help']) ? '' : $confExtra['help']).'</p>';
						}
						$this->createForm['formBody'] .= form_fieldset_close().form_fieldset_close();
					}
					else {
						$footdata = array(
						        'name'          => $item['NombreCampo'],
						        'id'            => $item['NombreCampo'],
						        'value'         => 'true',
						        'type'          => $tipo,
										'class'					=> 'btn '.$item['Clase'],
						        'content'       => $item['Etiqueta']
						);
						$this->createForm['formPie'] .= form_button($footdata,'',$strAttr);
					}
				}
			}
			$this->createForm['formBody'] .= form_fieldset_close();
		}
	}

	public function get_atributos_obj($attr){
		$arrAttr = array();
		$strKeyPress = '';
		$strAttr = '';
		foreach ($attr as $key => $value) {
			if ($key != 'onkeypress')	$strAttr .= ' '.$key.'='.$value.' ';
			else $strKeyPress = $value;
		}
		$arrAttr = array(
			'strAttr'			=>	$strAttr,
			'strKeyPress'	=>	$strKeyPress
		);
		return $arrAttr;
	}

	public function set_formulario_default(){
		$numargs = func_num_args();
		$arg_list = func_get_args();
		$arrayConfig = array();
		for ($i = 0; $i < $numargs; $i++) {
			$this->defaultForm[key($arg_list[$i])] = $arg_list[$i][key($arg_list[$i])];
		}
		return $this;
	}

	public function set_form_valores_default(){
		$numargs = func_num_args();
		$arg_list = func_get_args();
		$arrayConfig = array();
		foreach ($arg_list[0] as $key => $value) {
			$this->formDefaultValues[$key] = $value;
		}

		return $this;
	}

	function check_val($val,$array=false){
		return ( isset($val) ) ? $val : '';
	}

	function form_select($data = '', $options = array(), $selected = array(), $extra = '', $attr = array()){
		$defaults = array();
		if (is_array($data)) {
			if (isset($data['selected'])) {
				$selected = $data['selected'];
				unset($data['selected']); // select tags don't have a selected attribute
			}

			if (isset($data['options'])) {
				$options = $data['options'];
				unset($data['options']); // select tags don't use an options attribute
			}
		}
		else {
			$defaults = array('name' => $data);
		}

		is_array($selected) OR $selected = array($selected);
		is_array($options) OR $options = array($options);

		// If no selected state was submitted we will attempt to set it automatically
		if (empty($selected)) {
			if (is_array($data)) {
				if (isset($data['name'], $_POST[$data['name']])) {
						$selected = array($_POST[$data['name']]);
				}
			}
			elseif (isset($_POST[$data])) {
				$selected = array($_POST[$data]);
			}
		}

		$extra = _attributes_to_string($extra);

		$form = '<select '.rtrim(_parse_form_attributes($data, $defaults)).$extra.">\n";

		foreach ($options as $key => $val){
			$attr_html = '';
			$key = (string) $key;
			if( !empty($attr) ){
				foreach ($attr as $attr_name => $attr_value){
					$attr_html .= ' data-'.html_escape(strtolower($attr_name)).'="'.(string)$attr_value.'"';
				}
			}

			$form .= '<option value="'.html_escape($key).'"'
			.(in_array($key, $selected) ? ' selected="selected"' : '')
			.$attr_html.'>'
			.(string) $val."</option>\n";
		}
		return $form."</select>\n";
	}

}

  class pjey_ABC extends pjey_Form_builder{

		const	VERSION = "3.0.0";
		protected $tema 							= 'b5';
    protected $default_view 			= 'pjeyABC/plantilla_listado';
    protected $edit_view 					= 'pjeyABC/plantilla_modalABC';
		protected $formulario_view		= 'pjeyABC/plantilla_formulario';

    protected $operacion    			= 'listar';
		protected $sp									= '';

		//variables de base de datos
		private $basic_db_table_checked = false;

    //variables para el ABC
    protected $generaEditables    = false;
    protected $editCampos         = array();
		protected $editConfig					= array();
		protected $camposGuardar			= array();
		protected $eliminacion				= array(true,'',0); //primer parámetro true=físico,false=lógico, segundo parámetro campo para eliminación lógica, tercer parámetro valor para eliminación lógica.
		protected $form_validation		= null;
		protected $validation_conf		=	'';
		protected $validation_result 	= array('success' => false);
		protected $crear							= false;

    protected $key                = array(0,'id','desc');
    //variables de configuración default
		protected $btnocultaColumnas  = false;
    protected $btnborrarFiltros   = true;
		protected $btncardView			  = false;
    protected $filtros            = false;
    protected $exportarXLS        = true;
    protected $exportarPDF        = false;
		protected $copiarTbl	        = false;
    protected $acciones           = false;
    protected $crud               = false;
		protected	$btnAgregar	        = true;
		protected	$btnEditar          = true;
		protected	$btnEliminar        = true;
    protected $muestra_panel      = true;
		protected $cargando						= false;
		protected $extraCondensed     = false; //<<<RPERAZA
		protected $tblResponsive			= true;

		//variables de configuración adicionales
		protected $ocultos            = array();
    protected $visible            = array();
    protected $encabezados        = array();
    protected $titulopanel        = '';
		protected $titulo			        = '';
		protected $subtitulo	        = '';
    protected $fnc_dblclick       = '';
    protected $confAcciones       = array();
		protected $formatoColumna     = array();
    protected $dom 								= 'lBfrtip';
		protected $domb5							= 'lBfrtip';
		protected $cantResultados     = 10; //<<<RPERAZA
		protected $mnuLength 					= array(10, 25, 50, 100);
		protected $colJSONconf				= '';
		protected $extraConfig				= array();
		protected $usuario						= '';

		//variables para el resultado
    protected $resultado    = array();
    protected $field_types  = null;
		protected $select_alt   = array();
    protected $order_by     = null;
    protected $where        = array();
    protected $like         = array();
    protected $having       = array();
    protected $or_having    = array();
    protected $limit        = null;
		protected $group_by	    = array();
		protected $relation			= array();
		protected $relacion			= array();

    public function __construct()
  	{

  	}

		public function set_operacion($operacion = ''){
			$args = func_get_args();
			$numargs = func_num_args();
			$this->operacion = $args[0];
			if ($numargs > 1) $this->sp = $args[1];
    	return $this;
	  }

		// public function set_operacion($operacion = ''){
		// 	$this->operacion = $operacion;
		// 	return $this;
		// }

		public function set_resultado($result){
			if (!empty($result)) {
				if (is_array($result)) $this->resultado = $result;
				else array_push($this->resultado,$result);
			}
			return $this;
		}

    public function set_encabezados(){
      $args = func_get_args();

      if(isset($args[0]) && is_array($args[0])){
        $args = $args[0];
      }

      $this->encabezados = $args;
      return $this;
    }

    public function set_ocultos(){
      $args = func_get_args();

      if(isset($args[0]) && is_array($args[0])){
        $args = $args[0];
      }

      $this->ocultos = $args;
      return $this;
    }

	  public function set_visible(){
	    $args = func_get_args();

	    if(isset($args[0]) && is_array($args[0])){
	      $args = $args[0];
	    }

	    $this->visible = $args;
	    return $this;
	  }

	  public function set_key(){
	    $args = func_get_args();

	    if( isset($args[0]) && is_array($args[0]) ){
	      $args = $args[0];
	    }

	    $this->key = $args;
	    return $this;
	  }

		public function set_usuario($usuario = '') {
			$this->usuario = $usuario;
			return $this;
		}

		public function set_dom($dom = ''){
	    $this->dom = $dom;
			$this->domb5 = $dom;
	    return $this;
	  }

		public function set_cantResultados($cant = 10){ //<<<RPERAZA
			$this->cantResultados = $cant;
			return $this;
		}

		public function set_extraCondensed($extra = false){ //<<<RPERAZA
			$this->extraCondensed = $extra;
			return $this;
		}

		public function set_menulength($menu = array(10, 25, 50, 100)){
			// EJEMPLO: $abc->set_menulength([[10, 25, -1],[10, 25, 'Todos']]);
			$this->mnuLength = $menu;
			return $this;
		}

		public function set_coljsonconf($conf = ''){
			$this->colJSONconf = $conf;
			return $this;
		}

	  //configuraciones
	  public function set_defaults(){
	    $args = func_get_args();

	    if (isset($args[0]) && is_array($args[0])) {
	      $args = $args[0];
	    }

	    if( !empty($args) ){
	      for ($i=0; $i < count($args); $i++) {
	        $this->{$args[$i]} = !$this->{$args[$i]};
	      }
	    }
	    return $this;
	  }

		public function set_configuraciones(){
			$numargs = func_num_args();
			$arg_list = func_get_args();
			$arrayConfig = array();
			for ($i = 0; $i < $numargs; $i++) {
				$this->{key($arg_list[$i])} = $arg_list[$i][key($arg_list[$i])];
			}
			return $this;
		}

		public function set_configuraciones_extra(){
			$numargs = func_num_args();
			$arg_list = func_get_args();
			$arrayConfig = array();
			for ($i = 0; $i < $numargs; $i++) {
				$this->extraConfig[key($arg_list[$i])] = $arg_list[$i][key($arg_list[$i])];
			}
			return $this;
		}

		public function set_auto_config(){
			$numargs = func_num_args();
			$arg_list = func_get_args();
			$arrayConfig = array();
			for ($i = 0; $i < $numargs; $i++) {
				if ($arg_list[$i]['datos']) {
					if ($this->sp_exists($arg_list[$i]["datos"])) {
						$fields = $this->get_field_types_sp($arg_list[$i]['datos']);
						if (!empty($fields)) {
							$arrMoney = [];
							$arrDate = [];
							foreach ($fields as $key => $field) {
								if (strpos($field->type, 'money') !== false) $arrMoney[] = ($field->column - 1);
								if (strpos($field->type, 'date') !== false) $arrDate[] = ($field->column - 1);
							}
							$this->formatoColumna[] = array('moneda' => $arrMoney, 'fecha' => $arrDate);
						}
					}
				}
			}
			return $this;
		}

		public function set_eliminar(){
			$args = func_get_args();

		  if( isset($args[0]) && is_array($args[0]) ){
		    $args = $args[0];
		  }

		  $this->eliminacion = $args;
		  return $this;
		}

	  public function set_camposEdicion(){
	    $numargs = func_num_args();
	    $arg_list = func_get_args();
	    $arrayCampos = array();
			$arrayConfig = array();

	    if (isset($arg_list[0]) && is_array($arg_list[0])) {
	      $this->generaEditables = true;
	    }

	    for ($i = 0; $i < $numargs; $i++) {
	      array_push($arrayCampos,$arg_list[$i]['campo']);
				$arrayConfig[$arg_list[$i]['campo']] = $arg_list[$i]['config'];
	    }

	    $this->editCampos = $arrayCampos;
			$this->editConfig = $arrayConfig;
	    return $this;
	  }

		public function fields()
		{
			$args = func_get_args();

			if(isset($args[0]) && is_array($args[0]))
			{
				$args = $args[0];
			}

			$this->add_fields = $args;
			$this->edit_fields = $args;

			return $this;
		}

		public function set_campos_guardar(){
			$args = func_get_args();

      if(isset($args[0]) && is_array($args[0])){
        $args = $args[0];
      }

      $this->camposGuardar = $args;
      return $this;
		}

		function set_validation_conf()
		{
			$args = func_get_args();

		  if (isset($args[0])){
		    $args = $args[0];
		  }

		  $this->validation_conf = $args;
		  return $this;
		}

		function set_rules($field, $label = '', $rules = '', $errors = array())
		{
			if(is_string($field))
			{
				$this->validation_rules[$field] = array('field' => $field, 'label' => $label, 'rules' => $rules, 'errors' => $errors);
			}elseif(is_array($field))
			{
				foreach($field as $num_field => $field_array)
				{
					$this->validation_rules[$field_array['field']] = $field_array;
				}
			}
			return $this;
		}

		public function set_acciones(){
			$numargs = func_num_args();
	    $arg_list = func_get_args();
			$arrayConfig = array();

	    for ($i = 0; $i < $numargs; $i++) {
	      array_push($arrayConfig,$arg_list[$i]);
	    }

			$this->confAcciones = $arrayConfig;
	    return $this;
	  }

		public function set_formatoColumna(){
			$numargs = func_num_args();
	    $arg_list = func_get_args();
			$arrayConfig = array();

	    for ($i = 0; $i < $numargs; $i++) {
	      array_push($arrayConfig,$arg_list[$i]);
	    }

			$this->formatoColumna = $arrayConfig;
	    return $this;
		}

		public function query($table_name = NULL)
		{
			if ($this->basic_model === null ) $this->set_default_Model();
			if (!empty($table_name) && $this->basic_db_table === null) $this->basic_db_table = $table_name;
			$this->set_basic_db_table($this->basic_db_table);
			return $this->get_list();
		}

		public function select($select)
		{
			$this->select_alt[] = $select;
			return $this;
		}

		public function order_by($order_by, $direction = 'asc')
		{
			$this->order_by = array($order_by,$direction);

			return $this;
		}

		public function where($key, $value = NULL, $escape = TRUE, $where_alt = array('listar'), $multiple = false)
		{
			$this->where[] = array($key, $value, $escape, $where_alt, $multiple);
			return $this;
		}

		public function or_where($key, $value = NULL, $escape = TRUE)
		{
			$this->or_where[] = array($key,$value,$escape);

			return $this;
		}

		public function like($field, $match = '', $side = 'both')
		{
			$this->like[] = array($field, $match, $side);

			return $this;
		}

		protected function having($key, $value = '', $escape = TRUE)
		{
			$this->having[] = array($key, $value, $escape);

			return $this;
		}

		protected function or_having($key, $value = '', $escape = TRUE)
		{
			$this->or_having[] = array($key, $value, $escape);

			return $this;
		}

		public function or_like($field, $match = '', $side = 'both')
		{
			$this->or_like[] = array($field, $match, $side);

			return $this;
		}

		public function limit($limit, $offset = '')
		{
			$this->limit = array($limit,$offset);

			return $this;
		}

		public function group_by($grouping_by)
		{
			$this->group_by = $grouping_by;

			return $this;
		}

		/**
		 *
		 * Gets the basic database table of our crud.
		 * @return string
		 */
  	public function get_table()
		{
			if ($this->basic_db_table_checked)
			{
				return $this->basic_db_table;
			}
			elseif ($this->basic_db_table !== null)
			{
				if (!$this->table_exists($this->basic_db_table))
				{
					throw new Exception('La tabla no existe. Verifica la base de datos e intenta de nuevo.',11);
					die();
				}
				$this->basic_db_table_checked = true;
				return $this->basic_db_table;
			}
			else
			{
				//Last try , try to find the table from your view / function name!!! Not suggested but it works .
				$last_chance_table_name = $this->get_method_name();
				if ($this->table_exists($last_chance_table_name))
				{
					$this->set_table($last_chance_table_name);
				}
				$this->basic_db_table_checked = true;
				return $this->basic_db_table;
			}

			return false;
		}

  }

	// if (defined('CI_VERSION'))
	// {
	// 	$ci = &get_instance();
	// 	$ci->load->library('form_validation');
	//
	// 	class pjey_ABC_Form_validation extends CI_Form_validation{
	//
	// 		public $CI;
	// 		public $_field_data			= array();
	// 		// public $_config_rules		= array();
	// 		public $_error_array		= array();
	// 		public $_error_messages		= array();
	// 		public $_error_prefix		= '<div><strong>';
	// 		public $_error_suffix		= '</strong></div>';
	// 		public $error_string		= '';
	// 		public $validation_errors		= '';
	// 		public $_safe_form_data		= FALSE;
	// 	}
	// }
