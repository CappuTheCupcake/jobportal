<!DOCTYPE html>
<html>
<head>
    <title>{{ $company->name }} bearbeiten - Jobportal</title>
</head>
<body>
    <h1>{{ $company->name }} bearbeiten</h1>
    
    <form method="POST" action="/companies/{{ $company->id }}">
        @csrf
        @method('PUT')
        <div>
            <label>Firmenname:</label>
            <input type="text" name="name" value="{{ $company->name }}" required>
        </div>
        <div>
            <label>Beschreibung:</label>
            <textarea name="description" required>{{ $company->description }}</textarea>
        </div>
        <div>
            <label>Besitzer (User):</label>
            <select name="user_id" required>
                @foreach($users as $user)
                    <option value="{{ $user->id }}" {{ $company->user_id == $user->id ? 'selected' : '' }}>
                        {{ $user->name }} {{ $user->lastname }} ({{ $user->email }})
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit">Aktualisieren</button>
    </form>
    
    <a href="/companies/{{ $company->id }}">Zurück zu Details</a>
    <a href="/companies">Zurück zur Übersicht</a>
    <a href="/">Zurück zur Startseite</a>
</body>
</html>
