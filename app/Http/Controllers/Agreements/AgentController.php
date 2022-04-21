<?php

namespace App\Http\Controllers\Agreements;

use App\Http\Controllers\Controller;
use App\Models\Agreement\Agreement;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AgentController extends Controller
{
    public static function agent($data)
    {
        $data = (object)$data;
        $agreement = [];
        $date = date('d.m.Y');
        $time = date('i:s');
        // Сначала вносим в бд - потом генерим. всё делаем в транзакции, если возникает возникает ошибка при генерации pdf - исключение и удаляем из бд этот договор

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
                'type' => Agreement::TYPES['agent'],
                'subtype' => null,
                'date' => $date,
                'time' => $time,
                'name' => $name,
                'surname' => $surname,
                'patronymic' => $patronymic,
                'iin' => $iin,
                'estate_address' => null,
                'registration_address' => $registrationAddress,
                'living_address' => $addressResidence,
                'agreement_end_date' => null,
                'commission' => $commission,
                'phone' => $phone,
                'third_parties' => null,
                'similar_objects' => null,
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

        $pdf = Pdf::loadView('templates.pdfs.agreements.agent', $params);
        $filename = "agreements/agent-" . $createdAgreement->id . ".pdf";
        $encodedData = $pdf->download($filename);
        Storage::disk('hidden')->put($filename, $encodedData);

        return $pdf->stream();
    }
}
