<!DOCTYPE html>
<html>
<head>
    <title>Alle Kategorien - Jobportal</title>
</head>
<body>
    <h1>Alle Kategorien</h1>
    
    <a href="/categories/create">Neue Kategorie erstellen</a>
    
    <div>
        @foreach($categories as $category)
            <div style="border: 1px solid #ccc; margin: 10px; padding: 10px;">
                <h3>{{ $category->name }}</h3>
                <p>{{ $category->description }}</p>
                <p><strong>Erstellt:</strong> {{ $category->created_at }}</p>
                <a href="/categories/{{ $category->id }}">Details anzeigen</a>
                <a href="/categories/{{ $category->id }}/edit">Bearbeiten</a>
            </div>
        @endforeach
    </div>
    
    <a href="/">Zurück zur Startseite</a>
</body>
</html>
