<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('ru', array (
  'validators' => 
  array (
    'This value should be false.' => 'Значение должно быть ложным.',
    'This value should be true.' => 'Значение должно быть истинным.',
    'This value should be of type {{ type }}.' => 'Тип значения должен быть {{ type }}.',
    'This value should be blank.' => 'Значение должно быть пустым.',
    'The value you selected is not a valid choice.' => 'Выбранное Вами значение недопустимо.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Вы должны выбрать хотя бы {{ limit }} вариант.|Вы должны выбрать хотя бы {{ limit }} варианта.|Вы должны выбрать хотя бы {{ limit }} вариантов.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Вы должны выбрать не более чем {{ limit }} вариант.|Вы должны выбрать не более чем {{ limit }} варианта.|Вы должны выбрать не более чем {{ limit }} вариантов.',
    'One or more of the given values is invalid.' => 'Одно или несколько заданных значений недопустимо.',
    'This field was not expected.' => 'Это поле не ожидалось.',
    'This field is missing.' => 'Это поле отсутствует.',
    'This value is not a valid date.' => 'Значение не является правильной датой.',
    'This value is not a valid datetime.' => 'Значение даты и времени недопустимо.',
    'This value is not a valid email address.' => 'Значение адреса электронной почты недопустимо.',
    'The file could not be found.' => 'Файл не может быть найден.',
    'The file is not readable.' => 'Файл не может быть прочитан.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Файл слишком большой ({{ size }} {{ suffix }}). Максимально допустимый размер {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'MIME-тип файла недопустим ({{ type }}). Допустимы MIME-типы файлов {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Значение должно быть {{ limit }} или меньше.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Значение слишком длинное. Должно быть равно {{ limit }} символу или меньше.|Значение слишком длинное. Должно быть равно {{ limit }} символам или меньше.|Значение слишком длинное. Должно быть равно {{ limit }} символам или меньше.',
    'This value should be {{ limit }} or more.' => 'Значение должно быть {{ limit }} или больше.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Значение слишком короткое. Должно быть равно {{ limit }} символу или больше.|Значение слишком короткое. Должно быть равно {{ limit }} символам или больше.|Значение слишком короткое. Должно быть равно {{ limit }} символам или больше.',
    'This value should not be blank.' => 'Значение не должно быть пустым.',
    'This value should not be null.' => 'Значение не должно быть null.',
    'This value should be null.' => 'Значение должно быть null.',
    'This value is not valid.' => 'Значение недопустимо.',
    'This value is not a valid time.' => 'Значение времени недопустимо.',
    'This value is not a valid URL.' => 'Значение не является допустимым URL.',
    'The two values should be equal.' => 'Оба значения должны быть одинаковыми.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Файл слишком большой. Максимально допустимый размер {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Файл слишком большой.',
    'The file could not be uploaded.' => 'Файл не может быть загружен.',
    'This value should be a valid number.' => 'Значение должно быть числом.',
    'This value is not a valid country.' => 'Значение не является допустимой страной.',
    'This file is not a valid image.' => 'Файл не является допустимым форматом изображения.',
    'This is not a valid IP address.' => 'Значение не является допустимым IP адресом.',
    'This value is not a valid language.' => 'Значение не является допустимым языком.',
    'This value is not a valid locale.' => 'Значение не является допустимой локалью.',
    'This value is already used.' => 'Это значение уже используется.',
    'The size of the image could not be detected.' => 'Не удалось определить размер изображения.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Ширина изображения слишком велика ({{ width }}px). Максимально допустимая ширина {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Ширина изображения слишком мала ({{ width }}px). Минимально допустимая ширина {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Высота изображения слишком велика ({{ height }}px). Максимально допустимая высота {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Высота изображения слишком мала ({{ height }}px). Минимально допустимая высота {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Значение должно быть текущим паролем пользователя.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Значение должно быть равно {{ limit }} символу.|Значение должно быть равно {{ limit }} символам.|Значение должно быть равно {{ limit }} символам.',
    'The file was only partially uploaded.' => 'Файл был загружен только частично.',
    'No file was uploaded.' => 'Файл не был загружен.',
    'No temporary folder was configured in php.ini.' => 'Не настроена временная директория в php.ini.',
    'Cannot write temporary file to disk.' => 'Невозможно записать временный файл на диск.',
    'A PHP extension caused the upload to fail.' => 'Расширение PHP вызвало ошибку при загрузке.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Эта коллекция должна содержать {{ limit }} элемент или больше.|Эта коллекция должна содержать {{ limit }} элемента или больше.|Эта коллекция должна содержать {{ limit }} элементов или больше.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Эта коллекция должна содержать {{ limit }} элемент или меньше.|Эта коллекция должна содержать {{ limit }} элемента или меньше.|Эта коллекция должна содержать {{ limit }} элементов или меньше.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Эта коллекция должна содержать ровно {{ limit }} элемент.|Эта коллекция должна содержать ровно {{ limit }} элемента.|Эта коллекция должна содержать ровно {{ limit }} элементов.',
    'Invalid card number.' => 'Неверный номер карты.',
    'Unsupported card type or invalid card number.' => 'Неподдерживаемый тип или неверный номер карты.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Значение не является допустимым международным номером банковского счета (IBAN).',
    'This value is not a valid ISBN-10.' => 'Значение имеет неверный формат ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Значение имеет неверный формат ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Значение не соответствует форматам ISBN-10 и ISBN-13.',
    'This value is not a valid ISSN.' => 'Значение не соответствует формату ISSN.',
    'This value is not a valid currency.' => 'Некорректный формат валюты.',
    'This value should be equal to {{ compared_value }}.' => 'Значение должно быть равно {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Значение должно быть больше чем {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Значение должно быть больше или равно {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Значение должно быть идентичным {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Значение должно быть меньше чем {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Значение должно быть меньше или равно {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Значение не должно быть равно {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Значение не должно быть идентичным {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Соотношение сторон изображения слишком велико ({{ ratio }}). Максимальное соотношение сторон {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Соотношение сторон изображения слишком мало ({{ ratio }}). Минимальное соотношение сторон {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Изображение квадратное ({{ width }}x{{ height }}px). Квадратные изображения не разрешены.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Изображение в альбомной ориентации ({{ width }}x{{ height }}px). Изображения в альбомной ориентации не разрешены.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Изображение в портретной ориентации ({{ width }}x{{ height }}px). Изображения в портретной ориентации не разрешены.',
    'An empty file is not allowed.' => 'Пустые файлы не разрешены.',
    'The host could not be resolved.' => 'Имя хоста не может быть разрешено.',
    'This value does not match the expected {{ charset }} charset.' => 'Значение не совпадает с ожидаемой {{ charset }} кодировкой.',
    'This form should not contain extra fields.' => 'Эта форма не должна содержать дополнительных полей.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Загруженный файл слишком большой. Пожалуйста, попробуйте загрузить файл меньшего размера.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF значение недопустимо. Пожалуйста, попробуйте повторить отправку формы.',
    'fos_user.username.already_used' => 'Логин уже используется',
    'fos_user.username.blank' => 'Пожалуйста, укажите логин',
    'fos_user.username.short' => '[-Inf,Inf]Логин слишком короткий',
    'fos_user.username.long' => '[-Inf,Inf]Логин слишком длинный',
    'fos_user.email.already_used' => 'Email уже используется',
    'fos_user.email.blank' => 'Пожалуйста, укажите Ваш email',
    'fos_user.email.short' => '[-Inf,Inf]Email слишком короткий',
    'fos_user.email.long' => '[-Inf,Inf]Email слишком длинный',
    'fos_user.email.invalid' => 'Email в неправильном формате',
    'fos_user.password.blank' => 'Пожалуйста, укажите пароль',
    'fos_user.password.short' => '[-Inf,Inf]Пароль слишком короткий',
    'fos_user.password.mismatch' => 'Введенные пароли не совпадают',
    'fos_user.new_password.blank' => 'Пожалуйста, укажите новый пароль',
    'fos_user.new_password.short' => '[-Inf,Inf]Новый пароль слишком короткий',
    'fos_user.current_password.invalid' => 'Вы неправильно ввели Ваш текущий пароль',
    'fos_user.group.blank' => 'Пожалуйста, укажите название группы',
    'fos_user.group.short' => '[-Inf,Inf]Название группы слишком короткое',
    'fos_user.group.long' => '[-Inf,Inf]Название группы слишком длинное',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Ошибка аутентификации.',
    'Authentication credentials could not be found.' => 'Аутентификационные данные не найдены.',
    'Authentication request could not be processed due to a system problem.' => 'Запрос аутентификации не может быть обработан в связи с проблемой в системе.',
    'Invalid credentials.' => 'Недействительные аутентификационные данные.',
    'Cookie has already been used by someone else.' => 'Cookie уже был использован кем-то другим.',
    'Not privileged to request the resource.' => 'Отсутствуют права на запрос этого ресурса.',
    'Invalid CSRF token.' => 'Недействительный токен CSRF.',
    'Digest nonce has expired.' => 'Время действия одноразового ключа дайджеста истекло.',
    'No authentication provider found to support the authentication token.' => 'Не найден провайдер аутентификации, поддерживающий токен аутентификации.',
    'No session available, it either timed out or cookies are not enabled.' => 'Сессия не найдена, ее время истекло, либо cookies не включены.',
    'No token could be found.' => 'Токен не найден.',
    'Username could not be found.' => 'Имя пользователя не найдено.',
    'Account has expired.' => 'Время действия учетной записи истекло.',
    'Credentials have expired.' => 'Время действия аутентификационных данных истекло.',
    'Account is disabled.' => 'Учетная запись отключена.',
    'Account is locked.' => 'Учетная запись заблокирована.',
  ),
  'SonataCoreBundle' => 
  array (
    'link_add' => 'Добавить новый',
    'label_type_yes' => 'да',
    'label_type_no' => 'нет',
    'sonata_core_template_box_file_found_in' => 'sonata_core_template_box_file_found_in',
    'label_type_equals' => 'равен',
    'label_type_not_equals' => 'не равен',
    'date_range_start' => 'date_range_start',
    'date_range_end' => 'date_range_end',
    'aliceblue' => 'aliceblue',
    'antiquewhite' => 'antiquewhite',
    'aqua' => 'aqua',
    'aquamarine' => 'aquamarine',
    'azure' => 'azure',
    'beige' => 'beige',
    'bisque' => 'bisque',
    'black' => 'black',
    'blanchedalmond' => 'blanchedalmond',
    'blue' => 'blue',
    'blueviolet' => 'blueviolet',
    'brown' => 'brown',
    'burlywood' => 'burlywood',
    'cadetblue' => 'cadetblue',
    'chartreuse' => 'chartreuse',
    'chocolate' => 'chocolate',
    'coral' => 'coral',
    'cornflowerblue' => 'cornflowerblue',
    'cornsilk' => 'cornsilk',
    'crimson' => 'crimson',
    'cyan' => 'cyan',
    'darkblue' => 'darkblue',
    'darkcyan' => 'darkcyan',
    'darkgoldenrod' => 'darkgoldenrod',
    'darkgray' => 'darkgray',
    'darkgreen' => 'darkgreen',
    'darkkhaki' => 'darkkhaki',
    'darkmagenta' => 'darkmagenta',
    'darkolivegreen' => 'darkolivegreen',
    'darkorange' => 'darkorange',
    'darkorchid' => 'darkorchid',
    'darkred' => 'darkred',
    'darksalmon' => 'darksalmon',
    'darkseagreen' => 'darkseagreen',
    'darkslateblue' => 'darkslateblue',
    'darkslategray' => 'darkslategray',
    'darkturquoise' => 'darkturquoise',
    'darkviolet' => 'darkviolet',
    'deeppink' => 'deeppink',
    'deepskyblue' => 'deepskyblue',
    'dimgray' => 'dimgray',
    'dodgerblue' => 'dodgerblue',
    'firebrick' => 'firebrick',
    'floralwhite' => 'floralwhite',
    'forestgreen' => 'forestgreen',
    'fuchsia' => 'fuchsia',
    'gainsboro' => 'gainsboro',
    'ghostwhite' => 'ghostwhite',
    'gold' => 'gold',
    'goldenrod' => 'goldenrod',
    'gray' => 'gray',
    'green' => 'green',
    'greenyellow' => 'greenyellow',
    'honeydew' => 'honeydew',
    'hotpink' => 'hotpink',
    'indianred' => 'indianred',
    'indigo' => 'indigo',
    'ivory' => 'ivory',
    'khaki' => 'khaki',
    'lavender' => 'lavender',
    'lavenderblush' => 'lavenderblush',
    'lawngreen' => 'lawngreen',
    'lemonchiffon' => 'lemonchiffon',
    'lightblue' => 'lightblue',
    'lightcoral' => 'lightcoral',
    'lightcyan' => 'lightcyan',
    'lightgoldenrodyellow' => 'lightgoldenrodyellow',
    'lightgray' => 'lightgray',
    'lightgreen' => 'lightgreen',
    'lightpink' => 'lightpink',
    'lightsalmon' => 'lightsalmon',
    'lightseagreen' => 'lightseagreen',
    'lightskyblue' => 'lightskyblue',
    'lightslategray' => 'lightslategray',
    'lightsteelblue' => 'lightsteelblue',
    'lightyellow' => 'lightyellow',
    'lime' => 'lime',
    'limegreen' => 'limegreen',
    'linen' => 'linen',
    'magenta' => 'magenta',
    'maroon' => 'maroon',
    'mediumaquamarine' => 'mediumaquamarine',
    'mediumblue' => 'mediumblue',
    'mediumorchid' => 'mediumorchid',
    'mediumpurple' => 'mediumpurple',
    'mediumseagreen' => 'mediumseagreen',
    'mediumslateblue' => 'mediumslateblue',
    'mediumspringgreen' => 'mediumspringgreen',
    'mediumturquoise' => 'mediumturquoise',
    'mediumvioletred' => 'mediumvioletred',
    'midnightblue' => 'midnightblue',
    'mintcream' => 'mintcream',
    'mistyrose' => 'mistyrose',
    'moccasin' => 'moccasin',
    'navajowhite' => 'navajowhite',
    'navy' => 'navy',
    'oldlace' => 'oldlace',
    'olive' => 'olive',
    'olivedrab' => 'olivedrab',
    'orange' => 'orange',
    'orangered' => 'orangered',
    'orchid' => 'orchid',
    'palegoldenrod' => 'palegoldenrod',
    'palegreen' => 'palegreen',
    'paleturquoise' => 'paleturquoise',
    'palevioletred' => 'palevioletred',
    'papayawhip' => 'papayawhip',
    'peachpuff' => 'peachpuff',
    'peru' => 'peru',
    'pink' => 'pink',
    'plum' => 'plum',
    'powderblue' => 'powderblue',
    'purple' => 'purple',
    'rebeccapurple' => 'rebeccapurple',
    'red' => 'red',
    'rosybrown' => 'rosybrown',
    'royalblue' => 'royalblue',
    'saddlebrown' => 'saddlebrown',
    'salmon' => 'salmon',
    'sandybrown' => 'sandybrown',
    'seagreen' => 'seagreen',
    'seashell' => 'seashell',
    'sienna' => 'sienna',
    'silver' => 'silver',
    'skyblue' => 'skyblue',
    'slateblue' => 'slateblue',
    'slategray' => 'slategray',
    'snow' => 'snow',
    'springgreen' => 'springgreen',
    'steelblue' => 'steelblue',
    'tan' => 'tan',
    'teal' => 'teal',
    'thistle' => 'thistle',
    'tomato' => 'tomato',
    'turquoise' => 'turquoise',
    'violet' => 'violet',
    'wheat' => 'wheat',
    'white' => 'white',
    'whitesmoke' => 'whitesmoke',
    'yellow' => 'yellow',
    'yellowgreen' => 'yellowgreen',
  ),
  'SonataAdminBundle' => 
  array (
    'sonata_administration' => 'Administration',
    'action_delete' => 'Удалить',
    'btn_batch' => 'OK',
    'btn_create' => 'Создать',
    'btn_create_and_edit_again' => 'Создать и редактировать',
    'btn_create_and_create_a_new_one' => 'Создать и добавить новый',
    'btn_create_and_return_to_list' => 'Создать и вернуться к списку',
    'btn_filter' => 'Фильтровать',
    'btn_update' => 'Сохранить',
    'btn_update_and_edit_again' => 'Сохранить',
    'btn_update_and_return_to_list' => 'Сохранить и вернуться к списку',
    'link_delete' => 'Удалить',
    'link_action_create' => 'Добавить новый',
    'link_action_list' => 'Вернуться к списку',
    'link_action_show' => 'Показать',
    'link_action_edit' => 'Редактировать',
    'link_add' => 'Добавить новый',
    'link_list' => 'Список',
    'link_reset_filter' => 'Сбросить',
    'title_create' => 'Создать',
    'title_dashboard' => 'Панель администрирования',
    'title_edit' => 'Редактировать "%name%"',
    'title_list' => 'Список',
    'link_next_pager' => 'Следующая',
    'link_previous_pager' => 'Предыдущая',
    'link_first_pager' => 'Первая',
    'link_last_pager' => 'Последняя',
    'Admin' => 'Администрирование',
    'link_expand' => 'развернуть/свернуть',
    'no_result' => 'Нет результатов',
    'confirm_msg' => 'Вы уверены?',
    'action_edit' => 'Редактировать',
    'action_show' => 'Показать',
    'all_elements' => 'Применить для всех',
    'flash_batch_empty' => 'Действие отменено. Нет выбранных объектов.',
    'flash_create_success' => 'Элемент создан успешно',
    'flash_create_error' => 'При создании элемента произошла ошибка.',
    'flash_edit_success' => 'Элемент успешно обновлен.',
    'flash_edit_error' => 'Во время обновления элемента произошла ошибка.',
    'flash_batch_delete_success' => 'Выбранные элементы были успешно удалены.',
    'flash_batch_delete_error' => 'Во время удаления выбранных элементов произошла ошибка.',
    'flash_delete_error' => 'Во время удаления элемента произошла ошибка.',
    'flash_delete_success' => 'Элемент успешно удален.',
    'breadcrumb.link_dashboard' => '<i class="fa fa-home"></i>',
    'title_delete' => 'Подтверждение удаления',
    'message_delete_confirmation' => 'Вы действительно хотите удалить выбранный элемент?',
    'btn_delete' => 'Да, удалить',
    'title_batch_confirmation' => 'Подтверждение пакетного действия',
    'message_batch_confirmation' => 'Вы действительно хотите произвести выбранное действие для данного элемента?|Вы действительно хотите произвести выбранное действие для данных элементов?|Вы действительно хотите произвести выбранное действие для %count% выбранных элементов?',
    'message_batch_all_confirmation' => 'Вы действительно хотите произвести выбранное действие для всех элементов?',
    'btn_execute_batch_action' => 'Да, выполнить',
    'label_type_yes' => 'да',
    'label_type_no' => 'нет',
    'label_type_contains' => 'содержит',
    'label_type_not_contains' => 'не содержит',
    'label_type_equals' => 'равен',
    'label_type_not_equals' => 'не равен',
    'label_type_equal' => '=',
    'label_type_greater_equal' => '>=',
    'label_type_greater_than' => '>',
    'label_type_less_equal' => '<=',
    'label_type_less_than' => '<',
    'label_date_type_equal' => '=',
    'label_date_type_greater_equal' => '>=',
    'label_date_type_greater_than' => '>',
    'label_date_type_less_equal' => '<=',
    'label_date_type_less_than' => '<',
    'label_date_type_null' => 'пусто',
    'label_date_type_not_null' => 'не пуст',
    'label_date_type_between' => 'между',
    'label_date_type_not_between' => 'не между',
    'label_filters' => 'Фильтры',
    'delete_or' => 'или',
    'link_action_history' => 'Изменения',
    'td_action' => 'Действие',
    'td_revision' => 'Изменения',
    'td_timestamp' => 'Дата',
    'td_username' => 'Автор',
    'label_view_revision' => 'Просмотр изменений',
    'list_results_count' => '{0} Нет данных |{1} Всего %count% запись |{2,3,4} Всего %count% записи |[5,Inf] Всего %count% записей',
    'label_export_download' => 'Экспорт',
    'loading_information' => 'Загрузка информации…',
    'btn_preview' => 'Предпросмотр',
    'btn_preview_approve' => 'Одобрить',
    'btn_preview_decline' => 'Отклонить',
    'label_per_page' => 'Записей на страницу',
    'list_select' => 'Выбрать',
    'confirm_exit' => 'У вас есть несохраненные данные',
    'link_edit_acl' => 'Редактировать ACL',
    'btn_update_acl' => 'Обновить ACL',
    'flash_acl_edit_success' => 'ACL успешно отредактирован',
    'link_action_acl' => 'ACL',
    'short_object_description_placeholder' => 'Ничего не выбрано',
    'title_search_results' => 'Результат поиска: %query%',
    'search_placeholder' => 'Поиск',
    'no_results_found' => 'Ничего не найдено',
    'add_new_entry' => 'Добавить новую запись',
    'link_actions' => 'Действия',
    'noscript_warning' => 'noscript_warning',
    'message_form_group_empty' => 'message_form_group_empty',
  ),
  'FOSUserBundle' => 
  array (
    'Bad credentials' => 'Неправильное имя пользователя или пароль',
    'group.edit.submit' => 'Обновить группу',
    'group.show.name' => 'Название группы',
    'group.new.submit' => 'Создать группу',
    'group.flash.updated' => 'Группа обновлена',
    'group.flash.created' => 'Группа создана',
    'group.flash.deleted' => 'Группа удалена',
    'security.login.username' => 'Имя пользователя:',
    'security.login.password' => 'Пароль:',
    'security.login.remember_me' => 'Запомнить меня',
    'security.login.submit' => 'Войти',
    'profile.show.username' => 'Имя пользователя',
    'profile.show.email' => 'Электронная почта',
    'profile.edit.submit' => 'Обновить',
    'profile.flash.updated' => 'Профиль пользователя обновлен',
    'change_password.submit' => 'Изменить пароль',
    'change_password.flash.success' => 'Пароль изменен',
    'registration.check_email' => 'Письмо отправлено на адрес %email%. В нём содержится ссылка, по которой вы можете подтвердить свою регистрацию.',
    'registration.confirmed' => 'Поздравляем %username%, ваш аккаунт подтвержден.',
    'registration.back' => 'Вернуться на предыдущую страницу.',
    'registration.submit' => 'Регистрация',
    'registration.flash.user_created' => 'Пользователь успешно создан',
    'registration.email.subject' => 'Добро пожаловать, %username%!',
    'registration.email.message' => 'Приветствуем, %username%!

Для подтверждения вашей регистрации, пройдите по ссылке %confirmationUrl%

С наилучшими пожеланиями,
команда сайта.
',
    'resetting.password_already_requested' => 'Пароль для данного пользователя уже запрашивался за последние 24 часа.',
    'resetting.check_email' => 'Письмо на адрес %email% уже отправлено. Оно содержит ссылку, при переходе по которой ваш пароль будет сброшен.',
    'resetting.request.invalid_username' => 'Пользователь "%username%" не существует.',
    'resetting.request.username' => 'Имя пользователя:',
    'resetting.request.submit' => 'Сбросить пароль',
    'resetting.reset.submit' => 'Изменить пароль',
    'resetting.flash.success' => 'Пароль успешно сброшен',
    'resetting.email.subject' => 'Сброс пароля',
    'resetting.email.message' => 'Приветствуем, %username%!

Для сброса пароля, пожалуйста, пройдите по ссылке %confirmationUrl%

С наилучшими пожеланиями,
команда сайта.
',
    'layout.logout' => 'Выход',
    'layout.login' => 'Вход',
    'layout.register' => 'Регистрация',
    'layout.logged_in_as' => 'Вы вошли как %username%',
    'form.group_name' => 'Название группы:',
    'form.username' => 'Имя пользователя:',
    'form.email' => 'Электронная почта:',
    'form.current_password' => 'Текущий пароль:',
    'form.password' => 'Пароль:',
    'form.password_confirmation' => 'Подтвердите пароль:',
    'form.new_password' => 'Новый пароль:',
    'form.new_password_confirmation' => 'Подтвердите пароль:',
  ),
  'SonataUserBundle' => 
  array (
    'title_user_registration' => 'title_user_registration',
    'title_user_account' => 'User Profile',
    'title_user_edit_profile' => 'Edit',
    'title_user_authentication' => 'Authentication',
    'sonata_user_submit' => 'Submit',
    'breadcrumb.link_user_list' => 'Пользователи',
    'breadcrumb.link_user_create' => 'Создать',
    'breadcrumb.link_user_edit' => 'Редактировать',
    'breadcrumb.link_user_show' => 'Показать',
    'breadcrumb.link_group_list' => 'Группы',
    'breadcrumb.link_group_create' => 'Создать',
    'breadcrumb.link_group_edit' => 'Редактировать',
    'users' => 'Пользователи',
    'groups' => 'Группы',
    'switch_user_exit' => 'Exit impersonating mode',
    'switch_user' => 'Impersonate User',
    'user_block_logout' => 'Выход',
    'form.label_username' => 'Имя пользователя',
    'form.label_email' => 'E-Mail',
    'form.label_plain_password' => 'Открытый пароль',
    'form.label_groups' => 'Группы',
    'form.label_roles' => 'Роли',
    'form.label_locked' => 'Заблокирован',
    'form.label_expired' => 'Просрочен',
    'form.label_enabled' => 'Включен',
    'form.label_credentials_expired' => 'Пароль устарел',
    'form.label_firstname' => 'Имя',
    'form.label_lastname' => 'Фамилия',
    'form.label_name' => 'Имя',
    'filter.label_username' => 'Имя пользователя',
    'filter.label_name' => 'Имя',
    'filter.label_email' => 'E-Mail',
    'filter.label_locked' => 'Заблокирован',
    'filter.label_id' => 'ID',
    'filter.label_firstname' => 'Имя',
    'filter.label_lastname' => 'Фамилия',
    'list.label_username' => 'Имя пользователя',
    'list.label_name' => 'Имя',
    'list.label_email' => 'E-Mail',
    'list.label_groups' => 'Группы',
    'list.label_locked' => 'Заблокирован',
    'list.label_enabled' => 'Активен',
    'list.label_created_at' => 'Дата создания',
    'list.label_impersonating' => 'Impersonate User',
    'list.label_roles' => 'Роли',
    'list.label_firstname' => 'Имя',
    'list.label_lastname' => 'Фамилия',
    'label_two_step_code' => 'label_two_step_code',
    'message_two_step_code_help' => 'message_two_step_code_help',
    'label_two_step_code_error' => 'label_two_step_code_error',
    'sonata_user' => 'Пользователи',
    'General' => 'Основные сведения',
    'Groups' => 'Группы',
    'Management' => 'Управление ролями',
    'Profile' => 'Профиль',
    'Social' => 'Социальные сети',
    'Security' => 'Безопасность',
    'form.label_website' => 'Веб-сайт',
    'form.label_biography' => 'Биография',
    'form.label_gender' => 'Пол',
    'form.label_locale' => 'Локаль',
    'form.label_timezone' => 'Часовой пояс',
    'form.label_phone' => 'Телефон',
    'form.label_facebook_uid' => 'Facebook UID',
    'form.label_facebook_name' => 'Facebook имя',
    'form.label_twitter_uid' => 'Twitter UID',
    'form.label_twitter_name' => 'Twitter имя',
    'form.label_gplus_uid' => 'Google+ UID',
    'form.label_gplus_name' => 'Google+ имя',
    'form.label_token' => 'Ключ доступа',
    'form.label_two_step_verification_code' => 'Ключ двухэтапной аутентификации',
    'show.label_username' => 'Имя пользователя',
    'show.label_email' => 'E-Mail',
    'show.label_groups' => 'Группы',
    'show.label_date_of_birth' => 'Дата рождения',
    'show.label_firstname' => 'Имя',
    'show.label_lastname' => 'Фамилия',
    'show.label_website' => 'Веб-сайт',
    'show.label_biography' => 'Биография',
    'show.label_gender' => 'Пол',
    'show.label_locale' => 'Локаль',
    'show.label_timezone' => 'Часовой пояс',
    'show.label_phone' => 'Телефон',
    'show.label_facebook_uid' => 'Facebook UID',
    'show.label_facebook_name' => 'Facebook имя',
    'show.label_twitter_uid' => 'Twitter UID',
    'show.label_twitter_name' => 'Twitter имя',
    'show.label_gplus_uid' => 'Google+ UID',
    'show.label_gplus_name' => 'Google+ имя',
    'show.label_token' => 'Ключ доступа',
    'show.label_two_step_verification_code' => 'Ключ двухэтапной аутентификации',
    'form.label_date_of_birth' => 'Дата рождения',
    'field.label_roles_editable' => 'Роли',
    'gender_unknown' => 'gender_unknown',
    'gender_female' => 'gender_female',
    'gender_male' => 'gender_male',
    'sonata_profile_title' => 'sonata_profile_title',
    'link_show_profile' => 'link_show_profile',
    'link_edit_profile' => 'link_edit_profile',
    'title_user_edit_authentication' => 'title_user_edit_authentication',
    'link_edit_authentication' => 'link_edit_authentication',
    'label_profile_gender' => 'label_profile_gender',
    'label_profile_firstname' => 'label_profile_firstname',
    'label_profile_lastname' => 'label_profile_lastname',
    'label_profile_website' => 'label_profile_website',
    'label_profile_dob' => 'label_profile_dob',
    'label_profile_biography' => 'label_profile_biography',
    'label_profile_locale' => 'label_profile_locale',
    'label_profile_timezone' => 'label_profile_timezone',
    'label_profile_phone' => 'label_profile_phone',
    'profile.flash.updated' => 'profile.flash.updated',
    'sonata_change_password_link' => 'sonata_change_password_link',
    'link_register' => 'link_register',
    'link_login' => 'link_login',
    'link_logout' => 'link_logout',
    'registration.flash.user_created' => 'registration.flash.user_created',
    'forgotten_password' => 'forgotten_password',
    'sonata_user_profile_breadcrumb_index' => 'sonata_user_profile_breadcrumb_index',
    'sonata_user_profile_breadcrumb_edit' => 'sonata_user_profile_breadcrumb_edit',
    'sonata_user_already_authenticated' => 'You are already logged in',
  ),
));


return $catalogue;