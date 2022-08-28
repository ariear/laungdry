<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Laungdry | Login</title>
    <link rel="stylesheet" href="/css/signin.css">
    <link rel="shortcut icon" href="/storage/{{ $systems->image }}" type="image/x-icon">
    <link rel="icon" href="/storage/{{ $systems->image }}" type="image/x-icon">
  </head>
  <body class="text-center">
    <main class="form-signin">
        <form action="/auth/login" method="POST">
            @csrf
          <img class="mb-4" src="/storage/{{ $systems->image }}" alt="" width="60">
          <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
            <div class="form-floating">
              <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
              <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
              <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
              <label for="floatingPassword">Password</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
          <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
        </form>
      </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
