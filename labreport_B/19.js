function calculateAge() {
    const birthdate = new Date(document.getElementById('birthdate').value);
    const today = new Date();
    const age = today.getFullYear() - birthdate.getFullYear();
    const monthDiff = today.getMonth() - birthdate.getMonth();
    const dayDiff = today.getDate() - birthdate.getDate();

    let finalAge = age;
    if (monthDiff < 0 || (monthDiff === 0 && dayDiff < 0)) {
        finalAge--;
    }
    document.getElementById('result19').innerText = `Age: ${finalAge} years`;
}
