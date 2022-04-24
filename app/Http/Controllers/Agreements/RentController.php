<?php

namespace App\Http\Controllers\Agreements;

use App\Http\Controllers\Controller;
use App\Models\Agreement\Agreement;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RentController extends Controller
{
    public static function terant($data)
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
        $similarObjects = $data->nbs ? $data->nbs : null;
        $thirdParties = $data->treeface ? $data->treeface : null;


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
                'third_parties' => json_encode($thirdParties),
                'similar_objects' => json_encode($similarObjects),
                'package' => null,
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
        $agreement['nbs'] = implode('|', $similarObjects);
        $agreement['treeface'] = implode('|', $thirdParties);

        $params = [
            'title' => $agreement['title'],
            'agreement' => $agreement,
            'date' => $date,
            'time' => $time
        ];


        $filename = "agreements/rent-terant-" . $createdAgreement->id . ".pdf";
        $pdf = Pdf::loadView('templates.pdfs.agreements.rent.terant', $params);;
        $path = Storage::disk('hidden')->path($filename);
        $stream = $pdf->stream();
        $pdf->save($path);

        return $stream;
    }

    public static function landlord($data)
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
                'package' => null,
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

        $params = [
            'title' => $agreement['title'],
            'agreement' => $agreement,
            'date' => $date,
            'time' => $time
        ];


        $filename = "agreements/rent-landlord-" . $createdAgreement->id . ".pdf";
        $pdf = Pdf::loadView('templates.pdfs.agreements.rent.landlord', $params);;
        $path = Storage::disk('hidden')->path($filename);
        $stream = $pdf->stream();
        $pdf->save($path);

        return $stream;
    }
}
