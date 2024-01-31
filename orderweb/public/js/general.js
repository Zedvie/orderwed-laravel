$(document).ready(function(){
    $('#table_data').DataTable();
});

function remove()
{
    if(confirm("¿Esta seguro de eliminar el reguistro?"))
    return true;
    else
    return false;
}