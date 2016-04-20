import Menu from "./components/Menu";

class Page {
	constructor(){
		console.info("init Page()");
		this.menu = new Menu();
	}
}

export default Page;