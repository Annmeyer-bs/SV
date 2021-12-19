const inputPass = document.getElementById('pass');
const iconPass = document.getElementById('icon-pass');
//обращаемся к icon вешаем событие клик и выполняем функцию
iconPass.addEventListener('click', () => {
//проверяем атрибут тип если он равен пасс то меняем новый атрибут типа текст
    if (inputPass.getAttribute('type') === 'password') {
        inputPass.setAttribute('type', 'text');
    } else {
        inputPass.setAttribute('type', 'password');
    }
});