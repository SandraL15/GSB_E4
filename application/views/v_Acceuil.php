<html>
    <head>
        <title>Gestion des composants - GSB</title>
        <meta charset="UTF-8">
         <script type="text/javascript" src="js/functions.js"></script>
        <!-- Latest compiled and minified CSS -->
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <script type="text/javascript" src="JQuery/jquery-3.1.1.js"></script>
        <script type="text/javascript">
</script>
    <head>
        <h1 style="text-align: center;"> GSB </h1>
    </head>
    <body>
        <h3> Gestion des composants </h3>
          <input id="btnListerComposant" class="btn btn-primary" type="button" value="Voir la liste des composants" onclick="location.href='<?php echo base_url(); ?>index.php/Ctrl_Composant/afficherComposants'"/>
          <input id="btnAjouterComposant" class="btn btn-primary" type="button" value="Ajouter un composant" onclick="location.href='<?php echo base_url(); ?>index.php/Ctrl_Composant/ajouterComposant'"/>
          <input id="btnModifierComposant" class="btn btn-primary" type="button" value="Modifier un composant" onclick="location.href='<?php echo base_url(); ?>index.php/Ctrl_Composant/modifierComposant'"/>
        <h3> Gestion des composants d'un médicament</h3>
          <input id="btnListerComposantDeMedoc" class="btn btn-primary" type="button" value="Ajouter des composants à un médicament" onclick="location.href='<?php echo base_url(); ?>index.php/Ctrl_Composant/ajouterComposantMeds'"/>
        <h3> Statistiques </h3>
        <input id="btnStats" class="btn btn-primary" type="button" value="Voir les statistiques" onclick="location.href='<?php echo base_url(); ?>index.php/Ctrl_Composant/statistique'"/>
    </body>
</html>