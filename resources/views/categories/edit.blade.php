<!DOCTYPE html>
<html>
<head>
    <title>{{ $category->name }} bearbeiten - Jobportal</title>
</head>
<body>
    <h1>{{ $category->name }} bearbeiten</h1>
    
    <form method="POST" action="/categories/{{ $category->id }}">
        @csrf
        @method('PUT')
        <div>
            <label>Name:</label>
            <input type="text" name="name" value="{{ $category->name }}" required>
        </div>
        <div>
            <label>Beschreibung:</label>
            <textarea name="description" required>{{ $category->description }}</textarea>
        </div>
        <button type="submit">Aktualisieren</button>
    </form>
    
    <a href="/categories/{{ $category->id }}">Zurück zu Details</a>
    <a href="/categories">Zurück zur Übersicht</a>
    <a href="/">Zurück zur Startseite</a>
</body>
</html>
