    starts();
    function starts () {
        $(document).ready(function () {

            $('form#form-add-board').submit(function (e) {
                let username , useremail , usertopic ,userdetails;
                e.preventDefault();
                username = $('input#name').val(); usertopic = $('input#topic').val();
                useremail = $('input#email').val(); userdetails = $('textarea#details').val();

                    $.ajax({
                        url: '../modules/insert-into-form.php' , type: 'POST' , dataType: 'json' ,
                        data: {  username:username , usertopic:usertopic , useremail:useremail , userdetails:userdetails   } ,
                        success:function (info) {

                            if(info.results == true) {
                                $('#result-insert').html(info.alerts);
                                $('button#send').hide(1000);
                                click_reset();
                                $('#go-to-view-board').html(info.view_board);
                            }
                            else if (info.results == false) {
                                $('#result-insert').html(info.alerts);
                            }
                        } // end func success
                    }); // end ajax
            });
        });

        function click_reset() { $('button#reset').click(function (){ $('button#send').show(1000); }); }
    }
