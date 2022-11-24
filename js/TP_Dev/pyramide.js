function pyramide(number) {
    for (let i = 1; i < number+1; i++) {
        let string = ""
        for (let j = 0; j < i; j++) {
            string += "*"
        }
        console.log(string)
    }
}

pyramide(4);