function InsererMedocCom()
{
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