---
title: 'Intruciones de Grav'
date: '10:54 06/12/2019'
author: 'Mery Lema'
body_classes: 'header-lite fullwidth blogstyling'
taxonomy:
    category: blog
    tag:
        - 'Intruciones de Grav'
---

[](hqdefault.jpg)

**_ GRAV TIENE ESTRUCTURAS DE PHP QUE SON DE MUCHA IMPORTANCIA._ **
_Carpetas que tiene importancia si o no:_
* _**/assets:** Es utilizada para almacenar archivos procesados como cssy y jsarchivos.
* **/backup:** Es una carpeta donde tiene almacenado la ubicación predeterminada para copias de seguridad Grav.
* **/bin See:** La utiliza para realizar algunas tareas prácticas desde la línea de comandos, es relativamente destinada principalmente para los desarrolladores
* **/cache:** Se usa para almacenar archivos en caché temporales que Grav genera automáticamente para mejorar el rendimiento.
* **/images:** Grav contiene una biblioteca de manipulación de imágenes potente pero muy fácil de usar por lo cual esta carperta almacenan images para que puedan reutilizarse si se solicita nuevamente la misma imagen con el mismo tamaño y los genera automáticamente.
* **/logs:** Cuando Grav detecta algun error, o si tiene activado el registro o la creación de perfiles adicionales, esta carpeta almacena los archivos de registro relevantes.
* **/system:** Esta carpeta es muy importante y no ahi que tocarla ya que esta se encarga de que tu GRAV funcione de manera correcta donde se realiza diversas configuraciones que están separadas en varias secciones y cada una de estas cumple una funcion en GRAV.
* **/src:** Son las que contiene las independecias de GRAV.
* **/ assets:** Permite configurar las opciones relacionadas con el Administrador de Activos (JS, CSS).
* **/blueprints:** Determinan cómo aparecen los complementos y temas en el back-end del sitios, se configura o bien usando dentro del GRAV como administrador o tambien dentro del tema o el archivo principal YAML del complemento./config.
* **/images:** Permite configurar las capacidades de registro alternativas para Grav CMS.
* **/lenguajes:** Establece la configuración de idioma del sitio y que sean compatibles, la designación del idioma predeterminado en las URL y las traducciones.
* **/templates:** Aquí es donde se guardan todos los templates que se descargan y podras configurar desde aqui.
* **/pages:** Aquí es donde se guardan todos los templates que se descargan y podras configurar desde aqui.
* **install.php:** El es encargado de las instalaciones que se hacen dentro del CMS.
* **/user:** Esta es una de las carpetas más importante para la mayoría de usuarios en Grav es donde porque almacena y utiliaz complementos y editando sus temas.
* **/user/accounts:** Aqui se definirá las cuentas de usuario si se requieren restricciones de acceso a ciertas partes de su sitio.
* **/user/blueprints:** Blueprintscarpeta contiene sus planos personalizados para el sitio y de cada usuario.
* **/user/config:** Se utilizan para configurar el sitio web y que hayan analizado los archivos de configuracion.
* **/pages:** Aquí es donde se guardan todos los templates que se descargan y podras configurar desde aqui.
* **/user/ data:** GRAV utiliza la carpeta para almacenar datos como por ejemplo los Formularios que puede tomar un formulario web y almacenar los datos enviados en un archivo de texto en esta carpeta.
* **/user/images:** Se utiliza para almacenar sus imágenes y para acceder a esta carpeta se escribe image://stream.
* **/user/languages:** Contiene las anulaciones de traducción que son aquellas que permite al CMS traducir el idioma a otro.
* **/user/pages:** Este es el corazón de Grav donde puedes crear y editar tu sitio web.
* **/user/plugins:** Es un complemento donde puede extender el núcleo rápido de Grav con las características particulares que puede necesitar para su sitio web.
* **/user/themes:** Un tema convierte tu contenido en un verdadero sitio web.
* **/ vendo:** Es una carpeta donde contiene bibliotecas importantes en las que se basa Grav y no podemos editarla.
* **/webserver-configs:** Es una carpeta que contiene las configuraciones de servicios web que incluyen los valores predeterminados necesarios para Grav.
* **Defines.php:** El es encargado de definir todas las extensiones y los tipos de contenidos de GRAV.
* **index.php:** Es el que contienen la información de inicio del sitio web.
* **Robots:** Contiene la configuración para que los buscadores puedan encontrar el sitio de una forma rápida.
* **Htacces:** Es algo del servidor según el que estés usando puede tener configuración para apache o nginx.
* **Licenses:** Es la licencia del CMS por lo general debe estar que es opensuse.
* Composer.json y Composer.lock : Son archivos de dependencia del mismo composer._

_**Todas estas carpetas y subcarpetas que tienen Grav son necesarias porque permiten que tu sitio web funcione de manera correcta , podrás configurar y realizar cambios y todo lo que tú le hagas en el cms se almacenaran dentro de ellas en cada carpeta y repositorio.
**_
