<?php


namespace IDP\Actions;

use IDP\Helper\Traits\Instance;
use IDP\Helper\Utilities\MoIDPUtility;
use IDP\Handler\LKHandler;
class UpdateFrameworkActions
{
    use Instance;
    private $lkHandler;
    private $allowed;
    private $expiryDate;
    private $key;
    private function __construct()
    {
        $this->lkHandler = LKHandler::instance();
        add_action("\x61\144\155\151\156\x5f\x69\x6e\151\164", array($this, "\160\x72\x65\x70\141\162\x65"));
        add_action("\141\x64\x6d\151\156\137\151\156\151\x74", array($this, "\155\157\137\151\x64\x70\x5f\165\160\x64\141\164\x65\137\143\162\157\156\x73"));
        add_action("\x61\144\x6d\151\x6e\137\156\x6f\164\151\143\x65\x73", array($this, "\x6d\x6f\x5f\151\144\x70\x5f\165\160\144\x61\164\145\137\156\157\x74\151\143\145"));
        add_action("\x6d\157\137\151\144\160\137\x76\145\162\163\x69\157\x6e\137\x63\150\x65\143\153", array($this, "\x6d\x6f\x5f\x69\x64\160\137\x6c\x76\145\162\x73\151\157\156\x5f\x63\x68\145\143\153"));
        add_action("\x77\x70\x5f\x64\x61\163\x68\142\x6f\141\162\x64\137\163\x65\x74\x75\160", array($this, "\155\157\x5f\151\144\160\137\x61\x64\144\x5f\x64\141\x73\x68\x62\157\x61\x72\144\x5f\167\151\144\147\x65\164\x73"));
    }
    function prepare()
    {
        global $dbIDPQueries;
        $this->key = get_site_option("\x6d\x6f\x5f\x69\144\x70\x5f\143\165\163\x74\157\155\x65\x72\x5f\x74\157\x6b\x65\x6e");
        $this->allowed = \AESEncryption::decrypt_data(get_site_option("\155\x6f\x5f\151\x64\160\137\x75\163\x72\x5f\154\x6d\x74"), $this->key);
        $wy = get_site_option("\x73\x6d\154\x5f\x69\x64\160\137\154\x65\x64");
        if (!empty($wy)) {
            goto Jd;
        }
        $this->lkHandler->refresh_sp_users_count();
        $wy = \AESEncryption::decrypt_data(get_site_option("\x73\155\x6c\x5f\x69\x64\x70\137\x6c\x65\x64"), $this->key);
        goto ao;
        Jd:
        $wy = \AESEncryption::decrypt_data($wy, $this->key);
        ao:
        $this->expiryDate = intval($wy);
    }
    function mo_idp_update_notice()
    {
        if (!current_user_can("\x6d\x61\x6e\141\x67\145\137\x6f\x70\x74\151\x6f\156\x73")) {
            goto qi;
        }
        $wy = new \DateTime("\100{$this->expiryDate}");
        $Wx = new \DateTime();
        $HK = $Wx->diff($wy)->format("\x25\162\x25\x61");
        $Vm = add_query_arg(array("\160\141\x67\145" => "\x69\144\x70\137\x73\165\x70\160\157\162\x74"), admin_url("\141\x64\155\x69\156\56\160\150\160"));
        $Kn = "\x3c\144\x69\166\76\74\x69\155\147\x20\x73\x74\171\x6c\145\75\x22\146\154\x6f\141\x74\x3a\x6c\x65\x66\164\73\40\x6d\x61\x72\x67\151\156\72\x35\x70\170\40\65\x70\170\40\x30\x70\170\x20\60\x70\x78\73\42\40\163\x72\143\75\x22" . MSI_MOLOGO_URL . "\42\40\150\x65\151\147\x68\x74\75\x22\x34\70\42\40\x77\151\144\164\150\75\42\64\x38\42\76\x3c\x2f\144\151\166\x3e\15\xa\40\x20\40\40\x20\40\x20\x20\40\x20\x20\x20\74\x68\x32\x3e\x5b\x3c\x73\160\x61\156\40\x73\164\171\x6c\x65\x3d\x22\x63\157\154\x6f\162\72\x72\145\x64\73\42\x3e\x41\x54\124\105\x4e\124\x49\117\116\40\x52\x45\x51\x55\111\122\105\104\74\x2f\x73\x70\141\x6e\76\135\40\155\151\x6e\x69\117\x72\141\156\147\145\x20\x57\x6f\x72\x64\120\x72\145\x73\x73\40\111\104\x50\x20\x4c\151\143\x65\x6e\x73\x65\40\x52\x65\x6e\x65\167\x61\x6c\x3c\x2f\x68\x32\x3e";
        if ($HK <= 30 && $HK > 0) {
            goto VL;
        }
        if ($HK <= 0 && $HK > -15) {
            goto QU;
        }
        if (!($HK <= -15)) {
            goto H1;
        }
        echo "\x3c\x64\151\166\40\x73\x74\x79\154\x65\75\42\155\x61\162\x67\x69\156\55\164\x6f\x70\x3a\x31\45\x3b\42\x20\143\x6c\141\x73\163\x3d\42\156\x6f\x74\151\x63\x65\40\156\157\x74\151\x63\x65\55\x77\141\x72\x6e\151\156\x67\42\x3e" . $Kn . "\74\x70\x20\x73\164\x79\x6c\145\x3d\x22\146\157\156\164\x2d\x73\x69\x7a\x65\72\155\145\144\151\165\x6d\73\x20\42\76\x59\157\165\162\40\155\151\x6e\x69\117\162\141\156\x67\x65\x20\x57\157\162\x64\120\x72\x65\x73\163\40\111\x44\120\40\120\x72\145\x6d\151\165\x6d\40\x50\154\x75\147\x69\x6e\x20\x6c\x69\x63\x65\156\163\x65\40\x68\141\x73\40\x3c\x62\x20\x73\x74\171\x6c\145\75\x22\x63\x6f\154\157\162\72\x72\145\144\73\42\x3e\x65\170\160\x69\x72\145\x64\x3c\x2f\142\76\x20\141\x6e\x64\x20\x79\157\165\162\40\x53\x53\117\x20\150\x61\163\40\142\145\145\156\x20\x3c\142\40\x73\164\x79\x6c\x65\75\42\x63\157\x6c\x6f\162\x3a\x72\145\x64\73\42\x3e\144\x69\x73\141\x62\x6c\x65\144\74\57\x62\x3e\41\40\x3c\x62\162\x3e\15\xa\40\x20\40\x20\40\x20\40\40\40\x20\40\40\40\40\x20\40\120\x6c\145\x61\163\x65\x20\74\141\40\150\x72\x65\x66\x3d" . $Vm . "\x3e\162\x65\156\145\167\x20\171\157\x75\162\x20\x6c\x69\143\145\x6e\163\x65\x3c\57\x61\76\40\156\157\x77\40\164\157\x20\162\x65\x73\x75\155\145\x20\x74\x68\x65\40\123\x53\x4f\x20\x73\145\x72\166\x69\143\145\163\x20\x6f\156\40\x79\157\x75\162\40\127\157\162\x64\120\x72\x65\163\x73\x20\x77\x65\142\163\x69\164\x65\56\x3c\57\x70\76\x3c\57\144\x69\166\76";
        H1:
        goto Sa;
        QU:
        echo "\74\144\151\166\40\163\164\x79\154\145\x3d\x22\155\x61\x72\147\151\156\x2d\164\157\x70\72\61\45\73\x22\x20\143\154\141\x73\163\75\x22\156\x6f\x74\x69\x63\145\x20\156\x6f\x74\x69\143\x65\x2d\145\x72\x72\157\x72\x22\x3e" . $Kn . "\74\x70\40\x73\164\171\154\x65\75\x22\x66\x6f\156\164\55\163\151\172\145\x3a\x6d\145\x64\151\x75\x6d\x3b\x20\42\x3e\x59\157\x75\162\40\x6d\151\x6e\151\117\162\x61\156\x67\x65\40\127\x6f\x72\144\x50\162\145\x73\x73\x20\111\x44\x50\x20\x50\x72\145\x6d\151\x75\x6d\x20\x50\154\165\147\151\156\x20\154\x69\x63\145\156\163\145\x20\x68\x61\x73\40\74\142\40\x73\x74\x79\x6c\145\75\42\x63\157\154\157\x72\x3a\162\x65\144\x3b\x22\76\x65\x78\160\151\x72\x65\x64\x3c\x2f\x62\x3e\x21\40\x3c\x62\x72\76\15\xa\40\x20\40\40\x20\40\40\40\x20\40\x20\x20\40\x20\x20\40\x50\x6c\145\141\x73\145\40\74\x61\x20\150\x72\145\x66\x3d" . $Vm . "\76\x72\x65\156\145\x77\x20\x79\157\x75\x72\40\x6c\x69\x63\x65\156\163\145\74\57\141\76\40\156\x6f\x77\40\164\157\40\162\145\163\165\x6d\145\x20\x74\150\x65\x20\x53\x53\117\x20\x73\145\x72\x76\x69\143\145\x73\40\157\x6e\x20\x79\157\165\x72\40\x57\x6f\x72\x64\x50\x72\145\x73\x73\40\x77\145\142\163\151\x74\x65\x2e\x3c\x2f\x70\76\74\x2f\x64\151\166\76";
        Sa:
        goto C7;
        VL:
        echo "\74\144\151\x76\x20\163\164\171\154\145\75\42\x6d\141\162\147\151\x6e\55\164\x6f\160\x3a\x31\x25\x3b\42\x20\x63\x6c\x61\163\x73\75\42\156\x6f\x74\x69\x63\145\x20\x6e\x6f\x74\151\x63\x65\55\167\x61\162\156\x69\x6e\147\42\x3e" . $Kn . "\x3c\x70\x20\163\164\x79\x6c\x65\75\42\146\x6f\x6e\x74\x2d\x73\x69\x7a\x65\x3a\x6d\x65\144\151\x75\155\73\40\x22\x3e\131\157\165\162\x20\x6d\151\x6e\151\x4f\162\x61\156\147\x65\40\127\157\162\144\120\162\145\x73\163\40\111\x44\x50\x20\x50\162\145\155\151\x75\155\x20\120\154\x75\147\151\x6e\x20\x6c\151\143\x65\156\163\x65\x20\x69\163\x20\x65\170\160\151\x72\151\156\147\40\167\x69\x74\150\x69\x6e\40\74\142\x3e" . $HK . "\x20\x64\x61\171\163\x3c\57\142\x3e\x21\40\x3c\142\162\x3e\15\12\x20\x20\40\x20\x20\40\40\40\40\40\x20\x20\x20\x20\x20\x20\120\x6c\145\x61\163\145\x20\x3c\x61\x20\x68\162\x65\x66\x3d" . $Vm . "\x3e\162\x65\x6e\145\x77\40\x79\157\x75\x72\40\x6c\151\x63\145\156\163\145\x3c\x2f\x61\76\x20\x6e\x6f\167\x20\x74\157\40\145\x6e\x73\x75\162\145\x20\x73\145\141\x6d\x6c\145\x73\x73\40\x53\123\x4f\56\x3c\x2f\x70\76\74\x2f\x64\x69\x76\x3e";
        C7:
        qi:
    }
    function mo_idp_add_dashboard_widgets()
    {
        if (!current_user_can("\155\141\156\141\147\x65\137\x6f\160\x74\151\x6f\x6e\x73")) {
            goto bY;
        }
        add_meta_box("\155\157\137\151\x64\x70\x5f\151\156\146\157\137\167\x69\144\x67\x65\164", "\155\x69\x6e\x69\x4f\x72\x61\x6e\147\145\x20\x57\x6f\162\144\120\162\145\x73\163\x20\x49\104\x50\x20\120\162\145\155\x69\x75\x6d\x20\120\x6c\x75\x67\x69\156", array($this, "\x6d\x6f\x5f\x69\144\160\137\x69\x6e\x66\157\137\x77\151\144\x67\x65\164\x5f\x66\165\156\143\164\x69\x6f\156"), "\144\x61\163\x68\142\157\141\162\x64", "\163\151\x64\x65", "\x68\151\147\x68");
        bY:
    }
    function mo_idp_info_widget_function($post, $cv)
    {
        global $dbIDPQueries;
        $p6 = $dbIDPQueries->get_users();
        $kS = MoIDPUtility::isBlank($this->allowed) ? null : $this->allowed - $p6;
        $wy = new \DateTime("\x40{$this->expiryDate}");
        $Vm = add_query_arg(array("\x70\x61\147\145" => "\151\x64\160\137\x73\165\x70\160\157\x72\x74"), admin_url("\x61\144\155\x69\x6e\56\x70\x68\160"));
        $Kn = "\x3c\x64\x69\x76\76\x3c\x69\155\x67\40\163\164\x79\154\x65\x3d\x22\x66\154\x6f\141\x74\72\x6c\145\146\164\73\x22\40\x73\x72\143\75\42" . MSI_MOLOGO_URL . "\x22\40\x68\x65\151\147\150\164\75\x22\64\70\x22\40\x77\x69\x64\164\150\x3d\42\64\70\42\x3e\74\x2f\x64\151\x76\76\xd\12\x20\40\40\x20\x20\x20\x20\40\40\40\40\40\x20\x20\40\x20\x3c\x68\x31\40\163\x74\171\x6c\145\75\42\x74\x65\170\x74\x2d\141\x6c\151\x67\156\x3a\143\145\x6e\164\x65\x72\73\x22\x3e\x6d\x69\x6e\151\x4f\162\x61\x6e\x67\145\40\127\x50\x20\111\104\120\40\x53\123\x4f\x3c\57\x68\61\x3e\15\12\40\40\40\x20\40\40\x20\40\x20\x20\x20\40\40\x20\x20\40\74\142\162\x3e\15\xa\40\x20\x20\40\x20\40\40\x20\x20\40\x20\x20\x20\40\x20\40\x3c\x64\x69\166\40\x73\164\x79\154\145\75\x22\155\141\x72\x67\x69\x6e\x3a\141\165\164\157\x3b\40\x74\145\x78\164\x2d\141\154\x69\147\156\x3a\143\145\156\x74\x65\162\73\x22\x3e\xd\xa\40\x20\40\40\40\40\x20\x20\40\40\x20\40\40\x20\40\x20\40\x20\40\40\x3c\x64\151\166\x20\143\154\x61\163\x73\x3d\42\x6d\157\137\151\x64\x70\137\x61\x64\155\x69\x6e\x5f\x77\x69\x64\147\145\164\42\76\15\xa\x20\40\40\40\40\40\x20\x20\40\x20\40\x20\40\x20\x20\x20\40\x20\x20\x20\40\40\40\x20\x3c\144\151\166\x20\x63\x6c\141\163\163\75\x22\155\x6f\137\151\144\160\x5f\x61\144\155\151\x6e\137\167\x69\x64\147\x65\164\137\x6b\145\171\42\76\101\143\143\157\165\x6e\164\x20\105\170\160\151\x72\171\74\x2f\x64\151\x76\76\15\xa\x20\x20\x20\x20\x20\x20\x20\40\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\40\40\x20\x20\40\40\x3c\144\151\166\40\143\x6c\x61\x73\163\x3d\x22\x6d\157\x5f\151\144\x70\x5f\141\144\155\151\x6e\137\167\x69\144\147\145\164\x5f\x76\141\154\x75\145\42\x3e" . $wy->format("\x4d\x2d\144\x2d\x59") . "\x3c\57\144\x69\166\76\xd\xa\40\x20\40\40\x20\x20\40\x20\x20\40\x20\x20\40\x20\40\40\x20\40\40\x20\74\57\144\x69\166\x3e\15\xa\x20\40\40\x20\x20\x20\x20\x20\x20\x20\x20\40\40\x20\40\40\40\40\x20\40\x3c\x64\x69\x76\x20\x63\154\x61\x73\x73\x3d\42\x6d\157\x5f\x69\144\160\137\x61\144\155\x69\156\x5f\x77\x69\x64\147\x65\x74\x22\x3e\xd\12\x20\x20\x20\x20\40\40\40\x20\40\40\x20\x20\40\x20\x20\40\x20\x20\40\40\40\x20\40\x20\74\144\x69\166\40\143\x6c\141\163\163\75\42\x6d\157\x5f\x69\x64\x70\x5f\x61\144\155\x69\x6e\137\x77\151\144\147\145\x74\137\153\x65\171\42\76\122\x65\x6d\x61\151\156\151\156\x67\40\x53\x53\x4f\x20\x55\x73\145\x72\x73\x3c\x2f\x64\x69\166\x3e\15\xa\x20\40\40\40\x20\40\x20\x20\x20\x20\x20\40\x20\40\40\x20\x20\40\40\x20\40\40\40\40\74\x64\151\166\40\143\x6c\141\x73\x73\x3d\42\x6d\157\137\151\144\160\137\141\144\x6d\x69\156\137\x77\x69\144\147\x65\164\137\166\x61\154\165\x65\42\76" . $kS . "\74\57\144\x69\x76\x3e\15\12\x20\x20\40\40\x20\x20\x20\x20\40\40\x20\40\x20\x20\40\40\40\x20\40\x20\x3c\57\144\x69\166\x3e\xd\12\x20\x20\40\40\40\40\40\40\40\40\40\40\40\40\40\40\x20\40\40\x20\74\142\x72\76\74\x62\162\76\xd\12\40\x20\x20\x20\40\x20\40\40\x20\x20\x20\x20\40\x20\x20\40\40\40\40\x20\x3c\144\151\x76\40\x69\x64\75\x22\x69\x64\x70\x2d\161\165\x69\143\x6b\x6c\151\x6e\153\x73\x22\76\xd\12\x20\40\40\40\x20\x20\40\40\40\x20\x20\x20\40\x20\40\x20\x20\x20\x20\x20\x20\40\40\x20\x3c\x61\40\x63\154\141\x73\x73\x3d\42\x61\144\144\x2d\x6e\145\x77\x2d\150\62\42\x20\150\162\x65\146\75\x22" . esc_html($Vm) . "\x22\x3e\103\x6f\156\x74\x61\x63\164\x20\x55\163\74\x2f\141\x3e\15\xa\x20\40\40\40\x20\x20\x20\40\x20\40\x20\40\x20\40\x20\40\x20\x20\x20\40\x3c\57\x64\151\x76\76\15\12\40\x20\x20\40\x20\x20\40\40\x20\40\40\40\40\x20\40\40\74\x2f\x64\x69\166\76";
        echo $Kn;
    }
    function mo_idp_update_crons()
    {
        if (wp_next_scheduled("\155\x6f\137\x69\x64\160\x5f\166\x65\x72\x73\151\157\x6e\x5f\x63\x68\145\143\x6b")) {
            goto Kp;
        }
        wp_schedule_event(time(), "\x64\141\x69\154\x79", "\x6d\x6f\137\x69\x64\x70\x5f\166\145\x72\x73\151\157\156\137\143\150\145\143\x6b");
        Kp:
    }
    function mo_idp_lversion_check()
    {
        $this->lkHandler->refresh_sp_users_count();
    }
}
