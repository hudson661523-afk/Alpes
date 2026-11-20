# Configuration sécurisée de l’envoi des demandes de réservation

Ce site utilise PHPMailer avec Gmail SMTP (`smtp.gmail.com`, port `587`, STARTTLS). Le mot de passe ne doit **jamais** être placé dans JavaScript, HTML, GitHub, un fichier public ou une réponse JSON.

Le code cherche les identifiants dans cet ordre :

1. Variables d’environnement serveur (`ALPES_SMTP_PASSWORD`, etc.) ;
2. Fichier PHP protégé défini par `ALPES_MAIL_CONFIG` ;
3. Fichier par défaut : répertoire parent de la racine web du site, puis `alpes-transport-private/mail.php` (sur Hostinger, généralement au même niveau que `public_html`).

Tant qu’aucun mot de passe n’est configuré, l’endpoint échoue sans révéler de détail et affiche le message d’erreur générique.

## 1. Créer le mot de passe d’application Google

1. Connectez-vous au compte Google `alpestransport@gmail.com`.
2. Ouvrez <https://myaccount.google.com/security>.
3. Activez **Validation en deux étapes** si elle ne l’est pas déjà. L’option *Mots de passe des applications* est masquée tant que cette protection est inactive.
4. Dans la section **Validation en deux étapes**, cliquez sur **Mots de passe des applications** (ou recherchez « App passwords » dans la recherche du compte Google).
5. Pour **Sélectionner une application**, choisissez **Courrier** / **Mail**.
6. Pour **Sélectionner un appareil**, choisissez **Autre (nom personnalisé)** et saisissez par exemple `Alpes Transport Website`.
7. Cliquez sur **Générer**.
8. Copiez le mot de passe de 16 caractères affiché par Google. Les espaces sont ignorés, mais vous pouvez les conserver dans le fichier PHP.
9. Si l’option n’apparaît pas, vérifiez la validation en deux étapes et les règles administrateur du compte Google Workspace. N’utilisez jamais le mot de passe Gmail normal.

## 2. Stocker le secret sur Hostinger (méthode recommandée)

1. Dans hPanel, ouvrez **Sites web** → **Gérer** sur le site concerné → **Fichiers** → **Gestionnaire de fichiers**.
2. Ouvrez le répertoire **parent de `public_html`** (la racine du compte d’hébergement). Le fichier ne doit **pas** être dans `public_html`.
3. Créez le dossier `alpes-transport-private`.
4. Dans ce dossier, créez le fichier `mail.php`.
5. Collez le contenu suivant en remplaçant uniquement l’espaces réservé par le mot de passe d’application généré :

```php
<?php
return [
    'smtp_host' => 'smtp.gmail.com',
    'smtp_port' => 587,
    'smtp_encryption' => 'starttls',
    'smtp_username' => 'alpestransport@gmail.com',
    'smtp_password' => 'REPLACE_WITH_GMAIL_APP_PASSWORD',
    'from_email' => 'alpestransport@gmail.com',
    'to_email' => 'alpestransport@gmail.com',
];
```

6. Enregistrez le fichier. Ne l’ajoutez pas à Git : `config/mail.php` et `alpes-transport-private/` sont ignorés, et une règle `.htaccess` refuse l’accès HTTP à ce dossier s’il était copié par erreur dans le déploiement.
7. Si vous avez accès SSH, renforcez les droits :

```bash
chmod 600 ~/alpes-transport-private/mail.php
chmod 700 ~/alpes-transport-private
```

8. Si votre compte Hostinger utilise une autre racine d’hébergement, créez une variable serveur `ALPES_MAIL_CONFIG` contenant le chemin absolu vers ce fichier, par exemple `/home/USERNAME/alpes-transport-private/mail.php`.

### Méthode alternative par variables d’environnement

Si votre offre Hostinger expose bien les variables d’environnement pour le PHP exécuté côté site, définissez au minimum :

```text
ALPES_SMTP_USERNAME=alpestransport@gmail.com
ALPES_SMTP_PASSWORD=LE_MOT_DE_PASS_D_APPLICATION
ALPES_FROM_EMAIL=alpestransport@gmail.com
ALPES_BOOKING_TO=alpestransport@gmail.com
```

Les autres valeurs ont déjà des valeurs sûres par défaut. Ne créez pas de fichier `.env` dans le dépôt ; `.env.example` ne contient que des espaces réservés.

## 3. Vérification

1. Déployez le code, puis ouvrez la page de réservation sur le site de préproduction.
2. Remplissez les champs obligatoires et cliquez sur **Réserver en ligne**.
3. Le statut doit afficher `Envoi de votre demande...`, puis :
   `Votre demande a été envoyée. Notre équipe vous contactera pour confirmer la disponibilité.`
4. Vérifiez la réception du message dans la boîte `alpestransport@gmail.com`. Tant qu’aucun e-mail réel n’est reçu, ne déclarez pas l’envoi opérationnel.
5. En cas d’échec, l’interface affiche uniquement :
   `Votre demande n'a pas pu être envoyée. Veuillez réessayer.`
   Les détails techniques restent dans le journal d’erreurs privé du serveur, sans mot de passe ni données personnelles.

Le bouton **Préparer mon récapitulatif** ne déclenche aucun envoi : il affiche uniquement le récapitulatif sous le formulaire.
