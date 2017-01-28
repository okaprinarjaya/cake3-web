<?php
namespace App\View\Helper;

use Cake\View\Helper;

class Paginator123HlpHelper extends Helper
{

    private $limit_data_rows_per_page;

    private $total_data_rows_found;

    private $number_of_pages_display;

    private $total_pages_generated;

    private $start_row_found_num;

    private $end_row_found_num;

    private $current_page;

    private $url_pattern;

    private $query_params = null;

    public function setLimitRowsPerPage($limit_data_rows_per_page)
    {
        $this->limit_data_rows_per_page = $limit_data_rows_per_page;
    }

    public function setTotalRowsFound($total_rows_found)
    {
        $this->total_data_rows_found = $total_rows_found;
    }

    public function setNumberOfPagesDisplay($number_of_pages_display)
    {
        $this->number_of_pages_display = $number_of_pages_display;
    }

    public function setCurrentPage($current_page)
    {
        if ($current_page == null || empty($current_page) || $current_page == '') {
            $this->current_page = 1;
        } else {
            $this->current_page = $current_page;
        }
    }

    public function setUrlAndPattern($url_pattern)
    {
        $this->url_pattern = $url_pattern;
    }

    public function setQueryParams(array $query_params)
    {
        $this->query_params = $query_params;
    }

    public function getTotalRows()
    {
        return $this->total_data_rows_found;
    }

    public function getStartRowFound()
    {
        return $this->start_row_found_num;
    }

    public function getEndRowFound()
    {
        return $this->end_row_found_num;
    }

    public function getCurrentPage()
    {
        return $this->current_page;
    }

    private function paginatorStartNum($p, $g, $n)
    {
        if ($p > ($g - $n)) {
            return $g - $n + 1;
        }

        $tengah = floor($n / 2);
        if ($p < $tengah) {
            return 1;
        }

        $page = $p - $tengah + 2;
        if (0 == $page) {
            $page = 1;
        }

        return $page;
    }

    private function formatUrl($number)
    {
        $url = str_replace('{pagenum}', $number, $this->url_pattern);
        if ($this->query_params != null) {
            $url_query = http_build_query($this->query_params);
            if (stripos($this->url_pattern, "?") === false) {
                $url .= "?".$url_query;
            } else {
                $url .= "&".$url_query;
            }
        }

        return $url;
    }

    public function createPagesNumber()
    {
        $this->start_row_found_num = (($this->current_page - 1) * $this->limit_data_rows_per_page) + 1;
        
        $current_top_limit = $this->current_page * $this->limit_data_rows_per_page;
        $this->end_row_found_num = ($this->total_data_rows_found < $current_top_limit) ? $this->total_data_rows_found : $current_top_limit;

        $this->total_pages_generated = ceil($this->total_data_rows_found / $this->limit_data_rows_per_page);
        if ($this->total_pages_generated < $this->number_of_pages_display) {
            $this->number_of_pages_display = $this->total_pages_generated;
        }

        $first_page = $this->paginatorStartNum(
            $this->current_page,
            $this->total_pages_generated,
            $this->number_of_pages_display
        );

        $urls = array();
        
        for ($i = $first_page; $i <= ($first_page + $this->number_of_pages_display - 1); $i++) {
            $urls[] = array(
                'url_str' => $this->formatUrl($i),
                'number' => $i
            );
        }

        return $urls;
    }

    public function prevUrl()
    {
        $prev = null;

        if ($this->current_page > 1) {
            $prev = $this->formatUrl($this->current_page - 1);
        }

        return $prev;
    }

    public function nextUrl()
    {
        $next = null;

        if ($this->current_page < $this->total_pages_generated) {
            $next = $this->formatUrl($this->current_page + 1);
        }

        return $next;
    }

}
