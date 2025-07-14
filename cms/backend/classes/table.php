<?php
abstract class Table {
    protected $TABLE;

    public function getBy($key, $value, $order_col = 'id', $order = 'ASC') {
		return $GLOBALS['database']->runQuery("SELECT * FROM $this->TABLE WHERE `$key` = ? ORDER BY `$order_col` $order", array($value));
	}

    public function save($data) {
        if (empty($data['id']) === false) {
            foreach ($data as $key=>$value) {
                if ($key !== "id" && strpos($key, '_do') === false) {
                    $set_arr[] = "`$key` = :$key";
                    $params[":$key"] = $value;
                }
            }
            $params[':id'] = $data['id'];
            $result = $GLOBALS['database']->runQuery("UPDATE $this->TABLE SET " . implode(',', $set_arr) . " WHERE `id` = :id", $params);
        } else {
            foreach ($data as $key=>$value) {
                if ($key !== "id" && strpos($key, '_do') === false) {
                    $key_arr[] = "`$key`";
                    $keyval_arr[] = ":$key";
                    $params[":$key"] = $value;
                }
            }
            $result = $GLOBALS['database']->runQuery("INSERT INTO $this->TABLE (" . implode(',', $key_arr) . ") VALUES (" . implode(',', $keyval_arr) . ")", $params);
        }

        if (isset($result) === true) {
			return $result;
        } else {
            return array('affected' => false);
        }
    }
}