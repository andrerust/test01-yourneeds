'use strict';

require('bootstrap-table/dist/bootstrap-table.min.css');
require('bootstrap-table/dist/extensions/click-edit-row/bootstrap-table-click-edit-row.css');
require('bootstrap-table/dist/extensions/filter-control/bootstrap-table-filter-control.css');
require('../css/admin/dashboard.css');
require('bootstrap-table');
require('chart.js');
require('../js/dashboard/chart-utils.js');
require('../js/dashboard/chart-definition.js');

/*
 add charts to page
 */
var $table = $('#table-activities'),
   full_screen = false;
$(document).ready(function () {
   $table.bootstrapTable({
      toolbar: "#toolbar",
      showRefresh: true,
      search: true,
      showToggle: true,
      showColumns: true,
      pagination: true,
      striped: true,
      pageSize: 10,
      pageList: [8, 10, 25, 50, 100],

      formatShowingRows: function (pageFrom, pageTo, totalRows) {
         //do nothing here, we don't want to show the text "showing x of y from..."
      },
      formatRecordsPerPage: function (pageNumber) {
         return pageNumber + " rows visible";
      },
      icons: {
         refresh: 'fa fa-refresh',
         toggle: 'fa fa-th-list',
         columns: 'fa fa-columns',
         detailOpen: 'fa fa-plus-circle',
         detailClose: 'fa fa-minus-circle'
      }
   });

   $(window).resize(function () {
      $table.bootstrapTable('resetView');
   });
});
$(function () {
   if (!sessionStorage.getItem("modalFirst")) {
      // show the modal onload
      $('#modal-content').modal({
         show: true
      });
   }

   $('#modal-content').on('hide.bs.modal', function (e) {
      sessionStorage.setItem("modalFirst", "1");
   })

});

function destroySession() {
   sessionStorage.removeItem('modalFirst');
}