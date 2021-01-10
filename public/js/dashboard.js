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
                <td>${animal.id}</td>
            </tr>`;
}


