## Respuestas al Test

### 1
Se tiene un fichero con nombre read_file.log en la ruta /var/logs/. El fichero contiene una
línea para cada evento surgido en un proceso de backend en el que se almacenan errores. Se
pide escribir un script que sea capaz de leer las líneas de error del fichero read_file.log y
escribirlas en un fichero dentro del mismo directorio con nombre error_read_file.log.

El contenido del fichero read_file.log sigue un patron establecido y tiene este aspecto:

```text
2015/10/22 – 22:33:12#OK#File /tmp/temp1.txt processed
2015/10/22 – 22:37:51#OK#File /tmp/temp2.txt processed
2015/10/22 – 22:41:03#ERROR#File /tmp/temp3.txt does not exist
2015/10/22 – 23:15:13#OK#File /tmp/temp4.txt processed
2015/10/23 – 00:03:12#ERROR#File /tmp/temp5.txt not readable, permission denied
2015/10/23 – 00:12:06#OK#File /tmp/temp6.txt processed
```
El fichero read_file.log se limpia cada día, pero se quiere que el fichero error_read_file.log vaya
almacenando todas las líneas de error que hayan surgido.

- ***Para ver el resultado abrir el fichero ubicado en 1/1.php***
- ***Para ver el resultado, ejecutar lo siguiente:***
```bash
~ cd 1
~ php 1.php
```

### 2
Se tiene un fichero XML al cual se quiere acceder para recoger cierta información. El fichero
XML tiene una estructura:
```xml
<?xml version="1.0" encoding="UTF-8"?>
<messages>
<note id="501">
<to>Tove</to>
<from>Jani</from>
<heading>Reminder</heading>
<body>Don't forget me this weekend!</body>
</note>
<note id="502">
<to>Jani</to>
<from>Tove</from>
<heading>Re: Reminder</heading>
<body>I will not</body>
</note>
</messages>
```
### 2a
Sabiendo que se debe usar PHP para programar la lectura de este fichero. Comente
brevemente qué estrategia, funciones nativas del lenguaje o librerías que conozca utilizaría para
realizar su lectura de la manera más eficiente posible.

***Respuesta:***
 
Para el desarrollo de este requerimiento utilizaría el componente de Symfony llamado 
["The DomCrawler Component"](https://symfony.com/doc/current/components/dom_crawler.html) en
conjunto con el paquete "symfony/css-selector" el cual sirve para seleccionar nodos de un XML por atributos.

La idea de usar este componente es que fácilmente se puede instanciar el crawler y filtrar por un nodo en específico. 
Al filtrar, este devuelve un array el cual podemos recorrer fácilmente para obtener el contenido del nodo "heading"
 
### 2b
Siguiendo con su planteamiento, escriba el código necesario para recuperar o escribir por
pantalla un listado de los títulos o headings de todos los mensajes almacenados en el fichero
XML.

- ***Para ver el resultado abrir el fichero ubicado en 2/2.php***
- ***Para ver el resultado, ejecutar lo siguiente:***
```bash
~ cd 2
~ php 2.php
```

## 3. Responda a las siguientes preguntas sobre funciones básicas: 
 
### a. ¿Para qué se utilizan las funciones de PHP include(filename) y require(filename)?
 
Las funciones include y require sirven para incluir o importar el contenido de ficheros. Principalmente se utilizan
para separar funcionalidades en busca de estructurar mejor el proyecto, es decir, estandarizar aquellas partes del 
código que son utilizadas en distintas partes del codigo y aplicar la premisa de "Don't repeat yourself".

### b. ¿Qué ocurre si el fichero referenciado por filename no existe cuando se utiliza una u otra función?

Si un fichero no existe cuando se intenta usar la función "include", php arrojará un warning indicando que no se pudo 
incluir el fichero puesto que no se encuentra o no existe. Si se utiliza require, php arrojará un PHP Fatal Error y se 
detendrá la ejecución del código.

### c. ¿Qué diferencias tienen con las funciones include_once(filename) y require(filename) ?

La diferencia que tiene require e include en comparación de require_once e include_once es que estas dos últimas funcionan
de la misma manera de cada una, con la facultad de que si el fichero existe, verificará que no haya sido incluido o requerido
previamente.

## PRUEBA NIVEL DE DESARROLLO

### 4. Teniendo el siguiente script, indique cual será la salida por pantalla de los valores de las variables:
```php
<?php
$a = 0;
$b = 0;
$c = 0;
function suma($value1, $value2){
global $a;
$a = $value1 + $value2;
return $a;
}
$b = suma(1,2);
$c = suma(3,4);
$a += $b + $c;
echo “a = “.$a.”\n”;
echo “b = “.$b.”\n”;
echo “c = “.$c.”\n”;
?>
```

Escriba aqui su solución:
- a = 17
- b = 3
- c = 7

### CONOCIMIENTOS JAVASCRIPT Y JQUERY

### 1. Mediante Javascript, ¿de qué manera se puede recuperar un elemento del DOM a través de su identificador? 
A través del método: getElementById("id");
```Javascript
document.getElementById("btnSend");
```
### 2. Mediante Javascript, ¿Es posible recuperar un elemento concreto del DOM a través de otros atributos de su estructura, como por ejemplo, de su class?
A través del método: getElementsByClassName("class");
```Javascript
document.getElementsByClassName("col-sm-10");
```

### 3. Utilizando Jquery, ¿cómo se podrían recuperar elementos a través de su identificador o de su class?
Utilizando los selectores de jQuery seria de la siguiente forma:
```Javascript
$('.class') # Para seleccionar por clase css
$('#id') # Para seleccionar por Id
```

### 4. Utilizando Jquery, describa brevemente de qué manera se pueden recorrer los elementos de un array.
Utilizando el método .each()
```javascript
var arrElementos = [ "uno", "dos", "tres", "cuatro", "cinto" ];
$.each( arrElementos, function( i, val ) {
  console.log('El elemento ' + i + ' tiene valor de: ' + val);
});
``` 

### 5. Utilizando Jquery, ¿qué función utilizaría para realizar una petición HTTP y cómo se podrían realizar acciones cuando ha tenido éxito dicha petición?
Utilizando el método .get(), o .post() o .ajax según se necesite:
```javascript
var request = $.get( "mi_ejemplo.php", function() {
})
  .done(function() {
    alert( "exito" );
  })
  .fail(function() {
    alert( "error" );
  });
```

### CONOCIMIENTOS DE BASES DE DATOS

Se tiene un sistema con una base de datos que contiene páginas de un sitio web siguiendo el
diagrama que se muestra más abajo. Sobre ese sistema se quiere añadir una funcionalidad que
permita asociar campañas publicitarias para éstas páginas. Deben cumplirse los siguientes
requisitos:

- Las campañas deben tener cada una un identificador, un nombre.
- Cada página puede tener asociada distintas campañas, pero una campaña solo puede aparecer una vez en una página.
- Las campañas son reutilizables, es decir, pueden aparecer en varias páginas.
- Las campañas que aparecen en una página tienen un coste asociado en euros.

1.- Sobre el diagrama actual, dibuje cuál sería la mejor solución para implementarla en una base
de datos.

Estructura de la BD

![Diagrama BD](diagrama-db.png)

SQL DE LA ESTRUCTURA DEFINIDA:
```sql
CREATE TABLE page (
`id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100) NOT NULL
);

CREATE TABLE campaign (
`id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100) NOT NULL
);

CREATE TABLE page_campaign (
`page_id` INT(11) NOT NULL,
`campaign_id` INT(11) NOT NULL,
`cost` DECIMAL(10,2) NOT NULL,
CONSTRAINT PK_PAGE_CAMPAIGN PRIMARY KEY (page_id, campaign_id)
);
```
INSERTS DE DATOS
```sql
-- Tabla page
INSERT INTO wptest.page (id, name) VALUES (1, 'Pagina 1');
INSERT INTO wptest.page (id, name) VALUES (2, 'Pagina 2');
INSERT INTO wptest.page (id, name) VALUES (3, 'Pagina 3');

-- Tabla campaign
INSERT INTO wptest.campaign (id, name) VALUES (1, 'Campaña 1');
INSERT INTO wptest.campaign (id, name) VALUES (2, 'Campaña 2');
INSERT INTO wptest.campaign (id, name) VALUES (3, 'Campaña 3');
INSERT INTO wptest.campaign (id, name) VALUES (4, 'Campaña 4');
INSERT INTO wptest.campaign (id, name) VALUES (5, 'Campaña 5');

-- Tabla page_campaign
INSERT INTO wptest.page_campaign (page_id, campaign_id, cost) VALUES (1, 1, 170.00);
INSERT INTO wptest.page_campaign (page_id, campaign_id, cost) VALUES (1, 2, 190.00);
INSERT INTO wptest.page_campaign (page_id, campaign_id, cost) VALUES (1, 4, 220.00);
INSERT INTO wptest.page_campaign (page_id, campaign_id, cost) VALUES (2, 1, 140.00);
INSERT INTO wptest.page_campaign (page_id, campaign_id, cost) VALUES (2, 2, 240.00);
INSERT INTO wptest.page_campaign (page_id, campaign_id, cost) VALUES (2, 5, 146.00);
INSERT INTO wptest.page_campaign (page_id, campaign_id, cost) VALUES (3, 1, 290.00);
INSERT INTO wptest.page_campaign (page_id, campaign_id, cost) VALUES (3, 3, 199.00);
INSERT INTO wptest.page_campaign (page_id, campaign_id, cost) VALUES (3, 4, 100.00);
```

### Sobre el diagrama de base de datos que ha diseñado y mediante lenguaje SQL, escriba las consultas que sean necesarias para extraer la siguiente información reflejada en los ejemplos:

2.- Listado de nombres de páginas y campañas asociadas
```sql
SELECT 
    p.name AS 'Pagina',
    c.name AS 'Campaña' 
FROM 
    page_campaign pc 
INNER JOIN 
    page p ON p.id = pc.page_id 
INNER JOIN 
    campaign c ON c.id = pc.campaign_id 
```

3.- Coste total de cada una de las campañas en todas las páginas del sistema
```sql
SELECT 
    c.name AS 'Campaña',
    SUM(pc.cost AS 'Coste total')
FROM 
    page_campaign pc 
INNER JOIN 
    page p ON p.id = pc.page_id 
INNER JOIN 
    campaign c ON c.id = pc.campaign_id
GROUP BY 
    pc.campaign_id
```

### CONOCIMIENTOS UNIX

### CONOCIMIENTOS SYMFONY

Responder a las siguientes preguntas, eligiendo una o varias de las opciones que se ofrecen.

1.- ¿Cuál de los siguientes archivos son Front Controllers?
- a) app/console
- b) web/app.php ***[x]***
- c) web/app_dev.php ***[x]***
- d) Symfony\Bundle\FrameworkBundle\Controller

2.- Suponiendo que estamos en la versión 2.3 ¿Cuál de los siguientes directorios no reside dentro del directorio app?
- a) cache
- b) web ***[x]***
- c) config
- d) vendor ***[x]***

3.- ¿Qué métodos están recomendados para realizer una instalación de Symfony?
- a) Symfony Installer ***[x]***
- b) Composer ***[x]***
- c) Descargando un zip/tgz desde symfony.com
- d) apt-get / yum

4.- ¿Qué archivo debería contener la configuración relacionada con la capa de infraestructura,
por ejemplo, los datos de conexión de base de datos?
- a) app/config/parameters.ym ***[x]***
- b) app/config/config.yml
- c) app/config/routing.yml
- d) app/config/config_dev.yml

5.- En composer, ¿cuál de los siguientes requerimientos de versión es equivalente a ~1.2?
- a) >=1.2
- b) >=1.2 <2.0 ***[x]***
- c) >=1.2 <=1.3
- d) >=1.2 <1.3

6.- Dado el siguiente fichero composer.json ¿cuántos paquetes se descargarán en la carpeta
vendors?
```json
{"require":{
"php":">=5.3.3",
"symfony/framework-bundle":"2.3.*",
"twig/extensions":"1.0.*"}
}
```
- a) Ninguno
- b) Un paquete
- c) Dos o más paquetes ***[x]***