import $ from "jquery";
import Page from "./Page";

class Main {
	constructor(){
		console.info("init Main()");
		new Page();
	}
}

new Main();