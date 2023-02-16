<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>Thanks PHP</title>
    </head>
    <body>
    <h1>Message transmis</h1>
    <p>Merci <?php echo $_GET ['user_prename'];?> <?php echo $_GET ['user_name'];?> de nous avoir contacté à propos de <?php echo $_GET ['subjects'];?></p>
    <p>Un de nos conseillers vous contactera soit à l’adresse <?php echo $_GET ['user_email'];?> ou par téléphone au <?php echo $_GET ['phone'];?> dans les plus brefs délais pour traiter votre demande :</p> 
    <span><?php echo $_GET ['user_message'];?></span>


</body>
</html>