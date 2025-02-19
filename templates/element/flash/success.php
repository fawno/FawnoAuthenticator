<?php
/**
 * @var \App\View\AppView $this
 * @var array $params
 * @var string $message
 */
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
//echo $this->Html->alert($message, 'success', $params) ;
echo $this->Html->div('message success', $message, ['onclick' => 'this.classList.add(\'hidden\')']);
/*
?>
<div class="message success" onclick="this.classList.add('hidden')"><?= $message ?></div>
<?php
*/
