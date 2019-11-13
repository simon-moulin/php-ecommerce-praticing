<form method="post" action="index.php?action=<?php echo $type ?>" enctype="multipart/form-data">
  	<fieldset>
    <legend> Ajout d'un produit : </legend>
    <p>
    <label for="name">Nom du produit :</label>
            <input type="text" value="<?php echo $name ?>" placeholder="Ex : t-shirt" name="name" id="name" required />
            <br>
            <label for="desc">Description :</label>
            <input type="text" value="<?php echo $desc ?>" placeholder="Ex : description du produit" name="desc" id="desc" required />
            <br>
            <label for="price">Prix</label>
            <input type="text" value="<?php echo $prix ?>" placeholder="Ex : 18" name="price" id="price" required />
            <br>

    
    <label for="fileToUpload">Photo du produit</label>
    <input type="file" name="fileToUpload" id="fileToUpload">
    </p>
    
    <input type='hidden' name='action' value='<?php echo $type ?>'>

    <p>
      <input type="submit" value="Envoyer" />
    </p>
  </fieldset> 
</form>
