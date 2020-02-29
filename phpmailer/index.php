<!DOCTYPE html>
<html>
<head>
    <title>Mailer</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <h2>PHP Mailer</h2>
        <form method="post" action="/email.php">
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Your name">
          </div>
          <div class="form-group">
            <label for="email">Enter Your Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="E-mail">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="message">Comment...</label>
            <textarea id="message" name="message" class="form-control"></textarea>
          </div>
          <button type="submit" name="submit" class="btn btn-primary">Send Email</button>
        </form>
    </div>
</body>
</html>