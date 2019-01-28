







<div class="footer">

<div class="conteneur-contenu-footer-haut">
  <div class="conteneur-info-footer">

    <h1 class="titre-section-footer"><a class="lien-titre-footer" href="/psychoschoolVal/techniques.php">TECHNIQUES</a></h1>

    <ul class="liste-puce-footer">
      <?php
        $pref = __FILE__;
        $pos = strpos($pref, "psychoschoolVal");
        $longeur = strlen($pref);
        $aefface = $pos+15-$longeur;
        $pref = substr($pref, 0, $aefface);
        include_once($pref."/includes/backrownd/dph.php");

        $sql = "SELECT * FROM article WHERE article_thechnique='1' ORDER BY article_id DESC";
        $result = mysqli_query($conn, $sql);
        $resultChek = mysqli_num_rows($result);
        $maxart = 5;
        $nbaffich = 0;
        if ($resultChek >0) {
          while ($row = mysqli_fetch_assoc($result)) {
          	$nbaffich += 1;
          	if ($nbaffich > $maxart) {
          		break(1);
          	}
            echo '<li class="bouton-footer">'.$row['article_titre'].'</li>';
          }
        }
      ?>
    </ul>
    
  </div>
  <div class="conteneur-info-footer">

    <h1 class="titre-section-footer"><a class="lien-titre-footer" href="/psychoschoolVal/livre.php">MATÉRIEL</a></h1>

    <ul class="liste-puce-footer">
      <?php
        $sql = "SELECT * FROM article WHERE article_thechnique='0' ORDER BY article_id DESC";
        $result = mysqli_query($conn, $sql);
        $resultChek = mysqli_num_rows($result);
        $nbaffich = 0;
        if ($resultChek >0) {
          while ($row = mysqli_fetch_assoc($result)) {
            $nbaffich += 1;
            if ($nbaffich > $maxart) {
              break(1);
            }
            echo '<li class="bouton-footer">'.$row['article_titre'].'</li>';
          }
        }
      ?>
    </ul>
    
  </div>
  <div class="conteneur-info-footer">

    <h1 class="titre-section-footer"><a class="lien-titre-footer" href="#">À PROPOS</a></h1>

    <ul class="liste-puce-footer">
      <li class="bouton-footer">Contact</li>
      <li class="bouton-footer">Avis clients</li>
      <li class="bouton-footer">Qui sommes-nous ?</li>
      <li class="bouton-footer">Adresse</li>
    </ul>
    
  </div>

  <div class="conteneur-info-footer">

    <h1 class="titre-section-footer"><a class="lien-titre-footer" href="#">NOUS SUIVRE</a></h1>

    <ul class="liste-puce-footer">
      <li>
        <a class="lien-social" href="#"><img class="image-réseaux-footer" src="img/facebook-logo-white.png"></a>
        <a class="lien-social" href="#"><img class="image-réseaux-footer" src="img/twitter-logo-white.png"></a>
        <a class="lien-social" href="#"><img class="image-réseaux-footer" src="img/vine-logo-white.png"></a>
        <a class="lien-social" href="#"><img class="image-réseaux-footer" src="img/youtube-logo-white.png"></a>
        <a class="lien-social" href="#"><img class="image-réseaux-footer" src="img/instagram-logo-white.png"></a>
      </li>
      <li></li>
      <li></li>
      <li></li>
    </ul>
    
  </div>

</div>
<div class="conteneur-contenu-footer-bas">
  <p class="texte-copyright">© Psychoschool - All right reserved.</p>
</div>

  
    <script>
$(document).ready(function() {
    $("body").append('<div id="customwidget" style="width:320px;display:none; border-radius:10px; position:fixed; left:30px; bottom:30px; padding:10px 20px;padding-left:10px;  box-shadow: 0 0 30px rgba(0, 0, 0, .2);background:#fff;"><div class="desc desc_live_preview"><div style="float:left;padding:2px 10px;"><img class="live_preview_image" src="" alt="" style="background: rgb(255, 255, 255);border-radius:5px;" height="48" width="48"></div> <span class="desc-heading" style=" font-family: Poppins, sans-serif;"> <div class="desc-heading-name" style="color: #000000; font-weight:600; font-size:14px;padding-top:3px;font-family: Poppins, sans-serif;"> <span id="name"></span> de <span id="city"></span> </div> <div class="desc-heading_foot" style="color: #636363"><small>a acheté <span class="product">XXX</span></div><div style="color: #636363;font-family: Poppins, sans-serif;padding-top:3px;"> il y a <span id="time"></span> minutes</small></div>  </span> </div></div>')

var firstname=["Robin","Victorien","Clara","Jean","Stanislas","Louis","Camille","Hugo","Léo","Mathilde","Valentin","Jules","Martin","Samy","Alex","Matteo","Maxime","Arthur","David","Sandra","Emilie","Emma","Chloé","Lisa","Alicia","Julie"];
    var lastname=["R.","N.","A.","B.","C.","L.","D.","S.","J.","G.","M."];
    var cities=["Paris","Marseille","Lyon","Grenoble","Brest","Nantes","Perpignan","Strasbourg","Toulouse","Nice","Montpellier","Bordeaux","Lille","Rennes","Saint-Étienne","Angers","Poudlard"];
    var minutes=["2","3","4","5","6","7","8","9","10","11","12","13","14","15"];
    var products=['<a class="lien-product" href="livre.php">Livre 1</a> via notre lien','<a class="lien-product" href="livre.php">Livre 2</a> via notre lien','<a class="lien-product" href="livre.php">Livre 3</a> via notre lien','<a class="lien-product" href="livre.php">Livre 4</a> via notre lien','<a class="lien-product" href="livre.php">Livre 5</a> via notre lien','<a class="lien-product" href="livre.php">Livre 6</a> via notre lien',];
    setInterval(function(){
      $("#name").html(getRandomEle(firstname)+" "+getRandomEle(lastname));
      var idx=getRandomIndex(cities);
      $("#city").html(cities[idx]);
      $("#time").html(getRandomEle(minutes));
      $(".live_preview_image").attr("src","/psychoschoolVal/img/shopping-cart.png");
      $("#customwidget").fadeIn();
      $(".product").html(getRandomProduct(products));
      setTimeout(function(){ $("#customwidget").fadeOut(function(){ $("#name").html('');$("#city").html('');$(".live_preview_image").attr("src",""); });},20000);
    }, 30000);

    function getRandomEle(names) {
      return names[Math.floor(Math.random() * (names.length -1))];
    }
    function getRandomIndex(names) {
      return Math.floor(Math.random() * (names.length -1));
    }
    function getRandomProduct(products) {
      return products[Math.floor(Math.random() * (products.length))];

    }
});
</script>
		
	</div>



</body>
</html>