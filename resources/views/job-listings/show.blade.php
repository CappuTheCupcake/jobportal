<!DOCTYPE html>
<html>
<head>
    <title>{{ $jobListing->title }} - Jobportal</title>
</head>
<body>
    <h1>{{ $jobListing->title }}</h1>
    
    <div>
        <p><strong>Firma:</strong> {{ $jobListing->company->name ?? 'Unbekannt' }}</p>
        <p><strong>Kategorie:</strong> {{ $jobListing->category->name ?? 'Unbekannt' }}</p>
        <p><strong>Beschreibung:</strong></p>
        <p>{{ $jobListing->description }}</p>
        <p><strong>Erstellt:</strong> {{ $jobListing->created_at }}</p>
    </div>
    
    <div>
        <a href="/jobListings/{{ $jobListing->id }}/edit">Bearbeiten</a>
        <a href="/jobListings">Zurück zur Übersicht</a>
        <a href="/">Zurück zur Startseite</a>
    </div>
</body>
</html>
