Mode d'emploi Installation Projet Zartist.

Etape 1 : Installez Wamp et Composer sur votre ordinateur

Etape 2 : Telechargez ce repository puis installez le dans le dossier "www" du repertoire de Wamp

Etape 3 : Ajoutez un Virtualhost dans les configuration de Wamp et nommez le "Zartist" et faire pointer le chemin absolue dans le dossier "public" du projet puis redemarer les services de Wamp.

Etape 4 : Sur l'url http://localhost/phpmyadmin -> accedez à votre gestionnaire de base de donnée en local et créez une base de donnée vierge "zartist" ainsi qu'un compte utilisateur qui lui est propre.
          Notez bien le nom de la base de donnée ainsi que les identifiant du compte utilisateur que vous avez créez.

Etape 5 : Ouvrez votre projet dans l'éditeur de texte de votre choix puis dans le dossier général, creer un fichier ".env", copiez ce code en modifiant bien les lignes **A MODIFIER** puis enregistrez: 

                APP_NAME=Laravel
                APP_ENV=local
                APP_KEY=base64:8CrR/iW63wIE2VsODdRLVosoyKSHzz7hP9SxXM5madU=
                APP_DEBUG=true
                APP_URL=http://localhost

                LOG_CHANNEL=stack
                LOG_LEVEL=debug

                DB_CONNECTION=mysql
                DB_HOST=127.0.0.1
                DB_PORT=3306
                DB_DATABASE=zartist
                DB_USERNAME="Identifiant utilisateur" **A MODIFIER**
                DB_PASSWORD="Mot de passe Utilisateur" **A MODIFIER**

                BROADCAST_DRIVER=log
                CACHE_DRIVER=file
                QUEUE_CONNECTION=sync
                SESSION_DRIVER=file
                SESSION_LIFETIME=120

                MEMCACHED_HOST=127.0.0.1

                REDIS_HOST=127.0.0.1
                REDIS_PASSWORD=null
                REDIS_PORT=6379

                MAIL_MAILER=smtp
                MAIL_HOST=mailhog
                MAIL_PORT=1025
                MAIL_USERNAME=null
                MAIL_PASSWORD=null
                MAIL_ENCRYPTION=null
                MAIL_FROM_ADDRESS=null
                MAIL_FROM_NAME="${APP_NAME}"

                AWS_ACCESS_KEY_ID=
                AWS_SECRET_ACCESS_KEY=
                AWS_DEFAULT_REGION=us-east-1
                AWS_BUCKET=

                PUSHER_APP_ID=
                PUSHER_APP_KEY=
                PUSHER_APP_SECRET=
                PUSHER_APP_CLUSTER=mt1

                MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
                MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"


Etape 6 : Depuis la racine de votre projet, ouvrez un terminal de commande et tapez : composer install
          et attendez la fin de l'installation.

Etape 7 : Dans le même terminal, utilisez la commande : php artisan migrate:fresh 
          pour avoir sur une base de donnée prête à l'emploi.

Etape 7bis : Importez la base de donnée situé dans ce repo "Zartist.sql" avec votre gestionnaire phpmyadmin pour récupérer des données d'exemple.

Etape 8 : Verifiez que vos services Wamp son bien activés "logo vert", vous pouvez ouvrir votre navigateur web et saisir l'URL : http://Zartist 















Exemple de lien vers musique LDD 

1 : https://www.auboutdufil.com/get.php?fla=https://archive.org/download/meydan-changes/Meydan-Changes.mp3

2 : https://www.auboutdufil.com/get.php?fla=https://archive.org/download/stellardrone-to-the-great-beyond/Stellardrone-ToTheGreatBeyond.mp3

3 : https://www.auboutdufil.com/get.php?fla=https://archive.org/download/underthegaiac-wildbirth/Underthegaiac_wildbirth.mp3