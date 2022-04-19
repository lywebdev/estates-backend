<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @isset($title)
            {{ $title }}
        @else
            Тестовая страница
        @endisset
    </title>

    <style type="text/css">
        body {
            font-family: DejaVu Sans, Arial, sans-serif!important;
        }



        .w-100 {
            width: 100%;
            display: block;
        }

        @page { margin-left: 1.18in; margin-right: 0.59in; margin-top: 0.59in; margin-bottom: 0.37in }
        P { margin-bottom: 0.08in; direction: ltr; widows: 2; orphans: 2 }

        table {
            max-width: 100%;
            border: 1px solid #c2c2c2;
        }

        table tr {
            border-bottom: 1px solid #c2c2c2;
        }

        input,textarea {
            border: none;
            font-weight: bold;
            border-bottom: 1px solid #333;
        }

        @media print
        {
            .no-print, .no-print *
            {
                display: none !important;
            }
        }

        canvas {
            border: 1px solid #e9e9e9;
        }

        /**
SIGN
 */
        @font-face {
            font-family: 'Journal';
            src: url('journal.eot');
            src: url('journal.eot?#iefix') format('embedded-opentype'),
            url('journal.woff') format('woff'),
            url('journal.ttf') format('truetype'),
            url('journal.svg#JournalRegular') format('svg');
            font-weight: normal;
            font-style: normal;
        }

        .sigPad {
            margin: 0;
            padding: 0;
            width: 300px;
        }

        .sigPad label {
            display: block;
            margin: 0 0 0.515em;
            padding: 0;

            color: #000;
            font: italic normal 1em/1.375 Georgia,Times,serif;
        }

        .sigPad label.error {
            color: #f33;
        }

        .sigPad input {
            margin: 0;
            padding: 0.2em 0;
            width: 300px;

            border: 1px solid #666;

            font-size: 1em;
        }

        .sigPad input.error {
            border-color: #f33;
        }

        .sigPad button {
            margin: 1em 0 0 0;
            padding: 0.6em 0.6em 0.7em;

            background-color: #ccc;
            border: 0;
            -moz-border-radius: 8px;
            -webkit-border-radius: 8px;
            border-radius: 8px;

            cursor: pointer;

            color: #555;
            font: bold 1em/1.375 sans-serif;
            text-align: left;
        }

        .sigPad button:hover {
            background-color: #333;

            color: #fff;
        }

        .sig {
            display: none;
        }

        .sigNav {
            display: none;
            height: 23px;
            margin: 0;
            padding: 0;
            position: relative;

            list-style-type: none;
        }

        .sigNav li {
            display: inline;
            float: left;
            margin: 0;
            padding: 0;
        }

        .sigNav a,
        .sigNav a:link,
        .sigNav a:visited {
            display: block;
            margin: 0;
            padding: 0 0.6em;

            border: 0;
            font-size: 10px;

            color: #333;
            font-weight: bold;
            line-height: 2.25em;
            text-decoration: underline;
        }

        .sigNav .drawIt a.current,
        .sigNav .drawIt a.current:link,
        .sigNav .drawIt a.current:visited {
            background-color: #ccc;

            color: #555;
        }

        .sigNav .clearButton {
            bottom: 0.2em;
            display: none;
            position: absolute;
            right: 0;

            font-size: 0.55em;
            line-height: 1.375;
        }

        .sigWrapper {
            clear: both;
            height: 100px;

            border: 1px solid #e9e9e9;
        }

        .sigWrapper.current {
            border-color: #e9e9e9;
        }

        .signed .sigWrapper {
            border: 0;
        }

        .pad {
            position: relative;

            cursor: crosshair;

            -ms-touch-action: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            -o-user-select: none;
            user-select: none;
        }

        .typed {
            height: 100px;
            margin: 0;
            padding: 0 5px;
            position: absolute;
            z-index: 90;

            cursor: default;

            color: #145394;
            font: normal 1.875em/50px "Journal",Georgia,Times,serif;
        }

        p.error {
            display: block;
            margin: 0.5em 0;
            padding: 0.4em;

            background-color: #f33;

            color: #fff;
            font-weight: bold;
        }

        pre {
            white-space: break-spaces;
            font-family: arial;
        }

        /**
        /SIGN
         */
    </style>
</head>

<body>

<div id="DOC" style="font-size: 16px; width: 100%; max-width: 768px; margin: auto">
    @yield('content')
</div>

<script src="{{ asset ('js/libs/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset ('js/libs/sign.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.js"></script>
<script>

    $('#DOC form, #SMS_FORM_CHECK').attr('data-submit', 0);
    $('#DOC form, #SMS_FORM_CHECK').on('submit', function (e) {
        var $t = $(this)

        var phone = '', codeInput = null

        if(this.SMS_PHONE) {
            phone = this.SMS_PHONE.value
        }

        if(this.seller_code)
            codeInput = this.seller_code

        if(this.customer_code)
            codeInput = this.customer_code

        if($t.data('submit') != 1 && phone) {
            e.preventDefault()

            var smsActivity = false;

            if(!smsActivity) {
                let genSMS = function (sms_msg = 'Введите ваш SMS-код') {
                    $.get('/generate-sms/' + phone).done(function (data) {
                        if(data.data) {
                            $t.find('[type="submit"]').attr('disabled', 'disabled');

                            var sms_code = prompt(sms_msg)

                            $.get(`/check-sms/${phone}/${sms_code}`).done(function (sms_response) {
                                if(sms_response.valid) {
                                    codeInput.value = sms_code

                                    alert('Успешно!');

                                    $t.data('submit', 1);
                                    $t.trigger('submit');

                                    $t.find('[type="submit"]').removeAttr('disabled');
                                    $t.data('submit', 0);
                                } else {
                                    genSMS('Вы ввели не верный SMS-код. Вам пришел новый код, введите его еще раз')
                                }
                            })

                            smsActivity = true;
                        }
                    })
                }

                genSMS()
            }
        }
    })

    /**
     * Documentation:
     * https://github.com/thread-pond/signature-pad/blob/master/documentation.md#changing-default-options
     */
    $(document).ready(function() {

        $('.sigPad').each(function () {
            let coords = null,
                dataSign = $(this).data('sign'),
                signJson = $(this).data('signData'),
                inpSign = $('input[name="'+dataSign+'"]')

            if(screen.width <= 600) {
                $(this).find('canvas').attr('width', screen.width-20).attr('height', 100)
            }

            let displOnly = !!inpSign && !!signJson;

            let sig = $(this).signaturePad({
                displayOnly: displOnly,
                onDraw () {
                    if(!signJson) {
                        let sign = sig.getSignatureString()

                        coords = sign

                        inpSign.val(sign)
                    }
                }
            });

            $(this).find('.clearButton').click(function () {
                inpSign.val('')
            })

            if(signJson) {
                sig.regenerate(signJson)
            }

        })

        $('.drawIt a').trigger('click');

    });

    function generatePDF(event) {
        const element = document.getElementById('DOC');

        if(event.target) {
            event.target.remove()
        }

        html2pdf()
            .from(element)
            .set({
                margin: 1.2,
                image: { type: 'jpeg', quality: 0.98 },
                html2canvas: {scale:2 },
                jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' },
                pagebreak: { mode: 'avoid-all', after: '.avoidThisRow' }
            })
            .toPdf()
            .get('pdf')
            .save();
    }
</script>

</body>
</html>
