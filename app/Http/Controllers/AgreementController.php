<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Agreements\OwnerController;
use App\Models\Agreement\Agreement;
use Illuminate\Http\Request;

class AgreementController extends Controller
{
    public function agreements()
    {
        return view('agreements');
    }

    public function agreement($type, $subtype = null, Request $request)
    {
        if (!array_key_exists($type, Agreement::TYPES)) {
            abort(404);
        }
        $isSubAgreement = false;
        if ($subtype) {
            if (!array_key_exists($subtype, Agreement::TYPES[$type]['list'])) {
                abort(404);
            }
            $isSubAgreement = true;
        }
        else {
            if (is_array(Agreement::TYPES[$type])) {
                abort(404);
            }
        }

        $agreement = [
            'type' => $type,
            'subtype' => $subtype
        ];

        if ($isSubAgreement) {
            $agreement['name'] = Agreement::TYPES[$type]['list'][$subtype];
        }
        else {
            $agreement['name'] = Agreement::TYPES[$type];
        }


        return view("agreements.$type.$subtype", compact('agreement'));
    }

    public function sign($type, $subtype = null, Request $request)
    {
        if (!array_key_exists($type, Agreement::TYPES)) {
            abort(404);
        }
        $isSubAgreement = false;
        if ($subtype) {
            if (!array_key_exists($subtype, Agreement::TYPES[$type]['list'])) {
                abort(404);
            }
            $isSubAgreement = true;
        }

        $controllerPath = app_path("Http/Controllers/Agreements/" . ucfirst($type) . "Controller.php");
        $controllerName = ucfirst($type) . "Controller";
        $controllerNamespace = "\App\Http\Controllers\Agreements\\" . $controllerName;
        $agreementType = $type;
        if ($isSubAgreement) {
            $agreementType = $subtype;
        }

        if (file_exists($controllerPath)) {
            require_once($controllerPath);

            $controller = new $controllerNamespace();
            return $controller->$agreementType($request->all());
        }



        return redirect()->back()->with('error', 'Не удалось сформировать договор');
    }
}
