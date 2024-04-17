fetch('/sales-by-month')
            .then(response => response.json())
            .then(data => {
                const ctx = document.getElementById('salesChart').getContext('2d');

                // Función para obtener el nombre del mes a partir del número
                const getMonthName = (monthNumber) => {
                    const date = new Date();
                    date.setMonth(monthNumber - 1); // Los meses en JavaScript son base 0
                    return date.toLocaleString('es', {
                        month: 'long'
                    });
                };

                // Preparar los colores de las barras
                const backgroundColors = data.map((item, index) => {
                    if (index === 0) { // Para el primer elemento, asume verde porque no hay mes anterior con el que comparar
                        return 'rgba(24, 174, 0, 0.2)'; // Verde
                    } else {
                        // Si las ventas del mes actual son menores que el mes anterior, usa rojo
                        return item.total < data[index - 1].total ? 'rgba(249, 5, 5, 0.3)' : 'rgba(24, 174, 0, 0.3)';
                    }
                });

                // Preparar los colores de los bordes de las barras
                const borderColors = data.map((item, index) => {
                    if (index === 0) { // Para el primer elemento, asume verde porque no hay mes anterior con el que comparar
                        return 'rgba(24, 174, 0, 1)'; // Verde
                    } else {
                        // Si las ventas del mes actual son menores que el mes anterior, usa rojo
                        return item.total < data[index - 1].total ? 'rgba(249, 5, 5, 1' : 'rgba(24, 174, 0, 1)';
                    }
                });

                const salesChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: data.map(item => `${getMonthName(item.month)} ${item.year}`),
                        datasets: [{
                            data: data.map(item => item.total),
                            backgroundColor: backgroundColors, // Usa el array de colores
                            borderColor: borderColors, // Usa el array de colores
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        },
                        plugins: {
                            legend: {
                                display: false // Aquí se desactiva la leyenda
                            }
                        }
                    }
                });
            });


const ganancias = document.querySelectorAll('.ganancias');
const porcentajeCD = document.querySelectorAll('.porcentajeCD');


for(let i = 0; i<ganancias.length; i++){
    if(i == 0){
        porcentajeCD[0].classList.add('crecimiento');
        porcentajeCD[0].textContent = '0.00%';
    }

    else if(parseFloat(ganancias[i].innerText) < parseFloat(ganancias[i - 1].innerText)){
        porcentajeCD[i].classList.add('decrecimiento');
        porcentajeCD[i].textContent = calcularPorcentajeCD(parseFloat(ganancias[i].innerText), parseFloat(ganancias[i - 1].innerText)).toFixed(2) + '%';
    }

    else if(parseFloat(ganancias[i].innerText) > parseFloat(ganancias[i - 1].innerText)){
        porcentajeCD[i].classList.add('crecimiento');
        porcentajeCD[i].textContent = calcularPorcentajeCD(parseFloat(ganancias[i].innerText), parseFloat(ganancias[i - 1].innerText)).toFixed(2) + '%';
    }

}


function calcularPorcentajeCD(gananciasActual, gananciasAnterior){
    return (gananciasActual - gananciasAnterior) / gananciasAnterior * 100;
}




//Código para el carrusel

const carrusel = document.querySelector('.contenedor_meses');
const meses = document.querySelector('.mes');
const flechaIzquierda = document.getElementById('izquierda');
const flechaDerecha = document.getElementById('derecha');


// ? Event Listener para la flecha derecha

flechaDerecha.addEventListener('click', () =>  {
    carrusel.scrollLeft += 400;
    
})




// ? Event Listener para la flecha izquierda

flechaIzquierda.addEventListener('click', () =>  {
    carrusel.scrollLeft -= 400;
})


