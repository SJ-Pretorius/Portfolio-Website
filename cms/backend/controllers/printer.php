<?php
header('Content-Type: application/json');
if (empty($_POST['printer_do']) === false && $_SESSION['logged_in'] === true) {
    switch ($_POST['printer_do']) {
        case "print":
            $printer = new Printer();
            if ($printer->isReady()) {
                if ($_POST['text']) {
                    $wrappedText = wordwrap($_POST['text'], 48, "\n", true);
                    $printer->print($wrappedText);
                    $printer->cut();
                    http_response_code(200);
                    echo json_encode([
                        'success' => 'Print job has been sent successfully'
                    ]);
                } else {
                    http_response_code(400);
                    echo json_encode([
                        'error' => 'No text provided'
                    ]);
                }
            } else {
                http_response_code(503);
                echo json_encode([
                    'error' => 'Printer not ready'
                ]);
            }
            $printer->close();
            break;
    }
}