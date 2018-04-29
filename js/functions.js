function InsererMedocCom()
{
    alert("MEDOC = "+$('#hidden_id_meds').val());
    alert("COMP = "+$('#hidden_id_comps').val());
    $.ajax(
    {
        type:"post",
        url:"insererComposantMedoc",
        data:"medicament="+$('#hidden_id_meds').val()+"&composant="+$('#hidden_id_comps').val()+"&quantite="+$('#CST_QTE').val(),
        success:function(data)
        {
           $('#MedComps').empty();
            $('#MedComps').append(data);
        },
        error:function()
        {
            alert("ca marche pas");
        }
    }
    );
}
function AfficherComposantMeds(idMedicament)
{
    $.ajax(
    {
        type:"get",
        url:"afficherComposantMeds",
        data:"idMedicament="+idMedicament,
        success:function(data)
        {
           $('#divComps').empty();
            $('#divComps').append(data);
        },
        error:function()
        {
            alert('Erreur SQL');
        }
    }
    );
}
function QuantiteMedCom()
{
    $.ajax(
    {
        type:"post",
        url:"quantiteComposantMedoc",
        data:"medicament="+$('#hidden_id_meds').val()+"&composant="+$('#hidden_id_comps').val()+"&quantite="+$('#CST_QTE').val(),
        success:function(data){
        
           $('#inpQte').empty();
            $('#inpQte').append(data);
        },
        error:function()
        {
            alert('Error');
        }
    });
    
}
function ComposantMed()
{
    $.ajax(
    {
        type:"post",
        url:"composantMedoc",
        data:"medicament="+$('#hidden_id_meds').val(),
        success:function(data){
        
           $('#selComp').empty();
            $('#selComp').append(data);
        },
        error:function()
        {
            alert('Error');
        }
    });
    
}
function ModifMedCom()
{
    $.ajax(
    {
        type:"post",
        url:"modifComposantMedoc",
        data:"medicament="+$('#hidden_id_meds').val()+"&composant="+$('#hidden_id_comps').val()+"&quantite="+$('#CST_QTE').val(),
        success:function(data)
        { 

           $('#Aj').empty();
            $('#Aj').append(data);
        },
        error:function()
        {
            alert('Error');
        }
    }
    );
}
function AjoutFormulationMedoc()
{
    $.ajax(
    {
        type:"post",
        url:"AjouteFormulationMedoc",
        data:"idMedicament="+$('#idMeds').val()+"&idPresentation="+$('#idPres').val(),
        success:function(data)
        {
           $('#AJ').empty();
            $('#AJ').append(data);
        },
        error:function()
        {
          alert('Error');
        }
    }
    );
}