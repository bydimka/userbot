# TGUserbot

Installazione
-------------
	apt-get -y install php php-mbstring php-xml php-gmp php-curl php-mcrypt php-bcmath
    curl -sS https://getcomposer.org/installer | sudo php -- --install-dir=/usr/bin --filename=composer
    git clone https://github.com/TravisScottex/TGUserbot
	cd TGUserbot
	composer update
	

Configurazione
---------------
Apri il file `.env` e sostituisci `+390123456789` col numero di telefono.
E' consigliato [creare](https://my.telegram.org) l'api_id e l'api_hash.
Per "personalizzare" il bot modifica `bot.php`


Comandi
-------
    .spam


Avvio
-----
	php start.php



