<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class pjeyABC_model  extends CI_Model  {

  //colocar variables locales
	protected $table_name = null;
  protected $crudDB = 'db';
	protected $primary_key = null;
	protected $relation = array();
	protected $relacion = array();
	protected $relacion_n_n = array();
	protected $relation_n_n = array();
	protected $primary_keys = array();
	protected $select_alt = array();
	protected $where_alt = null;
	protected $result_row = false;

  function __construct()
    {
      parent::__construct();
      // $this->cargar_bd();
    }

  function db_table_exists($table_name = null){
  	return $this->{$this->crudDB}->table_exists($table_name);
  }

	function db_sp_exists($sp = 'dadas'){
		$sql = "SELECT COUNT(*) AS found
						FROM information_schema.routines
						WHERE routine_name = '{$sp}'";
		$query = $this->{$this->crudDB}->query($sql);
		if (empty($query->row()->found)) return FALSE;
		return true;
	}

  //CONSULTAS
	function get_list()
	{
		if ($this->table_name === null)	return false;

			$select = "{$this->table_name}.*";

			if (!empty($this->select_alt))
			{
				$select = $this->select_alt;
			}

		//set_relation special queries
		if (!empty($this->relation)) {
			foreach($this->relation as $relation) {
				list($field_name, $related_table , $related_field_title) = $relation;
				$unique_join_name = $this->_unique_join_name($field_name);
				$unique_field_name = $this->_unique_field_name($field_name);

			if (strstr($related_field_title,'{')) {
				$related_field_title = str_replace(" ","&nbsp;",$related_field_title);
				$select .= ", CONCAT('".str_replace(array('{','}'),array("',COALESCE({$unique_join_name}.",", ''),'"),str_replace("'","\\'",$related_field_title))."') as $unique_field_name";
			}
			else {
				$select .= ", $unique_join_name.$related_field_title AS $unique_field_name";
			}

			if($this->field_exists($related_field_title))
				$select .= ", `{$this->table_name}`.$related_field_title AS '{$this->table_name}.$related_field_title'";
			}
		}

		if (!empty($this->relacion)) {
			foreach($this->relacion as $relation) {
				list($field_name, $related_table , $related_field_title, $select_clause) = $relation;
				$unique_join_name = $this->_unique_join_name($field_name);
				$unique_field_name = $this->_unique_field_name($field_name);
				foreach($select_clause as $key => $val) {
					$select .= ", $unique_join_name.$key AS $val";
				}
			}
		}

		//set_relation_n_n special queries. We prefer sub queries from a simple join for the relation_n_n as it is faster and more stable on big tables.
		if (!empty($this->relation_n_n)) {
			$select = $this->relation_n_n_queries($select);
		};

		$this->{$this->crudDB}->select($select, false);

		$query = $this->{$this->crudDB}->get($this->table_name);

		if ($this->result_row) return $query->row();
		else return $query->result();
		// $result = $this->{$this->crudDB}->get($this->table_name)->result();
		// return $results;
	}

  public function get_row($table_name = null){
  	$table_name = $table_name === null ? $this->table_name : $table_name;
  	return $this->{$this->crudDB}->get($table_name)->row();
  }

	//MODIFICACIONES

	function db_update($post_array, $id_value, $id_key = '')
	{
		if (empty($id_key)) $id_key = $this->get_primary_key();
		if (empty($this->where_alt)) return $this->{$this->crudDB}->update($this->table_name,$post_array, array($id_key => $id_value));
		else return $this->{$this->crudDB}->update($this->table_name,$post_array);
	}

  function db_insert($post_array)
	{
    $insert = $this->{$this->crudDB}->insert($this->table_name,$post_array);
    if ($insert) return $this->{$this->crudDB}->insert_id();
    return false;
  }

	function db_exec($sp,$post_array)
	{
		$sql="exec ".$sp;
		$i = 0;
		$str_params = " ";

		foreach($post_array as $key => $value ) {
			if ($i > 0) $str_params .= ", ";
			$str_params .= "@".$key." = ?";
			$i++;
		}

		$query = $this->{$this->crudDB}->query($sql.$str_params,$post_array);
		return $query;
	}

	function db_delete($primary_key_value, $id_key = '', $multiple = false)
	{
		if (empty($multiple)) $this->{$this->crudDB}->limit(1);
		if (!empty($this->where_alt)) $this->{$this->crudDB}->delete($this->table_name);
		else {
			if (empty($id_key)) $id_key = $this->get_primary_key();
			if ($id_key === false) return false;
			$this->{$this->crudDB}->delete($this->table_name,array($id_key => $primary_key_value));
		}

		if ($this->{$this->crudDB}->affected_rows() != 1)	return false;
		else return true;
	}

  //CONFIGURACIONES
  function set_basic_table($table_name = null){
    if (!($this->{$this->crudDB}->table_exists($table_name ?? ''))) return false;
    $this->table_name = $table_name;
    return true;
  }

	function set_select_alt($select = null){
		$this->select_alt[] = $select;
    return true;
	}

	function set_where_alt(){
		$this->where_alt = true;
		return true;
	}

  function set_crud_database($db_name = null){
    $this->crudDB = $db_name;
    return true;
  }

	/**
	 * para solo seleccionar una fila del listado (registro único)
	 * @method set_select_row
	 * @author alopez
	 * @date
	 */
	function set_tipo_result($row = false){
		$this->result_row = $row;
		return true;
	}

	function select($select,$escape=true){
		$this->{$this->crudDB}->select($select,$escape);
	}

  function order_by($order_by, $direction){
    $this->{$this->crudDB}->order_by( $order_by , $direction );
  }

  function where($key, $value = NULL, $escape = TRUE){
    $this->{$this->crudDB}->where($key, $value, $escape);
  }

  function or_where($key, $value = NULL, $escape = TRUE){
    $this->{$this->crudDB}->or_where( $key, $value, $escape);
  }

  function having($key, $value = NULL, $escape = TRUE){
    $this->{$this->crudDB}->having( $key, $value, $escape);
  }

  function or_having($key, $value = NULL, $escape = TRUE){
    $this->{$this->crudDB}->or_having( $key, $value, $escape);
  }

  function like($field, $match = '', $side = 'both'){
    $this->{$this->crudDB}->like($field, $match, $side);
  }

  function or_like($field, $match = '', $side = 'both'){
    $this->{$this->crudDB}->or_like($field, $match, $side);
  }

  function limit($value, $offset = ''){
    $this->{$this->crudDB}->limit($value , $offset);
  }

	function group_by($grouping_by){
		$this->{$this->crudDB}->group_by($grouping_by);
	}

	function get_field_types_basic_table()
	{
		$db_field_types = array();
		$sql = "SELECT ISC.COLUMN_NAME as Field,DATA_TYPE as Type,CHARACTER_MAXIMUM_LENGTH as MaxLENGTH,IS_NULLABLE as NULLABLE,COLUMN_DEFAULT as ColDefault,isnull(ku.COLUMN_NAME,0) as primary_key
						FROM INFORMATION_SCHEMA.COLUMNS ISC
						LEFT OUTER JOIN INFORMATION_SCHEMA.KEY_COLUMN_USAGE ku on ISC.COLUMN_NAME = KU.COLUMN_NAME AND ISC.TABLE_NAME = ku.TABLE_NAME
						LEFT OUTER JOIN INFORMATION_SCHEMA.TABLE_CONSTRAINTS  AS TC ON TC.CONSTRAINT_NAME = KU.CONSTRAINT_NAME AND TC.CONSTRAINT_TYPE = 'PRIMARY KEY' AND TC.CONSTRAINT_NAME = KU.CONSTRAINT_NAME
						WHERE ISC.TABLE_NAME = '{$this->table_name}'";
		$db_info = $this->{$this->crudDB}->query($sql)->result();

		foreach($db_info as $db_field_type)
		{
			$type = explode("(",$db_field_type->Type.'('.$db_field_type->MaxLENGTH.')');
			$db_type = $type[0];

			if (isset($type[1]))
			{
				if(substr($type[1],-1) == ')')
				{
					$length = substr($type[1],0,-1);
				}
				else
				{
					list($length) = explode(" ",$type[1]);
					$length = substr($length,0,-1);
				}
			}
			else
			{
				$length = '';
			}
			$db_field_types[$db_field_type->Field]['db_max_length'] = $length;
			$db_field_types[$db_field_type->Field]['db_type'] = $db_type;
			$db_field_types[$db_field_type->Field]['db_null'] = $db_field_type->NULLABLE == 'YES' ? true : false;
			$db_field_types[$db_field_type->Field]['db_extra'] = $db_field_type->ColDefault;
			$db_field_types[$db_field_type->Field]['primary_key'] = (!empty($db_field_type->primary_key) ? 1 : 0);
			// $db_field_types[$db_field_type->Field]['db_extra'] = $db_field_type->Extra;
		}

		$results = $this->{$this->crudDB}->field_data($this->table_name);

		foreach($results as $num => $row)
		{
			$row = (array)$row;
			$results[$num] = (object)( array_merge($row, $db_field_types[$row['name']])  );
		}

		return $results;
	}

  function get_field_types_basic_table_alt(){
    $db_field_types = array();

    $db_info = $this->db->query("SELECT COLUMN_NAME,DATA_TYPE,CHARACTER_MAXIMUM_LENGTH,IS_NULLABLE,COLUMN_DEFAULT FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = '{$this->table_name}'")->result();

    foreach($db_info as $db_field_type){
      $db_type = $db_field_type->DATA_TYPE;

      $length = ( empty($db_field_type->CHARACTER_MAXIMUM_LENGTH) ? '' : $db_field_type->CHARACTER_MAXIMUM_LENGTH );

      $db_field_types[$db_field_type->COLUMN_NAME]['db_max_length'] = $length;
      $db_field_types[$db_field_type->COLUMN_NAME]['db_type'] = $db_type;
      $db_field_types[$db_field_type->COLUMN_NAME]['db_null'] = $db_field_type->IS_NULLABLE == 'YES' ? true : false;
      $db_field_types[$db_field_type->COLUMN_NAME]['db_default'] = $db_field_type->COLUMN_DEFAULT;
    }

    // $results = $this->db->field_data($this->table_name);
    //
    // foreach($results as $num => $row){
    //   $row = (array)$row;
    //   $results[$num] = (object)( array_merge($row, $db_field_types[$row['name']]) );
    // }

    return $db_field_types;
  }

	protected function relation_n_n_queries($select)
	{
		$this_table_primary_key = $this->get_primary_key();
		foreach($this->relation_n_n as $relation_n_n)
		{
			list($field_name, $relation_table, $selection_table, $primary_key_alias_to_this_table,
						$primary_key_alias_to_selection_table, $title_field_selection_table, $priority_field_relation_table) = array_values((array)$relation_n_n);

			$primary_key_selection_table = $this->get_primary_key($selection_table);

			$field = "";
			$use_template = strpos($title_field_selection_table,'{') !== false;
			$field_name_hash = $this->_unique_field_name($title_field_selection_table);
			if ($use_template)
			{
				$title_field_selection_table = str_replace(" ", "&nbsp;", $title_field_selection_table);
				$field .= "CONCAT('".str_replace(array('{','}'),array("',COALESCE(",", ''),'"),str_replace("'","\\'",$title_field_selection_table))."')";
			}
			else
			{
				$field .= "$selection_table.$title_field_selection_table";
			}

			$select .= ", (SELECT GROUP_CONCAT(DISTINCT $field) FROM $selection_table "
				."LEFT JOIN $relation_table ON $relation_table.$primary_key_alias_to_selection_table = $selection_table.$primary_key_selection_table "
				."WHERE $relation_table.$primary_key_alias_to_this_table = `{$this->table_name}`.$this_table_primary_key GROUP BY $relation_table.$primary_key_alias_to_this_table) AS $field_name";
		}

		return $select;
	}

	public function set_primary_key($field_name, $table_name = null)
	{
		$table_name = $table_name === null ? $this->table_name : $table_name;
		$this->primary_keys[$table_name] = $field_name;
	}

	function get_primary_key($table_name = null)
	{
		if ($table_name == null)
		{
			if (isset($this->primary_keys[$this->table_name]))
			{
				return $this->primary_keys[$this->table_name];
			}

			if (empty($this->primary_key))
			{
				$fields = $this->get_field_types_basic_table();
				foreach ($fields as $field)
				{
					if ($field->primary_key == 1)
					{
						return $field->name;
					}
				}

				return false;
			}
			else
			{
				return $this->primary_key;
			}
		}
		else
		{

			if (isset($this->primary_keys[$table_name]))
			{
				return $this->primary_keys[$table_name];
			}

			$fields = $this->get_field_types($table_name);

			foreach ($fields as $field)
			{
				if ($field->primary_key == 1)
				{
					return $field->name;
				}
			}

			return false;
		}

	}

	function field_exists($field,$table_name = null)
	{
		if (empty($table_name))
		{
			$table_name = $this->table_name;
		}
		return $this->{$this->crudDB}->field_exists($field,$table_name);
	}

	function get_field_types($table_name)
	{
		$results = $this->field_data_alt($table_name);
		return $results;
	}

	function get_field_types_sp($stored_procedure)
	{
		$results = $this->field_data_sp($stored_procedure);
		return $results;
	}

	function join_relation($field_name, $related_table, $related_field_title)
	{
		$related_primary_key = $this->get_primary_key($related_table);
		if ($related_primary_key !== false)
		{
			$unique_name = $this->_unique_join_name($field_name);
			$this->{$this->crudDB}->join($related_table.' as '.$unique_name , "$unique_name.$related_primary_key = {$this->table_name}.$field_name",'left');

			$this->relation[$field_name] = array($field_name, $related_table , $related_field_title);

			return true;
		}

		return false;
	}

	function joinned($field_name, $related_table, $related_field_title, $select_clause)
	{
		$related_primary_key = $this->get_primary_key($related_table);

		if ($related_primary_key !== false)
		{
			$unique_name = $this->_unique_join_name($field_name);
			$this->{$this->crudDB}->join($related_table.' as '.$unique_name, "$unique_name.$related_primary_key = {$this->table_name}.$field_name",'left');
			$this->relacion[$field_name] = array($field_name, $related_table , $related_field_title, $select_clause);
			return true;
		}

		return false;
	}

	function set_relation_n_n_field($field_info)
	{
		$this->relation_n_n[$field_info->field_name] = $field_info;
	}

	function multi_join($join)
	{
		if (is_array($join)) {
			if (count($join) == 3) {
				$this->{$this->crudDB}->join($join[0], $join[1], $join[2]);
			}
			else {
				foreach ($join as $tabla => $relacion) {
					$this->{$this->crudDB}->join($tabla, $relacion);
				}
			}
		}
	}

	protected function _unique_join_name($field_name)
	{
		return 'j'.substr(md5($field_name),0,8); //This j is because is better for a string to begin with a letter and not with a number
	}

	protected function _unique_field_name($field_name)
	{
		return 's'.substr(md5($field_name),0,8); //This s is because is better for a string to begin with a letter and not with a number
	}

	protected function field_data_alt($table)
	{
		$sql = "SELECT ISC.COLUMN_NAME,DATA_TYPE,CHARACTER_MAXIMUM_LENGTH,IS_NULLABLE as NULLABLE, NUMERIC_PRECISION, COLUMN_DEFAULT,isnull(ku.COLUMN_NAME,0) as primary_key
						FROM INFORMATION_SCHEMA.COLUMNS ISC
						LEFT OUTER JOIN INFORMATION_SCHEMA.KEY_COLUMN_USAGE ku on ISC.COLUMN_NAME = KU.COLUMN_NAME AND ISC.TABLE_NAME = ku.TABLE_NAME
						LEFT OUTER JOIN INFORMATION_SCHEMA.TABLE_CONSTRAINTS  AS TC ON TC.CONSTRAINT_NAME = KU.CONSTRAINT_NAME AND TC.CONSTRAINT_TYPE = 'PRIMARY KEY' AND TC.CONSTRAINT_NAME = KU.CONSTRAINT_NAME
						WHERE ISC.TABLE_NAME = '{$table}'";

		if (($query = $this->{$this->crudDB}->query($sql)) === FALSE)
		{
			return FALSE;
		}
		$query = $query->result_object();
		$retval = array();
		for ($i = 0, $c = count($query); $i < $c; $i++)
		{
			$retval[$i]					= new stdClass();
			$retval[$i]->name		= $query[$i]->COLUMN_NAME;
			$retval[$i]->type		= $query[$i]->DATA_TYPE;
			$retval[$i]->max_length		= ($query[$i]->CHARACTER_MAXIMUM_LENGTH > 0) ? $query[$i]->CHARACTER_MAXIMUM_LENGTH : $query[$i]->NUMERIC_PRECISION;
			$retval[$i]->default		= $query[$i]->COLUMN_DEFAULT;
			$retval[$i]->primary_key		= (!empty($query[$i]->primary_key) ? 1 : 0);
		}

		return $retval;
	}

	protected function field_data_sp($stored_procedure)
	{
		//PENDIENTE: intentar obtener los tipos de dato
		$sql = "SELECT * 	FROM sys.dm_exec_describe_first_result_set ('$stored_procedure', NULL, 0)";
		if (($query = $this->{$this->crudDB}->query($sql)) === FALSE)
		{
			return FALSE;
		}
		$query = $query->result_object();
		$retval = array();
		for ($i = 0, $c = count($query); $i < $c; $i++)
		{
			if (!empty($query[$i]->error_number)) return false;
			$retval[$i]					= new stdClass();
			$retval[$i]->column = $query[$i]->column_ordinal;
			$retval[$i]->name		= $query[$i]->name;
			$retval[$i]->type		= $query[$i]->system_type_name;
			$retval[$i]->max_length		= $query[$i]->max_length;
		}
		return $retval;
	}

// PENDIENTE: revisar para implementar get genérico -> https://stackoverflow.com/questions/40435612/how-to-join-table-dynamically-in-codeigniter

}
