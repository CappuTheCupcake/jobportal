<!DOCTYPE html>
<html>
<head>
    <title>Alle Firmen - Jobportal</title>
</head>
<body>
    <h1>Alle Firmen</h1>
    
    <a href="/companies/create">Neue Firma erstellen</a>
    
    <div>
        @foreach($companies as $company)
            <div style="border: 1px solid #ccc; margin: 10px; padding: 10px;">
                <h3>{{ $company->name }}</h3>
                <p>{{ $company->description }}</p>
                <p><strong>Besitzer:</strong> {{ $company->user->name ?? 'Unbekannt' }} {{ $company->user->lastname ?? '' }}</p>
                <p><strong>Erstellt:</strong> {{ $company->created_at }}</p>
                <a href="/companies/{{ $company->id }}">Details anzeigen</a>
                <a href="/companies/{{ $company->id }}/edit">Bearbeiten</a>
            </div>
        @endforeach
    </div>
    
    <a href="/">Zurück zur Startseite</a>
</body>
</html>
