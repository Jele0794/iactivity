var ctx = $("#myChart").get(0).getContext("2d");
// This will get the first returned node in the jQuery collection.
var colorLibres = "#1a237e";
var highlightLibres = "#ffcc80";

var colorProduct = "#ffab40";
var highlightProduct = "#ffcc80";

var horas = (function(color_, highlight_) {
	var value="";
	var color = color_;
	var highlight = highlight_;
	return {
		setValue: function(_value) {
			if (_value < 25 && _value > -1) {
				value = _value;
			} else console.log("patata")
		},
		getValue: function(){
			return value;
		}
	}
});
var horasProduct = horas(colorProduct, highlightProduct);
var horasLibres = horas(colorLibres, highlightLibres);

horasProduct.setValue(87);
horasLibres.setValue(24-horasProduct.getValue());

var data = [{
	value: horasProduct.getValue(),
	color: "#ffab40",
	highlight: "#ffcc80",
	label: "Horas Productivas"
}, {
	value: horasLibres.getValue(),
	color: "#1a237e",
	highlight: "#5c6bc0",
	label: "Horas Libres"
}];

var myDoughnutChart = new Chart(ctx).Doughnut(data, {
	animationEasing: "easeInCubic"
});
