<html>

    <head>
        <title>Student view| View</title>
    </head>

    <body>
        <table border="1" align="center">
            <tr><td>Id</td><td>Name</td><td>Email</td><td colspan="2">Action</td></tr>

            @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td> 
                <td>{{$user->name}}</td> 
                <td>{{$user->email}}</td> 
                <td><a href="edit/{{$user->id}}">Edit</a></td>
                <td><a href="delete/{{$user->id}}">Delete</a></td>
            </tr>
            @endforeach
        </table>

    </body>
</html>