const maleRadioValue = document.getElementById("male");
const femaleRadioValue = document.getElementById("female");
const othersRadioValue = document.getElementById("others");
const birthdayInputValue = document.getElementById("day");
const monthInputValue = document.getElementById("month");
const yearInputValue = document.getElementById("year");
const ageValue = document.getElementById("age");
const dateToday = new Date();
const yearNow = dateToday.getFullYear();
const dayNow = dateToday.getDate();
const monthNow = dateToday.getMonth() + 1;

const birthdate = document.getElementById("birthdate");
const submitBtn = document.getElementById("submitBtn");
const password = document.getElementById("password");
const confirmpass = document.getElementById("confirmpass");
var monthInput = 0;

submitBtn.type = "button";

var ageValueInput = 0;


maleRadioValue.addEventListener("click", (event) => {
    const genderInput = document.getElementById("gender");
    genderInput.disabled = true;
    genderInput.value = event.target.value;
});

femaleRadioValue.addEventListener("click", (event) => {
    const genderInput = document.getElementById("gender");
    genderInput.disabled = true;
    genderInput.value = event.target.value;
});

othersRadioValue.addEventListener("click", (event) => {
    const genderInput = document.getElementById("gender");
    genderInput.disabled = false;
    genderInput.value = "";
});

confirmpass.addEventListener("change", (event) => {
    const confirmValue = event.target.value;
    if(confirmValue === password.value){
        submitBtn.type = "submit";
    }
    else{
        submitBtn.type = "button";
    }
})

birthdate.addEventListener("change", () => {
    const dayValue = parseInt(birthdate.value.slice(8, 10));
    const monthValue = parseInt(birthdate.value.slice(5, 7));
    const yearValue = parseInt(birthdate.value.slice(0, 4));

    birthdayInputValue.value = dayValue;
    monthInputValue.value = monthValue;
    yearInputValue.value = yearValue;

    if(yearValue > yearNow || yearValue == yearNow || yearValue > yearNow - 10){
        alert("Sorry you are not eligible for registration. You must be 10 years of age to register");
            ageValue.value = "";
            birthdate.value = "";
            birthdayInputValue.value = "";
            monthInputValue.value = "";
            yearInputValue.value = "";
    }
    else{
        if(monthValue < monthNow){
            updateAgeValue(yearValue);
        }
        else if(monthValue == monthNow){
            if(dayValue < dayNow || dayValue == dayNow){
                updateAgeValue(yearValue);
            }
            else if(dayValue > dayNow){
                const adjustedYear = yearValue + 1;
                console.log(adjustedYear);
                updateAgeValue(adjustedYear);
                if(ageValue.value < 10){
                    alert("Sorry you are not eligible for registration. You must be 10 years of age to register");
                    ageValue.value = "";
                    birthdate.value = "";
                    birthdayInputValue.value = "";
                    monthInputValue.value = "";
                    yearInputValue.value = "";
                }
            };
            
        }
        else if(monthValue > monthNow){
            const adjustedYear = yearValue + 1;
            console.log(adjustedYear);
            updateAgeValue(adjustedYear);
            if(ageValue.value < 10){
                alert("Sorry you are not eligible for registration. You must be 10 years of age to register");
                ageValue.value = "";
                birthdate.value = "";
                birthdayInputValue.value = "";
                monthInputValue.value = "";
                yearInputValue.value = "";
            }
        }
    }
})

submitBtn.addEventListener("click", () => {
    if(password.value != confirmpass.value){
        alert("Passwords do not match");
        submitBtn.type = "button";
    }
    else{
        submitBtn.type = "submit";
    }
})

ageValue.addEventListener("change", () => {
    ageValue.value = ageValueInput;
})

// Function to update ageValue
function updateAgeValue(yearValue) {
    const year = yearValue;
    const age = yearNow - year;
    ageValueInput = age;
    ageValue.value = ageValueInput;
}