<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
   <table class="table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>DOB</th>
            <th>Address</th>
            <th>DELETE</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($customer as $key)
            
       
        <tr>
            <td>{{$key->name}}</td>
            <td>{{$key->email}}</td>
            <td>{{$key->gender}}</td>
            <td>{{$key->dob}}</td>
            <td>{{$key->address}}</td>
           <td> <a href="{{Route('customer.delete',['id'=>$key->id])}}"><botton class="btn btn-danger">DELETE</botton> </a>
        </td>
        <td> <a href="{{Route('customer.edit',['id'=>$key->id])}}"><botton class="btn btn-danger">EDIT</botton> </a>
        </td>
        </tr>
        @endforeach
    </tbody>
   </table>
  </body>
</html>