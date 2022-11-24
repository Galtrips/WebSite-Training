class Aliment {
    constructor(name, type, price) {
        this.nom = name;
        this.type = type;
        this.prix = price;
    }
}

class Panier {
    constructor(){
        this.panier = [];
    }

    add(...Aliment) {
        for (let one of Aliment) {
            this.panier.push(one);
        }
        return true;
    }

    get() {
        return this.panier;
    }

    size() {
        return this.panier.length;
    }

    remove(name) {
        let index = this.panier.indexOf(this.panier.find(element => element.nom === name));
        this.panier.splice(index, 1);
    }

    getFromType(typeSearch) {
        return this.panier.filter(element => {
            let {nom, type} = element;
            if (typeSearch === type) {
                return nom;
            }
        })
    }

    getPrice(name) {
        let aliment = this.panier.find(element => element.nom === name);
        if (!aliment) return 0;
        return aliment.prix;
    }

    getSum() {
        let sum = this.panier.reduce((acc, element) => acc+element.prix, 0);
        if (!sum) return 0;
        return sum;
    }
}

const panier = new Panier()
panier.add(
    new Aliment("pomme", "fruit", 15),
    new Aliment("poire", "fruit", 4),
    new Aliment("peche", "fruit", 6),
    new Aliment("abricot", "fruit", 9),
    new Aliment("concombre", "legume", 33),
    new Aliment("courgette", "legume", 22),
    new Aliment("salade", "legume",11)
);

console.log(panier.get());
panier.remove("peche");
console.log(panier.get());

console.log(panier.getFromType("fruit"));
console.log(panier.getPrice("pomme"));
console.log(panier.getSum());