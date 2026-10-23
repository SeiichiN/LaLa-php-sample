<?php
function es(array|string $data, string $charset='UTF-8'): mixed {
  if (is_array($data)) {
    return array_map('es', $data);
  } else {
    return htmlspecialchars($data, ENT_QUOTES, $charset);
  }
}
// 引数: $_POST を想定
// $_POSTが期待するエンコードなら true
function cken(array $data): bool {
  return mb_check_encoding($data);
}