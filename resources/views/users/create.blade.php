<!DOCTYPE html>
<html>
<head>
    <title>Neuen Benutzer erstellen - Jobportal</title>
</head>
<body>
    <h1>Neuen Benutzer erstellen</h1>
    
    <form method="POST" action="/users">
        @csrf
        <div>
            <label>Vorname:</label>
            <input type="text" name="name" required>
        </div>
        <div>
            <label>Nachname:</label>
            <input type="text" name="lastname" required>
        </div>
        <div>
            <label>E-Mail:</label>
            <input type="email" name="email" required>
        </div>
        <div>
            <label>Passwort:</label>
            <input type="password" name="password" required
            placeholder="Mindestens 8 Zeichen"
            minlength="8">
        </div>
        <div>
            <label>Rolle:</label>
            <select name="role" required>
                <option value="user">Benutzer</option>
                <option value="employer">Arbeitgeber</option>
                <option value="admin">Administrator</option>
            </select>
        </div>
        <button type="submit">Erstellen</button>
    </form>
    
    <a href="/users">Zurück zur Übersicht</a>
    <a href="/">Zurück zur Startseite</a>
</body>
</html>
