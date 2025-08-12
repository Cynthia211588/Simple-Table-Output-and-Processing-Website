<!doctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Output</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body class="p-4">

<div class="container">
    <h1 class="mb-4">Table 1</h1>
    <table class="table table-bordered table-sm">
        <thead class="thead-dark">
            <tr>
                <th>Index</th>
                <th>Value</th>
            </tr>
        </thead>
        <tbody>
            @foreach($rows as $row)
                <tr>
                    <td>{{ $row['index'] }}</td>
                    <td>{{ $row['value'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h2 class="mt-5">Table 2</h2>
    <table class="table table-bordered table-sm">
        <thead class="thead-light">
            <tr>
                <th>Category</th>
                <th>Value</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Alpha</td>
                <td>{{ $alpha }}</td>
            </tr>
            <tr>
                <td>Beta</td>
                <td>{{ $beta }}</td>
            </tr>
            <tr>
                <td>Charlie</td>
                <td>{{ $charlie }}</td>
            </tr>
        </tbody>
    </table>
</div>

</body>
</html>
