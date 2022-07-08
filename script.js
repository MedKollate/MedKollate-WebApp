// Service page popup
const pop = document.querySelector('.pop');
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