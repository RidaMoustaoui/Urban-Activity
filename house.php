<!DOCTYPE html>
<html>

<?php
    require("inc.php");
  ?>

  <!-- sale section -->

  <section class="sale_section layout_padding">
    <div class="container-fluid">
      <div class="heading_container">
        <h2>
          Activités
        </h2>
        <p>
          Voici les activités proposés par vos collègues et votre entreprise.
        </p>
        <form action="creAct.php">
              <button>
                Créez une activité
              </button>
            </form>
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
  </section>

  <!-- end sale section -->

  <!-- info section -->
  <section class="info_section ">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="info_contact">
            <h5>
              About Apartment
            </h5>
            <div>
              <div class="img-box">
                <img src="images/location.png" width="18px" alt="">
              </div>
              <p>
                Address
              </p>
            </div>
            <div>
              <div class="img-box">
                <img src="images/phone.png" width="12px" alt="">
              </div>
              <p>
                +01 1234567890
              </p>
            </div>
            <div>
              <div class="img-box">
                <img src="images/mail.png" width="18px" alt="">
              </div>
              <p>
                demo@gmail.com
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
              ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
            </p>
          </div>
        </div>

        <div class="col-md-3">
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
        </div>
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
              <a href="">
                <img src="images/fb.png" alt="">
              </a>
              <a href="">
                <img src="images/twitter.png" alt="">
              </a>
              <a href="">
                <img src="images/linkedin.png" alt="">
              </a>
              <a href="">
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
        <a href="https://html.design/">Free Html Templates</a>
      </p>
    </div>
  </section>
  <!-- end  footer section -->


  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>

</body>
</body>

</html>