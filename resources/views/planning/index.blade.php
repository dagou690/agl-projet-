<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 20px;
    background-image: url('{{ asset('images/ml.jpeg') }}'); /* Utilise l'URL relative */
    background-size: cover;
    background-position: center;
    height: 100vh;
    
    display: flex;
    
    align-items: center;
            
    
    flex-direction: column;
}

h1 {
    color: #333;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

table, th, td {
    border: 1px solid #ddd;
}

th, td {
    padding: 10px;
    text-align: left;
}

th {
    background-color: #4CAF50;
    color: white;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}

tr:hover {
    background-color: #ddd;
}

.success-message {
    color: green;
    margin-bottom: 20px;
}
</style>
    
<!DOCTYPE html>
<html>
<head>
    <title>Planning</title>
</head>
<body>
    <h1>Planning des Projections</h1>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <table border="1">
        <thead>
            <tr>
                <th>Film</th>
                <th>Jour</th>
                <th>Heure</th>
                <th>Lieu</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($projections as $projection)
                <tr>
                    <td>{{ $projection->film->titre }}</td>
                    <td>{{ $projection->jour }}</td>
                    <td>{{ $projection->heure }}</td>
                    <td>{{ $projection->lieu }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">Aucune projection enregistrée.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
