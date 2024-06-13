function fornecerLivros(){ 
    $.ajax({

        url: 'selecionar.php',
        method: 'GET' ,
        dataType:'json'

    }).done(function(result){
     
        for(var i = 0; i<result.length; i++){

            $('#emprestados').prepend(
                '<tr> <td> <div class="d-flex text-center px-2 py-1"><div class="d-flex flex-column justify-content-center"> <h6 class="mb-0 text-center text-xs">'+result[i].ISBN +'</h6></td>'+
                '<td> <p class="text-xs font-weight-bold mb-0 text-center">'+result[i].titulo+'</p> </td> '+'<td> <p class="text-xs text-center font-weight-bold mb-0">'+result[i].Nomes+'</p> </td> '+
                '<td> <p class="text-xs text-center  font-weight-bold mb-0">'+result[i].dataPubli+'</p> </td>'
                +'<td> <p class="text-xs text-center font-weight-bold mb-0">'+result[i].Nome+'</p> </td><td><div id="requerimento"><button type="button" class="btn btn-info">Fazer requerimento</button></div></td></tr>');
           
        }
    });
};
fornecerLivros();