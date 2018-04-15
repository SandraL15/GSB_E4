<html>
    <head>
        <title>Gestion des composants des medicaments</title>
        <h1 style=" text-align: center; "> Gestion des composants d'un medicament <a class="btn btn-primary" href='<?php echo base_url(); ?>'>Retourner à l'accueil</a></h1>
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
 
                      $('#idMeds').click(
                              function(){
                                 $('.bg-info').show();
                                      
                              });
                      $('#idMeds').show(
                         function(){
                             $('#hidden_id_meds').val(($(this).val()));
                         });
                         $('#idMeds').change(
                         function(){
                             $('#hidden_id_meds').val(($(this).val()));
                         });
                         
                         $('#selComp').show(
                         function(){
                             $('#hidden_id_comps').val(($(this).val()));
                         });
                         $('#selComp').change(
                         function(){
                             $('#hidden_id_comps').val(($(this).val()));
                         });
                         $('#InsererMedCom').click(
                         function(){
                           InsererMedocCom();
                            
                         });

                         
                      
   
             } );
        </script>
    </head>
        <body>
 <section>
    <div class="container">
        <div id="MedComps">
        <h2 style="text-align: center;">Ajout de composants pour un medicament</h2>

        <hr>
            <h3>Choisissez un medicament</h3>
       
            <select class="form-control" id='idMeds'>
                <?php 
                    foreach ($lesMedicaments as $meds){
                        echo "<option name='lstMedes' value='".$meds->MED_DEPOTLEGAL."'>".$meds->MED_NOMCOMMERCIAL."</option>";
                    }
                ?>

            </select>
             <input type="hidden" name="hidden " id="hidden_id_meds" >
            <input type="hidden" name="hidden " id="hidden_id_comps" >
       <div>
           <div>

                
            <br>
            <div id='idComps'>
                <h3>Choisissez un composant</h3>
                        <select id="selComp" class="form-control">
                        <?php 
                                foreach ($lesComposants as $comps){
                                    echo "<option value='".$comps->CMP_CODE."'>".$comps->CMP_LIBELLE."</option>";
                                }
                            ?>
                        </select><br>
            <h3>CST Quantité</h3><input class="form-control" type="text" id="CST_QTE">
            </div>
            <input id="InsererMedCom" class="btn btn-info" type="button" value="Ajouter" style="margin-top: 20px;"><br>
        </div>
         
       </div>
            
   
        </div> 
    
    </div>
</section>
    </body>
</html>