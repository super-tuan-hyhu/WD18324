<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <section class="intro">
        <div class="gradient-custom-2 h-100">
        <div class="mask d-flex align-items-center h-100">
        <div class="container">
            <div class="row justify-content-center">
            <div class="col-12">
                <div class="table-responsive">
                <table class="table table-dark table-bordered mb-0">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NAME</th>
                        <th scope="col">SCHOOL</th>
                        <th scope="col">ADDRESS</th>
                        <th scope="col">AGE</th>
                        <th scope="col">HOBBY</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">{{ $profile['id'] }}</th>
                        <td>{{ $profile['name'] }}</td>
                        <td>{{ $profile['school'] }}</td>
                        <td>{{ $profile['adress'] }}</td>
                        <td>{{ $profile['age'] }}</td>
                        <td>{{ $profile['hobby'] }}</td>
                    </tr>
                    </tbody>
                </table>
                </div>
            </div>
            </div>
        </div>
        </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
