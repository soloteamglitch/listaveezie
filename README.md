
# Generatore e ottimizzatore liste per veezie

Questo generatore ti permette di unire più liste canali automatiche SOLO PASTEBIN in un'unica lista, eliminando link non funzionanti o chiusi e generando una lista autoaggiornante in modo diretto o tramite link pastebin.


# Installazione

Il codice è gia pronto per l'utilizzo, basta creare un server LAMP, apache2 o nginx, per semplificazione utilizzeremo nell'esempio XAMPP.

Installare xampp da questo link https://www.apachefriends.org/it/ 
* avviare xampp <br />
![App Screenshot](https://i.ibb.co/t2jCXXZ/1.png)

* avviare apache <br />
![App Screenshot](https://i.ibb.co/myscRvG/2.png)

* cliccare explorer <br />
![App Screenshot](https://i.ibb.co/FBkXhZT/3.png)

* rimuovere i file dalla cartella <br />
![App Screenshot](https://i.ibb.co/MZzqK7N/4.png)

* inserire nella cartella /htdocs/ i file scaricati da github SCOMPATTATI <br />
![App Screenshot](https://i.ibb.co/47fyMfh/5.png)

* il link sarà http://localhost o dominio dell'hosting se hostato
* IMPORTANTE! Avviato il programma il caricamento è lento perchè sta già generando le liste
* NON SIATE IMPAZIENTI! <br />
![App Screenshot](https://i.ibb.co/GRzsLsx/6.png)

# Utilizzo

# * pastebin.txt
Dove verranno inserite le liste canali autoaggiornanti prese dal web, ricordati solo di non mettere spazi e di andare a capo!

# * index.php
GUI con la possibilità di generare link pastebin diretto.
Da anche la possibilità di copiare e incollare i link direttamente attraverso l'app

# * direct.php
Lista autogenerata sul momento come testo, utilizzabile direttamente attraverso veezie

# * funzioni.php
Tutte le funzioni che permettono il perfetto funzionamento del codice pronte per essere modificate.

# * credenziali.php
Compilare tutte le credenziali necessarie se si vuole utilizzare la funzione di generazione di link pastebin





## Installazione raspberry pi

```bash
    sudo apt-get update && sudo apt-get upgrade
    sudo apt-get install apache2 -y
    sudo apt-get install php -y
    sudo service apache2 stop
    sudo rmdir /var/www/html
    sudo mkdir /var/www/html

    //inserire qua i file scaricati da github
    cd /var/www/html

    sudo service apache2 start

```

per connettersi usare l'ip della raspberry e la sua porta settata in apache2 (solitamente la porta 80)
    
## Demo GUI
* IMPORTANTE! Avviato il programma il caricamento è lento perchè sta già generando le liste
* NON SIATE IMPAZIENTI! <br />

https://veezielist.herokuapp.com/


## Demo direct.php
* IMPORTANTE! Avviato il programma il caricamento è lento perchè sta già generando le liste
* NON SIATE IMPAZIENTI! <br />

https://veezielist.herokuapp.com/direct.php

# NOVITÀ
## Demo /tabella/
* controlla se le liste hanno link che non funzionano e quali
https://veezielist.herokuapp.com/tabella/

* oppure con un solo link in modo diretto
https://veezielist.herokuapp.com/tabella/controllo.php?link=https://pastebin.com/raw/blabla

## Screenshots

![App Screenshot](https://iili.io/5Wfwkg.md.png)

# IMPORTANTE!
Creare un proprio server potrebbe essere utile per evitare ritardi, blocchi o altri problemi che ci potrebbero essere.
Il server demo funziona per un numero limitato di persone e una volta sovracaricato sarà inutilizzabile!
Il team glitch e i suoi sviluppatori e il capo del team non sono in alcun modo associati o collaboratori di Veezie.

# Tutto bello, ma perchè?
Volevo che ognuno potesse avere la possibilità di generare la propria lista sempre funzionante per il meraviglioso programma veezie.
