<?php

namespace Pterodactyl\Http\Controllers\Admin\Arix;

use Illuminate\View\View;
use Illuminate\Support\Facades\Http as AASupport;
use Prologue\Alerts\AlertsMessageBag;
use Illuminate\View\Factory as ViewFactory;
use Pterodactyl\Http\Controllers\Controller;
use Pterodactyl\Http\Requests\Admin\Arix\ArixLayoutRequest;
use Pterodactyl\Contracts\Repository\SettingsRepositoryInterface;

class ArixLayoutController extends Controller
{
    public function __construct(private AlertsMessageBag $alert, private SettingsRepositoryInterface $settings, private ViewFactory $view)
    {
    }

    public function index(): View
    {
        return $this->view->make(base64_decode("\131\x57\122\x74\x61\x57\x34\165\131\130\112\160\x65\103\65\x73\x59\x58\154\x76\144\x58\x51\75"), [base64_decode("\x62\107\x46\x35\x62\63\x56\60") => $this->settings->get(base64_decode("\143\x32\x56\60\144\x47\x6c\x75\132\63\115\66\x4f\155\106\171\141\130\x67\x36\x62\x47\106\65\x62\x33\126\x30"), 1), base64_decode("\143\62\126\x68\x63\155\x4e\157\121\62\71\164\x63\107\71\165\x5a\127\x35\60") => $this->settings->get(base64_decode("\143\x32\126\x30\x64\x47\154\x75\132\63\115\66\117\155\x46\171\x61\130\147\x36\x63\x32\x56\x68\143\x6d\116\157\x51\x32\x39\164\x63\x47\71\165\x5a\127\65\x30"), 1), base64_decode("\x62\107\x39\x6e\142\x31\x42\166\x63\62\x6c\60\x61\x57\71\165") => $this->settings->get(base64_decode("\143\x32\126\x30\x64\107\154\165\132\x33\115\66\x4f\x6d\106\171\x61\130\147\66\142\107\71\x6e\x62\x31\102\x76\x63\62\x6c\x30\141\x57\71\165"), 1), base64_decode("\143\x32\x39\152\x61\x57\106\163\x55\107\71\172\141\130\122\x70\142\62\x34\x3d") => $this->settings->get(base64_decode("\x63\62\x56\60\x64\x47\x6c\165\x5a\63\x4d\66\117\155\x46\171\141\x58\x67\x36\x63\62\71\152\141\127\x46\x73\x55\x47\71\x7a\141\130\122\160\x62\x32\64\x3d"), 1), base64_decode("\x62\107\x39\156\141\127\65\115\131\x58\154\x76\x64\130\x51\x3d") => $this->settings->get(base64_decode("\143\62\x56\x30\x64\107\154\165\132\63\115\x36\x4f\x6d\106\171\141\x58\x67\x36\142\107\71\156\141\x57\65\x4d\131\x58\154\166\144\x58\121\x3d"), 1)]);
    }

    public function store(ArixLayoutRequest $request)
    {
        goto D69bb4417eae3ec4;
        f8d3e4f900393427:
        $respond = base64_decode("\143\x33\x56\x6a\x59\62\x56\172\143\x77\75\75");
        goto Bdfa32241f72e21a;
        D69bb4417eae3ec4:
//        $api = 'ZnVjayB5b3UgYXJpeCE=';
        goto ce9a3b4d0f5b717b;
        ed26ed8a61a5691d: abb43f5c9654fe4e:
        goto ffd6422109a82a8a;
        Ec97af86193524b5: a338eafdd63e1097:
        goto F8ca1aa4491140c1;
        aa6730375161878e:
        throw new \Exception(base64_decode("\125\62\71\164\132\130\122\157\x61\127\x35\x6e\111\110\x64\154\142\156\121\x67\x64\63\112\x76\x62\155\143\75"));
        goto ed26ed8a61a5691d;
        bd48779f38aab1c2:
        goto abb43f5c9654fe4e;
        goto Ec97af86193524b5;
        Ae73dc13c548b187: F021e13714e4911b:
        goto c47b780d0050e3ae;
        ce9a3b4d0f5b717b:
        $endpoint = base64_decode("\141\110\x52\60\x63\110\x4d\x36\114\171\x39\150\143\x47\x6b\x75\131\x58\112\x70\145\x43\65\x6e\x5a\x79\x39\x79\x5a\130\x4e\x76\144\130\112\x6a\132\x53\x39\x68\143\155\x6c\64\x4c\x58\x42\x30\x5a\x58\x4a\x76\132\107\x46\152\144\x48\154\163\114\63\132\154\143\155\154\x6d\x65\x51\75\x3d");
        goto f8d3e4f900393427;
        A7eda3c8f012d2e1:
//        $responseData = $response->json();
        goto d4130f01969d7f07;
        F8ca1aa4491140c1:
        $this->alert->warning(base64_decode("\x55\x32\x39\x74\x5a\x58\x52\157\141\x57\65\156\x49\x48\x64\154\x62\156\x51\x67\144\63\x4a\x76\142\x6d\143\x75"))->flash();
        goto aa6730375161878e;
        Bdfa32241f72e21a:
//        $response = AASupport::asForm()->post($endpoint, [base64_decode("\142\x47\154\152\132\127\65\172\132\x51\75\75") => base64_decode($api)]);
        goto A7eda3c8f012d2e1;
        d4130f01969d7f07:
//        if (!$responseData[$respond]) {
//            goto a338eafdd63e1097;
//        }
        goto e69406c2ef366929;
        ffd6422109a82a8a:
        return redirect()->route(base64_decode("\131\x57\122\x74\141\127\64\165\x59\x58\112\x70\145\103\65\x73\131\130\154\166\x64\x58\121\75"));
        goto Ecc149b249492557;
        c47b780d0050e3ae:
        $this->alert->success(base64_decode("\x56\x47\150\x6c\x62\x57\125\x67\x63\62\126\x30\x64\107\x6c\165\x5a\x33\115\147\x61\x47\106\x32\132\123\102\151\x5a\x57\x56\x75\x49\110\126\167\x5a\107\106\x30\x5a\x57\121\x67\x63\63\126\152\131\x32\126\x7a\143\x32\x5a\x31\x62\107\x78\65\x4c\x67\75\x3d"))->flash();
        goto bd48779f38aab1c2;
        e69406c2ef366929:
        foreach ($request->normalize() as $key => $value) {
            $this->settings->set(base64_decode("\x63\62\x56\x30\144\x47\154\165\132\x33\x4d\66\x4f\x67\x3d\75") . $key, $value);
            E70978fd5b312a6d:
        }
        goto Ae73dc13c548b187;
        Ecc149b249492557:
    }
}