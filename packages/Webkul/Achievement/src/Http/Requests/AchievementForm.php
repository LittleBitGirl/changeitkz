<?php

namespace Webkul\Achievement\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Webkul\Achievement\Repositories\AchievementRepository;

class AchievementForm extends FormRequest {
    /**
     * ProductRepository object
     *
     * @var \Webkul\Achievement\Repositories\AchievementRepository;
     */
    protected $achievementRepository;

    public function __construct(AchievementRepository $achievementRepository)
    {
        $this->achievementRepository = $achievementRepository;

    }

    /**
     * Determine if the product is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
            'type.required' => 'Type required!',
            'type_value.required' => 'Type value required!',
        ];
    }
}
