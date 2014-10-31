scnShortcodeMeta = {
	attributes : [ {
		label : "Style",
		id : "type",
		help : "Select which type of pricing table you would like to use.",
		controlType : "select-control",
		selectValues : [ 'type1', 'type2' ],
		defaultValue : 'type1',
		defaultText : 'type1'
	}, {
		label : "Columns",
		id : "content",
		controlType : "column-control"
	} ],
	customMakeShortcode : function(b) {
		var a = b.data, type = b.type;

		type = ' type =" ' + type + '"';

		if (!a)
			return "";
		b = a.numColumns;
		var c = a.content;
		a = [ "0", "one", "two", "three", "four", "five", 'six' ];
		var x = [ "0", "0", "half", "third", "fourth", "fifth", 'sixth' ];
		var f = x[b];
		c = c.split("|");
		var g = "";
		for ( var h in c) {
			var d = jQuery.trim(c[h]);
			if (d.length > 0) {
				var e = a[d.length] + '_' + f;
				if (b == 4 && d.length == 2)
					e = "dt_sc_one_half";

				var z = e;
				var selected = "";
				if (h == 0) {
					e += " first";
					selected = "selected";
				}

				g += "[dt_sc_"
						+ e
						+ "] "
						+ "<br>[dt_sc_pricing_table_item variation='green' title='Summer Special' thumb='' heading='Gift' price='5' price2='99' button_text='Buy Now' button_link='#' button_size='small' "
						+ selected + "]<br>" + "<ul>" + "<li>Text</li>"
						+ "<li>Text</li>" + "<li>Text</li>" + "</ul>"
						+ "[/dt_sc_pricing_table_item]<br>" + " [/dt_sc_" + z
						+ "] <br/>";
			}
		}

		return "[dt_sc_pricing_table " + type + "]<br>" + g + "<br>[/dt_sc_pricing_table]";
	}
};