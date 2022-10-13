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
                $sql2= "SELECT Nom, Prenom FROM users WHERE UserID=".$row[7] ;
              $res2 = mysqli_query($conn, $sql2);
                while($row2=mysqli_fetch_array($res2))
                {

                  $sql3="SELECT COUNT(*) FROM participe WHERE ActId=".$row[0];
                  $res3=mysqli_query($conn, $sql3);
                  $sql4="SELECT MaxPart from activity WHERE ActId=".$row[0];
                  $res4=mysqli_query($conn,$sql4);
                  while($row3=mysqli_fetch_array($res3))
                  {
                      while($row4=mysqli_fetch_array($res4))
                      {
                        echo '
                        <div class="box">
                        <div class="img-box">
                          <a href="'.$row[3].'" target="_blank">
                          <img src="'.$row[4].'" alt="" width="200px" height="350px">
                          </a>
                        </div>
                        <div class="detail-box">
                          <h6>
                            '.$row[1].' 
                          </h6>
                          <p>';
                          if(isset($_SESSION['Mail']))
                          {
                            echo '<form action="participe.php" method="POST">
                            <input type="hidden" id="getAct" name="getAct" value="'.$row[0].'" />
                            <input type="hidden" id="getMax" name="getMax" value="'.$row4[0].'" />
                            <input type="hidden" id="getPar" name="getPar" value="'.$row3[0].'" />
                            <button>
                            '.$row3[0].'/'.$row4[0].' Participants
                            </button>
                          </form>';
                          }
                          
                            echo ''.$row[2].' - Créé par '.$row2[0]. ' '.$row2[1].'
                          </p>
                        </div>
                      </div>';
                      }
                  }
                
                }
              }
          
          } catch (Exception $e) {
              echo $e;
          }
        ?> 
    </div>
          <br><br>

    <div class="heading_container">
        <h2>
          Vous voulez créer une activité?
        </h2>
        <p>
          Cliquez sur le bouton ci dessous pour accéder au formulaire de création d'activité
        </p>
      
      <?php
            if(isset($_SESSION['Mail']))
            {
              echo '<div class="btn-box">
              <a href="creAct.php">
                Créez une activité
              </a>
            </div>';
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