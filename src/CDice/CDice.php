<?php

class CDice {

	private $_min;
	private $_max;
	private $_resultTotal = 0;
	private $_dicesResult = array();
	private $_execptionMessage = false;

	public function __construct($min = 1, $max = 6) {
		if ($this -> tryNummeric($min) AND $this -> tryNummeric($max)) {
			$this -> _min = $min;
			$this -> _max = $max;
		}
	}

	public function get_min() {
		return $this -> _min;
	}

	public function set_min($min) {
		if ($this -> tryNummeric($min)) {
			$this -> _min = $min;
		}
	}

	public function get_max() {
		return $this -> _max;
	}

	public function set_max($max) {
		if ($this -> tryNummeric($max)) {
			$this -> _max = $max;
		}
	}

	public function get_execptionMessage() {
		if ($this -> _execptionMessage != false) {
			return $this -> _execptionMessage;
		} else {
			return "<p>No execption caught</p>";
		}

	}

	private function tryNummeric($param) {
		try {
			if (is_numeric($param) == false) {
				$message = $param . " Is not a number";
				throw new Exception($message);
			} else {
				return true;
			}

		} catch (Exception $e) {
			$this -> _execptionMessage = "Caught exception:" . $e -> getMessage();
		}
	}

	public function rollDice($dices) {

		for ($i = 0; $i < $dices; $i++) {
			$this -> _dicesResult[] = rand($this -> _min, $this -> _max);
		}

		return $this -> _dicesResult;

	}

	public function calculateResult() {
		return array_sum($this -> _dicesResult);
	}

	public function calculateAverage() {
		return array_sum($this -> _dicesResult) / count($this -> _dicesResult);
	}

}
