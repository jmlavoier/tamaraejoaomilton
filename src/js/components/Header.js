import { autobound } from "es7-autobinder";

class Header {
	constructor() {
		this.header = $(".header");

		$(window).on("resize", this.initResponsiveHeader);

		this.initResponsiveHeader();

		console.info("init Header");
	} 

	@autobound
	initResponsiveHeader(){
		let screenWidth = screen.width;
		let windowWidth = $(window).width();
		let backgroundWidth = windowWidth + (200 - (100 * windowWidth / screenWidth)) + 4 * Math.round((200 - (100 * windowWidth / screenWidth)));

		this.header.css({
			"background-size": `${backgroundWidth}px auto`
		});
	}
}

export default Header;