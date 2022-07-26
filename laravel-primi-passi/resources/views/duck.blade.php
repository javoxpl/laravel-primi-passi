<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Hello Duck</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>

        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body{
            text-align: center;
            background-color: orange;
        }

        .duck{
            width: 70%;
        }
    </style>
</head>
<body>

    <img class="duck" src=" {{ asset('img/4.JPG') }} " alt="duck">

</body>
</html>
