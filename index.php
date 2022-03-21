<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>project</title>
    <!--link css-->
    <link rel="stylesheet" href="CSS/styles.css" />
    <!--google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet">
  </head>
  <body>
    <?php
      include_once("header.php");
      require_once("connect.php");
    ?>
    <main>
        <div class="container__homepage" id="home">
            
            <div class="burger__pic">

            </div>
        </div>

        <div class="container__about" id="about">
          <div class="txt__about__box">
            <div class="txt__title__about">
              <h2>Title</h2>
            </div>
            <div class="txt__info__about">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod illum inventore atque. Placeat quod doloremque natus fugit eligendi temporibus cupiditate, at cum, fuga architecto vero, recusandae accusantium ipsam iusto possimus beatae quasi. Id vero molestiae aut quasi. Officia debitis cupiditate voluptatum illum cumque minima laborum provident quasi qui ipsam sed repellat quidem necessitatibus dignissimos neque id et error hic laudantium, dolore ipsum! Nobis tenetur laboriosam, alias voluptates recusandae doloribus? Incidunt fugiat eos illo laboriosam nemo?
            </div>
            <div class="txt__pic__about">

            </div>
          </div>
          <div class="pic__about__box">
            <div class="pic__about">

            </div>
            <div class="title__margin__about txt__title__about">
              <h2>Title</h2>
            </div>
            <div class="txt__info__about">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod illum inventore atque. Placeat quod doloremque natus fugit eligendi temporibus cupiditate, at cum, fuga architecto vero, recusandae accusantium ipsam iusto possimus beatae quasi. Id vero molestiae aut quasi. Officia debitis cupiditate voluptatum illum cumque minima laborum provident quasi qui ipsam sed repellat quidem necessitatibus dignissimos neque id et error hic laudantium, dolore ipsum! Nobis tenetur laboriosam, alias voluptates recusandae doloribus? Incidunt fugiat eos illo laboriosam nemo?
            </div>
          </div>
        </div>

        <div class="container__menu" id="menu">
          <div class="div__menu__select">
            <div class="menu__title__catogorie">
              <h2>
                Categorieën
              </h2>
            </div>
            <div class="menu__keuze__catogorie">
              <a href="#snacks"><p>Snacks</p></a>
              <a href="#friet"><p>Friet</p></a>
              <a href="#hamburgers"><p>Hamburgers</p></a>
              <a href="#pizza"><p>Pizza</p></a>
              <a href="#menu"><p>Menu</p></a>
              <a href="#schotel"><p>Schotel</p></a>
              <a href="#kapsalon"><p>Kapsalon</p></a>
              <a href="#broodjes"><p>Broodjes</p></a>
              <a href="#durums"><p>Durums</p></a>
              <a href="#sauzen"><p>Sauzen</p></a>
              <a href="#salade"><p>Salade</p></a>
              <a href="#ijs"><p>ijs</p></a>
              <a href="#shake"><p>Shake</p></a>              
              <a href="#dranken"><p>dranken</p></a>
            </div>
          </div>

          <div class="div__scroll__food">
              <section id="#snacks">
                <h2>Snacks</h2>
                
              </section>
              <section id="#friet"></section>
              <section id="#hamburgers"></section>
              <section id="#pizza"></section>
              <section id="#menu"></section>
              <section id="#schotel"></section>
              <section id="#kapsalon"></section>
              <section id="#broodjes"></section>
              <section id="#durums"></section>
              <section id="#sauzen"></section>
              <section id="#salade"></section>
              <section id="#ijs"></section>
              <section id="#shake"></section>
              <section id="#dranken"></section>                         
          </div>
          <div class="div__winkelwagen">

          </div>
        </div>

        <div class="container__werken__bigsnack" id="werken">
          
        </div>

        <div class="container__contact" id="contact">

        </div>
        <!--
        <?php
          $sql = "SELECT * FROM album";
          $stmt = $connect->prepare($sql);
          
          $stmt->execute();
          $result = $stmt->fetchALL(); 

          foreach($result as $res)
          {
            echo $res['titel']."<br>4";
          }
        ?>
        -->
    </main>
    <footer>

    </footer>
  </body>
</html>
