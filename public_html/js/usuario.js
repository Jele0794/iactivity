function hola() {
	nombre_ = $("#first-name").valueOf();
	apellidos_ = $("#last-name").valueOf();
	email_ = $("#email-reg").valueOf();
	password_ = $("#password-reg").valueOf();
	birthday_ = $("#birthday").valueOf();
	country_ = $("#country").valueOf();
	state_ = $("#state").valueOf();

	usuario1 = usuario();
	usuario1.setNombre(nombre_.val());
	usuario1.setApellidos(apellidos_.val());
	usuario1.setEmail(email_.val());
	usuario1.setPassword(password_.val());
	usuario1.setNacimiento(birthday_.val());
	usuario1.setPais(country_.val());
	usuario1.setEstado(state_.val());
	usuario1.setUniversidad($("#college").valueOf().val());
	usuario1.setCarrera($("#career").valueOf().val());
	usuario1=setSemestre($("#semester").valueOf().val());
	console.log(usuario1.getNombre());
	console.log(usuario1.getApellidos());
	console.log(usuario1.getEmail());
	console.log(usuario1.getNacimiento());
	console.log(usuario1.getPais());
	console.log(usuario1.getEstado());
	console.log(usuario1.getUniversidad());
	console.log(usuario1.getCarrera());
	console.log(usuario1.getSemestre());

}


var usuario = (function(_nombre, _apellidos, _email, _password, _nacimiento, _pais, _estado, _universidad, _carrera, _semestre) {

	var nombre = "";
	var apellidos = "";
	var email = "";
	var password = "";
	var nacimiento = ""
	var pais = "";
	var estado = "";
	var universidad = "";
	var carrera = "";
	var semestre = "";
	return {
		setNombre: function(_nombre) {
			nombre = _nombre;
		},
		setApellidos: function(_apellidos) {
			apellidos = _apellidos;
		},
		setEmail: function(_email) {
			email = _email;
		},
		setPassword: function(_password) {
			password = _password;
		},
		setNacimiento: function(_nacimiento) {
			nacimiento = _nacimiento;
		},
		setPais: function(_pais) {
			var mexico = ["méxico", "México", "mexico", "Mexico"];
			if ($.inArray(_pais, mexico) > -1) {
				pais = "México";
			} else alert("¡Lo sentimos! Servicio disponible temporalmente sólo en México")
		},
		setEstado: function(_estado) {
			var puebla = ["puebla", "Puebla"];
			if ($.inArray(_estado, puebla) > -1) {
				estado = "Puebla";
			} else alert("¡Lo sentimos! Servicio disponible temporalmente sólo en Puebla")
		},
		setUniversidad: function(_universidad) {
			universidad = _universidad;
		},
		setCarrera: function(_carrera) {
			carrera = _carrera;
		},
		setSemestre: function(_semestre) {
			if (_semestre < 12 && _semestre > 0) {
				semestre = _semestre;
			}
			Materialize.toast('Semestre debe de ser menor a 12', 3000);
		},
		getNombre: function() {
			return nombre;
		},
		getApellidos: function() {
			return apellidos;
		},
		getEmail: function(){
			return email;
		},
		getNacimiento: function(){
			return nacimiento;
		},
		getPais: function(){
			return pais;
		},
		getEstado: function(){
			return estado;
		},
		getUniversidad: function(){
			return universidad;
		},
		getCarrera: function(){
			return carrera;
		},
		getSemestre: function(){
			return semestre;
		}
	}


});
