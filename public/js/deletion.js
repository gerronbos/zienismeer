$.fn.prettydeletion = function(params){
    $(this).click(function(){
        var modal = createConfirmBox();
    })

 
    function createConfirmBox(){
        if(getParam("password")){
            var attributes = {
                title:getParam("title"),
                text:getParam("text"),
                icon:getParam("icon"),
                dangerMode:getParam("dangerMode"),
                buttons:getParam("buttons"),
                content: {
                    element: "input",
                    attributes: {
                        placeholder: "Vul wachtwoord in voor verificatie",
                        type: "password",
                    },
                }
            }
        }
        else{
            var attributes = {
                title:getParam("title"),
                text:getParam("text"),
                icon:getParam("icon"),
                dangerMode:getParam("dangerMode"),
                buttons:getParam("buttons"),
            }
        }

        return swal(attributes)
        .then((value) => {
            if(value){
                if (typeof value === 'string' || value instanceof String){
                    $.get("/local_api/authenticate/checkPassword",{password:value},function(status){
                        if(status){
                            submitDelete()
                        }
                        else{
                            swal("Wachtwoord onjuist!");
                        }
                    }); 
                }
                else{
                    submitDelete();
                }
            }
        });
        
    }

    function submitDelete(){
        var form = document.createElement("form");
        form.action = params["url"];
        form.method = "POST";

        var csrf = document.createElement("input");
        csrf.type = "hidden";
        csrf.name = "_token";
        csrf.value = params["csrf_token"];

        form.appendChild(csrf);
        

        $("body").append(form);
        form.submit();
    }

    function getParam(item){
        if(params[item] != undefined){
            return params[item];
        }
        else{
            var standard_params = {
                title: "Pas op",
                text : "Weet u zeker dat u dit item wilt verwijderen?",
                icon : "warning",
                dangerMode: true,
                password: false,
                buttons : {
                        cancel : {
                        text: "Annuleren",
                        value:  null,
                        visible: true,
                        closeModal: true,
                    },
                    confirm : {
                        text : "Verwijder",
                        value : true,
                        visible: true,
                        closeModal: true,
                    }
                }
            }

            return standard_params[item];
        }
    }
}
