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