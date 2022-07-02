// Service page popup
const pop = document.querySelector('.pop');
const services = document.querySelector('.services')
const service_div = document.querySelectorAll('.services div');
const service_popup = document.querySelectorAll('.service-popup');
const service_icon = document.querySelectorAll('.service-popup icon');


// services.addEventListener('click', popup);


function popup() {
    if (service_div[0]){
        // remove hide class from pop
        pop.classList.remove('hide');

        // add hide class to saervice popup
        service_popup[1].classList.add('hide');
        service_popup[2].classList.add('hide');
        service_popup[3].classList.add('hide');
    } else if (service_div[1]) {
        // remove hide class from pop
        pop.classList.remove('hide');

        // add hide class to saervice popup
        service_popup[0].classList.add('hide');
        service_popup[2].classList.add('hide');
        service_popup[3].classList.add('hide');
    } else if (service_div[2]) {
        // remove hide class from pop
        pop.classList.remove('hide');

        // add hide class to saervice popup
        service_popup[1].classList.add('hide');
        service_popup[0].classList.add('hide');
        service_popup[3].classList.add('hide');
    } else if (service_div[3]) {
        // remove hide class from pop
        pop.classList.remove('hide');

        // add hide class to saervice popup
        service_popup[1].classList.add('hide');
        service_popup[2].classList.add('hide');
        service_popup[0].classList.add('hide');
    } else {
        // remove hide class from pop
        pop.classList.add('hide');

    }
}

// console.log(service_icon)



// Register Staff Popup 
const popupID = document.querySelector('.id-popup'); 
const sumbitID = document.querySelector('.submit-id');

sumbitID.addEventListener('click', popup_id);

function popup_id() {
    popupID.style = 'dislay: flex;';
}

// LOGOUT Popup
const logout = document .querySelector('#logout');

logout.addEventListener('click', logout_id);

function logout_id() {
    popupID.style = 'display: flex;';
}