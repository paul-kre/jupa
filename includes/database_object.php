<?php
require_once(LIB_PATH."database.php");

class DatabaseObject {

	public static function findAll() {
		return static::findBySql("SELECT * FROM " . static::$tableName );
	}

	public static function findById($id=0) {
		$resultArray = static::findBySql("SELECT * FROM " . static::$tableName . " WHERE id = {$id}");
		return !empty($resultArray) ? array_shift($resultArray) : false;
	}
	

	public static function findBySql($sql="") {
		global $db;
		$resultSet = $db->query($sql);
		$objectArray = array();
		while ($row = $db->fetchArray($resultSet)) {
			$objectArray[] = static::instantiate($row);
		}
		return $objectArray;
	}

	private static function instantiate($record) {
		$object = new static;

		foreach ($record as $attribute=>$value) {
			if ($object->hasAttribute($attribute)) {
				$object->$attribute = $value;
			}
		}
		return $object;
	}

	private function hasAttribute($attribute) {
		$objectVars = $this->attributes();
		return array_key_exists($attribute, $objectVars);
	}

	protected function attributes() {
		$attributes = array();
		foreach (static::$dbFields as $field) {
			if (property_exists($this, $field)) {
				$attributes[$field] = $this->$field;
			}
		}
		return $attributes;
	}

	protected function sanitizedAttributes() {
		global $db;
		$cleanAttributes = array();
		foreach ($this->attributes() as $key => $value) {
			$cleanAttributes[$key] = $db->escapeValue($value);
		}
		return $cleanAttributes;
	}

	public function save() {
		return isset($this->id) ? $this->update() : $this->create();
	}

	public function create() {
		global $db;
		$attributes = $this->sanitizedAttributes();
		$sql = "INSERT INTO "  . static::$tableName . " (";
		$sql .= join(", ", array_keys($attributes));
		$sql .= ") VALUES ('";
		$sql .= join("', '", array_values($attributes));
		$sql .= "')";
		if ($db->query($sql)) {
			$this->id = $db->insertId();
			return true;
		} else {
			return false;
		}
	}

	public function update() {
		global $db;
		$attributes = $this->sanitizedAttributes();
		$attributePairs = array();
		foreach ($attributes as $key => $value) {
			$attributePairs[] = "{$key}='{$value}'";
		}
		$sql = "UPDATE "  . static::$tableName . " SET ";
		$sql .= join(", ", $attributePairs);
		$sql .= " WHERE id=" . $db->escapeValue($this->id);
		return ($db->query($sql)) ? true : false;
	}

	public function delete() {
		global $db;
		$sql = "DELETE FROM ".static::$tableName;
		$sql .= " WHERE id=" . $db->escapeValue($this->id);
		$sql .= " LIMIT 1";
		$db->query($sql);
		return ($db->affectedRows() == 1) ? true : false;
	}

}