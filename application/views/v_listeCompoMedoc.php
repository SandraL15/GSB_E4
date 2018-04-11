
<html>
    <head>
        <title> Gestions des medicaments </title>
        <h1> Gestion des composants d'un médicament  <a class="btn btn-primary" href='<?php echo base_url(); ?>'>Retourner à l'accueil</a></h1>
        
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
             <body>

        <header>
            <div>
              <h1>Liste des composants d'un medicament</h1>
            </div>
        </header>
    <div class="container">
            <h3>Choisissez un medicament</h3>
        
            <select class="form-control" id='idMeds'>
                <?php 
                    foreach ($lesMedicaments as $meds){
                        echo "<option value='".$meds->MED_DEPOTLEGAL."'>".$meds->MED_NOMCOMMERCIAL."</option>";
                    }
                ?>

            </select>
            <br>
            <div id="divComps"></div>
    </div>

</body>
</html>