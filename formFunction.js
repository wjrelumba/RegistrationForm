const maleRadioValue = document.getElementById("male");
const femaleRadioValue = document.getElementById("female");
const othersRadioValue = document.getElementById("others");
const birthdayValue = document.getElementById("day");
const monthValue = document.getElementById("month");
const yearValue = document.getElementById("year");
const ageValue = document.getElementById("age");
const yearNow = new Date().getFullYear();

const submitBtn = document.getElementById("submitBtn");
const password = document.getElementById("password");
const confirmpass = document.getElementById("confirmpass");
var monthInput = 0;

submitBtn.type = "button";

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

monthValue.addEventListener("change", (event) => {
    birthdayValue.value = 1;
    const value = event.target.value;
    monthInput = value;
    if (value !== null) {
        birthdayValue.disabled = false;
    }
    if (value > 12) {
        monthInput = 12;
        event.target.value = 12;
    } else if (value < 1) {
        monthInput = 1;
        event.target.value = 1;
    }
    updateAgeValue();
});

birthdayValue.addEventListener("change", (event) => {
    const value = event.target.value;
    if (monthInput == 1 || monthInput == 3 || monthInput == 5 || monthInput == 7 || monthInput == 8 || monthInput == 10 || monthInput == 12) {
        if (value > 31) {
            event.target.value = 31;
        }
    }
    if (monthInput == 2) {
        if (value > 28) {
            event.target.value = 28;
        }
    }
    if (monthInput == 4 || monthInput == 6 || monthInput == 9 || monthInput == 11) {
        if (value > 30) {
            event.target.value = 30;
        }
    }
    updateAgeValue();
});

yearValue.addEventListener("change", (event) => {
    const value = event.target.value;
    const minimum = 1950;
    const requiredYears = yearNow - 10;
    if (value > requiredYears) {
        event.target.value = requiredYears;
        updateAgeValue();
    } else if (value < minimum) {
        event.target.value = minimum;
        updateAgeValue();
    } else {
        updateAgeValue();
    }
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

submitBtn.addEventListener("click", () => {
    if(password.value != confirmpass.value){
        alert("Passwords do not match");
        submitBtn.type = "button";
    }
    else{
        submitBtn.type = "submit";
    }
})

// Function to update ageValue
function updateAgeValue() {
    const year = parseInt(yearValue.value);
    const age = yearNow - year;
    ageValue.value = age;
}