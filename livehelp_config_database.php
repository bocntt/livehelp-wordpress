<?php
class livehelp_config_database {
	var $table_name = 'livehelp_config';
  var $array_config_id = array();
  var $array_config_name = array();

	function get_table_name() {
		return $this->table_name;
	}
	function set_table_name($table_name) {
		$this->table_name = $table_name;
	}

	function get_array_config_id() {
		return $this->array_config_id;
	}
	function set_array_config_id($array_config_id) {
		$this->array_config_id = $array_config_id;
  }

  function get_array_config_name() {
		return $this->array_config_name;
	}
	function set_array_config_name($array_config_name) {
		$this->array_config_name = $array_config_name;
	}

	function get_list_config($array_keywords=array(), $limit=0, $offset=0) {
		global $wpdb;
		$keyword = isset($array_keywords['keyword']) ? $array_keywords['keyword'] : "";
		$keyword = strtolower(trim($keyword));
		$table_name = $wpdb->prefix . $this->table_name;
		if (strlen($table_name) == 0) {
			return array();
		} else {
			$sql = "SELECT * FROM " . $table_name;
			$sql .= " WHERE 1=1";
			if (strlen($keyword) > 0) {
				$sql .= " AND (LOWER(config_name) LIKE '%".$keyword."%')";
			}
			if (($limit > 0) && ($offset >= 0)) {
				$sql .= " LIMIT " . $limit . " OFFSET " . $offset;
			}
			$list_results = $wpdb->get_results($sql);
			$array_result = array();
			$index = 0;
			foreach ($list_results as $item_obj) {
				$array_result[$item_obj->config_name] = $item_obj->config_value;
        if (!in_array($item_obj->config_name, $this->array_config_name)) {
					$this->array_config_name[] = $item_obj->config_name;
				}
				$index++;
			}
			return $array_result;
		}
	}

	function get_config_by_config_name($config_name) {
		global $wpdb;
		$table_name = $wpdb->prefix . $this->table_name;
		$result_obj = array();
		if (strlen($table_name) == 0) {
			return $result_obj;
		} else {
			$sql = "SELECT * " .
				" FROM " . $table_name . " WHERE config_name='" . $config_name . "' LIMIT 1";
			$item_obj = $wpdb->get_row($sql);
			if(isset($item_obj)) {
				$result_obj['config_name'] = $item_obj->config_name;
				$result_obj['config_id'] = $item_obj->config_id;
				$result_obj['config_value'] = $item_obj->config_value;
			}
			return $result_obj;
		}
	}

	function check_exist_config_name($config_name, $config_id=0) {
		global $wpdb;
		$config_name = strtolower(trim($config_name));
		$table_name = $wpdb->prefix . $this->table_name;
		if (strlen($table_name) == 0) {
			return false;
		} else {
			$sql = "SELECT COUNT(config_id) " .
				" FROM " . $table_name .
				" WHERE LOWER(config_name)='".esc_sql($config_name)."' AND config_id <> '".$config_id."'";
			$total_states = $wpdb->get_var($sql);
			if ($total_states == 0)
				return false;
			else
				return true;
		}
	}

	function insert_config($item_obj) {
		global $wpdb;
		$table_name = $wpdb->prefix . $this->table_name;
		if (strlen($table_name) > 0) {
			$config_name    = isset($item_obj['config_name']) ? trim($item_obj['config_name']) : "";
			$config_value    = isset($item_obj['config_value']) ? trim($item_obj['config_value']) : "";
			$sql = "INSERT INTO ".$table_name."(config_name, config_value) " .
				" VALUES ('%s', '%s')";
			$wpdb->query(
				$wpdb->prepare(
					$sql,
					array(
						$config_name,
						$config_value,
					)
				)
			);
		}
	}

	function update_config($item_obj) {
		global $wpdb;
		$table_name = $wpdb->prefix . $this->table_name;
		if (strlen($table_name) > 0) {
			$config_id      = isset($item_obj['config_id']) ? (int) trim($item_obj['config_id']) : 0;
			$config_name    = isset($item_obj['config_name']) ? trim($item_obj['config_name']) : "";
			$config_value    = isset($item_obj['config_value']) ? trim($item_obj['config_value']) : "";
			$sql = "UPDATE ".$table_name." SET config_name='%s', " .
				" config_value='%s', " .
			" WHERE config_id='%d'";
			$wpdb->query(
				$wpdb->prepare(
					$sql,
					array(
						$config_name,
            $config_value,
            $config_id
					)
				)
			);
		}
  }

  function update_config_value($item_obj) {
		global $wpdb;
		$table_name = $wpdb->prefix . $this->table_name;
		if (strlen($table_name) > 0) {
			$config_id      = isset($item_obj['config_id']) ? (int) trim($item_obj['config_id']) : 0;
			$config_name    = isset($item_obj['config_name']) ? trim($item_obj['config_name']) : "";
			$config_value    = isset($item_obj['config_value']) ? trim($item_obj['config_value']) : "";
			$sql = "UPDATE ".$table_name." SET config_value='%s' " .
			" WHERE config_name='%s'";
			$wpdb->query(
				$wpdb->prepare(
					$sql,
					array(
            $config_value,
            $config_name
					)
				)
			);
		}
	}

	function delete_config($config_id) {
		global $wpdb;
		$table_name = $wpdb->prefix . $this->table_name;
		if (($config_id > 0) && (strlen($table_name) > 0)) {
			global $wpdb;
			$sql = "DELETE FROM ".$table_name." WHERE config_id='%d'";
			$wpdb->query($wpdb->prepare($sql, $config_id));
		}
  }

}
?>
