document.addEventListener("DOMContentLoaded", function () {
    document.querySelector("button").addEventListener("click", changeStyle);
});

function changeStyle() {
    let rgbInput = document.getElementById("rgb").value.trim();
    let border = document.getElementById("border").value;
    let text = document.getElementById("text");

    // Validate and convert RGB input
    let rgbArray = rgbInput.split(",").map(num => parseInt(num.trim()));

    if (rgbArray.length !== 3 || rgbArray.some(num => isNaN(num) || num < 0 || num > 255)) {
        alert("Please enter a valid RGB format (e.g., 255,0,0).");
        return;
    }

    // Convert border input to a number
    let borderWidth = parseInt(border);
    if (isNaN(borderWidth) || borderWidth < 0) {
        alert("Please enter a valid border width (positive number).");
        return;
    }

    // Apply styles
    text.style.color = `rgb(${rgbArray[0]}, ${rgbArray[1]}, ${rgbArray[2]})`;
    text.style.border = `${borderWidth}px solid black`;
}
