<?php


use IDP\Helper\Utilities\MoIDPUtility;
use IDP\Helper\Constants\MoIDPConstants;
global $dbIDPQueries;
$aw = $dbIDPQueries->get_sp_list();
$vh = !$mW || !$JM ? "\144\151\163\x61\142\154\x65\144" : '';
$Vr = $_GET["\x70\x61\x67\145"];
$pt = isset($_GET["\x61\143\x74\x69\157\156"]) ? $_GET["\141\143\164\151\157\x6e"] : '';
$zA = $pt == "\x61\144\x64\137\167\163\x66\145\x64\x5f\x61\x70\x70" ? "\x57\123\106\x45\104" : ($pt == "\x61\x64\144\137\152\x77\x74\137\141\160\x70" ? "\112\x57\x54" : "\x53\x41\x4d\x4c");
$aq = remove_query_arg(array("\141\x63\164\151\157\x6e", "\151\x64"), $_SERVER["\122\x45\x51\x55\x45\x53\x54\137\125\122\x49"]);
$eB = remove_query_arg(array("\x61\143\x74\151\x6f\156", "\x69\x64"), $_SERVER["\122\105\x51\125\x45\x53\124\137\125\x52\111"]);
$wV = add_query_arg(array("\x70\141\147\x65" => $i_->_menuSlug), $_SERVER["\x52\x45\x51\125\105\123\124\137\125\122\x49"]);
$M1 = add_query_arg(array("\x70\141\147\145" => $z3->_menuSlug), $_SERVER["\122\105\121\125\105\123\x54\x5f\x55\122\x49"]);
$y3 = add_query_arg(array("\141\143\164\151\x6f\x6e" => "\144\145\154\x65\x74\145\x5f\163\x70\x5f\163\x65\x74\x74\151\156\147\163"), $_SERVER["\122\x45\x51\125\105\123\x54\137\x55\122\x49"]) . "\x26\x69\144\75";
$je = add_query_arg(array("\141\x63\x74\x69\x6f\x6e" => "\141\144\144\x5f\163\x70"), $_SERVER["\x52\x45\121\x55\105\x53\x54\137\x55\122\x49"]);
$yU = add_query_arg(array("\x61\x63\x74\151\x6f\156" => "\x73\x68\157\x77\x5f\x69\x64\x70\137\163\145\164\164\151\156\x67\x73"), $_SERVER["\x52\x45\x51\x55\105\123\124\x5f\125\x52\x49"]) . "\46\151\x64\75";
$jy = "\x43\157\x70\171\40\x61\x6e\x64\x20\x50\x61\163\x74\145\x20\164\x68\x65\40\x63\157\156\x74\x65\x6e\x74\40\146\162\157\155\x20\164\x68\x65\40\x64\157\167\x6e\154\157\141\x64\x65\144\40\143\x65\162\164\x69\x66\x69\x63\141\164\145\x20" . "\x6f\x72\40\x63\157\160\x79\40\164\150\x65\x20\143\157\156\164\x65\156\164\x20\145\x6e\x63\x6c\x6f\x73\x65\x64\x20\x69\156\40\x27\130\x35\x30\x39\x43\145\x72\164\151\x66\x69\x63\141\x74\x65\47\x20\164\x61\147\40\x28\x68\x61\x73\x20\160\141\162\x65\156\x74\40" . "\164\x61\x67\x20\x27\113\x65\x79\104\x65\x73\x63\162\x69\x70\x74\x6f\162\40\165\x73\145\75\x73\x69\147\156\151\156\x67\x27\51\40\x69\156\40\x53\x50\x2d\115\x65\x74\141\x64\x61\x74\141\40\130\115\x4c\40\x66\151\x6c\x65";
$A6 = "\103\x6f\x70\x79\x20\x61\156\x64\x20\x50\x61\x73\164\x65\40\164\x68\x65\x20\143\157\156\x74\x65\156\164\40\146\x72\157\x6d\40\x74\150\145\x20\x64\157\x77\156\x6c\157\141\144\145\144\x20\x63\x65\x72\164\x69\x66\x69\143\141\164\145\40\x6f\162\x20" . "\143\157\x70\x79\x20\164\150\145\x20\143\157\156\x74\145\x6e\164\x20\x65\156\143\x6c\157\x73\x65\x64\x20\x69\x6e\x20\x27\x58\x35\60\71\103\x65\x72\x74\151\x66\151\143\x61\164\x65\47\x20\164\x61\x67\x20\50\150\x61\163\x20\x70\141\x72\145\156\164\x20\164\x61\x67\40" . "\47\113\145\x79\104\145\163\143\162\151\160\x74\x6f\162\40\x75\x73\x65\x3d\x65\156\143\x72\x79\x70\x74\x69\x6f\156\x27\x29\x20\151\156\x20\123\120\x2d\115\x65\x74\x61\144\x61\164\141\x20\130\115\114\x20\x66\151\154\145";
$jX = TRUE;
if (isset($pt) && $pt == "\x73\x68\x6f\167\x5f\151\144\160\137\x73\145\164\x74\151\x6e\147\163") {
    goto p0;
}
if (isset($pt) && $pt == "\144\x65\154\145\x74\x65\137\163\x70\137\163\145\x74\164\151\x6e\147\x73") {
    goto L0;
}
if (isset($pt) && ($pt == "\x61\x64\x64\137\163\160" || $pt == "\141\x64\144\x5f\x77\x73\x66\x65\144\137\x61\x70\x70") || $pt == "\141\144\144\x5f\x6a\167\x74\137\x61\160\160") {
    goto XJ;
}
if (empty($aw)) {
    goto my;
}
$fX = MoIDPUtility::gssc();
$Rp = get_site_option("\155\x6f\x5f\x69\144\160\x5f\163\160\137\x63\x6f\x75\x6e\164");
$tl = max((int) $Rp - (int) $fX, 0);
$p6 = $dbIDPQueries->get_users();
$xO = get_site_option("\155\157\137\x69\144\x70\137\x63\x75\163\x74\x6f\x6d\145\162\137\x74\x6f\x6b\145\156");
$yM = \AESEncryption::decrypt_data(get_site_option("\155\157\x5f\x69\144\x70\137\165\x73\x72\137\x6c\x6d\x74"), $xO);
$kS = MoIDPUtility::isBlank($yM) ? null : $yM - $p6;
$WR = get_site_option("\x6d\x6f\137\x69\144\x70\137\163\150\157\167\137\163\x73\x6f\x5f\x75\x73\x65\x72\x73") ? "\143\150\145\143\x6b\145\x64" : '';
include MSI_DIR . "\x76\x69\145\x77\x73\57\151\x64\x70\x2d\154\151\163\x74\56\160\150\160";
goto Fb;
my:
$pg = $zA == "\x53\x41\115\114" ? "\101\x44\104\40\116\x45\x57\x20\x53\x41\x4d\114\x20\x53\x45\x52\126\x49\103\x45\40\120\122\117\126\111\104\105\122" : ($zA == "\112\127\124" ? "\101\x44\104\40\116\105\x57\40\x4a\x57\124\40\101\120\120" : "\101\x44\x44\40\116\x45\x57\x20\127\x53\x2d\x46\x45\x44\40\x53\105\x52\126\x49\103\x45\40\120\x52\x4f\x56\x49\x44\105\x52");
$bX = '';
$di = '';
if ($zA == "\x4a\x57\124") {
    goto mZ;
}
if ($zA == "\x57\123\106\105\x44") {
    goto C9;
}
include MSI_DIR . "\166\x69\x65\x77\163\57\x69\x64\160\x2d\163\x65\x74\x74\151\x6e\147\x73\56\160\x68\160";
goto DI;
C9:
include MSI_DIR . "\166\x69\x65\x77\163\x2f\x69\x64\160\55\167\x73\x66\145\x64\55\163\145\x74\164\x69\x6e\x67\x73\56\x70\150\x70";
DI:
goto ZE;
mZ:
include MSI_DIR . "\166\151\145\167\163\x2f\x69\x64\x70\55\x6a\167\164\x2d\163\x65\164\164\x69\x6e\x67\163\x2e\x70\x68\x70";
ZE:
Fb:
goto Dh;
XJ:
$di = '';
$fX = MoIDPUtility::gssc();
$Rp = json_decode(MoIDPUtility::ccl(), true);
$pg = $zA == "\123\x41\x4d\x4c" ? "\x41\x44\104\40\x4e\105\x57\x20\x53\x41\x4d\x4c\40\123\x45\x52\x56\x49\x43\x45\40\120\x52\117\126\111\104\105\x52" : ($zA == "\112\127\x54" ? "\101\104\x44\40\x4e\105\127\x20\x4a\x57\124\x20\x41\120\x50" : "\101\104\x44\40\x4e\105\127\40\127\x53\55\x46\105\104\40\123\105\x52\126\x49\103\105\40\120\x52\117\126\111\104\x45\122");
$bX = '';
$hy = MoIDPConstants::HOSTNAME;
$ER = $hy . "\57\155\x6f\141\163\57\x6c\157\147\x69\x6e";
$Cy = get_site_option("\x6d\x6f\137\151\144\x70\137\141\x64\x6d\151\156\137\x65\x6d\x61\151\x6c");
if (strcasecmp($Rp["\163\x74\x61\x74\x75\x73"], "\123\125\103\x43\x45\123\123") == 0 && $Rp["\156\x6f\x4f\146\x53\x50"] > $fX) {
    goto sP;
}
include MSI_DIR . "\166\x69\x65\x77\x73\57\151\x64\x70\x2d\x65\x72\x72\x6f\x72\x2e\160\150\160";
goto vc;
sP:
update_site_option("\x6d\x6f\x5f\x69\144\160\x5f\x73\160\x5f\x63\x6f\x75\x6e\x74", $Rp["\156\x6f\117\146\123\120"]);
if ($zA == "\112\127\124") {
    goto GA;
}
if ($zA == "\127\x53\106\x45\104") {
    goto X1;
}
include MSI_DIR . "\166\151\145\167\163\57\x69\x64\160\x2d\163\x65\164\x74\x69\x6e\x67\x73\x2e\160\x68\x70";
goto Ih;
X1:
include MSI_DIR . "\x76\151\x65\167\x73\57\151\x64\160\x2d\x77\x73\x66\145\144\55\x73\145\164\164\151\x6e\147\x73\56\x70\x68\160";
Ih:
goto D3;
GA:
include MSI_DIR . "\x76\151\x65\x77\163\57\x69\x64\x70\55\x6a\167\164\x2d\x73\145\x74\164\151\x6e\147\163\56\160\150\x70";
D3:
vc:
Dh:
goto FU;
L0:
$di = $dbIDPQueries->get_sp_data($_GET["\x69\144"]);
include MSI_DIR . "\x76\x69\x65\x77\x73\57\151\x64\x70\55\x64\145\x6c\x65\164\x65\x2e\160\150\x70";
FU:
goto be;
p0:
$di = $dbIDPQueries->get_sp_data($_GET["\x69\x64"]);
$pg = "\105\104\111\x54\x20" . (!empty($di) ? $di->mo_idp_sp_name : "\111\x44\120") . "\x20\x53\105\x54\x54\111\x4e\107\123";
$jX = FALSE;
$C2 = $di->mo_idp_protocol_type == "\x4a\127\124" ? "\164\145\163\164\137\x6a\167\x74" : "\164\x65\163\164\x43\157\156\x66\x69\x67";
$bX = site_url() . "\57\x3f\157\160\164\x69\x6f\156\x3d" . $C2 . "\46\141\x63\x73\75" . $di->mo_idp_acs_url . "\46\x69\163\163\165\x65\x72\x3d" . $di->mo_idp_sp_issuer . "\46\144\145\x66\141\165\x6c\x74\x52\145\154\x61\x79\x53\x74\141\164\145\x3d" . $di->mo_idp_default_relayState;
if ($di->mo_idp_protocol_type == "\x4a\127\x54") {
    goto qG;
}
if ($di->mo_idp_protocol_type == "\x57\x53\106\105\x44") {
    goto s2;
}
include MSI_DIR . "\x76\x69\x65\x77\163\57\151\144\x70\55\x73\x65\x74\x74\151\x6e\147\x73\56\160\150\x70";
goto UL;
s2:
include MSI_DIR . "\166\151\x65\x77\x73\57\151\144\160\55\x77\x73\x66\145\x64\x2d\163\145\164\x74\151\x6e\147\x73\56\160\x68\x70";
UL:
goto fb;
qG:
include MSI_DIR . "\166\x69\x65\x77\163\x2f\151\x64\x70\x2d\152\x77\x74\x2d\163\x65\x74\x74\x69\x6e\147\x73\x2e\x70\x68\x70";
fb:
be: