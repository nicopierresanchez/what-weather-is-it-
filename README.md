
La technologie utilisée est `symfony 4.3.2`

L'api utilisé pour récupérer la météo est `Open Weather`

La fonction `dump` de symfony permet d'afficher des données lorsqu'on est en mode debug.

### Installation du projet

Installer PHP 7.2 ou supérieur

    sur debian utiliser ces instructions:

    apt install apt-transport-https lsb-release ca-certificates

    wget -O /etc/apt/trusted.gpg.d/php.gpg https://packages.sury.org/php/apt.gpg

    echo "deb https://packages.sury.org/php/ $(lsb_release -sc) main" > /etc/apt/sources.list.d/php.list

    apt update

    apt install php7.2

    sur ubuntu utiliser ces instructions:

    apt-get install software-properties-common

    add-apt-repository ppa:ondrej/php

    apt update

    apt install php7.2

Installer composer: https://getcomposer.org/
Clonner le repo git sur votre PC
Lancer la commande `composer install`
Se créer un compte sur le site `https://openweathermap.org/`, obtenir une clef d'API gratuite.
Renseigner la clef dans la variable d'environnement `WEATHER_API_KEY` (suivre les instructions fournies dans le fichier `.env`)
Lancer la commande `php bin/console server:run` pour lancer un serveur web qui écoute sur l'adresse `http://127.0.0.1:8000`
La page qui affichera la météo est disponible à l'url `http://127.0.0.1:8000/weather`

