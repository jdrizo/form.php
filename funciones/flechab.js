//FUNCIONESFLECHA
function sinParametros() {
    return 'Hola Mundo';
}
console.log(sinParametros());

var sinParam = () =>
    'Hola Mundo';
console.log('flecha' +
    sinParam());


function cuadrado(num) {
    return num * num;
}
console.log(cuadrado(10));

var r = num => num * num;
console.log('flecha:' + r(5));

function suma(n, m) {
    return n + m;
}
console.log(suma(10 + 20));

var sumar = (n, m) => n * m;
console.log('flecha' + sumar(20 + 30));

var vec = (array, tam) => {
    for (let i = 0; i < tam; i++) {
        array.push(Math.round(Math.random() * 100));
    }
    return array;
}
v = [];
x = 5;
console.log('flecha' + vec(v + x));
console.log('flecha=' + vec(v, x)[0]);

var sumapares = (vector) => {
    for (let i = 0; i < vector.length; i++) {
        if (vector[i] % 2 == 0) {
            suma += vec[i];
        }
    }
    return suma;
}