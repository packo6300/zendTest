<?php

 /**
 * 
 * esta clse esta diseñada con puras constantes diseñada para unificar toda constante que se usa dentro de InAX,
  * para migrar entre produccion o desarrollo basta con cambiar la contante config por el tipo de ambiente que se desee
  * en la base de datos el proceso debera ser manual ya que la clase que toma la decision acerca de el ambiente de desarrollo
  * o produccion en el archivo application.ini
 * @author Francisco Delgado <packo6300@gmail.com>
 */
define("PROJECT_TITLE","Interactua | Dashboard");
define("VERSION", "Interactua: 2.3");
define('WEB_SERVICE_URL', 'http://' . CONFIG . '/xppservice.wsdl');
define('PERIODO_DE_VENTA',1);
define("MESSAGE","VERSION DE ".ACTUAL." (LAS DATOS GENERADOS AQUÍ NO SON VALIDOS) FAVOR DE HACER OBSERVACIONES A DEPARTAMENTO DE DESARROLLO ");