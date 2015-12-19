<?php

$params = $_GET;
$response = array(
  'ok' => false
);

if (empty($params) || !isset($params['result'])) {
  $response['reason'] = 'Please provide `result` in JSON';
  echo json_encode($response); exit;
}

$result = $params['result'];
$output = @json_decode($result);
file_put_contents('./results/' . $output->jobId . '.json', $result);
$response['ok'] = true;
echo json_encode($response); exit;
