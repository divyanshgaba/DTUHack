/* To avoid CSS expressions while still supporting IE 7 and IE 6, use this script */
/* The script tag referencing this file must be placed before the ending body tag. */

/* Use conditional comments in order to target IE 7 and older:
	<!--[if lt IE 8]><!-->
	<script src="ie7/ie7.js"></script>
	<!--<![endif]-->
*/

(function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'plain\'">' + entity + '</span>' + html;
	}
	var icons = {
		'icon-Backward': '&#xe600;',
		'icon-Bigger': '&#xe605;',
		'icon-Brush': '&#xe602;',
		'icon-CodeSnippet': '&#xe603;',
		'icon-Eyeunhide': '&#xe604;',
		'icon-MacPro': '&#xe606;',
		'icon-MagicWand': '&#xe607;',
		'icon-Paintbucket': '&#xe60a;',
		'icon-Palette': '&#xe60b;',
		'icon-Photo': '&#xe60c;',
		'icon-Rotate': '&#xe60d;',
		'icon-Servers': '&#xe609;',
		'icon-Zoom': '&#xe60e;',
		'0': 0
		},
		els = document.getElementsByTagName('*'),
		i, c, el;
	for (i = 0; ; i += 1) {
		el = els[i];
		if(!el) {
			break;
		}
		c = el.className;
		c = c.match(/icon-[^\s'"]+/);
		if (c && icons[c[0]]) {
			addIcon(el, icons[c[0]]);
		}
	}
}());
