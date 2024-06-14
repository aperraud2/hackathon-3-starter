<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pets</title>
</head>
<body>
    <nav><a href="\..">Return to index</a></nav>

    <h1>Pets</h1>

    <form action="" method="get">
        <label>Search owner:</label>
        <input type="text" name="Searchpet">
        <button type="submit">Submit</button>
    </form>

    <table>
        <thead>
            <th>Pet name</th>
            <th>Species</th>
            <th>Breed</th>
            <th>Age</th>
            <th>Weight</th>
            <th>Owner's name</th>
            <th>Email</th>
            <th>Phone number</th>
            <th>Address</th>
        </thead>
        <tbody>
            @foreach ($animals as $pet)
                <tr>
                    <td>{{ $pet->name }}</td>
                    <td>{{ $pet->species }}</td>
                    <td>{{ $pet->breed }}</td>
                    <td>{{ $pet->age }}</td>
                    <td>{{ $pet->weight }}</td>
                    <td>{{ $pet->owner->surname }} {{ $pet->owner->first_name }}</td>
                    <td>{{ $pet->owner->email }}</td>
                    <td>{{ $pet->owner->phone }}</td>
                    <td>{{ $pet->owner->address }}</td>

                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>