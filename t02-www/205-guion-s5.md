Programación para la sesión 5 - Jueves 30 de noviembre de 2017
### Contenidos
<del>
- CSS
  - Conceptos de herencia/cascada (de la raíz hacia los subordinados, y de las definiciones menos específicas a las más específicas)
  - Familias de fuentes (serif,sans-serif,monospace,cursive)
  - Tamaños (em,px,pt ...)
  - Tamaños y márgenes en bloques (margin,border,padding)
  - ocultación de bloques (display:none)
  - *posicionamiento de bloques: flujo, fijo, absoluto, relativo*
  - Colores
    - paletas preestablecidas (white, lightyellow ...)
    - códigos rgb, rgba
    - *hsl*
    - Recomendaciones contraste.
  - Ejemplo modificaciones CSS para imprimir.
- Conceptos de accesibilidad y usabilidad
- Verificadores de HTML
</del>

Inicialmente en sesión 4:
- HTTP
- Formularios

### Previo
- Dudas, dificultades
- Diferencia entre HTML y XHTML
  - [At the end of the day, why choose XHTML over HTML?](https://stackoverflow.com/questions/867498/at-the-end-of-the-day-why-choose-xhtml-over-html)


### HTTP
según Transparencias preparadas (./103-http-url.odp)

Mención cookies.
- En las cabeceras de petición y respuesta http.
- Instrumental para mantenimiento de sesión, para seguimiento de usuarios.
- Cookies propias y de terceros

### Opcional Video TBL Raw Data Now
[Berners-Lee T. The next Web of open, linked data. TED](https://youtu.be/OM6XIICm_qo)
16'51'' quizás un poco largo. Puede ser inspirador, pero no sé si aporta nada esencial. Quizás dejarlo para el final de la sesión.
Cabe comentar que muchos datos que recopilan las instituciones podrían considerarse confidenciales. No es lo mismo por ejemplo datos del clima recopilados por observatorios que registros de datos individuales recopilados por el INE, que los historiales médicos.

### Formularios
- Comentar cómo tenemos formularios por todos lados: En Google.
- El formulario se envía a un servidor, y resuelve una consulta o registra una operación
- También hay formularios donde un script procesa la petición.
- Seguir [ejemplo de formulario de la Especificación de HTML 5.1](https://www.w3.org/TR/html51/sec-forms.html#enabling-clientside-automatic-filling-of-form-controls)

- Cambiar la página para introducir un campo oculto (numPeticion), cambiar la dirección de correo a `password` y cambiar el radio-Button por un combo
```
<input type="hidden" name="numPeticion" value="PW3C-00354" />
<p><label>Pizza size: <select>
  <option value="small">Small</option>
  <option value="medium">Medium</option>
  <option value="large">Large</option>
</select></label></p>
```
