<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

     Bootstrap CSS 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="stylebody.css">
    <title>GİRİŞ YAP</title>
  </head>
  <body>
    
      <div class="container">
        <div class="row">
          <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card border-0 shadow rounded-3 my-5">
              <div class="card-body p-4 p-sm-5">
                <h1>
                <?php
                if(($_POST["emaill"] == "b201210014@sakarya.edu.tr") && ($_POST["password"] == "b201210014"))
                {
                    echo "<h1 class=\"login_yazi\">Hoşgeldiniz \"b201210014\"</h1> <br><br> <a class=\"btn bg-light\" href=\"hakkında.html\">Ana Sayfa</a>";
                }
                else
                {
                    echo "<h1 class=\"login_yazi\">Giriş bilgileriniz hatalı. Lütfen tekrar deneyiniz.</h1> <br><br> <a class=\"btn bg-light\" href=\"loginpage.html\">Giriş</a>";
                }
                ?>
  
              </h1>
                     
              </div>
            </div>
          </div>
        </div>
      </div>
    
    
   
  </body>

</html> 
