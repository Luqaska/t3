<?php function show_dir($dir){
	$scan=scandir($dir);
	echo "\t\t\t<ul>\n";
	foreach($scan as $fr){
		if(is_dir("$dir/$file") && !in_array($fr,array(".",".."))){
			echo "\t\t\t\t<li><a href=\"$dir/$fr/\">$fr</a></li>\n";
		}
	}
	echo "\t\t\t</ul>\n";
} ?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
	<title>Luqaska's S**te</title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<style>
		@import url("https://fonts.googleapis.com/css2?family=Fira+Mono:wght@400;500;700&display=swap");
		body{
			font-family:"Fira Mono",monospace;
			padding:0 10%;margin:0 0 2em 0;
			background-image:url("data:image/svg+xml,%3C%3Fxml version='1.0' encoding='UTF-8' standalone='no'%3F%3E%3Csvg xmlns:dc='http://purl.org/dc/elements/1.1/' xmlns:cc='http://creativecommons.org/ns%23' xmlns:rdf='http://www.w3.org/1999/02/22-rdf-syntax-ns%23' xmlns:svg='http://www.w3.org/2000/svg' xmlns='http://www.w3.org/2000/svg' xmlns:sodipodi='http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd' xmlns:inkscape='http://www.inkscape.org/namespaces/inkscape' width='30.0px' height='30.0px' viewBox='0 0 30.0 30.0' version='1.1' id='SVGRoot' sodipodi:docname='tilde.svg' inkscape:version='1.0.1 (3bc2e813f5, 2020-09-07)'%3E%3Cdefs id='defs1414' /%3E%3Csodipodi:namedview id='base' pagecolor='%23ffffff' bordercolor='%23666666' borderopacity='1.0' inkscape:pageopacity='0.0' inkscape:pageshadow='2' inkscape:zoom='7.9195959' inkscape:cx='17.485262' inkscape:cy='25.213873' inkscape:document-units='px' inkscape:current-layer='layer1' inkscape:document-rotation='0' showgrid='true' inkscape:window-width='1343' inkscape:window-height='1030' inkscape:window-x='96' inkscape:window-y='0' inkscape:window-maximized='0'%3E%3Cinkscape:grid type='xygrid' id='grid1984' /%3E%3C/sodipodi:namedview%3E%3Cmetadata id='metadata1417'%3E%3Crdf:RDF%3E%3Ccc:Work rdf:about=''%3E%3Cdc:format%3Eimage/svg+xml%3C/dc:format%3E%3Cdc:type rdf:resource='http://purl.org/dc/dcmitype/StillImage' /%3E%3Cdc:title%3E%3C/dc:title%3E%3C/cc:Work%3E%3C/rdf:RDF%3E%3C/metadata%3E%3Cg inkscape:label='Capa 1' inkscape:groupmode='layer' id='layer1'%3E%3Ctext xml:space='preserve' style='font-style:normal;font-weight:normal;font-size:40px;line-height:1.25;font-family:sans-serif;fill:%2300ff08;fill-opacity:1;stroke:none;' x='-1.227743' y='27.821028' id='text1993'%3E%3Ctspan sodipodi:role='line' id='tspan1991' x='-1.227743' y='27.821028'%3E~%3C/tspan%3E%3C/text%3E%3C/g%3E%3C/svg%3E");
			background-color:#353535;
			background-position:center;
			color:#00FF08;
		}
		.inside{
			padding:1px 10px 0 10px;
			background:black;
			border-radius:0 0 10px 10px;
		}
		a{color:#00FF08;}
		footer{margin:5% 0 0 0;}
	</style>
</head>
<body>
	<div class="inside">
		<h1>Luqaska's S**te</h1>
		<div id="tools">
			<h2>/t/ools</h2>
<?php show_dir("t") ?>
		</div>
                <div id="linkz">
                        <h2>Linkz</h2>
                        <ul>
                                <li><a href="https://tilde.team">~team</a></li>
                                <li><a href="https://tilde.team/~lucas/twtxt/">TWTXT</a></li>
                                <li><a href="https://tildegit.org/luqaska">~git</a></li>
                                <li><a href="https://github.com/luqaska">GitHub</a></li>
                        </ul>
                </div>
                <footer><p>&copy;2021 Luqaska<a style="float:right;text-decoration:none" href="https://github.org/luqaska/t3">Code</a></p></footer>
	</div>
</body>
</html>
