<?php

class Templates
{
    protected $ci;

    public function __construct()
    {
        $this->ci = &get_instance();
    }

    function display($template = NULL, $data = NULL)
    {
        if ($template != NULL && $data != NULL)
            $data['_content'] = $this->ci->load->view($template, $data, TRUE);
            $data['_header'] = $this->ci->load->view('templates/header', $data, TRUE);
            $data['_template'] = $this->ci->load->view('templates/template', $data);
            $data['_footer'] = $this->ci->load->view('templates/footer', TRUE);

   }
}