"use strict";

require("./yourneeds-manager.scss");

const $ = require("jquery");
global.$ = $;

require("../js/bootstrap-datepicker/js/bootstrap-datepicker.js");

$(document).ready(function() {
    $("input[type='date']").datepicker({
        format: "dd.mm.yyyy"
    });
});
