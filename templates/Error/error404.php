<?php

$this->layout = 'ajax';

echo json_encode([
    'message' => $message,
    'code' => $code,
    'url' => $url,
    'error' => $error
], JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE);
