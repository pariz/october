<?php

return [
    'cms_object' => [
        'invalid_file' => "Ошибка в имени файла: :name. Имена файлов могут содержать только латинские буквы, цифры, знаки подчеркивания и точки. Пример правильных имен файлов: page.htm, page, subdirectory/page",
        'invalid_property' => 'Параметр ":name" нельзя изменить.',
        'file_already_exists' => 'Файл ":name" уже существует.',
        'error_saving' => 'Ошибка сохранения файла ":name".',
        'error_creating_directory' => 'Ошибка создания директории :name',
        'invalid_file_extension'=>'Указано неправильное расширение файла: :invalid. Разрешенные расширения: :allowed.',
        'error_deleting' => 'Невозможно удалить файл шаблона :name.',
        'delete_success' => 'Шаблоны были успешно удалены: :count.',
        'file_name_required' => 'Пожалуйста, укажите имя файла шаблона.'
    ],
    'theme' => [
        'active' => [
            'not_set' => "Активная тема не установлена.",
        ],
        'edit' => [
            'not_set' => "Тема для редактирования не установлена.",
            'not_found' => "Тема для редактирования не найдена.",
            'not_match' => "Объект, который вы пытаетесь октрыть, не пренадлежит редактируемой теме. Пожалуйста, обновите страницу."
        ]
    ],
    'page' => [
        'not_found' => [
            'label' => "Страница не найдена",
            'help' => "Запрошенная страница не найдена.",
        ],
        'custom_error' => [
            'label' => "Ошибка на странице",
            'help' => "К сожалению, страница не может быть отображена из-за ошибки.",
        ],
        'menu_label' => 'Страницы',
        'no_list_records' => 'Страницы не найдены',
        'new' => 'Новая страница',
        'invalid_url' => 'Неверный формат адреса. Адрес страницы должен начинаться со знака / и может содержать цифры, латинские буквы, и следующие знаки: _-[]:?|/+*',
        'delete_confirm_multiple' => 'Вы действительно хотите удалить выделенные страницы?',
        'delete_confirm_single' => 'Вы действительно хотите удалить эту страницу?',
        'no_layout' => '-- без шаблона --'
    ],
    'layout' => [
        'not_found' => "Не удалось найти шаблон (layout) с именем :name.",
        'menu_label' => 'Шаблоны',
        'no_list_records' => 'Шаблоны не найдены',
        'new' => 'Новый шаблон',
        'delete_confirm_multiple' => 'Вы действительно хотите удалить выделенные шаблоны?',
        'delete_confirm_single' => 'Вы действительно хотите удалить этот шаблон?'
    ],
    'partial' => [
        'invalid_name' => "Ошибка в имени шаблона (partial) :name.",
        'not_found' => "Не удалось найти шаблон (partial) с именем :name.",
        'menu_label' => 'Фрагменты',
        'no_list_records' => 'Фрагменты не найдены',
        'delete_confirm_multiple' => 'Вы действительно хотите удалить выделенные фрагменты?',
        'delete_confirm_single' => 'Вы действительно хотите удалить этот фрагмент?',
        'new' => 'Новый фрагмент'
    ],
    'content' => [
        'not_found' => "Не удалось найти файл содержимого (content file): ':name'.",
        'menu_label' => 'Содержимое',
        'no_list_records' => 'Файлы с содержимым не найдены',
        'delete_confirm_multiple' => 'Вы действительно хотите удалить выделенные файлы?',
        'delete_confirm_single' => 'Вы действительно хотите удалить этот файл?',
        'new' => 'Новый файл содержимого'
    ],
    'ajax_handler' => [
        'invalid_name' => "Ошибка в имени обработчика AJAX: :name.",
        'not_found' => "Обработчик AJAX не найден: ':name'.",
    ],
    'combiner' => [
        'not_found' => "Сборщик ресурсов не может найти файл ':name'.",
    ],
    'cms' => [
        'menu_label' => "CMS"
    ],
    'sidebar' => [
        'add' => 'Add',
        'search' => 'Search...'
    ],
    'editor' => [
        'settings' => 'Settings',
        'title' => 'Title',
        'new_title' => 'New page title',
        'url' => 'URL',
        'filename' => 'File Name',
        'layout' => 'Layout',
        'description' => 'Description',
        'preview' => 'Preview',
        'meta' => 'Meta',
        'meta_title' => 'Meta Title',
        'meta_description' => 'Meta Description',
        'markup' => 'Markup',
        'code' => 'Code',
        'content' => 'Content',
    ],
    'asset' => [
        'menu_label' => "Ресурсы",
        'drop_down_add_title' => 'Добавить...',
        'drop_down_operation_title' => 'Действие...',
        'upload_files' => 'Загрузить файл(ы)',
        'create_file' => 'Создать файл',
        'create_directory' => 'Создать директорию',
        'rename' => 'Переименовать',
        'delete' => 'Удалить',
        'move' => 'Переместить',
        'new' => 'Новый файл',
        'rename_popup_title' => 'Переименовать',
        'rename_new_name' => 'Новое имя',
        'invalid_path' => 'Путь может содержать только цифры, латинские буквы, пробелы и следующие символы: ._-/',
        'error_deleting_file' => 'Ошибка удаления файла :name.',
        'error_deleting_dir_not_empty' => 'Невозможно удалить директорию :name. Директория содержит файлы или поддиректории.',
        'error_deleting_dir' => 'Ошибка удаления директории :name.',
        'invalid_name' => 'Имя может содержать только цифры, латинские буквы, пробелы и следующие символы: ._-',
        'original_not_found' => 'Оригинальный файл или директория не найдена',
        'already_exists' => 'Файл или директория с таким именем уже существует',
        'error_renaming' => 'Невозможно переименовать файл или директорию',
        'name_cant_be_empty' => 'Имя не может быть пустым',
        'too_large' => 'Загруженный файл слишком велик. Максимальный допустимый размер файла составляет :max_size',
        'type_not_allowed' => 'Разрешены только файлы следующих типов: :allowed_types',
        'file_not_valid' => 'Файл не может быть сохранен',
        'error_uploading_file' => 'Ошибка загрузки файла ":name": :error',
        'move_please_select' => 'пожалуйста, выберите директорию',
        'move_destination' => 'Новая директория',
        'move_popup_title' => 'Переместить файлы',
        'move_button' => 'Переместить',
        'selected_files_not_found' => 'Выбранные файлы не найдены',
        'select_destination_dir' => 'Пожалуйста, выберите директорию',
        'destination_not_found' => 'Конечная директория не найдена',
        'error_moving_file' => 'Не удалось переместить файл :file',
        'error_moving_directory' => 'Не удалось переместить директорию :dir',
        'error_deleting_directory' => 'Не удалось удалить директорию :dir',
        'path' => 'Путь'
    ],
    'component' => [
        'menu_label' => "Компоненты",
        'unnamed' => "Безымянный",
        'no_description' => "Без описания",
        'alias' => "Псевдоним",
        'alias_description' => "Псевдоним компонента определяет его имя, под которым он доступен в коде страницы или шаблона.",
        'validation_message' => "Псевдонимы обязательны и могут содержать только латинские буквы, цифры и знаки подчеркивания. Псевдонимы должны начинаться с латинской буквы.",
        'invalid_request' => "Шаблон не может быть сохранен, так как запрос содержит поврежденную информацию о компоненентах.",
        'no_records' => 'Компоненты не найдены',
        'not_found' => "The component ':name' is not found.",
        'method_not_found' => "The component ':name' does not contain a method ':method'.",
    ],
    'template' => [
        'invalid_type' => "Неизвестный тип шаблона.",
        'not_found' => "Запрошенный шаблон не найден.",
        'saved'=> "Шаблон был успешно сохранен."
    ]
];