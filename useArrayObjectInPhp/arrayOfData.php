
<?php
    class DataOfArrayObject extends ArrayObject {

    public function __set($key, $val) {
        $this[$key] = $val;
    }

    public function displayAsTable() {
        $table =  '<table>';
        $table .= '<tbody>';    
        $all_data = (array) $this;
        foreach ($all_data as $key => $value) {
            $table .= '<tr>';
            $table .= '<th>' . $key . ':'. '</th>';
            $table .= '<td>' . $value . '</td>';
            $table .= '</tr>';
        }    
        $table .= '</tbody>';
        $table .=  '</table>';    
        return $table;
    } 
}

?>