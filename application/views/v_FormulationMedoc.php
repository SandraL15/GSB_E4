<html>
    <head>
        <title>Gestion des formulations</title>
        <a class="btn btn-primary" href='<?php echo base_url(); ?>'>Retourner à l'accueil</a>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
               <!-- Latest compiled and minified CSS -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
            <!-- Optional theme -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
                <script type="text/javascript" src="<?php echo base_url(); ?>JQuery/jquery-3.2.1.min.js"></script>
         <script type="text/javascript" src="  <?php echo base_url(); ?>js/functions.js"></script>
            <!-- Latest compiled and minified JavaScript -->
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
         <script type="text/javascript">
         $(
                  function(){
                         $('#btnValidComF').click(
                         function(){
                             AjoutFormulationMedoc();        
                         });
                 
 
             } );
        </script>
    </head>
    <body>
        <div class="container">
            <div id="AJ">
            <h2 >Inserer la presentation d'un medicament</h2>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <h3 >Choisissez un medicament : </h3>
                        <select class="form-control" id='idMeds'>
                            <?php 
                                foreach ($lesMedicaments as $meds){
                                    echo "<option value='".$meds->MED_DEPOTLEGAL."'>".$meds->MED_NOMCOMMERCIAL."</option>";
                                }
                            ?>
                         </select>
                    </div>
                    <div class="col-md-6">
                      <h3>Choisissez une presentation : </h3> 
                         <select class="form-control" id='idPres'>
                            <?php 
                                foreach ($lesPresentations as $pres){
                                    echo "<option value='".$pres->PRE_CODE."'>".$pres->PRE_LIBELLE."</option>";
                                }
                            ?>
                         </select>
                    </div>
                </div>
                <input id="btnValidComF" class="btn btn-info" type="button"  value="Valider" style="margin-top: 20px;"><br>   
                <div id="divAffichPres"></div>
           
            </div>
        </div>
    </body>
</html>