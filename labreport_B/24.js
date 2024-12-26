function createDogObject() {
    let dog = {};
    dog.name = "Buddy";
    dog.legs = 4;
    dog.color = "Brown";
    dog.age = 3;
    dog.bark = function() { return "Woof Woof"; };

    const dogInfo = `
        Name: ${dog.name}<br>
        Legs: ${dog.legs}<br>
        Color: ${dog.color}<br>
        Age: ${dog.age}<br>
        Bark: ${dog.bark()}<br>
    `;

    dog.breed = "Labrador";
    dog.getDogInfo = function() {
        return `Breed: ${this.breed}`;
    };

    document.getElementById('result24').innerHTML = dogInfo + "Breed: " + dog.breed;
}
