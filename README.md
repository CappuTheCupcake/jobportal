# Job Portal

Ein browserbasiertes Jobportal zur Verwaltung von Stellenanzeigen, Unternehmen und Kategorien.

## Einrichtung

```bash
# 1. Repository clonen und in den Ordner wechseln
git clone https://github.com/CappuTheCupcake/jobportal
cd jobportal

# 2. Dependencies installieren
composer install

# 3. Umgebung konfigurieren
cp .env.example .env
php artisan key:generate

# 4. .env für MySQL anpassen (Sail verwendet diese Standardwerte)
DB_CONNECTION=mysql
DB_HOST=mysql
DB_DATABASE=laravel
DB_USERNAME=sail
DB_PASSWORD=password

# 5. Docker starten (Sail)
./vendor/bin/sail up -d

# 6. Datenbank einrichten
./vendor/bin/sail artisan migrate:fresh --seed
```

## Fertig!

Das Projekt ist nun unter http://localhost erreichbar und einsatzbereit, solange der Docker Container gestartet ist. Alle Datenbanktabellen wurden erstellt und mit Beispieldaten gefüllt.