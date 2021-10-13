INSTALLATION
--------------

este proyecto se realizo con la instalacion de Docker y Lando

* https://docs.lando.dev/
* https://www.docker.com/


despues de contener lando y docker, debe clonar el repositorio, una vez instalado ingresar a la carpeta del repositorio y ingresar los siguientes comandos

* lando start
* lando db-import backup-2021-10-13T20-14-13.mysql.gz

he ingresar a la url 

https://mobster.lndo.site/



NOTA
-----------
en caso tal de no visualizar las imagenes puede descomprimir la carpeta files.gz que se encuentra en la carpeta principal,
despues ingresar a /sites/default/files,   descomprimir y remplazarla por la actual


SASS
----------
Para poder manejar los estilos debe seguir los siguientes pasos

* ingresar a la carpeta del tema mediante la terminal (/themes/custom/mobster_theme)
* npm install 
* npm run watch

NOTA
-----------
asegurarse de la version de node instalada