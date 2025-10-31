<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard User</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-dark text-white">
  <div class="container py-5 text-center">
    <h2 class="fw-bold">Halo, User 👋</h2>
    <p>Selamat datang di halaman dashboard Anda.</p>
    <form action="/logout" method="POST" class="d-inline">
      @csrf
      <button type="submit" class="btn btn-danger text-white">
        Logout
      </button>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>