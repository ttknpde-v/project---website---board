    starts();
    function starts() {

        $(document).ready(function () {
            add_answer ();
            load_answer ();
        });

        function load_answer () {
            var hidden;
            hidden = $('#hidden').val();
            $.ajax({
                url: '../modules/load_answer.php', type: 'POST', dataType: 'json',
                data: { userhidden:hidden } ,
                success: function (info) {
                    if(info.length != 0) {
                        $('#display-answer').html(info);
                    }
                }
            });
        }

        function add_answer () {
                $('#form-add-answer-board').submit(function (e) {
                    var name, email, details , hidden;
                    e.preventDefault();
                    name = $('input#name').val(); email = $('input#email').val(); details = $('textarea#details').val(); hidden = $('input#hidden').val();
                    $.ajax({
                        url: '../modules/select_answers_table.php', type: 'POST', dataType: 'json',
                        data: {username:name , useremail:email , userdetails: details , userhidden:hidden } ,
                        success: function (info) {

                            if(info.result == true) {
                                $('#result-insert-answer').html(info.alert);
                                $('#send').hide(2000);
                                show_send();

                            }
                            else {
                                $('#result-insert-answer').html(info.alert);
                            }
                        }

                    });
                });
        }
        function show_send() {
            $('#reset').click(function () {
                $('#send').show(2000);
            });
        }

    }