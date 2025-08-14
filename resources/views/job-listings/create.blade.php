<!DOCTYPE html>
<html>
<head>
    <title>Neue Stellenanzeige erstellen - Jobportal</title>
</head>
<body>
    <h1>Neue Stellenanzeige erstellen</h1>
    
    <form method="POST" action="/jobListings">
        @csrf
        <div>
            <label>Titel:</label>
            <input type="text" name="title" required>
        </div>
        <div>
            <label>Beschreibung:</label>
            <textarea name="description" required></textarea>
        </div>
        <div>
            <label>Firma:</label>
            <select name="company_id" required>
                @foreach($companies as $company)
                    <option value="{{ $company->id }}">{{ $company->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label>Kategorie:</label>
            <select name="category_id" required>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit">Erstellen</button>
    </form>
    
    <a href="/jobListings">Zurück zur Übersicht</a>
</body>
</html>
