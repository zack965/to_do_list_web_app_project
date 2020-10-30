
var modal = document.getElementById('id01');

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}


var MissForm = document.getElementById('missionCrudForm');

window.onclick = function(event) {
    if (event.target == MissForm) {
        modal.style.display = "none";
    }
}





document.getElementById("AddCategorie").addEventListener('click',function (){
    document.getElementById('id01').style.display='block';
    document.getElementById('Del01').style.display='none';
    document.getElementById('ModifyCat01').style.display='none';
    document.getElementById('DelMiss').style.display='none';
});
document.getElementById("DeleteCategorie").addEventListener('click',function (){
    document.getElementById('id01').style.display='none';
    document.getElementById('Del01').style.display='block';
    document.getElementById('ModifyCat01').style.display='none';
    document.getElementById('DelMiss').style.display='none';
});
document.getElementById("ModifyCategory").addEventListener('click',function (){
    document.getElementById('id01').style.display='none';
    document.getElementById('Del01').style.display='none';
    document.getElementById('DelMiss').style.display='none';
    document.getElementById('ModifyCat01').style.display='block';
});
document.getElementById("DelCategorie").addEventListener('click',function (){
    document.getElementById('id01').style.display='none';
    document.getElementById('Del01').style.display='none';
    document.getElementById('DelMiss').style.display='block';
    document.getElementById('ModifyCat01').style.display='none';
});