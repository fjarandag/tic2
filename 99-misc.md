tic2/99-misc.md
Anotaciones variadas que no pertenecen a otros apartados

[TOC]

### Editores de texto
Víctor me indica que en los ordenadores está instalado Sublime Text. Es bastante ligero e incluye algunas funcionalidades avanzadas.
Los editores que tenía instalados eran jEdit y Notepad++. Parecen algo inferiores en funcionalidades.
Una alternativa interesante pudiera ser Atom. Es libre, pero parece excesivamente pesado (> 100 MB)

Las características preferentes serían:

* Buen resaltado de texto
  * Un plus sería que dentro del HTML se resalten bien el CSS y el javascript embebidos
* Funciones de auto-completar+snipplets
* Auto-save

----
Más información

| Editor | site | Thirds |
| ------ | --------------------------- | ----------------------------------------------------------- |
| Sublime Text | https://www.sublimetext.com | [@Wikipedia/en](https://en.wikipedia.org/wiki/Sublime_Text) |
| Atom | https://atom.io/ | [@Wikipedia/en](https://en.wikipedia.org/wiki/Atom_(text_editor)) |
| Notepad++ | https://notepad-plus-plus.org/ | [@Wikipedia/en](https://en.wikipedia.org/wiki/Notepad%2B%2B) |
| jEdit | www.jedit.org/ | [@Wikipedia/en](https://en.wikipedia.org/wiki/JEdit) |
| Comparación editores texto | [@Wikipedia/en](https://en.wikipedia.org/wiki/Comparison_of_text_editors) |  |

### Editores de HTML
Para elaborar HTML la curva de aprendizaje será menor con un entorno específico (estilo nvu o DreamWeaver).
Sin embargo no tengo costumbre de utilizar dichos entornos, considero conveniente que conozcan *las tripas* del HTML, en las aulas no tienen nada de eso instalado. Y no van a codificar tanto HTML como para instalar nuevo software.

Tal vez una alternativa sería que llevaran un programa de esas características en una unidad USB. Miguel S. me comentó de haber utilizado Dreamweaver (en un *pincho*), pero en el sitio de Adobe lo que encuentro es un instalador para trabajar en modo SaaS(Software as a Service/Cloud), o eso es lo que interpreté. No he investigado más.

### Metodologías didácticas innovadoras
#### Planeado
* Se pretende que las presentaciones teóricas estén apoyadas por materiales de apoyo adecuados (transparencias, ejemplos, *cheatsheets*).
* Se pretende que las presentaciones teóricas sean interactivas con los alumnos, formulándoles cuestiones variadas (por ejemplo mostrando un procesador de textos, y preguntándoles qué elementos de formato les parecen importantes)
* Se intentará relacionar los conceptos nuevos con aquellos que ya conocen.
* Se intentará que los ejemplos y los ejercicios
  * Sean relevantes y/o significativos (que o bien sea una cultura general útil, o )
  * Que puedan estar relacionados con otros conocimientos
* Se procurará alternar teoría y práctica.
* Se procurará disponer de diversidad de ejercicios, que supongan retos de distinta dificultad.

#### Descartado?
* Trabajo por proyectos, o actividades que excedan de las dos sesiones
* Flipped classroom y similares: Sería optimista que traigan la lección aprendida de casa, y que un profesor neófito tenga capacidad para dinamizar un debate.

### Markdown
Me encuentro que no me he preocupado de si el markdown que escribía se mostraba o no correctamente.  
Es un verdadero dilema porque existen múltiples dialectos de Markdown (original, Common Markdown, Git Flavored Markdown ... ) y múltiples implementaciones.  
Considero quedarme con GFM (GitHub), que es renderizado por el paquete  Markdown Preview de Sublime Text.

* [GFM specification](https://github.github.com/gfm/)
* [CommonMark](http://commonmark.org/)
* [CSS-Tricks - Choosing the Right Markdown Parser](https://css-tricks.com/choosing-right-markdown-parser/)
* [Wikipedia - Markdown](https://en.wikipedia.org/wiki/Markdown)

### Contenidos descartados
Hay conceptos que me parecen interesantes, pero que posiblemente exceden mi alcance.
* Buscadores. Registrar páginas, Bots, Crawlers, robots.txt, nofollow. SEO
* Ejemplo sencillo de cómo montar un servidor sencillo, configurar cuentas ftp.
* Herramientas de colaboración y publicación. Wikis, repositorios. Uso de Blogs, foros, Sitios de preguntas (Quora,StackExchange),redes sociales. Poner en pie una Wiki e incluir los materiales de este bloque/asignatura. Podría dar lugar incluso a una actividad a lo largo del curso e incluso interdisciplinar (que presenten el trabajo de otras asignaturas a través de una wiki).
* Otros lenguajes de marcado habituales: Markdown, (Media)Wiki. Se puede pedirles que conviertan un documento en otro formato (por ejemplo un apartado del libro del XHTML+CSS a Markdown)

### 1111
Quizás estar haciendo una programación y refinando detalles instrumentales, acaba siendo perderse en preliminares y estar a vísperas sin tener ningún *producto* preparado.
Es como quien al quedarse en la intemperie pretende construir un edificio con cimientos en vez de constuir una choza con cuatro palés y plásticos. Quizás la choza haya que tirarla, pero eso mismo sucede con los planes apriorísticos y ni tan siquiera cobijan.

### Nivel exigido
Considerar que podemos encontrarnos con distintas situaciones por parte de los alumnos:
* Alumnos que se aplican a lo que se dice. y alumnos que parecen tener más interés en cualquier distracción, e incluso desconcentran a otros.
* Alumnos avispados que lo entienden y lo resuelven todo a la primera, y otros que son incapaces de repetir el ejemplo que justamente se les ha explicado y tienen delante de sus narices.
* Alumnos que ya conocen bien el tema, y otros que carezcan incluso de las premisas (por ejemplo que no sepan utilizar un editor de texto).

La Informática/Tecnología no se le da a todo el mundo igual de bien. Y los alumnos deben enfrentarse a retos acordes a su nivel de competencia para mantener el interés. Obviamente quien haga un trabajo más complejo debe tener alguna bonificación en la calificación. Por ejemplo con un trabajo básico no se pueda puntuar más allá de notable, con un trabajo más completo se pueda conseguir la calificación completa, y con uno excelente se pueda incluso compensar en otros apartados.

Por otro lado el nivel de exigencia puede ir acorde con la dificultad elegida del ejercicio. A un alumno avanzado le corregiremos aspectos que a un alumno normal no le tendríamos en cuenta. Podría suceder que un alumno que elija un trabajo por encima de sus posibilidades puntúe menos que si hubiera elegido la *tabla de salvación*. No obstante esto complicaría la elaboración de unos baremos/estándares objetivos, y se correría el riesgo de que se perciba que la penalización excede a la bonificación.

Idealmente aprobar no debería ser superar un listón arbitrario. Debe ser suficiente con demostrar la comprensión de los contenidos básicos y saber plantear los problemas habituales.

### Pendiente de incorporar

<!--
	* Un poco de historia
** TCP/IP
    Prerrequisitos técnicos. Asignación de direcciones IP y enrutamiento. Nombres de dominio.
** HTTP+HTML
    Veremos en más profundidad más adelante
Se podría introducir la foto de Roberts,Cert,Kahn y Berners-Lee del Premio Príncipe de Asturias de 2002. Se puede comentar cómo en esta disciplina es tan joven que muchos de los artífices están todavía vivos y activos. Se puede comentar que al igual que estos distinguidos señores, los alumnos de aquí a 10 años pueden estar trabajando en algo grande.
** Contenidos dinámicos
	Tecnologías en el lado del servidor (CGI, etc) y en el lado del cliente (javascript, SWF ...).
	Servicios: Buscadores (Altavista, etc), portales (Yahoo, msn, etc), webmail, foros, redes sociales ...
		Inicialmente ser portan servicios existentes en el mundo físico (brick and mortar), pero la tecnología permite mayor funcionalidad e inmediatez.
* Cuestión modos de publicar contenidos (qué, cómo, dónde)
	Respecto al qué cabría mencionar netiqueta. Que el contenido aporte algo significativo, que respete los derechos de los demás.
	Respecto al cómo, nos referiríamos al formato. Ya no se clava un manuscrito a la puerta de una iglesia. Se pretende que seamos capaces de publicar un texto imprimible, debidamente estructurado y formateado, utilizando un lenguaje y unas convenciones adecuadas (equiparables a las requeridas por algunos publicadores, estilo APA v.6, o IEEE), e incluyendo contenidos gráficos e incluso audiovisuales.
	Respecto al dónde, depende en gran medida el alcance que deseamos tener. No es lo mismo publicar alguna foto personal o cómo nos sentimos en un círculo cercano, que compartir una información u obra en un estilo más profesional. No es lo mismo publicar contenidos pequeños y ocasionales, que publicar un artículo de mayor entidad, o concierta regularidad.
	(Actividad) Se podría plantear la cuestión de qué tipo de contenidos son adecuados para whatsapp,facebook,twitter,reddit,un blog, una página/sitio personal, o a través de una editorial técnica especializada (journal,proceeding,etc)
[] Desarrollar más la actividad

* Otra posible actividad inicial es pedir a los alumnos que pongan por escrito qué esperan aprender/conseguir con esta unidad. Puede tener aspectos positivos como incitar a los alumnos a plantearse y expresar sus metas, y mejorar su  motivación intrínseca. Sin embargo por otro lado le estamos obligando a "desnudarse" y nos estamos inmiscuyendo en sus razones personales, que quizás no tenga claras.


#La World Wide Web
@@@ El término no es particularmente específico. La alternativa de "Los protocolos de Hiper-texto" no parece mejor.
* Orígenes/Contexto
	Hacia los años 1980-1990 los ordenadores personales (PC's) comienzan a popularizarse. Las unidades de cinta de cassette van sustituyendose por diskettes (de 5,25" y de 3,5"). Los discos duros reducen su tamaño desde el de un tambor de lavadora al de 5,25". Los terminales de usuario pasan de ser de solo texto y fósforo verde a permitir colores y modos gráficos (CGA,VGA). Las impresoras matriciales son artefactos ruidosos, e inicialmente solo escriben en papel continuo. Pese a ello los formatos y el software de edición de texto (TeX,Wordperfect) son un poco anteriores.
	** https://www.zetta.net/about/blog/history-data-storage-technology
	El acceso a internet también está en pañales. En universidades y otros centros de investigación, el uso del correo electrónico, los servidores FTP y grupos de noticias es una novedad.
	Es en el ámbito académico: CERN:HTTP+HTML, U.Minnessotta (Gopher) donde aparecen los primeros documentos electrónicos con referencias cruzadas
	
** https://home.cern/topics/birth-web (más recomendado)
** https://home.cern/cern-people/opinion/2014/04/internet-prehistory-cern (menos recomendado, simplemente de cómo recientemente se había pasado de un protocolo propietario [DECNet] a TCP/IP)

* Definición y ejemplo HTML (HolaMundo.html)
* Definición y ejemplo HTTP (Get HolaMundo.html)
* Hiper-Texto
	Relación con Memex, Xanadú, etc (https://en.wikipedia.org/wiki/Project_Xanadu).
	Relevancia en el ámbito académico de citar y referenciar.
		"If I have seen further, it is by standing on the shoulders of giants"
		Cita atribuida a Isaac Newton, pero probablemente anterior (https://en.wikipedia.org/wiki/Standing_on_the_shoulders_of_giants).
		Dar crédito a los predecesores, demostrar que el trabajo está bien fundamentado, facilitar a los investigadores consultar las fuentes y a través de éstas, otros trabajos relacionados.
* Markup
	Marcado (formato, etiquetas). Relación  con SGML, XML,XHTML
	A diferencia de formatos binarios, facilita ser leído y escrito por humanos
* Definición Lenguaje, Transferencia, Protocolo?
	Expresar un contenido (hechos, conceptos) con palabras. En el ámbito de la informática suele implicar una estructura/sintaxis, unas palabras y símbolos reservados
	Se encarga de que el contenido llege íntegramente a su destino, en contraste con protocolo de direccionamiento (IP).
	Protocolo. Un procedimiento a seguir. En este caso entre 2 máquinas para cumplir un propósito determinado, previendo casuísticas e incidencias que pudieran surgir.
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
** RFC HTTP
** W3C HTML

(Actividad) Se les puede mostrar una página web relativamente sencilla (por ejemplo Pencil And Paper Games (http://www.papg.com/) ), para que hagan una ingenería inversa, indiquen cuáles son los textos mostrados y cuál es la  función de cada elemento.
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

#Formato HTML parte 3 - Estilos CSS básicos
@@@
Concatenando con lo anteriormente mencionado de separación de conceptos
Uso preferible strong > b; em > i
uso de div (bloque) y span (inline) similar a los estilos de párrafo y de  carácter de Word o LibreOffice.
Mostrar cómo se afecta al estilo de un elemento predefinido, de un elemento con una clase, y de un elemento con un identificador único).

Actividad: Modificación de la página anterior (elementos básicos)
Si sobra tiempo, preparar una página en Python o PHP. Mostrar la página de muestreo de estilos.

#Formato HTML parte 4 - Estilos CSS: fuentes, espacios y colores.
@@@
Puede ser un poco largo. Lo importante es que se familiaricen y comprendan los conceptos, no que los memoricen.
* Fuentes
** Font-face. Interesa conocer las familias de fuentes. Se especifica un orden de precedencia.
*** Monospaced: Fuentes con anchura fija. Adecuadas para código de programación y otros textos que deben mantener una alineación basada en espacios. Los otros font-face, por estética y aprovechamiento del espacio utilizan anchuras variables.
*** serif: Fuente de estilo formal con serifa/gracia, por ejemplo Times New Roman.
*** sans-serif: Fuente de estilo formal sin adornos. Por ejemplo Arial.
*** cursiva: No confundir con itálica. Estilo de letra de apariencia manuscrita.
*** ...
*** font-weight:bold en sustitución de negrita, font-style:italic en sustitución de itálica. Permiten otros grados.
*** text-decoration: none|overline|underline|line-through tachado,subrayado, etc.

* Tamaños. Los tamaños se miden en em, puntos, píxels y porcentajes.
** punto = 1/72 pulgada - Origen de diseño de medios impresos, medidas imperiales. No escalable.
** píxeles = 1 celda de pantalla. convenio 16px=12pt? Uso para diseños exactos en pantalla. No escalable
** em. De 'em' la anchura de la letra M. Escalable (por el usuario).
** %. Tamaño relativo a lo que sería un texto o espacio (heredado de los niveles superiores).
** https://kyleschaeffer.com/development/css-font-size-em-vs-px-vs-pt-vs/
** Puede ser lioso. Resulta conveniente depender de lo que establezca un diseñador (o plantilla preestablecida).
* font-size
* Tamaños y separación de cajas
** width, height, margin,padding, border @@@ Hace falta una buena imagen.
** El padding es como el acolchado de un abrigo o el plástico de burbujas que proteje el contenido de una caja.

* Colores
** Distintas formas de especificarlos: #fff, rgb(255,255,255),hsl(359,1,1), literales(red,green,blue,gray ...).
*** El RGB (Red,Green,Blue) es más intuitivo, obtenemos colores sumando componentes.
*** El HSL (Tinte, saturación, luminosidad) contiene el componente de luminosidad que equivaldría al tono de gris equivalente. Podría interesarnos por ejemplo si queremos asegurarnos de que los colores contrastan suficientemente entre ellos.
*** https://en.wikipedia.org/wiki/HSL_and_HSV
** https://en.wikipedia.org/wiki/Web_colors


@@@ Enlace a un color-picker

Posible actividad. Dado un código (python,php) que genera un HTML con una tabla de muestreo de colores, y una función que calcula la luminancia a partir del rgb, modificar la  página para que el color del texto dentro de la celda de color sea blanco o negro en función de si la luminancia fuera menor o mayor que 0,5. Ajustar este umbral (0,5) arriba y abajo para que el contraste sea óptimo en el umbral.
	Esta parte de ajustar el umbral estaría relacionada con el concepto de que nuestra percepción es logarítmica, mientras que algunos dispositivos funcionan de forma lineal. Estaría relacionado con el concepto de corrección gamma (https://en.wikipedia.org/wiki/Gamma_correction). No obstante es posible que los monitores ya corrijan este fenómeno (sucedía con los CRT).

Si sobra tiempo se puede suministrar una lista de colores con nombres propios que se muestran en una tabla con sus atributos rgb. Se puede modificar para añadir nuevas columnas a la tabla: Color definido como RGB en vez del nombre (para verificar que coincide), y una conversión a HSL.
	https://stackoverflow.com/a/596243/1117429
>	Luminance (standard for certain colour spaces): (0.2126*R + 0.7152*G + 0.0722*B)
>	Luminance (perceived option 1): (0.299*R + 0.587*G + 0.114*B)
>	Luminance (perceived option 2, slower to calculate):  sqrt( 0.299*R^2 + 0.587*G^2 + 0.114*B^2 )

Otros: https://stackoverflow.com/questions/20423641/php-function-to-convert-hsl-to-rgb-or-hex
realmente


#Formato HTML parte # - Layout de páginas
@@@
El layout es problemático. Mi experiencia al respecto es frustrante. El consenso entre los diseñadores es desaconsejar el layout utilizando una tabla (por ejemplo si se quieren ocultar barras de navegación para imprimir, o por supuesta accesibilidad). Sin embargo con capas es menos intuitivo ajustar y mantener los distintos elementos de la página (cabeceras, pies, barras laterales) en su sitio.

No siendo un experto, es un tema en el que no entraría.
No obstante conviene enseñar cómo llamar cada elemento de la tabla. Cabecera, pie, menús de navegación, breadcrumb.
Estos elementos normalmente deberían venir definidos en la hoja de estilos que vayamos a utilizar.

#Formato HTML parte # - Microformatos, widgets, SEO
@@@
Es posible añadir a nuestra página meta-información que facilita a los navegadores y a los buscadores encontrar informaciones concretas. Por ejemplo opengraph facilita el darle a compartir a facebook. Podemos incluir información geográfica, etc de una tienda o restaurante. o la vCard en un curriculum vitae.

Respecto al Search Engine Optimitation, conocer que los resultados dependen de las referencias que nos hagan (si queremos ser relevantes nos tienen que enlazar desde otros sitios. Y que hay gente que trata de "trucar" el sistema (y envían muchos correos promocionando tales servicios), pero el propio google (y otros buscadores) están interesados en detectar las "granjas de enlaces" y otros artificios, y al final lo realmente interesante es generar contenido de calidad, intercambiar enlaces con otros autores realmente relacionados, y en todo caso pagar publicidad a Google.

Ejemplo propio. A pesar de tener el sitio javier-aranda.com y algún contenido de valor añadido (aunque nada relevante) en google aparecen antes que yo otros Javier Aranda. Podría hacer cosas para aumentar mi relevancia, pero no me parece que realmente merezca la pena el esfuerzo.

#HTML dinámico #
@@@
Algún ejemplo con javascript.
Por ejemplo podemos tener una página con un formulario, donde el javascript verifique los campos

#Publicación en diversas plataformas.
@@@
Existen distintas plataformas en las que se puede publicar información.
No obstante, en general las características de publicación son un subconjunto de las de HTML+CSS, y en el caso de que sean algo distintas (p.ej Templates en MediaWiki) probablemente son demasiado específicas.

Sin embargo podría ser interesante que se familiarizasen con la sintáxis de Markdown (como por ejemplo para tomar notas de texto en un formato que sea formateable de una forma estándar).

* publicación de HTML. Se les puede habilitar un servidor con cuentas FTP y rutas separadas para que prueben a subir su contenido.
* Configuración y Publicación en un blog (blogger, wordpress)
* Publicación en una wiki
* Foros, redes sociales - Puede tener interés la idea de la configuración de seguridad (quién lo puede ver), cómo hacemos para 
* Generación de un sitio con maven, o algún cms(p.ej. Joomla)?
* ...

#Actividades

* Crear un sitio el


	-->