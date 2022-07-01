const d=new Date();
function date() {
   document.getElementsById('date').innerHTML= d.getDay + d.getMonth + d.getFullYear;
}