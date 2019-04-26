<?php
class ResultHandler {
    public static function getResults($config, $name) {
        $data = array();
        if ($name) {
            $name = '%' . $name . '%';
            $query = DatabaseHandler::query($config, "SELECT * FROM kostvetaren WHERE (name COLLATE UTF8_GENERAL_CI LIKE ?) ORDER BY name;", [$name]);
            if ($query["complete"]) {
                $data = $query["result"];        
            }
        }
        self::renderResults($data);
    }
    private static function renderResults($data) {
        $content = '';
        $countData = count($data);
        if ($countData) {
            for ($i = 0; $i < $countData; $i++) {
                $content .= '
                <div class="search-result-item">
                    <table>
                        <thead>
                            <tr>
                                <th>' . $data[$i]["name"] . '</th>
                                <th><span class="ui-btn ui-shadow ui-corner-all ui-icon-plus ui-btn-icon-notext"></span></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Mått</td>
                                <td><strong>' . $data[$i]["grams"] . ' g</strong></td>
                            </tr>' . 
                            self::getFoodContent($data[$i]["content"]) . '
                        </tbody>
                    </table>
                </div>';
            }
        } 
        else {
            $content = '<div class="search-result-empty">Din sökterm gav inget resultat...</div>';
        }
        echo $content;
    }
    private static function getFoodContent($data) {
        $data = json_decode($data);
        $content = '';
        foreach ($data as $ingr) {
            $content .= '
            <tr>
                <td>' . $ingr->name . '</td>
                <td>' . $ingr->val . ' ' . $ingr->unit . '</td>
            </tr>';
        }
        return $content;
    }
}
?>