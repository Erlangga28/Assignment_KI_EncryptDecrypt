<!doctype html>
    <html>
    <head lang="en">
    <meta charset="utf-8">
    <title>File Upload</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
    <script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    </head>
    <body>
    <div class="container">
    <div class="row">
    <div class="col-md-8">
    <h1><a href="#" target="_blank"><img src="image/upload.png" width="80px"/>File Uploading</a></h1>
    <hr> 
    <form id="form" action="ajaxupload.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
    <label for="name">NAME</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required />
    </div>
    <div class="form-group">
    <label for="email">EMAIL</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required />
    </div>
    <input id="uploadImage" type="file" accept="image/*" name="image" />
    <div id="preview"><img src="image/preview.png" /></div><br>
    <input class="btn btn-success" type="submit" value="Upload">
    </form>
    <div id="err"></div>
    <hr>
    </div>
    </div>
    </div></body></html>