<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-dark d-flex justify-content-center align-items-center vh-100">

  <div class="card shadow-lg p-4 rounded bg-dark text-white" style="width: 100%; max-width: 450px;">
    <h3 class="text-center mb-4">Daftar Akun Baru</h3>

    @if ($errors->any())
      <div class="alert alert-danger">{{ $errors->first() }}</div>
    @endif

    <form action="/register" method="POST">
      @csrf
      <div class="mb-3">
        <label class="form-label">Nama Lengkap</label>
        <input type="text" name="name" class="form-control" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" name="password" class="form-control" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Role</label>
        <select name="role" class="form-select" required>
          <option value="">-- Pilih Role --</option>
          <option value="admin">Admin</option>
          <option value="user">User</option>
        </select>
      </div>

      <button type="submit" class="btn btn-success w-100">Daftar</button>
    </form>

    <p class="text-center mt-3">
      Sudah punya akun? <a href="/login" class="text-decoration-none">Login di sini</a>
    </p>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>