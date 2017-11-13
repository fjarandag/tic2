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


### Pendiente de incorporar

(Dentro de comentario HTML)

<!--


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
