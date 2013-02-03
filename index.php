<html>
<head>
<meta charset="UTF-8" />
<title>Coloring!</title>
<style type="text/css">
html,body,div{
	border:0;
	margin:0;
	padding:0;
}

body{
	background:none;
}

#toolbar{
	height:24pt;
	border-bottom:0px solid black;
}

#panel{
	border:0;
	margin:0;
	padding:0;
	overflow:hidden;
}
</style>
<script type="text/javascript">
/*<!--*/
function dgID(id){return document.getElementById(id);}

<?php
<<<JAVASCRIPT
function generateRGB(){
	var arr=[];
	for(var i=0;i<3;i++){
		arr.push(Math.floor(Math.random()*256));
	}
	return arr;
}

function generatePixel(){
	var div=document.createElement("div");
	div.style.display="block";
	div.style.width="10px";
	div.style.height="10px";
	div.style.position="absolute";
	/*div.style.minWidth="10px";
	div.style.minHeight="10px";
	div.style.maxWidth="10px";
	div.style.maxHeight="10px";*/
	div.style.border="0";
	div.style.margin="0";
	div.style.padding="0";
	/*var inner=div.cloneNode(true);
	inner.style.display="inline-block";
	div.appendChild(inner);
	div.style.maxWidth=div.style.width;
	div.style.maxHeight=div.style.height;*/
	return div;
}

var basepixel=generatePixel();
JAVASCRIPT;
		?>
setTimeout(function(){
	var toolbar=dgID("toolbar");
	var panel=dgID("panel");
	panel.style.height=(window.innerHeight-parseInt(toolbar.clientHeight)).toString()+"px";
<?php
<<<JAVASCRIPT
	for(var y=0;y<panel.clientHeight;y+=10){
		for(var x=0;x<panel.clientWidth;x+=10){
			var colors=generateRGB();
			var pixel=basepixel.cloneNode(true);
			pixel.style.backgroundColor="rgb(".concat(colors[0].toString(),",",colors[1].toString(),",",colors[2].toString(),")");
			pixel.style.left=x.toString()+"px";
			pixel.style.top=y.toString()+"px";
			panel.appendChild(pixel);
		}
	}
JAVASCRIPT;
		?>
}
,0);
			
/*-->*/
</script>
</head>
<body>
<div id="toolbar">
</div>
<div id="panel" style="position:relative;overflow:hidden;">
<?php
for($i=0;$i<50000;$i++){
	$color=array();
	for($j=0;$j<3;$j++){
		$color[]=sprintf("%d",mt_rand(0,255));
	}
	echo<<<HTML
<div style="display:inline-block;width:5px;height:5px;background:rgb($color[0],$color[1],$color[2]);"></div>
HTML;
}
?>
</div>
</body>
</html>
