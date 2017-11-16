<?php
/*
 * Generar salida para la hoja de enlaces.
 * Step 1. Introducimos inclusión de CSS
 */
?><?xml version="1.0" encoding="UTF-8" ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="es">
<head>
    <meta http-equiv="Content-type" content="text/html; charset=UTF-8" />

	<link rel="Stylesheet" type="text/css" href="static/links1.css" />

<body>
<div class="main">
<?php
    foreach ($principal as $mi) {
        $mi->doPrint();
    }
?></div>
</body>
</html>
