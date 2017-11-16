<?php
/* 
 * Ejemplo básico de elaboración de una página con enlaces.
 * Se pretende que sea un paso previo a introducir conceptos adicionales: CSS, funcionalidades con javascript.
 * Conviene observar que los contenidos son constantes y a efectos prácticos.
 * @@@ Alguien experimentado con PHP debería revisar el código.
 * @fjarandag Oct 2017 - Licencia dominio público, salvo tecnologías y librerías utilizadas que tengan otra.
 */

abstract class MenuItem {
    // Atributos básicos utilizables en múltiples tipos
    public $id = "";
    public $caption = "";
    //public $icon = "";
    
   abstract public function doPrint();
}

class MenuLista extends MenuItem {
    public $children = array();
    public function doPrint() {
?><div class="links"><?php echo $this->caption?><ul class="menuList" id="<?php echo $this->id?>">
<?php
        foreach ($this->children as $child) {
            ?><li><?php $child->doPrint(); ?></li>
<?php
        } 
?>
</ul></div><!-- menulista -->
<?php
    }
} // class MenuList
/* Crear el nodo inicial de una lista, todavía hay que rellenarlo. */
function createMenuLista($nombre, $id) {
    $retVal = new MenuLista();
    $retVal->id = $id;
    $retVal->caption = $nombre;
    return $retVal;
}

class MenuEnlace extends MenuItem {
    public $destino = "foo.html";
    public $tooltip = "";
    public function doPrint() {
?><a href="<?php echo $this->destino ?>" title="<?php echo $this->tooltip ?>"><?php echo $this->caption ?></a>
<?php
    }
} // class MenuEnlace
/* Crear el nodo inicial de una lista, todavía hay que rellenarlo. */
function createMenuEnlace($caption, $destino, $tooltip) {
    $retVal = new MenuEnlace();
    $retVal->caption = $caption;
    $retVal->destino = $destino;
    $retVal->tooltip = $tooltip;
    return $retVal;
}

// Definir una lista principal de menuItems
// Por sencillez el contenido es estático. Para justificar una página dinámica se debería elaborar a partir de información del usuario, del contenido de una B.D, etc.
// También se podrían elaborar múltiples páginas de enlaces incluyendo PHPs con la definición de las clases y la estructura del documento al principio y al fin.
// Alternativas de elaboración: Página estática, XSLT.
$principal = array();
$listaWWW = createMenuLista("Referencias WWW","www");
$principal[] = &$listaWWW;
$listaWWW->children[] = createMenuEnlace("HTML5 specification (2014)","http://www.w3.org/TR/html5/","HyperText Modelling Language");
$listaWWW->children[] = createMenuEnlace("XHTML 1 schema","https://www.w3.org/TR/xhtml1-schema/","");
$listaWWW->children[] = createMenuEnlace("RFC 2616 HTTP 1.1(1999)","https://tools.ietf.org/html/rfc2616","HyperText Transfer Protocol");
$listaWWW->children[] = createMenuEnlace("RFC 3986 URI syntax (2005)","https://tools.ietf.org/html/rfc3986","Uniform Resource Identifier");
$listaWWW->children[] = createMenuEnlace("CSS-snapshot 2017","https://www.w3.org/TR/css-2017/","Cascading Style Sheets");

$listaJS = createMenuLista("Javascript, etc", "js");
$principal[] = &$listaJS;
$listaJS->children[] = createMenuEnlace("Javascript Language Reference (MDN)","https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference","");
$listaJS->children[] = createMenuEnlace("PHP Manual","http://php.net/manual/en/index.php","PHP: Hypertext Preprocessor");


?><?xml version="1.0" encoding="UTF-8" ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="es">
<head>
    <meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
    
</head>
<body>
<div class="main">
<?php
    foreach ($principal as $mi) {
        $mi->doPrint();
    }
?></div>
</body>
</html>