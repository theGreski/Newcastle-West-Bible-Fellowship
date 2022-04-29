var td = new Date();
if (td.getDay() === 0) {
	var nextSunday = new Date(td.getFullYear(), td.getMonth(), td.getDate());
	var nextThursday = new Date(td.getFullYear(), td.getMonth(), td.getDate() + (4 - td.getDay()));
} else if (td.getDay() === 4) {
	var nextSunday = new Date(td.getFullYear(), td.getMonth(), td.getDate() + (7 - td.getDay()));
	var nextThursday = new Date(td.getFullYear(), td.getMonth(), td.getDate());
} else {
	var nextSunday = new Date(td.getFullYear(), td.getMonth(), td.getDate() + (7 - td.getDay()));
	if (td.getDay() < 4) {
		var nextThursday = new Date(td.getFullYear(), td.getMonth(), td.getDate() + (4 - td.getDay()));
	} else {
		var nextThursday = new Date(td.getFullYear(), td.getMonth(), td.getDate() + (11 - td.getDay()));
	}
}

$(function () {
	"use strict";

	var nextsunam = new Date(nextSunday.getFullYear(), nextSunday.getMonth(), nextSunday.getDate(), 10, 0),
		nextsunpm = new Date(nextSunday.getFullYear(), nextSunday.getMonth(), nextSunday.getDate(), 18, 0),
		nextthupm = new Date(nextThursday.getFullYear(), nextThursday.getMonth(), nextThursday.getDate(), 18, 30),
		event;
	if (nextsunam.getTime() < nextthupm.getTime()) {
		if (td < nextsunam) {
			event = nextsunam;
			$('#name').text("Sunday Family Service");
			$('#year').text(nextsunam.getFullYear());
		} else if (td < nextsunpm) {
			event = nextsunpm;
			$('#name').text("Bible Teaching / Fellowship Night");
		} else {
			event = nextthupm;
			$('#name').text("Thursday Bible Study / Prayer Meeting");
		}
	} else {
		if (td < nextthupm) {
			event = nextthupm;
			$('#name').text("Thursday Bible Study / Prayer Meeting");
		} else {
			event = nextsunam;
			$('#name').text("Sunday Family Service");
		}
	}
	$('#defaultCountdown').countdown({until: event});
	$('#year').text(event.getFullYear() + "-" + event.getMonth() + "-" + event.getDate() + " - " + event.getHours() + ":" + event.getMinutes());
});

$(document).ready(function () {
	
	// Logo
	$('.header img').click(function(){
		window.location.href='http://www.ncwbiblefellowship.com/';
	})
	// Menu
	if ($(".menu")) {
		$(".menu ul").hide();
		$("ul.menu li").click(function() {
			$("ul.menu li.clicked").removeClass().next("ul").slideUp(200);
			$(this).addClass("clicked");
			$("ul.menu li.clicked").next("ul").slideDown(500);
		});
	}
				
});
			