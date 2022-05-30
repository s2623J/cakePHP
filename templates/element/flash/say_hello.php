<?php
/**
 * @var \App\View\AppView $this
 * @var array $params
 * @var string $message
 */
$class = 'message';
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="message sayHello" onclick="this.classList.add('hidden');"><?= $message ?></div>

<?= print_r($params) ?>
