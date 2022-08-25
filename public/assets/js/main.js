// function ageCount() {
//     let ageUser =document.getElementById("age");
//     var now =new Date();                            //getting current date
//     var currentY= now.getFullYear();                //extracting year from the date
//     var currentM= now.getMonth();                   //extracting month from the date
        
//     var dobget =document.getElementById("birthday").value; //getting user input
//     var dob= new Date(dobget);                             //formatting input as date
//     var prevY= dob.getFullYear();                          //extracting year from input date
//     var prevM= dob.getMonth();                             //extracting month from input date
        
//     var ageY =currentY - prevY;
//     var ageM =Math.abs(currentM- prevM);          //converting any negative value to positive
        
//     document.getElementById('demo').innerHTML = ageY;
//     ageUser.setAttribute("value",ageY);
//     // document.getElementById('demo').innerHTML = ageY +' years ' + ageM +' months';
// }

function calculateBMI(){
    let height = parseInt(document.getElementById('height').value);
    let weight = parseInt(document.getElementById('weight').value);
    let bmi = document.getElementById('bmi_display');
    let p = document.getElementById('bmi_body');
    let bmiVal = document.getElementById('bmi');

    if (height === "" || isNaN(height)) 
        // result.innerHTML = "Provide a valid Height!";
        return false;

    else if (weight === "" || isNaN(weight)) 
        return false;

    // If both input is valid, calculate the bmi
    else {
        let userBMI = (weight / Math.pow( (height/100), 2 )).toFixed(1)

        // Dividing as per the bmi conditions
        if (userBMI < 18.6){
        bmi.value = userBMI;
        bmiVal.value = userBMI;
        p.innerHTML = `Under Weight 😒`;
        p.style.color = "#ffc44d"
        } else if (userBMI >= 18.6 && userBMI < 24.9) {
        bmi.value = userBMI
        bmiVal.value = userBMI;
        p.innerHTML = `Normal Weight 😍` 
        p.style.color = "#0be881"
        
        }
        else {
            bmi.value = userBMI;
            bmiVal.value = userBMI;
            p.innerHTML = `Over Weight 😮`
            p.style.color = "#ff884d" 
        }
    }
    
}

// scroll element
let scrollElement = document.getElementsByClassName('overflow-y-scroll');

for (let i = 0; i < scrollElement.length; i++) {
    scrollElement[i].setAttribute('style', 'scrollbar-width: none;')
}

// Hover sidebar
let mysidebar = document.getElementById('hover-sidebar');
let elementHover = document.getElementsByClassName('element-hover-sidebar');

mysidebar.addEventListener('mouseenter', function(){

    for (let i = 0 ; i < elementHover.length ; i++) {
        let elementVisibility = elementHover[i].style.visibility;
        if (elementVisibility == "hidden"){
            elementHover[i].style.visibility = "visible";
        }
    }
})

mysidebar.addEventListener('mouseleave', function(){
    for (let i = 0 ; i < elementHover.length ; i++) {
        let elementVisibility = elementHover[i].style.visibility;
        if (elementVisibility == "visible"){
            elementHover[i].style.visibility = "hidden";
        }
    }
})
