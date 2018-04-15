<html>
    <head>
        <title>Gestion des presentations</title>
        <h1> Gestion des presentations  <a class="btn btn-primary" href='<?php echo base_url(); ?>'>Retourner à l'accueil</a></h1>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                <!-- Latest compiled and minified CSS -->
              <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
              <!-- Optional theme -->
              <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
              <!-- Latest compiled and minified JavaScript -->
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript" src="  <?php echo base_url(); ?>js/functions.js"></script>
                <script type="text/javascript" src="<?php echo base_url(); ?>JQuery/jquery-3.2.1.min.js"></script>
    </head>
     <body>
            <?php echo form_open('Ctrl_Composant/form_presentation');  ?>
            <h4><b>Veuillez saisir les informations de la présentation</b></h4>
            <br><label>Code: </label><input type="text" name="PRE_CODE" />
            <br><label>Libelle: </label><input type="text" name="PRE_LIBELLE" />

            <br><input type="submit" class="btn btn-info" name="subValider" value="Ajouter la presentation" >
                </td>
              
           <table class="table">
               <tr>
                   <th>Code</th>
                   <th>Libelle</th>
               </tr>
                <?php     
                    foreach($lesPresentations as $pres){
                ?>
               <tr>
                   <td><?php echo $pres->PRE_CODE;?></td>
                   <td><?php echo $pres->PRE_LIBELLE;?></td>
 
               </tr>
          <?php   
            }
           ?>  
               
       </table>
<?php echo form_close();  ?>
                    </thead>           
    </body>
</html> 