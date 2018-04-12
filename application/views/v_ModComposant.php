
<html>
    <head>
        <title> Gestions des composants </title>
        <h1> Gestion des composants  <a class="btn btn-primary" href='<?php echo base_url(); ?>'>Retourner à l'accueil</a></h1>
        
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
        <body>
            
                
                
            <?php echo form_open('Ctrl_Composant/modifierComposantMod');  ?>
            
            
            <h4><b>Veuillez saisir les informations du composant à modifier</b></h4>
            <br><label>Code: </label><input type="text" name="CMP_CODE" value="<?php echo $unComposant[0]->CMP_CODE; ?>" />
            <br><label>Libelle: </label><input type="text" name="CMP_LIBELLE" value="<?php echo $unComposant[0]->CMP_LIBELLE; ?>" />

            <input type="hidden" name ="hidden_id" value="<?php echo $unComposant[0]->CMP_CODE; ?>">          
            <br><input type="submit" class="btn btn-info" name="subValider" value="Modifier le composant">      
            
<?php echo form_close();  ?>
     
    </body>
</html>