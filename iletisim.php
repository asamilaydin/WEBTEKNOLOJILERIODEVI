<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<title>AHMET ŞAMİL AYDIN</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

<link rel="stylesheet" href="style.css">
   
<link rel="preconnect" href="https://fonts.googleapis.com">

<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Oleo+Script+Swash+Caps&family=Poppins:wght@300&display=swap" rel="stylesheet">



</head>
<body>

  <nav class="navbar bg-dark navbar-dark navbar-expand-md " id="menu">
    
    <div class="container-fluid">
    
      <a href="hakkında.html" class="navbar-brand" id="logo">BENİM DÜNYAM</a>
    <ul class="navbar-nav">
      <li class="nav-item">
        <a href="loginpage.html" class="nav-link">GİRİŞ YAP</a>
      </li>
      <li class="nav-item">
        <a href="hakkında.html" class="nav-link">HAKKINDA</a>
      </li>
      <li class="nav-item">
        <a href="ozgecmis.html" class="nav-link">ÖZGEÇMİŞ</a>
      </li>
      <li class="nav-item">
        <a href="sehrim.html" class="nav-link">ŞEHRİM</a>
      </li>
      <li class="nav-item">
        <a href="mirasımız.html" class="nav-link">MİRASIMIZ</a>
      </li>
      <li class="nav-item">
        <a href="ilgialanlarım.html" class="nav-link">İLGİ ALANLARIM</a>
      </li>
      <li class="nav-item">
        <a href="iletisim.html" class="nav-link">İLETİŞİM</a>
      </li>
     

    </ul>
  </div>
  </nav>

  <header class="standart_background">
        <main class="text-center container d-flex h-100 align-items-center">
          <div class="mx-auto col-5 mx-auto mt-3">
            <h1>
                <table class="text-center table table-dark">
                        <tr>
                        <th>İsim: </th>
                        <td><?php echo $_POST["isim"]; ?></td>
                        </tr>
                        <tr>
                        <th>Soyisim: </th>
                        <td><?php echo $_POST["soyisim"]; ?></td>
                        </tr>
                        <tr>
                        <th>E-Mail: </th>
                        <td><?php echo $_POST["email"]; ?></td>
                        </tr>
                        <tr>
                        <th>Cinsiyet: </th>
                        <td>
                            <?php 
                            if (isset($_POST["cinsiyet"]))
                            {
                                echo $_POST["cinsiyet"];
                            }
                            else
                            {
                                echo "N/A";
                            }
                            ?>
                         </td>
                        </tr>
                        <tr>
                        <th>Şehir: </th>
                        <td><?php echo $_POST["sehir"]; ?></td>
                        </tr>
                       
                </table>
            </h1>
          </div>
        </main>
      </header>
    
          
    </body>
</html>