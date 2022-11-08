<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>promotion </title>
</head>
<body>
<form action="/promotion" method="POST">
        @csrf
        <input type="text" name="name">
        <button type="submit">
            Create
        </button>
    </form>    

</body>
</html>