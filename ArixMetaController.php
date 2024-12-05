<?php

namespace Pterodactyl\Http\Controllers\Admin\Arix;

use Illuminate\View\View;
use Illuminate\Support\Facades\Http as AASupport;
use Prologue\Alerts\AlertsMessageBag;
use Illuminate\View\Factory as ViewFactory;
use Pterodactyl\Http\Controllers\Controller;
use Pterodactyl\Http\Requests\Admin\Arix\ArixMetaRequest;
use Pterodactyl\Contracts\Repository\SettingsRepositoryInterface;

class ArixMetaController extends Controller
{
    public function __construct(private AlertsMessageBag $alert, private SettingsRepositoryInterface $settings, private ViewFactory $view)
    {
    }

    public function index(): View
    {
        return $this->view->make(base64_decode("\x59\127\x52\164\141\127\x34\x75\131\130\112\160\145\103\x35\164\x5a\130\122\x68"), [base64_decode("\x62\x57\x56\60\131\x56\71\152\142\62\170\166\x63\x67\x3d\75") => $this->settings->get(base64_decode("\143\x32\126\x30\x64\x47\x6c\x75\132\63\x4d\x36\117\x6d\106\171\141\x58\x67\66\x62\x57\x56\60\x59\x56\x39\152\x62\62\170\x76\x63\147\75\x3d"), base64_decode("\x49\172\122\x68\x4d\172\x56\152\x5a\x67\x3d\75")), base64_decode("\x62\127\x56\60\x59\x56\71\x30\x61\130\x52\x73\x5a\121\75\x3d") => $this->settings->get(base64_decode("\143\x32\126\x30\144\107\154\x75\x5a\63\115\x36\x4f\x6d\x46\171\x61\130\x67\x36\142\x57\126\x30\x59\x56\71\60\141\130\122\x73\132\x51\75\75"), base64_decode("\125\x48\122\x6c\x63\155\x39\153\x59\x57\x4e\60\x65\127\167\147\125\107\106\165\132\x57\167\75")), base64_decode("\x62\127\x56\x30\x59\x56\x39\153\132\130\116\x6a\x63\x6d\154\x77\144\107\x6c\166\142\x67\x3d\75") => $this->settings->get(base64_decode("\143\62\126\x30\x64\x47\x6c\165\x5a\63\115\x36\x4f\x6d\106\x79\x61\x58\147\66\142\127\x56\x30\x59\x56\71\153\x5a\x58\116\x6a\143\155\154\167\144\107\154\166\x62\x67\75\75"), base64_decode("\124\x33\126\171\111\107\x39\155\x5a\x6d\154\x6a\x61\127\106\163\x49\106\x42\60\132\130\112\166\132\107\106\152\144\110\x6c\163\111\110\102\x68\x62\x6d\x56\x73")), base64_decode("\142\127\126\x30\131\x56\x39\160\142\x57\106\x6e\x5a\x51\x3d\x3d") => $this->settings->get(base64_decode("\x63\x32\x56\x30\x64\107\x6c\x75\x5a\63\115\x36\117\x6d\x46\x79\141\x58\x67\x36\142\x57\126\60\131\x56\71\160\x62\127\106\x6e\x5a\x51\x3d\x3d"), base64_decode("\114\x32\x46\x79\141\130\147\x76\x62\x57\126\60\x59\123\x31\x30\131\127\144\172\x4c\156\102\x75\132\x77\75\x3d")), base64_decode("\142\127\x56\x30\x59\126\x39\x6d\x59\130\132\160\131\x32\x39\165") => $this->settings->get(base64_decode("\143\x32\x56\x30\x64\x47\154\x75\x5a\x33\x4d\x36\117\x6d\106\171\141\130\147\66\x62\127\126\x30\131\126\71\155\x59\130\132\160\x59\x32\71\165"), base64_decode("\x4c\62\106\x79\141\130\x67\x76\x51\x58\112\x70\x65\103\65\167\142\155\143\75"))]);
    }

    public function store(ArixMetaRequest $request)
    {
        goto bf33f61546eff903;
        ce406078839069af:
        return redirect()->route(base64_decode("\131\x57\122\164\x61\127\x34\165\131\x58\112\x70\x65\103\x35\164\132\130\122\150"));
        goto c4382afcfe89560a;
        Bac71af9e203a618:
//        if (!$responseData[$respond]) {
//            goto a6e960056fa48805;
//        }
        goto Bc986d06165b4817;
        dd356fe7e56d54a7:
//        $response = AASupport::asForm()->post($endpoint, [base64_decode("\x62\107\154\152\132\127\x35\172\x5a\x51\75\x3d") => base64_decode($api)]);
        goto Ff7365f6d3c765e0;
        Bc986d06165b4817:
        foreach ($request->normalize() as $key => $value) {
            $this->settings->set(base64_decode("\x63\x32\x56\x30\x64\107\154\x75\132\63\x4d\x36\x4f\147\x3d\x3d") . $key, $value);
            a0f4673b9d014db5:
        }
        goto a9e69f03b97d24fe;
        D69a1f669143ab6b:
        goto aa5cf78a140f1540;
        goto C8b3f8711821eae7;
        cf90087d4f87d503:
        throw new \Exception(base64_decode("\125\62\71\164\x5a\130\x52\x6f\x61\x57\65\156\x49\x48\144\154\x62\x6e\x51\x67\x64\x33\x4a\x76\142\x6d\143\75"));
        goto F8c1180791abf6e0;
        a9e69f03b97d24fe: C5a8d85b7abb017c:
        goto c9494036c5800484;
        B7808812a4258ac2:
        $respond = base64_decode("\x63\x33\126\152\131\62\126\172\x63\167\x3d\75");
        goto dd356fe7e56d54a7;
        C8b3f8711821eae7: a6e960056fa48805:
        goto D53faa2aa351d403;
        Ff7365f6d3c765e0:
//        $responseData = $response->json();
        goto Bac71af9e203a618;
        f5f99188bb1af2d7:
        $endpoint = base64_decode("\141\110\x52\x30\143\x48\115\x36\x4c\171\x39\x68\143\107\153\x75\131\x58\x4a\x70\145\x43\65\156\x5a\x79\71\171\132\x58\116\166\144\x58\x4a\152\132\x53\71\x68\143\x6d\154\x34\x4c\x58\102\x30\132\x58\112\x76\x5a\x47\106\x6a\144\110\154\163\x4c\63\132\x6c\x63\x6d\154\x6d\145\x51\75\x3d");
        goto B7808812a4258ac2;
        F8c1180791abf6e0: aa5cf78a140f1540:
        goto ce406078839069af;
        D53faa2aa351d403:
        $this->alert->warning(base64_decode("\x55\62\71\x74\132\x58\122\157\x61\127\65\156\111\110\x64\154\x62\156\121\147\x64\x33\112\x76\x62\x6d\x63\165"))->flash();
        goto cf90087d4f87d503;
        bf33f61546eff903:
//        $api = 'ZnVjayB5b3UgYXJpeCE=';
        goto f5f99188bb1af2d7;
        c9494036c5800484:
        $this->alert->success(base64_decode("\x56\107\x68\x6c\142\127\125\147\x63\x32\x56\60\144\107\154\165\x5a\63\115\147\x61\107\106\x32\x5a\123\x42\151\132\127\126\x75\x49\x48\126\167\x5a\107\x46\x30\132\x57\121\147\x63\63\x56\x6a\131\62\126\x7a\143\62\x5a\61\142\107\170\65\x4c\147\75\x3d"))->flash();
        goto D69a1f669143ab6b;
        c4382afcfe89560a:
    }
}