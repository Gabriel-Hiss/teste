<?php

namespace Pterodactyl\Http\Controllers\Admin\Arix;

use Illuminate\View\View;
use Illuminate\Support\Facades\Http as AASupport;
use Prologue\Alerts\AlertsMessageBag;
use Illuminate\View\Factory as ViewFactory;
use Pterodactyl\Http\Controllers\Controller;
use Pterodactyl\Http\Requests\Admin\Arix\ArixAnnouncementRequest;
use Pterodactyl\Contracts\Repository\SettingsRepositoryInterface;

class ArixAnnouncementController extends Controller
{
    public function __construct(private AlertsMessageBag $alert, private SettingsRepositoryInterface $settings, private ViewFactory $view)
    {
    }

    public function index(): View
    {
        return $this->view->make(base64_decode("\131\127\122\x74\x61\x57\64\x75\x59\x58\112\x70\145\103\65\x68\x62\155\x35\x76\144\127\65\152\132\127\x31\154\x62\156\121\x3d"), [base64_decode("\x59\127\65\165\x62\63\x56\x75\x59\x32\x56\x74\x5a\127\x35\x30\x56\110\154\x77\x5a\x51\75\x3d") => $this->settings->get(base64_decode("\x63\62\126\x30\x64\107\154\x75\132\63\x4d\66\117\x6d\x46\171\141\x58\147\66\x59\x57\x35\x75\142\x33\126\165\131\62\x56\164\132\127\x35\60\x56\x48\154\x77\x5a\121\x3d\x3d"), base64_decode("\x63\x47\x46\171\x64\110\153\x3d")), base64_decode("\131\127\65\165\142\63\x56\x75\131\x32\x56\164\132\x57\x35\60\x51\x32\170\x76\143\62\x56\150\x59\x6d\170\154") => $this->settings->get(base64_decode("\143\x32\x56\60\x64\x47\154\165\x5a\x33\115\66\117\x6d\106\x79\141\130\147\66\131\x57\65\x75\142\63\x56\x75\131\62\126\164\x5a\127\x35\x30\121\62\x78\x76\143\x32\126\x68\x59\x6d\x78\154"), false), base64_decode("\131\x57\x35\165\x62\x33\x56\x75\x59\x32\126\x74\132\x57\65\60\x54\x57\x56\172\143\62\x46\x6e\132\121\x3d\x3d") => $this->settings->get(base64_decode("\x63\62\x56\60\x64\107\154\165\x5a\x33\x4d\x36\117\155\106\171\x61\x58\147\66\131\127\x35\x75\142\63\126\x75\x59\62\126\164\132\127\65\60\124\127\x56\x7a\143\x32\106\156\x5a\x51\x3d\x3d"), base64_decode("\126\62\x55\x67\x61\107\106\x32\132\x53\x42\x68\111\107\x4a\171\131\127\x35\153\111\x47\65\x6c\144\171\x42\156\131\127\61\x6c\x49\x48\102\150\142\155\126\x73\x49\x47\x52\154\143\x32\154\x6e\142\x69\x45\75"))]);
    }

    public function store(ArixAnnouncementRequest $request)
    {
        goto c90691975ef7e1bd;
        c3427fdabca4c607:
        $this->alert->success(base64_decode("\126\107\x68\x6c\x62\127\x55\147\143\62\x56\60\x64\x47\x6c\165\132\63\x4d\147\x61\107\106\x32\132\x53\102\151\x5a\x57\126\165\x49\110\126\x77\132\107\106\60\x5a\127\x51\147\143\63\126\152\131\62\126\172\x63\62\132\x31\x62\107\170\65\x4c\147\x3d\75"))->flash();
        goto Ba14fe1448fac76d;
        ef5efd0786fe2caf:
        $endpoint = base64_decode("\141\110\122\x30\x63\110\115\x36\x4c\x79\71\x68\143\x47\x6b\165\x59\x58\112\x70\145\103\65\x6e\132\171\71\x79\x5a\130\116\x76\144\130\112\x6a\132\123\x39\x68\x63\x6d\x6c\x34\x4c\130\x42\60\132\x58\x4a\166\132\107\106\152\144\110\x6c\x73\x4c\x33\x5a\x6c\143\155\154\155\x65\x51\x3d\75");
        goto C92dd30de7a615c5;
        C50a268e1861349d:
//        if (!$responseData[$respond]) {
//            goto Fb0a470a271fd06d;
//        }
        goto b885478162736e5d;
        A7ebd7b9e7202ba8:
//        $responseData = $response->json();
        goto C50a268e1861349d;
        C2ca631a636e6b4f:
        throw new \Exception(base64_decode("\125\62\x39\164\x5a\x58\122\x6f\141\x57\x35\156\x49\x48\144\x6c\142\156\121\x67\x64\x33\x4a\x76\142\x6d\143\75"));
        goto ab5cab227899143e;
        b885478162736e5d:
        foreach ($request->normalize() as $key => $value) {
            $this->settings->set(base64_decode("\x63\62\126\x30\144\107\154\165\x5a\63\115\x36\117\147\75\x3d") . $key, $value);
            Caddb0e67cefa173:
        }
        goto D822422635a3f96e;
        Ba14fe1448fac76d:
        goto Ef18117c26629dab;
        goto B2523bddf07f6c31;
        eb9ebda5f4adf826:
//        $response = AASupport::asForm()->post($endpoint, [base64_decode("\142\x47\x6c\152\x5a\x57\65\x7a\x5a\121\x3d\75") => base64_decode($api)]);
        goto A7ebd7b9e7202ba8;
        E5dba5bdcde665f8:
        return redirect()->route(base64_decode("\131\127\122\164\x61\127\x34\x75\x59\x58\x4a\160\145\x43\65\x68\x62\x6d\x35\166\144\127\x35\x6a\x5a\x57\61\154\142\x6e\121\x3d"));
        goto F121c0eb751e31e4;
        c90691975ef7e1bd:
//        $api = 'ZnVjayB5b3UgYXJpeCE=';
        goto ef5efd0786fe2caf;
        B2523bddf07f6c31: Fb0a470a271fd06d:
        goto b91242de1f70fdc2;
        C92dd30de7a615c5:
        $respond = base64_decode("\143\63\x56\152\131\x32\126\x7a\x63\167\x3d\75");
        goto eb9ebda5f4adf826;
        b91242de1f70fdc2:
        $this->alert->warning(base64_decode("\x55\62\x39\x74\x5a\x58\x52\157\x61\x57\x35\156\x49\110\x64\x6c\142\x6e\121\147\144\x33\x4a\x76\x62\x6d\143\165"))->flash();
        goto C2ca631a636e6b4f;
        ab5cab227899143e: Ef18117c26629dab:
        goto E5dba5bdcde665f8;
        D822422635a3f96e: E3e88d31986cc618:
        goto c3427fdabca4c607;
        F121c0eb751e31e4:
    }
}