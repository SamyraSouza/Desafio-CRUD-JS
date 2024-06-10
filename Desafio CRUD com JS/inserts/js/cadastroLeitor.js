$('#entrar').hide();
$('#entrou').hide();
$('#emprestados').hide();
$('#sistema').hide();
$('#contato').mask("(00)00000-0000");

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

$('#meus').submit(function(e){

    e.preventDefault();  
    
    console.log("foi");
    return;

});

