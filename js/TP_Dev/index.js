let user = {
    prenom: "Moro",
    nom: "BLBL",
    age: 19
};

let array = [user];
array.push({prenom: "Test2", nom: "Test2", age: 18})

function toString(user) {
    let string = "";
    string += user.prenom + " ";
    string += user.nom + " ";
    string += user.age+ " ";
    return string;
}

function arrayInfo(tab) {
    let string;
    for (let user of tab) {
        string = "";
        string += user.prenom + " ";
        string += user.nom + " ";
        string += user.age+ " ";
        console.log(string);
    }
}

console.log(toString(user)+ "\n")

arrayInfo(array)
