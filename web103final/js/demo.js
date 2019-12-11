var inputs = [];

var areaLength = [];
var areaWidth = [];
var tileLength = [];
var tileWidth = [];
var gapSize = [];
var tilesNeeded = [];
var minTileAllowance = [];
var maxTileAllowance = [];




// store form data in array
function passFromValue(){

    inputs[0] = parseInt(document.getElementById("tilelength").value);
    inputs[1] = parseInt(document.getElementById("tilewidth").value);
    inputs[2] = parseInt(document.getElementById("arealength").value);
    inputs[3] = parseInt(document.getElementById("areawidth").value);
    inputs[4] = parseInt(document.getElementById("gapsize").value);


    

    convert(); //calls function to convert units of data
}

// converts to inches from centimeters
function convertFromCm(){
    for(var i = 0; i < inputs.length; i++) {
        inputs[i] /= 2.54;
    } 
  mainCalculation();
}

// converts to inches from feet
function convertFromFt(){
    for(var i = 0; i < inputs.length; i++) {
       inputs[i] *= 12;
    }
   mainCalculation();
    console.log(inputs);
}

// converts units of form data
function convert(){

    if(document.getElementById('units').value == "cm") {
     convertFromCm();
    } else if (document.getElementById('units').value == "ft"){
    convertFromFt();
    } else if (document.getElementById('units').value == "in"){
        mainCalculation();
    }

}

// perform calculation to get tiles needed
function mainCalculation() {
    
    areaLength = inputs[2];
    areaWidth = inputs[3];
    tileLength = inputs[0];
    tileWidth = inputs[1];
    gapSize = inputs[4];

    surfaceArea = areaLength * areaWidth;
    innerGrout = (tileLength + gapSize) * (tileWidth + gapSize);  
    perimeterGrout = (areaLength * gapSize ) + (areaWidth * gapSize);
    tilesNeeded = Math.round((surfaceArea - perimeterGrout) / innerGrout);
   
        //displays results 
   document.getElementById("result").style.display = "block";
   document.getElementById("result").style.fontWeight = "bold";
   document.getElementById("result").style.color = "white";
   document.getElementById("result").style.fontSize = "1.4em";
   document.getElementById("result").style.textAlign = "center";
   document.getElementById("result").style.border = "3px solid white";
   document.getElementById("result").style.padding = "0.5em";
   document.getElementById("calculator").style.height = "37.5em";
   document.getElementById("downloadBtn").style.display = "block";
   document.getElementById("resultsCont").style.marginTop ="1em";


    minTiles();
    extraTiles();

} 

//sets minimum number of tiles needed to 0, no negative
function minTiles(){
    if(tilesNeeded >= 0) {
        document.getElementById("result").innerHTML = ("You will need " + tilesNeeded + " tiles for your project.");
    } else if(tilesNeeded < 0) {
        document.getElementById("result").innerHTML = ("You will need " + 0 + " tiles for your project.");
    }
}

//resets form and hides results after reset button is clicked
function resetForm(){
    document.getElementById("form").reset();
    document.getElementById("result").style.display = "none";
    document.getElementById("tileAllowance").style.display = "none"
    document.getElementById("calculator").style.height = "28em";
    document.getElementById("downloadBtn").style.display = "none";
    
}

// calculates extra tiles recommended
function extraTiles(){
    minTileAllowance = Math.round(tilesNeeded * 1.05);
    maxTileAllowance = Math.round(tilesNeeded * 1.10);
    document.getElementById("tileAllowance").style.display = "block";
    document.getElementById("tileAllowance").innerHTML = ("We recommend purchasing 5% - 10% more tiles than you need to allow for errors during installation and future repairs.  For your project, we recommend buying " + minTileAllowance + " - " + maxTileAllowance + " extra tiles.");
} 

var userinfo;

// downloads user order
function downloadInfo(){

    userinfo = {
        firstName: prompt("Enter your first name"),
        lastName: prompt("Enter your last name"),
        tNeeded: tilesNeeded,
        minAllowance: minTileAllowance,
        maxAllowance: maxTileAllowance
  

    };
    
    // adds user name
    var pName = document.createElement("p");
    pName.innerHTML = ("Name: " + userinfo.firstName + " " + userinfo.lastName);
    document.getElementById("details").appendChild(pName);

    // adds tiles needed
    var pTilesNeeded = document.createElement("p");
    pTilesNeeded.innerHTML = ("Tiles Needed: " + userinfo.tNeeded);
    document.getElementById("details").appendChild(pTilesNeeded);

    // adds min tiles needed
    var minTilesNeeded = document.createElement("p");
    minTilesNeeded.innerHTML = ("Minimum Tiles Recommended: " + userinfo.minAllowance);
    document.getElementById("details").appendChild(minTilesNeeded);

    // adds max tiles needed
    var maxTilesNeeded = document.createElement("p");
    maxTilesNeeded.innerHTML = ("Maximum Tiles You Should Need: " + userinfo.maxAllowance);
    document.getElementById("details").appendChild(maxTilesNeeded);

    document.getElementById("details").style.display = "none";

    var a = document.body.appendChild(document.createElement("a"));
    a.download = "tiles.html";
    a.href = "data:text/html," + document.getElementById("details").innerHTML;
    a.click();
    

}

