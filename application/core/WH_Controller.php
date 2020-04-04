<?php

class WH_Controller extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        // $this->load->model("Ion_auth_model", "ion_model");
        // $this->load->model("Master_model", "mas_model");
    }

    public function login_check()
    {
        if (!$this->ion_auth->logged_in()) {
            redirect(base_url("user/login"));
        }
    }

    public function print_out_data($data)
    {
        echo "<pre>";
        var_dump($data);
        exit;
    }

    public function show_layout($data, $layout = LAYOUT_MAIN)
    {

        // $user = $this->ion_model->user()->row_array();
        // $data["user_det"] = $user;

        $data["title"] = "E-MONEV (Monitoring dan Evaluasi)";

        if ($layout == LAYOUT_MAIN) {
            $this->load->view('layout/main', $data);
        } elseif ($layout == LAYOUT_PROCESS) {
            $this->load->view('layout/process', $data);
        }
    }

    public function api_request($data, $server, $is_decode = 1, $test = "")
    {
        $url = $server . $data["url"];
        if (isset($data["string"]) and !empty($data["string"])) {
            foreach ($data["string"] as $key => $val) {
                if ($key == 0) {
                    $url .= "?";
                } else {
                    $url .= "&";
                }

                $url .= $val["param"] . "=" . $val["value"];
            }
        }

        if (!empty($test)) {
            $this->print_out_data($url);
        }

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        // if ($server == SER_SIMDA) {
        // curl_setopt($ch, CURLOPT_URL, $url);
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        // } else {
        // curl_setopt_array($ch, array(
        //     CURLOPT_URL => $url,
        //     CURLOPT_RETURNTRANSFER => true,
        //     CURLOPT_ENCODING => "",
        //     CURLOPT_MAXREDIRS => 10,
        //     CURLOPT_TIMEOUT => 0,
        //     CURLOPT_FOLLOWLOCATION => true,
        //     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        //     CURLOPT_CUSTOMREQUEST => "GET",
        //     CURLOPT_HTTPHEADER => array(
        //         "X-API-KEY: b64149c3ea867959207e933bb686c9ab41d3370b"
        //     ),
        // ));
        // }

        $ch = curl_exec($ch);
        if ($is_decode) {
            return json_decode($ch, true);
        } else {
            return $ch;
        }
    }
}
