# Projektplanung – Jobportal

## Modelle & Beziehungen

### Modelle
- User
- Company
- Job
- Category
(-Application nur geplant, nicht umgesetzt)

### Beziehungen
- User < --- > Company      1 : n (Ein User kann mehrere Companies besitzen)    User hasMany companies
- Company < --- > Job       1 : n (Eine Company kann mehrere Jobs haben)        Company hasMany jobs
- Category < --- > Job      1 : n (Eine Category kann mehrere Jobs haben)       Category hasMany jobs            
- Job < --- >  Company      1 job gehört zu einer Firma                         Job belongsTo company
- Job < --- >  Category     1 job gehört zu einer Kategorie                     Job belongsTo category

### Benutzerrollen
- admin: Vollzugriff auf alle Modelle und Funktionen
- employer: Kann eigene Companies und Jobs verwalten  
- user: Kann Jobs anzeigen und suchen (später applications senden)

---

## MySQL Tabellenübersicht

### `user`
| Spalte      | Typ          | Beschreibung                  |
|-------------|--------------|-------------------------------|
| id          | INT, PK      | Eindeutige User-ID            |
| name        | VARCHAR(255) | Vorname                       |
| lastname    | VARCHAR(255) | Nachname                      |
| email       | VARCHAR(255) | E-Mail-Adresse                |
| password    | VARCHAR(255) | Passwort (gehasht)            |
| role        | VARCHAR(255) | Benutzerrollen                |
| created_at  | TIMESTAMP    | Erstelldatum                  |
| updated_at  | TIMESTAMP    | Änderungsdatum                |

### `company`
| Spalte      | Typ          | Beschreibung                  |
|-------------|--------------|-------------------------------|
| id          | INT, PK      | Eindeutige Company-ID         |
| user_id     | INT, FK      | Verweis auf `user.id`         |
| name        | VARCHAR(255) | Firmenname                    |
| description | TEXT         | Firmenbeschreibung            |
| created_at  | TIMESTAMP    | Erstelldatum                  |
| updated_at  | TIMESTAMP    | Änderungsdatum                |

### `category`
| Spalte      | Typ          | Beschreibung                  |
|-------------|--------------|-------------------------------|
| id          | INT, PK      | Eindeutige Category-ID        |
| name        | VARCHAR(255) | Kategoriename                 |
| created_at  | TIMESTAMP    | Erstelldatum                  |
| updated_at  | TIMESTAMP    | Änderungsdatum                |

### `job`
| Spalte      | Typ          | Beschreibung                  |
|-------------|--------------|-------------------------------|
| id          | INT, PK      | Eindeutige Job-ID             |
| company_id  | INT, FK      | Verweis auf `company.id`      |
| category_id | INT, FK      | Verweis auf `category.id`     |
| title       | VARCHAR(255) | Jobtitel                      |
| description | TEXT         | Jobbeschreibung               |
| created_at  | TIMESTAMP    | Erstelldatum                  |
| updated_at  | TIMESTAMP    | Änderungsdatum                |

### `Applications`
(*Applications* nur geplant im erm, nicht umgesetzt)

---

## Sitemap

### Startseite
- `/` → Übersicht der Verschiedenen Bereiche, Links
- `/login` → Login für User
- `/register` → Erstellung von User

### User
- `/users` → Listenansicht
- `/users/{id}` → Detailansicht
- `/users/create` → Erstellen
- `/users/{id}/edit` → Bearbeiten

### Company
- `/companies` → Listenansicht
- `/companies/{id}` → Detailansicht
- `/companies/create` → Erstellen
- `/companies/{id}/edit` → Bearbeiten

### Job
- `/jobs` → Listenansicht
- `/jobs/{id}` → Detailansicht
- `/jobs/create` → Erstellen
- `/jobs/{id}/edit` → Bearbeiten

### Category
- `/categories` → Listenansicht
- `/categories/{id}` → Detailansicht
- `/categories/create` → Erstellen
- `/categories/{id}/edit` → Bearbeiten
