## Respuestas al Test

### 2a

Para el desarrollo de este requerimiento utilizaría el componente de Symfony llamado 
["The DomCrawler Component"](https://symfony.com/doc/current/components/dom_crawler.html) en
conjunto con el paquete "symfony/css-selector" el cual sirve para seleccionar nodos de un XML por atributos.

La idea de usar este componente es que fácilmente se puede instanciar el crawler y filtrar por un nodo en específico. 
Al filtrar, este devuelve un array el cual podemos recorrer fácilmente para obtener el contenido del nodo "heading"
 
### 3a
Las funciones include y require sirven para incluir o importar el contenido de ficheros. Principalmente se utilizan
para separar funcionalidades en busca de estructurar mejor el proyecto, es decir, estandarizar aquellas partes del 
código que son utilizadas en distintas partes del codigo y aplicar la premisa de "Don't repeat yourself".

### 3b
Si un fichero no existe cuando se intenta usar la función "include", php arrojará un warning indicando que no se pudo 
incluir el fichero puesto que no se encuentra o no existe. Si se utiliza require, php arrojará un PHP Fatal Error y se 
detendrá la ejecución del código.

### 3c
La diferencia que tiene require e include en comparación de require_once e include_once es que estas dos últimas funcionan
de la misma manera de cada una, con la facultad de que si el fichero existe, verificará que no haya sido incluido o requerido
previamente.

### 4
a = 17
b = 3
c = 7

### CONOCIMIENTOS JAVASCRIPT Y JQUERY
1. A través del método: getElementById("id");
```Javascript
document.getElementById("btnSend");
```
1. A través del método: getElementsByClassName("class");
```Javascript
document.getElementsByClassName("col-sm-10");
```
1. Utilizando los selectores de jQuery seria de la siguiente forma:
```Javascript
$('.class')
$('#id')
```
1. Utilizando el método .each()
```javascript
var arrElementos = [ "uno", "dos", "tres", "cuatro", "cinto" ];
$.each( arrElementos, function( i, val ) {
  console.log('El elemento ' + i + ' tiene valor de: ' + val);
});
``` 
1. Utilizando el método .get(), o .post() o .ajax según se necesite:
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

### PRUEBA NIVEL DE DESARROLLO
### CONOCIMIENTOS SYMFONY

1. b y c
1. b y d
1. a y b
1. a
1. b
1. c