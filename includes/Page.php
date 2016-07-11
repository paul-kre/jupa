<?php
require_once(LIB_PATH."database.php");
require_once(LIB_PATH."database_object.php");

class Page extends DatabaseObject {
    protected static $tableName = "page";
    protected static $dbFields = array("urlname", "parent", "nicename", "description", "position", "enabled");
    public $urlname="";
    public $parent="";
    public $nicename="";
    public $description="";
    public $position;
    public $enabled;

    public function findChildren() {
        return static::findBySql("SELECT * FROM " . static::$tableName . " WHERE parent = '".$this->urlname."' ORDER BY position");
    }

    public static function findByUrlName($str="") {
        global $db;
        $str = $db->escapeValue($str);
        $resultArray = static::findBySql("SELECT * FROM " . static::$tableName . " WHERE urlname = '{$str}' LIMIT 1");
        return !empty($resultArray) ? array_shift($resultArray) : false;
    }

    public static function findMainPages($str="") {
        global $db;
        $str = $db->escapeValue($str);
        return static::findBySql("SELECT * FROM " . static::$tableName . " WHERE parent IS NULL AND nicename IS NOT NULL ORDER BY position");
    }
}

$page = new Page();