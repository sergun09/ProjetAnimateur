## Composition du groupe

- ERGUN Sinan
- GITTEAU Sidney
- DECAMP Dayan 

**COMMANDE A EFFECTUER AVANT DE DEMARRER LE PROJET**
<p>BDD fournie et déjà remplie ! Pas besoin de load les fixtures !</p>
<p>Pour générer le vendor :  symfony composer require symfony/runtime</p>
<p>Droits d'accès à la BDD : **chmod a+wrx var/CC.db** puis **chmod 777 var**</p>
<p>Il arrive que WebPack se désinstalle pour une raison inconnu (entrypoints.js does not exist) alors : npm install @symfony/webpack-encore --dev puis npm run watch</p>

**COMPTES**

<p>Admin => Username : Admin28 | Password : Admin123</p>
<p>Animateur => Username : BobAnim | Password : Bob123</p>
<p>Enfant => Username : Enfant45 | Password : Enfant123</p>

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

##### Question 10

- Utilisations des annotations pour restreindre l'accès à l'edit et au delete

##### Question 11

- Embellissement de l'application

##### Question 12

- symfony console make:entity Activite
- symfony console make:migration
- symfony console doctrine:migrations:migrate

##### Question 13

- symfony console make:entity User
- symfony console make:migration
- symfony console doctrine:migrations:migrate

##### Question 14

- Embellissement de l'application

##### Question 15

- symfony console:make crud User


##### Question 16

- Gestion des autorisations

##### Question 17

- Embellissement de l'application

