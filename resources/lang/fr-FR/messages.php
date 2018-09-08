<?php

return [

    'success' => [
        'added'             => ':type ត្រូវបានបន្ថែម!',
        'updated'           => ':type ត្រូវបានកែប្រែ!',
        'deleted'           => ':type ត្រូវបានលុប!',
        'duplicated'        => ':type ត្រូវបានចំលងស្ទួន!',
        'imported'          => ':type ត្រូវបាននាំចូល!',
        'enabled'           => ':type ត្រូវបានបើកឱ្យប្រើ!',
        'disabled'          => ':type ត្រូវបានបិទមិនឱ្យប្រើ!',
    ],
    'error' => [
        'over_payment'      => 'Error: ការទូទាត់មិនត្រូវបានបន្ថែមទេ! ចំនួនបញ្ចូលលើសចំនួនសរុប។ អ្នកមិនគួរថែមចំនួនច្រើនបំផុត: :amount',
        'not_user_company'  => 'Error: លោកអ្នកមិនត្រូវបាន​អនុញ្ញាតឱ្យគ្រប់គ្រង​ក្រុមហ៊ុននេះទេ!',
        'customer'          => 'Error: មិនអាចបង្កើតអ្នកប្រើប្រាស់បានទេ! :name ប្រើប្រាស់អ៊ីម៉ែលរួចហើយ។',
        'no_file'           => 'Error: មិនមានឯកសារណាមួយត្រូវបានជ្រើសរើសទេ!',
        'last_category'     => 'Error: មិនអាចលុបប្រភេទ :type បានទេ!',
        'invalid_token'     => 'Error: លេខ Token ដែលបញ្ចូល មិនត្រឹមត្រូវទេ!',
        'import_column'     => 'Error: :message Sheet name: :sheet. Line number: :line.',
        'import_sheet'      => 'Error: ឈ្មោះ Sheet មិនត្រឹមត្រូវទេ។ សូមមើលឯកសារគម្រូ។',
    ],
    'warning' => [
        'deleted'           => 'Warning: មិនអនុញ្ញាតឱ្យលុប <b>:name</b> ទេ ពីព្រោះវាមានទំនាក់ទំនង់នឹង :text ។',
        'disabled'          => 'Warning: មិនអនុញ្ញាតឱ្យ Disabled <b>:name</b> ទេ ពីព្រោះវាមានទំនាក់ទំនង់នឹង :text ។',
    ],

];
