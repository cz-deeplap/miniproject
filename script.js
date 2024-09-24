// script.js
$(document).ready(function() {
    // เปิด Control Sidebar
    $('body').on('click', '.control-sidebar-open', function () {
        $('.control-sidebar').addClass('control-sidebar-open');
    });

    // ปิด Control Sidebar
    $('body').on('click', '.control-sidebar-close', function () {
        $('.control-sidebar').removeClass('control-sidebar-open');
    });
});
