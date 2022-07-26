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
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .links{
                margin-right: 10px;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .header{
                width: 100%;
                height: 150px;
                background-color: orange;
                margin-bottom: 20px;
            }

            .links-wrapper{
                display: flex;
                align-items: center;
                height: 100%;
                padding-left: 30px;
            }
        </style>
</head>
<body>

    <header class="header">

        <div class="links-wrapper">

            <button class="links">

                <a href="http://127.0.0.1:8000/duck">duck</a>
            </button>

            <button class="links">

                <a href="http://127.0.0.1:8000/welcome">welcome</a>
            </button>
        </div>
    </header>

    <main>

        <h1 class="flex-center">HELLO DUCK</h1>
    </main>

</body>
</html>
