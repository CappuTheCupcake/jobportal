<!DOCTYPE html>
<html>
<head>
    <title>{{ $user->name }} {{ $user->lastname }} bearbeiten - Jobportal</title>
</head>
<body>
    <h1>{{ $user->name }} {{ $user->lastname }} bearbeiten</h1>
    
    <form method="POST" action="/users/{{ $user->id }}">
        @csrf
        @method('PUT')
        <div>
            <label>Vorname:</label>
            <input type="text" name="name" value="{{ $user->name }}" required>
        </div>
        <div>
            <label>Nachname:</label>
            <input type="text" name="lastname" value="{{ $user->lastname }}" required>
        </div>
        <div>
            <label>E-Mail:</label>
            <input type="email" name="email" value="{{ $user->email }}" required>
        </div>
        <div>
            <label>Neues Passwort (leer lassen für keine Änderung):</label>
            <input type="password" name="password"
            placeholder="Mindestens 8 Zeichen"
            minlength="8">
        </div>
        <div>
            <label>Rolle:</label>
            <select name="role" required>
                <option value="user" {{ $user->role === 'user' ? 'selected' : '' }}>Benutzer</option>
                <option value="employer" {{ $user->role === 'employer' ? 'selected' : '' }}>Arbeitgeber</option>
                <option value="admin" {{ $user->role === 'admin' ? 'selected' : '' }}>Administrator</option>
            </select>
        </div>
        <button type="submit">Aktualisieren</button>
    </form>
    
    <a href="/users/{{ $user->id }}">Zurück zu Details</a>
    <a href="/users">Zurück zur Übersicht</a>
    <a href="/">Zurück zur Startseite</a>
</body>
</html>
