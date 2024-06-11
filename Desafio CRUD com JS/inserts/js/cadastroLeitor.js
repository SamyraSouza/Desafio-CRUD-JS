$('#entrar').hide();
$('#entrou').hide();
$('#emprestados').hide();
$('#disponiveis').hide();
$('#sistema').hide();
$('#contato').mask("(00)00000-0000");

//Entrar direto
$("#ent").click(function(e){

    e.preventDefault();

    $('#cadastro').hide();
    $('#entrar').show();
});

//Cadastrar direto
$("#cadas").click(function(e){

    e.preventDefault();

    $('#cadastro').show();
    $('#entrar').hide();
});


// validar email
$('#email').blur(function (e) { 
    e.preventDefault();

    var u_email = $('#email').val();

    $.ajax({ 
        url: 'checar.php',
        method: 'POST' ,
        data: {email: u_email},
        dataType:'json'

    }).done(function(result){

        if(result=='error'){
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Este email já existe!",         
              });

              $('#cad').hide();
              return;
        }   
        else{
        $('#cad').show();
    }
    });
});

// cadastrar leitor
$('#cadastro').submit(function(e){

    e.preventDefault();   
    
    var u_email = $('#email').val();
    var u_name = $('#nome').val();
    var u_tel = $('#contato').val();
    var u_senha = $('#senha').val();

    $.ajax({ 

        url: 'cadastrar.php',
        method: 'POST' ,
        data: {email: u_email, nome: u_name, contato: u_tel, senha: u_senha},
        dataType:'json'


}).done(function(result){

    $('#email').val('');
    $('#name').val('');
    $('#contato').val('');
    $('#senha').val('');

    if(result == 'success'){

        Swal.fire({
          position: "top-end",
          icon: "success",
          title: "Cadastro feito com sucesso",
          showConfirmButton: false,
          timer: 1500
        });

        $('#cadastro').hide();
        $('#entrar').show();
}

});
});

// entrar
$('#entrar').submit(function(e){
    e.preventDefault();  

    var u_email = $('#emailcheck').val();
    var u_senha = $('#senhacheck').val();

    $.ajax({ 

        url: 'entrar.php',
        method: 'POST' ,
        data: {email: u_email, senha: u_senha},
        dataType:'json'


}).done(function(result){

if(result == "error"){
    Swal.fire({
        position: "top-end",
        icon: "error",
        title: "Email ou senha inválidos",
        showConfirmButton: false,
        timer: 1500
      });
}
else{
 
    $('#sistema').show();
     $('#entrar').hide();
     $('#entrou').show();
}

});
});

//Página inicial
$("#pg").click(function(e){

    e.preventDefault();

    $('#emprestados').hide();
    $('#disponiveis').hide();
    $('#sistema').show();
});

// selecionar livros disponiveis
$("#livrosDispo").click(function(e){

    e.preventDefault();

    $.ajax({

        url: 'selecionardisp.php',
        method: 'GET' ,
        dataType:'json'

    }).done(function(result){
     
            if(result == "error"){
            '<td colspan="6"> Nenhum livro encontrado</td>';
        }

        else{

        for(var i = 0; i<result.length; i++){

            $('#dispo').prepend(
                '<tr> <td> <div class="d-flex text-center px-2 py-1"><div class="d-flex flex-column justify-content-center"> <h6 class="mb-0 text-center text-xs">'+result[i].ISBN+'</h6></td>'+
                '<td> <p class="text-xs font-weight-bold mb-0 text-center">'+result[i].titulo+'</p> </td> '+'<td> <p class="text-xs text-center font-weight-bold mb-0">'+result[i].Nomes+'</p> </td> '+
                '<td> <p class="text-xs text-center  font-weight-bold mb-0">'+result[i].dataPubli+'</p> </td>'
                +'<td> <p class="text-xs text-center font-weight-bold mb-0">'+result[i].Nome+'</p> </td><td> <p class="text-xs text-center  font-weight-bold mb-0">'+result[i].dataPubli+'</p> </td><td><div class="text-center"><button onclick="fazer( ISBN ='+"'"+result[i].ISBN+"'"+')" id="fazer" type="submit" class="btn btn-info">Fazer requerimento</button></div></td></tr>');
        }
}
                $('#emprestados').hide();
                $('#sistema').hide();
                $('#disponiveis').show();   
                               
    });
        });
  

// Fazer requerimento
function fazer(){

    var u_livro = ISBN;
    var u_email = $('#emailcheck').val();
    var id = '';

    // console.log(u_livro)
    // console.log(u_email)
    // return

    $.ajax({
        url: 'requerimento.php',
        method: 'POST' ,
        data: {livro: u_livro, pessoa: u_email, id: id},
        dataType:'json'

    }).done(function(result){

        if(result == "success"){
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "Livro requerido com sucesso",
                showConfirmButton: false,
                timer: 1500
              });
        }
    });
};


// selecionar livros emprestados
$("#livrosEmp").click(function(e){

    e.preventDefault();
    
    $.ajax({

        url: 'selecionar.php',
        method: 'GET' ,
        dataType:'json'

    }).done(function(result){
     
        if(result == "error"){
            '<td colspan="6"> Nenhum livro encontrado</td>';
        }
        else{
        for(var i = 0; i<result.length; i++){

            $('#empre').prepend(
                '<tr> <td> <div class="d-flex text-center px-2 py-1"><div class="d-flex flex-column justify-content-center"> <h6 class="mb-0 text-center text-xs">'+result[i].ISBN +'</h6></td>'+
                '<td> <p class="text-xs font-weight-bold mb-0 text-center">'+result[i].titulo+'</p> </td> '+'<td> <p class="text-xs text-center font-weight-bold mb-0">'+result[i].Nomes+'</p> </td> '+
                '<td> <p class="text-xs text-center  font-weight-bold mb-0">'+result[i].dataPubli+'</p> </td>'
                +'<td> <p class="text-xs text-center font-weight-bold mb-0">'+result[i].Nome+'</p> </td><td> <p class="text-xs text-center  font-weight-bold mb-0">'+result[i].dataPubli+'</p> </td></tr>');
                           
        }
}
                $('#emprestados').show();
                $('#disponiveis').hide();
                $('#sistema').hide();
    });
        });