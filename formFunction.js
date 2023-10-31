const maleRadioValue = document.getElementById("male");
const birthdayValue = document.getElementById("day");
const monthValue = document.getElementById("month");
const yearValue = document.getElementById("year");
const ageValue = document.getElementById("age");
const button = document.getElementById("buttonCheck");
const yearNow = new Date().getFullYear();
var monthInput = 0;

maleRadioValue.addEventListener("click", (event) => {
    const genderInput = document.getElementById("gender");
    genderInput.disabled = true;
    genderInput.value = event.target.value;
});

// ... (other radio button event listeners)

monthValue.addEventListener("change", (event) => {
    birthdayValue.value = 0;
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

button.addEventListener("click", () => {
    alert(ageValue.value);
});

// Function to update ageValue
function updateAgeValue() {
    const year = parseInt(yearValue.value);
    const age = yearNow - year;
    ageValue.value = age;
}