let controlsNav = document.querySelector('nav');
let arrowsDisabled = false;


controlsNav.addEventListener(
	'click',
	function() {
		controlsNav.className = arrowsDisabled ? "arrows-enabled" : "arrows-disabled";
		// console.log("arrowsDisabled avant = ", arrowsDisabled);
		arrowsDisabled = !arrowsDisabled;
		// console.log("arrowsDisabled après = ", arrowsDisabled);
	},
	false
);