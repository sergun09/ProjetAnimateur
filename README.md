## Composition du groupe

- ERGUN Sinan
- GITTEAU Sidney
- DECAMP Dayan 


<p>Pour générer les dossiers var et vendor (si ils n'existent pas) : **symfony composer require symfony/runtime**</p>
<p>Si vous n'avez pas les droits des actions CRUD sur la BDD : **chmod a+wrx var/CC.db**</p>
<p>Pour générer la BBD : symfony console doctrine:migrations:migrate </p>
<p>Pour géréler les fixtures : symfony console doctrine:fixtures:load</p>
<p>Il arrive que WebPack se désinstalle pour une raison inconnu (entrypoints.js does not exist) alors : npm install @symfony/webpack-encore --dev</p>

##### Question 1

- symfony composer require symfony/webpack-encore-bundle
- npm install
- npm install sass-loader@^12.4.0 node-sass --save-dev
- npm run build
- npm install bootstrap

##### Question 2


- symfony console make:entity Activite
- symfony console doctrine:database:create
- symfony console make:migration
- symfony console doctrine:migrations:migrate

##### Question 3

- symfony composer require fakerphp/faker
- symfony composer require orm-fixtures --dev
- symfony console make:fixture
- symfony console doctrine:fixtures:load

##### Question 4

- symfony console make:crud

##### Question 5

- Embellissement de l'application

##### Question 6

- composer require cebe/markdown

##### Question 7

- symfony console make:user
- symfony console make:entity User
- symfony console make:migration
- symfony console doctrine:migrations:migrate
- symfony console make:auth
- symfony console make:registration-form

##### Question 8

- symfony console make:entity Activite
- symfony console make:migration
- symfony console doctrine:migrations:migrate
- symfony console doctrine:fixtures:load

##### Question 9

- Modification du security.yaml pour restreindre l'accès à la création d'une activité

##### Question 9

- Utilisations des annotations pour restreindre l'accès à l'edit et au delete
