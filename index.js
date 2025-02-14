
// function updateBudgetValue(value) {
//     const formattedValue = new Intl.NumberFormat().format(value);
//     document.getElementById("budget-value").innerText = formattedValue;
//   }


function updateBudgetValue(value) {
document.getElementById("budget-value").textContent = parseInt(value).toLocaleString();
}