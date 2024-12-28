addEventListener('load', runEvents, false);

function runEvents(){ 
    for(let i = 1; i <= 5; i++){
        let clients = document.getElementById('e' + i);
        clients.addEventListener('click', touchLink, false);
    }
}

function touchLink(e){
    e.preventDefault();

    let url = e.target.getAttribute('href');
    loadClient(url);
}

let xhr;
function loadClient(url){
    xhr = new XMLHttpRequest();
    xhr.open('GET', url, true);
    xhr.onreadystatechange = processEvent;
    xhr.send(); 
}

function processEvent(){ 
    let output = document.getElementById('informacion');
    
    if(xhr.readyState == 4){
        output.innerHTML = xhr.responseText;
    } else {
        output.innerHTML = 'Cargando....';
    }
}

/* Entre document.QuerySelector y getElementById conviene el segundo por mayor rendimiento */
