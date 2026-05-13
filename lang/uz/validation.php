<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => ':attribute maydoni qabul qilinishi kerak.',
    'accepted_if' => ':other :value bo‘lganda :attribute maydoni qabul qilinishi kerak.',
    'active_url' => ':attribute maydoni to‘g‘ri URL bo‘lishi kerak.',
    'after' => ':attribute maydoni :date sanasidan keyingi sana bo‘lishi kerak.',
    'after_or_equal' => ':attribute maydoni :date sanasidan keyingi yoki teng sana bo‘lishi kerak.',
    'alpha' => ':attribute maydoni faqat harflardan iborat bo‘lishi kerak.',
    'alpha_dash' => ':attribute maydoni faqat harflar, raqamlar, defislar va pastki chiziqlardan iborat bo‘lishi kerak.',
    'alpha_num' => ':attribute maydoni faqat harflar va raqamlardan iborat bo‘lishi kerak.',
    'any_of' => ':attribute maydoni noto‘g‘ri.',
    'array' => ':attribute maydoni massiv bo‘lishi kerak.',
    'ascii' => ':attribute maydoni faqat bir baytli alfavit-raqamli belgilar va simvollardan iborat bo‘lishi kerak.',
    'before' => ':attribute maydoni :date sanasidan oldingi sana bo‘lishi kerak.',
    'before_or_equal' => ':attribute maydoni :date sanasidan oldingi yoki teng sana bo‘lishi kerak.',
    'between' => [
        'array' => ':attribute maydoni :min va :max ta elementdan iborat bo‘lishi kerak.',
        'file' => ':attribute maydonidagi fayl hajmi :min va :max kilobayt orasida bo‘lishi kerak.',
        'numeric' => ':attribute maydoni :min va :max orasida bo‘lishi kerak.',
        'string' => ':attribute maydoni :min va :max ta belgidan iborat bo‘lishi kerak.',
    ],
    'boolean' => ':attribute maydoni true yoki false bo‘lishi kerak.',
    'can' => ':attribute maydoni ruxsat etilmagan qiymatni o‘z ichiga oladi.',
    'confirmed' => ':attribute maydonining tasdig‘i mos kelmaydi.',
    'contains' => ':attribute maydonida majburiy qiymat yo‘q.',
    'current_password' => 'Parol noto‘g‘ri.',
    'date' => ':attribute maydoni to‘g‘ri sana bo‘lishi kerak.',
    'date_equals' => ':attribute maydoni :date sanasiga teng bo‘lishi kerak.',
    'date_format' => ':attribute maydoni :format formatiga mos kelishi kerak.',
    'decimal' => ':attribute maydoni :decimal ta o‘nlik kasrga ega bo‘lishi kerak.',
    'declined' => ':attribute maydoni rad etilishi kerak.',
    'declined_if' => ':other :value bo‘lganda :attribute maydoni rad etilishi kerak.',
    'different' => ':attribute va :other maydonlari farqli bo‘lishi kerak.',
    'digits' => ':attribute maydoni :digits ta raqamdan iborat bo‘lishi kerak.',
    'digits_between' => ':attribute maydoni :min va :max ta raqamdan iborat bo‘lishi kerak.',
    'dimensions' => ':attribute maydoni noto‘g‘ri tasvir o‘lchamlariga ega.',
    'distinct' => ':attribute maydonida takrorlangan qiymat bor.',
    'doesnt_contain' => ':attribute maydoni quyidagilardan birortasini o‘z ichiga olmasligi kerak: :values.',
    'doesnt_end_with' => ':attribute maydoni quyidagilardan biri bilan tugamasligi kerak: :values.',
    'doesnt_start_with' => ':attribute maydoni quyidagilardan biri bilan boshlanmasligi kerak: :values.',
    'email' => ':attribute maydoni to‘g‘ri email manzili bo‘lishi kerak.',
    'encoding' => ':attribute maydoni :encoding kodlashida bo‘lishi kerak.',
    'ends_with' => ':attribute maydoni quyidagilardan biri bilan tugashi kerak: :values.',
    'enum' => 'Tanlangan :attribute qiymati noto‘g‘ri.',
    'exists' => 'Tanlangan :attribute qiymati noto‘g‘ri.',
    'extensions' => ':attribute maydoni quyidagi kengaytmalardan biriga ega bo‘lishi kerak: :values.',
    'file' => ':attribute maydoni fayl bo‘lishi kerak.',
    'filled' => ':attribute maydoni qiymatga ega bo‘lishi kerak.',
    'gt' => [
        'array' => ':attribute maydoni :value tadan ko‘proq elementga ega bo‘lishi kerak.',
        'file' => ':attribute maydonidagi fayl hajmi :value kilobaytdan katta bo‘lishi kerak.',
        'numeric' => ':attribute maydoni :value dan katta bo‘lishi kerak.',
        'string' => ':attribute maydoni :value ta belgidan ko‘proq bo‘lishi kerak.',
    ],
    'gte' => [
        'array' => ':attribute maydoni kamida :value ta elementga ega bo‘lishi kerak.',
        'file' => ':attribute maydonidagi fayl hajmi :value kilobaytdan katta yoki teng bo‘lishi kerak.',
        'numeric' => ':attribute maydoni :value dan katta yoki teng bo‘lishi kerak.',
        'string' => ':attribute maydoni kamida :value ta belgidan iborat bo‘lishi kerak.',
    ],
    'hex_color' => ':attribute maydoni to‘g‘ri o‘n oltilik rang bo‘lishi kerak.',
    'image' => ':attribute maydoni tasvir bo‘lishi kerak.',
    'in' => 'Tanlangan :attribute qiymati noto‘g‘ri.',
    'in_array' => ':attribute maydoni :other ichida bo‘lishi kerak.',
    'in_array_keys' => ':attribute maydoni quyidagi kalitlardan kamida birini o‘z ichiga olishi kerak: :values.',
    'integer' => ':attribute maydoni butun son bo‘lishi kerak.',
    'ip' => ':attribute maydoni to‘g‘ri IP manzil bo‘lishi kerak.',
    'ipv4' => ':attribute maydoni to‘g‘ri IPv4 manzil bo‘lishi kerak.',
    'ipv6' => ':attribute maydoni to‘g‘ri IPv6 manzil bo‘lishi kerak.',
    'json' => ':attribute maydoni to‘g‘ri JSON satr bo‘lishi kerak.',
    'list' => ':attribute maydoni ro‘yxat bo‘lishi kerak.',
    'lowercase' => ':attribute maydoni kichik harflarda bo‘lishi kerak.',
    'lt' => [
        'array' => ':attribute maydoni :value tadan kam elementga ega bo‘lishi kerak.',
        'file' => ':attribute maydonidagi fayl hajmi :value kilobaytdan kichik bo‘lishi kerak.',
        'numeric' => ':attribute maydoni :value dan kichik bo‘lishi kerak.',
        'string' => ':attribute maydoni :value ta belgidan kam bo‘lishi kerak.',
    ],
    'lte' => [
        'array' => ':attribute maydoni :value tadan ko‘p elementga ega bo‘lmasligi kerak.',
        'file' => ':attribute maydonidagi fayl hajmi :value kilobaytdan kichik yoki teng bo‘lishi kerak.',
        'numeric' => ':attribute maydoni :value dan kichik yoki teng bo‘lishi kerak.',
        'string' => ':attribute maydoni :value ta belgidan ko‘p bo‘lmasligi kerak.',
    ],
    'mac_address' => ':attribute maydoni to‘g‘ri MAC manzil bo‘lishi kerak.',
    'max' => [
        'array' => ':attribute maydoni :max tadan ko‘p elementga ega bo‘lmasligi kerak.',
        'file' => ':attribute maydonidagi fayl hajmi :max kilobaytdan oshmasligi kerak.',
        'numeric' => ':attribute maydoni :max dan katta bo‘lmasligi kerak.',
        'string' => ':attribute maydoni :max ta belgidan ko‘p bo‘lmasligi kerak.',
    ],
    'max_digits' => ':attribute maydoni :max tadan ko‘p raqamga ega bo‘lmasligi kerak.',
    'mimes' => ':attribute maydoni quyidagi turdagi fayl bo‘lishi kerak: :values.',
    'mimetypes' => ':attribute maydoni quyidagi turdagi fayl bo‘lishi kerak: :values.',
    'min' => [
        'array' => ':attribute maydoni kamida :min ta elementga ega bo‘lishi kerak.',
        'file' => ':attribute maydonidagi fayl hajmi kamida :min kilobayt bo‘lishi kerak.',
        'numeric' => ':attribute maydoni kamida :min bo‘lishi kerak.',
        'string' => ':attribute maydoni kamida :min ta belgidan iborat bo‘lishi kerak.',
    ],
    'min_digits' => ':attribute maydoni kamida :min ta raqamdan iborat bo‘lishi kerak.',
    'missing' => ':attribute maydoni mavjud bo‘lmasligi kerak.',
    'missing_if' => ':other :value bo‘lganda :attribute maydoni mavjud bo‘lmasligi kerak.',
    'missing_unless' => ':other :value bo‘lmasa, :attribute maydoni mavjud bo‘lmasligi kerak.',
    'missing_with' => ':values mavjud bo‘lganda :attribute maydoni mavjud bo‘lmasligi kerak.',
    'missing_with_all' => ':values mavjud bo‘lganda :attribute maydoni mavjud bo‘lmasligi kerak.',
    'multiple_of' => ':attribute maydoni :value ga karrali bo‘lishi kerak.',
    'not_in' => 'Tanlangan :attribute qiymati noto‘g‘ri.',
    'not_regex' => ':attribute maydoni formati noto‘g‘ri.',
    'numeric' => ':attribute maydoni son bo‘lishi kerak.',
    'password' => [
        'letters' => ':attribute maydonida kamida bitta harf bo‘lishi kerak.',
        'mixed' => ':attribute maydonida kamida bitta bosh va bitta kichik harf bo‘lishi kerak.',
        'numbers' => ':attribute maydonida kamida bitta raqam bo‘lishi kerak.',
        'symbols' => ':attribute maydonida kamida bitta simvol bo‘lishi kerak.',
        'uncompromised' => 'Berilgan :attribute ma’lumot sizib chiqishida ko‘rilgan. Iltimos, boshqa :attribute tanlang.',
    ],
    'present' => ':attribute maydoni mavjud bo‘lishi kerak.',
    'present_if' => ':other :value bo‘lganda :attribute maydoni mavjud bo‘lishi kerak.',
    'present_unless' => ':other :value bo‘lmasa, :attribute maydoni mavjud bo‘lishi kerak.',
    'present_with' => ':values mavjud bo‘lganda :attribute maydoni mavjud bo‘lishi kerak.',
    'present_with_all' => ':values mavjud bo‘lganda :attribute maydoni mavjud bo‘lishi kerak.',
    'prohibited' => ':attribute maydoni taqiqlangan.',
    'prohibited_if' => ':other :value bo‘lganda :attribute maydoni taqiqlangan.',
    'prohibited_if_accepted' => ':other qabul qilinganda :attribute maydoni taqiqlangan.',
    'prohibited_if_declined' => ':other rad etilganda :attribute maydoni taqiqlangan.',
    'prohibited_unless' => ':other :values ichida bo‘lmasa, :attribute maydoni taqiqlangan.',
    'prohibits' => ':attribute maydoni :other ning mavjudligini taqiqlaydi.',
    'regex' => ':attribute maydoni formati noto‘g‘ri.',
    'required' => ':attribute maydoni majburiy.',
    'required_array_keys' => ':attribute maydoni quyidagilar uchun yozuvlarni o‘z ichiga olishi kerak: :values.',
    'required_if' => ':other :value bo‘lganda :attribute maydoni majburiy.',
    'required_if_accepted' => ':other qabul qilinganda :attribute maydoni majburiy.',
    'required_if_declined' => ':other rad etilganda :attribute maydoni majburiy.',
    'required_unless' => ':other :values ichida bo‘lmasa, :attribute maydoni majburiy.',
    'required_with' => ':values mavjud bo‘lganda :attribute maydoni majburiy.',
    'required_with_all' => ':values mavjud bo‘lganda :attribute maydoni majburiy.',
    'required_without' => ':values mavjud bo‘lmaganda :attribute maydoni majburiy.',
    'required_without_all' => 'Hech qaysi :values mavjud bo‘lmaganda :attribute maydoni majburiy.',
    'same' => ':attribute maydoni :other bilan bir xil bo‘lishi kerak.',
    'size' => [
        'array' => ':attribute maydoni :size ta elementdan iborat bo‘lishi kerak.',
        'file' => ':attribute maydonidagi fayl hajmi :size kilobayt bo‘lishi kerak.',
        'numeric' => ':attribute maydoni :size bo‘lishi kerak.',
        'string' => ':attribute maydoni :size ta belgidan iborat bo‘lishi kerak.',
    ],
    'starts_with' => ':attribute maydoni quyidagilardan biri bilan boshlanishi kerak: :values.',
    'string' => ':attribute maydoni satr bo‘lishi kerak.',
    'timezone' => ':attribute maydoni to‘g‘ri vaqt mintaqasi bo‘lishi kerak.',
    'unique' => ':attribute qiymati allaqachon band.',
    'uploaded' => ':attribute yuklab olinmadi.',
    'uppercase' => ':attribute maydoni bosh harflarda bo‘lishi kerak.',
    'url' => ':attribute maydoni to‘g‘ri URL bo‘lishi kerak.',
    'ulid' => ':attribute maydoni to‘g‘ri ULID bo‘lishi kerak.',
    'uuid' => ':attribute maydoni to‘g‘ri UUID bo‘lishi kerak.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
