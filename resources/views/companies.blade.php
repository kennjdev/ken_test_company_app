<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet"
        id="bootstrap-css">
    <!-- Styles -->
</head>

<body class="antialiased">



    <div class="container">
        <h1><a href="/">KEN TEST - Company Collect Data</a> </h1>
        <h2>List Company</h2>

        <div>

            <a class="btn" href="{{url('/add-company/')}}">+ Add Company</a>
        </div>
        </br>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Company Name</th>
                    <th>Total Employee</th>
                    <th class="td-actions"></th>
                </tr>
            </thead>
            <tbody>


                @foreach ($companies as $company)
                    <tr>
                        <td>{{ $company->id }}</td>
                        <td>{{ $company->name }}</td>
                        <td>{{ $company->employees()->get()->count() }}</td>
                        <td><a class="btn" href="{{url('/company-detail/'.$company->id)}}">View Detail</a></td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>
</body>

</html>
