<?php include('inc/header_options.php'); ?>

<?php
  if (isset($_GET['objet'])) {
    $objet = $_GET['objet'];
    if ($objet == "visa")  {
      $corps = "Demande de Visa";
    } else if ($objet == "laisser") {
      $corps = "Demande de Laisser - Passer";
    } else if ($objet == "perte") {
      $corps = "Déclaration de Perte";
    }
  } else {
    $corps = "";
  }
?>

<div class="wrapper style1">
  <section class="container 75%">
    <header class="major">
      <h2>Nous Contacter</h2>
      <!-- <p></p> -->

    </header>
    <div id="contact" class="box">
      <div class="row">
        <div class="7u 12u(narrower)">
          <form method="POST" action="https://formspree.io/consulatcotedivoirecaen@huderie.com">
            <div class="row uniform 50%">
              <div class="12u">
                <?php
                  echo "<input type='text' value='".$corps."' name='name' id='name' placeholder='Objet' />"
                ?>
              </div>
            </div>
            <div class="row uniform 50%">
              <div class="12u">
                <input type="email" name="email" id="email" placeholder="Email" />
              </div>
            </div>
            <div class="row uniform 50%">
              <div class="12u">
                <textarea name="message" id="message" placeholder="Message" rows="7"><?php echo $corps ?></textarea>
              </div>
            </div>
            <div class="row uniform 50%">
              <div class="12u">
                <ul class="actions">
                  <li><input type="submit" value="Envoyer" /></li>
                  <li><input type="reset" class="alt" value="Réinitialiser" /></li>
                </ul>
              </div>
            </div>
          </form>
        </div>
        <div class="5u 12u(narrower)">
          <ul class="labeled-icons">
            <li>
              <h3 class="icon fa-map-marker"><span class="label">Adresse</span></h3>
              Haras de la Huderie <br>
              14950 Glanville <br>
              France
            </li>
            <li>
              <h3 class="icon fa-phone"><span class="label">Téléphone</span></h3>
              02 52 68 26 53
            </li>
            <li>
              <h3 class="icon fa-fax"><span class="label">Fax</span></h3>
              02 22 44 92 60
            </li>
            <li>
              <h3 class="icon fa-envelope"><span class="label">Email</span></h3>
              <a href="#">consulatcotedivoirecaen <br> @huderie.com</a>
            </li>
            <!-- <li>
              <h3 class="icon fa-twitter"><span class="label">Twitter</span></h3>
              <a target="_blank" href="https://twitter.com/huderie">twitter.com/huderie</a>
            </li>
            <li>
              <h3 class="icon fa-facebook"><span class="label">Facebook</span></h3>
              <a href="https://www.facebook.com/Huderie">facebook.com/Huderie</a>
            </li> -->
          </ul>
        </div>
      </div>
    </div>
  </section>
</div>
<?php include('inc/footer.php'); ?>
