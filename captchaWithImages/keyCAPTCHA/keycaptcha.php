<?php
if ( !class_exists('KeyCAPTCHA_CLASS') ){
    class KeyCAPTCHA_CLASS  {
        // Replace PRIVATE_KEY_HERE and USER_ID_HERE
        // with proper values from your keycaptcha.com account
        private $p_kc_private_key = 'ikQkLWVcNwrJWwNIMiggnhTbrS';
        private $p_kc_user_id = '188968';
        private $c_kc_keyword = 'accept';
        private $p_kc_visitor_ip = '';
        private $p_kc_session_id = '';
        private $p_kc_web_server_sign = '';
        private $p_kc_web_server_sign2 = '';        
        private $p_kc_js_code = '';

        public function get_web_server_sign($use_visitor_ip = 0){
            return md5($this->p_kc_session_id . 
                (($use_visitor_ip) ? ($this->p_kc_visitor_ip) :("")) . 
                $this->p_kc_private_key);
        }

        function __construct($a_private_key='', $a_js_code=''){
            if ( $a_private_key != '' ) {
                $this->p_kc_private_key = $a_private_key;
            }
            if ( $a_js_code != '' ) {
                $this->p_kc_js_code = $a_js_code;
            } else {
                $this->p_kc_js_code = "<!-- KeyCAPTCHA code (www.keycaptcha.com) -->
                <script type='text/javascript'>
                    var s_s_c_user_id = '$this->p_kc_user_id';
                    var s_s_c_session_id = '#KC_SESSION_ID#';
                    var s_s_c_captcha_field_id = 'capcode';
                    var s_s_c_submit_button_id = 'postbut';
                    var s_s_c_web_server_sign = '#KC_WSIGN#';
                    var s_s_c_web_server_sign2 = '#KC_WSIGN2#';
                </script>
                <script language=JavaScript src='http://backs.keycaptcha.com/swfs/cap.js'>
                </script>
                <!-- end of KeyCAPTCHA code -->";
            }
            $this->p_kc_session_id = uniqid() . '-4.0.0.001';
            $this->p_kc_visitor_ip = $_SERVER["REMOTE_ADDR"];
        }

        function http_get($path){
            $arr = parse_url($path);
            $host = $arr['host'];
            $page = $arr['path'];
            if ( $page=='' ) {
                $page='/';
            }
            if ( isset( $arr['query'] ) ) {
                $page.='?'.$arr['query'];
            }
            $errno = 0;
            $errstr = '';
            $fp = fsockopen ($host, 80, $errno, $errstr, 30);
            if (!$fp){ return ""; }
            $request = "GET $page HTTP/1.0\r\n";
            $request .= "Host: $host\r\n";
            $request .= "Connection: close\r\n";
            $request .= "Cache-Control: no-store, no-cache\r\n";
            $request .= "Pragma: no-cache\r\n";
            $request .= "User-Agent: KeyCAPTCHA\r\n";
            $request .= "\r\n";

            fwrite ($fp,$request);
            $out = '';

            while (!feof($fp)) $out .= fgets($fp, 250);
            fclose($fp);
            $ov = explode("close\r\n\r\n", $out);

            return $ov[1];
        }

        public function check_result($response){
            $kc_vars = explode("|", $response);
            if ( count( $kc_vars ) < 4 ){
                return false;
            }
            if ($kc_vars[0] == md5(
                        $this->c_kc_keyword . 
                        $kc_vars[1] .
                        $this->p_kc_private_key . 
                        $kc_vars[2])){
                if (stripos($kc_vars[2], "http://") !== 0){
                    $kc_current_time = time();
                    $kc_var_time = preg_split('/\/| |:/', $kc_vars[2]);
                    $kc_submit_time = gmmktime($kc_var_time[3],
                                        $kc_var_time[4], 
                                        $kc_var_time[5], 
                                        $kc_var_time[1], 
                                        $kc_var_time[2], 
                                        $kc_var_time[0]);
                    if (($kc_current_time - $kc_submit_time) < 15){
                        return true;
                    }
                }
                else{
                    if ($this->http_get($kc_vars[2]) == "1"){
                        return true;
                    }
                }
            }
            return false;
        }

        public function render_js (){
            if ( isset($_SERVER['HTTPS']) && ( $_SERVER['HTTPS'] == 'on' ) ){
                $this->p_kc_js_code = str_replace ("http://","https://", $this->p_kc_js_code);
            }
            $this->p_kc_js_code = str_replace ("#KC_SESSION_ID#", 
                                            $this->p_kc_session_id, $this->p_kc_js_code);
            $this->p_kc_js_code = str_replace ("#KC_WSIGN#", 
                                            $this->get_web_server_sign(1), $this->p_kc_js_code);
            $this->p_kc_js_code = str_replace ("#KC_WSIGN2#", 
                                            $this->get_web_server_sign(), $this->p_kc_js_code);
            return $this->p_kc_js_code;
        }
    }
}
?>