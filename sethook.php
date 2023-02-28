<!DOCTYPE html>
<html lang=en>

<body>
<?php
// Load composer
require __DIR__ . '/vendor/autoload.php';

$bot_api_key  = '5801896630:AAEd0Z1FhgLZCFQqIbDOxe5E5KUj0ZlgRKw';
$bot_username = 'GROUP_HACKERS_bot';
$hook_url     = 'https://localhost:8443/webhook/hook.php';

try {
    // Create Telegram API object
    $telegram = new Longman\TelegramBot\Telegram($bot_api_key, $bot_username);
    // Set webhook
    print $result = $telegram->setWebhook($hook_url, ['certificate' => '/etc/nginx/sites-available/crt/cert.crt']);
    if ($result->isOk()) {
        echo $result->getDescription();
    } 
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    // log telegram errors
    echo $e->getMessage();
} 
?>
</body>
</html>
