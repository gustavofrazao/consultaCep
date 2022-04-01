$(function() {
    $("#cep").mask('99999-999');
    $("#alert-warning").hide();

    $("#pesquisar").click(function(){

       var cep = $("#cep").val();

        if(cep.length < 9){

            $("#alert-warning").show();
            $("#msg-warning").html('')
            $("#msg-warning").append('Preencha o campo corretamente');
            $("#cep").focus();

       } else {

            $("#alert-warning").hide();

            $.ajax({
                url : "http://127.0.0.1:8000/api/returEndereco",
                type : 'post',
                data : {
                    cep : $("#cep").val()
                },
                
           }).done(function(data){
                if(data.length >=1){

                    

                } else {
                    $.get("https://viacep.com.br/ws/"+$("#cep").val().replace('-','')+"/xml/", function(resultado){
                        console.log(resultado)

                        $.ajax({
                            url : "http://127.0.0.1:8000/api/saveEndereco",
                            type : 'post',
                            data : {
                                cep : $("#cep").val()
                            },
                            
                       }).done(function(save){

                       })

                    }) 
                }
           });

       }

    });

});