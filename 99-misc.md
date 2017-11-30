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

#### Buscadores
* Qué resultados son más relevantes en un buscador. Páginas bien construidas. Referencias entrantes. Contenidos destacados en una página.
* Funcionamiento de los bots/crawlers. Ejemplo y razón de uso de robots.txt y nofollow para evitar indexación (zonas que no producirían contenidos que queramos que se indexen, impliquen un riesgo. En los comentarios de blogs y foros evitar el abuso de spammers).
* Técnicas SEO buenas: Que las páginas estén bien construidas (estándares, información semántica-microformatos), intercambio de referencias natural entre socios/colegas, URLs significativas, análisis del tráfico entrante, concordancia de las palabras clave utilizadas con los términos por los que la gente busca. Posiblemente *comprar palabras* en el buscador.
* Técnicas SEO abusivas: "granjas" de enlaces. Peticiones de intercambios de enlaces con sitios no relacionados. Los buscadores (Google y otros) tratan de detectar dichas prácticas y penalizarlas. Así consiguen que sus resultados sean de calidad, y que a quien quiera promoción le resulte más rentable comprar publicidad en el propio buscador.
* Posible actividad: Incorporar microformatos a la página de ejemplo desarrollada, por ejemplo una vCard con la información personal.

#### Generadores de documentación
Se podría ver una demostración de cómo por ejemplo Javadoc o maven generan HTML para código de programa, proyectos.

#### Actividades
* Ejemplo sencillo de cómo montar un servidor sencillo, configurar cuentas ftp.
* Herramientas de colaboración y publicación. Wikis, repositorios. Uso de Blogs, foros, Sitios de preguntas (Quora,StackExchange),redes sociales.

Se podría pedirles que realicen algún tipo de actividad en un entorno colaborativo controlado (por ejemplo en Wikispaces).
Se podría realizar la puesta en pie de un servidor (por ejemplo un MediaWiki) en una máquina sobre la que tengamos control. Y discutir sobre algunos aspectos clave de la configuración. Y que experimenten sobre la potencia de las plantillas (`Templates`, que permiten por ejemplo un formato condicional, una *transclusión* personalizada).

* Otros lenguajes de marcado habituales: Markdown, (Media)Wiki. Se puede pedirles que conviertan un documento en otro formato (por ejemplo un apartado del libro del XHTML+CSS a Markdown)

#### Controversia del layout
Sobre el tema del layout con tablas y con capas div.
Mi postura no sería prohibir taxativamente que se utilicen tablas para ese propósito.
Está claro que en el pasado se ha abusado y había tablas dentro de tablas dentro de tablas, y que para los casos más habituales el uso de capas es más elegante y flexible. Por ejemplo para la barra de navegación, o para que el texto *fluya* a uno u otro lado de una imagen.
Sin embargo el uso de las directivas `float` y `clear` no es completamente claro e intuitivo, y no está excento de interferencias. Y hay diseños especiales en los que un diseño fluído con capas podría dar lugar a layouts anómalos (por ejemplo en formularios).
Tengo una experiencia reciente con el [formulario del Internal Rate of Return](http://javier-aranda.com/calc/irr.html), donde me empeñé en hacer el diseño con capas (a pesar de que me resultaba más difícil). Y el formulario que se veía bien por separado, al conjuntarlo con la barra de navegación del diseño fluído de maven/doxia, acababa descuadrado y no fui capaz de solucionarlo de forma normal. Al final tuve que utilizar un `iframe`, al que había que asignarle un tamaño rígido, pero no rompía mi diseño.

También podría darse el caso de layouts atípicos al estilo de una cruz gamada (*lauburu*, *esvástica*):

<table><tr><td rowspan="2">NW</td><td colspan="2">NE</td></tr>
<tr><td>C</td><td rowspan="2">SE</td></tr>
<tr><td colspan="2">SW</td></tr></table>

Por otro lado hay casos en los que es claramente ventajoso utilizar un layout con capas: Por ejemplo para una barra de navegación que queremos ocultar al imprimir. Una capa es más fácil de ocultar (`display:none`), que una columna completa.

Sin ser un experto o autoridad en el tema, estos son mis dos céntimos. Esto es inadecuado para enseñarles a los alumnos porque es complejo. O quizás pueda tener un valor en el sentido de que hay cosas que son controvertidas, que hay posiciones más puristas y más laxas. Y que cada parte tiende a ver solo los inconvenientes de la opción contraria e ignorar los puntos fuertes. Y para lo que nos va en juego, a veces la postura más razonable puede ser asentir y pasar por el aro. Particularmente si no tenemos una posición de autoridad o si la otra parte se lo toma como algo personal (se utiliza el término de *guerra de religión*). Quizás lo peor de utilizar layouts con tablas es la reacción de los otros.


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

### Ideas estúpidas
- Proponer como ejercicio crear una página con la transcripción de la piedra roseta. No obstante no he conseguido encontrar una transcripción en UTF-8. [Los caracteres jeroglíficos están en el plano suplementario multilingüe de Unicode](https://en.wikipedia.org/wiki/Egyptian_Hieroglyphs_(Unicode_block)). No veo el propósito más allá de hacer que busquen información y de demostrar para qué gansadas se puede utilizar el  HTML.
- Relacionado con el jeroglífico, cómo representaríamos lenguas ficticias (por ejemplo klingon o élfico) en HTML. Estos caracteres no figuran en Unicode (AFAIK). Posiblemente se puede utilizar un font-face personalizado y utilizar codepoints de bloques privados. Alternativamente se podría utilizar javascript para transcribir de una transcripción de texto latino a las imágenes correspondientes a los caracteres de dichas lenguas.
- Relacionado (y sí que sería interesante). Cómo representar fórmulas matemáticas dentro de HTML. Me suena haber leído de librerías que formateaban las fórmulas. (¿desde TeX?).
No obstante no sé si con HTML5 se permite embeber MathML, y qué soporte hay por parte de los navegadores
  - [ ] Curar

### Repositorio Git
Consideraba conveniente poner los contenidos desarrollados en un repositorio Git
- Para que Víctor pueda tener una versión actualizada, en vez de enviar ficheros sueltos o un zip de todo.
- El desarrollo incremental en distintos momentos, modificando ficheros existentes, muestra que el trabajo no es una copia o un material elaborado precipitadamente en el último momento.
- El repositorio puede ser útil para continuar trabajando en él en los materiales de esta asignatura (o de otras) si metocara impartirlas posteriormente.
- Demuestra el uso eficaz de nuevas tecnologías.
- {!Pega} No todo el mundo tiene instalado ni tiene soltura con control de versiones (yo mismo). Puede que en algunos casos suponga un obstáculo y los inconvenientes no se compensen.

#### 1113
Anotaciones sobre búsquedas de ayer
Buscando `Copying git into http server`
* [GitHub gist - Using Git to Manage a Live Web Site](https://gist.github.com/Nilpo/8ed5e44be00d6cf21f22)
En realidad no es poner un repositorio remoto para que otros puedan clonar.
Aparentemente lo que pretende es que al realizar un push el sitio web se actualice.
Contiene algunas instrucciones de credenciales (copiar fichero RSA público que utiliza SSH) que no me han sido necesarias.
* [StackOverflow - How to copy a local repository to remote server using git?](https://stackoverflow.com/questions/15463795/how-to-copy-a-local-repository-to-remote-server-using-git)
Más en la misma línea del anterior (GitHub gist). Algo más condensado. Y es lo que más útil me ha resultado.
* [Soporte Hostgator - How Do I Get and Use SSH Access?](http://support.hostgator.com/articles/hosting-guide/lets-get-started/how-do-i-get-and-use-ssh-access)
El SSH se encuentra habilitado (no como hace algún tiempo).
No consigo acceder utilizando PuTTY. No sé qué estaré haciendo mal.
En cambio sí que consigo acceder utilizando el terminal de Cygwin: `ssh -p 2222 javier@javier-aranda.com`
La primera vez aparece una confirmación de si confío en el certificado del sitio.
* [Medium,29degrees-Setup a private Git repository on a shared HostGator account](https://medium.com/29-degrees/setup-a-git-repository-on-a-shared-hostgator-account-7a7e306ef66f)
Abunda en lo mismo.

Tras seguir los pasos indicados he conseguido conectarme y crear un repositorio *bare* en `~/public_http/tic2.git/`, y he realizado un `push` desde mi local.
Sin embargo al intentar realizar un `clone` del nuevo repositorio, estoy obteniendo el error `fatal: repository 'http://javier-aranda.com/tic2.git/' not found`.
He probado a utilizar el protocolo git (no habilitado), y he probado a crear un clon por línea de comandos dentro del servidor (tenía un aspecto correcto, con los ficheros esperados dentro del directorio de trabajo). Y he probado a acceder al clon.

Buscando `git http fatal repository not found`
* [StackOverflow - `git clone` over HTTP Fails with “repository not found”](https://stackoverflow.com/questions/30313480/git-clone-over-http-fails-with-repository-not-found).
Aparentemente debería instalarme algún elemento adicional (Smart-HTTP). Parece algún tipo de módulo CGI para apache que no estoy seguro de que se me vaya a permitir. Supongo que en vez de tratar acceder a los ficheros individuales está encapsulando algún tipo de protocolo (Git) dentro de HTTP. Sería bueno (aunque fuera terriblemente ineficiente) que se pudiera acceder como si fuera un *filesystem*
  * [Git-SCM *Git on the Server - Smart HTTP*](https://git-scm.com/book/en/v2/Git-on-the-Server-Smart-HTTP)
  * También [git-http-backend](https://git-scm.com/docs/git-http-backend)

Llegado a este punto abandono el asunto. Subiré un zip a Google Drive, o quizás cree un repositorio en github (para lo cual posiblemente tenga que enredar con credenciales)

----


probando GitHub
https://github.com/fjarandag/tic2.git
git@github.com:fjarandag/tic2.git
Conseguido, aunque he necesitado hacer un "rebase" porque el master de github no era el mismo que el de mi local.
Puede que haya discrepancia en las licencias (CC-SA-BY vs GPL3 en github). A efectos prácticos no debería ser significativo.


De la conversación con Víctor, el énfasis creo que está en los siguientes puntos:
- Qué contenidos concretos les voy a enseñar a los alumnos
- Qué ejercicios concretos les voy a plantear, y cuáles van a ser los criterios de evaluación
- Plantear algún control escrito.

Iremos viendo que huecos van quedando a lo largo de la semana. Indico mi impresión de que voy retrasado, que me he complicado con asuntos secundarios, que a estas alturas ya debería de tener los contenidos/presentaciones medianamente bien definidos, o de lo contrario nos plantaremos en vísperas con las sesiones sin estar debidamente preparadas.

Sobre el tema de los ejercicios, considero que se haría elegir a los alumnos algún tema para desarrollar una página, y conforme se vayan viendo distintos elementos del HTML y del CSS, hacer que los vayan aplicando.

Sobre la cuestión de si tendrán que entregar trabajos a través de la plataforma, considero que son cosas sencillas y que se podría ver en un minuto si cumple bien con las expectativas.
Víctor me comenta que habrá que tener algo preparado para los alumnos que terminen pronto. Dentro de los alumnos cabe esperar que haya algunos que intenten cumplir mínimamente (lo cual puede ser racional), y otros que ni siquiera lo intenten (algo que en un principio no sucede con este grupo). Está la anécdota de un alumno que intentó presentar como solución un código de lenguaje Java (cuando se pedía Python), como si lo hubiera copiado de Internet y ni siquiera lo hubiera verificado en el entorno.

Sobre la secuenciación, considero que habría que alterarla dispersando los 3 apartados iniciales (que son algo más áridos, sin aplicación práctica por parte de los alumnos).

----

Realidad Aumentada
- [Terminator Vision & Augmented Reality](https://www.youtube.com/watch?v=05n-UeTTkhQ)
- [La escena del bar de Terminator 2](https://www.youtube.com/watch?v=TaRuugE1R74)
Es un poco absurdo que una máquina necesite la información sobreimpresa. La escena es sexista y violenta.
- [Singularity Hub -20170628- This Augmented Reality Helmet Helps Firefighters See Through Smoke to Save Lives](https://singularityhub.com/2017/06/28/this-augmented-reality-helmet-helps-firefighters-see-through-smoke-to-save-lives/amp/)
- [CNN Money - Minority Report](https://www.youtube.com/watch?v=euJdKsOYnXk)

Quizás  se podría considerar el HUD utilizado en aviación como una forma de realidad aumentada. Sin embargo habitualmente simplemente sería la sobreimagen de información relevante (altitud, velocidad, horizonte artificial, etc)

### 1114
Preparando la presentación ayer. Por no salvar inicialmente, al confundirme al salir de la plantilla maestra pierdo algo de trabajo.
La tira de dilbert del [Powerpoint poisoning](http://dilbert.com/strip/2000-08-16) tiene copyright y para pedir autorización hace falta rellenar un formulario.

----

[Peticiones síncronas y asíncronas](https://developer.mozilla.org/en-US/docs/Web/API/XMLHttpRequest/Synchronous_and_Asynchronous_Requests)
Si es necesario mostrar que los términos tienen otro uso y que pudieran ser equívocos.

### 1115
[Microsiervos - La paradójica complejidad del CSS](http://www.microsiervos.com/archivo/internet/complejidad-css-aumenta-disminuye.html)

----

Posible tarea estúpida en relación al HTTP. Acceder al sitio utilizando telnet
    GET / HTTP/1.1
    Host: www.lasallefranciscanas.com

[How to make http/https requests yourself with nc/telnet/openssl](https://makandracards.com/makandra/45025-how-to-make-http-https-requests-yourself-with-nc-telnet-openssl)

### 1116
Observo que en [W3Schools](https://www.w3schools.com/html/html_tables.asp) hay ejercicios para prácticar.

----
[html3 maths](https://www.w3.org/MarkUp/html3/maths.html)

[Chrome drops MathML support (2013)](https://www.cnet.com/news/google-subtracts-mathml-from-chrome-and-anger-multiplies/)

Aparentemente la alternativa que propone Google es [Mathjax](https://www.mathjax.org/)
Se puede ver un ejemplo con la fórmula de los polinómios de grado 2: https://www.mathjax.org/#gettingstarted

[SVG dentro del HTML](https://www.w3schools.com/html/html5_svg.asp)
Ejemplo significativo: Pentágono
https://en.wikipedia.org/wiki/Pentagon

### 1119
Rehaciendo la programación.
Debería finalizar cuanto antes la memoria de la primera parte de las prácticas, etc.

Competencias clave
<!--
@@@ Recuperado del fichero de programación anterior
Observaciones:
En herramientas síncronas y asíncronas tengo que informarme en concreto a qué se refiere. Mi primera impresión es que es una aplicación descontextualizada y estéril del concepto de E/S síncrona y asíncrona (en aquel caso tiene sentido, en éste no queda claro y acaso incluso induce a confusión).
La Internet de las Cosas (IoT) no entiendo qué tiene que ver con la publicación de contenidos. La Realidad Aumentada (AR) es un poco puntera y experimental para pretender que sea un contenido mínimo. ¿Y por qué la AR y no por ejemplo los códigos QR? A mi entender los autores de la versión aragonesa del curriculum quizás se han extralimitado y han incluido en una especificación de los contenidos obligatorios, elementos que simplemente serían recomendables. Y dejan a los docentes en la tesitura de tener que enseñar contenidos con los que discrepa o de los que duda de su pertinencia. Mejor sería que al estilo de los estándares de internet (RFC’s del IEEE) diferenciasen con claridad lo que es mandatorio (MUST), de lo recomendable (SHOULD) de lo opcional (MIGHT).
En algunas otras programaciones vistas la aplicación de estos elementos quizás sea algo laxa. En cualquier caso es mi obligación procurar que se observe lo prescrito. Y cualquier duda u opinión en contra, formularla de una forma respetuosa y constructiva.

@@@¿Cuántas sesiones?
@@@ Status de borrador preliminar para cambiar de arriba a abajo si fuera preciso. Tomarlo como una idea, no como un propósito o compromiso.
Como idea preliminar estimo  que el bloque se da en 8 a 10 semanas de 3 horas. (24-30 sesiones).
Por restricciones de tiempo (duración, fechas límite del Practicum III) solo daría las 9 primeras sesiones.
@@@ Debería verificar si el conteo de horas cumple con lo  esperado, y si hay posibilidad de ampliar la fecha límite de 18 de diciembre (en otras comunidades se empieza y termina más tarde).

Fechas disponibles: (22,23,28,29,30-N,5,12,23,24-D)

Sesión 1 – Presentación y prospección. Diversos medios de publicación
Fecha proyectada: 22-N
¿Qué es esta unidad?¿Cuáles son sus contenidos?¿Cómo se evalúa?¿Qué conocimientos previos tienen los alumnos?¿Para qué sirven estos contenidos?¿Qué pretenden conseguir y qué utilidad tiene para los alumnos?

Diversos medios de publicar contenidos. Webs estáticas, blogs, foros, redes sociales.

Sesión 2 – El nacimiento del WWW
Fecha proyectada: 23-N
Presentación del contexto tecnológico de 1989-1991 y las necesidades iniciales a las que responde la web.
Presentación de los elementos tecnológicos de la Web
(El protocolo HTTP, Rudimentos de HTML, URLs,URIs,URNs)
Ver ejemplos sencillos.

Sesión 3 – HTML básico
Fecha proyectada: 28-N
Elementos sintácticos del HTML. Elementos, atributos, entidades, ...
Estructura y elementos de formato básicos del HTML (obviando cabecera): h1,p,a,b,i,img ...

Sesión 4 – HTML – estilos básicos
Necesidad de personalizar estilos. Comparar elementos de estilo directo (font,style,b,i, …) frente a definir y reutilizar estilos.
Elementos div y span. Atributos class.
El lenguaje CSS. Definición embebida en el HTML y en ficheros externos.

Sesión 5 – CSS – Definiciones de tipos de fuentes, espaciado, colores
Familias de fuentes: serif, sans-serif, monospaced, cursive…
Distintas unidades de tamaño: pt,px,em,%
Modificadores del texto (size,font,font-weight,.font-style,font-decoration)
Modificadores del tamaño y espaciado de bloques (size … padding, margin).
Modelos de colores (RGB, HSL,…)
Modificadores de color (color,background...)

Sesión 6  HTML Layout de páginas
Ubicación de bloques.


Sesión 7 HTML Elementos embebidos, Microformatos, SEO
@@@

Sesión 8 HTML dinámico
@@@

Sesión 9 – Libre para refuerzo, hacer un ejemplo práctico, o revisar trabajos que hayan hecho los  alumnos.
@@@

-->

----

Problemas con las licencias
Dentro de Github no se ofrecen las licencias CC.

GPL (al menos la primera versión) es una licencia 'vírica' que obliga a los trabajos derivados a ser GPL también.
Lo que inicialmente pretendía es que cualquiera que utilice el trabajo, simplemente atribuya y referencie.
No obstante yo había puesto el Share Alike. De modo que quizás era esencialmente lo mismo.
No obstante habría que considerar a qué tipo de trabajos se les exige el SA. No es lo mismo por ejemplo que alguien prepare una obra en la que el 50% o más es mi trabajo (por ejemplo que alguien prepare una unidad didáctica inmediatamente encima de la mía), a otra en la que simplemente se utilice una parte, o mi obra sea una parte secundaria y prescindible (por ejemplo que copien una definición o una tabla, correctamente referenciada, o que aparezca en una compilación de recursos libres adicionales)
- [ ] Debería revisar la GPL3 y la CC SA en busca de detalles tales como la casuística del Share-alike.

----

Quizás habría que  justificar cada uno de los contenidos, objetivos, cómo son cubiertos dentro de la programación.

Idea de introducir una actividad en la que ellos corrijan mi respuesta a las cuestiones del contenido, lo justifiquen, comenten, planteen dudas.

Idea de plantear un formulario de qué opinan de cómo he impartido las clases. Las metodologías, el nivel de dificultad/adecuación de los ejercicios, etc.
Quizás este formulario se podría plantear a través de la web. Debería conseguir alguna página PHP sencilla para escribir los elementos del formulario en un fichero.

### 1120
El Git flavoured markdown no parece incluir soporte para notas al pie (que por ejemplo estaba utilizando para la lista de referencias).
Por el momento he utilizado un marcado tentativo `[^footRef]` dentro del cuerpo del texto y `[^footRef]:` en la definición de los pies.
Alternativamente, podría utilizar algo de html, tal y como se sugiere en https://stackoverflow.com/questions/25579868/how-to-add-footnotes-to-github-flavoured-markdown
Alternativamente, se podría evitar utilizar notas al pie (por ejemplo haciendo la referencia completa dentro del texto).
Alternativamente, se podría introducir una caja `div` para las digresiones (como hacen en el sitio [WaitButWhy](https://waitbutwhy.com/) )

----

Posiblemente interesante poder obtener la uri data: de un fichero. Podría ser interesante obtenerlo desde javascript
https://stackoverflow.com/questions/6978156/get-base64-encode-file-data-from-input-form

Desde línea de comandos también es posible (quizás preferible).
En linux `base64`. En Windows [`certutil -encode data.txt tmp.b64 && findstr /v /c:- tmp.b64 > data.b64`]( https://www.igorkromin.net/index.php/2017/04/26/base64-encode-or-decode-on-the-command-line-without-installing-extra-tools-on-linux-windows-or-macos/)

Pero la utilidad de esto parece cuestionable (¿Cuándo lo van a necesitar realmente los alumnos?). Quizás específicamente en casos donde se espera que el HTML lo contenga todo. Los recursos no deberían ser demasiado grandes y no ser cargados de balde.

----
De la revisión de hoy:
SVG no es el único modo de preparar documentos con dibujo vectorial. Víctor me muestra como con programas de CAD prepara algunas páginas imprimibles para los alumnos.

Estoy evitando introducir documentos de libreoffice (como la programacion01) en git a causa de que son comprimidos y la delta no se comportará demasiado bien. Revisando veo personas que proponen descomprimir antes de registrar cambios:
- https://stackoverflow.com/questions/975167/uncompress-openoffice-files-for-better-storage-in-version-control
- https://stackoverflow.com/questions/17501146/uncompressing-zipped-data-files-before-committing-to-repository

Posiblemente SublimeText soporta las funcionalidades que aprecio en Atom (preview, control de versiones), y es excelente en algunas otras (Víctor me enseñó una especie de *beautify* para el código HTML, SublimeText sabe cerrar correctamente las etiquetas de HTML).
También permite arrastrar una carpeta a la vista de árbol.

Atom viene con las funcionalidades de series. Quizás me da pereza pelearme con los gestores de paquetes.
También observo que las sugerencias se están mostrando mejor en atom. En Sublime por  ejemplo, para aplicar el snipplet de html, no tienes ninguna indicación previa de que con Ctrl+Espacio vas a obtener la estructura del documento.

### 1121
Consideraciones sobre la temporización
- Creo que los tres últimos días deberían ser para control, entrega de trabajos y feed-back. Debería haber algunos materiales interesantes para rellenar el último día.
- Idealmente, también el control/examen debería ser posterior a una sesión de repaso. Sin embargo no sé si eso tiene inconvenientes y tampoco es extremadamente importante.
  - Si la última semana es martes,miércoles y jueves, el control el mártes no tendría sesión de repaso, o sería del martes anterior porque entre medias tenemos el puente de la Constitución y La Inmaculada. Y posiblemente estaríamos coincidiendo también con otras asignaturas que pudieran control.
  - Las alternativas para que las cosas cuadren en este sentido no me convencen:
    - O bien hago una sesión extraoficial al martes siguiente (pero entonces sería complicado evaluarme) ...
    - O bien anticipo el  control a la quinta o sexta sesión (¿que sería apelmazar todos los contenidos al principio?).
    - O bien nos organizamos para una sesión específica de feedback por la tarde (pero si queremos confinarlo todo en miércoles y jueves, ¿implicaría dar feedback por la tarde de trabajos entregados por la mañana?).
- Posiblemente debería posponer o relegar la parte que da una visión histórica. Habría que explicar antes sobre el propio HTML.

Posiblemente la temporización podría quedar del siguiente modo:
1. Introducción+lenguaje HTML
  - Presentación de un ejemplo de HTML trivial
    - Conceptos: Lenguaje de marcado, etiquetas, atributos, comentarios. Comparación con lenguajes que conozcan (como Python)
  - Presentación de un HTML con los formatos más básicos.
    - Párrafos y saltos de línea. (por ejemplo "La princesa está triste ...").
    - Introducción de negritas e itálicas y subrayados. Anidación de elementos (por ejemplo "* **divide** ut regnes* (J.César)")
    - Cuestión de mejor utilizar formatos semánticos que formatos directos. Por ejemplo cite o em y strong. Mostrar la lista completa que hay en la especificación de html5.
    - Azarosa vida del subrayado. Deprecado(obsoleto) y redefinido

    -  caracteres de escape, entidades, encoding.
  - Elementos especiales, +formatos básicos)+crear primer HTML
  - ¿Hacemos corto? Continuar a siguiente tema.
2. URI's, enlaces/anclas con más profundidad+Imágenes, cabeceras. Estilos.
3. Historia, listas. Tablas. Div, CSS básico
4. HTTP, Formularios.
5. Contenidos del Curriculum (Web Social, tendencias)
6. repaso
7. Control
8. Finalizar trabajos, Feedback control.
9. Feedback trabajos. Reserva.

---

Actividades. Idea de pair programming, que se turnen en editar y supervisar. Quizás habría una rúbrica de evaluación triple:
- Si el trabajo contiene los elementos solicitados.
- Si el que supervisa está atento (por ejemplo detecta fallos, si hace sugerencias constructivas).
- Si el que edita atiende a las indicaciones y si es proactivo.
No sé si puedo tener una hetero-evaluación madurada. Y posiblemente no lo tendría en cuenta de cara a la calificación.
Se les puede indicar que conforme lo vayan completando, que lo indiquen y les iré facilitando actividades adicionales.


### 1122
**Feedback de la clase**
No siento que haya ido bien. Problemas técnicos y momentos de sentirme perdido y no saber por dónde tirar.
Problemas técnicos con el proyector. Utilizando mi adaptador HDMI-VGA.
- No funciona el modo de las dos pantallas iguales. Tengo que mover contenidos a la segunda pantalla.
- La resolución del proyector es aparentemente 600x800. Alguna página donde quería ver contenidos me oculta la barra de navegación y no se ve bien. El editor de texto tampoco se comporta según lo esperado en la segunda pantalla (no line-wrap).

He hecho la presentación de la introducción, y el primer ejemplo del HTML, pero no he llegado al punto de los enlaces, ni ha dado tiempo a que ellos se sentaran a preparar el primer HTML.

Víctor me comenta:
- Tengo que interactuar más con los alumnos, y vigilarlos un poco más. Había alguno que claramente estaba desconectado y enredando con el móvil.
- Debería prepararme un guión para tener más controlado lo que voy a explicar.
  - En cierto modo había preparado ese guión para el ejemplo del HTML, pero no lo llegué a imprimir. Estaba en el editor pero en otra pestaña, y en la ventana de tamaño reducido.
- Para el siguiente día (jueves 23) que vayan sin falta a los ordenadores a hacer el primer HTML. Es importante que lo hagan manualmente sin hacer un copy-paste.
- Tengo que esforzarme por centrarme y cubrir los puntos planeados. Si luego da tiempo de repasar y entrar en detalles pues entonces bien. Por ejemplo el tema de las entidades no era necesario haberlo dado.
- Debería esforzarme por utilizar el Sublime Text.

----
URL's recopiladas
- https://stackoverflow.com/questions/857876/what-actually-is-pcdata-and-cdata
- [Diacríticos](https://en.wikipedia.org/wiki/Combining_character)
- Ejemplo Unicode excesivo (diacríticos): https://stackoverflow.com/a/1732454/1117429
- Otro elemento interesante para hacer páginas activas. Scrollama.js: http://www.microsiervos.com/archivo/ordenadores/scrollama-libreria-javascript.html , [Ejemplo](https://russellgoldenberg.github.io/scrollama/fixed-css/)
- Lo que comenté de la sonda Galileo es más bien correcto. El problema era con la antena, no con las cámaras: https://en.wikipedia.org/wiki/Galileo_&28spacecraft%29#Main_antenna_problem ,
https://youtu.be/3ubr151wrHQ?t=2m45s

### 1123
La clase de hoy va bastante más normal. También es que era menos ambiciosa. Muestro un ejemplo con una imagen y con un enlace. Para que se pongan a trabajar.

- Debería haber revisado y actualizado el guión. Algunas cosas quizás estaban fuera de sitio.
- Se podría mejorar que en los ejemplos habría que marcar más claramente los elementos que se pretende resaltar.
- Diferencia con el tema de la alineación de la imagen. Quizás no debería haber explicado el atributo align directo (hacerlo con estilos)
- Encuentro que los alumnos casi no saben crear un fichero con el editor de texto.
- Otros en cambio dominan tanto el tema que ya estaban probando cosas con CSS. Debería tener las tareas suplementarias ya.
- No tengo muy claro cómo voy a recoger y controlar los trabajos. Podría pedir los nombres y marcar cuándo está hecho.
- Las instrucciones quizás no estaban suficientemente claras. Algunos apenas pusieron texto, otros pusieron texto con variedad de estilos e incluso enlaces.

### 1126
Al hacer el *push* a GitHub hay conflictos. Probablemente es que no está bien hacer un *ammend* sobre una versión ya subida.

Tengo que establecer algún modo de hacer llegar contenidos a los alumnos. Quizás a través de twitter y de drive.

Los materiales preparados deberían estar con antelación para ser revisados y distribuidos. Haber postergado la tarea es netamente perjudicial. Mejor hubiera sido desconectar los dos últimos días que los dos primeros.

- [Confluence (Software colaborativo)](https://en.wikipedia.org/wiki/Confluence_(software)) : Quizás los *issue tracking* no son por sí un sistema de compartir conocimiento. Pero resulta relevante saber si un asunto se ha registrado antes y cual ha sido su desenlace. Conocer qué cuestiones están pendientes de resolver y quién  está asignado para evitar repetir esfuerzos. Muchas plataformas en realidad son la agregación de distintas herramientas individuales (wikis, repositorios, etc)
- [Agregar una página a Google](https://www.google.com/webmasters/tools/submit-url?urlnt&pli=1)
- [Agregar un sitio/página a distintos buscadores](https://www.smartz.com/web-marketing/search-engine-optimization/submit-site-to-search-engines/)
Es posible que los buscadores pidan verificar la propiedad del sitio (colocando un fichero en el directorio raiz). La indexación sigue su propia planificación y filtros previos. Es probable que

- [All list of values for HTML rel attribute](https://stackoverflow.com/questions/9317233/all-list-of-values-for-html-rel-attribute)
  - https://www.w3schools.com/tags/att_a_rel.asp
  - https://www.w3.org/TR/html5/links.html#linkTypes
  - http://microformats.org/wiki/existing-rel-values#HTML5_link_type_extensions

Experimentado el rel="bookmark". Parece que el ejemplo de w3c induce a confusión. No obstante no lo vamos a ver.

- [El protocolo HTTP (versión básica) - Universitat Politècnica de València - UPV
](https://www.youtube.com/watch?v=wHXRmq75N_Y) Puede servir, pero no me entusiasma.
- [El protocolo HTTP - HTML Rules
](https://www.youtube.com/watch?v=S975NVYbe2E) Más corto. Menciona aspectos del estado.

----
Idea de ejercicio, pasarles a los alumnos un contenido escaneado (de alguna revista divulgativa, del "What if" de R.Munroe", etc.).
Habría que encontrar un texto de un tamaño moderado (dos parrafos) que contuviera al menos dos complicaciones.
- Alguna imagen insertada
- Listas
- Notas al pie
- tablas

Lo ideal sería suministrar a cada alumno un ejemplo distinto, pero llevaría algo de tiempo encontrar ejemplos buenos. Por el momento veo pocos ejemplos de 3 complicaciones o más. También habría que buscar en internet la presencia de los contenidos.

Alternativamente se podría preparar algún contenido sintético, con unas pocas variantes se podrían generar un gran número de combinaciones.

No obstante en un principio se había acordado que hagan una página según el tema que prefieran siguiendo la plantilla. No sería oportuno tener distintas actividades sobre los mismos aprendizajes. Y precisamente debería destinar el resto de las actividades en cubrir el resto de los estándares de aprendizaje evaluables contemplados.
- **Crit.TIC.2.1. Utilizar y describir las características de las herramientas relacionadas con la web social ...** estaría cubierto con la parte teórica.
- **Crit.TIC.2.2. Elaborar y publicar contenidos en la web** estaría cubierto con esta parte práctica básica.
- **Crit.TIC.2.3. Analizar y utilizar las posibilidades que nos ofrecen las tecnologías basadas en la web 2.0** parcialmente cubiertas por la teoría.
  - Por ejemplo se les puede pedir un mini-trabajo con comentarios e ideas alternativas sobre el desarrollo que he preparado sobre los contenidos.
  - Se les puede pedir algo de programación de servidor (por ejemplo PHP) o de Javascript en la página. Hay ejemplos preparados en relación con los estilos, pero posiblemente habría que aportar algo más.
  - Sobre el uso de las herramientas colaborativas, se les podría pedir por ejemplo que colgaran una presentación en slideshare o similares, y que lo publicaran en Twitter, y que enviaran el enlace. Eso se nos ha pedido en asignaturas del máster. Pero tengo dudas de si es oportuno que se estén creando cuentas personales en redes y estén "polucionando" internet. Particularmente si estuviera haciéndome "autobombo".

----

Observo que hay un modo de layout llamado CSS Flexbox. (via https://www.w3schools.com/html/html_layout.asp).

----

Ahora que estoy introduciendo guiones de sesiones, me preocupa que existe redundancia con los ficheros temáticos.
Naturalmente durante las sesiones voy a estar utilizando los guiones. Así que en algún momento debería ir portando los contenidos a los ficheros 1* temáticos (que supuestamente se utilizarían para futura referencia).

----

Alternativas para visualizar markdown (preferiblemente en un navegador)
https://stackoverflow.com/questions/12081390/view-or-test-readme-files-md-in-a-browser-prior-to-pushing-to-an-online-reposit

Mirando sobre Bruce Lawson (uno de los gurús/popes del html5) http://www.brucelawson.co.uk
http://www.seocom.es/blog/html5-seo-algoritmo-scooby-doo
http://csszengarden.com/?cssfile=http://www.brucelawson.co.uk/zen/sample.css

### 1127
Idea sobre estilos multi-columna. Posiblemente en medios paginados, o sección por sección sería posible utilizar un modelo multi-columna para aprovechar mejor el espacio. Buscado en Google `css paged media multiple columns`
Veo que existe una especificación (https://www.w3.org/TR/css-multicol-1/), aunque el estado es de recomendación y la fecha reciente (octubre de 2017), de modo que  posiblemente no es utilizable. También entiendo que las definiciones de estos estilos serán fuertemente dependientes de la anchura del viewport.

En https://www.w3.org/TR/CSS/#terms se puede ver un ejemplo, de cómo están ajustando la anchura de una lista larga mediante los atributos computados `column-count:auto;column-width:240px;`

----

Buscando `css depending on block width`. El intento sería poder seleccionar el estilo en función de la anchura disponible (por ejemplo para pasar de un diseño a 4 columnas a un diseño de 3 columnas).
- https://stackoverflow.com/questions/19157668/scaling-div-width-depending-on-height
- Encuentro que en el `@media` se puede utilizar el atributo `min-width`. Encuentro enlace a la especificación de CSS-Flex. https://www.w3.org/TR/css-flexbox-1/#min-width-automatic-minimum-size

----
Víctor
- Me comenta que posiblemente estoy concentrando demasiado. Damos en 9 sesiones lo que normalmente se daría en 12. Él dará la parte de teoría correspondiente a las herramientas colaborativas, y alguna práctica con gestores de contenido (montándoles un servidor en la intranet, harán un trabajo con WordPress o con Joomla). Esto implica que
- Vemos y me comenta  el modelo de examen. Un par de preguntas de desarrollo básicas, 10 preguntas de test, Un par de preguntas de si un fragmento  es correcto o falso
- Sobre el asunto de hojas de estilo sale el tema de [Read Mode]( https://chrome.google.com/webstore/detail/read-mode/nagcaahojecfeopbghgihcabgiepploa/reviews?hl=en) para eliminar basurilla de las páginas para leer y para imprimir.
  - Veo que existen otras alternativas, como [Just Read](https://chrome.google.com/webstore/detail/just-read/dgmanlpmmkibanfdgjocnabmcaclkmod?hl=en)
- Posiblemente sería interesante que yo hiciera mi propio ejemplo de páginas con la plantilla.

### 1128

[Bruce Lawson - Bruce's Tour of the Sausage Factory (NLHTML5)](https://youtu.be/nXAzctXGEeg) Sobre el desarrollo de estándares. Cosas que han funcionado y cosas que no. No sé si aprovecha para llevar las cosas a su terreno de web component y service workers. t=34m)

[Ensuring a High Performing Web for the Next Billion People - Bruce Lawson (Velocity Amsterdam)](https://youtu.be/f6As5HEkG5E) Habla de los mercados emergentes en Asia, cómo la gran mayoría del tráfico va a dispositivos móviles, frecuentemente de gama baja, frecuentemente en redes de baja velocidad y con un coste significativo, por tanto los servicios de compresión son importantes. También es importante que las aplicaciones estén adaptadas a las idiosincrasias locales (por ejemplo textos en rojo, o pedir un segundo nombre).

https://blog.codinghorror.com/in-programming-one-is-the-loneliest-number/
Quizás las nuevas tecnologías aíslan a las personas. Quizás hay que advertir en contra de los trabajos solitarios. Quizás un profesor que prepara sus clases y realiza sus tareas de forma totalmente independiente fácilmente puede estar solo.

----
Reflexiones varias sobre la clase de hoy (debería reflejar junto al guión específico).
No siento que la cosa haya ido bien.
Creo que faltó preparación por haber estado preparando la memoria para entregar ayer. También perdí algo de tiempo intentando montar la página que mimetizara el mensaje de fallo de conexión de Chrome.

Algunos elementos que había introducido que creía que aportarían y animarían (la referencia a Bruce Lawson, la importancia de las referencias/enlaces, la obsolescencia de algunos modos de difusión de información) han fallado. Quizás por la falta de preparación, o posiblemente eran prescindibles o incluso contraproducentes en primer lugar.

La referencia que había introducido para seguir de W3CSchools, contenía elementos que no deseaba todavía (por ejemplo el target, estilos, etc en los enlaces), y omitía algunos otros que hubiera querido utilizar (por ejemplo el thead, tbody, tfoot en la tabla).

Al menos he descubierto alguna cosa interesante como las páginas para probar código de W3CSchools.


----
He estado trasteando con el Oracle VirtualBox para simular un servidor web.
Consigo conectar desde el Ubuntu1004 a mi host.
He tenido algún problema porque no sabía el equivalente del `ipconfig` para Linux.
Hay que hacer `ifconfig` e `ip route show` para conocer la información. En este caso la dirección del Host era 10.0.2.2.
- https://2buntu.com/articles/1513/accessing-your-virtualbox-guest-from-your-host-os/
- [Network configuration commands](http://www.tldp.org/LDP/intro-linux/html/sect_10_02.html)


Pero lo que necesitaba era acceder a una máquina con sistema de ficheros case-sensitive para mostrar cómo los nombres de fichero importan. Tendría mucho que probar y configurar y posiblemente sería preferible acceder a mi propio servidor web para hacer la prueba.

----
- [danluu - How web bloat affects people with slow connections](https://danluu.com/web-bloat/) (via [Bruce Lawson 17/11](http://www.brucelawson.co.uk/2017/reading-list-184/))
- [Tim Berners-Lee on the future of the web: ‘The system is failing’](https://www.theguardian.com/technology/2017/nov/15/tim-berners-lee-world-wide-web-net-neutrality)

### 1129

Los elementos que introduje en vez de div: (nav, header, footer, section ...) son válidos en html5, pero no en xhtml. ¿Qué variante de html es preferible?
[At the end of the day, why choose XHTML over HTML?](https://stackoverflow.com/questions/867498/at-the-end-of-the-day-why-choose-xhtml-over-html)

----
Vistos y archivados distintos vídeos, de Linus Tovards, de Tim Berners Lee, y de una socióloga alarmando sobre la influencia de los algoritmos y de la publicidad sobre nuestro comportamiento.

----
formularios
- https://www.w3.org/TR/html51/sec-forms.html#sec-forms
-


### Pendiente de incorporar

- [ ] Dentro de las anotaciones genéricas del máster se introdujeron de esta unidad.
