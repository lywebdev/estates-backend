<?php

namespace App\Http\Controllers\Agreements;

use App\Http\Controllers\Controller;
use App\Models\Agreement\Agreement;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PartnershipController extends Controller
{
    public static function partnership($data)
    {
        $data = (object)$data;
        $agreement = [];
        $date = date('d.m.Y');
        $time = date('h:i');

        $name = $data->name ?? '';
        $surname = $data->surname ?? '';
        $patronymic = $data->patronymic ?? '';
        $iin = $data->iin ?? '';
        $phone = $data->phone ?? '';
        $addressResidence = $data->residential_address ?? '';
        $registrationAddress = $data->residential_registration ?? '';
        $estatesAddress = $data->estate_address ?? '';
        $commission = $data->commission_amount ?? null;
        $sms = $data->sms ?? '';
        $packet = $data->packet ?? null;
        if ($packet) {
            $packet = mb_strtoupper($packet);
        }


        try {
            $createdAgreement = Agreement::create([
                'type' => Agreement::TYPES['buyer'],
                'subtype' => null,
                'date' => $date,
                'time' => $time,
                'name' => $name,
                'surname' => $surname,
                'patronymic' => $patronymic,
                'iin' => $iin,
                'estate_address' => $estatesAddress,
                'registration_address' => $registrationAddress,
                'living_address' => $addressResidence,
                'agreement_end_date' => null,
                'commission' => $commission,
                'phone' => $phone,
                'package' => json_encode($packet),
                'sms' => null,
            ]);
        } catch (\Exception $exception) {
            return "Не удалось заключить договор";
        }

        $agreement['title'] = 'Договор';
        $fio = [
            isset($data->surname) ?? '',
            isset($data->name) ?? '',
            isset($data->patronymic) ?? '',
        ];
        $agreement['id'] = $createdAgreement->id;
        $agreement['fullname'] = join(' ', $fio);
        $agreement['name'] = $name;
        $agreement['surname'] = $surname;
        $agreement['father_name'] = $patronymic;
        $agreement['iin'] = $iin;
        $agreement['mobile_number'] = $phone;
        $agreement['address_residence'] = $addressResidence;
        $agreement['address_fact'] = $registrationAddress;
        $agreement['address_object'] = $estatesAddress;
        $agreement['commission_price'] = $commission;
        $agreement['sms_code'] = $sms;
        $agreement['paket'] = $packet;

        $params = [
            'title' => $agreement['title'],
            'agreement' => $agreement,
            'date' => $date,
            'time' => $time
        ];


        $filename = "agreements/partnership-" . $createdAgreement->id . ".pdf";
        $pdf = Pdf::loadView('templates.pdfs.agreements.partnership', $params);;
        $path = Storage::disk('hidden')->path($filename);
        $stream = $pdf->stream();
        $pdf->save($path);

        return $stream;
    }
}
