<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>insert portfolio</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body class="container">
    <!-- CSS only -->


    <form action="{{url('/addportfolioitem')}}" method="post" enctype="multipart/form-data">
      @csrf
        <div class="form-group">
          <label for="exampleFormControlInput1">id</label>
          <input type="number" class="form-control" name="id" placeholder="can be null ">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Title</label>
            <input type="text" class="form-control" name="title" placeholder="title" rows="3">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Description</label>
            <input type="text" class="form-control" name="description" placeholder="description">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Main image</label>
            <input type="file" class="form-control" name="image_name" placeholder="xyx.jpg">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Image 2</label>
            <input type="file" class="form-control" name="img2" placeholder="xyx">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Image 3</label>
            <input type="file" class="form-control" name="img3" placeholder="xyx">
          </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">category</label>
          <select class="form-control" name="category">
            <option value="Web Development">Web Development</option>
            <option value="Custom Programming">Custom Programming</option>
            <option value="Graphics Design">Graphics Design</option>
            <option value="Music Production">Music Production</option>
            <option value="Video Editing">Video Editing</option>
            <option value="Web Server">Web Server</option>
            <option value="Ui/Ux">Ui/Ux</option>
          </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">is featured</label>
            <select class="form-control" name="isfeatured">
              <option value="no">no</option>
              <option value="yes">yes</option>
             
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Style</label>
            <select class="form-control" name="style">
              <option value="web-development-category">Web Development</option>
              <option value="custom-category">Custom Programming</option>
              <option value="graphics-category">Graphics Design</option>
              <option value="music-category">Music Production</option>
              <option value="video-category">Video Editing</option>
              <option value="server-category">Web Server</option>
              <option value="ui-ux-category">Ui/Ux</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">excerpt</label>
            <input type="text" class="form-control" name="excerpt" placeholder="excerpt">
          </div>
        <input type="submit" class="btn btn-primary" value="go">
      </form>


    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

<script>




</script>
</html>