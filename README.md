# ISI2Foot

Projet d'ISI2 en PHP avec le framework Laravel. Le projet est accessible à l'adresse https://isi2foot.herokuapp.com

## Usage

### En local 

Installer la base de données fournies dans database/dbfile au nom de "isi2foot.sql" 

Créer un utilisateur ayant accès à cette base et re-configurer le .env 

Celui par défaut est créé en lançant mariadb (ou mysql)

```
sudo mariadb
```

Puis avec les commandes suivantes dans la console mariadb (ou mysql), après avoir créé la base "isi2foot"

```
create user userfoot@localhost identified with mysql_native_password by 'userfoot';

grant all privileges on isi2foot.* to userfoot@localhost with grant option;

flush privileges;
```

Une fois le tout bien set-up, le site se lance par le moyen de la commande suivante:

```
php artisan serve
```

### En ligne

Re-configurez le .env selon votre configuration, déployer ensuite.
