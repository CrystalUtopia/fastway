<?php
	/* configurables */
	define("FASTWAY_DB_USER", ""); // CHANGE THIS
	define("FASTWAY_DB_PASS", ""); // CHANGE THIS
	define("FASTWAY_DB_HOST", "localhost"); // Possibly change this.
	define("FASTWAY_DB_NAME", ""); // CHANGE THIS 
	/* end of configurables */

	class Fastway {
		private $db;
		function __construct() {
			$this->db = new mysqli(FASTWAY_DB_HOST, FASTWAY_DB_USER, FASTWAY_DB_PASS, FASTWAY_DB_NAME);
		}
		function byPostcode($pc) {
			$qid = $this->db->query("SELECT * FROM `fastway` WHERE `postcode` LIKE {$pc};");
			$res = array();
			while ($row = $qid->fetch_assoc()) {
				$res[] = $row;
			}
			return $res;
		}
		function byTown($tw) {
			$qid = $this->db->query("SELECT * FROM `fastway` WHERE `town` LIKE '%{$tw}%';");
			$res = array();
			while ($row = $qid->fetch_assoc()) {
				$res[] = $row;
			}
			return $res;
		}
		function isServiceable($tw, $pc) {
			$qid = $this->db->query("SELECT * FROM `fastway` WHERE `town` LIKE '%{$tw}%' AND `postcode` LIKE {$pc} AND `satchel`='Y';");
			if ($qid->num_rows > 0) { return true; }
			else { return false; }
		}

	}
?>
