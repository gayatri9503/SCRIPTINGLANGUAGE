function tenMostFrequentWords() {
    const text = document.getElementById('inputText').value;
    const words = text.split(/\s+/);
    const wordCount = {};

    words.forEach(word => {
        word = word.toLowerCase().replace(/[^\w\s]/g, ''); // Remove punctuation
        wordCount[word] = (wordCount[word] || 0) + 1;
    });

    const sortedWords = Object.entries(wordCount).sort((a, b) => b[1] - a[1]);
    const mostFrequent = sortedWords.slice(0, 10).map(item => `${item[0]}: ${item[1]}`).join('<br>');
    
    document.getElementById('result26').innerHTML = mostFrequent;
}
