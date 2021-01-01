<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Contact US</title>

<!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
<link rel="stylesheet" href="/css/website.css">




</head>
    

<body >
<div class="container">
    <form method="post" action="/admin/specials">

    @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input name="name" type="text" class="form-control" placeholder="Please enter the special's name" id="name",required>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea  name="description" type="text" class="form-control" placeholder="Please enter the description" id="description" required></textarea>
        </div>
        <div class="form-group">
            <label for="was_price">Was Price:</label>
            <input  name="was_price" step="0.01" type="number" class="form-control" placeholder="Please enter the was price" id="was_price" required>
        </div>
        <div class="form-group">
            <label for="current_price">Current Price:</label>
            <input  name="current_price" step="0.01" type="number" class="form-control" placeholder="Please enter the description" id="current_price" required>
        </div>
        <div class="form-group">
            <label for="brand">Brand:</label>
            <input  name="brand"  type="text" class="form-control" placeholder="Please enter the brand" id="brand" required>
        </div>
        <a href="/admin/specials" class="btn btn-primary">Go Back</a>
        <button type="submit" class="btn btn-primary">Add Special</button>
    </form>
</div>
      <contact-us-form></contact-us-form>

    </div>
<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="/js/website.js"></script>
</body>

</html>