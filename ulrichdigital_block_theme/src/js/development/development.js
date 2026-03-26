/* =============================================================== *\
   DEVELOPMENT: Mobile Menü dauerhaft offen
\* =============================================================== */
function initOpenMobileMenuDebug() {
	const body = document.body;
	const html = document.documentElement;

	function addClassesIfMissing() {
		const container = document.querySelector(
			".wp-block-navigation__responsive-container"
		);

		if (!container) {
			return;
		}

		container.classList.add("has-modal-open", "is-menu-open");
		body.classList.add("has-modal-open", "is-menu-open");
		html.classList.add("has-modal-open");
	}

	const observer = new MutationObserver(() => {
		addClassesIfMissing();
	});

	observer.observe(document.body, {
		childList: true,
		subtree: true,
	});

	addClassesIfMissing();
}

/* =============================================================== *\
   Initialisierung (nur bei Bedarf aktivieren)
\* =============================================================== */
document.addEventListener("DOMContentLoaded", () => {
	// initMissingTitleAttributes();
	// initOpenMobileMenuDebug();
});