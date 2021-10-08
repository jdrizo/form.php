class persona {
    constructor(nombre, apellido) {
        this._nombre = nombre;
        this._apellido = apellido;
    }
    set nombre(nombre) {
        this._nombre = nombre;
    }
    get nombre() {
        return this._nombre;
    }
    set apellido(apellido) {
        this._apellido = apellido;
    }
    get apellido() {
        return this._apellido;
    }
    nombrecompleto() {
        return this._nombre + '' + this._apellido;
    }
}

class Aprendiz extends persona {
    constructor(nombre, apellido, programa, ficha) {
        super(nombre, apellido);
        this._programa = programa;
        this._ficha = ficha;
    }
    set programa(Programa) {
        this._programa = programa;
    }
    get programa() {
        return this._programa;
    }
    set ficha(ficha) {
        this._ficha = ficha;
        programa;
    }
    get ficha() {
        return this._ficha;
    }
}
var ap = new Aprendiz('Laura', 'quevedo', 'ADSI', 215468);
console.log(ap);

var obj = new persona('Pepito', 'Perez');
obj.nombre = 'Roberto';
console.log(obj.nombre);
console.log(obj.nombrecompleto());