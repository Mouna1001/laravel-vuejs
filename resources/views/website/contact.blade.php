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
<div id="app">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">MoliExpress</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
      
          @foreach ($pages as $page)
            <li class="nav-item ">
              <a class="nav-link" href="/page/{{ $page -> id}}">{{ $page->name }}</a>
            </li>
          @endforeach
            <li class="nav-item ">
                <a class="nav-link" href="/contact-us">Contact Us</a>
            </li>
            <li class="nav-item ">
              
              <a class="nav-link" href="/admin/specials">Add/Edit/Remove Specials</a>
            </li>
          </ul>
        </div>
      </nav>

      <contact-us-form></contact-us-form>

    </div>
<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="/js/website.js"></script>
</body>

</html>