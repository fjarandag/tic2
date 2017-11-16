104-html-formatoBasico.md
Descripción de la estructura y del formato básico del HTML


### Indice previsto
4. Lenguaje HTML-Formato básico
	1. Elementos y atributos
	2. Códigos de escape y comentarios
	3. elementos con equivalencia directa en el procesador de texto (b i u font s tt pre). Por qué se desaconsejan.
	4. El enlace. Anclas. Atributo id.
	5. Listas. Numeradas, no numeradas, definiciones.

### Observaciones 1
Víctor me pasó el manual de BenKo y presentaciones.
- La presentación tiene licencia Non-Derivative, de modo que no es lícito corregir o actualizar
- Un enlace que se presenta no es correcto, visitar [CSS Zen Garden](http://www.csszengarden.com/)
- Me parecería interesante mostrar desde el principio un ejemplo de código HTML. El del Zen Garden puede valer, pero hay muchos elementos que no necesitamos ver.
- [ ] Preparar una plantilla alternativa, simplificada, pero con algunas entidades.
- Convendría tener una lista de términos (elemento, atributo, entidad, Unicode, codificación,Content-Type).
- En muchos lenguajes informáticos encontramos caracteres especiales, que si el usuario utilizase podría confundir el proceso de la página. Por ejemplo si queremos mostrar como texto: `<script>window.location.href='http://evil.site.nk/mwa/ha/ha/';</script>`
Debería ser: `&lt;script>window.location.href='http://evil.site/mwa/ha/ha/';&lt;/script>`, o de lo contrario puede suceder un resultado no deseado. Caracteres especiales serían '<'(lt:Lesser than), '"'(quot), y '&'(amp).
  - Adicionalmente, debido a fallos de conversión entre codificaciones de caracteres (por ejemplo entre encodings Cp1512 y UTF-8), conviene representar todos los caracteres que puedan suponer problemas (todos aquellos fuera del rango 0x20-0xff de Unicode), como entidades. Genéricamente será &#ddd;, donde dddd es un dígito decimal (o &#xhhhh;). Los caracteres más habituales tienen nombres prefijados. Por ejemplo nbsp, aacute, ntilde

- Podría ser interesante elaborar una página auto-descriptiva de los elementos de formato.

----

Observo que el elemento `<u>` ha cambiado de significado en HTML 5. Ahora es una especie de texto anotado

### enlaces
- [W3Schools - XML Syntax Rules](https://www.w3schools.com/xml/xml_syntax.asp)
  - También [W3Schools - The building blocks of XML documents](https://www.w3schools.com/xml/xml_dtd_building.asp)
- [Wikipedia - Referencia de entidades XML/HTML](https://en.wikipedia.org/wiki/List_of_XML_and_HTML_character_entity_references)
- HTML
  -



### Actividades
#### Aplicación sencilla de lo explicado
Aplicación de elementos de formato descritos en una página de temática elegida por los alumnos.

Posiblemente sea preferible que lo hagan por parejas, aunque quizás en tal caso habría que hacer dos páginas, y en cada cual uno tomase los mandos y el otro hiciera de co-piloto.

#### Arreglar páginas rotas
Dar una página a la que le falten elementos, o estén mal nombrados, o no estén bien emparejados.

#### Ingeniería inversa
Dar una página que esté ligeramente por encima de sus posibilidades. Por ejemplo [Pencil And Paper Games](http://www.papg.com/)

Que identifiquen qué elementos o hemos visto, que indiquen para qué sirven (si lo sabían, o lo han averiguado, y dónde), o que especulen de para qué sirven.


<!--
  * Sintaxis minima de HTML
  ** Elementos, atributos, secuencias de escape
  ** elementos estructurales: html header title body
  ** Estructura del texto (h1 h2 ... p br) Notar que el espaciado se simplifica.
  ** enlaces (solo para enlazar, no para definir un a name="").
  ** URL
  	Partes: protocolo, host, recurso etiqueta parámetros
  	Escapado URL
  	Relacionado:URI

  * Referencias

  (Actividad) Se les puede mostrar una página web relativamente sencilla (por ejemplo ), para que hagan una ingenería inversa, indiquen cuáles son los textos mostrados y cuál es la  función de cada elemento.
  El sitio es peculiar porque en vez de texto ordinario contiene principalemente imágenes, y contiene capas (div) y utiliza hojas de estilo, y otros elementos que veremos posteriormente.

  #Formato HTML parte 2 - Formato básico
  @@@
  El objetivo sería comprender y prácticar los elementos básicos de formato directo (b i font center ...).
  @@@ Habría que proveer algún programa de edición sencillo
  Imágenes a nivel básico
  Tablas a nivel básico
  También convendría introducir el concepto de "separation of concerns" en el sentido de que introducir formatos específicos en cada elemento introduce redundancia, una posible falta de uniformidad, y dificultad de actualización.

  Se pueden explicar también los conceptos de Cumplimiento de estándares del lenguaje. usabilidad y accesibilidad: Una página mal formateada o con elementos no estándar puede no ser entendida por algunos navegadores o crawlers. El usuario debe poder encontrar la información que busca e interaccionar fácilmente con la página. La página poder visualizarse correctamente sin imágenes (por ejemplo un terminal de texto como Lynx), en grises (imprimir), en pantallas pequeñas.

  Actividad: Realización de una página con elementos básicos
  Para los que terminen rápido se les podría suministrar otra página para que hagan ingeniería inversa. Por ejemplo la página de enlaces, o una plantilla de página con el estilo Bootstrap

-->
