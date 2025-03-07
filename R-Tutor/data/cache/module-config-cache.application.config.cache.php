<?php
return array (
  'controller_plugins' => 
  array (
    'aliases' => 
    array (
      'flashmessenger' => 'Laminas\\Mvc\\Plugin\\FlashMessenger\\FlashMessenger',
      'flashMessenger' => 'Laminas\\Mvc\\Plugin\\FlashMessenger\\FlashMessenger',
      'FlashMessenger' => 'Laminas\\Mvc\\Plugin\\FlashMessenger\\FlashMessenger',
      'Laminas\\Mvc\\Controller\\Plugin\\FlashMessenger' => 'Laminas\\Mvc\\Plugin\\FlashMessenger\\FlashMessenger',
      'Zend\\Mvc\\Controller\\Plugin\\FlashMessenger' => 'Laminas\\Mvc\\Controller\\Plugin\\FlashMessenger',
      'Zend\\Mvc\\Plugin\\FlashMessenger\\FlashMessenger' => 'Laminas\\Mvc\\Plugin\\FlashMessenger\\FlashMessenger',
    ),
    'factories' => 
    array (
      'Laminas\\Mvc\\Plugin\\FlashMessenger\\FlashMessenger' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
    ),
  ),
  'view_helpers' => 
  array (
    'aliases' => 
    array (
      'flashmessenger' => 'Laminas\\Mvc\\Plugin\\FlashMessenger\\View\\Helper\\FlashMessenger',
      'flashMessenger' => 'Laminas\\Mvc\\Plugin\\FlashMessenger\\View\\Helper\\FlashMessenger',
      'FlashMessenger' => 'Laminas\\Mvc\\Plugin\\FlashMessenger\\View\\Helper\\FlashMessenger',
      'Zend\\Mvc\\Plugin\\FlashMessenger\\View\\Helper\\FlashMessenger' => 'Laminas\\Mvc\\Plugin\\FlashMessenger\\View\\Helper\\FlashMessenger',
      'zendviewhelperflashmessenger' => 'laminasviewhelperflashmessenger',
      'form' => 'Laminas\\Form\\View\\Helper\\Form',
      'Form' => 'Laminas\\Form\\View\\Helper\\Form',
      'formbutton' => 'Laminas\\Form\\View\\Helper\\FormButton',
      'form_button' => 'Laminas\\Form\\View\\Helper\\FormButton',
      'formButton' => 'Laminas\\Form\\View\\Helper\\FormButton',
      'FormButton' => 'Laminas\\Form\\View\\Helper\\FormButton',
      'formcaptcha' => 'Laminas\\Form\\View\\Helper\\FormCaptcha',
      'form_captcha' => 'Laminas\\Form\\View\\Helper\\FormCaptcha',
      'formCaptcha' => 'Laminas\\Form\\View\\Helper\\FormCaptcha',
      'FormCaptcha' => 'Laminas\\Form\\View\\Helper\\FormCaptcha',
      'captchadumb' => 'Laminas\\Form\\View\\Helper\\Captcha\\Dumb',
      'captcha_dumb' => 'Laminas\\Form\\View\\Helper\\Captcha\\Dumb',
      'captcha/dumb' => 'Laminas\\Form\\View\\Helper\\Captcha\\Dumb',
      'CaptchaDumb' => 'Laminas\\Form\\View\\Helper\\Captcha\\Dumb',
      'captchaDumb' => 'Laminas\\Form\\View\\Helper\\Captcha\\Dumb',
      'formcaptchadumb' => 'Laminas\\Form\\View\\Helper\\Captcha\\Dumb',
      'form_captcha_dumb' => 'Laminas\\Form\\View\\Helper\\Captcha\\Dumb',
      'formCaptchaDumb' => 'Laminas\\Form\\View\\Helper\\Captcha\\Dumb',
      'FormCaptchaDumb' => 'Laminas\\Form\\View\\Helper\\Captcha\\Dumb',
      'captchafiglet' => 'Laminas\\Form\\View\\Helper\\Captcha\\Figlet',
      'captcha/figlet' => 'Laminas\\Form\\View\\Helper\\Captcha\\Figlet',
      'captcha_figlet' => 'Laminas\\Form\\View\\Helper\\Captcha\\Figlet',
      'captchaFiglet' => 'Laminas\\Form\\View\\Helper\\Captcha\\Figlet',
      'CaptchaFiglet' => 'Laminas\\Form\\View\\Helper\\Captcha\\Figlet',
      'formcaptchafiglet' => 'Laminas\\Form\\View\\Helper\\Captcha\\Figlet',
      'form_captcha_figlet' => 'Laminas\\Form\\View\\Helper\\Captcha\\Figlet',
      'formCaptchaFiglet' => 'Laminas\\Form\\View\\Helper\\Captcha\\Figlet',
      'FormCaptchaFiglet' => 'Laminas\\Form\\View\\Helper\\Captcha\\Figlet',
      'captchaimage' => 'Laminas\\Form\\View\\Helper\\Captcha\\Image',
      'captcha/image' => 'Laminas\\Form\\View\\Helper\\Captcha\\Image',
      'captcha_image' => 'Laminas\\Form\\View\\Helper\\Captcha\\Image',
      'captchaImage' => 'Laminas\\Form\\View\\Helper\\Captcha\\Image',
      'CaptchaImage' => 'Laminas\\Form\\View\\Helper\\Captcha\\Image',
      'formcaptchaimage' => 'Laminas\\Form\\View\\Helper\\Captcha\\Image',
      'form_captcha_image' => 'Laminas\\Form\\View\\Helper\\Captcha\\Image',
      'formCaptchaImage' => 'Laminas\\Form\\View\\Helper\\Captcha\\Image',
      'FormCaptchaImage' => 'Laminas\\Form\\View\\Helper\\Captcha\\Image',
      'captcharecaptcha' => 'Laminas\\Form\\View\\Helper\\Captcha\\ReCaptcha',
      'captcha/recaptcha' => 'Laminas\\Form\\View\\Helper\\Captcha\\ReCaptcha',
      'captcha_recaptcha' => 'Laminas\\Form\\View\\Helper\\Captcha\\ReCaptcha',
      'captchaRecaptcha' => 'Laminas\\Form\\View\\Helper\\Captcha\\ReCaptcha',
      'CaptchaRecaptcha' => 'Laminas\\Form\\View\\Helper\\Captcha\\ReCaptcha',
      'formcaptcharecaptcha' => 'Laminas\\Form\\View\\Helper\\Captcha\\ReCaptcha',
      'form_captcha_recaptcha' => 'Laminas\\Form\\View\\Helper\\Captcha\\ReCaptcha',
      'formCaptchaRecaptcha' => 'Laminas\\Form\\View\\Helper\\Captcha\\ReCaptcha',
      'FormCaptchaRecaptcha' => 'Laminas\\Form\\View\\Helper\\Captcha\\ReCaptcha',
      'formcheckbox' => 'Laminas\\Form\\View\\Helper\\FormCheckbox',
      'form_checkbox' => 'Laminas\\Form\\View\\Helper\\FormCheckbox',
      'formCheckbox' => 'Laminas\\Form\\View\\Helper\\FormCheckbox',
      'FormCheckbox' => 'Laminas\\Form\\View\\Helper\\FormCheckbox',
      'formcollection' => 'Laminas\\Form\\View\\Helper\\FormCollection',
      'form_collection' => 'Laminas\\Form\\View\\Helper\\FormCollection',
      'formCollection' => 'Laminas\\Form\\View\\Helper\\FormCollection',
      'FormCollection' => 'Laminas\\Form\\View\\Helper\\FormCollection',
      'formcolor' => 'Laminas\\Form\\View\\Helper\\FormColor',
      'form_color' => 'Laminas\\Form\\View\\Helper\\FormColor',
      'formColor' => 'Laminas\\Form\\View\\Helper\\FormColor',
      'FormColor' => 'Laminas\\Form\\View\\Helper\\FormColor',
      'formdate' => 'Laminas\\Form\\View\\Helper\\FormDate',
      'form_date' => 'Laminas\\Form\\View\\Helper\\FormDate',
      'formDate' => 'Laminas\\Form\\View\\Helper\\FormDate',
      'FormDate' => 'Laminas\\Form\\View\\Helper\\FormDate',
      'formdatetime' => 'Laminas\\Form\\View\\Helper\\FormDateTime',
      'form_date_time' => 'Laminas\\Form\\View\\Helper\\FormDateTime',
      'formDateTime' => 'Laminas\\Form\\View\\Helper\\FormDateTime',
      'FormDateTime' => 'Laminas\\Form\\View\\Helper\\FormDateTime',
      'formdatetimelocal' => 'Laminas\\Form\\View\\Helper\\FormDateTimeLocal',
      'form_date_time_local' => 'Laminas\\Form\\View\\Helper\\FormDateTimeLocal',
      'formDateTimeLocal' => 'Laminas\\Form\\View\\Helper\\FormDateTimeLocal',
      'FormDateTimeLocal' => 'Laminas\\Form\\View\\Helper\\FormDateTimeLocal',
      'formdatetimeselect' => 'Laminas\\Form\\View\\Helper\\FormDateTimeSelect',
      'form_date_time_select' => 'Laminas\\Form\\View\\Helper\\FormDateTimeSelect',
      'formDateTimeSelect' => 'Laminas\\Form\\View\\Helper\\FormDateTimeSelect',
      'FormDateTimeSelect' => 'Laminas\\Form\\View\\Helper\\FormDateTimeSelect',
      'formdateselect' => 'Laminas\\Form\\View\\Helper\\FormDateSelect',
      'form_date_select' => 'Laminas\\Form\\View\\Helper\\FormDateSelect',
      'formDateSelect' => 'Laminas\\Form\\View\\Helper\\FormDateSelect',
      'FormDateSelect' => 'Laminas\\Form\\View\\Helper\\FormDateSelect',
      'form_element' => 'Laminas\\Form\\View\\Helper\\FormElement',
      'formelement' => 'Laminas\\Form\\View\\Helper\\FormElement',
      'formElement' => 'Laminas\\Form\\View\\Helper\\FormElement',
      'FormElement' => 'Laminas\\Form\\View\\Helper\\FormElement',
      'form_element_errors' => 'Laminas\\Form\\View\\Helper\\FormElementErrors',
      'formelementerrors' => 'Laminas\\Form\\View\\Helper\\FormElementErrors',
      'formElementErrors' => 'Laminas\\Form\\View\\Helper\\FormElementErrors',
      'FormElementErrors' => 'Laminas\\Form\\View\\Helper\\FormElementErrors',
      'form_email' => 'Laminas\\Form\\View\\Helper\\FormEmail',
      'formemail' => 'Laminas\\Form\\View\\Helper\\FormEmail',
      'formEmail' => 'Laminas\\Form\\View\\Helper\\FormEmail',
      'FormEmail' => 'Laminas\\Form\\View\\Helper\\FormEmail',
      'form_file' => 'Laminas\\Form\\View\\Helper\\FormFile',
      'formfile' => 'Laminas\\Form\\View\\Helper\\FormFile',
      'formFile' => 'Laminas\\Form\\View\\Helper\\FormFile',
      'FormFile' => 'Laminas\\Form\\View\\Helper\\FormFile',
      'formfileapcprogress' => 'Laminas\\Form\\View\\Helper\\File\\FormFileApcProgress',
      'form_file_apc_progress' => 'Laminas\\Form\\View\\Helper\\File\\FormFileApcProgress',
      'formFileApcProgress' => 'Laminas\\Form\\View\\Helper\\File\\FormFileApcProgress',
      'FormFileApcProgress' => 'Laminas\\Form\\View\\Helper\\File\\FormFileApcProgress',
      'formfilesessionprogress' => 'Laminas\\Form\\View\\Helper\\File\\FormFileSessionProgress',
      'form_file_session_progress' => 'Laminas\\Form\\View\\Helper\\File\\FormFileSessionProgress',
      'formFileSessionProgress' => 'Laminas\\Form\\View\\Helper\\File\\FormFileSessionProgress',
      'FormFileSessionProgress' => 'Laminas\\Form\\View\\Helper\\File\\FormFileSessionProgress',
      'formfileuploadprogress' => 'Laminas\\Form\\View\\Helper\\File\\FormFileUploadProgress',
      'form_file_upload_progress' => 'Laminas\\Form\\View\\Helper\\File\\FormFileUploadProgress',
      'formFileUploadProgress' => 'Laminas\\Form\\View\\Helper\\File\\FormFileUploadProgress',
      'FormFileUploadProgress' => 'Laminas\\Form\\View\\Helper\\File\\FormFileUploadProgress',
      'formhidden' => 'Laminas\\Form\\View\\Helper\\FormHidden',
      'form_hidden' => 'Laminas\\Form\\View\\Helper\\FormHidden',
      'formHidden' => 'Laminas\\Form\\View\\Helper\\FormHidden',
      'FormHidden' => 'Laminas\\Form\\View\\Helper\\FormHidden',
      'formimage' => 'Laminas\\Form\\View\\Helper\\FormImage',
      'form_image' => 'Laminas\\Form\\View\\Helper\\FormImage',
      'formImage' => 'Laminas\\Form\\View\\Helper\\FormImage',
      'FormImage' => 'Laminas\\Form\\View\\Helper\\FormImage',
      'forminput' => 'Laminas\\Form\\View\\Helper\\FormInput',
      'form_input' => 'Laminas\\Form\\View\\Helper\\FormInput',
      'formInput' => 'Laminas\\Form\\View\\Helper\\FormInput',
      'FormInput' => 'Laminas\\Form\\View\\Helper\\FormInput',
      'formlabel' => 'Laminas\\Form\\View\\Helper\\FormLabel',
      'form_label' => 'Laminas\\Form\\View\\Helper\\FormLabel',
      'formLabel' => 'Laminas\\Form\\View\\Helper\\FormLabel',
      'FormLabel' => 'Laminas\\Form\\View\\Helper\\FormLabel',
      'formmonth' => 'Laminas\\Form\\View\\Helper\\FormMonth',
      'form_month' => 'Laminas\\Form\\View\\Helper\\FormMonth',
      'formMonth' => 'Laminas\\Form\\View\\Helper\\FormMonth',
      'FormMonth' => 'Laminas\\Form\\View\\Helper\\FormMonth',
      'formmonthselect' => 'Laminas\\Form\\View\\Helper\\FormMonthSelect',
      'form_month_select' => 'Laminas\\Form\\View\\Helper\\FormMonthSelect',
      'formMonthSelect' => 'Laminas\\Form\\View\\Helper\\FormMonthSelect',
      'FormMonthSelect' => 'Laminas\\Form\\View\\Helper\\FormMonthSelect',
      'formmulticheckbox' => 'Laminas\\Form\\View\\Helper\\FormMultiCheckbox',
      'form_multi_checkbox' => 'Laminas\\Form\\View\\Helper\\FormMultiCheckbox',
      'formMultiCheckbox' => 'Laminas\\Form\\View\\Helper\\FormMultiCheckbox',
      'FormMultiCheckbox' => 'Laminas\\Form\\View\\Helper\\FormMultiCheckbox',
      'formnumber' => 'Laminas\\Form\\View\\Helper\\FormNumber',
      'form_number' => 'Laminas\\Form\\View\\Helper\\FormNumber',
      'formNumber' => 'Laminas\\Form\\View\\Helper\\FormNumber',
      'FormNumber' => 'Laminas\\Form\\View\\Helper\\FormNumber',
      'formpassword' => 'Laminas\\Form\\View\\Helper\\FormPassword',
      'form_password' => 'Laminas\\Form\\View\\Helper\\FormPassword',
      'formPassword' => 'Laminas\\Form\\View\\Helper\\FormPassword',
      'FormPassword' => 'Laminas\\Form\\View\\Helper\\FormPassword',
      'formradio' => 'Laminas\\Form\\View\\Helper\\FormRadio',
      'form_radio' => 'Laminas\\Form\\View\\Helper\\FormRadio',
      'formRadio' => 'Laminas\\Form\\View\\Helper\\FormRadio',
      'FormRadio' => 'Laminas\\Form\\View\\Helper\\FormRadio',
      'formrange' => 'Laminas\\Form\\View\\Helper\\FormRange',
      'form_range' => 'Laminas\\Form\\View\\Helper\\FormRange',
      'formRange' => 'Laminas\\Form\\View\\Helper\\FormRange',
      'FormRange' => 'Laminas\\Form\\View\\Helper\\FormRange',
      'formreset' => 'Laminas\\Form\\View\\Helper\\FormReset',
      'form_reset' => 'Laminas\\Form\\View\\Helper\\FormReset',
      'formReset' => 'Laminas\\Form\\View\\Helper\\FormReset',
      'FormReset' => 'Laminas\\Form\\View\\Helper\\FormReset',
      'formrow' => 'Laminas\\Form\\View\\Helper\\FormRow',
      'form_row' => 'Laminas\\Form\\View\\Helper\\FormRow',
      'formRow' => 'Laminas\\Form\\View\\Helper\\FormRow',
      'FormRow' => 'Laminas\\Form\\View\\Helper\\FormRow',
      'formsearch' => 'Laminas\\Form\\View\\Helper\\FormSearch',
      'form_search' => 'Laminas\\Form\\View\\Helper\\FormSearch',
      'formSearch' => 'Laminas\\Form\\View\\Helper\\FormSearch',
      'FormSearch' => 'Laminas\\Form\\View\\Helper\\FormSearch',
      'formselect' => 'Laminas\\Form\\View\\Helper\\FormSelect',
      'form_select' => 'Laminas\\Form\\View\\Helper\\FormSelect',
      'formSelect' => 'Laminas\\Form\\View\\Helper\\FormSelect',
      'FormSelect' => 'Laminas\\Form\\View\\Helper\\FormSelect',
      'formsubmit' => 'Laminas\\Form\\View\\Helper\\FormSubmit',
      'form_submit' => 'Laminas\\Form\\View\\Helper\\FormSubmit',
      'formSubmit' => 'Laminas\\Form\\View\\Helper\\FormSubmit',
      'FormSubmit' => 'Laminas\\Form\\View\\Helper\\FormSubmit',
      'formtel' => 'Laminas\\Form\\View\\Helper\\FormTel',
      'form_tel' => 'Laminas\\Form\\View\\Helper\\FormTel',
      'formTel' => 'Laminas\\Form\\View\\Helper\\FormTel',
      'FormTel' => 'Laminas\\Form\\View\\Helper\\FormTel',
      'formtext' => 'Laminas\\Form\\View\\Helper\\FormText',
      'form_text' => 'Laminas\\Form\\View\\Helper\\FormText',
      'formText' => 'Laminas\\Form\\View\\Helper\\FormText',
      'FormText' => 'Laminas\\Form\\View\\Helper\\FormText',
      'formtextarea' => 'Laminas\\Form\\View\\Helper\\FormTextarea',
      'form_text_area' => 'Laminas\\Form\\View\\Helper\\FormTextarea',
      'formTextarea' => 'Laminas\\Form\\View\\Helper\\FormTextarea',
      'formTextArea' => 'Laminas\\Form\\View\\Helper\\FormTextarea',
      'FormTextArea' => 'Laminas\\Form\\View\\Helper\\FormTextarea',
      'formtime' => 'Laminas\\Form\\View\\Helper\\FormTime',
      'form_time' => 'Laminas\\Form\\View\\Helper\\FormTime',
      'formTime' => 'Laminas\\Form\\View\\Helper\\FormTime',
      'FormTime' => 'Laminas\\Form\\View\\Helper\\FormTime',
      'formurl' => 'Laminas\\Form\\View\\Helper\\FormUrl',
      'form_url' => 'Laminas\\Form\\View\\Helper\\FormUrl',
      'formUrl' => 'Laminas\\Form\\View\\Helper\\FormUrl',
      'FormUrl' => 'Laminas\\Form\\View\\Helper\\FormUrl',
      'formweek' => 'Laminas\\Form\\View\\Helper\\FormWeek',
      'form_week' => 'Laminas\\Form\\View\\Helper\\FormWeek',
      'formWeek' => 'Laminas\\Form\\View\\Helper\\FormWeek',
      'FormWeek' => 'Laminas\\Form\\View\\Helper\\FormWeek',
      'Zend\\Form\\View\\Helper\\Form' => 'Laminas\\Form\\View\\Helper\\Form',
      'Zend\\Form\\View\\Helper\\FormButton' => 'Laminas\\Form\\View\\Helper\\FormButton',
      'Zend\\Form\\View\\Helper\\FormCaptcha' => 'Laminas\\Form\\View\\Helper\\FormCaptcha',
      'Zend\\Form\\View\\Helper\\Captcha\\Dumb' => 'Laminas\\Form\\View\\Helper\\Captcha\\Dumb',
      'Zend\\Form\\View\\Helper\\Captcha\\Figlet' => 'Laminas\\Form\\View\\Helper\\Captcha\\Figlet',
      'Zend\\Form\\View\\Helper\\Captcha\\Image' => 'Laminas\\Form\\View\\Helper\\Captcha\\Image',
      'Zend\\Form\\View\\Helper\\Captcha\\ReCaptcha' => 'Laminas\\Form\\View\\Helper\\Captcha\\ReCaptcha',
      'Zend\\Form\\View\\Helper\\FormCheckbox' => 'Laminas\\Form\\View\\Helper\\FormCheckbox',
      'Zend\\Form\\View\\Helper\\FormCollection' => 'Laminas\\Form\\View\\Helper\\FormCollection',
      'Zend\\Form\\View\\Helper\\FormColor' => 'Laminas\\Form\\View\\Helper\\FormColor',
      'Zend\\Form\\View\\Helper\\FormDate' => 'Laminas\\Form\\View\\Helper\\FormDate',
      'Zend\\Form\\View\\Helper\\FormDateTime' => 'Laminas\\Form\\View\\Helper\\FormDateTime',
      'Zend\\Form\\View\\Helper\\FormDateTimeLocal' => 'Laminas\\Form\\View\\Helper\\FormDateTimeLocal',
      'Zend\\Form\\View\\Helper\\FormDateTimeSelect' => 'Laminas\\Form\\View\\Helper\\FormDateTimeSelect',
      'Zend\\Form\\View\\Helper\\FormDateSelect' => 'Laminas\\Form\\View\\Helper\\FormDateSelect',
      'Zend\\Form\\View\\Helper\\FormElement' => 'Laminas\\Form\\View\\Helper\\FormElement',
      'Zend\\Form\\View\\Helper\\FormElementErrors' => 'Laminas\\Form\\View\\Helper\\FormElementErrors',
      'Zend\\Form\\View\\Helper\\FormEmail' => 'Laminas\\Form\\View\\Helper\\FormEmail',
      'Zend\\Form\\View\\Helper\\FormFile' => 'Laminas\\Form\\View\\Helper\\FormFile',
      'Zend\\Form\\View\\Helper\\File\\FormFileApcProgress' => 'Laminas\\Form\\View\\Helper\\File\\FormFileApcProgress',
      'Zend\\Form\\View\\Helper\\File\\FormFileSessionProgress' => 'Laminas\\Form\\View\\Helper\\File\\FormFileSessionProgress',
      'Zend\\Form\\View\\Helper\\File\\FormFileUploadProgress' => 'Laminas\\Form\\View\\Helper\\File\\FormFileUploadProgress',
      'Zend\\Form\\View\\Helper\\FormHidden' => 'Laminas\\Form\\View\\Helper\\FormHidden',
      'Zend\\Form\\View\\Helper\\FormImage' => 'Laminas\\Form\\View\\Helper\\FormImage',
      'Zend\\Form\\View\\Helper\\FormInput' => 'Laminas\\Form\\View\\Helper\\FormInput',
      'Zend\\Form\\View\\Helper\\FormLabel' => 'Laminas\\Form\\View\\Helper\\FormLabel',
      'Zend\\Form\\View\\Helper\\FormMonth' => 'Laminas\\Form\\View\\Helper\\FormMonth',
      'Zend\\Form\\View\\Helper\\FormMonthSelect' => 'Laminas\\Form\\View\\Helper\\FormMonthSelect',
      'Zend\\Form\\View\\Helper\\FormMultiCheckbox' => 'Laminas\\Form\\View\\Helper\\FormMultiCheckbox',
      'Zend\\Form\\View\\Helper\\FormNumber' => 'Laminas\\Form\\View\\Helper\\FormNumber',
      'Zend\\Form\\View\\Helper\\FormPassword' => 'Laminas\\Form\\View\\Helper\\FormPassword',
      'Zend\\Form\\View\\Helper\\FormRadio' => 'Laminas\\Form\\View\\Helper\\FormRadio',
      'Zend\\Form\\View\\Helper\\FormRange' => 'Laminas\\Form\\View\\Helper\\FormRange',
      'Zend\\Form\\View\\Helper\\FormReset' => 'Laminas\\Form\\View\\Helper\\FormReset',
      'Zend\\Form\\View\\Helper\\FormRow' => 'Laminas\\Form\\View\\Helper\\FormRow',
      'Zend\\Form\\View\\Helper\\FormSearch' => 'Laminas\\Form\\View\\Helper\\FormSearch',
      'Zend\\Form\\View\\Helper\\FormSelect' => 'Laminas\\Form\\View\\Helper\\FormSelect',
      'Zend\\Form\\View\\Helper\\FormSubmit' => 'Laminas\\Form\\View\\Helper\\FormSubmit',
      'Zend\\Form\\View\\Helper\\FormTel' => 'Laminas\\Form\\View\\Helper\\FormTel',
      'Zend\\Form\\View\\Helper\\FormText' => 'Laminas\\Form\\View\\Helper\\FormText',
      'Zend\\Form\\View\\Helper\\FormTextarea' => 'Laminas\\Form\\View\\Helper\\FormTextarea',
      'Zend\\Form\\View\\Helper\\FormTime' => 'Laminas\\Form\\View\\Helper\\FormTime',
      'Zend\\Form\\View\\Helper\\FormUrl' => 'Laminas\\Form\\View\\Helper\\FormUrl',
      'Zend\\Form\\View\\Helper\\FormWeek' => 'Laminas\\Form\\View\\Helper\\FormWeek',
      'currencyformat' => 'Laminas\\I18n\\View\\Helper\\CurrencyFormat',
      'currencyFormat' => 'Laminas\\I18n\\View\\Helper\\CurrencyFormat',
      'CurrencyFormat' => 'Laminas\\I18n\\View\\Helper\\CurrencyFormat',
      'dateformat' => 'Laminas\\I18n\\View\\Helper\\DateFormat',
      'dateFormat' => 'Laminas\\I18n\\View\\Helper\\DateFormat',
      'DateFormat' => 'Laminas\\I18n\\View\\Helper\\DateFormat',
      'numberformat' => 'Laminas\\I18n\\View\\Helper\\NumberFormat',
      'numberFormat' => 'Laminas\\I18n\\View\\Helper\\NumberFormat',
      'NumberFormat' => 'Laminas\\I18n\\View\\Helper\\NumberFormat',
      'plural' => 'Laminas\\I18n\\View\\Helper\\Plural',
      'Plural' => 'Laminas\\I18n\\View\\Helper\\Plural',
      'translate' => 'Laminas\\I18n\\View\\Helper\\Translate',
      'Translate' => 'Laminas\\I18n\\View\\Helper\\Translate',
      'translateplural' => 'Laminas\\I18n\\View\\Helper\\TranslatePlural',
      'translatePlural' => 'Laminas\\I18n\\View\\Helper\\TranslatePlural',
      'TranslatePlural' => 'Laminas\\I18n\\View\\Helper\\TranslatePlural',
      'Zend\\I18n\\View\\Helper\\CurrencyFormat' => 'Laminas\\I18n\\View\\Helper\\CurrencyFormat',
      'Zend\\I18n\\View\\Helper\\DateFormat' => 'Laminas\\I18n\\View\\Helper\\DateFormat',
      'Zend\\I18n\\View\\Helper\\NumberFormat' => 'Laminas\\I18n\\View\\Helper\\NumberFormat',
      'Zend\\I18n\\View\\Helper\\Plural' => 'Laminas\\I18n\\View\\Helper\\Plural',
      'Zend\\I18n\\View\\Helper\\Translate' => 'Laminas\\I18n\\View\\Helper\\Translate',
      'Zend\\I18n\\View\\Helper\\TranslatePlural' => 'Laminas\\I18n\\View\\Helper\\TranslatePlural',
    ),
    'factories' => 
    array (
      'Laminas\\Mvc\\Plugin\\FlashMessenger\\View\\Helper\\FlashMessenger' => 'Laminas\\Mvc\\Plugin\\FlashMessenger\\View\\Helper\\FlashMessengerFactory',
      'laminasviewhelperflashmessenger' => 'Laminas\\Mvc\\Plugin\\FlashMessenger\\View\\Helper\\FlashMessengerFactory',
      'Laminas\\Form\\View\\Helper\\Form' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\FormButton' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\FormCaptcha' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\Captcha\\Dumb' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\Captcha\\Figlet' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\Captcha\\Image' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\Captcha\\ReCaptcha' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\FormCheckbox' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\FormCollection' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\FormColor' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\FormDate' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\FormDateTime' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\FormDateTimeLocal' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\FormDateTimeSelect' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\FormDateSelect' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\FormElement' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\FormElementErrors' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\FormEmail' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\FormFile' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\File\\FormFileApcProgress' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\File\\FormFileSessionProgress' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\File\\FormFileUploadProgress' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\FormHidden' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\FormImage' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\FormInput' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\FormLabel' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\FormMonth' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\FormMonthSelect' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\FormMultiCheckbox' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\FormNumber' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\FormPassword' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\FormRadio' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\FormRange' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\FormReset' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\FormRow' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\FormSearch' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\FormSelect' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\FormSubmit' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\FormTel' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\FormText' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\FormTextarea' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\FormTime' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\FormUrl' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\Form\\View\\Helper\\FormWeek' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\I18n\\View\\Helper\\CurrencyFormat' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\I18n\\View\\Helper\\DateFormat' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\I18n\\View\\Helper\\NumberFormat' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\I18n\\View\\Helper\\Plural' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\I18n\\View\\Helper\\Translate' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\I18n\\View\\Helper\\TranslatePlural' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
    ),
  ),
  'service_manager' => 
  array (
    'abstract_factories' => 
    array (
      0 => 'Laminas\\Db\\Adapter\\AdapterAbstractServiceFactory',
      1 => 'Laminas\\Session\\Service\\ContainerAbstractServiceFactory',
      2 => 'Laminas\\Form\\FormAbstractServiceFactory',
    ),
    'factories' => 
    array (
      'Laminas\\Db\\Adapter\\AdapterInterface' => 'Laminas\\Db\\Adapter\\AdapterServiceFactory',
      'Laminas\\Session\\Config\\ConfigInterface' => 'Laminas\\Session\\Service\\SessionConfigFactory',
      'Laminas\\Session\\ManagerInterface' => 'Laminas\\Session\\Service\\SessionManagerFactory',
      'Laminas\\Session\\Storage\\StorageInterface' => 'Laminas\\Session\\Service\\StorageFactory',
      'FormAnnotationBuilder' => 'Laminas\\Form\\Annotation\\AnnotationBuilderFactory',
      'FormElementManager' => 'Laminas\\Form\\FormElementManagerFactory',
      'Laminas\\Hydrator\\HydratorPluginManager' => 'Laminas\\Hydrator\\HydratorPluginManagerFactory',
      'Laminas\\Hydrator\\StandaloneHydratorPluginManager' => 'Laminas\\Hydrator\\StandaloneHydratorPluginManagerFactory',
      'Laminas\\InputFilter\\InputFilterPluginManager' => 'Laminas\\InputFilter\\InputFilterPluginManagerFactory',
      'Laminas\\Filter\\FilterPluginManager' => 'Laminas\\Filter\\FilterPluginManagerFactory',
      'Laminas\\I18n\\Translator\\TranslatorInterface' => 'Laminas\\I18n\\Translator\\TranslatorServiceFactory',
      'Laminas\\I18n\\Translator\\LoaderPluginManager' => 'Laminas\\I18n\\Translator\\LoaderPluginManagerFactory',
      'Laminas\\Router\\Http\\TreeRouteStack' => 'Laminas\\Router\\Http\\HttpRouterFactory',
      'Laminas\\Router\\RoutePluginManager' => 'Laminas\\Router\\RoutePluginManagerFactory',
      'Laminas\\Router\\RouteStackInterface' => 'Laminas\\Router\\RouterFactory',
      'Laminas\\Validator\\ValidatorPluginManager' => 'Laminas\\Validator\\ValidatorPluginManagerFactory',
    ),
    'aliases' => 
    array (
      'Laminas\\Db\\Adapter\\Adapter' => 'Laminas\\Db\\Adapter\\AdapterInterface',
      'Zend\\Db\\Adapter\\AdapterInterface' => 'Laminas\\Db\\Adapter\\AdapterInterface',
      'Zend\\Db\\Adapter\\Adapter' => 'Laminas\\Db\\Adapter\\Adapter',
      'Laminas\\Session\\SessionManager' => 'Laminas\\Session\\ManagerInterface',
      'Zend\\Session\\SessionManager' => 'Laminas\\Session\\SessionManager',
      'Zend\\Session\\Config\\ConfigInterface' => 'Laminas\\Session\\Config\\ConfigInterface',
      'Zend\\Session\\ManagerInterface' => 'Laminas\\Session\\ManagerInterface',
      'Zend\\Session\\Storage\\StorageInterface' => 'Laminas\\Session\\Storage\\StorageInterface',
      'Laminas\\Form\\Annotation\\FormAnnotationBuilder' => 'FormAnnotationBuilder',
      'Laminas\\Form\\Annotation\\AnnotationBuilder' => 'FormAnnotationBuilder',
      'Laminas\\Form\\FormElementManager' => 'FormElementManager',
      'Zend\\Form\\Annotation\\FormAnnotationBuilder' => 'Laminas\\Form\\Annotation\\FormAnnotationBuilder',
      'Zend\\Form\\Annotation\\AnnotationBuilder' => 'Laminas\\Form\\Annotation\\AnnotationBuilder',
      'Zend\\Form\\FormElementManager' => 'Laminas\\Form\\FormElementManager',
      'HydratorManager' => 'Laminas\\Hydrator\\HydratorPluginManager',
      'Zend\\Hydrator\\HydratorPluginManager' => 'Laminas\\Hydrator\\HydratorPluginManager',
      'Zend\\Hydrator\\StandaloneHydratorPluginManager' => 'Laminas\\Hydrator\\StandaloneHydratorPluginManager',
      'InputFilterManager' => 'Laminas\\InputFilter\\InputFilterPluginManager',
      'Zend\\InputFilter\\InputFilterPluginManager' => 'Laminas\\InputFilter\\InputFilterPluginManager',
      'FilterManager' => 'Laminas\\Filter\\FilterPluginManager',
      'Zend\\Filter\\FilterPluginManager' => 'Laminas\\Filter\\FilterPluginManager',
      'TranslatorPluginManager' => 'Laminas\\I18n\\Translator\\LoaderPluginManager',
      'Zend\\I18n\\Translator\\TranslatorInterface' => 'Laminas\\I18n\\Translator\\TranslatorInterface',
      'Zend\\I18n\\Translator\\LoaderPluginManager' => 'Laminas\\I18n\\Translator\\LoaderPluginManager',
      'HttpRouter' => 'Laminas\\Router\\Http\\TreeRouteStack',
      'router' => 'Laminas\\Router\\RouteStackInterface',
      'Router' => 'Laminas\\Router\\RouteStackInterface',
      'RoutePluginManager' => 'Laminas\\Router\\RoutePluginManager',
      'Zend\\Router\\Http\\TreeRouteStack' => 'Laminas\\Router\\Http\\TreeRouteStack',
      'Zend\\Router\\RoutePluginManager' => 'Laminas\\Router\\RoutePluginManager',
      'Zend\\Router\\RouteStackInterface' => 'Laminas\\Router\\RouteStackInterface',
      'ValidatorManager' => 'Laminas\\Validator\\ValidatorPluginManager',
      'Zend\\Validator\\ValidatorPluginManager' => 'Laminas\\Validator\\ValidatorPluginManager',
    ),
  ),
  'input_filters' => 
  array (
    'abstract_factories' => 
    array (
      0 => 'Laminas\\InputFilter\\InputFilterAbstractServiceFactory',
    ),
  ),
  'filters' => 
  array (
    'aliases' => 
    array (
      'alnum' => 'Laminas\\I18n\\Filter\\Alnum',
      'Alnum' => 'Laminas\\I18n\\Filter\\Alnum',
      'alpha' => 'Laminas\\I18n\\Filter\\Alpha',
      'Alpha' => 'Laminas\\I18n\\Filter\\Alpha',
      'numberformat' => 'Laminas\\I18n\\Filter\\NumberFormat',
      'numberFormat' => 'Laminas\\I18n\\Filter\\NumberFormat',
      'NumberFormat' => 'Laminas\\I18n\\Filter\\NumberFormat',
      'numberparse' => 'Laminas\\I18n\\Filter\\NumberParse',
      'numberParse' => 'Laminas\\I18n\\Filter\\NumberParse',
      'NumberParse' => 'Laminas\\I18n\\Filter\\NumberParse',
      'Zend\\I18n\\Filter\\Alnum' => 'Laminas\\I18n\\Filter\\Alnum',
      'Zend\\I18n\\Filter\\Alpha' => 'Laminas\\I18n\\Filter\\Alpha',
      'Zend\\I18n\\Filter\\NumberFormat' => 'Laminas\\I18n\\Filter\\NumberFormat',
      'Zend\\I18n\\Filter\\NumberParse' => 'Laminas\\I18n\\Filter\\NumberParse',
    ),
    'factories' => 
    array (
      'Laminas\\I18n\\Filter\\Alnum' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\I18n\\Filter\\Alpha' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\I18n\\Filter\\NumberFormat' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\I18n\\Filter\\NumberParse' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
    ),
  ),
  'validators' => 
  array (
    'aliases' => 
    array (
      'alnum' => 'Laminas\\I18n\\Validator\\Alnum',
      'Alnum' => 'Laminas\\I18n\\Validator\\Alnum',
      'alpha' => 'Laminas\\I18n\\Validator\\Alpha',
      'Alpha' => 'Laminas\\I18n\\Validator\\Alpha',
      'datetime' => 'Laminas\\I18n\\Validator\\DateTime',
      'dateTime' => 'Laminas\\I18n\\Validator\\DateTime',
      'DateTime' => 'Laminas\\I18n\\Validator\\DateTime',
      'float' => 'Laminas\\I18n\\Validator\\IsFloat',
      'Float' => 'Laminas\\I18n\\Validator\\IsFloat',
      'int' => 'Laminas\\I18n\\Validator\\IsInt',
      'Int' => 'Laminas\\I18n\\Validator\\IsInt',
      'isfloat' => 'Laminas\\I18n\\Validator\\IsFloat',
      'isFloat' => 'Laminas\\I18n\\Validator\\IsFloat',
      'IsFloat' => 'Laminas\\I18n\\Validator\\IsFloat',
      'isint' => 'Laminas\\I18n\\Validator\\IsInt',
      'isInt' => 'Laminas\\I18n\\Validator\\IsInt',
      'IsInt' => 'Laminas\\I18n\\Validator\\IsInt',
      'phonenumber' => 'Laminas\\I18n\\Validator\\PhoneNumber',
      'phoneNumber' => 'Laminas\\I18n\\Validator\\PhoneNumber',
      'PhoneNumber' => 'Laminas\\I18n\\Validator\\PhoneNumber',
      'postcode' => 'Laminas\\I18n\\Validator\\PostCode',
      'postCode' => 'Laminas\\I18n\\Validator\\PostCode',
      'PostCode' => 'Laminas\\I18n\\Validator\\PostCode',
      'Zend\\I18n\\Validator\\Alnum' => 'Laminas\\I18n\\Validator\\Alnum',
      'Zend\\I18n\\Validator\\Alpha' => 'Laminas\\I18n\\Validator\\Alpha',
      'Zend\\I18n\\Validator\\DateTime' => 'Laminas\\I18n\\Validator\\DateTime',
      'Zend\\I18n\\Validator\\IsFloat' => 'Laminas\\I18n\\Validator\\IsFloat',
      'Zend\\I18n\\Validator\\IsInt' => 'Laminas\\I18n\\Validator\\IsInt',
      'Zend\\I18n\\Validator\\PhoneNumber' => 'Laminas\\I18n\\Validator\\PhoneNumber',
      'Zend\\I18n\\Validator\\PostCode' => 'Laminas\\I18n\\Validator\\PostCode',
    ),
    'factories' => 
    array (
      'Laminas\\I18n\\Validator\\Alnum' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\I18n\\Validator\\Alpha' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\I18n\\Validator\\DateTime' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\I18n\\Validator\\IsFloat' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\I18n\\Validator\\IsInt' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\I18n\\Validator\\PhoneNumber' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Laminas\\I18n\\Validator\\PostCode' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
    ),
  ),
  'route_manager' => 
  array (
  ),
  'router' => 
  array (
    'routes' => 
    array (
      'home' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/',
          'defaults' => 
          array (
            'controller' => 'Application\\Controller\\IndexController',
            'action' => 'index',
          ),
        ),
      ),
      'application' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/application[/:action]',
          'defaults' => 
          array (
            'controller' => 'Application\\Controller\\IndexController',
            'action' => 'index',
          ),
        ),
      ),
      'python' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/python[/:action]',
          'constraints' => 
          array (
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Python\\Controller\\PythonController',
            'action' => 'index',
          ),
        ),
      ),
      'course' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/course',
          'defaults' => 
          array (
            'controller' => 'Course\\Controller\\CourseController',
            'action' => 'index',
          ),
        ),
      ),
      'fetchdata' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/fetchdata',
          'defaults' => 
          array (
            'controller' => 'Course\\Controller\\CourseController',
            'action' => 'fetchdata',
          ),
        ),
      ),
      'algorithms' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/algorithms',
          'defaults' => 
          array (
            'controller' => 'Course\\Controller\\CourseController',
            'action' => 'algorithms',
          ),
        ),
      ),
      'c' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/c',
          'defaults' => 
          array (
            'controller' => 'Course\\Controller\\CourseController',
            'action' => 'c',
          ),
        ),
      ),
      'java' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/java',
          'defaults' => 
          array (
            'controller' => 'Course\\Controller\\CourseController',
            'action' => 'java',
          ),
        ),
      ),
      'html' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/html',
          'defaults' => 
          array (
            'controller' => 'Course\\Controller\\CourseController',
            'action' => 'html',
          ),
        ),
      ),
      'cascade' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/cascade',
          'defaults' => 
          array (
            'controller' => 'Course\\Controller\\CourseController',
            'action' => 'cascade',
          ),
        ),
      ),
      'javascript' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/javascript',
          'defaults' => 
          array (
            'controller' => 'Course\\Controller\\CourseController',
            'action' => 'javascript',
          ),
        ),
      ),
      'android' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/android',
          'defaults' => 
          array (
            'controller' => 'Course\\Controller\\CourseController',
            'action' => 'android',
          ),
        ),
      ),
      'reactnative' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/reactnative',
          'defaults' => 
          array (
            'controller' => 'Course\\Controller\\CourseController',
            'action' => 'reactnative',
          ),
        ),
      ),
      'english' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/english',
          'defaults' => 
          array (
            'controller' => 'Course\\Controller\\CourseController',
            'action' => 'english',
          ),
        ),
      ),
      'networking' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/networking',
          'defaults' => 
          array (
            'controller' => 'Course\\Controller\\CourseController',
            'action' => 'networking',
          ),
        ),
      ),
      'cloud' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/cloud',
          'defaults' => 
          array (
            'controller' => 'Course\\Controller\\CourseController',
            'action' => 'cloud',
          ),
        ),
      ),
      'datascience' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/datascience[/:action]',
          'constraints' => 
          array (
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Datascience\\Controller\\DatascienceController',
            'action' => 'index',
          ),
        ),
      ),
      'machinelearning' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/machinelearning[/:action]',
          'constraints' => 
          array (
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Machinelearning\\Controller\\MachinelearningController',
            'action' => 'index',
          ),
        ),
      ),
      'deeplearning' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/deeplearning[/:action]',
          'constraints' => 
          array (
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Deeplearning\\Controller\\DeeplearningController',
            'action' => 'index',
          ),
        ),
      ),
      'bigdata' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/bigdata[/:action]',
          'constraints' => 
          array (
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Bigdata\\Controller\\BigdataController',
            'action' => 'index',
          ),
        ),
      ),
      'datastructures' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/datastructures[/:action]',
          'constraints' => 
          array (
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Datastructures\\Controller\\DatastructuresController',
            'action' => 'index',
          ),
        ),
      ),
      'user' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/user[/:action]',
          'constraints' => 
          array (
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'User\\Controller\\UserController',
            'action' => 'index',
          ),
        ),
      ),
      'review' => 
      array (
        'type' => 'Laminas\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/review[/:action[/:id]]',
          'constraints' => 
          array (
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'id' => '[0-9]+',
          ),
          'defaults' => 
          array (
            'controller' => 'Review\\Controller\\ReviewController',
            'action' => 'index',
          ),
        ),
      ),
    ),
  ),
  'controllers' => 
  array (
    'factories' => 
    array (
      'Application\\Controller\\IndexController' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Python\\Controller\\PythonController' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Course\\Controller\\CourseController' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Datascience\\Controller\\DatascienceController' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Machinelearning\\Controller\\MachinelearningController' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Deeplearning\\Controller\\DeeplearningController' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Bigdata\\Controller\\BigdataController' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'Datastructures\\Controller\\DatastructuresController' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
      'User\\Controller\\UserController' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
    ),
  ),
  'view_manager' => 
  array (
    'display_not_found_reason' => true,
    'display_exceptions' => true,
    'doctype' => 'HTML5',
    'not_found_template' => 'error/404',
    'exception_template' => 'error/index',
    'template_map' => 
    array (
      'layout/layout' => '/var/www/html/riktam/assignment5/laminus/R-Tutor/module/Application/config/../view/layout/layout.phtml',
      'application/index/index' => '/var/www/html/riktam/assignment5/laminus/R-Tutor/module/Application/config/../view/application/index/index.phtml',
      'error/404' => '/var/www/html/riktam/assignment5/laminus/R-Tutor/module/Application/config/../view/error/404.phtml',
      'error/index' => '/var/www/html/riktam/assignment5/laminus/R-Tutor/module/Application/config/../view/error/index.phtml',
    ),
    'template_path_stack' => 
    array (
      0 => '/var/www/html/riktam/assignment5/laminus/R-Tutor/module/Application/config/../view',
      1 => '/var/www/html/riktam/assignment5/laminus/R-Tutor/module/Python/config/../view',
      2 => '/var/www/html/riktam/assignment5/laminus/R-Tutor/module/Course/config/../view',
      3 => '/var/www/html/riktam/assignment5/laminus/R-Tutor/module/Datascience/config/../view',
      4 => '/var/www/html/riktam/assignment5/laminus/R-Tutor/module/Machinelearning/config/../view',
      5 => '/var/www/html/riktam/assignment5/laminus/R-Tutor/module/Deeplearning/config/../view',
      6 => '/var/www/html/riktam/assignment5/laminus/R-Tutor/module/Bigdata/config/../view',
      7 => '/var/www/html/riktam/assignment5/laminus/R-Tutor/module/Datastructures/config/../view',
      8 => '/var/www/html/riktam/assignment5/laminus/R-Tutor/module/User/config/../view',
      'album' => '/var/www/html/riktam/assignment5/laminus/R-Tutor/module/Review/config/../view',
    ),
  ),
  'db' => 
  array (
    'driver' => 'Pdo',
    'dsn' => 'sqlite:/var/www/html/riktam/assignment5/laminus/R-Tutor/data/rtutordb',
  ),
);