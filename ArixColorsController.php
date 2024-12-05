<?php

namespace Pterodactyl\Http\Controllers\Admin\Arix;

use Illuminate\View\View;
use Illuminate\Support\Facades\Http as AASupport;
use Prologue\Alerts\AlertsMessageBag;
use Illuminate\View\Factory as ViewFactory;
use Pterodactyl\Http\Controllers\Controller;
use Pterodactyl\Http\Requests\Admin\Arix\ArixColorsRequest;
use Pterodactyl\Contracts\Repository\SettingsRepositoryInterface;

class ArixColorsController extends Controller
{
    public function __construct(private AlertsMessageBag $alert, private SettingsRepositoryInterface $settings, private ViewFactory $view)
    {
    }

    public function index(): View
    {
        return $this->view->make(base64_decode("\x59\x57\122\x74\x61\x57\x34\x75\131\x58\x4a\x70\x65\103\x35\152\x62\x32\170\x76\143\x6e\115\x3d"), [base64_decode("\143\x48\112\x70\x62\x57\x46\171\145\x51\75\x3d") => $this->settings->get(base64_decode("\143\62\x56\60\144\107\154\165\x5a\x33\115\x36\x4f\155\106\x79\x61\130\x67\x36\143\x48\112\160\x62\x57\x46\x79\x65\121\75\x3d"), base64_decode("\x49\172\122\x42\x4d\172\x56\104\x52\x67\75\x3d")), base64_decode("\143\63\126\152\x59\62\126\x7a\x63\x31\x52\154\x65\x48\121\75") => $this->settings->get(base64_decode("\143\62\126\60\144\107\x6c\165\x5a\63\115\x36\x4f\155\106\x79\141\130\x67\66\143\63\x56\x6a\131\62\126\172\x63\x31\x52\x6c\x65\x48\x51\75"), base64_decode("\111\60\x55\170\x52\x6b\132\105\x4f\101\75\75")), base64_decode("\x63\63\x56\x6a\131\x32\126\x7a\143\x30\x4a\166\x63\155\122\154\x63\x67\x3d\x3d") => $this->settings->get(base64_decode("\x63\62\x56\60\144\107\x6c\165\132\63\x4d\66\117\x6d\x46\171\x61\x58\x67\66\x63\x33\126\x6a\131\62\x56\172\143\x30\x4a\x76\x63\x6d\122\x6c\143\147\75\75"), base64_decode("\111\x7a\x55\x32\121\x55\105\171\121\x67\75\x3d")), base64_decode("\143\x33\126\x6a\x59\62\x56\x7a\x63\60\112\150\131\x32\164\x6e\x63\x6d\x39\x31\x62\x6d\121\75") => $this->settings->get(base64_decode("\143\62\126\60\144\x47\154\x75\132\x33\x4d\x36\117\155\x46\171\x61\130\147\x36\x63\x33\126\152\x59\x32\126\x7a\x63\60\x4a\x68\131\62\x74\156\x63\x6d\x39\61\x62\x6d\121\75"), base64_decode("\x49\x7a\x4e\105\117\x45\131\x78\x52\x67\x3d\75")), base64_decode("\x5a\107\x46\x75\x5a\62\x56\171\x56\x47\126\64\144\101\x3d\75") => $this->settings->get(base64_decode("\143\62\126\60\x64\107\x6c\x75\x5a\x33\115\x36\117\x6d\106\171\141\x58\147\66\132\x47\x46\165\132\x32\126\x79\126\x47\126\64\144\101\x3d\75"), base64_decode("\111\60\132\x47\x52\x44\x68\x45\117\x41\x3d\75")), base64_decode("\x5a\x47\x46\x75\132\x32\126\x79\x51\155\x39\171\132\107\x56\x79") => $this->settings->get(base64_decode("\x63\62\x56\60\144\x47\154\x75\132\x33\115\66\x4f\x6d\106\171\x61\x58\147\x36\132\x47\106\x75\132\62\x56\x79\x51\155\71\171\132\107\126\x79"), base64_decode("\111\x30\x46\x42\x4d\153\x45\171\x51\x51\75\75")), base64_decode("\x5a\x47\x46\x75\x5a\x32\x56\171\121\x6d\106\x6a\141\62\x64\x79\x62\x33\x56\165\132\101\x3d\x3d") => $this->settings->get(base64_decode("\143\62\x56\x30\x64\107\154\165\132\63\115\66\117\155\106\x79\x61\x58\x67\x36\132\107\106\165\x5a\62\126\x79\x51\x6d\106\x6a\141\x32\x64\171\x62\63\126\x75\132\x41\x3d\x3d"), base64_decode("\x49\172\150\x47\x4d\x55\x59\x79\x4d\101\x3d\75")), base64_decode("\143\62\x56\152\142\x32\x35\x6b\x59\130\x4a\x35\126\x47\x56\x34\x64\x41\75\75") => $this->settings->get(base64_decode("\143\62\x56\x30\144\107\x6c\165\x5a\63\115\x36\x4f\155\x46\171\x61\130\x67\x36\x63\62\126\152\142\x32\x35\x6b\131\130\x4a\65\x56\107\126\x34\144\x41\75\x3d"), base64_decode("\x49\x30\x49\171\x51\x6a\x4a\x44\x4d\x51\x3d\75")), base64_decode("\x63\x32\126\x6a\142\62\x35\153\x59\x58\112\x35\x51\x6d\71\171\x5a\107\126\171") => $this->settings->get(base64_decode("\x63\62\126\x30\x64\107\154\165\x5a\x33\x4d\66\117\x6d\106\171\141\130\x67\x36\143\62\126\x6a\x62\x32\x35\153\x59\x58\112\x35\121\155\71\171\x5a\x47\126\x79"), base64_decode("\111\172\x51\171\x4e\x44\x49\x31\121\x67\x3d\75")), base64_decode("\x63\x32\x56\152\142\62\x35\153\131\130\x4a\x35\121\155\x46\152\141\x32\x64\171\x62\63\x56\165\x5a\x41\75\x3d") => $this->settings->get(base64_decode("\x63\x32\126\60\144\107\x6c\165\132\63\115\x36\x4f\155\x46\171\x61\x58\x67\66\x63\62\126\152\142\x32\65\153\131\130\x4a\x35\x51\155\x46\x6a\x61\62\x64\x79\142\x33\126\165\132\101\75\x3d"), base64_decode("\x49\x7a\x4a\x43\115\x6b\x49\60\x4d\x41\75\x3d")), base64_decode("\132\63\x4a\x68\x65\x54\x55\167") => $this->settings->get(base64_decode("\143\62\126\x30\x64\107\x6c\x75\x5a\x33\115\x36\x4f\x6d\x46\x79\141\x58\x67\x36\x5a\x33\112\150\x65\124\125\167"), base64_decode("\111\60\x59\60\x52\x6a\122\107\x4e\x41\x3d\x3d")), base64_decode("\x5a\x33\x4a\x68\145\x54\x45\167\x4d\x41\75\x3d") => $this->settings->get(base64_decode("\143\x32\126\60\x64\107\154\165\x5a\63\115\66\117\x6d\106\x79\x61\130\147\x36\132\63\112\x68\x65\x54\105\x77\115\x41\75\x3d"), base64_decode("\111\60\x51\x31\x52\104\x56\105\x51\147\75\x3d")), base64_decode("\x5a\x33\x4a\x68\x65\x54\111\167\115\101\x3d\x3d") => $this->settings->get(base64_decode("\x63\62\126\x30\144\107\x6c\x75\132\x33\115\x36\x4f\x6d\x46\171\141\x58\147\66\132\x33\x4a\x68\x65\124\x49\x77\x4d\101\75\75"), base64_decode("\x49\60\111\171\x51\x6a\x4a\104\115\121\75\x3d")), base64_decode("\132\x33\112\x68\x65\124\115\167\x4d\101\x3d\75") => $this->settings->get(base64_decode("\x63\62\126\x30\144\x47\154\x75\132\x33\115\x36\x4f\x6d\106\171\x61\x58\x67\66\x5a\x33\x4a\150\145\124\115\167\115\x41\x3d\x3d"), base64_decode("\x49\x7a\147\171\x4f\x44\x4a\x42\116\101\75\75")), base64_decode("\132\x33\x4a\150\145\x54\x51\x77\x4d\x41\75\75") => $this->settings->get(base64_decode("\143\x32\x56\60\144\x47\x6c\165\132\63\115\66\117\155\106\171\x61\x58\147\66\132\x33\x4a\x68\145\124\x51\167\115\x41\x3d\75"), base64_decode("\111\x7a\x56\x46\116\x55\125\x33\x52\147\75\x3d")), base64_decode("\x5a\x33\x4a\x68\x65\124\x55\167\115\101\75\75") => $this->settings->get(base64_decode("\143\62\126\x30\x64\x47\x6c\165\x5a\x33\x4d\x36\x4f\155\106\x79\x61\x58\x67\x36\x5a\x33\112\150\x65\x54\x55\x77\x4d\x41\75\75"), base64_decode("\111\172\121\171\116\104\x49\61\121\147\75\x3d")), base64_decode("\x5a\x33\x4a\150\145\x54\x59\x77\115\x41\x3d\75") => $this->settings->get(base64_decode("\x63\62\126\x30\x64\x47\x6c\x75\x5a\63\115\66\117\155\x46\171\141\130\x67\66\132\x33\112\x68\145\x54\131\x77\x4d\x41\x3d\75"), base64_decode("\x49\x7a\112\103\115\x6b\x49\60\115\x41\75\75")), base64_decode("\132\x33\x4a\x68\145\x54\x63\x77\x4d\101\75\x3d") => $this->settings->get(base64_decode("\143\x32\126\60\144\x47\154\165\x5a\x33\115\x36\117\155\106\x79\x61\130\x67\66\132\63\x4a\x68\x65\x54\143\x77\115\x41\75\75"), base64_decode("\111\172\x46\x45\115\x55\121\172\x4e\167\75\75")), base64_decode("\x5a\63\112\150\x65\x54\x67\167\x4d\x41\75\x3d") => $this->settings->get(base64_decode("\143\x32\x56\60\x64\x47\154\165\132\63\x4d\x36\x4f\x6d\x46\x79\141\x58\x67\66\x5a\x33\x4a\150\x65\124\147\167\115\101\x3d\75"), base64_decode("\x49\172\102\x43\115\x45\x51\171\121\121\75\75")), base64_decode("\x5a\63\112\150\145\124\x6b\x77\x4d\101\x3d\x3d") => $this->settings->get(base64_decode("\143\62\x56\x30\144\x47\x6c\165\x5a\x33\115\x36\117\x6d\x46\x79\141\x58\x67\66\132\x33\x4a\x68\x65\124\153\x77\x4d\101\x3d\75"), base64_decode("\x49\x7a\101\60\115\x44\x55\170\117\121\75\75")), base64_decode("\x62\x47\x6c\x6e\x61\x48\122\164\x62\62\x52\x6c\130\63\x42\171\x61\x57\x31\x68\143\x6e\153\x3d") => $this->settings->get(base64_decode("\x63\62\126\60\x64\107\154\165\x5a\63\x4d\x36\117\155\106\171\141\x58\x67\66\142\107\154\156\x61\110\122\x74\x62\62\x52\x6c\130\63\102\x79\141\x57\61\150\x63\x6e\x6b\75"), base64_decode("\x49\172\x52\102\x4d\x7a\126\104\x52\147\x3d\75")), base64_decode("\x62\x47\x6c\156\141\x48\x52\164\142\x32\x52\x6c\x58\63\116\61\131\62\116\x6c\143\x33\116\125\132\x58\x68\60") => $this->settings->get(base64_decode("\143\x32\126\60\x64\107\154\165\x5a\63\115\66\117\x6d\106\171\141\x58\147\66\142\x47\154\x6e\141\110\122\164\x62\x32\122\154\x58\63\116\61\131\x32\116\x6c\x63\63\x4e\125\x5a\x58\x68\x30"), base64_decode("\111\x30\x55\170\x52\x6b\132\x45\x4f\x41\x3d\x3d")), base64_decode("\x62\107\x6c\x6e\141\110\x52\164\x62\62\x52\154\130\x33\116\x31\x59\62\116\x6c\143\x33\x4e\x43\142\63\112\153\x5a\x58\111\x3d") => $this->settings->get(base64_decode("\x63\x32\x56\60\x64\107\x6c\165\132\63\115\x36\117\155\x46\171\x61\130\147\66\x62\107\154\156\x61\110\x52\164\x62\62\x52\154\x58\63\x4e\x31\x59\62\116\154\143\x33\x4e\x43\142\x33\112\x6b\132\130\x49\x3d"), base64_decode("\111\172\125\62\x51\x55\x45\x79\121\147\75\x3d")), base64_decode("\x62\x47\154\156\x61\110\122\164\x62\62\x52\154\130\x33\x4e\x31\x59\x32\x4e\x6c\143\63\x4e\103\131\127\116\x72\132\63\112\166\x64\x57\x35\x6b") => $this->settings->get(base64_decode("\x63\62\x56\60\x64\107\154\x75\132\63\115\x36\x4f\x6d\106\x79\141\x58\147\x36\x62\x47\154\x6e\141\x48\122\164\x62\62\x52\154\130\x33\x4e\x31\131\x32\116\x6c\x63\63\x4e\x43\x59\x57\x4e\x72\132\x33\x4a\166\x64\127\65\153"), base64_decode("\111\172\116\x45\x4f\x45\x59\170\122\x67\75\75")), base64_decode("\x62\x47\154\156\x61\x48\x52\x74\x62\x32\x52\x6c\130\x32\122\150\x62\x6d\144\x6c\x63\154\x52\x6c\x65\110\121\x3d") => $this->settings->get(base64_decode("\143\x32\x56\60\x64\107\154\x75\132\63\x4d\x36\117\x6d\106\x79\x61\x58\147\x36\x62\x47\154\x6e\x61\x48\122\x74\142\x32\x52\x6c\130\x32\x52\150\142\x6d\144\154\x63\154\x52\x6c\145\110\121\75"), base64_decode("\x49\60\x5a\x47\x52\104\x68\x45\117\101\x3d\x3d")), base64_decode("\x62\107\154\156\141\110\122\x74\142\x32\x52\x6c\130\x32\122\150\142\155\144\154\x63\153\112\166\x63\x6d\122\x6c\x63\147\75\75") => $this->settings->get(base64_decode("\143\62\126\60\144\x47\x6c\165\x5a\x33\115\66\117\x6d\x46\x79\141\130\x67\x36\142\107\x6c\x6e\x61\110\122\164\x62\62\122\x6c\130\x32\122\150\142\x6d\x64\154\x63\x6b\x4a\166\x63\155\x52\x6c\x63\x67\75\75"), base64_decode("\x49\60\x46\102\x4d\153\105\171\121\121\x3d\75")), base64_decode("\x62\107\154\x6e\x61\x48\x52\164\x62\62\122\x6c\130\x32\122\x68\x62\x6d\144\154\x63\153\112\x68\131\x32\164\x6e\143\x6d\71\x31\142\155\121\x3d") => $this->settings->get(base64_decode("\143\62\126\60\144\107\x6c\165\x5a\63\x4d\66\117\x6d\106\171\141\x58\147\x36\x62\107\x6c\x6e\x61\x48\x52\164\x62\62\122\x6c\130\x32\x52\150\x62\x6d\x64\154\x63\x6b\x4a\150\x59\x32\x74\x6e\x63\x6d\x39\x31\142\155\121\x3d"), base64_decode("\111\x7a\150\x47\115\x55\x59\x79\x4d\x41\x3d\x3d")), base64_decode("\142\x47\x6c\x6e\141\x48\122\x74\142\62\122\x6c\x58\x33\x4e\154\131\x32\x39\165\x5a\x47\106\x79\x65\126\122\x6c\x65\110\x51\x3d") => $this->settings->get(base64_decode("\x63\62\126\x30\144\x47\x6c\x75\132\63\x4d\x36\x4f\155\106\171\x61\x58\147\x36\142\x47\154\156\x61\x48\x52\x74\x62\x32\x52\154\x58\x33\116\154\x59\x32\71\165\x5a\x47\106\x79\x65\x56\x52\x6c\145\x48\x51\75"), base64_decode("\x49\x7a\121\x32\116\x44\131\60\x52\x41\x3d\75")), base64_decode("\x62\107\154\x6e\x61\x48\122\x74\142\x32\122\x6c\130\63\116\154\131\62\71\x75\x5a\107\x46\x79\145\x55\x4a\166\143\155\x52\x6c\x63\x67\x3d\x3d") => $this->settings->get(base64_decode("\143\x32\x56\x30\144\107\154\x75\x5a\63\115\x36\117\x6d\106\x79\141\x58\147\x36\x62\x47\x6c\156\141\x48\122\x74\142\x32\x52\x6c\x58\63\x4e\x6c\x59\x32\71\x75\x5a\x47\106\171\145\x55\x4a\166\x63\155\x52\154\x63\x67\x3d\x3d"), base64_decode("\111\x30\115\167\121\172\x42\x45\115\167\x3d\x3d")), base64_decode("\142\x47\154\x6e\141\110\x52\164\142\x32\122\x6c\130\63\x4e\x6c\x59\x32\71\x75\x5a\107\106\x79\145\x55\112\150\x59\62\164\x6e\x63\x6d\71\x31\x62\155\121\75") => $this->settings->get(base64_decode("\x63\62\126\x30\x64\107\x6c\165\132\63\115\66\x4f\x6d\x46\171\141\130\147\66\142\107\x6c\156\141\x48\x52\164\x62\x32\122\x6c\130\x33\116\x6c\x59\x32\71\x75\132\x47\106\x79\145\125\112\x68\x59\62\164\x6e\143\155\x39\61\142\x6d\121\75"), base64_decode("\111\x30\105\x32\121\124\144\103\122\101\x3d\75")), base64_decode("\142\107\x6c\156\141\110\122\164\142\62\x52\154\130\62\144\171\131\x58\x6b\61\x4d\101\x3d\75") => $this->settings->get(base64_decode("\x63\62\x56\60\x64\107\154\165\132\x33\115\x36\x4f\155\106\x79\141\x58\147\66\x62\107\x6c\156\x61\x48\122\x74\142\x32\122\x6c\x58\x32\x64\x79\x59\x58\x6b\61\x4d\101\75\75"), base64_decode("\111\x7a\x45\60\x4d\x54\x51\170\x4e\x51\x3d\x3d")), base64_decode("\x62\x47\x6c\x6e\x61\x48\122\164\142\x32\122\x6c\130\62\x64\171\131\x58\x6b\x78\115\x44\101\75") => $this->settings->get(base64_decode("\143\x32\126\60\144\107\154\x75\132\x33\115\66\x4f\155\106\171\141\x58\x67\66\x62\x47\154\156\141\x48\x52\164\142\62\x52\x6c\130\x32\x64\171\x59\130\x6b\170\x4d\104\x41\75"), base64_decode("\x49\x7a\111\x33\115\152\x63\x79\x51\167\x3d\75")), base64_decode("\x62\107\154\x6e\x61\110\x52\164\142\62\122\154\x58\x32\144\171\131\130\153\x79\115\104\x41\x3d") => $this->settings->get(base64_decode("\x63\x32\126\x30\144\x47\154\165\132\x33\x4d\66\x4f\x6d\x46\x79\x61\x58\x67\66\x62\x47\154\x6e\x61\110\x52\164\x62\62\122\x6c\130\62\144\171\x59\x58\153\x79\115\x44\x41\x3d"), base64_decode("\111\x7a\121\x32\116\x44\131\x30\122\x41\x3d\x3d")), base64_decode("\x62\107\x6c\x6e\141\110\122\164\x62\62\x52\154\x58\x32\144\x79\131\x58\x6b\172\115\x44\x41\x3d") => $this->settings->get(base64_decode("\143\x32\126\x30\x64\x47\154\x75\132\63\x4d\x36\117\155\106\171\x61\x58\x67\66\x62\107\x6c\x6e\141\110\x52\x74\142\x32\122\154\130\x32\144\171\131\x58\x6b\x7a\x4d\x44\x41\75"), base64_decode("\111\172\131\171\x4e\x6a\x49\63\x4d\x67\75\x3d")), base64_decode("\142\107\x6c\156\141\x48\x52\164\142\x32\122\x6c\130\x32\144\x79\x59\x58\x6b\60\x4d\x44\x41\x3d") => $this->settings->get(base64_decode("\x63\x32\126\x30\x64\x47\x6c\165\132\x33\x4d\x36\117\155\x46\171\x61\130\x67\x36\x62\107\x6c\156\x61\x48\122\x74\x62\x32\122\154\130\62\144\171\131\130\x6b\x30\115\104\101\x3d"), base64_decode("\x49\x7a\143\61\x4e\x7a\131\64\x4f\121\75\x3d")), base64_decode("\142\x47\x6c\x6e\x61\110\122\164\x62\x32\122\154\130\x32\144\x79\x59\130\153\61\x4d\x44\x41\x3d") => $this->settings->get(base64_decode("\x63\x32\126\60\x64\107\154\x75\132\x33\115\66\117\155\x46\x79\x61\x58\147\x36\142\x47\154\x6e\141\110\122\164\x62\x32\x52\x6c\x58\62\144\x79\131\x58\x6b\61\115\x44\101\75"), base64_decode("\x49\x30\x45\62\x51\124\144\103\122\101\x3d\75")), base64_decode("\x62\107\x6c\156\x61\x48\x52\x74\x62\x32\122\154\130\x32\x64\171\x59\130\153\62\x4d\x44\101\75") => $this->settings->get(base64_decode("\x63\x32\126\x30\144\107\154\165\x5a\x33\x4d\66\117\155\x46\171\141\x58\147\66\x62\x47\154\x6e\x61\110\x52\x74\x62\x32\122\154\x58\x32\x64\171\x59\130\153\x32\x4d\x44\101\75"), base64_decode("\x49\x30\115\x77\121\x7a\102\x45\115\167\75\75")), base64_decode("\x62\107\x6c\x6e\x61\110\x52\x74\x62\62\x52\154\x58\x32\144\171\x59\130\153\x33\x4d\x44\x41\75") => $this->settings->get(base64_decode("\x63\x32\x56\x30\x64\x47\154\165\132\x33\115\66\x4f\155\x46\171\141\130\x67\x36\142\107\x6c\156\141\110\122\164\142\x32\x52\x6c\x58\62\x64\x79\x59\x58\x6b\x33\x4d\x44\101\75"), base64_decode("\111\x30\125\63\122\x54\144\x46\x52\147\75\75")), base64_decode("\x62\107\154\156\141\110\122\164\x62\62\x52\x6c\130\62\144\x79\131\130\153\x34\x4d\x44\101\x3d") => $this->settings->get(base64_decode("\x63\62\x56\x30\144\x47\154\x75\132\63\x4d\x36\x4f\155\x46\171\141\130\x67\x36\142\x47\154\156\x61\110\122\164\142\62\x52\x6c\130\62\144\x79\x59\x58\153\64\x4d\104\x41\x3d"), base64_decode("\x49\60\131\167\122\x6a\x46\x47\x4e\121\75\x3d")), base64_decode("\x62\107\154\156\x61\110\x52\164\142\62\122\x6c\130\62\144\171\131\x58\153\x35\115\104\101\x3d") => $this->settings->get(base64_decode("\143\x32\x56\60\x64\107\154\x75\x5a\63\115\x36\x4f\155\x46\x79\141\x58\x67\66\x62\107\154\x6e\141\110\x52\x74\x62\62\x52\154\130\x32\144\x79\131\130\153\65\x4d\104\x41\75"), base64_decode("\111\60\x5a\x47\122\x6b\x5a\107\122\147\x3d\75"))]);
    }

    public function store(ArixColorsRequest $request)
    {
        goto f539d4c62111b840;
        F1d23f6341a39635:
        return redirect()->route(base64_decode("\x59\127\122\x74\x61\127\x34\x75\x59\130\x4a\160\x65\x43\65\x6a\x62\x32\x78\166\x63\x6e\115\75"));
        goto E7ad6e8c8022e5ae;
        Cf2942216b763faf:
        $this->alert->warning(base64_decode("\125\62\71\164\132\x58\122\157\x61\127\x35\x6e\111\110\x64\154\x62\156\x51\x67\144\63\x4a\166\x62\x6d\143\x75"))->flash();
        goto F9b88b51c2d771a8;
        B1708604d91f50d5:
        goto efb526a60b4809f3;
        goto Fb18c627106df0ab;
        c33cf907d57cdaab:
        $respond = base64_decode("\x63\x33\x56\x6a\x59\62\126\172\x63\167\x3d\75");
        goto E37036719723f622;
        d4912d33047b30c0:
//        $endpoint = base64_decode("\141\110\122\x30\143\x48\x4d\x36\114\171\x39\150\143\107\x6b\x75\131\130\112\x70\145\x43\x35\x6e\x5a\171\x39\x79\x5a\130\x4e\x76\x64\x58\x4a\152\132\123\71\150\143\x6d\x6c\64\114\130\102\x30\132\x58\112\166\x5a\x47\x46\152\144\x48\154\163\x4c\x33\x5a\154\143\x6d\x6c\155\145\x51\x3d\75");
        goto c33cf907d57cdaab;
        efa9279a86106e46: efb526a60b4809f3:
        goto F1d23f6341a39635;
        f539d4c62111b840:
//        $api = 'ZnVjayB5b3UgYXJpeCE=';
        goto d4912d33047b30c0;
        Fb18c627106df0ab: A9db8a1cca3bff4e:
        goto Cf2942216b763faf;
        c98d849897214bbf:
//        if (!$responseData[$respond]) {
//            goto A9db8a1cca3bff4e;
//        }
        goto E138fbfe098cd8cc;
        C7096ea34c639211:
//        $responseData = $response->json();
        goto c98d849897214bbf;
        B15c09129373443d: A41238de0a6b7e4f:
        goto fa64608a9f083f3e;
        F9b88b51c2d771a8:
        throw new \Exception(base64_decode("\125\62\71\x74\132\130\x52\157\x61\127\x35\156\x49\110\x64\x6c\142\x6e\121\147\144\63\x4a\166\x62\x6d\x63\x3d"));
        goto efa9279a86106e46;
        E138fbfe098cd8cc:
        foreach ($request->normalize() as $key => $value) {
            $this->settings->set(base64_decode("\x63\x32\x56\x30\144\x47\154\x75\132\63\115\x36\x4f\147\x3d\75") . $key, $value);
            cd65f7cdc1df5814:
        }
        goto B15c09129373443d;
        fa64608a9f083f3e:
        $this->alert->success(base64_decode("\x56\x47\150\x6c\142\x57\x55\147\143\x32\x56\60\x64\x47\x6c\x75\x5a\x33\x4d\147\x61\x47\106\x32\132\x53\102\151\132\x57\126\x75\x49\110\x56\167\x5a\x47\x46\60\132\x57\x51\147\x63\63\x56\152\x59\62\x56\x7a\x63\x32\132\x31\x62\107\170\65\x4c\x67\75\x3d"))->flash();
        goto B1708604d91f50d5;
        E37036719723f622:
        $response = AASupport::asForm()->post($endpoint, [base64_decode("\142\x47\154\x6a\x5a\127\65\172\132\121\75\x3d") => base64_decode($api)]);
        goto C7096ea34c639211;
        E7ad6e8c8022e5ae:
    }
}