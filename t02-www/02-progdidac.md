TIC 2º Bachillerato - Bloque publicación Internet - Programación didáctica
## Referencias normativas
* Curriculum Oficial Bachillerato
  * España, MECD, RD 1105/2014 publicado a 3 de enero de 2015 p. 534
  * Aragón, Orden ECD/494/2016 publicada a 3 de junio de 2016, p 14.377

  @@@Enlaces

## Descripción del grupo
No se aprecia ni se me ha advertido de ninguna diversidad ni necesidad especial.
Se espera un buen nivel de conocimentos previos y de motivación intrínseca. Se ha observado que los alumnos están acostumbrados a trabajar con ordenadores y en equipo. La formación que he observado en TIC de 1º de Bachillerato es buena, y han elegido esta asignatura frente a otras alternativas.
Tampoco se me ha advertido que haya alumnos que sobresalgan especialmente, de modo que tampoco es necesario preparar ningún material especial.

## Descripción de la materia
Las tecnologías web, y concretamente la web 2.0 son conceptos novedosos, en evolución, y hasta cierto punto discutibles (¿Qué es realmente útil y qué es márketing e improvisación?). En este sentido resulta un hándicap que no exista ningún libro de texto que merezca la pena seguir, y que en cierto modo tengamos que enseñar elementos en los que hemos sido autodidactas y que es preciso un esfuerzo extra por verificar (elementos que cambian, o aprendidos de fuentes menos fiables).

Por otro lado se trata de un área en la que hay un gran esfuerzo por elaborar buenos materiales. Es preciso basarnos en éstos en la medida de lo posible para hacer la tarea menos ardua y de mayor calidad (si bien a veces es complicado encontrar alguna cosa muy concreta, como por ejemplo una programación didáctica bien desarrollada de la asignatura).

Las TIC y particularmente las tecnologías web son habilidades muy demandadas laboralmente. Y adicionalmente, implican unas competencias de estructurar la información (faceta semántica de la web) y de presentar dicha información de una forma funcional, estética y flexible, que será de gran utilidad en cualquier área del conocimiento en la que se vayan a especializar.

Adicionalmente en este bloque se trata de cubrir el uso de herramientas de trabajo colaborativo


## Descripción de los medios
El aula SEIN de La Salle cuenta con ordenadores con sistema Windows para todos los alumnos. Hay proyector y acceso a internet para poder mostrar presentaciones y consultar recursos en línea. El aula es espaciosa y la distribución de los ordenadores facilita poder controlar a los alumnos y diversos agrupamientos.

## Secuenciación
Esta unidad es posterior a una primera unidad de programación (cuya evaluación finaliza el 21 de noviembre).
Al ser la fecha límite de finalización el 18 de diciembre (lunes), la duración de la unidad queda limitada
La asignatura se imparte en 3 horas semanales, los martes, miércoles y jueves.
El calendario quedaría de la siguiente forma:

|   | L | M | X | J | V |
| - |:-:|:-:|:-:|:-:|:-:|
| Nov | 20 | 21                | 22 <br/> Sesión 1 | 23 <br/> Sesión 2 | 24 |
|     | 27 | 28 <br/> Sesión 3 | 29 <br/> Sesión 4 | 30 <br/> Sesión 5 |  1 |
| Dic |  4 |  5 <br/> Sesión 6 | **6**               | **7**               | **8** |
|     | 11 | 12 <br/> Sesión 7 | 13 <br/> Sesión 8 | 14 <br/> Sesión 9 | 15 |

De esta manera se espera que el número de sesiones (de una hora) sea 9.

Se espera que en estas sesiones se cubran los conceptos del lenguaje HTML y las hojas de estilo CSS, de modo que por ejemplo puedan confeccionar documentos de la misma complejidad que los trabajos que presentan en las distintas asignaturas.

Se mostrará a los alumnos algo de código **PHP** y **javascript** para la generación de páginas dinámicas, y responder a eventos de usuario, dado que habla en el Curriculum Oficial de la *Web 2.0*, y previamente han visto programación en *Python*. A la hora de plantear **ejercicios** se ha de asumir que es un **primer contacto**, de que los alumnos carecen de experiencia de la sintaxis y de la *API* de estos nuevos lenguajes, y realmente no nos proponemos que sean capaces de manejarlos con soltura.

La velocidad a la que cubramos la base teórica y los ejercicios básicos es una incógnita. Por comodidad en vez de sesiones divido el tema en apartados (la palabra *sección* es demasiado parecida a *sesión*).

### Apartados programados

1. Introducción
	~ Qué se pretende con esta unidad. Importancia del tema y relación con otros temas. Tantear conocimientos previos de los alumnos. Tantear qué temáticas les pueden motivar más a la hora de plantear ejercicios.
2. Breve historia del WWW
	~ Contexto tecnológico y necesidades en su surgimiento. Nuevas necesidades y evolución. Mejoras en la capacidad de formato y en la semántica. Utilidad para el trabajo colaborativo.
3. Tecnologías involucradas
	1. Hiper-referencia. URI(URN y URL). Direcciones locales. Otros elementos (mailto,data)
	2. Protocolo HTTP. Ejemplo de petición GET. Códigos de respuesta. Cookies. Peticiones POST
	3. Lenguaje HTML. Lenguajes de marcado (SGML,XML). Partes estructurales (declaración,prólogo,cabecera,cuerpo)
	4. Generación dinámica de recursos. De ejecutar un comando por petición (CGI), a los servidores de páginas (PHP,Java,ASP), a los sistemas distribuidos.
4. Lenguaje HTML-Formato básico
	1. Elementos y atributos
	2. Códigos de escape y comentarios
	3. elementos con equivalencia directa en el procesador de texto (b i u font s tt pre). Por qué se desaconsejan.
	4. El enlace. Anclas. Atributo id.
	5. Listas. Numeradas, no numeradas, definiciones.
5. Lenguaje HTML-Tablas
	1. Formato sencillo (y antiguo de tablas). table tr th td
	2. Formato nuevo. thead tbody tfoot caption
	3. Uso histórico (y desaconsejado) para layout de páginas
6. Lenguaje HTML-Formularios,javascript
	1. Ejemplo formulario con elementos variados
	2. Ejemplo formulario con validación
7. Lenguaje HTML-Formato semántico
	1. Formato directo vs formato indirecto
	2. Equivalencia con procesador de texto.
	3. Ejempos de uso de strong, em, cite, blockquote, code
	4. Títulos h1..h7. Table of Content.
8. Formato con CSS-Conceptos base
	1. Formato directo utilizando atributo style
	2. Formato indirecto utilizando declaraciones CSS. Selector CSS
	3. Formato selectivo utilizando atributos class y id./ai-dih/
	4. concepto de *cascade* (hojas heredan de tronco). Prioridades(element < class < id < !important).
9. Formato con CSS-Conceptos adicionales
	1. Elementos div y span para personalizar estilos. Uso semántico. Diferencia elemento de bloque y elemento inline.
	2. Ejemplo de uso de div para personalizar el layout de una página.
	3. directiva *media*. Aplicación para personalizar impresión.
	4. Tamaños: px,pt,cm,em,%
	5. Modelo de tamaño de caja: margin,padding,border
	6. Tipos de fuentes: serif, sans-serif, cursiva, monospace
	7. colores: especificación de 3 y 6 dígitos. color picker. Listas nombres colores.
	8. Colores: especificaciones alternativas. transparencia, hsl.


### Contenidos no programados en este documento
Los contenidos no cubiertos del Bloque 2 de la asignatura (según Curriculum Oficial en el BOA de 3 de junio de 2016) quedarán a cargo del profesor titular (Víctor).

| Estándar de Aprendizaje | ¿Cubierto? |
| ----------------------- |:-----------:|
| TIC.2.1.1. Explica las características relevantes de las web 2.0 y los principios en los que esta se basa | Sí |
| TIC.2.2.1. Diseña páginas web y blogs con herramientas específicas analizando las características fundamentales relacionadas con la accesibilidad y la usabilidad de las mismas y teniendo en cuenta la función a la que está destinada | Parcial |
| TIC.2.3.1. Elabora trabajos utilizando las posibilidades de colaboración que permiten las tecnologías basadas en la web 2.0 | No |

Hay algún contenido adicional en ../99misc#ContenidosDescartados (Motores de búsqueda,tecnologías particulares, ...)


### Competencias
Se encuentra descrito en ./101-introduccion.md
Adicionalmente se podría detallar en relación con el marco digcomp 2.0 europeo:
@@@
Según [DigComp 2.0](https://ec.europa.eu/jrc/en/digcomp/digital-competence-framework)
* 1) Information and data literacy: Cómo se almacenan los contenidos digitales
* 2) Communication and collaboration
* 3) Digital content creation
* 4) Safety
* 5) Problem solving

* [MECD, Competencias Clave](https://www.mecd.gob.es/educacion/mc/lomce/el-curriculo/curriculo-primaria-eso-bachillerato/competencias-clave/competencias-clave.html)
