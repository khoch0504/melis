$(function(){
    $("body").on("click", ".btnAddTestAgainnn", function(){
        modalUrl = '/melis/MelisCore/MelisGenericModal/emptyGenericModal';
        melisHelper.createModal("id_testagainnn_modal", "testagainnn_modal", false, {}, modalUrl);
    });

    $("body").on("click", ".btnSaveTestAgainnn", function(){
        var btn = $(this);
        var id = $(this).data("id");
        submitForm($("form#testAgainnnForm"), id, btn);
    });

    var submitForm  = function(form, id, btn){

        form.unbind("submit");

        form.on("submit", function(e) {

            e.preventDefault();

            btn.attr('disabled', true);

            var formData = new FormData(this);

            formData.append('cal_id', id);



            $.ajax({
                type: 'POST',
                url: '/melis/TestAgainnn/Properties/save',
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
            }).done(function (data) {
                if(data.success){
                    // Notifications
                    melisHelper.melisOkNotification(data.textTitle, data.textMessage);

                    $("#id_testagainnn_modal_container").modal("hide");
                    melisHelper.zoneReload("id_testagainnn_content", "testagainnn_content");
                }else{
                    melisHelper.melisKoNotification(data.textTitle, data.textMessage, data.errors);
                    melisHelper.highlightMultiErrors(data.success, data.errors, "#id_testagainnn_modal");
                }

                btn.attr('disabled', false);
            }).fail(function () {
                alert(translations.tr_meliscore_error_message);
            });
        });

        form.submit();
    };

    $("body").on("click", ".btnEditTestAgainnn", function(){
        var id = $(this).parents("tr").attr("id");
        var modalUrl = '/melis/MelisCore/MelisGenericModal/emptyGenericModal';
        melisHelper.createModal("id_testagainnn_modal", "testagainnn_modal", false, {id : id}, modalUrl);
    });

    $("body").on("click", ".btnDeleteTestAgainnn", function(){
        var id = $(this).parents("tr").attr("id");

        melisCoreTool.confirm(
            translations.tr_testagainnn_common_button_yes,
            translations.tr_testagainnn_common_button_no,
            translations.tr_testagainnn_delete_title,
            translations.tr_testagainnn_delete_confirm_msg,
            function(data) {
                $.ajax({
                    type        : 'GET',
                    url         : '/melis/TestAgainnn/List/deleteItem?id='+id,
                    dataType    : 'json',
                    encode		: true,
                    success		: function(data){
                        // refresh the table after deleting an item
                        melisHelper.zoneReload("id_testagainnn_content", "testagainnn_content");

                        // Notifications
                        melisHelper.melisOkNotification(data.textTitle, data.textMessage);

                        
                    }
                });
            });
    });
});