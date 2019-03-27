'use strict';

require('bootstrap-table/dist/bootstrap-table.min.css');
require('../css/admin/tariff.css');

require('bootstrap-table');
require('bootstrap-table/dist/extensions/click-edit-row/bootstrap-table-click-edit-row.css');
require('bootstrap-table/dist/extensions/toolbar/bootstrap-table-toolbar.min.js');
require('bootstrap-table/dist/extensions/filter/bootstrap-table-filter.min.js');
require('bootstrap-table/dist/extensions/filter-control/bootstrap-table-filter-control.css');
require('bootstrap-table/dist/extensions/export/bootstrap-table-export.min.js');
require('tableexport.jquery.plugin');

$(document).ready(function () {
   $("button[name='toggle']").addClass('toggleIcon');
});