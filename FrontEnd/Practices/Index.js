console.log ("Hello World");

//Assigning Variables
let name = ('melanio');

let house = {
    bedroom: 'bed',
    kitchen: 'table',
    bathroom: 'shower'
}

//{
//Dot Notataion 
house.bedroom = 'lamp';

//Bracket notation (useful for user inputs )
let selection = 'kitchen';
house[selection] = 'spoon';
//}

//Arrays

let condiments = ['soysause', 'salt', 'garlic', 'onion'];

condiments [4] = 'vinegar';

let interns = ['Jessa','Kezia','Melanio','Melissa','Consigna'];

//Functions
//Arguments to Parameters
//functions Performing a task
function Hello(params,params_Age){
    console.log ('Hello World!! '+ params+' '+ params_Age);
}
let argue = ('Melares');
let age = 23;

//functions that calculates values
function Sqrt(numsqrt){
    return numsqrt * numsqrt;
}

let varInput = 3;

let varsqrt = Sqrt(varInput);


// -------------------------------------------------------------------
console.log (condiments);
console.log (house.bedroom,house.kitchen);
console.log (interns.length);
Hello(argue,age);
console.log (varsqrt);
