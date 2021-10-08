function llenarVector(vector, tam) {
    for (let i = 0; i < tam; i++) {

        vector.push(Math.round(Math.random() * 100));
    }
    return vector;
}
let vec = new Array();
let x = 5;
console.log(llenarVector(vec, x));
console.log(vec[0]);
console.log('la suma de los pares es:' + sumapares(vec));

//hoisting
function sumapares(vector) {
    let = suma = 0;
    for (let i = 0; i < vector.length; i++) {
        if (vector[i] % 2 == 0) {
            suma += vec[i];
        }
    }
    return suma;
}
//console.log(math.round(math.random()));