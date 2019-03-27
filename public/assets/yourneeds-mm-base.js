'use strict';

require('./yourneeds-mm-base.scss');

var cssLink = document.createElement("link");
cssLink.href = "http://yneeds.de/build/yourneeds-mm-base.css";  
cssLink.rel = "stylesheet";  
cssLink.type = "text/css";  
frames['mrmoFrame'].document.body.appendChild(cssLink); 