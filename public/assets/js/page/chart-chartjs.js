"use strict";


var draw = Chart.controllers.line.prototype.draw;
Chart.controllers.lineShadow = Chart.controllers.line.extend({
	draw: function () {
		draw.apply(this, arguments);
		var ctx = this.chart.chart.ctx;
		var _stroke = ctx.stroke;
		ctx.stroke = function () {
			ctx.save();
			ctx.shadowColor = '#00000075';
			ctx.shadowBlur = 10;
			ctx.shadowOffsetX = 8;
			ctx.shadowOffsetY = 8;
			_stroke.apply(this, arguments)
			ctx.restore();
		}
	}
});



var ctx = document.getElementById("line-chart");
if (ctx) {
	ctx.height = 150;
    var label = JSON.parse($('input[name=years]').val());
    var data = JSON.parse($('input[name=data]').val());
	var myChart = new Chart(ctx, {
		type: 'lineShadow',
		data: {
			labels: label,
			type: 'line',
			defaultFontFamily: 'Poppins',
			datasets: [{
				label: "",
				data: data,
				backgroundColor: 'transparent',
				borderColor: '#f96332',
				borderWidth: 2,
				pointStyle: 'circle',
				pointRadius: 3,
				pointBorderColor: 'transparent',
				pointBackgroundColor: '#f96332',
			}]
		},
		options: {
			responsive: true,
			tooltips: {
				mode: 'index',
				titleFontSize: 12,
				titleFontColor: '#000',
				bodyFontColor: '#000',
				backgroundColor: '#fff',
				titleFontFamily: 'Poppins',
				bodyFontFamily: 'Poppins',
				cornerRadius: 3,
				intersect: false,
			},
			legend: {
				display: false,
				labels: {
					usePointStyle: true,
					fontFamily: 'Poppins',
				},
			},
			scales: {
				xAxes: [{
					display: true,
					gridLines: {
						display: false,
						drawBorder: false
					},
					scaleLabel: {
						display: false,
						labelString: 'Month'
					},
					ticks: {
						fontFamily: "Poppins",
						fontColor: "#9aa0ac", // Font Color
					}
				}],
				yAxes: [{
					display: true,
					gridLines: {
						display: false,
						drawBorder: false
					},
					scaleLabel: {
						display: true,
						labelString: 'Value',
						fontFamily: "Poppins"

					},
					ticks: {
						fontFamily: "Poppins",
						fontColor: "#9aa0ac", // Font Color
					}
				}]
			},
			title: {
				display: false,
				text: 'Normal Legend'
			}
		}
	});
}


var ctx = document.getElementById("lineChartFill");
if (ctx) {
	ctx.height = 150;
	var myChart = new Chart(ctx, {
		type: 'line',
		data: {
			labels: JSON.parse($('input[name=month]').val()),
			datasets: [
				{
					label: "users",
					borderColor: "rgba(0,0,0,.09)",
					borderWidth: "1",
					backgroundColor: "rgba(0,0,0,.07)",
					data: JSON.parse($('input[name=users]').val())
				},
				{
					label: "service",
					borderColor: "rgba(0, 123, 255, 0.9)",
					borderWidth: "1",
					backgroundColor: "rgba(0, 123, 255, 0.5)",
					pointHighlightStroke: "rgba(26,179,148,1)",
					data: JSON.parse($('input[name=service]').val())
				}
			]
		},
		options: {
			legend: {
				position: 'top',
				labels: {
				}

			},
			responsive: true,
			tooltips: {
				mode: 'index',
				intersect: false
			},
			hover: {
				mode: 'nearest',
				intersect: true
			},
			scales: {
				xAxes: [{
					ticks: {
						fontColor: "#9aa0ac", // Font Color
					}
				}],
				yAxes: [{
					ticks: {
						beginAtZero: true,
						fontColor: "#9aa0ac", // Font Color
					}
				}]
			}

		}
	});
}

//radar chart
var ctx = document.getElementById("radar-chart");
if (ctx) {
	ctx.height = 200;
	var myChart = new Chart(ctx, {
		type: 'radar',
		data: {
			labels: [["Eating", "Dinner"], ["Drinking", "Water"], "Sleeping", ["Designing", "Graphics"], "Coding", "Cycling", "Running"],
			datasets: [
				{
					label: "My First dataset",
					data: [65, 59, 66, 45, 56, 55, 40],
					borderColor: "rgba(0, 123, 255, 0.6)",
					borderWidth: "1",
					backgroundColor: "rgba(0, 123, 255, 0.4)"
				},
				{
					label: "My Second dataset",
					data: [28, 12, 40, 19, 63, 27, 87],
					borderColor: "rgba(0, 123, 255, 0.7",
					borderWidth: "1",
					backgroundColor: "rgba(0, 123, 255, 0.5)"
				}
			]
		},
		options: {
			legend: {
				position: 'top',
				labels: {
				}

			},
			scale: {
				ticks: {
					beginAtZero: true,
				}
			}
		}
	});
}

var ctx = document.getElementById("polar-chart");
if (ctx) {
	ctx.height = 200;
	var myChart = new Chart(ctx, {
		type: 'polarArea',
		data: {
			datasets: [{
				data: [15, 18, 9, 6, 19],
				backgroundColor: [
					"rgba(0, 123, 255,0.9)",
					"rgba(0, 123, 255,0.8)",
					"rgba(0, 123, 255,0.7)",
					"rgba(0,0,0,0.2)",
					"rgba(0, 123, 255,0.5)"
				]

			}],
			labels: [
				"Green",
				"Green",
				"Green",
				"Green"
			]
		},
		options: {
			legend: {
				position: 'top',
				labels: {
					fontFamily: 'Poppins',
					fontColor: "#9aa0ac", // Font Color
				}

			},
			responsive: true
		}
	});
}

var ctx = document.getElementById('line-chart3').getContext("2d");


var gradientStroke = ctx.createLinearGradient(500, 0, 0, 0);
gradientStroke.addColorStop(0, 'rgba(155, 89, 182, 1)');
gradientStroke.addColorStop(1, 'rgba(231, 76, 60, 1)');


var myChart = new Chart(ctx, {
	type: 'lineShadow',
	data: {
		labels: ["2010", "2011", "2012", "2013", "2014", "2015", "2016"],
		type: 'line',
		defaultFontFamily: 'Poppins',
		datasets: [{
			label: "Foods",
			data: [0, 30, 10, 120, 50, 63, 10],
			borderColor: gradientStroke,
			pointBorderColor: gradientStroke,
			pointBackgroundColor: gradientStroke,
			pointHoverBackgroundColor: gradientStroke,
			pointHoverBorderColor: gradientStroke,
			pointBorderWidth: 10,
			pointHoverRadius: 10,
			pointHoverBorderWidth: 1,
			pointRadius: 1,
			fill: false,
			borderWidth: 4,
		}, {
			label: "Electronics",
			data: [0, 50, 40, 80, 40, 79, 120],
			borderColor: gradientStroke,
			pointBorderColor: gradientStroke,
			pointBackgroundColor: gradientStroke,
			pointHoverBackgroundColor: gradientStroke,
			pointHoverBorderColor: gradientStroke,
			pointBorderWidth: 10,
			pointHoverRadius: 10,
			pointHoverBorderWidth: 1,
			pointRadius: 1,
			fill: false,
			borderWidth: 4,
		}]
	},
	options: {
		legend: {
			position: "bottom"
		},
		tooltips: {
			mode: 'index',
			titleFontSize: 12,
			titleFontColor: '#fff',
			bodyFontColor: '#fff',
			backgroundColor: '#000',
			titleFontFamily: 'Poppins',
			bodyFontFamily: 'Poppins',
			cornerRadius: 3,
			intersect: false,
		},
		scales: {
			yAxes: [{
				ticks: {
					fontColor: "#9aa0ac", // Font Color
					fontStyle: "bold",
					beginAtZero: true,
					maxTicksLimit: 5,
					padding: 20
				},
				gridLines: {
					drawTicks: false,
					display: false
				}

			}],
			xAxes: [{
				gridLines: {
					zeroLineColor: "transparent"
				},
				ticks: {
					padding: 20,
					fontColor: "#9aa0ac", // Font Color
					fontStyle: "bold"
				}
			}]
		}
	}
});

var ctx = document.getElementById('line-chart4').getContext("2d");

var gradientStroke = ctx.createLinearGradient(0, 0, 700, 0);
gradientStroke.addColorStop(0, 'rgba(255, 204, 128, 1)');
gradientStroke.addColorStop(0.5, 'rgba(255, 152, 0, 1)');
gradientStroke.addColorStop(1, 'rgba(239, 108, 0, 1)');

var myChart = new Chart(ctx, {
	type: 'lineShadow',
	data: {
		labels: ["2010", "2011", "2012", "2013", "2014", "2015", "2016"],
		type: 'line',
		defaultFontFamily: 'Poppins',
		datasets: [{
			label: "Foods",
			data: [0, 30, 10, 120, 50, 63, 10],
			borderColor: gradientStroke,
			pointBorderColor: gradientStroke,
			pointBackgroundColor: gradientStroke,
			pointHoverBackgroundColor: gradientStroke,
			pointHoverBorderColor: gradientStroke,
			pointBorderWidth: 10,
			pointHoverRadius: 10,
			pointHoverBorderWidth: 1,
			pointRadius: 0,
			fill: false,
			borderWidth: 4,
		}, {
			label: "Electronics",
			data: [0, 50, 40, 80, 40, 79, 120],
			borderColor: gradientStroke,
			pointBorderColor: gradientStroke,
			pointBackgroundColor: gradientStroke,
			pointHoverBackgroundColor: gradientStroke,
			pointHoverBorderColor: gradientStroke,
			pointBorderWidth: 10,
			pointHoverRadius: 10,
			pointHoverBorderWidth: 1,
			pointRadius: 0,
			fill: false,
			borderWidth: 4,
		}]
	},


	options: {
		legend: {
			position: "bottom"
		},
		scales: {
			yAxes: [{
				ticks: {
					fontColor: "#9aa0ac", // Font Color
					fontStyle: "bold",
					beginAtZero: true,
					maxTicksLimit: 5,
					padding: 20
				},
				gridLines: {
					drawTicks: false,
					display: false
				}

			}],
			xAxes: [{
				gridLines: {
					zeroLineColor: "transparent"
				},
				ticks: {
					padding: 20,
					fontColor: "#9aa0ac", // Font Color
					fontStyle: "bold"
				}
			}]
		}
	}
});
