<?php
namespace GlobalSerp\View\Cell;

use Cake\View\Cell;

class SerpMainLocationTreeCell extends Cell
{
    public function display()
    {
        $page = 1;
        $location_tree = $this->retrieveLocationTreeData($page);
        $this->set('location_tree_data', $location_tree);
    }

    private function retrieveLocationTreeData($page) {
        $rows = $this->rows();
        $total_rows = count($rows);
        $per_page = 5;
        $offset = ($page * $per_page) - $per_page;

        return array_slice($rows, $offset, $per_page);
    }

    private function rows() {
        return array(
            'Pisangan Baru',
            'Kebon Manggis',
            'Cipinang',
            'Bidaracina',
            'Utan Kayu Selatan',
            'Kayu Putih',
            'Jatinegara Kaum',
            'Cipinang Cempedak',
            'Utan Kayu Utara',
            'Jati',
            'Pulo Gadung',
            'Rawa Bunga',
            'Kayu Manis',
            'Rawamangun',
            'Bali Mester',
            'Nangroe Aceh Darussalam',
            'Pal Meriam',
            'Pisangan Timur',
            'Kampung Melayu',
            'Cipinang Besar Selatan',
            'Pinang Ranti',
            'Cipinang Muara',
            'Pondok Bambu',
            'Duren Sawit',
            'Pondok Kelapa',
            'Pondok Kopi',
            'Malaka Jaya',
            'Malaka Sari',
            'Klender',
            'Kramat Jati',
            'Batu Ampar',
            'Bale Kambang',
            'Kampung Tengah',
            'Dukuh',
            'Cawang',
            'Cililitan'
        );
    }
}
