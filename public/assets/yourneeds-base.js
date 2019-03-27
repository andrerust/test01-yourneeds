"use strict";

require("bootstrap/js/dist/util.js");
require("popper.js/dist/popper.min.js");
require("bootstrap/dist/js/bootstrap.bundle.min.js");
require("bootstrap-validator/dist/validator.min.js");
require("bootstrap/dist/js/bootstrap.min.js");

const $ = require("jquery");
global.$ = $;

require("bootstrap/dist/css/bootstrap.min.css");
require("./yourneeds-base.scss");

/**
 * The side menu
 */
var $colMenu;
var $colMenu;

/**
 * If the side menu is opened dynamically
 * @type {boolean}
 */
var menuOpenedDynamic = false;

/**
 * The menu timeout
 */
var toggleMenuTimeout;

/**
 * Toggles the with of the left main menu
 */
function toggleMenu() {
    $colMenu.toggleClass("col-menu--small");

    $colMenu
        .find("[data-yn-toggle-col-menu]")
        .find(".fas")
        .toggleClass("fa-angle-right fa-angle-left");

    $("[data-yn-toggle-logo]", $colMenu).toggleClass("d-none");
    $("[data-yn-toggle-class]", $colMenu).each(function() {
        var value = $(this).attr("data-yn-toggle-class");
        $(this).toggleClass(value);
    });
}

/**
 * Displays the menu if it is currently small
 */
function showMenu() {
    if ($colMenu.hasClass("col-menu--small")) {
        toggleMenu();
        menuOpenedDynamic = true;
    }
}

/**
 * Initializes all dom related functions
 */
function init() {
    $colMenu = $(".col-menu");

    $("[data-yn-toggle]").click(function() { 
        var value = $(this).attr("data-yn-toggle");
        $(value).toggleClass("d-none");
    });

    $("[data-yn-toggle-mobilemenu]").click(function() { 
        $("[data-yn-mobilemenu]").toggleClass("open");
    });

    $("[data-yn-toggle-col-menu]").click(function() {
        toggleMenu();
    });

    $("[data-toggle='info']").popover({
        animation: true,
        delay: {
            "show": 0,
            "hide": 0
        },
        html: true    
    });
    
    $("[data-yn-toggle-radio] input").change(function() { 
        var name = $(this).attr("name");
        
        $("input[name='" + name + "']")
            .parents("[data-yn-toggle-radio]")
            .removeClass("btn--cta");
        
        $(this)
            .parents("[data-yn-toggle-radio]")
            .addClass("btn--cta");
    });

    $("[data-yn-toggle-radio] input:checked")
        .parents("[data-yn-toggle-radio]")
        .addClass("btn--cta");

    /**
     * Toggles the menu with when the mouse hovers
     */
    $colMenu.hover(
        function() {
            clearTimeout(toggleMenuTimeout);
            toggleMenuTimeout = setTimeout(
                function() {
                    showMenu();
                },
                0
            );
        },
        function() {
            clearTimeout(toggleMenuTimeout);
            toggleMenuTimeout = setTimeout(
                function() {
                    if (menuOpenedDynamic === true) {
                        toggleMenu();
                        menuOpenedDynamic = false;
                    }
                },
                0
            );
        }
    );
}
/**
 * Waits for the DOM to be ready
 */
$(document).ready(function() {
    init();
});

