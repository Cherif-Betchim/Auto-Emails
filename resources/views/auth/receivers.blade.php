<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>receivers</title>
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

    <div class="container">
        <h1>Receivers List</h1>
        <div class="main-container container-fluid">
           
            @include('flash-message')
            
            <table class="table table-bordered table-responsive-lg table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Email</th>
                        <th scope="col" width="30%">interval (In minutes)</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                @php($count = 1)

                @foreach ($receivers as $receiver)
                    <tbody>
                        <tr class="data-row">
                            <td scope="row">{{ $count }}</td>
                            <td class="align-middle email">{{ $receiver->email }}</td>
                            <td class="align-middle interval">{{ $receiver->intervalM }}</td>
                            @if ($receiver->satus == 1)
                                <td class="align-middle status"> On</td>
                            @else
                                <td class="align-middle status"> Off</td>

                            @endif
                            <td>

                                <form action="{{ route('receiver.delete', $receiver->id) }}" method="GET">

                                

                                    <a href="{{ route('receiver.update.form',$receiver->id) }}" class="text-secondary" id="edit-item">
                                        <i class="fas fa-edit text-gray-300"></i>
                                    </a>
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" title="delete"
                                        style="border: none; background-color:transparent;">
                                        <i class="fas fa-trash fa-lg text-danger"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @php($count++)
                @endforeach
                </tbody>
            </table>

        </div>


        <br>
        <br>
        <br>
        <br>

        <h2>wanna add a new receiver?</h2>

        <form action="/createe" method="post">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <table>

                <tr>
                    <td>Email</td>
                    <td><input type="text" name='email' /></td>
                </tr>

                <tr>
                    <td>Temps d'attent entre chaque envoi</td>
                    <td><select name="intervalM" aria-placeholder="--Please choose an interval--">
                            <option value="1">1 Minute</option>
                            <option value="5">5 Minutes</option>
                            <option value="10">10 Minutes</option>
                        </select></td>
                </tr>

                <tr>
                    <td colspan='2'>
                        <br>
                        <input type='submit' value="Add a new receiver" />
                    </td>
                </tr>
            </table>
           
        </form>
    </div>

</body>

</html>
