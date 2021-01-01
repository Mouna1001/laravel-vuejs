<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Upload Image</title>
</head>

<body>
    <?php
    $imageName = 'mbigfile';
    
    ?>

    <div>
        <img src="https://res.cloudinary.com/dag0xbac5/image/upload/c_scale,w_200/v1/example/laravel/{{$imageName}}.jpg"/>
        <img src="https://res.cloudinary.com/dag0xbac5/image/upload/c_scale,h_130,w_150/v1606232048/example/laravel/{{$imageName}}.jpg"/>

    </div>
    <form method="post" action="/upload-image/upload" enctype="multipart/form-data">

        @if($errors->any())
         <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
           </div>
        @endif
        @csrf
        <input name="image_name" type="file" accept="image" />
        <button type="submit" >Add Image </button>

        
    </form>

</body>
</html>