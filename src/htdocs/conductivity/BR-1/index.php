<?php
	if(!isset($TEMPLATE)){
		$TEMPLATE = 'onecolumn';
		$TITLE = "Northwest Basin and Range";
	}

	include_once($_SERVER['DOCUMENT_ROOT'].'/template/template.inc.php');
?>

<div class="column container contains-twelve">
	<p>
		Model BR-1 represents the northwestern margin of the Basin and Range
		geophysical province. Although a vast province, the model should be
		considered typical of the Oregon and California portions only. [Fernberg,
		EPRI 2012]
	</p>

	<div class="nine column">
		<center>
			<h3>
				1D Resistivity Model for Northwest Basin &amp; Range Model BR-1
			</h3>
		</center>
		<a href="BR-1.png">
			<img src="BR-1_browser.png" alt=" "
				width="650" height="468" class="left" />
		</a>
		<p class="disclaimer">
			Resistivity values and depths have been interpreted from published
			geological reports and maps, and may differ from actual conditions
			measured by a geophysical survey and/or borehole.
		</p>
		<p>Source data:
			<a target="_blank"
				href="ftp://hazards.cr.usgs.gov/Rigler/Conductivity_Latest/earth_model_BR1.txt">
				earth_model_BR1.txt
			</a>
		</p>
	</div>

<map name="map">
<!-- #$-:Image map file created by GIMP Image Map plug-in -->
<!-- #$-:GIMP Image Map plug-in by Maurits Rijk -->
<!-- #$-:Please do not edit lines starting with "#$" -->
<!-- #$VERSION:2.3 -->
<!-- #$AUTHOR:afurze -->
<area shape="poly" alt="CL-1" coords="141,72,99,121,124,149,140,154,145,160,163,155,170,143,171,128,176,124,167,113,160,112,170,88,164,73" href="/conductivity/CL-1" />
<area shape="poly" alt="IP-4" coords="197,88,192,140,203,147,209,188,224,183,223,88" href="/conductivity/IP-4" />
</map>

	<div class="three column">
		<h2>Location</h2>
		<img src="locationsBR1.png" alt="Location of BR-1" width="224" height="245"
			style="margin-top:-10px;" usemap="#map" />
	</div>
	<div id="minimap" class="right two column">
		<a href="/conductivity/">
			<h2>Zoom Out</h2>
			<img src="/conductivity/locationssmall.png" alt="Return to main"
				width="144" height="108" />
		</a>
	</div>

</div>
