console.log("hello World"
);
// assigning variables 
var string = 'kangkong';
var num = 9;

// if else 
if (num == 10) {
    console.log ('its 10')
} else {
    console.log ('not 10')
}

// function 
function listOfInterns(){
// for loop and printing arrays 
    var interns = ['Aruta', 'Baroro', 'Consigna', 'Flores', 'Rosales'];

for ( var i = 0; i < interns.length; i++){
    console.log(interns[i]);
    document.getElementById('jsID').innerHTML = interns; // transfer the data to html id
}

}
// calling of function 
listOfInterns();

document.getElementById('jsID').addEventListener('click',function(){
    alert(' na click ako');
});




// java script to html print 
// document.getElementById('jsID').innerHTML = string;