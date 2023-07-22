
<!DOCTYPE html>
<html>
<head>
    <title>Data List</title>
</head>
<body>
    <h1>Data List</h1>
    <ul>
        @foreach ($demoArray as $item)
            <li>
                <strong>Name:</strong> {{ $item['name'] }}<br>
                <strong>Description:</strong> {{ $item['description'] }}<br>
                <strong>Price:</strong> ${{ $item['price'] }}<br>
            </li>
        @endforeach
    </ul>
</body>
</html>
