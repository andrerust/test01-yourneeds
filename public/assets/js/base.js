'use strict';

require('js-cookie');

function destroySession() {
   sessionStorage.removeItem('modalFirst');
}

/* ANIMATED DECISION MENU ===============================================*/
$(document).ready(function () {

   setTimeout(function () {
      $(".manager-box").addClass("animate-menu")
   }, 0);
   setTimeout(function () {
      $(".manager-box .sub-text").addClass("animate-sub-text")
   }, 1000);
   setTimeout(function () {
      $(".manager-box .link-button").addClass("animate-link-button")
   }, 1500);
   setTimeout(function () {
      $(".manager-box .main-text").addClass("animate-main-text")
   }, 2000);
   setTimeout(function () {
      $(".manager-box hr").addClass("animate-hr")
   }, 2000);
   setTimeout(function () {
      $(".calculator-box").addClass("animate-menu")
   }, 1500);
   setTimeout(function () {
      $(".calculator-box .sub-text").addClass("animate-sub-text")
   }, 2000);
   setTimeout(function () {
      $(".calculator-box .main-text").addClass("animate-main-text")
   }, 2500);
   setTimeout(function () {
      $(".calculator-box .link-button").addClass("animate-link-button")
   }, 3000);
   setTimeout(function () {
      $(".calculator-box hr").addClass("animate-hr")
   }, 2500);
   setTimeout(function () {
      $(".customerprotection-box").addClass("animate-menu")
   }, 3000);
   setTimeout(function () {
      $(".customerprotection-box .sub-text").addClass("animate-sub-text")
   }, 3500);
   setTimeout(function () {
      $(".customerprotection-box .main-text").addClass("animate-main-text")
   }, 4000);
   setTimeout(function () {
      $(".customerprotection-box .link-button").addClass("animate-link-button")
   }, 3500);
   setTimeout(function () {
      $(".customerprotection-box hr").addClass("animate-hr")
   }, 4000);
   setTimeout(function () {
      $(".nav-mainmenu li a").addClass("animate-links")
   }, 7500);

   $("nav.tabs li a").click(function () {
      $(" nav.tabs li .active").removeClass("active");
      $(this).addClass("active");

   });

   $("#admin-header nav li a").click(function () {
      $("#admin-header nav li .active").removeClass("active");
      $(this).addClass("active");
   });

});

