function moyenne(...notes) {
    let tab = [];
    for (let element of notes) {
        if (typeof(element) == "object") {
            tab.push(...element);
        } else {
            tab.push(element)
        }
    }
    let sum = tab.reduce((acc, element) => acc+element, 0);
    if (notes.length === 0) return -1;
    return sum/tab.length;
} 

let note1 = 20;
let note2 = 20;
let note3 = 15;

let array = [note1,note2, note3]

console.log(moyenne(array, 20))