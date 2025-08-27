echo "<?php
        header("Content-Type: application/json");
        header("Access-Control-Allow-Origin: *");

        if ($_SERVER["REQUEST_METHOD"] === "GET") {
            echo json_encode([
                "message" => "Hello from WSL PHP API!",
                "status" => "success",
                "timestamp" => time(),
                "php_version" => phpversion()
            ]);
        } else
            http_response_code(405);
        echo json_encode(["error" => "Method not allowed"]);

        require_once 'vendor/autoload.php';

        echo 'Все работает отлично!';
        ?>"