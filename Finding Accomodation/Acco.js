function give() {
	var cat1=LocalStorage.getItem("Category");
	document.getElementById("city").innerHTML=cat1;
}