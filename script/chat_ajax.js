const sendMessageForm = document.querySelector('#message_form')
console.log("hello JS"); 

//fonction reutilisable pour définir les paramètre de notre fetch 
function createFetchOptions (bodydata) { 
    return {
        method : 'POST' , 
        headers : {
            'Content-Type' : 'application/x-www-form-urlencoded'  //format URL
        },
        body: new URLSearchParams(bodydata) //encoder mon objet JS bodydata au format URL annoncé dans le headers pour que le PHP le comprenen
    }
}

sendMessageForm.addEventListener('submit' , (event) => {
    event.preventDefault(); 
    
    // cette partie recupere les donnée en lisant le formulaire html
    const inputs = event.target.querySelectorAll('input'); //donc la on prend tout les input htmml de notre sendMessageForm
    const formData = {}; 
    console.log(formData);
    for (let input of inputs) { 
        if (input.name) 
            formData[input.name] = input.value ;
    }
    console.log(formData);
    
    //cette partie s'occupe de renvoyer les donnée au php pour que le programme continue
    fetch('send_message.php', createFetchOptions(formData))
    .then (response => { return response.text() })  //transform le body de la reponse en text classique
    .then (data => {        
        console.log(data) //sucess = ok ou error = error name
    })
    
})