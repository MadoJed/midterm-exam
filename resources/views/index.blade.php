<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <div class = "card-body">
        <table class = "table">
            <thead>
                <tr>
                    <th>#</th>
                    <th scope = "col">Feature Name</th>
                    <th scope = "col">Description</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $tables as $i => $table )
                <tr>
                    <td>{{ $i + 1 }}</td>
                    <td>{{  $table ->feature_name }}</td>
                    <td>{{ $table->description }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
