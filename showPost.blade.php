<!DOCTYPE html>
<html lang="en">
<head>
  <title>show posts</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
@include('includes.navP')
    <p>
        <h2> {{ $posts->posttitle}}</h2>
        <h3> {{ $posts->description}}</h3>
        <h2> {{ $posts->author}}</h2>
        <h2> {{ $posts->updated_at}}</h2>
        <h4> {{ $posts->created_at}}</h4>
        <p> {{ $posts->published? "published":"not published"}}</p>
    </p>
</body>
</html>