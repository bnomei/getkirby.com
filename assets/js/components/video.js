export default class {
	constructor() {
		document.querySelectorAll(".video-embed > a").forEach((element) => {
			element.addEventListener("click", this.click);
		});
	}

	click(e) {
		e.preventDefault();
		e.currentTarget.parentElement.innerHTML = e.currentTarget.dataset.iframe;
	}
}
