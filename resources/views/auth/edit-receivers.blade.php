<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css"
        rel="stylesheet">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <!-- Script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' type='text/javascript'></script>

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
        integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</head>

<body>
    @include('flash-message')

    <form action="/edit-receiver"  class="form-horizontal" method="POST">
        @csrf
        
        <div class="card text-white bg-dark mb-0">
            <div class="card-header">
                <h2 class="m-0">Edit receiver</h2>
            </div>
            <input type="hidden" name="id" value="{{$data->id}}">
            <div class="card-body">

                <!-- Email -->
                <div class="form-group">
                    <label class="col-form-label" for="email">Email</label>
                    <input type="text" value="{{$data->email}}" name="email" class="form-control" id="email" required>
                </div>
                <!-- /Email -->
                <!-- Interval -->
                <div class="form-group">
                    <label class="col-form-label" >Interval</label>
                    <select required name="interval" for="interval" class="form-control"
                        id="interval">
                        <option value="1">1 Minute</option>
                        <option value="5">5 Minutes</option>
                        <option value="10">10 Minutes</option>
                    </select>
                </div>
                <!-- /Interval -->
                <!-- Status -->
                <div class="form-group">
                    <label class="col-form-label" for="status">Status</label>
                    <select name="status" for="status" class="form-control"
                        id="status">
                        <option selected value="1">On</option>
                        <option value="0">Off</option>
                    </select>
                </div>
               
                @if (!empty($successMsg))
                    <div class="alert alert-success"> {{ $successMsg }}</div>
                @endif 
            </div>
        </div>
       
        <button type="submit" class="btn btn-secondary" >Submit</button>       
    </form>


</body>

</html>
