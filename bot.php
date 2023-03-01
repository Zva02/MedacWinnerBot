<?php
$token = '6223591838:AAHaj31XaK_l5JgcIrKa-mC8jxg04vgOlCQ';
$website = 'https://api.telegram.org/bot'.$token;

$input = file_get_contents('php://input');
$update = json_decode($input, TRUE);

$chatId = $update['message']['chat']['id'];
$message = $update['message']['text'];

switch($message) {
    case '/start';
        $response = 'Hola, has iniciado';
        sendMessage($chatId, $response);
        break;
    case '/info';
        $response = 'Soy @MedacWinnerBot, phpzilla';
        sendMessage($chatId, $response);
        break;
    case '/qué tal?';
        $response = 'Bien, un poco agobiado';
        sendMessage($chatId, $response);
        break;
    case '/cómo estás?';
        $response = 'Bien, un poco agobiado';
        sendMessage($chatId, $response);
        break;
    case '/por qué?':   
        $response = 'Exámenes y millones de trabajos';
        sendMessage($chatId, $response);
        break;
    case '/qué haces?':
        $response = 'Llorar y salir a pasear, también cazo pokemon';
        sendMessage($chatId, $response);
        break;
    default;
        $response = 'No he entendido nada';
        sendMessage($chatId, $response);
        break;
}

function sendMessage($chatId, $response) {
    $url = $GLOBALS['website'].'/sendMessage?chat_id='.$chatId.'&parse_mode=HTML&text='.urlencode($response);
    file_get_contents($url);

}
?>
