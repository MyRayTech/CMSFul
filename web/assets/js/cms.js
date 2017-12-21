var $ = require('jquery');
require('popper.js');
require('tether');
require('bootstrap');
require('lightbox2');
require('wowjs');
//require('kbw-datepick');

$(document).ready(function() {
    $('[data-toggle="popover"]').popover();
});
new WOW().init();
$('.datepicker').datepick({dateFormat: $.datepick.FULL});