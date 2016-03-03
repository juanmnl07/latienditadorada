<?php

function tiendadorada_preprocess_search_result(&$variables) {
    $n = node_load($variables['result']['node']->nid);
    $n && ($variables['node'] = $n);
}

/*
function tiendadorada_breadcrumb(&$breadcrumb) {
    if ("taxonomy" == arg(0) && "term" == arg(1) && is_numeric(arg(2))) {
        //$breadcrumb = _taxonomy_breadcrumb_generate_breadcrumb(arg(2));
    }
}*/

function tiendadorada_preprocess_page(&$variables){
	//var_export($variables);
}