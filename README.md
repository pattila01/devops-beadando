# GDE DevOps beadandó - Hello World PHP app
# Puizl Attila Zoltán - SK4MX8
# Kránitz Norbert tanár úr részére

Ez egy egyszerű "Hello World" szintű PHP alkalmazás, amely bemutatja az alapvető DevOps folyamatokat: verziókövetés, buildelés, dockerizálás és felhő alapú közzététel.

******

1. Buildelés:

A projekt tartalmaz egy build szkriptet, amely ellenőrzi a PHP szintaxist és előkészíti a fájlokat a `dist` mappába.

Build parancs futtatása:

php build.php

Ez a parancs lefuttat egy php -l szintaxis ellenőrzést, és ha sikeres, létrehozza a terjeszthető fájlokat.

******

2. Dockerizálás:

Az alkalmazáshoz készült Dockerfile, amely a hivatalos php:8.2-apache image-re épül. A konténer automatikusan elindítja az Apache webszervert a 80-as porton.

Image build parancs:

docker build -t php-devops-app .

Futtatási parancs:

docker run -p 8080:80 php-devops-app

Ezután az alkalmazás elérhető a http://localhost:8080 címen.

******

3. Cloud Deploy (választott extra feladat):

Az alkalmazás automatikus telepítésre (CD) került a Render felhőszolgáltatóhoz.

Szolgáltató: Render.com

Típus: Web Service (Docker runtime)

Deploy folyamat: a GitHub repository össze van kötve a Renderrel. Minden main branch-re érkező push automatikusan elindítja a build folyamatot a Render szerverein, majd frissíti az éles alkalmazást.

Nyilvános URL: https://devops-beadando-sk4mx8.onrender.com/

******