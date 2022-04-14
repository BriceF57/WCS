<!-- Header section -->
    <head>
        <link href="fonts.googleapis.css" rel="stylesheet">
    </head>
<header>
  <h1>
    <img src="https://www.wildcodeschool.com/assets/logo_main-e4f3f744c8e717f1b7df3858dce55a86c63d4766d5d9a7f454250145f097c2fe.png" alt="Wild Code School logo" />
    Les Argonautes
  </h1>
</header>

<!-- Main section -->
<main>
  <body>
  <!-- New member form -->
  <h2>Ajouter un(e) Argonaute</h2>
  <form class="new-member-form">
    <label for="name">Nom de l&apos;Argonaute</label>
    <input id="name" name="name" type="text" placeholder="Charalampos" />
    <button type="submit">Envoyer</button>
  </form>
  
  <!-- Member list -->
  <h2>Membres de l'équipage</h2>
  <section class="member-list" style="text-align: center"> 
  <!--Connexion à BDD avec PHP-->
  <?php
    $mysqli = new mysqli("localhost", "root", "", "jason");
		$mysqli->set_charset("utf8");

    $reponse = $mysqli->query('SELECT * FROM members');
    while ($donnees = $reponse->fetch_assoc())
    {
      echo '<tr> <td></td> <td>'.$donnees['name'].'</td></tr>';
    }
    $mysqli->close();
  ?>
  </section>
  </body>
</main>

<footer>
  <p>Réalisé par Jason en Anthestérion de l'an 515 avant JC</p>
</footer>