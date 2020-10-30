let i = 1;
let arrayelements = ['ss1','ss2','ss3','ss4'];
function next(){
    
    let y;
    for(y = 0; y < 4 ; y++){
        document.getElementById(arrayelements[y]).style.display="none";
        //console.log(y);
    }
    let x = document.getElementById( arrayelements[i++] );
    
    if(i <= 4){
        
        //console.log(arrayelements[i++]);
        //arrayelements[i++]
        console.log(x);
        //console.log()
        //x.style.color = "red";
        x.style.display='block';
    }
    else if(i > 4){
        //alert("'it's done")
        //return false
        i = 1;
        document.getElementById( arrayelements[0] ).style.display='block'
    }
    
    console.log(i);
}
function prev(){
    let y;
    for(y = 0; y < 4 ; y++){
        document.getElementById(arrayelements[y]).style.display="none";
    }
    
    
    if(i > 0){
        let x = document.getElementById( arrayelements[--i] );
        console.log(i);
        //console.log(arrayelements[i++]);
        //arrayelements[i++]
        console.log(x);
        //console.log()
        //x.style.color = "red";
        x.style.display='block';
    }
    else{       //if(i < 0)
        //alert("'it's done")
        //return false
        console.log("it's" + "  " + i )
        i = 3;
        document.getElementById( arrayelements[3]).style.display='block'
    }
    
    console.log(i);

}