<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{$company->name}}</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet"
        id="bootstrap-css">
    <!-- Styles -->
</head>

<body class="antialiased">
    <div class="container">
        <h1><a href="/">KEN TEST - Company Collect Data</a> </h1>

        <h2>Company : {{$company->name}}</h2>
        <p><strong>Address</strong>:  {{$company->address}}</p>

        <p>List Employees of this company</p>

        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>no</th>
                    <th>Emploee Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($company->employees as $employee)
                    <tr></tr>
                        <th>{{$loop->index + 1}}</th>
    
                        <td>{{ $employee->name }}</td>
                       
                    </tr>
                @endforeach
            </tbody>
        </table>


        Add new <strong>employee</strong> for this company

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <form method="post" action="/add_employee"  role="form" style="">
            {{ csrf_field() }}
            <input type="hidden" value="{{$company->id}}" name="id">
            <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Name">
          </div>

            <div class="form-group ">
                <div class="offset-sm-3 col-sm-9">
                    <button type="submit" class="btn btn-primary">add employee</button>         <a href="{{url('/companies')}}" class="btn">Back</a>
                </div>
            </div>

        </form>


    </div>
</body>

</html>
