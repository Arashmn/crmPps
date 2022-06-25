jQuery(function($){
	$.datepicker.regional['fa'] = {
		calendar: balanjDate,
		closeText: 'بستن',
		prevText: 'قبل',
		nextText: 'بعد',
		currentText: 'امروز',
		monthNames: ['فروردین','اردیبهشت','خرداد','تیر','مرداد','شهریور','مهر','آبان','آذر','دی','بهمن','اسفند'],
		monthNamesShort: ['فروردین','اردیبهشت','خرداد','تیر','مرداد','شهریور','مهر','آبان','آذر','دی','بهمن','اسفند'],
		dayNames: ['یکشنبه', 'دوشنبه', 'سه شنبه', 'چهارشنبه', 'پنجشنبه', 'جمعه', 'شنبه'],
		dayNamesShort: ['یک', 'دو', 'سه', 'چهار', 'پنج', 'جمعه', 'شنبه'],
		dayNamesMin: ['ی','د','س','چ','پ','ج','ش'],
		weekHeader: 'ه',
		dateFormat: 'yy/mm/dd',
		firstDay: 6,
		isRTL: true,
		showMonthAfterYear: false,
		yearSuffix: '',
		calculateWeek: function(date) {
			var checkDate = new balanjDate(date.getFullYear(), date.getMonth(), date.getDate() + (date.getDay() || 7) - 3);
			return Math.floor(Math.round((checkDate.getTime() - new balanjDate(checkDate.getFullYear(), 0, 1).getTime()) / 86400000) / 7) + 1;
		}};
	$.datepicker.setDefaults($.datepicker.regional['fa']);
});

function balanjDate(p0, p1, p2) {
    var gregorianDate;
    var balanjDate;

	if (!isNaN(parseInt(p0)) && !isNaN(parseInt(p1)) && !isNaN(parseInt(p2))) {
        var g = balanj_to_gregorian([parseInt(p0, 10), parseInt(p1, 10), parseInt(p2, 10)]);
		setFullDate(new Date(g[0], g[1], g[2]));
    } else {
        setFullDate(p0);
    }

    function balanj_to_gregorian(d) {
		var adjustDay = 0;
		if(d[1]<0){
			adjustDay = leap_persian(d[0]-1)? 30: 29;
			d[1]++;
		}
        var gregorian = jd_to_gregorian(persian_to_jd(d[0], d[1] + 1, d[2])-adjustDay);
        gregorian[1]--;
        return gregorian;
    }

    function gregorian_to_balanj(d) {
        var balanj = jd_to_persian(gregorian_to_jd(d[0], d[1] + 1, d[2]));
        balanj[1]--;
        return balanj;
    }

    function setFullDate(date) {
        if (date && date.getGregorianDate) date = date.getGregorianDate();
        gregorianDate = new Date(date);
		gregorianDate.setHours(gregorianDate.getHours() > 12 ? gregorianDate.getHours() + 2 : 0)
        if (!gregorianDate || gregorianDate == 'Invalid Date' || isNaN(gregorianDate || !gregorianDate.getDate())) {
            gregorianDate = new Date();
        }
        balanjDate = gregorian_to_balanj([
            gregorianDate.getFullYear(),
            gregorianDate.getMonth(),
            gregorianDate.getDate()]);
        return this;
    }

    this.getGregorianDate = function() { return gregorianDate; }

    this.setFullDate = setFullDate;

	this.setMonth = function(e) {
		balanjDate[1] = e;
        var g = balanj_to_gregorian(balanjDate);
        gregorianDate = new Date(g[0], g[1], g[2]);
        balanjDate = gregorian_to_balanj([g[0], g[1], g[2]]);
	}

    this.setDate = function(e) {
        balanjDate[2] = e;
        var g = balanj_to_gregorian(balanjDate);
        gregorianDate = new Date(g[0], g[1], g[2]);
        balanjDate = gregorian_to_balanj([g[0], g[1], g[2]]);
    };

    this.getFullYear = function() { return balanjDate[0]; };
    this.getMonth = function() { return balanjDate[1]; };
    this.getDate = function() { return balanjDate[2]; };
    this.toString = function() { return balanjDate.join(',').toString(); };
    this.getDay = function() { return gregorianDate.getDay(); };
    this.getHours = function() { return gregorianDate.getHours(); };
    this.getMinutes = function() { return gregorianDate.getMinutes(); };
    this.getSeconds = function() { return gregorianDate.getSeconds(); };
    this.getTime = function() { return gregorianDate.getTime(); };
    this.getTimeZoneOffset = function() { return gregorianDate.getTimeZoneOffset(); };
    this.getYear = function() { return balanjDate[0] % 100; };

    this.setHours = function(e) { gregorianDate.setHours(e) };
    this.setMinutes = function(e) { gregorianDate.setMinutes(e) };
    this.setSeconds = function(e) { gregorianDate.setSeconds(e) };
    this.setMilliseconds = function(e) { gregorianDate.setMilliseconds(e) };
}
