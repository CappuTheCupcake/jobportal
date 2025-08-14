<!DOCTYPE html>
<html>
<head>
    <title>{{ $category->name }} - Jobportal</title>
</head>
<body>
    <h1>{{ $category->name }}</h1>
    
    <div>
        <p><strong>Beschreibung:</strong></p>
        <p>{{ $category->description }}</p>
        <p><strong>Erstellt:</strong> {{ $category->created_at }}</p>
        <p><strong>Zuletzt aktualisiert:</strong> {{ $category->updated_at }}</p>
    </div>
    
    <div>
        <h3>Stellenanzeigen in dieser Kategorie:</h3>
        @if($category->jobListings->count() > 0)
            @foreach($category->jobListings as $job)
                <div style="border: 1px solid #eee; margin: 5px; padding: 5px;">
                    <h4>{{ $job->title }}</h4>
                    <p>{{ Str::limit($job->description, 100) }}</p>
                    <a href="/jobListings/{{ $job->id }}">Details anzeigen</a>
                </div>
            @endforeach
        @else
            <p>Keine Stellenanzeigen in dieser Kategorie gefunden.</p>
        @endif
    </div>
    
    <div>
        <a href="/categories/{{ $category->id }}/edit">Bearbeiten</a>
        <a href="/categories">Zurück zur Übersicht</a>
        <a href="/">Zurück zur Startseite</a>
    </div>
</body>
</html>
