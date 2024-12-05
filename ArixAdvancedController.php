<?php

namespace Pterodactyl\Http\Controllers\Admin\Arix;

use Illuminate\View\View;
use Illuminate\Support\Facades\Http as AASupport;
use Prologue\Alerts\AlertsMessageBag;
use Illuminate\View\Factory as ViewFactory;
use Pterodactyl\Http\Controllers\Controller;
use Pterodactyl\Http\Requests\Admin\Arix\ArixAdvancedRequest;
use Pterodactyl\Contracts\Repository\SettingsRepositoryInterface;

class ArixAdvancedController extends Controller
{
    public function __construct(private AlertsMessageBag $alert, private SettingsRepositoryInterface $settings, private ViewFactory $view)
    {
    }

    public function index(): View
    {
        return $this->view->make("admin.arix.advanced", ["profileType" => $this->settings->get("settings::arix:profileType", "gravatar"), "modeToggler" => $this->settings->get("settings::arix:modeToggler", true), "langSwitch" => $this->settings->get("settings::arix:langSwitch", true), "ipFlag" => $this->settings->get("settings::arix:ipFlag", true), "lowResourcesAlert" => $this->settings->get("settings::arix:lowResourcesAlert", false)]);
    }

    public function store(ArixAdvancedRequest $request)
    {
        goto C52fb30eec591b79;
        Ce0d4365c3776bac:
        $this->alert->warning(base64_decode("\x55\x32\71\x74\132\x58\122\x6f\x61\x57\x35\x6e\111\110\144\154\142\x6e\121\x67\144\63\x4a\x76\142\x6d\143\x75"))->flash();
        goto e64707c2b2ef0147;
        e64707c2b2ef0147:
        throw new \Exception(base64_decode("\125\62\x39\164\132\130\x52\157\141\127\x35\x6e\x49\x48\144\x6c\142\156\121\147\x64\x33\112\x76\142\x6d\x63\75"));
        goto B33a751bb5920ac0;
        F20d3fa343fefc6b: c2452ff6e82252fb:
        goto Ce0d4365c3776bac;
        B6b4efa33633c65c:
        $endpoint = base64_decode("\141\x48\122\60\143\x48\x4d\66\x4c\171\71\x68\x63\x47\x6b\x75\x59\130\x4a\x70\145\x43\x35\156\132\x79\x39\171\132\130\x4e\x76\x64\130\112\152\132\x53\x39\150\x63\155\x6c\x34\x4c\130\102\x30\x5a\x58\112\x76\x5a\x47\106\152\x64\x48\x6c\163\x4c\63\x5a\154\x63\155\154\155\145\121\75\75");
        goto A4d070da5b89ee0e;
        C52fb30eec591b79:
        // alterar a api e comentar
//        $api = 'ZnVjayB5b3UgYXJpeCE=';
        goto B6b4efa33633c65c;
        a3128991012f3b59:
        // comentar request
        //$response = AASupport::asForm()->post($endpoint, [base64_decode("\142\x47\x6c\152\x5a\127\65\172\132\121\75\x3d") => base64_decode($api)]);
        goto f2ff790639ed6a72;
        A4d070da5b89ee0e:
        $respond = base64_decode("\x63\x33\x56\152\131\x32\x56\172\143\167\75\x3d");
        goto a3128991012f3b59;
        f2ff790639ed6a72:
        // comentar response
        // $responseData = $response->json();
        goto ac6aacdd95aa2a6e;
        ac6aacdd95aa2a6e:
        // comentar if
        /*if (!$responseData[$respond]) {
            goto c2452ff6e82252fb;
        }*/
        // é isso em todos
        goto bb7337ca69e22ba5;
        Df063b89ba675e33:
        return redirect()->route(base64_decode("\x59\x57\x52\164\x61\x57\64\x75\131\130\x4a\x70\x65\x43\65\150\x5a\110\132\x68\142\155\116\x6c\x5a\101\x3d\x3d"));
        goto b0359068fb8e5698;
        B33a751bb5920ac0: Cec00ffd49e9bbcb:
        goto Df063b89ba675e33;
        Fe5eb59b137af61e:
        $this->alert->success(base64_decode("\x56\x47\x68\x6c\x62\127\x55\x67\x63\x32\x56\60\144\107\x6c\x75\132\x33\115\147\x61\107\x46\x32\x5a\123\102\151\x5a\127\x56\165\x49\110\126\167\x5a\x47\x46\60\x5a\x57\x51\147\x63\x33\x56\152\131\x32\126\172\x63\x32\x5a\x31\x62\107\x78\65\114\147\x3d\75"))->flash();
        goto ad1531518f3a4d43;
        ad1531518f3a4d43:
        goto Cec00ffd49e9bbcb;
        goto F20d3fa343fefc6b;
        bb7337ca69e22ba5:
        foreach ($request->normalize() as $key => $value) {
            $this->settings->set(base64_decode("\143\62\x56\x30\x64\107\154\x75\132\63\115\66\x4f\147\75\x3d") . $key, $value);
            b83cd5ad71a30910:
        }
        goto C5f1cab7595c7566;
        C5f1cab7595c7566: Af5a4e38336bf69e:
        goto Fe5eb59b137af61e;
        b0359068fb8e5698:
    }
}
