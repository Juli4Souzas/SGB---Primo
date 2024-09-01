searchForm = document.querySelector('.search-formm');

document.querySelector('#search-btn').onclick = () =>{
    searchForm.classList.toggle('active');
}

let loginForm = document.querySelector('.login-form-container');

document.querySelector('#login-btn').onclick = () =>{
    loginForm.classList.toggle('active');
}

document.querySelector('#close-login-btnn').onclick = () =>{
    loginForm.classList.remove('active');
}

window.onscroll = () =>{

    searchForm.classList.remove('active');

    if(window.scrollY > 80){
        document.querySelector('.headerr .headerr-2').classList.add('active');
    }
    else{
        document.querySelector('.headerr .headerr-2').classList.remove('active');
    }
}

window.onscroll = () =>{
    if(window.scrollY > 80){
        document.querySelector('.headerr .headerr-2').classList.add('active');
    }
    else{
        document.querySelector('.headerr .headerr-2').classList.remove('active');
    }
}

