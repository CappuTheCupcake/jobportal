<!DOCTYPE html>
<html>
<head>
    <title>Neue Firma erstellen - Jobportal</title>
</head>
<body>
    <h1>Neue Firma erstellen</h1>
    
    <form method="POST" action="/companies">
        @csrf
        <div>
            <label>Firmenname:</label>
            <input type="text" name="name" required>
        </div>
        <div>
            <label>Beschreibung:</label>
            <textarea name="description" required></textarea>
        </div>
        <div>
            <label>Besitzer (User):</label>
            <select name="user_id" required>
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }} {{ $user->lastname }} ({{ $user->email }})</option>
                @endforeach
            </select>
        </div>
        <button type="submit">Erstellen</button>
    </form>
    
    <a href="/companies">Zurück zur Übersicht</a>
    <a href="/">Zurück zur Startseite</a>
</body>
</html>
