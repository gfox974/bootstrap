<?php
/* il faut encoder le fichier.less en utf-8 sans bom */
require "lessc.inc.php";
try {
	$less = new lessc;
	// echo $less->compile(".block { padding: 3 + 4px }");

	echo $less->compileFile("fichier.less");

	$less->checkedCompile("fichier.less", "fichier.css");

} catch (exception $e) {
  echo "fatal error: " . $e->getMessage();
}