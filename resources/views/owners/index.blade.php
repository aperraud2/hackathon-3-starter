<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Owners</title>
</head>
<body>
    <nav><a href="\..">Return to index</a></nav>

    <h1>Clients</h1>

    <form action="" method="get">
        <label>Search client:</label>
        <input type="text" name="Searchowner">
        <button type="submit">Submit</button>
    </form>

    <a href="\newowners">Create new client</a>
    
<br><br>

    <table>
        <thead>
            <th>Full name</th>
            <th>Email</th>
            <th>Phone number</th>
            <th>Address</th>
            <th>Pet name</th>
            <th>Species</th>
            <th>Breed</th>
            <th>Age</th>
            <th>Weight</th>
        </thead>
        <tbody>
            @foreach ($owners as $owner)
                <tr>
                    <td>{{ $owner->surname }} {{ $owner->first_name }}</td>
                    <td>{{ $owner->email }}</td>
                    <td>{{ $owner->phone }}</td>
                    <td>{{ $owner->address }}</td>
                    <td>
                        <table>
                            @foreach ($owner->animals as $animal)
                            <tr>
                                <td>{{ $animal->name }}</td>
                                <td>{{ $animal->species }}</td>
                                <td>{{ $animal->breed }}</td>
                                <td>{{ $animal->age }}</td>
                                <td>{{ $animal->weight }}</td>
                            </tr>
                            @endforeach
                        </table>
                    </td>    
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>