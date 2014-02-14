/* Load this script using conditional IE comments if you need to support IE 7 and IE 6. */

window.onload = function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'icomoon\'">' + entity + '</span>' + html;
	}
	var icons = {
			'icon-twitter' : '&#xe003;',
			'icon-facebook' : '&#xe005;',
			'icon-googleplus' : '&#xe023;',
			'icon-pinterest' : '&#xe004;',
			'icon-instagram' : '&#xf054;',
			'icon-envelope-alt' : '&#xf053;',
			'icon-cart' : '&#xf078;',
			'icon-clipboard' : '&#xf077;',
			'icon-remove' : '&#xf00d;',
			'icon-arrow-down' : '&#xf063;',
			'icon-arrow-up' : '&#xf062;',
			'icon-arrow-right' : '&#xf061;',
			'icon-arrow-left' : '&#xf060;',
			'icon-tumblr' : '&#xe000;',
			'icon-chevron-right' : '&#xe001;',
			'icon-chevron-left' : '&#xf01e;',
			'icon-repeat' : '&#xe002;',
			'icon-chevron-up' : '&#xe006;',
			'icon-chevron-down' : '&#xe007;',
			'icon-heart' : '&#xf0e0;',
			'icon-quote-left' : '&#xf10d;',
			'icon-quote-right' : '&#xf10e;',
			'icon-lifebuoy' : '&#xe008;',
			'icon-clock' : '&#xe00a;',
			'icon-calendar' : '&#xe00c;',
			'icon-bolt' : '&#xe00d;',
			'icon-search' : '&#xf002;',
			'icon-comments' : '&#xf086;',
			'icon-thumbs-up' : '&#xf087;',
			'icon-heart-2' : '&#xe009;',
			'icon-youtube' : '&#xe00b;'
		},
		els = document.getElementsByTagName('*'),
		i, attr, c, el;
	for (i = 0; ; i += 1) {
		el = els[i];
		if(!el) {
			break;
		}
		attr = el.getAttribute('data-icon');
		if (attr) {
			addIcon(el, attr);
		}
		c = el.className;
		c = c.match(/icon-[^\s'"]+/);
		if (c && icons[c[0]]) {
			addIcon(el, icons[c[0]]);
		}
	}
};