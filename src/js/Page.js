import Responsiveness from "./components/Responsiveness";
import { autobound } from "es7-autobinder";

class Page {
	constructor(){
		this.header = new Responsiveness();

		this.elDays = $(".days").children(".n");
		this.elHours = $(".hours").children(".n");
		this.elMinutes = $(".minutes").children(".n");
		this.elSeconds = $(".seconds").children(".n");


		console.info("init Page");
		this.initCalcLeftTime();
	}

	initCalcLeftTime(){
		let target_date = new Date("2016-08-27T17:00:00-0300").getTime();

        setInterval(this.renderLeftTime, 1000, target_date);
	}

	@autobound
	renderLeftTime(target_date) {
		let current_date = new Date().getTime();
		let seconds_left = (target_date - current_date) / 1000;
		let days, hours, minutes, seconds;

		days = parseInt(seconds_left / 86400);
        seconds_left = seconds_left % 86400;
         
        hours = parseInt(seconds_left / 3600);
        seconds_left = seconds_left % 3600;
         
        minutes = parseInt(seconds_left / 60);
        seconds = parseInt(seconds_left % 60);

		this.elDays.html(days);
		this.elHours.html(hours);
		this.elMinutes.html(minutes);
		this.elSeconds.html(seconds);
	}
}

export default Page;