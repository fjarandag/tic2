#Descripción
Estas pruebas están pensadas para utilizarse como introducción de tecnologías WWW para alumnos de TIC2.
Se asume que los alumnos tienen algunas nociones de programación y el código existente (javascript, php) les resultará significativo.
Los ejemplos representados son en cierto modo autoreferentes. En cierto modo los propios ejercicios construyen una referencia útil.
Se intenta proveer distintos niveles de ejercicios. Desde tocar algún formato sencillo a re-estructuraciones y mejoras que impliquen un mayor dominio, o incluso que les obliguen a buscar  información en Internet.

#Contenidos
* Demostración de enlaces y PHP
** `links0.html` Una página XHTML con enlaces relevantes. Contiene bloques div, listas y enlaces.
** `links0.php` Código PHP que generaría links0.html
** `links1.php` Evolución sobre links0. Modularidad (partes reutilizables se externalizan). Uso de CSS.
Sería adecuado para empezar a ver las 'Developer Tools' de los navegadores (Chrome o Firefox).
Cómo permiten investigar qué estilo está aplicado a un elemento y de dónde proviene.
* Demostración de tablas,colores y javascript
** `colores0-estatico.html` Catálogo de colores en versión estática
** `colores1-safe-js.html` Catálogo de colores seguro generado con javascript.
Contiene la fórmula compleja (W3C, con potencias) para calcular la luminosidad.
Puede servir para comentar cómo nuestra percepción de la luminosidad no es lineal, ni los distintos componentes afectan igual. Corrección Gamma.
Puede ser útil para mostrar el depurador de javascript.
* Demostración de familias de fuentes
** `fuentes0-estatico.html` Catálogo de fuentes agrupada por familias.
* `seq\seq.php` Mini-utilidad de generación de números de secuencia.
Obtiene parámetros de entrada. Los sanitiza. Uso de ficheros para dato elemental y bloqueo. Facilita copiar cadenas generadas.
Sirve para explicar el concepto de inyección de código (javascript injection, etc).


#Ideas de ejercicios
## Triviales
Tareas de una sencillez sonrojante, ser capaz de reconocer los conceptos elementales y realizar las tareas más básicas.
Optaría por no realizarlas, o como caso especial. Un alumno que no sea capaz probabemente carece de base suficiente.
* Hacer una copia de `links0.php` y hacer modificaciones específicas:
Cambiar el título. Cambiar en el grupo segundo de enlaces uno de los enlaces por `http://eltiempo.es` (por ejemplo).

## Intermedios
Aplicar en tareas asequibles los conocimientos presentados.
* Sobre links1, hacer que el título se especifique desde la página pedida (la homóloga de `links1.php` y no desde `links1-output.php`).
* Hacer que la etiqueta del grupo de enlaces WWW se muestre con fondo verde (Green #008000)
* Probar a crear una página `linksNested0.php` con grupos anidados.
** Probar a modificar el estilo de los grupos dentro de otros grupos (clear:both?)
** ¿Qué sucede si anidamos un grupo o un ascestro suyo dentro de si mismo?
* Habiendo dispuesto un código alternativo comentado en PHP,HTML, o CSS; que descubran y
expliquen qué sucede al realizar el cambio.
* Replicar conceptos en escenarios parecidos.
** Realizar la generación de código de `links0.php` en Python (u otro lenguaje que conozcan).
** Realizar la generación de la tabla de `colores1-safe-js.html` en PHP u otro lenguaje.
** Realizar una tabla de colores de características distintas
*** de 4x4x4, de colores HSL
** Replicar la generación de la tabla de colores seguros con los colores con nombres preestablecidos (`colores2-nombres-js.html`)
** Replicar la generación con javascript al catálogo de fuentes de letra.

## Avanzados
Ser creativo y resolutivo, relacionar con otros temas, ser capaz de buscar información útil y hacer aportes valiosos.
Opcionalmente, ser de ayuda a otros compañeros (pero no hacerles el trabajo, habría que verificar in situ),
o colaborar entre varios en un mini-proyecto.
Quizás disponer de un "arenque rojo". Una tarea que no se espera que sean capaces de completar. Se evalúa por lo que sean capaces de hacer.
* Sobre página de enlaces
** Definir y hacer uso de nuevos tipos de elementos
*** `MenuSeparador`, para crear una separación visible (como una `<hr/>`) dentro de una lista.
*** `MenuHtml` para introducir HTML literal, de forma que podamos definir elementos personalizados
**** Por ejemplo un input para consultas parametrizadas (por ejemplo hacia DRAE,dictionary.com, etc.
**** Por ejemplo para generar y mostrar un código QR (como en https://davidshimjs.github.io/qrcodejs/).
**** Por ejemplo para desplegar un diálogo para copiar un literal (como en `seq/seq.php`).
** Introducir comportamiento de expandir y contraer grupos haciendo clic en la etiqueta.
* Sobre las páginas de colores
** Por ejemplo reestructurar la tabla de colores seguros para que en vez de ser una tabla de 6 filas y 36 columnas, sea 6 bloques div flotantes, conteniendo cada uno una tabla de 6x6.
** Modificar la tabla de colores seguros para que al pasar el cursor sobre una celda se muestre el dedo de pinchar, y al pinchar se abra el diálogo con información adicional.
** Crear una tabla de colores HSL (y que se figuren qué orden en las dimensiones y qué cambios en la estructura deberían hacer).
** Crear una tabla de colores con una progresión geométrica para acomodar la corrección gamma(2.4), en vez de progresión lineal.
Por ejemplo, dados componente c en rango real [0..1], si aprox c'=c^2.4, entonces c=c'^(1/2.4)en [0..5] v =
** BenchmarkDiscoteca: Dibujar 1000 bloques div rectangulares (40x25: 2,5%ancho 4% alto,sin márgenes) de colores aleatorios.
Contar cuántas veces se recalcula la página en 10 segundos. Mostrar un diálogo con el resultado.
 

## Abiertas
No tan orientadas a que solucionen problemas concretos si no a que exploren y sean capaces de expresarse.
* Por ejemplo que miren en algunos sitios web, el tamaño de las páginas y los recursos descargados, qué hojas de estilo utilizan, si son capaces de identificar cuántas fuentes de letra utilizan ...
* Que busquen y referencien ejemplos de uso significativos de distintos elementos de estilo de HTML (cite, blockquote, pre/code, em, strong ...) y que describan cuándo las utilizarían en vez de texto normal o de estilos alternativos (por ejemplo em/i frente a strong/b).


