'use strict';

require('bootstrap');
require('popper.js');
const swal = require('sweetalert2');
const $ = require('jquery');
global.$ = $;
require('bootstrap/dist/css/bootstrap.min.css');
require('jquery.easing');
require('font-awesome/css/font-awesome.min.css');
require('../css/admin/admin-header.css');
require('../css/main.css');

/* TOOLTIP ===============================================*/
$(function () {
    $('[data-toggle="tooltip"]').tooltip({html: true})
})

function showViewport() {
    if (window.innerWidth !== undefined && window.innerHeight !== undefined) {
        var w = window.innerWidth;
        var h = window.innerHeight;
    } else {
        var w = document.documentElement.clientWidth;
        var h = document.documentElement.clientHeight;
    }
    var txt = "w=" + w + ", h=" + h;
    //document.getElementById("viewport").innerHTML = txt;
    console.log(txt);
}