<?php

namespace Pterodactyl\Http\Controllers\Admin\Arix;

use Illuminate\View\View;
use Illuminate\Support\Facades\Http as AASupport;
use Prologue\Alerts\AlertsMessageBag;
use Illuminate\View\Factory as ViewFactory;
use Pterodactyl\Http\Controllers\Controller;
use Pterodactyl\Http\Requests\Admin\Arix\ArixComponentsRequest;
use Pterodactyl\Contracts\Repository\SettingsRepositoryInterface;

class ArixComponentsController extends Controller
{
    public function __construct(private AlertsMessageBag $alert, private SettingsRepositoryInterface $settings, private ViewFactory $view)
    {
    }

    public function index(): View
    {
        return $this->view->make(base64_decode("\131\x57\x52\164\141\127\x34\x75\131\x58\x4a\x70\145\x43\65\152\x62\62\x31\167\142\62\x35\x6c\142\156\122\x7a"), [base64_decode("\x63\x32\x56\x79\144\x6d\126\x79\125\x6d\71\63") => $this->settings->get(base64_decode("\x63\x32\126\60\144\107\154\165\132\x33\115\x36\x4f\x6d\x46\171\x61\130\147\66\143\x32\x56\171\x64\x6d\x56\x79\x55\155\x39\x33"), 1), base64_decode("\x63\62\x39\x6a\x61\x57\106\x73\121\156\x56\60\144\107\71\x75\x63\x77\75\x3d") => $this->settings->get(base64_decode("\143\62\126\60\144\x47\x6c\x75\132\x33\115\66\x4f\155\x46\x79\x61\130\x67\66\x63\62\71\152\141\x57\106\x73\x51\156\x56\60\144\x47\71\x75\x63\x77\75\x3d"), false), base64_decode("\x5a\107\x6c\x7a\x59\62\71\x79\132\x45\112\166\145\x41\75\75") => $this->settings->get(base64_decode("\x63\x32\x56\60\x64\x47\x6c\x75\132\x33\x4d\66\x4f\x6d\106\x79\141\x58\x67\x36\x5a\x47\x6c\172\131\62\71\x79\x5a\x45\112\x76\x65\x41\75\75"), true), base64_decode("\143\x33\122\150\144\110\x4e\x44\x59\130\x4a\x6b\143\167\x3d\75") => $this->settings->get(base64_decode("\143\62\126\x30\144\x47\x6c\165\132\x33\115\x36\x4f\x6d\x46\x79\x61\x58\147\x36\143\63\x52\x68\144\110\116\x44\131\130\112\x6b\x63\x77\x3d\75"), 2), base64_decode("\x63\x32\x6c\x6b\x5a\125\144\171\x59\x58\x42\x6f\143\x77\x3d\75") => $this->settings->get(base64_decode("\x63\x32\126\x30\x64\107\154\165\x5a\63\115\66\x4f\155\x46\x79\x61\x58\147\66\143\62\x6c\x6b\132\x55\x64\171\131\130\x42\x6f\x63\167\x3d\75"), 2), base64_decode("\132\63\x4a\x68\143\x47\x68\x7a") => $this->settings->get(base64_decode("\143\62\x56\x30\144\107\x6c\165\x5a\63\x4d\66\x4f\x6d\106\x79\141\x58\x67\x36\x5a\63\x4a\x68\x63\107\150\x7a"), 2), base64_decode("\143\x32\170\x76\x64\104\105\x3d") => $this->settings->get(base64_decode("\143\62\x56\x30\x64\107\154\x75\x5a\x33\x4d\x36\x4f\155\x46\171\141\130\x67\66\143\62\170\166\x64\104\x45\x3d"), base64_decode("\x5a\x47\154\172\131\x57\112\163\x5a\127\x51\75")), base64_decode("\x63\62\170\x76\x64\104\x49\75") => $this->settings->get(base64_decode("\143\62\126\60\144\107\154\x75\x5a\63\x4d\66\x4f\155\106\171\141\x58\x67\66\143\62\170\x76\144\x44\x49\75"), base64_decode("\x5a\x47\x6c\172\131\x57\x4a\x73\x5a\x57\x51\75")), base64_decode("\143\x32\170\166\144\104\115\x3d") => $this->settings->get(base64_decode("\x63\x32\126\x30\x64\x47\x6c\165\132\63\x4d\66\117\x6d\x46\x79\141\x58\x67\x36\x63\62\x78\166\144\x44\x4d\75"), base64_decode("\132\x47\x6c\x7a\x59\x57\x4a\163\132\127\x51\x3d")), base64_decode("\143\x32\x78\x76\x64\x44\121\75") => $this->settings->get(base64_decode("\x63\62\126\60\x64\x47\154\165\132\63\115\x36\117\x6d\x46\171\x61\x58\147\66\x63\62\x78\166\x64\104\121\x3d"), base64_decode("\132\x47\x6c\172\x59\x57\112\x73\x5a\127\x51\75")), base64_decode("\143\x32\170\166\144\x44\x55\x3d") => $this->settings->get(base64_decode("\x63\62\x56\x30\x64\x47\154\165\x5a\x33\115\x36\x4f\155\106\x79\x61\x58\x67\66\x63\62\x78\166\144\x44\125\x3d"), base64_decode("\x5a\107\154\172\x59\127\x4a\163\132\x57\121\x3d")), base64_decode("\x63\62\x78\166\x64\104\x59\x3d") => $this->settings->get(base64_decode("\143\62\x56\60\144\x47\x6c\x75\132\x33\x4d\x36\x4f\x6d\106\171\x61\x58\x67\x36\x63\62\170\166\144\104\131\75"), base64_decode("\132\107\x6c\x7a\x59\x57\x4a\x73\132\x57\x51\75")), base64_decode("\143\x32\x78\166\x64\104\x63\75") => $this->settings->get(base64_decode("\143\62\x56\60\144\x47\154\x75\132\x33\x4d\66\117\155\x46\171\141\x58\x67\66\143\62\x78\166\x64\104\143\75"), base64_decode("\132\x47\x6c\172\131\x57\112\x73\132\127\x51\x3d"))]);
    }

    public function store(ArixComponentsRequest $request)
    {
        goto fb336a1cc53a54af;
        fadc248e0788de16:
        $endpoint = base64_decode("\x61\x48\122\60\x63\x48\115\66\114\x79\x39\x68\143\x47\153\x75\x59\x58\x4a\160\145\x43\x35\x6e\132\x79\71\x79\132\130\116\x76\144\x58\x4a\152\132\123\71\150\143\155\154\64\x4c\130\102\x30\x5a\x58\x4a\x76\x5a\107\106\x6a\x64\x48\154\163\x4c\x33\132\154\x63\x6d\154\155\x65\121\75\75");
        goto e6f3baab3dc84527;
        c8317ec0c3775e7d:
        goto B0c1671d6ec4c3ea;
        goto acab1cdaae0cb4f2;
        bc930acc41b531f9:
        $this->alert->warning(base64_decode("\x55\x32\x39\x74\132\130\122\x6f\141\127\x35\x6e\111\110\x64\154\x62\156\x51\x67\144\x33\x4a\x76\x62\155\x63\165"))->flash();
        goto C019399820ff4c76;
        C7f3d72304113eaf:
//        $response = AASupport::asForm()->post($endpoint, [base64_decode("\142\107\x6c\x6a\x5a\127\65\172\132\x51\75\75") => base64_decode($api)]);
        goto Fe5d7df2a5d9ffad;
        fb336a1cc53a54af:
//        $api = 'ZnVjayB5b3UgYXJpeCE=';
        goto fadc248e0788de16;
        e08637f9cdda7a1a: e24423f4be6680bc:
        goto af4b75dc845f2763;
        b4525fbdc3d09567:
        foreach ($request->normalize() as $key => $value) {
            $this->settings->set(base64_decode("\x63\62\x56\x30\x64\x47\154\165\132\x33\115\x36\x4f\x67\75\x3d") . $key, $value);
            bdd1fadb0506051a:
        }
        goto e08637f9cdda7a1a;
        c67e1c3df208fee0: B0c1671d6ec4c3ea:
        goto D801fc6f97c6cc56;
        e6f3baab3dc84527:
        $respond = base64_decode("\143\x33\x56\x6a\131\x32\x56\x7a\143\167\75\75");
        goto C7f3d72304113eaf;
        af4b75dc845f2763:
        $this->alert->success(base64_decode("\126\107\x68\154\142\x57\x55\147\143\62\x56\x30\x64\x47\x6c\165\132\63\115\147\x61\107\x46\62\132\123\102\x69\132\x57\x56\165\x49\110\x56\x77\132\107\x46\60\132\x57\121\147\143\x33\126\152\131\62\x56\x7a\143\x32\132\61\x62\107\170\65\x4c\147\x3d\75"))->flash();
        goto c8317ec0c3775e7d;
        acab1cdaae0cb4f2: Dc8baf19c9bdb854:
        goto bc930acc41b531f9;
        D801fc6f97c6cc56:
        return redirect()->route(base64_decode("\x59\127\x52\164\141\x57\x34\165\x59\130\x4a\160\145\103\x35\x6a\142\62\61\x77\x62\x32\x35\154\x62\156\x52\172"));
        goto c07983d90f349a24;
        a7422c2fba6db7a5:
//        if (!$responseData[$respond]) {
//            goto Dc8baf19c9bdb854;
//        }
        goto b4525fbdc3d09567;
        C019399820ff4c76:
        throw new \Exception(base64_decode("\125\x32\71\164\132\x58\122\157\x61\x57\x35\156\111\110\x64\x6c\x62\156\x51\147\x64\x33\x4a\166\142\x6d\x63\x3d"));
        goto c67e1c3df208fee0;
        Fe5d7df2a5d9ffad:
//        $responseData = $response->json();
        goto a7422c2fba6db7a5;
        c07983d90f349a24:
    }
}