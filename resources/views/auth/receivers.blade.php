<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,
initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>receivers</title>
</head>

<body>
    <h1>User Page</h1>
    <p>{{ $receivers }}</p>


    <h2>wanna add a new receiver?</h2>

    <form action="/createe" method="post" >
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <table>
            
            <tr>
                <td>Email</td>
                <td><input type="text" name='email' /></td>
            </tr>

            <tr>
                <td>Temps d'attent entre chaque envoi</td>
                <td><input type="number" name='intervalM' /></td>
            </tr>

            <tr>
                <td colspan='2'>
                    <input type='submit' value="Add a new receiver" />
                </td>
            </tr>
        </table>
    </form>
</body>

</html>