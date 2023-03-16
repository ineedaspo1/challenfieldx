<?php


namespace IDP\Schedulers;

use IDP\Helper\Utilities\MoIDPUtility;
class BaseScheduler
{
    public $schedules = array("\x68\x6f\x75\x72\x6c\171", "\167\x65\145\x6b\x6c\171", "\171\145\x61\162\x6c\171", "\145\x76\x65\162\x79\137\x31\65\137\144\141\x79\x73", "\x65\166\145\x72\x79\x5f\x31\x30\x5f\x64\141\x79\163", "\155\x6f\x6e\164\x68\x6c\171", "\155\151\156\165\x74\x65\x6c\171", "\145\166\145\162\x79\x5f\x35\x5f\155\x69\x6e\x75\164\145\x73", "\x65\x76\145\162\x79\x5f\x33\x5f\x6d\x69\156\x75\x74\x65\x73");
    public $events = array("\x79\x65\141\x72\x6c\171\x6c\x69\x63\x65\156\x73\x65\x43\150\145\x63\153", "\x31\x35\x44\x61\171\x52\x65\103\150\145\x63\153", "\x35\104\141\x79\122\145\x43\150\x65\x63\x6b", "\146\x69\156\141\x6c\103\150\x65\x63\153");
    public $eventActionPair = array("\171\x65\141\x72\x6c\171\154\x69\143\145\156\x73\x65\103\x68\145\x63\153" => array("\111\104\x50\134\101\x63\164\151\x6f\156\163\x5c\x4c\113\x48\141\156\x64\x6c\145\162", "\143\x68\145\x63\x6b\x4c\x46\x6f\x72\122"), "\61\x35\x44\141\x79\x52\145\103\150\x65\143\x6b" => array("\x49\104\x50\x5c\x41\143\x74\151\x6f\x6e\163\x5c\x4c\113\110\141\156\144\154\x65\x72", "\143\x68\145\143\153\114\106\157\x72\122"), "\x35\x44\141\x79\122\145\103\x68\x65\x63\153" => array("\x49\x44\120\134\101\143\x74\x69\157\x6e\163\x5c\114\x4b\110\141\156\144\154\x65\162", "\143\x68\145\143\153\114\106\157\x72\x52"), "\146\151\x6e\x61\154\103\150\145\x63\x6b" => array("\111\104\120\134\x41\x63\x74\x69\x6f\156\163\134\114\x4b\110\x61\156\144\154\145\x72", "\x43\x68\x65\x63\153\x49\146\125\x73\145\162\110\x61\163\x52\110\151\x73\114"));
    public function unscheduleAllEvents()
    {
        if (!MSI_DEBUG) {
            goto Ck;
        }
        MoIDPUtility::mo_debug("\125\x6e\x73\143\150\145\x64\165\154\x69\156\147\40\141\154\x6c\x20\x65\x76\x65\x6e\x74\163");
        Ck:
        foreach ($this->events as $xO => $l7) {
            wp_unschedule_event(wp_next_scheduled($l7), $l7);
            iR:
        }
        QP:
    }
}
