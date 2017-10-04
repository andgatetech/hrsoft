<?php
function renderLayout($data = null, $layouts = null) {
        $ci=& get_instance();
        $data['layouts'] = $layouts; //manadory
        $ci->load->view('admin/index', $data);
}
?>
