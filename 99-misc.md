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

### Pendiente de incorporar

- [ ] Dentro de las anotaciones genéricas del máster se introdujeron de esta unidad.
