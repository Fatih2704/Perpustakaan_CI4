<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Siswa</title>
    <link rel="stylesheet" href="<?= base_url('js_css/style.css'); ?>">
    <link rel="website icon" type="image/png" href="<?= base_url('images/a.png'); ?>">
</head>

<style>
    body {
        /* Gunakan base_url untuk gambar background */
        background-image: url('<?= base_url("images/ijo.jpg"); ?>');
        background-size: cover;
    }
</style>

<body>
    <section class="container">
        <div class="login-container">
            <div class="circle circle-one"></div>
            <div class="form-container">
                <img src="https://raw.githubusercontent.com/hicodersofficial/glassmorphism-login-form/master/assets/illustration.png" alt="illustration" class="illustration" />
                <h1 class="opacity">LOGIN</h1>
                
                <form action="<?= base_url('login'); ?>" method="POST">
                    <input type="text" name="nisn" placeholder="MASUKAN NISN" required />
                    <input type="password" name="password" placeholder="MASUKAN PASSWORD" required />
                    <button type="submit" class="opacity">MASUK</button>
                    
                    <button class="opacity" onclick="window.location.href='<?= base_url('/'); ?>'" type="button">KEMBALI</button>
                </form>
                
                <div class="opacity" style="text-align: center;">
                    <p class="copyright_text">BELUM PUNYA AKUN ? <a href="<?= base_url('register'); ?>">REGISTER</a></p>
                    <p class="copyright_text">ANDA ADMIN ? <a href="<?= base_url('admin'); ?>">MASUK</a></p>
                </div>
            </div>
            <div class="circle circle-two"></div>
        </div>
    </section>
</body>
</html>