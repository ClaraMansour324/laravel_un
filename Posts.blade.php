<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
@include('includes.navP')
<div class="container">
  <h2>Posts List </h2>          
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Post title</th>
        <th>description</th>
        <th>author</th>
        <th>published</th>
        <th>edit</th>
        <th> show</th>
      </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
      <tr>
        <td>{{ $post->posttitle}}</td>
        <td>{{ $post->description }}</td>
        <td>{{ $post->author }}</td>
        <td>{{ $post->published ? 'Yes' : 'No' }}</td>
        <td><a href="update/{{ $post->id}}">edit</a></td>
        <td><a href="show/{{ $post->id}}">show</a></td>
      </tr>
     @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
