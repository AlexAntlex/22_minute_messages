<?php 
// проверка имени файла лога
function checkVisitName(string $name) : bool{
    return !!preg_match('/^\d{4}\-\d{2}\-\d{2}\/txt$/', $name);
} 
// проверка на существование лога за данный день
function hasVisitsDay(string $dt) : bool{
    return CheckVisitName($dt) && file_exists("logs/$dt");
}
// получить список логов из папки
function getVisitsDays() : array{
    $files = scandir("logs/");

    return array_filter($files, function($file){
        return is_file("logs/$file") && checkVisitName($file);
    });
}
// проверка на допустимость url
function isValidUrl(string $url) : bool{
    return !!preg_match('/^[aA-zZ0-9-_\/\?\.=&]*$/', $url);
}

// получнение конкретного лога
function getVisits(string $dt) : array{
    $lines = file("logs/$dt");

    return array_map(function($line){
        $log = json_decode(rtrim($line), true);
        $log['isDanger'] = !IsValidUrl($log['uri']);
        return $log;
    }, $lines);
}
// Добавление лога в список
function addVisitLog() : bool{
    $logName = date("Y-m-d");

    $info = [
        'dt' => date("H:i:s"),
        'ip' => $_SERVER['REMOTE_ADDR'],
        'uri' => $_SERVER['REQUEST_URI'],
        'referer' => $_SERVER['HTTP_REFERER'] ?? ''
    ];

    $log = json_encode($info) . "\n";
    file_put_contents("logs/$logName.txt", $log, FILE_APPEND);
    return True;
}