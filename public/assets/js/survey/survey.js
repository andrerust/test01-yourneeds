/*
 function loadJSON(callback) {
 var xobj = new XMLHttpRequest();
 xobj.overrideMimeType("application/json");
 xobj.open('GET', '/survey_data/survey_pli.json', true); // Replace 'my_data' with the path to your file
 xobj.onreadystatechange = function () {
 if (xobj.readyState == 4 && xobj.status == "200") {
 // Required use of an anonymous callback as .open will NOT return a value but simply returns undefined in asynchronous mode
 callback(xobj.responseText);
 }
 };
 xobj.send(null);
 }
 */
handleSpinner = function (elem, preloader, $time) {
   doSpinner = function (elem, preloader) {
      $(preloader).show();
      console.log("handleSpinnerBox e:" + elem + " _ p:" + preloader + " successful");
      $("#survey-spinner").addClass("visible");
      $("#survey-proceed-title").addClass("visible");
      setTimeout(function () {
         $("#survey-proceed-title").removeClass("visible");
         $("#survey-spinner").removeClass("visible");
         $("#survey-proceed-button").addClass("visible");
      }, ($time * 1000));
   }
   doSpinner(elem, preloader);
}

function init2() {
   Survey
      .StylesManager
      .applyTheme("orange");
   Survey.defaultBootstrapCss.navigationButton = "btn btn-default";
   Survey.defaultBootstrapCss.matrixdynamic.button = "btn btn-default";
   Survey.defaultBootstrapCss.matrixdynamic.button.value = "btn btn-default";
   survey = new Survey.Model(structure);
   survey
      .onComplete
      .add(function (survey, options) {
         //save the data on survey complete. You may call another function to store the final results
         handleSpinner('#survey-proceed-button', '#survey-proceed-spinner', 3);
      });
   survey
      .onComplete
      .add(function (result) {
         document
            .querySelector('#surveyResult')
            .innerHTML = "Resultat der Formulareingabe in JSON: " + JSON.stringify(result.data) + "</p>";
         var element = $('#surveyFollow');
         element.addClass('visible')
      });
   survey
      .onComplete
      .add(function (result) {
         console.log(result.data);
         tmpResult = result.data;
         saveSurvey(tmpResult);
      });
   /*
    loadJSON(function (response) {
    Survey.defaultBootstrapCss.navigationButton = "btn btn-default";
    Survey.defaultBootstrapCss.matrixdynamic.button = "btn btn-default";
    Survey.defaultBootstrapCss.matrixdynamic.button.value = "btn btn-default";
    //Survey.Survey.cssType = "bootstrap";
    Survey
    .StylesManager
    .applyTheme("orange");
    survey = new Survey.Model(response);

    survey
    .onComplete
    .add(function (result) {
    document
    .querySelector('#surveyResult')
    .innerHTML = "Resultat der Formulareingabe in JSON: " + JSON.stringify(result.data) + "</p>";
    var element = $('#surveyFollow');
    element.addClass('visible')
    });

    var storageName = "SurveyJS_LoadState";
    var timerId = 0;

    function loadState(survey) {
    //Here should be the code to load the data from your database
    var storageSt = window
    .localStorage
    .getItem(storageName) || "";

    var res = {};
    if (storageSt)
    res = JSON.parse(storageSt); //Create the survey state for the demo. This line should be deleted in the real app.
    else
    res = {
    currentPageNo: 1,
    data: {
    "satisfaction": "4",
    "Quality": {
    "does what it claims": "1"
    },
    "recommend friends": "3",
    "price to competitors": "More expensive",
    "price": "correct",
    "pricelimit": {
    "mostamount": ""
    }
    }
    };

    //Set the loaded data into the survey.
    if (res.currentPageNo)
    survey.currentPageNo = res.currentPageNo;
    if (res.data)
    survey.data = res.data;
    }

    function saveState(survey) {
    var res = {
    currentPageNo: survey.currentPageNo,
    data: survey.data
    };

    //alert("saved: " + survey.currentPageNo);
    //Here should be the code to save the data into your database
    window
    .localStorage
    .setItem(storageName, JSON.stringify(res));
    }

    survey
    .onCurrentPageChanged
    .add(function (survey, options) {
    saveState(survey);
    //handleSpinner('#survey-proceed-button', '#survey-proceed-spinner', 1);
    });
    survey
    .onComplete
    .add(function (survey, options) {
    //kill the timer
    clearInterval(timerId);
    //save the data on survey complete. You may call another function to store the final results
    saveState(survey);
    handleSpinner('#survey-proceed-button', '#survey-proceed-spinner', 3);
    });
    //Load the initial state
    //loadState(survey);

    //save the data every 10 seconds, it is a good idea to change it to 30-60 seconds or more.
    timerId = window.setInterval(function () {
    saveState(survey);
    }, 10000);

    $("#surveyElement").Survey({model: survey});
    })
    */
}

function init(structure, $, Survey) {

};

window.onload = function () {
   init();
}
//Survey.Survey.cssType = "bootstrap";

