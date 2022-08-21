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
        let userBIM = (weight / Math.pow( (height/100), 2 )).toFixed(1)

        // Dividing as per the bmi conditions
        if (userBIM < 18.6){
        bmi.value = userBIM;
        bmiVal.value = userBIM;
        p.innerHTML = `Under Weight 😒`;
        p.style.color = "#ffc44d"
        } else if (userBIM >= 18.6 && userBIM < 24.9) {
        bmi.value = userBIM
        bmiVal.value = userBIM;
        p.innerHTML = `Normal Weight 😍` 
        p.style.color = "#0be881"
        
        }
        else {
            bmi.value = userBIM;
            bmiVal.value = userBIM;
            p.innerHTML = `Over Weight 😮`
            p.style.color = "#ff884d" 
        }
    }
    
}