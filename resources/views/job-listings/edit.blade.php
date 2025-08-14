<!DOCTYPE html>
<html>
<head>
    <title>{{ $jobListing->title }} bearbeiten - Jobportal</title>
</head>
<body>
    <h1>{{ $jobListing->title }} bearbeiten</h1>
    
    <form method="POST" action="/jobListings/{{ $jobListing->id }}">
        @csrf
        @method('PUT')
        <div>
            <label>Titel:</label>
            <input type="text" name="title" value="{{ $jobListing->title }}" required>
        </div>
        <div>
            <label>Beschreibung:</label>
            <textarea name="description" required>{{ $jobListing->description }}</textarea>
        </div>
        <div>
            <label>Firma:</label>
            <select name="company_id" required>
                @foreach($companies as $company)
                    <option value="{{ $company->id }}" {{ $jobListing->company_id == $company->id ? 'selected' : '' }}>
                        {{ $company->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div>
            <label>Kategorie:</label>
            <select name="category_id" required>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ $jobListing->category_id == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit">Aktualisieren</button>
    </form>
    
    <a href="/jobListings/{{ $jobListing->id }}">Zurück zu Details</a>
    <a href="/jobListings">Zurück zur Übersicht</a>
</body>
</html>
