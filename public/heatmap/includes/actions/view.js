var heatmap = null;
window.onload = function () {
	/*
	 Automatically add a wrapper for tracking to take place
	 */
	var body = document.body;
	var div = document.createElement('div');
	div.id = 'heatmapContainerWrapper';

	div.innerHTML = "<div id='heatmapContainer'></div>" + body.innerHTML;
	body.innerHTML = div.outerHTML;

	heatmap = h337.create({
		container:       document.getElementById('heatmapContainer'),
		maxOpacity:      .6,
		radius:          50,
		blur:            .90,
		// backgroundColor with alpha so you can see through it
		backgroundColor: 'rgba(0, 0, 58, 0.6)'
	});

	$.getJSON('heatmap/data.php', {action: "get"}, function (data) {
		heatmap.setData(data);
		$('#heatmapContainer').show();
	});
};
