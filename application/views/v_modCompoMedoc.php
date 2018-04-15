<html>
    <head>
        <title>Gestion des composants des medicaments</title>
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
;
                      $('#idMeds').click(
                              function(){
                                 $('.bg-info').show();
                                      
                              });
                     $('#idMeds').show(                         
                             function(){
                                $('#hidden_id_meds').val(($(this).val()));
                             ComposantMed();
                         });
                         $('#idMeds').change(
                         function(){
                            $('#hidden_id_meds').val(($(this).val()));
                             ComposantMed();
                         });
                         
                         $('#selComp').change(
                         function(){
                             $('#hidden_id_comps').val(($(this).val()));
                             QuantiteMedCom();
                         });
                         $('#btnValidCom').click(
                         function(){
                           ModifMedCom();
                            
                         });
                         
                        $('#idMeds').show(
                        function(){
                            AfficherComposantMeds($(this).val());
                        });
                         $('#idMeds').change(
                         function(){
                             AfficherComposantMeds($(this).val());
                         });
                         
                      
   
             } );
        </script>
    </head>
        <body>

    <div class="container">
        <div id="Aj">
        <h2>Modifier les composants d'un medicament</h2>
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
            <br>
            <div id='idComps'>
                <h3>Choisissez les composants</h3>
                <div id="chComps">
                        <select id="selComp" class="form-control">
                        <?php 
                                foreach ($lesComposants as $comps){
                                    echo "<option value='".$comps->CMP_CODE."'>".$comps->CMP_LIBELLE."</option>";
                                }
                            ?>
                        </select>
                </div><br>
                <h3>Modifier la quantité</h3>
                        <label>CST Quantité</label><div id="inpQte"><input class="form-control" type="text" id="CST_QTE"></div>
            </div>
            <input id="btnValidCom" class="btn btn-info" type="button"  value="Modifier" style="margin-top: 20px;"><br>
        </div>
          
       </div>
            
     </div>

</html>