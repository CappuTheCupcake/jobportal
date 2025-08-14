<!DOCTYPE html>
<html>
<head>
    <title>Neue Kategorie erstellen - Jobportal</title>
</head>
<body>
    <h1>Neue Kategorie erstellen</h1>
    
    <form method="POST" action="/categories">
        @csrf
        <div>
            <label>Name:</label>
            <input type="text" name="name" required>
        </div>
        <div>
            <label>Beschreibung:</label>
            <textarea name="description" required></textarea>
        </div>
        <button type="submit">Erstellen</button>
    </form>
    
    <a href="/categories">Zurück zur Übersicht</a>
    <a href="/">Zurück zur Startseite</a>
</body>
</html>
