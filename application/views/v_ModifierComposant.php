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

           <table class="table">
               <tr>
                   <th>Code</th>
                   <th>Libelle</th>
               </tr>
                <?php     
                    foreach($lesComposants as $com){
                ?>
               <tr>
                   <td><?php echo $com->CMP_CODE;?></td>
                   <td><?php echo $com->CMP_LIBELLE;?></td>
                   <td><input type="button" class="btn btn-info" name="subValider" value="Choisir" onclick="location.href='<?php echo base_url(); ?>index.php/Ctrl_Composant/modComposant/<?php echo $com->CMP_CODE; ?>'"/>              

               </tr>
          <?php   
            }
           ?>  
       </table>
<?php echo form_close();  ?>
                    </thead>            
    </body>
</html>