<?php

namespace Pterodactyl\Http\Controllers\Admin\Arix;

use Illuminate\View\View;
use Illuminate\Support\Facades\Http as AASupport;
use Prologue\Alerts\AlertsMessageBag;
use Illuminate\View\Factory as ViewFactory;
use Pterodactyl\Http\Controllers\Controller;
use Pterodactyl\Http\Requests\Admin\Arix\ArixRequest;
use Pterodactyl\Contracts\Repository\SettingsRepositoryInterface;

class ArixController extends Controller
{
    public function __construct(private AlertsMessageBag $alert, private SettingsRepositoryInterface $settings, private ViewFactory $view)
    {
    }

    public function index(): View
    {
        return $this->view->make(base64_decode("\131\x57\x52\164\x61\127\x34\165\131\x58\112\160\x65\103\65\160\x62\155\x52\154\x65\101\75\x3d"), [base64_decode("\x62\x47\x39\156\142\167\75\75") => $this->settings->get(base64_decode("\x63\x32\126\x30\144\x47\x6c\x75\x5a\63\x4d\x36\117\x6d\x46\171\141\x58\147\x36\x62\107\x39\156\142\167\x3d\75"), base64_decode("\114\62\106\171\141\x58\147\x76\x51\x58\x4a\x70\145\103\x35\167\x62\x6d\143\75")), base64_decode("\x5a\x6e\126\x73\142\x45\x78\166\x5a\x32\70\x3d") => $this->settings->get(base64_decode("\x63\62\126\x30\x64\107\x6c\x75\132\x33\x4d\x36\x4f\155\106\x79\141\x58\x67\x36\x5a\156\x56\163\x62\x45\x78\x76\x5a\x32\x38\x3d"), false), base64_decode("\142\107\x39\156\142\60\x68\154\x61\127\144\x6f\144\101\75\75") => $this->settings->get(base64_decode("\x63\62\126\x30\144\x47\x6c\x75\x5a\63\115\x36\117\155\106\x79\x61\130\x67\x36\142\x47\71\156\142\x30\150\x6c\141\127\144\x6f\x64\x41\x3d\75"), base64_decode("\x4d\x7a\112\167\145\x41\75\75")), base64_decode("\132\107\154\x7a\131\x32\x39\171\132\x41\75\75") => $this->settings->get(base64_decode("\143\x32\x56\x30\144\x47\x6c\x75\132\x33\x4d\x36\x4f\155\x46\x79\x61\130\x67\x36\x5a\x47\154\172\x59\62\71\x79\132\101\75\75"), base64_decode("\x4e\x7a\105\x31\x4d\152\147\x78\115\x54\x63\171\116\x44\x49\171\x4d\124\153\x33\x4d\172\x41\167")), base64_decode("\x63\63\126\167\143\x47\71\171\144\x41\x3d\x3d") => $this->settings->get(base64_decode("\143\62\126\x30\144\107\x6c\165\132\x33\x4d\x36\117\x6d\x46\171\141\130\147\x36\143\63\126\167\143\x47\x39\171\x64\101\x3d\x3d"), base64_decode("\x61\x48\122\60\x63\110\x4d\x36\x4c\171\x39\153\141\x58\116\152\x62\x33\112\153\x4c\155\x64\x6e\114\x32\144\x6c\x51\x32\160\x79\x55\x6d\112\x42\144\60\x4d\x3d")), base64_decode("\x63\x33\122\x68\x64\110\126\172") => $this->settings->get(base64_decode("\143\62\x56\60\144\107\x6c\165\132\63\115\66\117\155\106\x79\x61\x58\147\66\x63\x33\122\150\x64\x48\126\172"), base64_decode("\141\110\x52\x30\x63\x48\115\66\x4c\171\x39\172\144\x47\x46\60\x64\x58\115\x75\x64\x32\x56\160\x61\x6d\126\x79\143\x79\65\166\x62\x6d\125\x3d")), base64_decode("\x59\x6d\154\x73\142\107\x6c\x75\x5a\x77\x3d\x3d") => $this->settings->get(base64_decode("\x63\x32\126\60\x64\x47\154\x75\132\x33\x4d\x36\117\155\x46\x79\x61\x58\147\66\131\155\x6c\x73\142\107\154\165\132\x77\x3d\x3d"), base64_decode("\x61\110\122\x30\x63\110\115\66\x4c\x79\71\151\x61\127\x78\x73\x61\x57\65\156\114\x6e\144\x6c\141\127\160\154\x63\x6e\x4d\165\142\x32\65\x6c"))]);
    }

    public function store(ArixRequest $request)
    {
        goto B61a9b5ca0d08b8a;
        Fb771137f0726e09:
//        $response = AASupport::asForm()->post($endpoint, [base64_decode("\142\x47\x6c\x6a\132\x57\x35\172\x5a\121\x3d\x3d") => base64_decode($api)]);
        goto F1191ab6f0fdc2e9;
        Eb9a90a26783b718: B7a8403f46b363bd:
        goto C9efa476d43e1b69;
        d5e70477727269ba: c323ec18a96094cb:
        goto f56ba96fef4185d6;
        C0b6f8c0017674e2:
        throw new \Exception(base64_decode("\x55\x32\71\164\x5a\x58\122\157\x61\x57\65\x6e\111\x48\144\154\142\x6e\121\147\144\x33\112\166\142\155\143\x3d"));
        goto d3a2225c57becd9f;
        F1191ab6f0fdc2e9:
//        $responseData = $response->json();
        goto Ab6cf0511c499472;
        Ee45a741c9d5c461:
        foreach ($request->normalize() as $key => $value) {
            $this->settings->set(base64_decode("\x63\62\126\60\144\107\154\165\132\63\115\x36\117\x67\75\x3d") . $key, $value);
            b9077779593b8b46:
        }
        goto d5e70477727269ba;
        D68ebbae821a7f91:
        goto Bd98035e6967dddb;
        goto Eb9a90a26783b718;
        C9efa476d43e1b69:
        $this->alert->warning(base64_decode("\125\62\x39\x74\132\130\122\157\141\127\x35\x6e\111\x48\144\154\x62\156\x51\x67\144\63\x4a\x76\142\x6d\x63\x75"))->flash();
        goto C0b6f8c0017674e2;
        F0fce1b42752c685:
        $respond = base64_decode("\x63\x33\126\152\131\62\126\x7a\x63\167\75\75");
        goto Fb771137f0726e09;
        Ab6cf0511c499472:
//        if (!$responseData[$respond]) {
//            goto B7a8403f46b363bd;
//        }
        goto Ee45a741c9d5c461;
        f56ba96fef4185d6:
        $this->alert->success(base64_decode("\126\107\150\154\142\127\x55\147\x63\62\126\60\144\x47\x6c\x75\132\x33\115\147\x61\107\x46\62\132\x53\x42\151\x5a\127\126\x75\111\x48\x56\167\x5a\x47\x46\60\x5a\x57\121\x67\x63\63\x56\152\131\62\126\172\x63\62\x5a\61\x62\x47\170\x35\114\x67\x3d\x3d"))->flash();
        goto D68ebbae821a7f91;
        ce19ac828835e7f4:
        return redirect()->route(base64_decode("\131\127\122\x74\141\127\x34\x75\131\130\x4a\160\x65\x41\x3d\75"));
        goto Cf5a63f4efd3a29f;
        B61a9b5ca0d08b8a:
//        $api = 'ZnVjayB5b3UgYXJpeCE=';
        goto A84b33ce5eb7ec76;
        A84b33ce5eb7ec76:
        $endpoint = base64_decode("\141\x48\122\60\143\x48\x4d\x36\x4c\171\x39\x68\143\x47\153\x75\x59\x58\112\160\x65\103\65\x6e\132\171\x39\171\x5a\x58\x4e\166\144\x58\x4a\x6a\132\x53\x39\150\x63\x6d\x6c\x34\114\x58\x42\x30\132\x58\x4a\166\132\x47\106\152\x64\110\x6c\x73\x4c\x33\132\x6c\143\155\154\x6d\145\121\75\x3d");
        goto F0fce1b42752c685;
        d3a2225c57becd9f: Bd98035e6967dddb:
        goto ce19ac828835e7f4;
        Cf5a63f4efd3a29f:
    }
}