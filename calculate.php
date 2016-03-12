<?php
bcscale(4);

$pattern = "/[0-9]+/";

$earthHoursinDay = 24;
$earthDaysinMonth = 30.4375;
$earthDaysinYear = 365.25;
$earthMonthsinYear = 12;
$earthHoursinYear = bcmul($earthHoursinDay, $earthDaysinYear);

$eHoursinMercuryDay = 4224;
$eDaysinMercuryDay = 176;
$eHoursinMercuryYear = 2112;
$eDaysinMercuryYear = 88;

$eHoursinVenusDay = 5832;
$eDaysinVenusDay = 243;
$eHoursinVenusYear = 5392.8;
$eDaysinVenusYear = 224.7;

$eHoursinMarsDay = 24.6;
$eDaysinMarsDay = 1.03;
$eDaysinMarsYear = 687;

$eHoursinJupiterDay = 9.84;
$eYearsinJupiterYear = 11.86;

$eHoursinSaturnDay = 10.2;
$eYearsinSaturnYear = 29.46;

$eHoursinUranusDay = 17.9;
$eYearsinUranusYear = 84.07;

$eHoursinNeptuneDay = 19.1;
$eYearsinNeptuneYear = 164.8;

if (preg_match($pattern, $_POST["earth_time"])) {
	switch ($_POST["time_format"]) {
	    case "hours":
		        		$mercDays = bcdiv($_POST["earth_time"], $eHoursinMercuryDay);
		        		$mercYears = bcdiv($_POST["earth_time"], $eHoursinMercuryYear);

		        		$venusDays = bcdiv($_POST["earth_time"], $eHoursinVenusDay );
		        		$venusYears = bcdiv($_POST["earth_time"], $eHoursinVenusYear);

		        		$marsDays = bcdiv($_POST["earth_time"], $eHoursinMarsDay);
		        		$marYear = $eDaysinMarsYear * $earthHoursinDay; $marsYears = bcdiv($_POST["earth_time"], $marYear);


		        		$jupDays = bcdiv($_POST["earth_time"], $eHoursinJupiterDay);
		        		$jupYear = bcdiv($_POST["earth_time"], bcmul($eYearsinJupiterYear,$earthHoursinYear));

		        		$satDays = bcdiv($_POST["earth_time"], $eHoursinSaturnDay);
		        		$satYears = bcdiv($_POST["earth_time"], bcmul($eYearsinSaturnYear,$earthHoursinYear));

		        		$urDays = bcdiv($_POST["earth_time"], $eHoursinUranusDay);
		        		$urYears = bcdiv($_POST["earth_time"], bcmul($eYearsinUranusYear,$earthHoursinYear));

		        		$nepDays = bcdiv($_POST["earth_time"], $eHoursinNeptuneDay);
		        		$nepYears = bcdiv($_POST["earth_time"], bcmul($eYearsinNeptuneYear,$earthHoursinYear));
	        break;
	    case "days":

		        		$mercDays = bcdiv($_POST["earth_time"], $eDaysinMercuryDay);
		        		$mercYears = bcdiv($_POST["earth_time"], $eDaysinMercuryYear);

		        		$venusDays = bcdiv($_POST["earth_time"], $eDaysinVenusDay );
		        		$venusYears = bcdiv($_POST["earth_time"], $eDaysinVenusYear);

		        		$marsDays = bcdiv($_POST["earth_time"], $eDaysinMarsDay);
		        		$marsYears = bcdiv($_POST["earth_time"], $eDaysinMarsYear);

		        		$jupDays = bcdiv($_POST["earth_time"], bcdiv($eHoursinJupiterDay,$earthHoursinDay));
		        		$jupYears = bcdiv($_POST["earth_time"], bcmul($eYearsinJupiterYear, $earthDaysinYear));

		        		$satDays = bcdiv($_POST["earth_time"], bcdiv($eHoursinSaturnDay,$earthHoursinDay));
		        		$satYears = bcdiv($_POST["earth_time"], bcmul($eYearsinSaturnYear, $earthDaysinYear));

		        		$urDays = bcdiv($_POST["earth_time"], bcdiv($eHoursinUranusDay,$earthHoursinDay));
		        		$urYears = bcdiv($_POST["earth_time"], bcmul($eYearsinUranusYear, $earthDaysinYear));

		        		$nepDays = bcdiv($_POST["earth_time"], bcdiv($eHoursinNeptuneDay,$earthHoursinDay));
		        		$nepYears = bcdiv($_POST["earth_time"], bcmul($eYearsinNeptuneYear, $earthDaysinYear));
	        break;
	    case "months":
		        		$mercDays = bcdiv($_POST["earth_time"], bcdiv($eDaysinMercuryDay,$earthDaysinMonth));
		        		$mercYears = bcdiv($_POST["earth_time"], bcdiv($eDaysinMercuryYear,$earthDaysinMonth));

		        		$venusDays = bcdiv($_POST["earth_time"], bcdiv($eDaysinVenusDay,$earthDaysinMonth));
		        		$venusYears = bcdiv($_POST["earth_time"], bcdiv($eDaysinVenusYear,$earthDaysinMonth));

		        		$marsDays = bcdiv($_POST["earth_time"], bcdiv($eDaysinMarsDay,$earthDaysinMonth));
		        		$marsYears = bcdiv($_POST["earth_time"], bcdiv($eDaysinMarsYear,$earthDaysinMonth));

		        		$jupDays = bcdiv($_POST["earth_time"], bcdiv($eHoursinJupiterDay, bcmul($earthDaysinMonth,$earthHoursinDay)));
		        		$jupYears = bcdiv($_POST["earth_time"], bcmul($eYearsinJupiterYear, $earthMonthsinYear));

		        		$satDays = bcdiv($_POST["earth_time"], bcdiv($eHoursinSaturnDay,bcmul($earthDaysinMonth,$earthHoursinDay)));
		        		$satYears = bcdiv($_POST["earth_time"], bcmul($eYearsinSaturnYear, $earthMonthsinYear));

		        		$urDays = bcdiv($_POST["earth_time"], bcdiv($eHoursinUranusDay,bcmul($earthDaysinMonth,$earthHoursinDay)));
		        		$urYears = bcdiv($_POST["earth_time"], bcmul($eYearsinUranusYear, $earthMonthsinYear));

		        		$nepDays = bcdiv($_POST["earth_time"], bcdiv($eHoursinNeptuneDay,bcmul($earthDaysinMonth,$earthHoursinDay)));
		        		$nepYears = bcdiv($_POST["earth_time"], bcmul($eYearsinNeptuneYear, $earthMonthsinYear));

	        break;
	    case "years":

		        		$mercDays = bcdiv($_POST["earth_time"], bcdiv($eDaysinMercuryDay, $earthDaysinYear));
		        		$mercYears = bcdiv($_POST["earth_time"], bcdiv($eDaysinMercuryYear, $earthDaysinYear));

		        		$venusDays = bcdiv($_POST["earth_time"], bcdiv($eDaysinVenusDay, $earthDaysinYear));
		        		$venusYears = bcdiv($_POST["earth_time"], bcdiv($eDaysinVenusYear, $earthDaysinYear));

		        		$marsDays = bcdiv($_POST["earth_time"], bcdiv($eDaysinMarsDay, $earthDaysinYear));
		        		$marsYears = bcdiv($_POST["earth_time"], bcdiv($eDaysinMarsYear, $earthDaysinYear));

		        		#$jupDays = bcdiv($_POST["earth_time"], bcdiv($eHoursinJupiterDay, bcdiv($earthHoursinDay, $earthDaysinYear)));
						$jupDays = bcdiv($_POST["earth_time"], bcdiv(bcdiv($eHoursinJupiterDay,$earthHoursinDay), $earthDaysinYear));
		        		$jupYears = bcdiv($_POST["earth_time"], $eYearsinJupiterYear);

		        		#$satDays = bcdiv($_POST["earth_time"], bcdiv($eHoursinSaturnDay, bcdiv($earthHoursinDay, $earthDaysinYear)));
						$satDays = bcdiv($_POST["earth_time"], bcdiv(bcdiv($eHoursinSaturnDay,$earthHoursinDay), $earthDaysinYear));
		        		$satYears = bcdiv($_POST["earth_time"], $eYearsinSaturnYear);

		        		#$urDays = bcdiv($_POST["earth_time"], bcdiv($eHoursinUranusDay, bcdiv($earthHoursinDay, $earthDaysinYear)));
						$urDays = bcdiv($_POST["earth_time"], bcdiv(bcdiv($eHoursinUranusDay,$earthHoursinDay), $earthDaysinYear));
		        		$urYears = bcdiv($_POST["earth_time"], $eYearsinUranusYear);

		        		#$nepDays = bcdiv($_POST["earth_time"], bcdiv($eHoursinNeptuneDay, bcdiv($earthHoursinDay, $earthDaysinYear)));
						$nepDays = bcdiv($_POST["earth_time"], bcdiv(bcdiv($eHoursinNeptuneDay,$earthHoursinDay), $earthDaysinYear));
		        		$nepYears = bcdiv($_POST["earth_time"], $eYearsinNeptuneYear);

	        break;
	}
?>
<table id="calctable" cellspacing="0" summary="The resulting planetary calculations.">
  <tbody>
    <!-- Results table headers -->
    <tr>
      <th scope="col">&nbsp;</th>
      <th scope="col">Mercury</th>
      <th scope="col">Venus</th>
      <th scope="col">Mars</th>
      <th scope="col">Jupiter</th>
      <th scope="col">Saturn</th>
      <th scope="col">Uranus</th>
      <th scope="col">Neptune</th>
    </tr>
    <tr>
      <th scope="row" class="spec">Days</th>
      <td><?echo $mercDays;?></td>
      <td><?echo $venusDays;?></td>
      <td><?echo $marsDays;?></td>
      <td><?echo $jupDays;?></td>
      <td><?echo $satDays;?></td>
      <td><?echo $urDays;?></td>
      <td><?echo $nepDays;?></td>
    </tr>
    <tr>
      <th scope="row" class="spec">Years</th>
      <td><?echo $mercYears;?></td>
      <td><?echo $venusYears;?></td>
      <td><?echo $marsYears;?></td>
      <td><?echo $jupYears;?></td>
      <td><?echo $satYears;?></td>
      <td><?echo $urYears;?></td>
      <td><?echo $nepYears;?></td>
    </tr>
  </tbody>
</table>
  <?
	}
else {
	echo "Don't be a jerk; enter a numeral.";
}
?>
