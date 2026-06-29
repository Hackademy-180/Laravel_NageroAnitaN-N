<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entità </title>
    <!-- lnk bts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">


    <style>
        html,
        body {
            height: 100%;
        }


        body {
            display: flex;
            flex-direction: column;
        }



        footer {
            width: 100%;
            margin-top: auto;
            bottom: 0;
            border-top: 3px double orangered;
        }

        .piePagina {

            background-color: green;
            color: whitesmoke;
        }



    </style>
</head>

<body>
    <!-- navbar -->

    <x-navbar />



    <div class="container">
<h1 class="text-white text-center fw-bold">Entità - Relazioni nel DB possibili & App;</h1>

        {{$slot}}
    </div>



    <!-- footer -->
    <x-footer />



    <!-- scpr bts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>


    <!-- kit ikone -->

    <script src="https://kit.fontawesome.com/daf6ff33d9.js" crossorigin="anonymous"></script>

</body>

</html>