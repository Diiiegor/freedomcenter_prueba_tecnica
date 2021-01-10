async function actualizar_tabla() {
    const corral = document.getElementById('corral').value;
    const {animales} = await traer_animales(corral);
    let tabla = ``;
    animales.forEach(animal => {
        tabla += detalle_tabla(animal)
    });
    document.getElementById('animales_table').innerHTML = tabla;
}

function traer_animales(corral) {
    const url = `/api/corral/${corral}/animales`;
    return fetch(url).then(resp => resp.json());
}

function detalle_tabla(animal) {
    return `<tr>
                <td>${animal.id}</td>
                <td>${animal.nombre}</td>
                <td>${animal.edad}</td>
                <td>${animal.tipo_animal.nombre}</td>
            </tr>`;
}

crear_grafica();


function traer_corrales() {
    const url = `/api/corral-all`;
    return fetch(url).then(resp => resp.json());
}

async function crear_grafica() {
    const corrales = await traer_corrales();
    const data = corrales.map(corral => [corral.nombre, Number(corral.animales.length)]);
    Highcharts.chart('container', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Cantidad de animales por corral'
        },
        xAxis: {
            type: 'category',
            labels: {
                rotation: -45,
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        },
        series: [{
            name: 'Animales',
            data: data,


        }]
    });

}
