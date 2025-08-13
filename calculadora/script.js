document.addEventListener('DOMContentLoaded', () => {
    const audio = document.getElementById('audioFondo');
    audio.volume = 0.3; // Volumen bajo para que no sea molesto
    audio.play().catch(error => {
        console.log("La reproducción automática no está permitida. Por favor, interactúa con la página para activar el audio.");
    });

    const display = document.getElementById('display');
    const matrixBackground = document.querySelector('.matrix-background');
    
    // Generar el fondo de "código Matrix"
    const generateMatrix = () => {
        const text = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789@#$%^&*()_+{}[]|:;<,>.?/`~-';
        let backgroundContent = '';
        const viewportHeight = window.innerHeight;
        const viewportWidth = window.innerWidth;
        const charsPerRow = Math.floor(viewportWidth / 15); // Ajustar el tamaño de la letra
        const numRows = Math.floor(viewportHeight / 25);
        
        for (let i = 0; i < numRows; i++) {
            for (let j = 0; j < charsPerRow; j++) {
                backgroundContent += text.charAt(Math.floor(Math.random() * text.length));
            }
            backgroundContent += '\n';
        }
        matrixBackground.textContent = backgroundContent;
    };

    generateMatrix();
    setInterval(generateMatrix, 1000); // Regenera el fondo cada segundo para el efecto de movimiento
});

function appendToDisplay(value) {
    const display = document.getElementById('display');
    display.value += value;
}

function clearDisplay() {
    const display = document.getElementById('display');
    display.value = '';
}

function calculate() {
    const display = document.getElementById('display');
    try {
        // Usa eval() con precauciones
        display.value = eval(display.value.replace(/√/g, 'Math.sqrt'));
    } catch (e) {
        display.value = 'Error';
    }
}

function backspace() {
    const display = document.getElementById('display');
    display.value = display.value.slice(0, -1);
}