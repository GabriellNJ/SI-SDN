<script>
$(document).ready(function() {
    $('#captcha_refreshs').click(function(e) {
        $.ajax({
                url: '<?= base_url() ?>login/captcha_refresh',
                type: 'GET',
                dataType: 'JSON'
            })
            .then(res => {
                $('#captcha_image').html(res.captcha);
            })
    })

    $('#login_form').submit(function(e) {
        e.preventDefault();
        let data = new FormData(this);
        data.append(csrf.token_name, csrf.hash);

        $.ajax({
                url: '<?= base_url() ?>login/auth_login',
                type: 'POST',
                dataType: 'JSON',
                processData: false,
                contentType: false,
                data: data
            })
            .then(res => {
                csrf.token_name = res.csrf.token_name;
                csrf.hash = res.csrf.hash;
                if (res.status == 'success') {
                    let m =
                        '<div class="alert alert-success">Anda berhasil login dan akan dialihkan dalam <span></span> detik...</div>';
                    $('#login_alert').html(m);
                    let i = 3;
                    setInterval(() => {
                        if (i >= 0) {
                            $('#login_alert span').html(i);
                            i--;
                        } else {
                            window.location = res.link;
                        }
                    }, 1000)
                } else {
                    $('#login_form').trigger('reset');
                    $('#captcha_image').html(res.captcha);
                    let m = '<div class="alert alert-danger">' + res.message + '</div>';
                    $('#login_alert').html(m);
                }
            })
    })
})
</script>