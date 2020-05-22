//Cadastrar Ticket
$(document).ready(function(){  
    $('#formNew').submit(function(e){
        e.preventDefault();
        
        $.ajax({
            url: '../inc/insert.php',
            method: 'POST',
            data: $(this).serialize(),
            success:function(data){
                $("#modalNewTicket").modal('hide');
                $("#msg").html(data);
                $("#lista_tickets").load('../inc/tickets.php');
                $('#formNew')[0].reset();
            }
        });
    });
}); 

//Editar Ticket
$(document).ready(function(){  
    $('#formEditTicket').submit(function(e){
        e.preventDefault();
        
        $.ajax({
            url: '../inc/editar.php',
            method: 'POST',
            data: $(this).serialize(),
            success:function(data){
                $("#modalEditTicket").modal('hide');
                $("#msg").html(data);
                $("#lista_tickets").load('../inc/tickets.php')
            }
        });
    });
}); 

//Função para abrir modal de editar
function editarTicket(idEdit){    
    $("#modalEditarTicket").load('../inc/modalEditTicket.php?id='+idEdit);
}

//Deletar Ticket
$(document).ready(function(){  
    $('#formDelete').submit(function(e){
        e.preventDefault();
        
        $.ajax({
            url: '../inc/delete.php',
            method: 'POST',
            data: $(this).serialize(),
            success:function(data){
                $("#modalDelTicket").modal('hide');
                $("#msg").html(data);
                $("#lista_tickets").load('../inc/tickets.php')
            }
        });
    });
}); 

//Função para confirmar delete
function deleteTicket(idDelete){    
    $("#id_delete").val(idDelete);
}

//Iniciar datatables versão Free
$(document).ready(function(){  
    $('#table-tickets').DataTable( {
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.21/i18n/Portuguese-Brasil.json"
        }
    });
}); 

// Desativar envios de formulários se houver campos inválidos
(function () {
    'use strict';
    window.addEventListener('load', function () {
        // Obtenha os formulários aos quais queremos adicionar estilos de validação
        var forms = document.getElementsByClassName('formLogin');
        // Faça a varredura dos campos e impeça o envio
        var validation = Array.prototype.filter.call(forms, function (form) {
            form.addEventListener('submit', function (event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();