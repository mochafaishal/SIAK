<script>
    var url = window.location.pathname;
    var filename = url.substring(url.lastIndexOf('/')+1);
    $('.sidebar-menu a[href="'+ filename +'"]').addClass('active');
</script>
