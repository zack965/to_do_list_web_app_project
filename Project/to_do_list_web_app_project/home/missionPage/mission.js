function start(){
    document.getElementById("Tuday missions").style.display='block';
    document.getElementById("missions Past").style.display='none';
    document.getElementById("Future missions").style.display='none';
    document.getElementById("missions complete successfuly").style.display='none';
    document.getElementById("missions failled").style.display='none';
    document.getElementById("mission-form").style.display='none';
    document.getElementById("all missions").style.display='none';
};
start();

function toForm(){
    document.getElementById('Tuday missions').style.display='none';
    document.getElementById('missions Past').style.display='none';
    document.getElementById('Future missions').style.display='none';
    document.getElementById('missions complete successfuly').style.display='none';
    document.getElementById('missions failled').style.display='none';
    document.getElementById('mission-form').style.display='block';
    document.getElementById('all missions').style.display='none';

    // set first
    document.getElementById("mission-difficulty").value = 0;
    //var diffvalue = parseInt(difficulty.value);
    document.getElementById("demo-difficulty").innerHTML = 0 + "    " +"difficulty   is   None";
    document.getElementById("demo-difficulty").style.color='darkgrey';

    // set two
    document.getElementById("mission-urgency").value=0;
    document.getElementById("demo-urgency").innerHTML= 0  +"     " + "urgency    is None";
    document.getElementById("demo-urgency").style.color='darkgrey';

    // set three
    document.getElementById("mission-fear").value = 0;
    document.getElementById("demo-fear").innerHTML= 0  +"     " + "fear    is None";
    document.getElementById("demo-fear").style.color='darkgrey';

    // set foor
    //document.getElementById("mission-id").value = 0;

    // set five
    document.getElementById("mission-name").value = "";

    // set sex
    document.getElementById("mission-description").value = "";

    // set seven
    document.getElementById("mission-date-start").value = Date.now();

    // set seven
    document.getElementById("mission-date-end").value = Date.now();

    // set nine
    document.getElementById("mission-points").value = 0;    

};
document.getElementById("i2").addEventListener('click',() =>{
    document.getElementById("Tuday missions").style.display='block';
    document.getElementById("missions Past").style.display='none';
    document.getElementById("Future missions").style.display='none';
    document.getElementById("missions complete successfuly").style.display='none';
    document.getElementById("missions failled").style.display='none';
    document.getElementById("mission-form").style.display='none';
    document.getElementById("all missions").style.display='none';

});
document.getElementById("i3").addEventListener('click',() =>{
    document.getElementById("Tuday missions").style.display='none';
    document.getElementById("missions Past").style.display='block';
    document.getElementById("Future missions").style.display='none';
    document.getElementById("missions complete successfuly").style.display='none';
    document.getElementById("missions failled").style.display='none';
    document.getElementById("mission-form").style.display='none';
    document.getElementById("all missions").style.display='none';

});
document.getElementById("i4").addEventListener('click',() =>{
    document.getElementById("Tuday missions").style.display='none';
    document.getElementById("missions Past").style.display='none';
    document.getElementById("Future missions").style.display='block';
    document.getElementById("missions complete successfuly").style.display='none';
    document.getElementById("missions failled").style.display='none';
    document.getElementById("mission-form").style.display='none';
    document.getElementById("all missions").style.display='none';

});
document.getElementById("i5").addEventListener('click',() =>{
    document.getElementById("Tuday missions").style.display='none';
    document.getElementById("missions Past").style.display='none';
    document.getElementById("Future missions").style.display='none';
    document.getElementById("missions complete successfuly").style.display='block';
    document.getElementById("missions failled").style.display='none';
    document.getElementById("mission-form").style.display='none';
    document.getElementById("all missions").style.display='none';

});
document.getElementById("i6").addEventListener('click',() =>{
    document.getElementById("Tuday missions").style.display='none';
    document.getElementById("missions Past").style.display='none';
    document.getElementById("Future missions").style.display='none';
    document.getElementById("missions complete successfuly").style.display='none';
    document.getElementById("missions failled").style.display='block';
    document.getElementById("mission-form").style.display='none';
    document.getElementById("all missions").style.display='none';

});
document.getElementById("i7").addEventListener('click',() =>{
    document.getElementById("Tuday missions").style.display='none';
    document.getElementById("missions Past").style.display='none';
    document.getElementById("Future missions").style.display='none';
    document.getElementById("missions complete successfuly").style.display='none';
    document.getElementById("missions failled").style.display='none';
    document.getElementById("mission-form").style.display='block';
    document.getElementById("all missions").style.display='none';

});
document.getElementById("i8").addEventListener('click',() =>{
    document.getElementById("Tuday missions").style.display='none';
    document.getElementById("missions Past").style.display='none';
    document.getElementById("Future missions").style.display='none';
    document.getElementById("missions complete successfuly").style.display='none';
    document.getElementById("missions failled").style.display='none';
    document.getElementById("mission-form").style.display='none';
    document.getElementById("all missions").style.display='block';
});
//    document.getElementById("all missions").style.display='none';
document.getElementById("addMission").addEventListener('click',()=>{
    document.getElementById("Tuday missions").style.display='none';
    document.getElementById("missions Past").style.display='none';
    document.getElementById("Future missions").style.display='none';
    document.getElementById("missions complete successfuly").style.display='none';
    document.getElementById("missions failled").style.display='none';
    document.getElementById("mission-form").style.display='block';
    document.getElementById("mission-form").style.display='block';
    document.getElementById("all missions").style.display='none';

});
var difficulty = document.getElementById("mission-difficulty");
var urgeecy = document.getElementById("mission-urgency");
var fear = document.getElementById("mission-fear");
var missId = document.getElementById("mission-id");
var name = document.getElementById("mission-name");
var description = document.getElementById("mission-description");
var Points = document.getElementById("mission-points");
// set all to zero
setTimeout(()=>{
    difficulty.value=0;
    //console.log(typeof(difficulty.value))
    urgeecy.value=0;
    fear.value=0;
    Points.value=0;
},2000)
let ArrDifficulty = [];
let ArrUrgency = [];
let ArrFear = [];
let ArrId = [];
let ArrName = [];
let ArrDescription = [];
let ArrDateStart = [];
let ArrDateEnd = [];
let ArrPoints = [];
let ArrElementCreated = [];
let counterId = 0;
    


function checkgo(){
    var xx = document.getElementById("id_mission");
    let xxnumber = parseInt(xx.value);
    console.log(typeof(xxnumber));
    console.log(xxnumber);
    if(isNaN(xxnumber) == true){
        //alert("hhhh");
        document.getElementById("id_go").disabled  = true;
        //return false;
    }else{
        document.getElementById("id_go").disabled  = false;
    }
    

}

//document.getElementsByTagName
//document.getElementsByClassName
checkgo();
function RedOrGreen(){
    var tbl = document.getElementsByClassName('ttable'); //newtable
    console.log(tbl);
    var y;
    //alert(tbl.length);
    for(y = 0; y<tbl.length;y++){
        console.log("---------------------------------");
        console.log(tbl[y]);
        console.log(tbl[y].rows.length);
        for(i=0;i<tbl[y].rows.length;i++){
            console.log(tbl[y].rows[i].cells[1].innerHTML);
            // x1 = isdone
            // x2 = isFaliied
            var x1 = tbl[y].rows[i].cells[9].innerHTML;
            var x2 = tbl[y].rows[i].cells[10].innerHTML;
            if(x1 == 1 ){
                console.log(x1);
                console.log("is zero");
                //x1.style.color="red";

                tbl[y].rows[i].style.backgroundColor="green";
                //tbl[y].rows[i].style.color="white";
                tbl[y].rows[i].cells[0].style.color="white";
                tbl[y].rows[i].cells[1].style.color="white";
                tbl[y].rows[i].cells[2].style.color="white";
                tbl[y].rows[i].cells[3].style.color="white";
                tbl[y].rows[i].cells[4].style.color="white";
                tbl[y].rows[i].cells[5].style.color="white";
                tbl[y].rows[i].cells[6].style.color="white";
                tbl[y].rows[i].cells[7].style.color="white";
                tbl[y].rows[i].cells[8].style.color="white";
                tbl[y].rows[i].cells[9].style.color="white";
                tbl[y].rows[i].cells[10].style.color="white";


            }else if(x2 == 1) {
                console.log(x1);
                console.log("is one");
                tbl[y].rows[i].style.backgroundColor="red";
                /*let cell;
                for(cell = 0 ; cell = 10 ; cell++){
                    tbl[y].rows[i].cells[cell].style.color="white";
                }*/
                tbl[y].rows[i].cells[0].style.color="white";
                tbl[y].rows[i].cells[1].style.color="white";
                tbl[y].rows[i].cells[2].style.color="white";
                tbl[y].rows[i].cells[3].style.color="white";
                tbl[y].rows[i].cells[4].style.color="white";
                tbl[y].rows[i].cells[5].style.color="white";
                tbl[y].rows[i].cells[6].style.color="white";
                tbl[y].rows[i].cells[7].style.color="white";
                tbl[y].rows[i].cells[8].style.color="white";
                tbl[y].rows[i].cells[9].style.color="white";
                tbl[y].rows[i].cells[10].style.color="white";
            }
        }
        console.log("---------------------------------");

        //var tblen = tbl.rows[1].cells.length; //length        innerHTML
        //var tblen = tbl.cells.rows[1].length; //length        innerHTML
        //var tblen = tbl.rows[1].cells.length;
        //var xr = tbl.rows[0].cells[1].innerHTML;



        var tblen = tbl[y].rows.length;
        
        console.log(tblen);
        for(i=1;i<tblen;i++){
            console.log(tbl[y].rows[i].innerHTML);
        }

    }

    
    
}
RedOrGreen();

function create(){
    
    var difficulty = document.getElementById("mission-difficulty");
    var urgeecy = document.getElementById("mission-urgency");
    var fear = document.getElementById("mission-fear");
    var missId = document.getElementById("mission-id");
    var name = document.getElementById("mission-name");
    var description = document.getElementById("mission-description");
    var Points = document.getElementById("mission-points");
   

  
            var namev1 = document.getElementById("mission-name").value;
            /*
            if(namev1 == ""){
                alert('entrez le nom de cette mission');
                return false;
                alert('zack');
            }
            */



            // create p of  description
            /*
            var descv1 = description.value;
            if(descv1 == ""){
                alert('entrez la description de cette mission');
                return false;
                alert('zack');
            }
            */

           


          
            var diffvalue = parseInt(difficulty.value);
            /*
            if(isNaN(diffvalue) == true){
                alert('Please set the difficultyy value');
                return false;
                alert('zack');
            }
            */

           
            console.log(typeof(diffvalue));
            // test
           
            if(diffvalue >=0 && diffvalue <= 100){
                console.log(diffvalue);
                
                
                if(diffvalue==0){
                    document.getElementById("demo-difficulty").innerHTML = diffvalue + "    " +"difficulty   is   None";
                    document.getElementById("demo-difficulty").style.color='darkgrey';
                    p1cdd2.innerHTML =diffvalue + "    " +"difficulty  is  None";
                    p1cdd2.style.color='darkgrey';
                
                }
                else if(diffvalue>=0 && diffvalue <=25){
                    document.getElementById("demo-difficulty").innerHTML = diffvalue + "     " +" difficulty   is  Low";
                    document.getElementById("demo-difficulty").style.color='#ff3838';
                    p1cdd2.innerHTML = diffvalue + "    " +"difficulty   is  Low";
                    p1cdd2.style.color='#ff3838';
                }
                else if(diffvalue>=26 && diffvalue <=50){
                    document.getElementById("demo-difficulty").innerHTML = diffvalue + "     " +"difficulty   is    Medium";
                    document.getElementById("demo-difficulty").style.color='#1dd1a1';
                    p1cdd2.innerHTML = diffvalue + "      " +"difficulty   is   Medium";
                    p1cdd2.style.color='#1dd1a1';
                }
                else if(diffvalue>=51 && diffvalue <=75){
                    document.getElementById("demo-difficulty").innerHTML = diffvalue + "      " +"difficulty   is   Hight";
                    document.getElementById("demo-difficulty").style.color='#34ace0';
                    p1cdd2.innerHTML = diffvalue + "     " +"difficulty   is   Hight";
                    p1cdd2.style.color='#34ace0';
                    
                }
                else if(diffvalue>=76 && diffvalue <=100){
                    document.getElementById("demo-difficulty").innerHTML = diffvalue + "     " +"difficulty  is  Exterme";
                    document.getElementById("demo-difficulty").style.color='#c56cf0';
                    p1cdd2.innerHTML = diffvalue + "     " +"difficulty    is   Exterme";
                    p1cdd2.style.color='#c56cf0';
                }
                
            }else 
            {
                /*alert(diffvalue +" is a wrong value : difficulty schould be between 0 and 100");
                console.log(diffvalue);
                return false;
                document.getElementById("mission-difficulty").value =1;
                */
            }
            // create the urgency p
            var urgencyvall = parseInt(urgeecy.value);
            /*
            if(isNaN(urgencyvall) == true){
                alert('Please set the urgeecy value');
                return false;
                alert('zack');
            }
            */

            if(urgencyvall >=0 && urgencyvall <= 100){
                console.log(urgencyvall);

                

                if(urgencyvall==0){
                    document.getElementById("demo-urgency").innerHTML= urgencyvall  +"     " + "urgency    is None";
                    document.getElementById("demo-urgency").style.color='darkgrey';
                    p2cdd2.innerHTML=urgencyvall  +"     " + "urgency  is None";
                    p2cdd2.style.color='darkgrey';
                }
                else if(urgencyvall>=0 && urgencyvall <=25){
                    document.getElementById("demo-urgency").innerHTML=urgencyvall + "    " +"urgency  Low";
                    document.getElementById("demo-urgency").style.color='#ff3838';
                    p2cdd2.innerHTML=urgencyvall  +"     " + "urgency  is Low";
                    p2cdd2.style.color='#ff3838';
                }
                else if(urgencyvall>=26 && urgencyvall <=50){
                    document.getElementById("demo-urgency").innerHTML=urgencyvall + "    " +"urgency  Medium";
                    document.getElementById("demo-urgency").style.color='#1dd1a1';
                    p2cdd2.innerHTML=urgencyvall  +"    " + "urgency   is Medium";
                    p2cdd2.style.color='#1dd1a1';
                }
                else if(urgencyvall>=51 && urgencyvall <=75){
                    document.getElementById("demo-urgency").innerHTML=urgencyvall  +"    " + "urgency   is Hight";
                    document.getElementById("demo-urgency").style.color='#34ace0';
                    p2cdd2.innerHTML=urgencyvall  +"  " + "urgency   is   Hight";
                    p2cdd2.style.color='#34ace0';
                }
                else if(urgencyvall>=76 && urgencyvall <=100){
                    document.getElementById("demo-urgency").innerHTML=urgencyvall  +"    " + "urgency   is Exterme";
                    document.getElementById("demo-urgency").style.color='#c56cf0';
                    p2cdd2.innerHTML=urgencyvall +"  " + "urgency   is   Exterme";
                    p2cdd2.style.color='#c56cf0';
                }
            }else{
                alert(urgencyvall +" is a wrong value : urgeecy schould be between 0 and 100");
                console.log(urgencyvall);
                return false;
                document.getElementById("mission-difficulty").value =1;
            }
            // create fear p
            var fearvall = parseInt(fear.value);
            /*
            if(isNaN(fearvall) == true){
                alert('Please set the fear value');
                return false;
                alert('zack');
            }
            */
            
            if(fearvall >=0 && fearvall <= 100){
                console.log(fearvall);
            
                
                if(fearvall==0){
                    document.getElementById("demo-fear").innerHTML= fearvall  +"     " + "fear    is None";
                    document.getElementById("demo-fear").style.color='darkgrey';
                    p3cdd2.innerHTML=fearvall  +"     " + "fear  is None";
                    p3cdd2.style.color='darkgrey';
                }
                else if(fearvall>=0 && fearvall <=25){
                    document.getElementById("demo-fear").innerHTML=fearvall + "    " +"fear  Low";
                    document.getElementById("demo-fear").style.color='#ff3838';
                    p3cdd2.innerHTML=fearvall  +"     " + "fear  is Low";
                    p3cdd2.style.color='#ff3838';
                }
                else if(fearvall>=26 && fearvall <=50){
                    document.getElementById("demo-fear").innerHTML=fearvall + "    " +"fear  Medium";
                    document.getElementById("demo-fear").style.color='#1dd1a1';
                    p3cdd2.innerHTML=fearvall  +"    " + "fear   is Medium";
                    p3cdd2.style.color='#1dd1a1';
                }
                else if(fearvall>=51 && fearvall <=75){
                    document.getElementById("demo-fear").innerHTML=fearvall  +"    " + "fear   is Hight";
                    document.getElementById("demo-fear").style.color='#34ace0';
                    p3cdd2.innerHTML=fearvall  +"  " + "fear   is   Hight";
                    p3cdd2.style.color='#34ace0';
                }
                else if(fearvall>=76 && fearvall <=100){
                    document.getElementById("demo-fear").innerHTML=fearvall  +"    " + "fear   is Exterme";
                    document.getElementById("demo-fear").style.color='#c56cf0';
                    p3cdd2.innerHTML=fearvall +"  " + "fear   is   Exterme";
                    p3cdd2.style.color='#c56cf0';
                }
            }else{
                alert(fearvall +" is a wrong value : urgeecy schould be between 0 and 100");
                console.log(fearvall);
                return false;
                document.getElementById("mission-difficulty").value =1;
            }
            
      

            // create the p of start time                 
            var datex = new Date();
            var dateStart = new Date(document.getElementById("mission-date-start").value); 
            var n1 =  dateStart.valueOf();
            console.log(dateStart);
            console.log(datex);
            if(isNaN(n1) == true){
                alert('entrez la date de debut de cette mission');
                return false;
            }
     
            if(dateStart < datex && dateStart.getHours() > datex.getHours() && dateStart.getMinutes() > datex.getMinutes() && dateStart.getSeconds() > datex.getSeconds() && dateStart.getMilliseconds() > datex.getMilliseconds()){
                alert( dateStart + "\n" +"incorrect date");
            }

            // get the start date formated yyyy-mm-dd
            var dateStartFormated = document.getElementById("mission-date-start").value;




            // create the p of end time
            var dateEnd = new Date(document.getElementById("mission-date-end").value);
            var n2 = dateEnd.valueOf();
            if(isNaN(n2) == true){
                alert('entrez la date de debut de cette mission');
                return false;
            }
   
            if( dateStart > dateEnd){
                alert( dateEnd  + "\n" +"incorrect date");
            }

            // get the end  date formated yyyy-mm-dd
            var dateEndFormated = document.getElementById("mission-date-end").value;

        
            // create the point p
            var Pointsvall = parseInt(Points.value);
            if(isNaN(Pointsvall) == true){
                alert('Please set the point  value');
                return false;
                alert('zack');
            }
            if(Pointsvall == 0){
                alert("any mission schould have a score and it can't equal zero " );
                return false;
            }

            
        

    
    /*
    
    var ddx = new Date();

    if(dateStart.getDate() == ddx.getDate() + 1 && dateStart.getMonth() == ddx.getMonth() && dateStart.getFullYear() == ddx.getFullYear()){
        document.getElementById("missions Past").appendChild(cd);
    }else if(dateStart.getDate() == ddx.getDate() && dateStart.getMonth() == ddx.getMonth() && dateStart.getFullYear() == ddx.getFullYear()){
        document.getElementById("Tuday missions").appendChild(cd);
    }else {
        document.getElementById("Future missions").appendChild(cd);
    }
    */
    

    
    document.getElementById("Tuday missions").style.display='block';
    document.getElementById("missions Past").style.display='none';
    document.getElementById("Future missions").style.display='none';
    document.getElementById("missions complete successfuly").style.display='none';
    document.getElementById("missions failled").style.display='none';
    document.getElementById("mission-form").style.display='none';
    document.getElementById("all missions").style.display='none';


    console.log(cd);
    


}
//create