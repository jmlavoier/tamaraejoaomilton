import { autobound } from "es7-autobinder";

class Header {
	constructor() {
		this.header = $(".header");
		this.overlay = $('.fill');

		$(window).on("resize", this.initResponsiveHeader);

		this.initResponsiveHeader();

		console.info("init Header");
	} 

	@autobound
	initResponsiveHeader(){
		let screenWidth = screen.width;
		let windowWidth = $(window).width();
		let windowHeight = $(window).height();
		let backgroundWidth = windowWidth + (200 - (100 * windowWidth / screenWidth)) + 4 * Math.round((200 - (100 * windowWidth / screenWidth)));
		let opacity = 0.8 - (windowWidth / 2000) < 0 ? 0 : 0.8 - (windowWidth / 2000);
		let headerHeight = (560 * backgroundWidth / 875) > windowHeight ? windowHeight : 560 * backgroundWidth / 875; 

		this.overlay.css({
			opacity: opacity
		});

		console.log(backgroundWidth);

		this.header.css({
			height: `${headerHeight}px`
		});
		
		this.header.css({
			backgroundSize: `${backgroundWidth}px auto`
		});
	}
}

export default Header;