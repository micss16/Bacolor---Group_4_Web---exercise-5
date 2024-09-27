<?php
$a[] = "Jean Lyle C. Sazon";
$a[] = "Isaiah N. Torres";
$a[] = "Gerome M. Cruz";
$a[] = "Mico L. Bacolor";
$a[] = "Roderick John Bandejes";
$a[] = "Malupiton";

$q = $_REQUEST["q"];

$hint = "";

if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  foreach($a as $name) {
    if (stristr($q, substr($name, 0, $len))) {
      if ($hint === "") {
        $hint = $name;
      } else {
        $hint .= ", $name";
      }
    }
  }
}

echo $hint === "" ? "no suggestion" : $hint;
?>