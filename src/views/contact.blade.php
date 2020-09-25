<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Contact us page</title>
</head>
<body>
<div class="container">
    <div class="jumbotron bg-light border-top py-4 border-bottom border-black rounded my-2 jumbotron-fluid">
        <div class="container">
            <h1 class="display-4 text-dark font-weight-bold text-uppercase">Contact <span class=" badge badge-success"><code class="p-3 text-light">v1</code></span></h1>
            <p class="lead">Drop the developer a message.</p>
        </div>
    </div>
    <form action="/contact" method="post">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">Name</label>
            <input name = "name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="John Doe" required>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Email address</label>
            <input name = "email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="johndoe@example.com" required>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Message</label>
            <textarea name = "message" class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
        </div>

        <div class="form-group">
            <input class="form-control btn btn-primary btn-lg" value="Submit" type="submit">
        </div>
    </form>
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
