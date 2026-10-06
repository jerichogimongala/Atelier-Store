(function () {
	'use strict';

	document.documentElement.classList.add('js-enabled');
	var toggle = document.querySelector('.menu-toggle');
	var navigation = document.getElementById('primary-navigation');

	if (!toggle || !navigation) {
		return;
	}

	toggle.addEventListener('click', function () {
		var expanded = toggle.getAttribute('aria-expanded') === 'true';
		toggle.setAttribute('aria-expanded', String(!expanded));
		navigation.classList.toggle('is-open', !expanded);
	});

	navigation.addEventListener('click', function (event) {
		if (event.target.closest('a') && window.matchMedia('(max-width: 760px)').matches) {
			toggle.setAttribute('aria-expanded', 'false');
			navigation.classList.remove('is-open');
		}
	});

	document.addEventListener('keydown', function (event) {
		if (event.key === 'Escape' && toggle.getAttribute('aria-expanded') === 'true') {
			toggle.setAttribute('aria-expanded', 'false');
			navigation.classList.remove('is-open');
			toggle.focus();
		}
	});
}());
