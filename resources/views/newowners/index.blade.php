<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New client</title>
</head>
<body>
    <h1>New client</h1>
    <a href="\owners">Return to clients</a>
    @csrf
    <form action="{{ route('newowners.store') }}" method="post">
        Client first name: <br>
        <input type="text" name="first_name" value="{{ old('first_name', $newowners->first_name) }}"> <br>
        Client last name: <br>
        <input type="text" name="surname" value="{{ old('first_name', $newowners->surname) }}"> <br>
        Client email: <br>
        <input type="email" name="email" value="{{ old('email', $newowners->email) }}"> <br>
        Client phone number: <br>
        <input type="number" name="phone" value="{{ old('phone', $newowners->phone) }}"> <br>
        </select>
        <br>
        <br>
        <button type="submit">Submit my request</button>
    </form>
</body>
</html>

</body>
</html>