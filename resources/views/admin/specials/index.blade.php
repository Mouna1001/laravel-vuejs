<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Home</title>

<!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="app.css">

<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</head>
    

<body >
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">MoliExpress</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">

    
      <li class="nav-item ">
        <a class="nav-link" href="/">Go Back</a>
      </li>
    </ul>
  </div>
</nav>
<br/>
  <div>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Name</th>
        <th>Description</th>
        <th>Was</th>
        <th>Now</th>
        <th>Brand</th>
        <th>Actions</th>


      </tr>
    </thead>
    <tbody>
     @foreach($specials as $special)
      <tr>
        <td>{{ $special ->name }}</td>
        <td>{{ $special ->description }}</td>
        <td>{{ $special ->was_price }} MAD</td>
        <td>{{ $special ->current_price }} MAD</td>
        <td>{{ $special ->brand }} </td>
        <td><a href="/admin/specials/{{$special->id}}/edit" class="btn btn-sm btn-primary">Edit</a>
            <form method="post" action="/admin/specials/{{$special->id}}">
                @csrf
                @method('delete')
                
                <button class="btn btn-sm btn-danger">Delete</button>
            </form>

        </td>

      </tr>
     @endforeach
     
    </tbody>
  </table>
  <a href="/admin/specials/create" class="btn btn-primary">Add new Special </a>
  </div>
</body>

</html>