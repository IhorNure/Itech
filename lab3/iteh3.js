const matrix = [...Array(10)].map(e => Array(10));;
let min = 0;
let max = 20;

const generateTable = () => {
    fillMatrix();
    const element = document.getElementsByClassName("container")[0];
    element.innerHTML = '';
    for(let i = 0; i < matrix.length; i++) {
        for(let j = 0; j < matrix[i].length; j++) {
           element.appendChild(matrix[i][j]);
        }
    }
}

const fillMatrix = () => {
    for(let i = 0; i < matrix.length; i++) {
        const row = document.createElement("div");
        row.className = "row";
        for(let j = 0; j < matrix[i].length; j++) {
            const randomNumber = Math.round(Math.random() * (max - min)) + min;
            const element = document.createElement("div");
            element.className = "cell";
            element.innerText = randomNumber;
            row.appendChild(element)
            matrix[i][j] = row;
        }
    }
}

const knopka = () => {
    const minValue = document.getElementsByClassName("nach")[0].value;
    const maxValue = document.getElementsByClassName("kon")[0].value;
    min = parseInt(minValue);
    max = parseInt(maxValue);
    generateTable()
}

document.addEventListener("DOMContentLoaded", generateTable);
