function manipulateDOM() {
    // Get the first paragraph by tag name
    const firstParagraph = document.querySelector('p');
    
    // Get each paragraph by ID
    const secondParagraph = document.querySelector('#para2');
    const thirdParagraph = document.querySelector('#para3');
    
    // Get all paragraphs as a node list
    const allParagraphs = document.querySelectorAll('p');
    
    // Loop through node list and log text content
    allParagraphs.forEach(para => {
        console.log(para.textContent);
    });
    
    // Change the text content of the fourth paragraph
    document.querySelector('#para4').textContent = 'Fourth Paragraph Changed';

    // Set id and class attributes
    allParagraphs.forEach(para => {
        para.setAttribute('class', 'paragraph');
    });
    
    // Change the style of each paragraph
    allParagraphs.forEach(para => {
        para.style.color = 'blue';
        para.style.fontSize = '20px';
    });
    
    // Change the color of paragraphs based on their position
    allParagraphs[0].style.color = 'green';
    allParagraphs[1].style.color = 'red';
    allParagraphs[2].style.color = 'green';
    allParagraphs[3].style.color = 'red';
}
