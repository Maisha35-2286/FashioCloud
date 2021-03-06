<?php 
  session_start();
  if(!($_SESSION['user'])){
    $_SESSION['user'] = '';
  }else{
    $_SESSION['user'] = $_SESSION['user'];
  }
?>
<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset='UTF-8'>
  <title>Fashion Dressing</title>
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
  <div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">FashioCloud</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">About</a>
          </li>
          <?php
            if(($_SESSION['user']) == ''){
              echo '<li class="nav-item">';
              echo '<a class="nav-link" href="login.html">Login</a>';
              echo '</li>';
              echo '<li class="nav-item">';
              echo '<a class="nav-link" href="register.html">Register</a>';
              echo '</li>';
              
            }else{
              echo '<li class="nav-item">';
              echo '<a class="nav-link" href="feedback.php">Feedback</a>';
              echo '</li>';
              echo '<li class="nav-item">';
              echo '<a class="nav-link" href="logout.php">Logout</a>';
              echo '</li>';
            }
          ?>
          
        </ul>
      </div>
    </nav>

    <div class="content-wrapper">
      <div class="fashion-items-wrapper">

        <div class="fashion-item-wrapper">
          <div class="fashion-img-background" style="background-image:url(images/rebexa.jpg)"></div>

          <div class="img-text-wrapper">
            <div class="logo-wrapper">
              <img src="images/logos/rebexa.png" alt="">
            </div>

            <div class="subtitle">Rebexa provides impeccable tailoring, glamour and amazing dressing.</div>
          </div>
        </div>

        <div class="fashion-item-wrapper">
          <div class="fashion-img-background" style="background-image:url(images/aurora.jpg)"></div>
          <div class="img-text-wrapper">
            <div class="logo-wrapper">
              <img src="images/logos/aurora.png" alt="">
            </div>

            <div class="subtitle">The Company was launched in the year 1925</div>
          </div>
        </div>

        <div class="fashion-item-wrapper">
          <div class="fashion-img-background" style="background-image:url(images/fashiocloud.jpg)"></div>
          <div class="img-text-wrapper">
            <div class="logo-wrapper">
              <img src="images/logos/fashiocloud.png" alt="">
            </div>

            <div class="subtitle">Fashiocloud is known for their intrigued embellishments</div>
          </div>
        </div>

        <div class="fashion-item-wrapper">
          <div class="fashion-img-background" style="background-image:url(images/dressed.jpg)"></div>
          <div class="img-text-wrapper">
            <div class="logo-wrapper">
              <img src="images/logos/dressed.png" alt="">
            </div>

            <div class="subtitle">This company is famous for its innovations.</div>
          </div>
        </div>

        <div class="fashion-item-wrapper">
          <div class="fashion-img-background" style="background-image:url(images/echo.jpg)"></div>
          <div class="img-text-wrapper">
            <div class="logo-wrapper">
              <img src="images/logos/echo.png" alt="">
            </div>

            <div class="subtitle">Echo entirely focuses on luxury and strives to provide all sort of dress materials for you to live your desired life. </div>
          </div>
        </div>

        <div class="fashion-item-wrapper">
          <div class="fashion-img-background" style="background-image:url(images/crystal.jpg)"></div>
          <div class="img-text-wrapper">
            <div class="logo-wrapper">
              <img src="images/logos/crytstal.png" alt="">
            </div>

            <div class="subtitle">The company strives to make sure that women are comfortable in their clothes and they should feel proud.</div>
          </div>
        </div>

        <div class="fashion-item-wrapper">
          <div class="fashion-img-background" style="background-image:url(images/sakura.jpg)"></div>
          <div class="img-text-wrapper">
            <div class="logo-wrapper">
              <img src="images/logos/sakura.png" alt="">
            </div>

            <div class="subtitle">Sakura brand is one of the most expensive brands and every girl would love to have this one.</div>
          </div>
        </div>

        <div class="fashion-item-wrapper">
          <div class="fashion-img-background" style="background-image:url(images/blink.jpg)"></div>
          <div class="img-text-wrapper">
            <div class="logo-wrapper">
              <img src="images/logos/blink.png" alt="">
            </div>

            <div class="subtitle">Throughout the journey of all these 176 years, the company had been very successful.</div>
          </div>
        </div>

        <div class="fashion-item-wrapper">
          <div class="fashion-img-background" style="background-image:url(images/vintage.jpg)"></div>
          <div class="img-text-wrapper">
            <div class="logo-wrapper">
              <img src="images/logos/vintage.png" alt="">
            </div>

            <div class="subtitle">Vintage Blink is known to produce clothes which are worth wearing for a red carpet event.</div>
          </div>
        </div>

        <div class="fashion-item-wrapper">
          <div class="fashion-img-background" style="background-image:url(images/leaf.jpg)"></div>
          <div class="img-text-wrapper">
            <div class="logo-wrapper">
              <img src="images/logos/leaf.png" alt="">
            </div>

            <div class="subtitle">World’s most expensive brand is Leaf World. </div>
          </div>
        </div>

        <div class="fashion-item-wrapper">
          <div class="fashion-img-background" style="background-image:url(images/girly.jpg)"></div>
          <div class="img-text-wrapper">
            <div class="logo-wrapper">
              <img src="images/logos/girly.png" alt="">
            </div>

            <div class="subtitle">The brand offers clothes with amazing design, style, and colour and makes every girl feel special. Thus this is in the top 4th position.</div>
          </div>
        </div>

        <div class="fashion-item-wrapper">
          <div class="fashion-img-background" style="background-image:url(images/artistry.jpg)"></div>
          <div class="img-text-wrapper">
            <div class="logo-wrapper">
              <img src="images/logos/artistry.png" alt="">
            </div>

            <div class="subtitle">They are experts in the production of belts, men’s and women’s sportswear riding gloves etc.</div>
          </div>
        </div>

      </div>
    </div>
  </div>

</body>

<script>
  const fashionItems = document.querySelectorAll('.fashion-item-wrapper');

  fashionItems.forEach(fashionItem => {
    fashionItem.addEventListener('mouseover', () => {
      console.log(fashionItem.childNodes[1].classList)
      fashionItem.childNodes[1].classList.add('image-blur');
    });

    fashionItem.addEventListener('mouseout', () => {
      console.log(fashionItem.childNodes[1].classList)
      fashionItem.childNodes[1].classList.remove('image-blur');
    });
  });

</script>

</html>