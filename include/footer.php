<script>
    var url = window.location.pathname;
    var filename = url.substring(url.lastIndexOf('/')+1);
    if (filename.substr(0, 8) != 'akun-kas' ) {
    $('.sidebar-menu a[href*="'+ filename.substr(0, 11)  +'"]').addClass('active');
    } else {
    $('.sidebar-menu a[href*="'+ filename.substr(0, 8)  +'"]').addClass('active');
    }
</script>
