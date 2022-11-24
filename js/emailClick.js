const nodeEmail = document.getElementById("email");
nodeEmail.addEventListener("change", event => {
    let value = event.target.value

    if (!value.includes("@")) {

        const text = document.createElement("p")

        //pNode.appendChild(text)
        text.innerHTML = "Veuillez insérer une adresse mail Valide"
        text.style.display = "block"
        text.style.color = "red"

        //console.log(pNode.style)
        
        const nodeForm = document.getElementById("form");
        nodeForm.appendChild(text)
        document.body.insertAdjacentElement(nodeEmail, text)
    }
    console.log(value.includes("@"))
})