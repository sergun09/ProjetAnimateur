## Composition du groupe

- ERGUN Sinan
- GITTEAU Sidney
- DECAMP Dayan 


##### Question 1

- symfony composer require symfony/webpack-encore-bundle
- npm install
- npm install sass-loader@^12.4.0 node-sass --save-dev
- npm run build
- npm install bootstrap

##### Question 2

- <p>Pour générer les dossiers var et vendor (si ils n'existent pas) : **symfony composer require symfony/runtime**</p>

- symfony console make:entity Activite
- symfony console doctrine:database:create
- symfony console make:migration
- symfony console doctrine:migrations:migrate

##### Question 3

- symfony composer require orm-fixtures --dev
- symfony console make:fixture
- symfony console doctrine:fixtures:load

##### Question 4

- symfony console make:crud

##### Question 5

- Embellissement de l'application
