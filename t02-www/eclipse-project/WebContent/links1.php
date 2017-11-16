<?php
/* 
 * Ejemplo básico de elaboración de una página con enlaces.
 * Se introducen los siguientes conceptos:
 * * Modularidad en el PHP (definición separada de clases y formato reutilizados).
 * * CSS
 * @@@ Alguien experimentado con PHP debería revisar el código.
 * @fjarandag Nov 2017 - Dominio público.
 */

include_once 'include/links1-definition.php';

// Definir una lista principal de menuItems
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

// $lista@@@ = createMenuLista("@@@Caption","@@@id");
// $principal[] = &$lista@@@;
// $lista@@@->children[] = createMenuEnlace("@@@Caption","@@@enlace","@@@tooltip");

include 'include/links1-output.php';
?>