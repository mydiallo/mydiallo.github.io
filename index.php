<?php include "includes/header.php" ;  ?>
<?php include "db.php" ;  ?>
<!-- <?php include "functions.php" ; ?> -->

<?php

if(isset($_POST['creation_membre'])){

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $civilite = $_POST['civilite'];

    $image = $_FILES['image']['name'];
    $image_temp = $_FILES['image']['tmp_name'];

    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $adresse = $_POST['adresse'];
    $comment = $_POST['comment'];
    $date = date('d-m-y');
    // $post_comment_count = 4;

    move_uploaded_file($image_temp, "images/$image");

    // la fonction qui nous permet d'inserer nos données dans la base de données
    $query = "INSERT INTO users (nom, prenom, civilite, image, email, phone, adresse, comment, date) ";
    $query .= "VALUES('{$nom}','{$prenom}', '{$civilite}','{$image}','{$email}', '{$phone}', '{$adresse}','{$comment}',now()) ";
    $create_member_query = mysqli_query($conn, $query);
    

    // on utilise cette fonction pour afficher les erreurs s'il y en a (voir dans le fichier functions.php)
    comfirmQuery($create_member_query);
   
}
?>




<div class="container contact">
	<div class="row">
		<div class="col-md-3">
			<div class="contact-info">
            <img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image"/>
				<h2>Inscription</h2>
				<h4>SOP NABY FRANCE</h4>
			</div>
		</div>
		<div class="col-md-9">
		<form action="" method="post" enctype="multipart/form-data">

			<div class="contact-form">

				<div class="form-group">
				  <label class="control-label col-sm-2" for="fname">Nom:</label>
				  <div class="col-sm-10">          
					<input type="text" class="form-control" id="fname" placeholder="Entrer votre Nom" name="nom">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="lname">Prénom:</label>
				  <div class="col-sm-10">          
					<input type="text" class="form-control" id="lname" placeholder="Entrer votre Prénom" name="prenom">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="civilite">Civilité:</label>
				  <select name="civilite" id="">
                    <option value="Monsieur">Monsieur</option>
                    <option value="Madame">Madame </option>
                  </select>
				</div>
                <div class="form-group control-label col-sm-6">
                    <img width = "100" src="../images/<?php echo $image; ?>" alt="">
                    <input type="file" class="form-control" name="image">
                </div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="email">Email:</label>
				  <div class="col-sm-10">
					<input type="email" class="form-control" id="email" placeholder="Entrer votre email" name="email">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="phone">Téléphone:</label>
				  <div class="col-sm-10">
					<input type="phone" class="form-control" id="phone" placeholder="Entrer votre téléphone" name="phone">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-4" for="adresse">Adresse Postale:</label>
				  <div class="col-sm-10">
					<input type="text" class="form-control" id="adresse" placeholder="Entrer votre adresse" name="adresse">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-4" for="comment">Un message pour SOP NABY:</label>
				  <div class="col-sm-10">
					<textarea class="form-control" name="comment" rows="5" id="comment"></textarea>
				  </div>
				</div>
				<div class="form-group">        
				  <div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default" name="creation_membre" value="creation membre SOP NABY">Valider</button>
				  </div>
				</div>
			</div>
           

		</div>
		</form>
	</div>
</div>

    
<?php include "includes/footer.php" ;  ?>

