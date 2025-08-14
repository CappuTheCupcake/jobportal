<!DOCTYPE html>
<html>
<head>
    <title>Alle Stellenanzeigen - Jobportal</title>
</head>
<body>
    <h1>Alle Stellenanzeigen</h1>
    
    <a href="/jobListings/create">Neue Stellenanzeige erstellen</a>
    
    <div>
        @foreach($jobListings as $job)
            <div style="border: 1px solid #ccc; margin: 10px; padding: 10px;">
                <h3>{{ $job->title }}</h3>
                <p><strong>Firma:</strong> {{ $job->company->name ?? 'Unbekannt' }}</p>
                <p><strong>Kategorie:</strong> {{ $job->category->name ?? 'Unbekannt' }}</p>
                <p>{{ Str::limit($job->description, 100) }}</p>
                <a href="/jobListings/{{ $job->id }}">Details anzeigen</a>
                <a href="/jobListings/{{ $job->id }}/edit">Bearbeiten</a>
            </div>
        @endforeach
    </div>
    
    <a href="/">Zurück zur Startseite</a>
</body>
</html>
