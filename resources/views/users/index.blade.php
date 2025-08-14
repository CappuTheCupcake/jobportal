<!DOCTYPE html>
<html>
<head>
    <title>Alle Benutzer - Jobportal</title>
</head>
<body>
    <h1>Alle Benutzer</h1>
    
    <a href="/users/create">Neuen Benutzer erstellen</a>
    
    <div>
        @foreach($users as $user)
            <div style="border: 1px solid #ccc; margin: 10px; padding: 10px;">
                <h3>{{ $user->name }} {{ $user->lastname }}</h3>
                <p><strong>E-Mail:</strong> {{ $user->email }}</p>
                <p><strong>Rolle:</strong> {{ $user->role }}</p>
                <p><strong>Erstellt:</strong> {{ $user->created_at }}</p>
                <a href="/users/{{ $user->id }}">Details anzeigen</a>
                <a href="/users/{{ $user->id }}/edit">Bearbeiten</a>
            </div>
        @endforeach
    </div>
    
    <a href="/">Zurück zur Startseite</a>
</body>
</html>
