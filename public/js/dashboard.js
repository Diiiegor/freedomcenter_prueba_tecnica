async function actualizar_tabla() {
    const corral = document.getElementById('corral').value;
    const {animales} = await traer_animales(corral);
    let tabla = ``;
    animales.forEach(animal => {
        tabla += detalle_tabla(animal)
    });
    document.getElementById('animales_table').innerHTML = tabla;
}

async function traer_animales(corral) {
    const url = `/api/corral/${corral}/animales`;
    return await fetch(url).then(resp => resp.json());
}

function detalle_tabla(animal) {
    return `<tr>
                <td>${animal.id}</td>
                <td>${animal.nombre}</td>
                <td>${animal.edad}</td>
                <td>${animal.tipo_animal.nombre}</td>
            </tr>`;
}


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
        data: [
            ['Shanghai', 24.2],
            ['Beijing', 20.8],
            ['Karachi', 14.9],
            ['Shenzhen', 13.7],
            ['Guangzhou', 13.1],
            ['Istanbul', 12.7],
            ['Mumbai', 12.4],
            ['Moscow', 12.2],
            ['São Paulo', 12.0],
            ['Delhi', 11.7],
            ['Kinshasa', 11.5],
            ['Tianjin', 11.2],
            ['Lahore', 11.1],
            ['Jakarta', 10.6],
            ['Dongguan', 10.6],
            ['Lagos', 10.6],
            ['Bengaluru', 10.3],
            ['Seoul', 9.8],
            ['Foshan', 9.3],
            ['Tokyo', 9.3]
        ],


    }]
});

