<!DOCTYPE html>
<html>
<head>
    <title>{{ $company->name }} - Jobportal</title>
</head>
<body>
    <h1>{{ $company->name }}</h1>
    
    <div>
        <p><strong>Beschreibung:</strong></p>
        <p>{{ $company->description }}</p>
        <p><strong>Besitzer:</strong> {{ $company->user->name ?? 'Unbekannt' }} {{ $company->user->lastname ?? '' }}</p>
        <p><strong>E-Mail:</strong> {{ $company->user->email ?? 'Unbekannt' }}</p>
        <p><strong>Erstellt:</strong> {{ $company->created_at }}</p>
        <p><strong>Zuletzt aktualisiert:</strong> {{ $company->updated_at }}</p>
    </div>
    
    <div>
        <h3>Stellenanzeigen dieser Firma:</h3>
        @if($company->jobListings->count() > 0)
            @foreach($company->jobListings as $job)
                <div style="border: 1px solid #eee; margin: 5px; padding: 5px;">
                    <h4>{{ $job->title }}</h4>
                    <p><strong>Kategorie:</strong> {{ $job->category->name ?? 'Unbekannt' }}</p>
                    <p>{{ Str::limit($job->description, 100) }}</p>
                    <a href="/jobListings/{{ $job->id }}">Details anzeigen</a>
                </div>
            @endforeach
        @else
            <p>Keine Stellenanzeigen für diese Firma gefunden.</p>
        @endif
    </div>
    
    <div>
        <a href="/companies/{{ $company->id }}/edit">Bearbeiten</a>
        <a href="/companies">Zurück zur Übersicht</a>
        <a href="/">Zurück zur Startseite</a>
    </div>
</body>
</html>
