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




            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <h1><a href="/">KEN TEST - Company Collect Data</a> </h1>
                    <h2>Add Company</h2>
                    
                    <div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="post" action="/company"  role="form" style="">
                        
              
                        {{ csrf_field() }}
            
                        <div class="form-group">
                            <label for="company_name" class="text-info">Company name:</label>
                            <input type="text" name="company_name" class="form-control" >
                      </div>
                        <div class="form-group">
                            
                            <label for="Address" class="text-info">Address:</label>
                            <textarea name="address"class="form-control" placeholder="Address"> </textarea>
                        </div>
        
                        <div class="form-group ">
                            <button type="submit" class="btn btn-primary">Create Company</button>         
                               <a class="btn" href="/">Back</a>
                        </div>
      
                    </form>


                </div>
            </div>

            
        </div>
    </div>
</body>

</html>
