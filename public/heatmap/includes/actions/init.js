var scripts = [];
scripts.push("//code.jquery.com/jquery-1.11.2.min.js");
scripts.push("heatmap/assets/js/heatmap.min.js");
for (src in scripts)
	document.writeln("<scri" + "pt src=" + scripts[src] + " type='text/javascript'></sc" + "ript>");