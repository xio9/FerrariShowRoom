

$(function() { 
    

    $('#Signup-small').click( function(){
        if ($('#checkLog').val() == 1) {
            $('#checkLog').val(0); 
        $('#Signup-small').html("Вход"); 
        $('#Login-small').html("Регистрация"); 
        $('#fio').css('display', 'block');
        $('.modal-title').html("Регистрация");
        }
        else {
        $('#checkLog').val(1); 
        $('#Signup-small').html("Регистрация"); 
        $('#Login-small').html("Вход"); 
        $('#fio').css('display', 'none');
        $('.modal-title').html("Вход"); 
        }
    });
    $('#exampleModal3').on('hidden.bs.modal', function () {
    
      })


     
});




$('#answer').click(function(){

    $("#work-name").val($("#from").html());

});

$('.fullAll').click(function(){
    
    var fullAll = $(this).attr('data-btn-id');

    $.ajax({
        url: 'actions.php?action=showAll',
        type: 'POST',
        cache: 'false',
        data: {'fullAll': fullAll},
        dataType: 'html',
        beforeSend: function() {
        },
        success: function(data) {
           
            if (data) {
              $('#showAll').html(data);
            }
            else {
              
            }
        }
        })

});
$("#delBtn").click(function() {
   
    
    $.ajax({
        url: 'actions.php?action=delete',
        type: 'POST',
        cache: 'false',
        data: {},
        dataType: 'html',
        beforeSend: function() {
        },
        success: function(data) {
            if (data) {
                alert(data);
            }
            else {
                window.location.href = 'http://localhost/public_html/?page=about.php';
            }
        }
        })
    });

    function del2(idDel) {
       
        $.ajax({
            url: 'actions.php?action=delete2',
            type: 'POST',
            cache: 'false',
            data: {'idDel' : idDel.id},
            dataType: 'html',
            beforeSend: function() {
            },
            success: function(data) {
                if (data) {
                    alert(data);
                }
                else {
                    window.location.href = 'http://localhost/public_html/?page=about.php';
                }
            }
            })
    };

  
       

        

$("#saveBtn").click(function() {
   
    var datetime = $("#date-time1").val();
    var work = $("#work-name1").val();
    var msg = $('#message-text1').val(); 
    var saveID = $('.saveID').val(); 

$.ajax({
    url: 'actions.php?action=save',
    type: 'POST',
    cache: 'false',
    data: {'work': work, 'msg': msg, 'datetime' : datetime, 'saveID' : saveID},
    dataType: 'html',
    beforeSend: function() {
    },
    success: function(data) {
        if (data) {
            alert(data);
        }
        else {
            window.location.href = 'http://localhost/public_html/?page=about.php';
        }
    }
    })
});

$('.fullSend').click(function(){
    
    var fullSend = $(this).attr('data-btn-id');

    $.ajax({
        url: 'actions.php?action=showSend',
        type: 'POST',
        cache: 'false',
        data: {'fullSend': fullSend},
        dataType: 'html',
        beforeSend: function() {
        },
        success: function(data) {
           
            if (data) {
              $('#showSend').html(data);
            }
            else {
              
            }
        }
        })

});












$("#sendMail").click(function(e) {
    e.preventDefault();
var datetime = $("#date-time").val().replace('T', ' ');
var work = $("#work-name").val();
var msg = $('#message-text').val(); 
var error = [];
if (work == "") {
    error.push('Вы не выбрали вид работ');
}
if (datetime == "") {
    error.push('Вы не выбрали время');
}
if (error != '') {
    alert(error.join('\n'));
    return false;
}  
$.ajax({
    url: 'actions.php?action=send',
    type: 'POST',
    cache: 'false',
    data: {'work': work, 'msg': msg, 'datetime' : datetime},
    dataType: 'html',
    beforeSend: function() {
    },
    success: function(data) {
        if (data) {
            alert(data);
        }
        else {
            window.location.href = 'http://localhost/public_html/?page=about.php';
        }
    }
    })
});





    $("#Login-small").click(function(e) {
        e.preventDefault();
    var email = $("#exampleInputEmail1").val();
    var fio = $("#exampleInputFio1").val();
    var password = $("#exampleInputPassword1").val();
    var checkLog = $('#checkLog').val(); 
    var error = [];
    var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
    !pattern.test(email)
    if (email == "") {
        error.push('Введите почту ');
    }
    if (!pattern.test(email)) {
        error.push('Введите корректную почту ');
    }
    if (password == "") {
        error.push('Введите пароль ');
    }
    if (error != '') {
        alert(error.join('\n'));
        return false;
    }  

    $.ajax({
        url: 'actions.php?action=login',
        type: 'POST',
        cache: 'false',
        data: {'email': email, 'password': password, 'checkLog': checkLog, 'fio' : fio},
        dataType: 'html',
        beforeSend: function() {
        },
        success: function(data) {
           
            if (data) {
                alert(data);
            }
            else {
                window.location.href = 'http://localhost/public_html/?page=about.php';
            }
        }
        })
});