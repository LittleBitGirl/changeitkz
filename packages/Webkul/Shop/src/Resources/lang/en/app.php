<?php

return [
    'invalid_vat_format' => 'The given vat id has a wrong format',
    'security-warning' => 'Suspicious activity found!!!',
    'nothing-to-delete' => 'Nothing to delete',

    'layouts' => [
        'my-account' => 'My account',
        'profile' => 'Profile',
        'address' => 'Address',
        'reviews' => 'My histories',
        'wishlist' => 'List of wishes',
        'donelist' => 'Done',
        'orders' => 'Challenges',
        'downloadable-products' => 'Offers'
    ],

    'common' => [
        'error' => 'Something went wrong. Please try again later.',
        'no-result-found' => 'We did not find anything :(.'
    ],

    'home' => [
        'page-title' => config('app.name') . ' - Main page',
        'featured-products' => 'Featured Challenges',
        'all-products' => 'The entire catalog of challenges',
        'new-products' => 'New challanges',
        'verify-email' => 'Verify email account',
        'resend-verify-email' => 'Resend confirmation email'
    ],

    'header' => [
        'title' => 'Account',
        'dropdown-text' => 'Profile, Achievements, Rank, Wish List',
        'sign-in' => 'Log in',
        'sign-up' => 'Registration',
        'rating' => 'Rating',
        'account' => 'Account',
        'cart' => 'Received Calls',
        'profile' => 'Profile',
        'wishlist' => 'Wish List',
        'logout' => 'Log out',
        'search-text' => 'Challenge search here'
    ],

    'minicart' => [
        'view-cart' => 'Go',
        'checkout' => 'Choose',
        'cart' => 'Received Calls',
        'zero' => '0'
    ],

    'footer' => [
        'subscribe-newsletter' => 'Subscribe to news',
        'subscribe' => 'Subscribe',
        'locale' => 'Language',
        'currency' => 'Currency',
    ],

    'subscription' => [
        'unsubscribe' => 'Unsubscribe',
        'Подписаться' => 'Subscribe',
        'subscribed' => 'You are subscribed to subscription emails.',
        'not-subscribed' => 'You cannot subscribe to subscription emails, please try again later.',
        'already' => 'You are already subscribed to our subscription list.',
        'unsubscribed' =>'You have unsubscribed from mailing lists.',
        'ready-unsub '=>' You have already unsubscribed. ',
        'not-subscribed' => 'Error! Mail cannot be sent at this time, please try again later. '
    ],

    'search' => [
        'no-results' => 'No Results Found',
        'page-title' => config ('app.name'). '- Search',
        'found-results' => 'Search Results Found',
        'found-result' => 'Search result found'
    ],

    'reviews' => [
        'title' => 'Title',
        'add-review-page-title' => 'Add story',
        'write-review' => 'Write story',
        'review-title' => 'Give your story a headline',
        'product-review-page-title' => 'The history of passing the challenge',
        'rating-reviews' => 'Rating and Stories',
        'submit' => 'Send',
        'delete-all' => 'All stories were deleted successfully',
        'ratingreviews' => ':rating rating & :review stories',
        'star' => 'Star',
        'percentage' => ':percentage %',
        'id-star' => 'Star',
        'name' => 'Name',
    ],

    'customer' => [
        'signup-text' => [
            'account_exists' => 'Already have an account',
            'title' => 'Log in'
        ],

        'signup-form' => [
            'page-title' => 'Create a new client account',
            'title' => 'Register',
            'firstname' => 'Name',
            'lastname' => 'Фамилия',
            'email' => 'Surname',
            'password' => 'Password',
            'confirm_pass' => 'Confirm password',
            'button_title' => 'Registration',
            'agree' => 'agree',
            'terms' => 'Terms',
            'conditions' => 'Conditions',
            'using'=> 'using these site',
            'agreement' => 'Agreemnt',
            'success' => 'The account was created successfully.',
            'success-verify' => 'The account was created successfully, and the email was sent for verification.',
            'success-verify-email-unsent' => 'Error! If you can not create your own account, try again later.',
            'failed' => 'Error! If you can not create your own account, try again later. ',
            'already-verified' => 'Your account has already been confirmed. Or try sending a new confirmation email again.',
            'verify-not-sent' => 'Error! The problem with sending a confirmation e-mail, please try again later. ',
            'verify-sent' => 'Confirmation email sent',
            'verified' => 'Your account has been confirmed, try logging in.',
            'verify-failed' => 'We cannot confirm your email account.',
            'dont-have-account' => 'You do not have an account.',
            'success' => 'Account created successfully',
            'success-verify' => 'The account was created successfully, and the email was sent for verification.',
            'success-verify-email-unsent' => 'The account was created successfully, but a confirmation email was sent',
            'failed' => 'Error! Unable to create an account, please try again later',
            'already-verified' => 'Your account has already been confirmed or try sending a new confirmation email again',
            'verify-not-sent' => 'Error! Problem when sending a confirmation email, try again later',
            'verify-sent' => 'Confirmation email sent',
            'verified' => 'Your account has been verified, try logging in now',
            'verify-failed' => 'We cannot confirm your email account',
            'dont-have-account' => 'You do not have an account on our site.',
            'customer-registration' => 'The client is successfully registered!'
        ],

        'login-text' => [
            'no_account' => 'No account',
            'title' => 'Register',
        ],

        'login-form' => [
            'page-title' => "Client's username",
            'title' => 'Login',
            'email' => 'Email',
            'password' => 'Password',
            'forgot_pass' => 'Forgot password?',
            'button_title' => 'Login',
            'remember' => 'Remember me',
            'footer' => '© Copyright :year Webkul Software, All rights reserved',
            'invalid-creds' => 'Please check your credentials and try again.',
            'verify-first' => 'First, check your email account.',
            'not-activated' => 'Your activation requires the approval of the administrator',
            'resend-verify' => 'Resend the confirmation email again'
        ],

        'forgot-password' => [
            'title' => 'Recover the password',
            'email' => 'Email',
            'submit' => 'Send password reset to email',
            'page_title' => 'Forgot your password?'
        ],

        'reset-password' => [
            'title' => 'Reset password',
            'email' => 'Registered Email',
            'password' => 'Password',
            'confirm-password' => 'Confirm password',
            'back-link-title' => 'Go back to logging in',
            'submit-btn-title' => 'Reset the password'
        ],

        'account' => [
            'dashboard' => 'Edit profile',
            'menu' => 'Menu',

            'profile' => [
                'index' => [
                    'page-title' => 'Profile',
                    'title' => 'Profile',
                    'edit' => 'Edit',
                ],

                'edit-success' => 'Profile Updated successfully.',
                'edit-fail' => 'Error! The profile cannot be updated, please try again later.',
                'unmatch' => "The old password doesn't match.",

                'fname' => 'Name',
                'lname' => 'Surname',
                'gender' => 'Sex',
                'other' => 'Other',
                'male' => 'Male',
                'female' => 'Female',
                'dob' => 'Date of birth',
                'phone' => 'Phone',
                'email' => 'Email',
                'opassword' => 'Old password',
                'password' => 'Password',
                'cpassword' => 'Confirm password',
                'submit' => 'Update profile',

                'edit-profile' => [
                    'title' => 'edit profile',
                    'page-title' => 'Edit the profile form'
                ]
            ],

            'address' => [
                'index' => [
                    'page-title' => 'Address',
                    'title' => 'Address',
                    "add" => "Add address",
                    "edit" => "Edit",
                    "empty" => "You do not have any saved addresses here, try creating one by clicking on the link below",
                    "create" => "Create address",
                    "delete" => "Delete",
                    "make-default" => "Make by default",
                    "default" => "By default",
                    "contact" => "Contacts",
                    'verify-delete' => 'Do you really want to delete this address?',
                    'default-delete' => 'The default address cannot be changed.',
                    'enter-password' => 'Enter your password.',
                ],

                'create' => [
                    'page-title' => 'Добавить адресную форму',
                    'company_name' => 'Название компании',
                    'first_name' => 'Имя',
                    'last_name' => 'Фамилия',
                    'vat_id' => 'ID Налогоплательщика',
                    'vat_help_note' => '[Примечание: используйте код страны с идентификатором НДС. Например. INV01234567891]',
                    'title' => 'Добавить адрес',
                    'street-address' => 'Улица, дом',
                    'country' => 'Страна',
                    'state' => 'Область',
                    'select-state' => 'Выбрать область, штат или провинцию',
                    'city' => 'Город',
                    'postcode' => 'Почтовый индекс',
                    'phone' => 'Телефон',
                    'submit' => 'Сохранить адрес',
                    'success' => 'Адрес был успешно добавлен.',
                    'error' => 'Адрес не может быть добавлен.'
                ],

                'edit' => [
                    'page-title' => 'Редактировать адрес',
                    'company_name' => 'Название компании',
                    'first_name' => 'Имя',
                    'last_name' => 'Фамилия',
                    'vat_id' => 'ID Налогоплательщика',
                    'title' => 'Редактировать адрес',
                    'street-address' => 'Улица, дом',
                    'submit' => 'Сохранить адрес',
                    'success' => 'Адрес успешно обновлен.',
                ],
                'delete' => [
                    'success' => 'Адрес успешно удален',
                    'fail' => 'Адрес не может быть удален',
                    'wrong-password' => 'Неправильный пароль!'
                ]
            ],

            'order' => [
                'index' => [
                    'page-title' => 'challanges',
                    'title' => 'challanges',
                    'order_id' => 'Challenge code',
                    'date' => 'Date',
                    'status' => 'Status',
                    'total' => 'Total',
                    'order_number' => 'Challange number'
                ],

                'view' => [
                    'page-tile' => 'challange #:order_id',
                    'info' => 'Information',
                    'place-on' => 'Place on',
                    'products-orders' => 'product challanges',
                    'invoices' => 'Счета',
                    'shipments' => 'Отправки',
                    'SKU' => 'Bar-код',
                    'product-name' => 'Name',
                    'qty' => 'Quantity',
                    'item-status' => 'The status of the challenge',
                    'item-order' => 'Completed by the challenge (:qty_ordered)',
                    'item-invoice' => 'Billed (:qty_invoiced)',
                    'item-shipped' => 'sent (:qty_shipped)',
                    'item-cancelled' => 'Cancelles (:qty_canceled)',
                    'item-refunded' => 'Refunded (:qty_refunded)',
                    'price' => 'Price',
                    'total' => 'Total',
                    'subtotal' => 'промежуточный итог',
                    'shipping-Handling' => 'Доставка и обработка',
                    'tax' => 'Налог',
                    'discount' => 'Скидка',
                    'tax-процент' => 'Налоговый процент',
                    'tax-amount' => 'Сумма налога',
                    'discount-amount' => 'Сумма скидки',
                    'grand-total' => 'Общий итог',
                    'total-paid' => 'Всего оплачено',
                    'total-refunded' => 'Всего возмещено',
                    'total-due' => 'Итого к оплате',
                    'shipping-address' => 'Адрес доставки',
                    'billing-address' => 'Адрес плательщика',
                    'shipping-method' => 'Способ доставки',
                    'payment-method' => 'Способ оплаты',
                    'Individual-invoice' => 'Счет #:invoice_id',
                    'Individual-Shipment' => 'Отгрузка №:shipment_id',
                    'print' => 'Распечатать',
                    'invoice-id' => 'ID счета',
                    'order-id' => 'ID челленджа',
                    'order-date' => 'Дата челленджа',
                    'bill-to' => 'Плательщик',
                    'ship-to' => 'Получатель',
                    'contact' => 'Контакт',
                    'refunds' => 'Возмещения',
                    'Individual-refund' => 'Refund #:refund_id',
                    'setting-refund' => 'Корректировка возмещений',
                    'adjustment-fee' => 'Комиссия за корректировку',
                ]
            ],

            'wishlist' => [
                'page-title' => 'Wish list',
                'title' => 'Wish list',
                'deleteall' => 'Delete all',
                'moveall' => 'Take on all challenges',
                'move-to-cart' => 'Accept the challenge',
                'error' => 'It is not possible to add the challenge to the wishlist due to unknown issues, please check later',
                'add' => 'The challenge was successfully added to the wish list',
                'remove' => 'The challenge was successfully removed from the wish list',
                'Move' => 'Challenge successfully accepted',
                'option-missing' => 'There are no challenge options, so the item can not be moved to the wish list.',
                'move-error' => 'The challenge cannot be moved to the wish list, please try again later',
                'success' => 'The challenge was successfully added to the wish list',
                'fail' => 'You can not add the challenge to your wishlist, so try again later',
                'already' => 'The challenge is already on your wish list',
                'removed' => 'The challenge was successfully removed from the wish list',
                'remove-fail' => 'You can not delete an item from your wish list, so try again later',
                'empty' => 'You do not have any challenges on your wish list',
                'remove-all-success' => 'All challenges from your wish list have been deleted',
            ],

            'donelist' => [
                'page-title' => 'Challenges achieved',
                'title' => 'Challenges achieved',
                'deleteall' => 'Delete all',
                'moveall' => 'Mark all outstanding',
                'move-to-cart' => 'Cancel',
                'write-review' => 'Add a history',
                'error' => 'It is not possible to add a challenge to the wishlist due to unknown issues, please check later',
                'add' => 'The challenge was successfully added to the wish list',
                'remove' => 'The challenge was successfully removed from the wish list',
                'move' => 'Challenge successfully accepted',
                'option-missing' => 'There are no challenge options, so the item cannot be moved to the completed list.',
                'move-error' => 'The challenge cannot be moved to the completed list, please try again later',
                'success' => 'The challenge was successfully added to the completed list',
                'fail' => 'Unable to add the challenge to the completed list, please try again later',
                'already' => 'The challenge is already present in your completed list',
                'removed' => 'The challenge was successfully removed from the completed list',
                'remove-fail' => 'You can not delete an item from the completed list, so try again later',
                'empty' => 'You do not have any completed challenges',
                'remove-all-success' => 'All challenges from your completed list have been deleted',
            ],

            'downloadable_products' => [
                'title' => 'My suggestion',
                'order-id' => 'Suggestion ID',
                'date' => 'Date',
                'name' => 'Title',
                'status' => 'Status',
                'pending' => 'In waiting',
                'available' => 'Confirmed',
                'expired' => 'Declined',
                'remaining-downloads' => 'Other information',
                'unlimited' => 'Unlimited',
                'download-error' => 'The download link is outdated.'
            ],

            'review' => [
                'index' => [
                    'title' => 'Stories',
                    'page-title' => 'Stories'
                ],

                'view' => [
                    'page-tile' => 'Story #:id',
                ]
            ]
        ]
    ],

    'products' => [
        'layered-nav-title' => 'Shop By',
        'price-label' => 'Столь же низко',
        'remove-filter-link-title' => 'Очистить все',
        'sort-by' => 'Сортировать по',
        'from-a-z' => 'А-Я',
        'from-z-a' => 'Я-A',
        'newest-first' => 'Сначала новинки',
        'old-first' => 'Сначала старые',
        'cheap-first' => 'Сначала дешевые',
        'expensive-first' => 'Сначала дорогие',
        'show' => 'Показать',
        'pager-info' => ':showing из :total элементов',
        'description' => 'Описание',
        'specification'=> 'Haracteristics',
        'total-reviews' => ':total stories',
        'total-rating' => ':total_rating rating и :total_reviews stories',
        'by' => ':name',
        'up-sell-title' => 'We have found other challenges that you might like!',
        'related-product-title' => 'Related challenges',
        'cross-sell-title' => 'Many options',
        'reviews-title' => 'Ratings and reviews',
        'write-review-btn' => 'Write history',
        'choose-option' => 'Select the option',
        'sale' => 'Special award',
        'new' => 'New',
        'empty' => 'There are no challenges in this category',
        'add-to-cart' => 'Accept the challenge',
        'buy-now' => 'Done',
        'whoops' => 'Oops!',
        'quantity' => 'Quantity',
        'in-stock' => 'Active',
        'out-of-stock' => 'Not active',
        'view-all' => 'View all',
        'select-over-options' => 'Please select the options above first.',
        'less-amount' => 'The quantity cannot be less than one.',
        'samples' => 'Samples',
        'links' => 'Links',
        'sample' => 'Sample',
        'name' => 'Name',
        'qty' => 'Quantity',
        'start-at' => 'Start at',
        'customize-options' => 'Customize options',
        'choose-selection' => 'Choose selection',
        'your-customization' => 'Your customiztaion',
        'total-amount' => 'Total amount',
        'none' => 'None',
        'you-get' => 'You get',
        'for-challange' => 'For challenge'
    ],

    // 'reviews' => [
    //     'empty' => 'You Have Not Reviewed Any Of Product Yet'
    // ]

    'buynow' => [
        'no-options' => 'Please select the parameters before choosing this challenge.'
    ],

    'checkout' => [
        'cart' => [
            'integrity' => [
                'missing_fields' => 'Некоторые обязательные поля отсутствуют для этого продукта.',
                'missing_options' => 'Опции для этого продукта отсутствуют.',
                'missing_links' => 'Для этого продукта отсутствуют загружаемые ссылки.',
                'qty_missing' => 'По крайней мере, один продукт должен иметь более 1 количества.',
                'qty_impossible' => 'You cannot add more than one of these challenges to the list.'
            ],
            'mark-as-done' => 'Mark as done',
            'mark-as-done-all' => 'All done!',
            'create-error' => 'Some problem was detected when creating a list instance.',
            'title' => 'Accpeted challenges',
            'empty' => 'Your list of challenges let',
            'update-cart' => 'Update the list of challenges',
            'continue-shopping' => 'Go to the catalog',
            'continue-to-checkout' => 'Mark the challenge as completed',
            'remove' => 'Remove',
            'remove-link' => 'Remove',
            'move-to-wishlist' => 'Move to wishlist',
            'move-to-donelist' => 'Move to donelist',
            'move-to-wishlist-success' => 'The item was successfully moved to the wish list.',
            'move-to-donelist-success' => 'The item was successfully moved to the completed list.',
            'move-to-wishlist-error' => 'You can not move an item to the wish list, so try again later.',
            'move-to-donelist-error' => 'You have already completed this challenge.',
            'add-config-warning' => 'Please select this option before adding it to the list.',
            'quantity' => [
                'quantity' => 'Quantity',
                'success' => 'The list was updated successfully!',
                'illegal' => 'The quantity cannot be less than one.',
                'inventory_warning' => 'The requested quantity is not available, please try again later.',
                'error' => 'It is not possible to update the challenges at this time, please try again later.'
            ],

            'item' => [
                'error_remove' => 'There are no challenges to delete from the list.',
                'success' => 'The challenge was successfully added to the list.',
                'success-remove' => 'The challenge was successfully removed from the list.',
                'error-add' => 'challenge can not be added to the list, please try again later.',
            ],
            'amount-error' => 'The requested quantity is not available.',
            'cart-subtotal' => 'Total you will receive',
            'cart-remove-action' => 'Do you really want to do this?',
            'part-cart-update' => 'Only some of the products have been updated',
            'link-missing' => ''
        ],

        'onepage' => [
            'title' => 'Making the challenge',
            'information' => 'Information',
            'shipping' => 'Shipment',
            'payment' => 'Payment',
            'complete' => 'Complete',
            'billing-address' => 'Адрес плательщика',
            'sign-in' => 'Войти',
            'company-name' => 'Название компании',
            'name-name' => 'Имя',
            'last-name' => 'Фамилия',
            'email' => 'Email',
            'address1' => 'Адрес',
            'city' => 'Город',
            'state' => 'Область',
            'select-state' => 'Выбрать регион, штат или провинцию',
            'postcode' => 'Почтовый индекс',
            'phone' => 'Телефон',
            'country' => 'Страна',
            'order-summary' => 'Summary the challenge',
            'shipping-address' => 'Адрес доставки',
            'use_for_shipping' => 'Доставить по этому адресу',
            'continue' => 'Продолжить',
            'shipping-method' => 'Выберите способ доставки',
            'payment-methods' => 'Выберите способ оплаты',
            'payment-method' => 'Метод оплаты',
            'summary' => 'How many points will you get?',
            'price' => 'You will get',
            'quantity' => 'Quantity',
            'contact' => 'Contact',
            'place-order' => 'Place a challenge',
            'new-address' => 'Добавить новый адрес',
            'save_as_address' => 'Сохранить этот адрес',
            'apply-coupon' => 'Применить купон',
            'amt-payable' => 'Сумма к оплате',
            'got' => 'Ок',
            'free' => 'Бесплатно',
            'coupon-used' => 'Купон уже использован',
            'apply' => 'Купон приложен',
            'back' => 'Назад',
            'cash-desc' => 'Наличные при доставке',
            'money-desc' => 'Денежный перевод',
            'paypal-desc' => 'Стандарт Paypal',
            'free-desc' => 'Это бесплатная доставка',
            'flat-desc' => 'Это фиксированная ставка',
            'password' => 'Пароль',
            'login-exist-message' => 'У вас уже есть аккаунт с нами, войдите или продолжите как гость.',
            'enter-coupon-code' => 'Введите код купона'
        ],

        'total' => [
            'order-summary' => 'Challenge Summary',
            'sub-total' => 'Challenges',
            'grand-total' => 'In total you will receive:',
            'delivery-charges' => 'Cost of delivery',
            'tax' => 'Tax',
            'discount' => 'discount',
            'for' => 'for',
            'you-will-get' => 'Challenge',
            'price' => 'points',
            'disc-amount' => 'Discount Amount',
            'new-grand-total' => 'New grand total',
            'coupon' => 'Coupon',
            'coupon-apply' => 'Application coupon',
            'remove-coupon' => 'Remove coupon',
            'can-apply-coupon' => 'Can not apply the coupon',
            'invalid-coupon' => 'Coupon code is invalid.',
            'success-coupon' => 'Coupon code successfully applied.',
            'coupon-apply-issue' => 'Coupon code cannot be applied.'
        ],

        'success' => [
            'title' => 'Challenge successfully posted',
            'thanks' => 'Thank you for your offer!',
            'order-id-info' => 'ID of your challenge: #:order_id',
            'info' => 'We will send you an email, your challenge information and tracking information.'
        ]
    ],

    'mail' => [
        'order' => [
            'subject' => 'confirmation of a new challenge',
            'heading' => 'Challenge Confirmation!',
            'dear' => 'Dear:customer_name',
            'dear-admin' => 'Dear:admin_name',
            'greeting' => 'Thank you for your challenge:order_id, it posted:creation_at',
            'greeting-admin' => 'Challenge ID :order_id posted :create_at',
            'summary' => 'Challenge Summary',
            'shipping-address' => 'Адрес доставки',
            'billing-address' => 'Адрес плательщика',
            'contact' => 'Contacts',
            'shipping' => 'Способ доставки',
            'payment' => 'Способ оплаты',
            'price' => 'Points',
            'quantity' => 'amount',
            'subtotal' => 'Subtotal',
            'shipping-handling' => 'Доставка и обработка',
            'tax' => 'Налог',
            'discount' => 'Скидка',
            'grand-total' => 'Общий итог',
            'final-summary' => 'Спасибо за проявленный интерес к нашему магазину, мы вышлем вам номер для отслеживания после его отправки',
            'help' => 'If you need any help, please contact us at :support_email',
            'thanks' => 'Thank you!',
            'cancel' => [
                'subject' => 'Challenge cancellation confirmation',
                'heading' => 'challenge canceled',
                'dear' => 'Dear :customer_name',
                'greeting '=>' Your challenge with ID №:order_id was cancelled :create_at',
                'summary' => 'Challenge Summary',
                'shipping-address' => 'Адрес доставки',
                'billing-address' => 'Адрес плательщика',
                'contact' => 'Контакт',
                'shipping' => 'Способ доставки',
                'payment' => 'Способ оплаты',
                'subtotal' => 'промежуточный итог',
                'shipping-handling' => 'Доставка и обработка',
                'tax' => 'Налог',
                'discount' => 'Скидка',
                'grand-total' => 'Общий итог',
                'final-summary' => 'Thank you for your interest',
                'help' => 'If you need any help, please contact us at :support_email',
                'спасибо' => 'Thank you!',
            ]
        ],

        'invoice' => [
            'heading' => 'Your invoice number:invoice_id for challenge №:order_id',
            'subject' => 'Invoice for your challenge #:order_id',
            'summary' => 'Invoice summary',
        ],

        'shipment' => [
            'heading' => 'Shipment #:shipment_id was generated for Order #:order_id',
            'inventory-heading' => 'New shipment number :shipment_id бwas generated for Order #:order_id',
            'subject' => 'Shipment for your challenge #:order_id',
            'inventory-subject' => 'A new batch was generated for Order #:order_id',
            'summary' => 'Shipment Summary',
            'carrier' => 'Carrier',
            'tracking-number' => 'Tracking number',
            'greeting '=>' challenge:order_id was posted :create_at ',
        ],

        'refund' => [
            'heading' => 'Your return number :refund_id for challenge number :order_id',
            'subject' => 'Refund for your challenge №:order_id',
            'summary' => 'Refund Amount',
            'setting-refund' => 'Return Adjustment',
            'adjustment-fee' => 'Adjustment fee'
        ],

        'forget-password' => [
            'subject' => 'Password to reset client',
            'dear' => 'Dear :name',
            'info' => 'You have received a password reset request for your account',
            'reset-password' => 'Reset the password',
            'final-summary' => 'If you did not request a password reset, no further action is required.',
            'спасибо' => 'Thank you!'
        ],

        'customer' => [
            'new' => [
                'дорогой' => 'Dear :customer_name',
                'username-email' => 'Username / Email',
                'subject' => 'New customer registration',
                'password' => 'password',
                'summary' => 'Your account has been created. Your account details below:',
                'thanks' => 'Thank you!',
            ],

            'registration' => [
                'subject' => 'New customer registration',
                'customer-registration' => 'Client successfully registered',
                'dear' => 'Dear :customer_name',
                'greeting '=>' Welcome and thanks for registering with us.! ',
                'summary' => 'Your account has been successfully created and you can log in using your email address and password. After logging in, you can access other services, including viewing past challenges, wish lists, and editing your account information. ',
                'thanks' => 'Thank you!',
            ],

            'verification' => [
                'heading' => config ('app.name'). ' - Email Verification',
                'subject' => 'Confirmation mail',
                'verify' => 'Verify your account',
                'summary' => 'This is a letter confirming that the email address you entered is yours.
                 Please click the Confirm Your Account button below to verify your account. '
            ],

            'subscription' => [
                'subject' => 'Email Subscription',
                'greeting' => 'Welcome'. config ('app.name'). '- Electronic subscription',
                'unsubscribe' => 'Unsubscribe',
                'summary' => 'Thanks for putting me in your inbox. It has been a long time since you read'. config ('app.name'). 'write, and we do not want to overload your inbox.
                 If you still do not want to receive the latest marketing news by e-mail, then be sure to click the button below. '
            ]
        ]
    ],

    'webkul' => [
        'copy-right' => '© Copyright :year Antresolle, All rights reserved',
    ],

    'response' => [
        'create-success' => ':name successfully created.',
        'update-success' => ':name successfully updated.',
        'delete-success' => ':name successfully deleted.',
        'submit-success' => ':name sent successfully.'
    ],
];