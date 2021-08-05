<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>
    <h1>New Article</h1>   
    <form method="POST" action="/posts">
       @csrf
       <label for="title">Title:</label><br>
       <input type="text" id="title" name="title"><br>
       <label for="body">Content:</label><br>
       <input type="text" id="body" name="body"><br><br>
       <input type="submit" value="Submit">
    </form>      
</body>
</html>