<?php
$this->Paginator123Hlp->setTotalRowsFound($total_rows_found);
$this->Paginator123Hlp->setLimitRowsPerPage($rows_per_page);
$this->Paginator123Hlp->setNumberOfPagesDisplay(7);
$this->Paginator123Hlp->setCurrentPage($page_number);
$this->Paginator123Hlp->setUrlAndPattern($url_pattern);
$this->Paginator123Hlp->setQueryParams($request_query);

$pages = $this->Paginator123Hlp->createPagesNumber();
$str_list = '';

// Create Prev link
if ($this->Paginator123Hlp->prevUrl() != null) {
    $link = null;
    
    if ($this->Paginator123Hlp->getCurrentPage() != 2) {
        $link = $this->Html->link(
            'Sebelumnya',
            $this->Paginator123Hlp->prevUrl(),
            array('class' => 'ajax-paging')
        );

    } else {
        $link = $this->Html->link(
            'Sebelumnya',
            $serp_beauty_url,
            array('class' => 'ajax-paging')
        );
    }

    $str_list .= $this->Html->tag('li', $link);
}

// Create Pages number links
foreach ($pages as $page) {
    if ($this->Paginator123Hlp->getCurrentPage() != $page['number']) {
        $url_str = null;
        if ($page['number'] > 1) {
            $url_str = $page['url_str'];
        } else {
            $url_str = $serp_beauty_url;
        }

        $link = $this->Html->link(
            $page['number'],
            $url_str,
            array('class' => 'ajax-paging')
        );

        $str_list .= $this->Html->tag('li', $link);

    } else {
        $link = $this->Html->tag('a', $page['number'], array('href' => 'javascript:;'));
        $str_list .= $this->Html->tag('li', $link, array('class' => 'active'));
    }
}

// Create Next link
if ($this->Paginator123Hlp->nextUrl() != null) {
    $link = $this->Html->link(
        'Selanjutnya',
        $this->Paginator123Hlp->nextUrl(),
        array('class' => 'ajax-paging')
    );

    $str_list .= $this->Html->tag('li', $link);
}

$str_ul = $this->Html->tag('ul', $str_list, array('class' => 'pagination'));

// Create data retrieval result info
$str_result_info = $this->Html->tag(
    'div',
    $this->Paginator123Hlp->getStartRowFound() . ' - ' . $this->Paginator123Hlp->getEndRowFound() . ' dari ' . number_format($total_rows_found) . ' Hasil',
    array('class' => 'serp-result-info')
);

$str_loading_indicator = '<div id="serp-loading" class="content-loading loading">';
$str_loading_indicator .= '<div class="loading-text">Please Wait</div>';
$str_loading_indicator .= '<div class="loading-img">' . $this->Html->image('loading.gif') . '</div>';
$str_loading_indicator .= '</div>';

$str_paginator_view = $str_loading_indicator . "\n\n";
$str_paginator_view .= '<div class="serp-pagination">';
$str_paginator_view .= '<div class="row">';
$str_paginator_view .= '<div class="col-sm-12">';
$str_paginator_view .= $str_result_info;
$str_paginator_view .= '</div>';
$str_paginator_view .= '<div class="col-sm-12">';
$str_paginator_view .= '<div class="serp-paging">';
$str_paginator_view .= $str_ul;
$str_paginator_view .= '</div>';
$str_paginator_view .= '</div>';
$str_paginator_view .= '</div>';
$str_paginator_view .= '</div>';

echo $str_paginator_view;