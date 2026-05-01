<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fapus</title>
  <link rel="stylesheet" href="js_css/style2.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link rel="icon" type="png" href="images/s.png">
</head>

<style>
  body {
    background-image: url(images/ijo.jpg);
    background-size: cover;
  }
</style>

<body>
  <div class="content">
    <div class="text">
      Login Admin
    </div>
    <form action="" method="POST">
      <div class="field">
        <input type="text" name="username" placeholder="Masukan Nama" />
        <span class="fas fa-user"></span>
        <label>Name</label>
      </div>
      <div class="field">
        <input type="password" name="password" placeholder="Masukan Password" />
        <span class="fas fa-lock"></span>
        <label>Password</label>
      </div>
      <button class="btn btn-primary" type="submit" name="btn-login">Masuk</button>
      <button onclick="window.location.href='index.php'" class="btn btn-primary" type="button">Kembali Ke Hlmn Utama</button>
    </form>
  </div>

  <?php if (isset($error)) : ?>
    <div class="alert alert-danger mt-2" role="alert">Nama atau Password Salah!</div>
  <?php endif; ?>
  </div>

  <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (() => {
      'use strict'

      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      const forms = document.querySelectorAll('.needs-validation')

      // Loop over them and prevent submission
      Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }

          form.classList.add('was-validated')
        }, false)
      })
    })()
  </script>
</body>

</html>
<!-- partial -->

</body>

</html>