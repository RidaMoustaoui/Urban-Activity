<!DOCTYPE html>
<html>

  <?php
    require("inc.php");
  ?>

  <!-- sale section -->

  <section class="sale_section layout_padding-bottom">
    <div class="container-fluid" style="padding-top:50px">
      <div class="heading_container">
        <h2>
          Découvrez les activités du moment.
        </h2>
        <p>
          Voici les dernières activités proposés par votre entreprise.
        </p>
      </div>
      <div class="sale_container">
      
        <!-- Affichier des activités dynamiquement -->
        <?php
          include('connect.php');

          try {
            $sql1 = "SELECT COUNT(ActId) FROM activity";
            $res1 = mysqli_query($conn, $sql1);
        
            if (!$res1) {
                printf("Error: %s\n", mysqli_error($conn));
                exit();
            }
        
            $row1 = mysqli_fetch_array($res1, MYSQLI_NUM);
        
        } catch (Exception $e) {
            echo $e;
        }

          try {
              $sql = "SELECT * FROM activity";
              $res = mysqli_query($conn, $sql);
          
              if (!$res) {
                  printf("Error: %s\n", mysqli_error($conn));
                  exit();
              }
              
              while($row=mysqli_fetch_array($res))
              {
                echo '
                <div class="box">
                <div class="img-box">
                  <a href="'.$row[3].'" target="_blank">
                    <img src="'.$row[4].'" alt="">
                  </a>
                </div>
                <div class="detail-box">
                  <h6>
                    '.$row[1].'
                  </h6>
                  <p>
                    '.$row[2].'
                  </p>
                </div>
              </div>';
              }
          
          } catch (Exception $e) {
              echo $e;
          }
        ?>
        </div>
      <div class="btn-box">
        <a href="house.php">
          Toutes les activités
        </a>
      </div>
    
  </section>

  <!-- end sale section -->

  <!-- price section -->

   <!--<section class="price_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container">
        <h2>
          Our Pricing
        </h2>
        <p>
          There are many variations of passages of Lorem Ipsum available, but the
        </p>
      </div>
      <div class="price_container">
        <div class="box">
          <div class="detail-box">
            <div class="heading-box">
              <h4>
                01
              </h4>
              <h6>
                Basic
              </h6>
            </div>
            <div class="text-box">
              <h2>
                $1000.00
              </h2>
              <ul>
                <li>
                  variations of
                </li>
                <li>
                  passages of Lorem
                </li>
                <li>
                  Ipsum available,
                </li>
                <li>
                  but the majority
                </li>
                <li>
                  have suffered
                </li>
                <li>
                  alteration in
                </li>
              </ul>
            </div>
          </div>
          <div class="btn-box">
            <a href="">
              Buy Now
            </a>
          </div>
        </div>
        <div class="box">
          <div class="detail-box">
            <div class="heading-box">
              <h4>
                02
              </h4>
              <h6>
                Standard
              </h6>
            </div>
            <div class="text-box">
              <h2>
                $2000.00
              </h2>
              <ul>
                <li>
                  variations of
                </li>
                <li>
                  passages of Lorem
                </li>
                <li>
                  Ipsum available,
                </li>
                <li>
                  but the majority
                </li>
                <li>
                  have suffered
                </li>
                <li>
                  alteration in
                </li>
              </ul>
            </div>
          </div>
          <div class="btn-box">
            <a href="">
              Buy Now
            </a>
          </div>
        </div>
        <div class="box">
          <div class="detail-box">
            <div class="heading-box">
              <h4>
                03
              </h4>
              <h6>
                Premium
              </h6>
            </div>
            <div class="text-box">
              <h2>
                $3000.00
              </h2>
              <ul>
                <li>
                  variations of
                </li>
                <li>
                  passages of Lorem
                </li>
                <li>
                  Ipsum available,
                </li>
                <li>
                  but the majority
                </li>
                <li>
                  have suffered
                </li>
                <li>
                  alteration in
                </li>
              </ul>
            </div>
          </div>
          <div class="btn-box">
            <a href="">
              Buy Now
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>-->
  <!-- end price section -->

  <!-- deal section -->

  <!--<section class="deal_section layout_padding-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                Very Good Deal For House
              </h2>
            </div>
            <p>
              There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
              in
              some form, by injected humour, or randomised words which don't look even slightly believable.
            </p>
            <a href="">
              Get A Quote
            </a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="img-box">
            <div class="box b1">
              <img src="images/d-1.jpg" alt="">
            </div>
            <div class="box b1">
              <img src="images/d-2.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->

  <!-- end deal section -->


  <!-- us section -->
    <!--<section class="us_section layout_padding2">

    <div class="container">
      <div class="heading_container">
        <h2>
          Why Choose Us
        </h2>
      </div>
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <div class="box">
            <div class="img-box">
              <img src="images/u-1.png" alt="">
            </div>
            <div class="detail-box">
              <h3 class="price">
                1000+
              </h3>
              <h5>
                Years of House
              </h5>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="box">
            <div class="img-box">
              <img src="images/u-2.png" alt="">
            </div>
            <div class="detail-box">
              <h3>
                20000+
              </h3>
              <h5>
                Projects Delivered
              </h5>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="box">
            <div class="img-box">
              <img src="images/u-3.png" alt="">
            </div>
            <div class="detail-box">
              <h3>
                10000+
              </h3>
              <h5>
                Satisfied Customers
              </h5>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="box">
            <div class="img-box">
              <img src="images/u-4.png" alt="">
            </div>
            <div class="detail-box">
              <h3>
                1500+
              </h3>
              <h5>
                Cheap Rates
              </h5>
            </div>
          </div>
        </div>
      </div>
      <div class="btn-box">
        <a href="">
          Get A Quote
        </a>
      </div>
    </div>
  </section> -->

  <!-- end us section -->

  <!-- client secction -->

  <section class="client_section" style="padding-bottom:90px">
    <div class="container-fluid">
      <div class="heading_container">
        <h2>
          L'équipe
        </h2>
      </div>
      <div class="client_container">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="box">
                <div class="img-box">
                  <img  alt = "Abdel" src="images/abdel.png" width="100" height="143">
                </div>
                <div class="detail-box">
                  <h5>
                    <span>Abdel Rady</span>
                    <hr>
                  </h5>
                  <p>
                    Developpeur 
                  </p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="box">
                <div class="img-box">
                  <img src="images/salman.jpg" alt="Salman"  width="100" height="143">
                </div>
                <div class="detail-box">
                  <h5>
                    <span>Salman Khan</span>
                    <hr>
                  </h5>
                  <p>
                   Developpeur
                  </p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="box">
                <div class="img-box">
                  <img src="images/tête.jpg" alt="Rida" width="100" height="143">
                </div>
                <div class="detail-box">
                  <h5>
                    <span>Rida Moustaoui</span>
                    <hr>
                  </h5>
                  <p>
                    Developpeur
                  </p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="box">
                <div class="img-box">
                  <img src="William.jpeg" alt="William" width="100" height="143">
                </div>
                <div class="detail-box">
                  <h5>
                    <span>William Coudair</span>
                    <hr>
                  </h5>
                  <p>
                    Infra
                  </p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="box">
                <div class="img-box">
                  <img src="images.png" alt="Bilel" width="100" height="143">
                </div>
                <div class="detail-box">
                  <h5>
                    <span>Bilel Bouaknine</span>
                    <hr>
                  </h5>
                  <p>
                    Infra
                  </p>
                </div>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="sr-only">Next</span>
          </a>
        </div>

      </div>
    </div>
  </section>

  <!-- end client section -->

  <!-- contact section -->

  <section class="contact_section ">
    <div class="container">
      <div class="heading_container">
        <h2>
          Informations
        </h2>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 px-0">
          <div class="map_container">
            <div class="map-responsive">
              <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France" width="600" height="300" frameborder="0" style="border:0; width: 100%; height:100%" allowfullscreen></iframe>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-5 ">
          <div class="form_container">
            <form action="">
              <div>
                <input type="text" placeholder="Name" />
              </div>
              <div>
                <input type="email" placeholder="Email" />
              </div>
              <div>
                <input type="text" placeholder="Phone Number" />
              </div>
              <div>
                <input type="text" class="message-box" placeholder="Message" />
              </div>
              <div class="d-flex ">
                <button>
                  Envoyer
                </button>
              </div>
            </form>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- end contact section -->



  <!-- info section -->
  <section class="info_section ">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="info_contact">
            <h5>
              Localisation de l'entreprise
            </h5>
            <div>
              <div class="img-box">
                <img src="images/location.png" width="18px" alt="">
              </div>
              <p>
                Tour Eiffel
              </p>
            </div>
            <div>
              <div class="img-box">
                <img src="images/phone.png" width="12px" alt="">
              </div>
              <p>
                0101010101
              </p>
            </div>
            <div>
              <div class="img-box">
                <img src="images/mail.png" width="18px" alt="">
              </div>
              <p>
                entreprise@gmail.com
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_info">
            <h5>
              Information
            </h5>
            <p>
              Le site permet de se rencontrer , s'amuser entre collégue à travers des activités.
            </p>
          </div>
        </div>

       <!-- <div class="col-md-3">
          <div class="info_links">
            <h5>
              Useful Link
            </h5>
            <ul>
              <li>
                <a href="">
                  There are many
                </a>
              </li>
              <li>
                <a href="">
                  variations of
                </a>
              </li>
              <li>
                <a href="">
                  passages of
                </a>
              </li>
              <li>
                <a href="">
                  Lorem Ipsum
                </a>
              </li>
              <li>
                <a href="">
                  available, but
                </a>
              </li>
              <li>
                <a href="">
                  the i
                </a>
              </li>
            </ul>
          </div>
        </div> -->
        <div class="col-md-3">
          <div class="info_form ">
            <h5>
              Newsletter
            </h5>
            <form action="">
              <input type="email" placeholder="Enter your email">
              <button>
                Subscribe
              </button>
            </form>
            <div class="social_box">
              <a href="https://fr-fr.facebook.com/">
                <img src="images/fb.png" alt="">
              </a>
              <a href="https://twitter.com/?lang=fr">
                <img src="images/twitter.png" alt="">
              </a>
              <a href="https://fr.linkedin.com/">
                <img src="images/linkedin.png" alt="">
              </a>
              <a href="https://www.youtube.com/">
                <img src="images/youtube.png" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info_section -->


  <!-- footer section -->
  <section class="container-fluid footer_section ">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="https://html.design/">Rida MOUSTAOUI, Salman KHAN, Abdel RADY, William, Bilel</a>
      </p>
    </div>
  </section>
  <!-- end  footer section -->


  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>


</body>

</html>