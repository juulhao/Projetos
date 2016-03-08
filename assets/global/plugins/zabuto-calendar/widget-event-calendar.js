$(function() {
	$(window).load(function() {
		$.getJSON($("script[src$='widget-event-calendar.js'][data-url]").data("url"), function(json) {
			if (typeof(json) != "object") return;
			
			/*var maxYear  = 0;
			var maxMonth = 0;
			
			$.map(json, function(v, k) {
				var year  = Number(v.date.substring(0, 4));
				var month = Number(v.date.substring(5, 7));
				
				if (year > maxYear)   maxYear = year;
				if (month > maxMonth) maxMonth = month;
			});*/
			
			$("#zabuto-calendar").zabuto_calendar({
				show_previous: false,
				//year		 : maxYear,
				//month		 : maxMonth,
				language	 : "pt",
				data		 : json,
				action		 : function() {
					var len = (this.id).length;
					var id  = (this.id).substring(len -10, len);
					
					$.map(json, function(v, k) {
						if (v.date == id) {
							window.location.href = v.url;
						}
					});
					
					return true;
				}
			});
		});
	});
});