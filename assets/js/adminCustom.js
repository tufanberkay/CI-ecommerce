

$(function () {
    $(document).ready(function () {
       $('.delcat').click(function () {
           if(confirm("Silmek istediğine emin misin?")){
               var id = $(this).data('id');
               var text = $(this).data('text');
               $.ajax({
                   type : 'POST',
                   url: surl+'admin/deleteCategory',
                   data: {
                       id:id,
                       text:text
                   },
                   success:function (data) {
                       var ndata = JSON.parse(data);
                       if(ndata.return == true) {
                           $('.error').text(ndata.message);
                           $('.ccat'+id).fadeOut();
                       }
                       else if(ndata.return == false) {
                           $('.error').text(ndata.message);
                       }else {
                           $('.error').text('Bir şeyler yanlış gitti.');
                       }
                   },
                   error:function () {
                   }
               });
           }
       });
       $('.delproduct').click(function () {
            if(confirm("Silmek istediğine emin misin?")){
                var id = $(this).data('id');
                var text = $(this).data('text');
                $.ajax({
                    type : 'POST',
                    url: surl+'admin/deleteProduct',
                    data: {
                        id:id,
                        text:text
                    },
                    success:function (data) {
                        var ndata = JSON.parse(data);
                        if(ndata.return == true) {
                            $('.error').text(ndata.message);
                            $('.pcat'+id).fadeOut();
                        }
                        else if(ndata.return == false) {
                            $('.error').text(ndata.message);
                        }else {
                            $('.error').text('Bir şeyler yanlış gitti.');
                        }
                    },
                    error:function () {
                    }
                });
            }
        });
    });

})
