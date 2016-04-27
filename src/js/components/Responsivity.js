import { autobound } from "es7-autobinder";

class Responsivity {
	constructor() {
		this.header = $(".header");
		this.overlay = $('.fill');
		this.page = $('.page');
		this.container = $('.container');
		

		$(window).on("resize", this.initResponsiveHeader);
		$(window).on("scroll", this.initScrollEffects);

		this.initResponsiveHeader();
		this.initScrollEffects();

		console.info("init Responsivity");
	} 

	@autobound
	initResponsiveHeader(){
		this.screenWidth = screen.width;
		this.windowWidth = $(window).width();
		this.windowHeight = $(window).height();
		this.backgroundWidth = this.windowWidth + (200 - (100 * this.windowWidth / this.screenWidth)) + 4 * Math.round((200 - (100 * this.windowWidth / this.screenWidth)));
		this.opacity = 0.8 - (this.windowWidth / 2000) < 0 ? 0 : 0.8 - (this.windowWidth / 2000);
		this.headerHeight = (560 * this.backgroundWidth / 875) > this.windowHeight ? this.windowHeight : 560 * this.backgroundWidth / 875; 

		this.overlay.css({
			opacity: this.opacity
		});

		if (this.windowWidth > 800) {
			this.page.css({
				minHeight: `${this.headerHeight}px`
			});
		} else {
			this.page.css({
				height: 'auto'
			});
		}

		this.container.css({
			marginTop: `${this.headerHeight}px`
		})

		this.header.css({
			height: `${this.headerHeight}px`
		});
		
		this.header.css({
			backgroundSize: `${this.backgroundWidth}px auto`
		});
	}

	@autobound
	initScrollEffects(){
		let scrollTop = $(window).scrollTop();
		let calc = this.opacity + scrollTop / this.windowHeight;

		this.header.css({
			backgroundPositionY: `${0 - scrollTop / 20}px`,
			backgroundPositionX: `${50 + scrollTop / 70}%`
		});

		this.overlay.css({
			opacity:  calc > 1 ? 1 : calc
		})

	}
}

export default Responsivity;