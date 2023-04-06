<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME') }}</title>

    
</head>

<body>
 

<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">author</th>
            <th scope="col">poster</th>
            <th scope="col">title</th>
            <th scope="col">album</th>
            <th scope="col">length</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($artists as $artist)
        <tr>
            <th scope="row">{{ $artist->id }}</th>
            <td>{{ $artist->author }}</td>
            <td>{{ $artist->poster }}</td>
            <td>{{ $artist->title }}</td>
            <td>{{ $artist->album }}</td>
            <td>{{ $artist->length }}</td>
            
        </tr>
        @endforeach
    </tbody>
</table>
  
  
</body>

</html>