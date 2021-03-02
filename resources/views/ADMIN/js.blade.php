<script type="text/javascript">
/*!
    * Start Bootstrap - SB Admin v6.0.1 (https://startbootstrap.com/templates/sb-admin)
    * Copyright 2013-2020 Start Bootstrap
    * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-sb-admin/blob/master/LICENSE)
    */
    (function($) {
    "use strict";

    // Add active state to sidbar nav links
    var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
        $("#layoutSidenav_nav .sb-sidenav a.nav-link").each(function() {
            if (this.href === path) {
                $(this).addClass("active");
            }
        });

    // Toggle the side navigation
    $("#sidebarToggle").on("click", function(e) {
        e.preventDefault();
        $("body").toggleClass("sb-sidenav-toggled");
    });
})(jQuery);


    function reload() {
        location.reload(true);
    }

</script>

{{-- MyJs --}}
<script type="text/javascript">
$(document).on("click", ".browse", function() {
  var file = $(this)
    .parent()
    .parent()
    .parent()
    .find(".file");
  file.trigger("click");
});
$(document).on("change", ".file", function() {
  $(this)
    .parent()
    .find(".form-control")
    .val(
      $(this)
        .val()
        .replace(/C:\\fakepath\\/i, "hinh_upload/")
    );
});

</script>