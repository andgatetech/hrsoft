<?php
function renderLayout($data = null, $layouts = null, $pageTitle = null) {
        $ci=& get_instance();
        $data['pageTitle'] = $pageTitle; //manadory
        $data['layouts'] = $layouts; //manadory
        $ci->load->view('admin/index', $data);
}
?>
