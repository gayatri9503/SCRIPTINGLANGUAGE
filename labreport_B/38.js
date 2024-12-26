const paragraph = document.getElementById('text');
let fontSize = 12;

function changeBackground() {
    document.body.style.backgroundColor = 'lightblue';
}

function changeParagraphBackground() {
    paragraph.style.backgroundColor = 'yellow';
}

function hideParagraph() {
    paragraph.style.display = 'none';
}

function showParagraph() {
    paragraph.style.display = 'block';
}

function increaseFontSize() {
    fontSize += 2;
    paragraph.style.fontSize = `${fontSize}px`; // Corrected syntax with backticks
}

function decreaseFontSize() {
    fontSize -= 2;
    paragraph.style.fontSize = `${fontSize}px`; // Corrected syntax with backticks
}

function resetFontSize() {
    fontSize = 12;
    paragraph.style.fontSize = `${fontSize}px`; // Corrected syntax with backticks
}

function changeTextColor() {
    paragraph.style.color = 'red';
}
