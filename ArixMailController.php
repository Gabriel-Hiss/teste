<?php

namespace Pterodactyl\Http\Controllers\Admin\Arix;

use Illuminate\View\View;
use Illuminate\Support\Facades\Http as AASupport;
use Prologue\Alerts\AlertsMessageBag;
use Illuminate\View\Factory as ViewFactory;
use Pterodactyl\Http\Controllers\Controller;
use Pterodactyl\Http\Requests\Admin\Arix\ArixMailRequest;
use Pterodactyl\Contracts\Repository\SettingsRepositoryInterface;

class ArixMailController extends Controller
{
    public function __construct(private AlertsMessageBag $alert, private SettingsRepositoryInterface $settings, private ViewFactory $view)
    {
    }

    public function index(): View
    {
        return $this->view->make(base64_decode("\131\127\x52\x74\x61\x57\x34\165\131\x58\112\x70\145\x43\65\164\x59\x57\154\163"), [base64_decode("\142\127\106\x70\x62\x46\71\152\142\x32\170\166\143\147\x3d\x3d") => $this->settings->get(base64_decode("\143\62\126\x30\x64\x47\154\165\132\63\x4d\66\x4f\155\106\171\141\130\147\66\142\127\106\160\142\106\71\x6a\x62\x32\170\x76\143\x67\x3d\75"), base64_decode("\111\x7a\x52\150\115\172\126\x6a\132\x67\75\x3d")), base64_decode("\x62\127\x46\x70\x62\106\x39\x69\131\127\116\x72\132\63\x4a\166\144\127\x35\153\121\x32\71\163\142\x33\x49\x3d") => $this->settings->get(base64_decode("\143\62\x56\60\x64\107\154\x75\x5a\x33\115\x36\x4f\x6d\x46\x79\141\x58\x67\x36\x62\x57\x46\160\142\106\71\151\x59\x57\116\162\132\x33\112\166\x64\127\65\153\121\62\x39\163\x62\63\111\75"), base64_decode("\x49\x30\131\x31\122\152\x56\x47\x52\x67\75\75")), base64_decode("\142\x57\x46\160\x62\x46\71\163\x62\x32\x64\x76") => $this->settings->get(base64_decode("\143\62\x56\60\x64\107\154\x75\x5a\63\x4d\66\x4f\155\x46\171\141\x58\x67\x36\x62\x57\x46\160\x62\x46\71\x73\x62\62\144\166"), base64_decode("\x61\110\x52\60\143\x48\115\x36\114\171\71\150\x63\x6d\154\x34\x4c\155\x64\156\x4c\x32\106\x79\x61\x58\147\x75\x63\107\x35\x6e")), base64_decode("\x62\127\106\x70\x62\106\71\x73\x62\x32\144\166\x52\x6e\x56\163\x62\x41\x3d\x3d") => $this->settings->get(base64_decode("\143\62\x56\60\x64\107\x6c\x75\132\63\x4d\x36\x4f\155\x46\x79\141\130\x67\x36\142\127\x46\x70\142\x46\71\163\x62\x32\x64\x76\122\156\x56\x73\x62\101\x3d\75"), false), base64_decode("\x62\x57\x46\160\142\x46\x39\x74\142\x32\122\x6c") => $this->settings->get(base64_decode("\143\62\x56\60\144\x47\x6c\x75\132\63\115\66\117\155\x46\171\x61\x58\147\66\x62\x57\106\160\142\106\x39\x74\142\62\x52\x6c"), base64_decode("\x62\x47\154\x6e\x61\110\121\75")), base64_decode("\x62\x57\x46\160\x62\106\71\153\141\130\116\x6a\142\x33\112\x6b") => $this->settings->get(base64_decode("\143\62\126\60\x64\107\154\x75\132\63\115\66\117\155\x46\171\x61\x58\x67\66\x62\127\106\x70\142\106\x39\153\x61\x58\116\x6a\x62\x33\112\x6b"), base64_decode("\141\x48\x52\60\143\x48\115\66\x4c\x79\x39\x68\x63\x6d\x6c\x34\114\x6d\x64\x6e\x4c\62\x52\x70\143\x32\x4e\166\143\155\x51\x3d")), base64_decode("\x62\127\106\160\x62\106\71\x30\144\x32\x6c\x30\144\x47\x56\171") => $this->settings->get(base64_decode("\143\x32\126\60\x64\x47\154\x75\132\63\x4d\x36\117\155\106\171\x61\x58\147\x36\142\x57\106\160\x62\106\x39\60\x64\62\154\x30\x64\107\x56\x79"), base64_decode("\x61\110\122\x30\x63\110\x4d\66\x4c\x79\x39\64\x4c\x6d\x4e\166\x62\x51\75\75")), base64_decode("\142\127\106\160\x62\106\x39\155\131\x57\x4e\x6c\131\155\x39\166\x61\x77\x3d\75") => $this->settings->get(base64_decode("\x63\x32\x56\x30\x64\107\x6c\165\x5a\x33\x4d\x36\x4f\155\x46\x79\x61\x58\x67\66\x62\127\x46\x70\142\106\x39\x6d\131\127\x4e\154\x59\x6d\71\x76\x61\167\75\x3d"), base64_decode("\x61\x48\x52\x30\143\x48\115\x36\x4c\x79\x39\155\x59\127\x4e\x6c\131\155\x39\166\x61\171\65\x6a\x62\62\x30\x3d")), base64_decode("\x62\x57\x46\160\142\106\x39\x70\142\156\x4e\x30\131\127\x64\x79\x59\127\x30\75") => $this->settings->get(base64_decode("\x63\x32\x56\60\x64\107\x6c\165\132\x33\115\x36\117\155\106\x79\141\130\147\x36\x62\127\106\160\x62\x46\71\x70\142\x6e\116\60\x59\127\x64\171\131\x57\60\75"), base64_decode("\x61\110\122\60\143\x48\115\x36\x4c\171\x39\160\x62\156\x4e\x30\x59\127\x64\171\131\127\x30\x75\131\62\71\x74")), base64_decode("\142\x57\106\160\142\x46\71\163\x61\127\65\x72\x5a\127\x52\x70\x62\x67\75\75") => $this->settings->get(base64_decode("\x63\62\126\x30\144\x47\154\x75\132\x33\x4d\x36\117\x6d\x46\x79\141\x58\147\66\142\x57\106\x70\142\106\71\163\141\x57\x35\x72\x5a\x57\x52\x70\x62\147\x3d\75"), base64_decode("\x61\110\122\x30\x63\110\x4d\x36\x4c\171\x39\x73\141\x57\x35\162\132\127\x52\x70\x62\151\x35\x6a\142\62\60\x3d")), base64_decode("\142\127\x46\x70\142\106\x39\65\142\63\126\60\144\x57\x4a\154") => $this->settings->get(base64_decode("\143\x32\126\60\144\107\154\x75\132\63\x4d\66\x4f\155\106\x79\x61\130\147\x36\x62\x57\106\160\x62\106\71\65\142\x33\126\x30\x64\127\x4a\x6c"), base64_decode("\141\x48\x52\x30\x63\110\115\66\x4c\171\x39\x35\x62\x33\126\x30\x64\x57\112\x6c\x4c\x6d\x4e\166\142\121\75\x3d")), base64_decode("\x62\x57\106\160\142\x46\71\172\144\x47\x46\60\x64\130\x4d\75") => $this->settings->get(base64_decode("\x63\62\126\60\x64\x47\x6c\x75\132\63\x4d\66\x4f\x6d\x46\171\141\x58\147\x36\142\127\106\x70\142\x46\71\x7a\x64\x47\106\60\144\x58\x4d\x3d"), base64_decode("\x61\110\x52\x30\x63\x48\x4d\66\114\x79\71\x68\143\x6d\154\x34\114\x6d\x64\x6e\114\63\116\60\131\130\122\61\x63\167\x3d\75")), base64_decode("\x62\x57\106\x70\142\106\x39\x69\x61\x57\x78\163\x61\127\65\x6e") => $this->settings->get(base64_decode("\143\62\126\x30\144\107\x6c\x75\x5a\63\115\66\x4f\155\106\x79\x61\x58\x67\66\142\127\106\x70\142\106\x39\x69\141\x57\170\163\x61\127\65\156"), base64_decode("\141\x48\x52\60\x63\x48\x4d\x36\x4c\x79\71\x68\143\155\154\64\114\x6d\x64\156\114\62\112\x70\142\107\170\160\x62\x6d\x63\75")), base64_decode("\x62\x57\106\x70\142\x46\x39\x7a\x64\x58\x42\x77\142\63\x4a\x30") => $this->settings->get(base64_decode("\143\62\126\x30\144\x47\154\x75\132\63\115\x36\x4f\x6d\x46\x79\141\x58\x67\x36\142\127\x46\160\142\x46\x39\172\x64\130\102\167\x62\x33\112\x30"), base64_decode("\141\x48\x52\x30\x63\x48\x4d\x36\114\x79\71\150\143\x6d\154\64\x4c\x6d\x64\x6e\114\x33\116\61\x63\110\102\166\x63\x6e\121\x3d"))]);
    }

    public function store(ArixMailRequest $request)
    {
        goto D76d19ef69840286;
        d51ab1955b034744:
        goto Ccf8946157cac084;
        goto F610e276c5b3e073;
        B6bf19b189749040:
        $endpoint = base64_decode("\x61\x48\x52\x30\143\110\x4d\x36\x4c\171\x39\x68\143\107\153\x75\131\x58\x4a\160\x65\x43\65\156\x5a\x79\x39\171\132\130\116\166\x64\130\112\x6a\132\x53\x39\150\x63\155\x6c\64\x4c\130\102\60\x5a\x58\112\166\x5a\107\106\152\x64\110\154\163\114\x33\132\x6c\143\155\154\x6d\145\121\75\75");
        goto F66bf2a91bceff45;
        a9a8dd89993d8a0c: Ccf8946157cac084:
        goto c8fdfef8175521c1;
        F610e276c5b3e073: d1d3904e65a43493:
        goto dc313420117ede67;
        c61cb3a338245321:
        foreach ($request->normalize() as $key => $value) {
            $this->settings->set(base64_decode("\x63\62\x56\x30\x64\107\x6c\165\132\x33\115\x36\x4f\x67\75\x3d") . $key, $value);
            C023729d6b588816:
        }
        goto E579f1fbdf738762;
        D76d19ef69840286:
//        $api = 'ZnVjayB5b3UgYXJpeCE=';
        goto B6bf19b189749040;
        Aba0f6f11eb55931:
//        $responseData = $response->json();
        goto f036e5b9bce4311c;
        f036e5b9bce4311c:
//        if (!$responseData[$respond]) {
//            goto d1d3904e65a43493;
//        }
        goto c61cb3a338245321;
        E579f1fbdf738762: F28f68d99aec574f:
        goto A29dd251a0149ae0;
        c8fdfef8175521c1:
        return redirect()->route(base64_decode("\131\x57\x52\164\141\127\64\165\x59\x58\112\x70\145\x43\65\164\131\127\154\163"));
        goto c073e426b4983eda;
        F66bf2a91bceff45:
        $respond = base64_decode("\143\63\126\x6a\x59\62\126\172\143\167\x3d\75");
        goto b1724ccd02442df4;
        A29dd251a0149ae0:
        $this->alert->success(base64_decode("\x56\107\x68\x6c\x62\x57\x55\x67\143\62\126\60\144\x47\x6c\x75\x5a\63\x4d\147\x61\x47\x46\x32\x5a\x53\x42\151\132\x57\126\165\111\110\x56\x77\132\x47\106\60\132\127\121\x67\143\63\126\x6a\131\x32\126\172\143\62\x5a\x31\142\x47\170\x35\x4c\147\75\x3d"))->flash();
        goto d51ab1955b034744;
        Eec06bbdd9f66b55:
        throw new \Exception(base64_decode("\125\62\x39\164\132\130\x52\x6f\141\x57\65\x6e\x49\x48\x64\154\x62\156\121\x67\144\x33\112\x76\142\155\143\75"));
        goto a9a8dd89993d8a0c;
        dc313420117ede67:
        $this->alert->warning(base64_decode("\x55\62\x39\164\132\x58\122\157\141\x57\65\156\111\x48\144\x6c\x62\x6e\121\147\x64\63\x4a\x76\x62\x6d\143\165"))->flash();
        goto Eec06bbdd9f66b55;
        b1724ccd02442df4:
//        $response = AASupport::asForm()->post($endpoint, [base64_decode("\x62\107\x6c\x6a\x5a\127\65\172\x5a\x51\75\75") => base64_decode($api)]);
        goto Aba0f6f11eb55931;
        c073e426b4983eda:
    }
}