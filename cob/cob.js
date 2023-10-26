let experience = 0;
let input = document.getElementById("inputpromo").value; 
let btn = document.getElementById("as")

// Пользовательский ввод промокода
var promoCode = prompt("Введите промокод:");

// Переменная для хранения начисленных очков
var promoPoints = 0;

// Проверка введенного промокода


// Вывод начисленных очков


btn.onclick = function(){
  if (promoCode === "123345") {
  // Начисление очков
  promoPoints = 10;
  alert("Промокод верный! Начислено " + promoPoints + " очков.");
} else {
  // Ошибка при неверном промокоде
  alert("Промокод неверный! Ошибка.");
}
alert("Начислено " + promoPoints + " очков.");
};








































