const node = document.getElementById('sendContact');
 
node.addEventListener("click", event => {
        
    event.preventDefault()
    event.target.disabled = false;
    
})