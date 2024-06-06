function formatarTelefone(event) {
    let inputTelefone = document.querySelector('#contato');
    let str = inputTelefone.value;
    let element = event.target;
    event.preventDefault();
    str = str.replace(/(\d{2})(\d{1})(\d{4})(\d{4})/, "($1) $2 $3-$4").trim();
    inputTelefone.value = str;
}

function videoYoutubeResponsivo(){
    let iframes = document.querySelectorAll('iframe');
    for (let i = 0; i < iframes.length; i++) {
        iframes[i].style.width = "100%";
    }
}

function verificandoLargura() {
    const navlink = document.querySelector('.nav-link');

    function ajustarVisibilidade() {
        if (window.innerWidth < 1000) {
            navlink.style.display = 'none';
        } else {
            navlink.style.display = 'block';
        }
    }

    // Adiciona um ouvinte de evento de redimensionamento à janela
    window.addEventListener('resize', ajustarVisibilidade);

    // Chama a função no carregamento da página para definir o estado inicial
    ajustarVisibilidade();
}

function mostrarMenu() {
    const navlink = document.querySelector('.nav-link');
    let display = navlink.style.display;

    if(display == 'none') {
        navlink.style.display = 'block';
    }
    else {
        navlink.style.display = 'none';
    }
}
