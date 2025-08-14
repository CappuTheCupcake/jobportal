<!DOCTYPE html>
<html>
<head>
    <title>{{ $user->name }} {{ $user->lastname }} - Jobportal</title>
</head>
<body>
    <h1>{{ $user->name }} {{ $user->lastname }}</h1>
    
    <div>
        <p><strong>E-Mail:</strong> {{ $user->email }}</p>
        <p><strong>Rolle:</strong> {{ $user->role }}</p>
        <p><strong>Erstellt:</strong> {{ $user->created_at }}</p>
        <p><strong>Zuletzt aktualisiert:</strong> {{ $user->updated_at }}</p>
    </div>
    
    <div>
        <h3>Firmen dieses Benutzers:</h3>
        @if($user->companies->count() > 0)
            @foreach($user->companies as $company)
                <div style="border: 1px solid #eee; margin: 5px; padding: 5px;">
                    <h4>{{ $company->name }}</h4>
                    <p>{{ Str::limit($company->description, 100) }}</p>
                    <a href="/companies/{{ $company->id }}">Details anzeigen</a>
                </div>
            @endforeach
        @else
            <p>Keine Firmen für diesen Benutzer gefunden.</p>
        @endif
    </div>
    
    <div>
        <a href="/users/{{ $user->id }}/edit">Bearbeiten</a>
        <a href="/users">Zurück zur Übersicht</a>
        <a href="/">Zurück zur Startseite</a>
    </div>
</body>
</html>
