<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Hello I am blade template</h1>
    @isset($name)
        <h1>Name is {{ $name }}</h1>
    @endisset
</body>

</html>
