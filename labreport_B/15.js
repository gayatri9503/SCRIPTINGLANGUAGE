function displayColors() {
    const colors = ["Blue", "Green", "Red", "Orange", "Violet", "Indigo", "Yellow"];
    const ordinals = ["st", "nd", "rd", "th", "th", "th", "th"];
    let result = "";
    for (let i = 0; i < colors.length; i++) {
        result += `${i + 1}${ordinals[i]} choice is ${colors[i]}.<br>`;
    }
    document.getElementById('result15').innerHTML = result;
}
