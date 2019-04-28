<?php
class ApiHandler {
    public static function getData($config) {
        echo '<h4>[' . date('H:i:s') . '] Response:</h4>';
        $today = date("Ymd");
        $url = "http://www7.slv.se/apilivsmedel/LivsmedelService.svc/Livsmedel/Naringsvarde/" . $today;
        $xml = simplexml_load_file($url);
        if ($xml) {
            if (property_exists($xml, 'LivsmedelsLista')) {
                $foodItems = $xml->LivsmedelsLista->Livsmedel;
                if (count($foodItems)) {
                    self::getFood($config, $foodItems);
                } else {
                    echo '<p>No result was returned while requesting data from Livsmedelsverket.</p>';
                }
            } else {
                echo '<p>No result was returned while requesting data from Livsmedelsverket.</p>';
            }
            echo '<h4>[' . date('H:i:s') . '] End of query response.</h4>';
        }
        else {
            echo "<p>An unexpected error occured while requesting Livsmedelsverket's API!</p>";
        }
    }
    private static function getFood($config, $data) {
        DatabaseHandler::query($config, "DELETE FROM kostvetaren WHERE id", []);
        foreach ($data as $food) {
            $foodContent = self::getFoodContent($food->Naringsvarden);
            if ($foodContent) {
                self::insertResult($config, array(
                    "name" => $food->Namn->__toString(),
                    "category" => $food->Huvudgrupp->__toString(),
                    "grams" => intval($food->ViktGram->__toString()),
                    "content" => $foodContent
                ));
            }
        }
    }
    private static function getFoodContent($data) {
        $content = array();
        foreach ($data->Naringsvarde as $ing) {
            array_push($content, array(
                "name" => $ing->Namn->__toString(),
                "unit" => $ing->Enhet->__toString(),
                "val" => $ing->Varde->__toString(),
            ));
        }
        return json_encode($content);
    }
    private static function insertResult($config, $data) {
        $data["name"] = filter_var($data["name"], FILTER_SANITIZE_STRING);
        $data["category"] = filter_var($data["category"], FILTER_SANITIZE_STRING);
        $data["grams"] = filter_var($data["grams"], FILTER_VALIDATE_INT);
        $data["content"] = filter_var($data["content"], FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
        $query = DatabaseHandler::query($config, "INSERT INTO kostvetaren (name, category, grams, content) VALUES (?, ?, ?, ?)", [$data["name"], $data["category"], $data["grams"], $data["content"]]);
        if ($query["complete"]) {
            echo '<p>Entry for trend ' . $data["name"] . ' successfully inserted to the database.</p>';
        } else {
            echo "<p><strong>Error -</strong> while inserting entry for " . $data["name"] . ": " . $query["result"] . "</p>";
        }
    }
}
?>