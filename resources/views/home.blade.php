<!-- INTERNAL -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Haloo</title>
    <link rel="stylesheet" type="text/css" href="formsignup.php" />
<style>

    
    
    body {
        text-align: center; /* Mengatur teks ke tengah secara horizontal */
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100vh; /* Untuk mengisi seluruh tinggi layar */
       /* control ize */
  --u: 5px;
  --c1: #ededee;
  --c2: #000000;
  --c3: #1e1e1e;
  --gp: 50% / calc(var(--u) * 16.9) calc(var(--u) * 12.8);
  background: conic-gradient(
        from 122deg at 50% 85.15%,
        var(--c2) 0 58deg,
        var(--c3) 0 116deg,
        #fff0 0 100%
      )
      var(--gp),
    conic-gradient(from 122deg at 50% 72.5%, var(--c1) 0 116deg, #fff0 0 100%)
      var(--gp),
    conic-gradient(from 58deg at 82.85% 50%, var(--c3) 0 64deg, #fff0 0 100%)
      var(--gp),
    conic-gradient(
        from 58deg at 66.87% 50%,
        var(--c1) 0 64deg,
        var(--c2) 0 130deg,
        #fff0 0 100%
      )
      var(--gp),
    conic-gradient(from 238deg at 17.15% 50%, var(--c2) 0 64deg, #fff0 0 100%)
      var(--gp),
    conic-gradient(
        from 172deg at 33.13% 50%,
        var(--c3) 0 66deg,
        var(--c1) 0 130deg,
        #fff0 0 100%
      )
      var(--gp),
    linear-gradient(98deg, var(--c3) 0 15%, #fff0 calc(15% + 1px) 100%)
      var(--gp),
    linear-gradient(-98deg, var(--c2) 0 15%, #fff0 calc(15% + 1px) 100%)
      var(--gp),
    conic-gradient(
        from -58deg at 50.25% 14.85%,
        var(--c3) 0 58deg,
        var(--c2) 0 116deg,
        #fff0 0 100%
      )
      var(--gp),
    conic-gradient(from -58deg at 50% 28.125%, var(--c1) 0 116deg, #fff0 0 100%)
      var(--gp),
    linear-gradient(90deg, var(--c2) 0 50%, var(--c3) 0 100%) var(--gp);
    }
    
    .Container{
        background: rgba(255, 255, 255, 0.2);
        border-radius: 2rem;
        backdrop-filter: blur(20px);
        padding: 20px;
    }

    /* Style the
     heading */
    h1 {
        color: rgb(0, 0, 0);
    }

    /* Style the paragraph */
    p {
        font-style: italic;
    }

    /* Style the list items */
    ul, ol {
        list-style-position: inside; /* Untuk mengatur posisi marker */
    }

    li {
        font-weight: bold;
        text-align: left; /* Untuk mengatur teks dalam list menjadi rata kiri */
    }

    /* Style the link in the list */
    ul li a {
        color: green;
    }

    /* Efek hover untuk tombol Form sign Up */
    a {
    text-decoration: none; /* Menghapus garis bawah default pada tautan */
    

}

a:hover {
    text-decoration: underline; /* Menambahkan garis bawah saat tautan dihover */
}
</style>
</head>




    <body>
        <div class="Container"  style="text-align: center;">
            <h1>Media online</h1>
            <h3>Sosial Media Developer</h3>
            <p>Belajar dan Berbagi agar hidup menjadi lebih baik</p>
            <h3>Benefit join di Media online</h3>
            <ul>
                <li>mendapatkan motivasi dari sesama Developer</li>
                <li>Sharing Knowledge</li>
                <li>Dibuat oleh calon web dev terbaik</li>
            </ul>
            <h3>Cara bergabung Ke Media online</h3>
            <ol>
                <li>Mengunjungi Web ini</li>
                <li>mendaftarkan di <a href="{{ url('form') }}">Form sign Up</a></li>
                <li>Selesai</li>
            </ol>
        </div>
     </body>
     

</html>