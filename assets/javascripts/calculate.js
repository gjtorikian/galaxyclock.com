var earthHoursinDay = 24;
var earthDaysinMonth = 30.4375;
var earthDaysinYear = 365.25;
var earthMonthsinYear = 12;
var earthHoursinYear = earthHoursinDay * earthDaysinYear;

var eHoursinMercuryDay = 4224;
var eDaysinMercuryDay = 176;
var eHoursinMercuryYear = 2112;
var eDaysinMercuryYear = 88;

var eHoursinVenusDay = 5832;
var eDaysinVenusDay = 243;
var eHoursinVenusYear = 5392.8;
var eDaysinVenusYear = 224.7;

var eHoursinMarsDay = 24.6;
var eDaysinMarsDay = 1.03;
var eDaysinMarsYear = 687;

var eHoursinJupiterDay = 9.84;
var eYearsinJupiterYear = 11.86;

var eHoursinSaturnDay = 10.2;
var eYearsinSaturnYear = 29.46;

var eHoursinUranusDay = 17.9;
var eYearsinUranusYear = 84.07;

var eHoursinNeptuneDay = 19.1;
var eYearsinNeptuneYear = 164.8;

function fixedDivision(d1, d2) {
  return (d1 / d2).toFixed(4);
}

function replaceElementText(id, text) {
  document.getElementById(id).innerText = text;
}

function processForm(e) {
  if (e.preventDefault) e.preventDefault();

  var e = document.getElementById("time-format");
  var format = e.options[e.selectedIndex].value;
  var earthTime = document.getElementById("earth-time").value;
  var table = document.getElementById("calcTable");

  var mercDays, mercYears,
      venusDays, venusYears,
      marsDays, marsYears,
      jupDays, jupYears,
      satDays, satYears,
      urDays, urYears,
      nepDays, nepYears;

  switch(format) {
    case "hours":
      mercDays = fixedDivision(earthTime, eHoursinMercuryDay);
      mercYears = fixedDivision(earthTime, eHoursinMercuryYear);

      venusDays = fixedDivision(earthTime, eHoursinVenusDay);
      venusYears = fixedDivision(earthTime, eHoursinVenusYear);

      marsDays = fixedDivision(earthTime, eHoursinMarsDay);
      marsYears = fixedDivision(earthTime, eDaysinMarsYear * earthHoursinDay);

      jupDays = fixedDivision(earthTime, eHoursinJupiterDay);
      jupYears = fixedDivision(earthTime, eYearsinJupiterYear * earthHoursinYear);

      satDays = fixedDivision(earthTime, eHoursinSaturnDay);
      satYears = fixedDivision(earthTime, eYearsinSaturnYear * earthHoursinYear);

      urDays = fixedDivision(earthTime, eHoursinUranusDay);
      urYears = fixedDivision(earthTime, eYearsinUranusYear * earthHoursinYear);

      nepDays = fixedDivision(earthTime, eHoursinNeptuneDay);
      nepYears = fixedDivision(earthTime, eYearsinNeptuneYear * earthHoursinYear);
      break;

    case "days":
      mercDays = fixedDivision(earthTime, eDaysinMercuryDay);
      mercYears = fixedDivision(earthTime, eDaysinMercuryYear);

      venusDays = fixedDivision(earthTime, eDaysinVenusDay);
      venusYears = fixedDivision(earthTime, eDaysinVenusYear);

      marsDays = fixedDivision(earthTime, eDaysinMarsDay);
      marsYears = fixedDivision(earthTime, eDaysinMarsYear);

      jupDays = fixedDivision(earthTime, eHoursinJupiterDay / earthHoursinDay);
      jupYears = fixedDivision(earthTime, eYearsinJupiterYear * earthDaysinYear);

      satDays = fixedDivision(earthTime, eHoursinSaturnDay / earthHoursinDay);
      satYears = fixedDivision(earthTime, eYearsinSaturnYear * earthDaysinYear);

      urDays = fixedDivision(earthTime, eHoursinUranusDay / earthHoursinDay);
      urYears = fixedDivision(earthTime, eYearsinUranusYear * earthDaysinYear);

      nepDays = fixedDivision(earthTime, eHoursinNeptuneDay / earthHoursinDay);
      nepYears = fixedDivision(earthTime, eYearsinNeptuneYear * earthDaysinYear);
      break;

    case "months":
      mercDays = fixedDivision(earthTime, eDaysinMercuryDay / earthDaysinMonth);
      mercYears = fixedDivision(earthTime, eDaysinMercuryYear / earthDaysinMonth);

      venusDays = fixedDivision(earthTime, eDaysinVenusDay / earthDaysinMonth);
      venusYears = fixedDivision(earthTime, eDaysinVenusYear / earthDaysinMonth);

      marsDays = fixedDivision(earthTime, eDaysinMarsDay / earthDaysinMonth);
      marsYears = fixedDivision(earthTime, eDaysinMarsYear / earthDaysinMonth);

      jupDays = fixedDivision(earthTime, eHoursinJupiterDay / (earthDaysinMonth * earthHoursinDay));
      jupYears = fixedDivision(earthTime, eYearsinJupiterYear * earthMonthsinYear);

      satDays = fixedDivision(earthTime, eHoursinSaturnDay / (earthDaysinMonth * earthHoursinDay));
      satYears = fixedDivision(earthTime, eYearsinSaturnYear * earthMonthsinYear);

      urDays = fixedDivision(earthTime, eHoursinUranusDay / (earthDaysinMonth * earthHoursinDay));
      urYears = fixedDivision(earthTime, eYearsinUranusYear * earthMonthsinYear);

      nepDays = fixedDivision(earthTime, eHoursinNeptuneDay / (earthDaysinMonth * earthHoursinDay));
      nepYears = fixedDivision(earthTime, eYearsinNeptuneYear * earthMonthsinYear);

      break;

    case "years":
      mercDays = fixedDivision(earthTime, eDaysinMercuryDay / earthDaysinYear);
      mercYears = fixedDivision(earthTime, eDaysinMercuryYear / earthDaysinYear);

      venusDays = fixedDivision(earthTime, eDaysinVenusDay / earthDaysinYear);
      venusYears = fixedDivision(earthTime, eDaysinVenusYear / earthDaysinYear);

      marsDays = fixedDivision(earthTime, eDaysinMarsDay / earthDaysinYear);
      marsYears = fixedDivision(earthTime, eDaysinMarsYear / earthDaysinYear);

      jupDays = fixedDivision(earthTime, ( (eHoursinJupiterDay / earthHoursinDay) / earthDaysinYear));
      jupYears = fixedDivision(earthTime, eYearsinJupiterYear);

      satDays = fixedDivision(earthTime, ( (eHoursinSaturnDay / earthHoursinDay) / earthDaysinYear));
      satYears = fixedDivision(earthTime, eYearsinSaturnYear);

      urDays = fixedDivision(earthTime, ( (eHoursinUranusDay / earthHoursinDay) / earthDaysinYear));
      urYears = fixedDivision(earthTime, eYearsinUranusYear);

      nepDays = fixedDivision(earthTime, ( (eHoursinNeptuneDay / earthHoursinDay) / earthDaysinYear));
      nepYears = fixedDivision(earthTime, eYearsinNeptuneYear);

      break;
  }

  calcTable.className = calcTable.className.replace(/\bhidden\b/,'');

  replaceElementText("merc-days", mercDays);
  replaceElementText("merc-years", mercYears);

  replaceElementText("venus-days", venusDays);
  replaceElementText("venus-years", venusYears);

  replaceElementText("mars-days", marsDays);
  replaceElementText("mars-years", marsYears);

  replaceElementText("jup-days", jupDays);
  replaceElementText("jup-years", jupYears);

  replaceElementText("sat-days", satDays);
  replaceElementText("sat-years", satYears);

  replaceElementText("ur-days", urDays);
  replaceElementText("ur-years", urYears);

  replaceElementText("nep-days", nepDays);
  replaceElementText("nep-years", nepYears);

  return false;
}

var form = document.getElementById("timeform");
if (form.attachEvent) {
  form.attachEvent("submit", processForm);
} else {
  form.addEventListener("submit", processForm);
}
