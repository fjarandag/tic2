109-css-adicionales.md

- [ ] Desarrollar

<!--
9. Formato con CSS-Conceptos adicionales
	1. Elementos div y span para personalizar estilos. Uso semántico. Diferencia elemento de bloque y elemento inline.
	2. Ejemplo de uso de div para personalizar el layout de una página.
	3. directiva *media*. Aplicación para personalizar impresión.
	4. Tamaños: px,pt,cm,em,%
	5. Modelo de tamaño de caja: margin,padding,border
	6. Tipos de fuentes: serif, sans-serif, cursiva, monospace
	7. colores: especificación de 3 y 6 dígitos. color picker. Listas nombres colores.
	8. Colores: especificaciones alternativas. transparencia, hsl.


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


-->
